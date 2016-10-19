<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
  public function __construct(){
    parent::__construct();
    $this->load->library('session');
    $_SESSION['Customerid']=1;
	$this->load->helper("url");
  }

  private function getCustomerLanguages(){
    $data = array(
      'Customerid'=>$_SESSION['Customerid']
    );

    $data_url='?'.http_build_query($data);

    $data_string = json_encode($data);

    $ch = curl_init();

    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
    curl_setopt($ch, CURLOPT_URL, "http://ws.developer.bleckmann.apoyaretail.com/api/CustomerLanguage/GetCustomerLanguagebyId".$data_url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    // Send the request
    $result = json_decode(curl_exec($ch), true);

    // Free up the resources $curl is using
    curl_close($ch);

    return $result;
  }
  private function getCustomerReturnReasons(){
    $data = array(
      'Customerid'=>$_SESSION['Customerid']
    );

    $data_url='?'.http_build_query($data);

    $data_string = json_encode($data);

    $ch = curl_init();

    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
    curl_setopt($ch, CURLOPT_URL, "http://ws.developer.bleckmann.apoyaretail.com/api/ReturnReason/GetAllReturnReasonsbyCustomerid".$data_url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    // Send the request
    $result = json_decode(curl_exec($ch), true);

    // Free up the resources $curl is using
    curl_close($ch);

    return $result;
  }
  public function settings()
  { 
    $data['customerLanguages']=$this->getCustomerLanguages();

    $data['returnReasons']=$this->getCustomerReturnReasons();

    $this->load->view('admin/templates/settings_header');
    $this->load->view('admin/settings', $data);
    $this->load->view('admin/templates/footer');

    if(isset($_SESSION['message'])){
      unset($_SESSION['message']);
    }
  }
  public function orders(){
    $this->load->view('admin/templates/orders_header');
    $this->load->view('admin/orders');
    $this->load->view('admin/templates/footer');
  }
  public function appearance(){
    $this->load->view('admin/templates/appearance_header');
    $this->load->view('admin/appearance');
    $this->load->view('admin/templates/footer');
  }
  public function submitReturnReasons(){
    header('Content-Type: application/json');
    //echo json_encode($_POST);

    echo json_encode($_POST);

    //
    //

    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL,"http://ws.developer.bleckmann.apoyaretail.com/api/ReturnReason/PostManageReturnReason");
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS,
                http_build_query(['ReturnReasons'=>$_POST['ReturnReasons']]));

    
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $server_output = curl_exec ($ch);

    curl_close ($ch);

    echo json_encode($server_output);

    $_SESSION['message']['rr']='Saved';

    header('Location: ' . $_SERVER['HTTP_REFERER'].'#rr-panel');
  }
  public function submitLanguages(){
    header('Content-Type: application/json');
    //echo json_encode($_POST);

    foreach ($_POST['Languages'] as $key => $value) {
      $_POST['Languages'][$key]['Isdefault']="false";
      if($_POST['Languages'][$key]['LanguageName']==$_POST['DefaultLanguage']){
        $_POST['Languages'][$key]['Isdefault']="true";
      }
    }
    echo json_encode($_POST['Languages']);

    //
    //

    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL,"http://ws.developer.bleckmann.apoyaretail.com/api/CustomerLanguage/PostManageCustomerLanguage");
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS,
                http_build_query(['CustomerLanguages'=>$_POST['Languages']]));

    
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $server_output = curl_exec ($ch);

    curl_close ($ch);

    echo json_encode($server_output);

    $_SESSION['message']['languages']='Saved';

    echo var_dump($_SESSION['message']);

    header('Location: ' . $_SERVER['HTTP_REFERER'].'#language-panel');

  }
  public function debug(){
    header('Content-Type: application/json');
    echo json_encode($_POST);
  }
}
