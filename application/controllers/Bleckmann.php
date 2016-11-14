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
  	$data['allUsers'] = $this->httpRequests->httpGet('User/GetAllActiveUsers', '');
  	$data['allRoles'] = $this->httpRequests->httpGet('Role/GetAllActiveRoles', '');
    $this->load->view('Bleckmann/templates/header');
    $this->load->view('Bleckmann/users', $data);
    $this->load->view('Bleckmann/templates/footer');
    if(isset($_SESSION['message'])){
      unset($_SESSION['message']);
    }
  }
  public function roles() {
  	$data['allRoles'] = $this->httpRequests->httpGet('Role/GetAllActiveRoles', '');
    $this->load->view('Bleckmann/templates/header');
    $this->load->view('Bleckmann/roles', $data);
    $this->load->view('Bleckmann/templates/footer');
    if(isset($_SESSION['message'])){
      unset($_SESSION['message']);
    }
  }
  public function submitRoles() {
  	//echo "submitRoles : ";
  	//echo json_encode($_POST);
  	for($i=0;$i<count($_POST['Roles']);$i++) {
  		if ($_POST['Roles'][$i]['IsActive'] == 1) {
  			$_POST['Roles'][$i]['IsActive'] = "true";
  		}
  	}
  	//echo json_encode($_POST);exit();

  	$server_output = $this->httpRequests->httpPost('Role/PostManageRole', json_encode($_POST) );

    echo json_encode($server_output);
    $_SESSION['message']['roles_panel']='Roles Information Saved';

    echo var_dump($_SESSION['message']);

    header('Location: ' . $_SERVER['HTTP_REFERER'].'#roles_panel');

  }
  public function submitUserInfo() {
  	//print_r($_POST);
  	$server_output = $this->httpRequests->httpPost('User/PostManageUser', json_encode($_POST) );
    echo json_encode($server_output);
    $_SESSION['message']['user_panel']='User Information Saved';
    echo var_dump($_SESSION['message']);
    header('Location: ' . $_SERVER['HTTP_REFERER'].'#user_panel');
  }
  public function deleteUser() {
  	
  	$_POST['IsActive'] = 'false';
	//print_r($_POST);
  	$server_output = $this->httpRequests->httpPost('User/PostIsActiveUser', json_encode($_POST) );
    echo json_encode($server_output);
    $_SESSION['message']['user_panel']='User Deleted';
    echo var_dump($_SESSION['message']);
    header('Location: ' . $_SERVER['HTTP_REFERER'].'#user_panel');
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
  public function carriers($param1='', $param2='') {	  
  	//print_r($_SESSION);exit();
	//echo $param1;exit();
	$data = array();
	if($param1 == 'searchbyCID'){			
		$req = array(
			'Customerid'=>$param2
		);
		//http://returns.dev.apoyar.eu/api/Carrier/GetAllCarriersbyCustomerid?Customerid=1
		$data['carriers'] = $this->httpRequests->httpGet('Carrier/GetAllCarriersbyCustomerid', $req);
		$data['Customerid'] = $param2;
	}
	if($param1 == 'submitCarrierInfo'){
		//print_r($_POST);exit();
		if(count($_POST)){
			 //print_r($_POST);exit();
			 header('Content-Type: application/json');
			 //Array ( [0] => Array ( [PKCarrierID] => 1 [CarrierName] => Royal Mail [APIUserName] => dtdc [APIPassword] => ap0yar [APIKey] => dtdc [APIURL] => dtdc.com [FKCustomerID] => 1 [ConsumerCountryName] => Belgium [Isactive] => 1 [LabelAPI] => [AnnounceAPI] => [TrackTraceURL] => ) )
			$server_output = $this->httpRequests->httpPost('Carrier/PostManageCarrier', json_encode($_POST));	  
			//echo json_encode($server_output);exit();
			$_SESSION['message']['carrier_panel']='Carrier Information Saved';
			redirect(base_url() . 'index.php/Bleckmann/carriers/searchbyCID/'.$_POST['FKCustomerID']);
					 
		}
	}
	if($param1 == 'deleteCarrier'){
		//print_r($_POST);exit();
		$server_output = $this->httpRequests->httpPost('Carrier/PostIsActiveCarrier', json_encode($_POST) );

		//echo json_encode($server_output);exit();
		$_SESSION['message']['carrier_panel']='Carrier Deleted Successfully';
		redirect(base_url() . 'index.php/Bleckmann/carriers/searchbyCID/'.$_POST['FKCustomerID']);
		
	}
	//$data['carriers'] = $this->httpRequests->httpGet('Carrier/GetAllActiveCarriers', '');
	//$data['Customerid'] = '';	   
	$this->load->view('Bleckmann/templates/header');
    $this->load->view('Bleckmann/carriers', $data);
    $this->load->view('Bleckmann/templates/footer');

    if(isset($_SESSION['message'])){
      unset($_SESSION['message']);
    }
  }
  
   
}
?>