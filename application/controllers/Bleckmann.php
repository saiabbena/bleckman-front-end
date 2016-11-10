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
}
?>