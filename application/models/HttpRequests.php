<?php

Class HttpRequests extends CI_Model {
	public function __construct(){
	    parent::__construct();
	    $this->load->library('session');		
		$this->apoyarurl = 'ApoyarUrl: ' . SECURE_APOYAR_URL;
	}

	public function httpPost_Login($api_url, $data) {
	    $ch = curl_init();
	    $_SESSION['Apoyar'] = '';

	    $url = API_BASE_URL_BE . "api/" . $api_url;

	    curl_setopt($ch, CURLOPT_URL, $url);
	    curl_setopt($ch, CURLOPT_POST, 1);
	    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	    curl_setopt($ch, CURLOPT_HEADER, 1);
		curl_setopt($ch, CURLOPT_HTTPHEADER, array($this->apoyarurl));
	    // echo "sending request........" . "\r\n";
	    $response = curl_exec($ch);
		$header_size = curl_getinfo($ch, CURLINFO_HEADER_SIZE);
		// echo "header_size : " . $header_size;
		$body = substr($response, $header_size);

	    $headers = $this->get_headers_from_curl_response($response);

	    $json_body = json_decode($body,true);

	    if ( ($json_body['Status'] == 1) && ($json_body['Userid'] > 0) ) {
	    	$_SESSION['Apoyar']=$headers['Apoyar'];
	    	$_SESSION['Userid']=$json_body['Userid'];
	    	$_SESSION['Customerid']=$json_body['Customerid'];
	    	$_SESSION['Roleid']=$json_body['Roleid'];
	    	$_SESSION['BMRoleid']=$json_body['BMRoleid'];
	    	$_SESSION['Customername']=$json_body['Name']; // TODO : At the moment, messages returning the customer name.
	    }
	    curl_close($ch);
	    return $json_body;
	}
	public function httpGet($api_url, $data) {
	  	$ch = curl_init();
	  	$data_url='';
	  	$url = API_BASE_URL_BE . "api/" . $api_url;
	  	if ($data) {
			$data_url='?'.http_build_query($data);
		}
	  	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
	  	curl_setopt($ch, CURLOPT_URL, $url.$data_url);
	  	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	  	curl_setopt($ch, CURLOPT_HTTPHEADER, array('Apoyar: ' . $_SESSION['Apoyar'],$this->apoyarurl));
	  	// Send the request
	  	$result = json_decode(curl_exec($ch), true);
		
	  	// Free up the resources $curl is using
	  	curl_close($ch);
	    return $result;
	}

	public function httpPost($api_url, $data) {
		header('Content-Type: application/json');
	    $ch = curl_init();

	    $url = API_BASE_URL_BE . "api/" . $api_url;

	    //echo "data in httpPost : " . $data . "\r\n";
	    //echo "token in httpPost : " . $_SESSION['Apoyar'] . "\r\n";

	    curl_setopt($ch, CURLOPT_URL, $url);
	    curl_setopt($ch, CURLOPT_HTTPHEADER, array("cache-control: no-cache", "content-type: application/json", 'Apoyar: ' . $_SESSION['Apoyar'],$this->apoyarurl));
	    curl_setopt($ch, CURLOPT_POST, 1);
	    
	    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	    
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

	    $response = curl_exec($ch);
	    curl_close($ch);
	    $json_body = json_decode($response,true);
	    //echo " httpPost response : " . $response;
	    // echo " json_body : " . json_encode($json_body);
	    // echo " Status in HttpRequests : " . $json_body['Status'];
	    return $json_body;
	}
	public function httpPostUpload($api_url, $data) {
		//to be used for file uploads
	    $ch = curl_init();

	    $url = API_BASE_URL_BE . "api/" . $api_url;

	    echo "data in httpPost : " . $data . "\r\n";

	    curl_setopt($ch, CURLOPT_URL, $url);
	    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Apoyar: ' . $_SESSION['Apoyar'], $this->apoyarurl));
	    curl_setopt($ch, CURLOPT_POST, 1);
	    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

	    $response = curl_exec($ch);
	    curl_close($ch);
	    return $response;
	}

	private function get_headers_from_curl_response($response) {
	    $headers = array();

	    $header_text = substr($response, 0, strpos($response, "\r\n\r\n"));

	    foreach (explode("\r\n", $header_text) as $i => $line) {
	    	
	        if ($i === 0) {
	            $headers['http_code'] = $line;
	        } else {
	            list ($key, $value) = explode(': ', $line);

	            $headers[$key] = $value;
	        }
	    }
	    return $headers;
	}

}
?>