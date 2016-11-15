<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends CI_Controller {
  public function __construct(){
    parent::__construct();
    $this->load->library('session');
  	$this->load->helper("url");
    $this->load->model('httpRequests');
    // if ( $this->uri->segment(2) != 'login' && $this->uri->segment(2) != 'loginSubmit') {
    //   if(!isset($_SESSION['Apoyar'])) {
    //     redirect('admin/login');
    //   }
    // }
  }
  function index() {
    $this->load->view('login/templates/header');
    $this->load->view('login/login');
    $this->load->view('login/templates/footer');
    if(isset($_SESSION['message'])){
      unset($_SESSION['message']);
    }
  }
  public function logout() {
    $response = $this->httpRequests->httpPost('User/PostLogout', '' );
      print_r($_SESSION);
      $_SESSION = Array();
      print_r($_SESSION);
      redirect(base_url() . 'index.php/login');
    
  }
  public function Submit() {
    header('Content-Type: application/json');

    $post_data = http_build_query(['Username'=>$_POST['Username'], 'Password'=>$_POST['Password']]);
    echo "post_data : " . json_encode($post_data);
    $response = $this->httpRequests->httpPost_Login('User/PostLogin', $post_data );

//    echo " response : " . $response;exit();
    if ( $response['Userid'] > 0 && $_SESSION['Apoyar'] ) {
      if ( $response['Roleid'] == 100 ) { // Customer
        redirect(base_url() . 'index.php/admin/orders');
      } else if ( $response['Roleid'] == 99  ) { // Bleckmann User
        redirect(base_url() . 'index.php/Bleckmann/customers');
      }
    } else {
      $_SESSION['message']['screen1-error']='Please provide valid credentials to login';

      echo var_dump($_SESSION['message']);

      header('Location: ' . $_SERVER['HTTP_REFERER'].'#screen1-error');
    }
  }
}

?>