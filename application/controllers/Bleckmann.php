<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bleckmann extends CI_Controller {
  public function __construct(){
    parent::__construct();
    $this->load->library('session');
    $_SESSION['Apoyar'] = 123;
  	$this->load->helper("url");
    $this->load->model('httpRequests');
    if ( $this->uri->segment(2) != 'login' && $this->uri->segment(2) != 'loginSubmit') {
      if(!isset($_SESSION['Apoyar'])) {
        redirect('admin/login');
      }
    }
  }
  public function customers() {
  	$data['allCustomers'] = $this->httpRequests->httpGet('Customer/GetAllActiveCustomers', '');

  	//print_r($data['allCustomers']);
    $this->load->view('Bleckmann/templates/header');
    $this->load->view('Bleckmann/customers', $data);
    $this->load->view('Bleckmann/templates/footer');
    
    if(isset($_SESSION['message'])){
      unset($_SESSION['message']);
    }
  }
  public function users() {
  	//print_r($_SESSION);exit();
	
	$data['allUsers'] = $this->httpRequests->httpGet('User/GetAllActiveUsers', '');
  	$data['allRoles'] = $this->httpRequests->httpGet('Role/GetAllActiveRoles', '');

    $this->load->view('Bleckmann/templates/header');
    $this->load->view('Bleckmann/users', $data);
    $this->load->view('Bleckmann/templates/footer');

    if(isset($_SESSION['message'])){
      unset($_SESSION['message']);
    }
  }
  public function carriers() {	  
  	//print_r($_SESSION);exit();
	$data['all_carriers'] = $this->httpRequests->httpGet('Carrier/GetAllActiveCarriers', '');;
    $this->load->view('Bleckmann/templates/header');
    $this->load->view('Bleckmann/carriers', $data);
    $this->load->view('Bleckmann/templates/footer');

    if(isset($_SESSION['message'])){
      unset($_SESSION['message']);
    }
  }
  public function submitCarrierInfo(){
	 if(count($_POST)){
		 //print_r($_POST);exit();
		 header('Content-Type: application/json');
		 //Array ( [0] => Array ( [PKCarrierID] => 1 [CarrierName] => Royal Mail [APIUserName] => dtdc [APIPassword] => ap0yar [APIKey] => dtdc [APIURL] => dtdc.com [FKCustomerID] => 1 [ConsumerCountryName] => Belgium [Isactive] => 1 [LabelAPI] => [AnnounceAPI] => [TrackTraceURL] => ) )
		$server_output = $this->httpRequests->httpPost('Carrier/PostManageCarrier', json_encode($_POST));	  
	    //echo json_encode($server_output);exit();
	    $_SESSION['message']['carrier_panel']='Carrier Information Saved';
	    header('Location: ' . $_SERVER['HTTP_REFERER'].'#carrier_panel');		 
	 }
	  
  }
   public function deleteCarrier(){
  	//print_r($_POST);exit();
  	$server_output = $this->httpRequests->httpPost('Carrier/PostIsActiveCarrier', json_encode($_POST) );

    //echo json_encode($server_output);exit();
    $_SESSION['message']['carrier_panel']='Carrier Deleted';
    //echo var_dump($_SESSION['message']);
    header('Location: ' . $_SERVER['HTTP_REFERER'].'#carrier_panel');
  }
  public function submitCustomerInfo() {
  	//print_r($_POST);
  	$server_output = $this->httpRequests->httpPost('Customer/PostManageCustomer', json_encode($_POST) );

    echo json_encode($server_output);
    $_SESSION['message']['customer_panel']='Customer Information Saved';

    echo var_dump($_SESSION['message']);

    header('Location: ' . $_SERVER['HTTP_REFERER'].'#customer_panel');
  }
  public function deleteCustomer() {
  	//print_r($_POST);
  	$server_output = $this->httpRequests->httpPost('Customer/PostDeleteCustomer', json_encode($_POST) );

    echo json_encode($server_output);
    $_SESSION['message']['customer_panel']='Customer Deleted';

    echo var_dump($_SESSION['message']);

    header('Location: ' . $_SERVER['HTTP_REFERER'].'#customer_panel');
  }
}
?>