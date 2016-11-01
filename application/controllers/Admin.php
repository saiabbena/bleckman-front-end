<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
  public function __construct(){
    parent::__construct();
    $this->load->library('session');
    $_SESSION['Customerid']=1;
	$this->load->helper("url");
	$this->load->helper("get_appearance_settings.php");	
  }

  private function getCustomerLanguages(){
    $data = array(
      'Customerid'=>$_SESSION['Customerid']
    );

    $data_url='?'.http_build_query($data);

    $data_string = json_encode($data);

    $ch = curl_init();

    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
    curl_setopt($ch, CURLOPT_URL, "http://api.bleckmann.apoyar.eu/api/CustomerLanguage/GetCustomerLanguagebyId".$data_url);
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
    curl_setopt($ch, CURLOPT_URL, "http://api.bleckmann.apoyar.eu/api/ReturnReason/GetAllReturnReasonsbyCustomerid".$data_url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    // Send the request
    $result = json_decode(curl_exec($ch), true);

    // Free up the resources $curl is using
    curl_close($ch);

    return $result;
  }
  private function getCustomerAppearanceSettings(){
	  $data = array('Customerid'=>$_SESSION['Customerid']);
	  $data_url='?'.http_build_query($data);
	  $data_string = json_encode($data);
	  $ch = curl_init();

	  curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
	  curl_setopt($ch, CURLOPT_URL, "http://api.bleckmann.apoyar.eu/api/CustomerSetting/GetCustomerFeaturesbyId".$data_url);
	  //curl_setopt($ch, CURLOPT_URL, "http://128.0.210.62/bleckmannapi/Api/CustomerSetting/GetCustomerFeaturesbyId".$data_url);
	  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

	  // Send the request
	  $result = json_decode(curl_exec($ch), true);
	  // Free up the resources $curl is using
	  curl_close($ch);

	  return $result;	  
	  
  }
  public function settings(){ 
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
    if(isset($_SESSION['message'])){
      unset($_SESSION['message']);
    }
  }
  public function appearance(){
	  
	  $data['appearanceSettings'] = $this->getCustomerAppearanceSettings();
	  $customer_id = $_SESSION['Customerid'];
	  
	  //Remove in live
	  //$data['logo'] = 'http://128.0.210.62/bleckmannapi/images/'.$customer_id.'/logo/logo.png';
	  //$data['spacer'] = 'http://128.0.210.62/bleckmannapi/images/'.$customer_id.'/spacer/spacer.png';
	  //$data['loading'] = 'http://128.0.210.62/bleckmannapi/images/'.$customer_id.'/loading/loading.gif';
	  
	  //Use in Live
	  /**/
	  $data['logo'] = 'http://api.bleckmann.apoyar.eu/images/'.$customer_id.'/logo/logo.png';
	  $data['spacer'] = 'http://api.bleckmann.apoyar.eu/images/'.$customer_id.'/spacer/spacer.png';
	  $data['loading'] = 'http://api.bleckmann.apoyar.eu/images/'.$customer_id.'/loading/loading.gif';
	  
	  
	  $this->load->view('admin/templates/appearance_header');
	  $this->load->view('admin/appearance', $data);
	  $this->load->view('admin/templates/footer');	  
  }
  public function submitReturnReasons(){
    header('Content-Type: application/json');
    //echo json_encode($_POST);exit();
	//print_r($_POST['ReturnReasons']);exit();
    //echo json_encode($_POST);
	//echo http_build_query($_POST['ReturnReasons']);exit();
    //
    //

    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL,"http://api.bleckmann.apoyar.eu/api/ReturnReason/PostManageReturnReason");
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query(['ReturnReasons'=>$_POST['ReturnReasons']]));    
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $server_output = curl_exec ($ch);

    curl_close ($ch);

    echo json_encode($server_output);

    $_SESSION['message']['rr']='Saved';

    header('Location: ' . $_SERVER['HTTP_REFERER'].'#rr-panel');
  }
  public function save_appearance_settings(){
	  header('Content-Type: application/json');
	  $post_data = ['PKSettingID'=>$_POST['CustomerSetting']['PKSettingID'],
	  'FKCustomerid'=>$_POST['CustomerSetting']['FKCustomerid'],
	  'Colours'=>serialize($_POST['CustomerSetting']['Colours'])];
	  
	  $ch = curl_init();
	  curl_setopt($ch, CURLOPT_URL,"http://api.bleckmann.apoyar.eu/api/CustomerSetting/PostManageCustomerSetting");	
	  //curl_setopt($ch, CURLOPT_URL,"http://128.0.210.62/bleckmannapi/Api/CustomerSetting/PostManageCustomerSetting");	
	  
	  curl_setopt($ch, CURLOPT_POST, 1);
	  curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($post_data));
	  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	  $server_output = curl_exec ($ch);
	  curl_close ($ch);
	  
	  //echo json_encode($server_output);exit();
	  $_SESSION['message']['appearance']='Saved';
	  header('Location: ' . $_SERVER['HTTP_REFERER'].'#ap-panel');
  }
  public function submitLanguages(){
    header('Content-Type: application/json');
    //echo json_encode($_POST);

    foreach ($_POST['Languages'] as $key => $value) {
      $_POST['Languages'][$key]['Isdefault']="false";
      if($_POST['Languages'][$key]['LanguageName']==$_POST['DefaultLanguage']){
        $_POST['Languages'][$key]['Isdefault']="true";
      }
      foreach ($key as $k => $v) {
        unset($v['Links']);
      }
    }

    echo json_encode($_POST['Languages']);

    //
    //

    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL,"http://api.bleckmann.apoyar.eu/api/CustomerLanguage/PostManageCustomerLanguage");
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
  public function submitLinks() {
    header('Content-Type: application/json');
    
    #echo json_encode($_POST) . "\r\n";
    $newlinks=[];
    $post_data = $_POST['link'];

    $customerLanguages=$this->getCustomerLanguages();
    for( $i=0;$i<count($customerLanguages);$i++ ) {
      $str = '{"';
      foreach($post_data as $key => $value) {
        if ( $value[$customerLanguages[$i]['LanguageName']] && $value['LinkVal'] ) {
          $str = $str . $value[$customerLanguages[$i]['LanguageName']] . '":"' . $value['LinkVal'] . '","';
        }
      }

      $str = $str . '"}';
      $str = str_replace(',""}', '}', $str);
      echo "str : " . $str . "\r\n";
      array_push( $newlinks, ["Customerid"=>$customerLanguages[$i]['Customerid'], 
                            "FkLanguageid" => $customerLanguages[$i]['FkLanguageid'],
                            "PKCustomerLanguageID"=>$customerLanguages[$i]['PKCustomerLanguageID'] ,
                            "Links"=> $str]);
    }
    echo "newlinks - " . json_encode(array("CustomerLanguages" => $newlinks));
    $ch = curl_init();

    #curl_setopt($ch, CURLOPT_URL,"http://128.0.210.62/bleckmannapi/api/CustomerLanguage/PostManageLinks");
    curl_setopt($ch, CURLOPT_URL,"http://api.bleckmann.apoyar.eu/api/CustomerLanguage/PostManageLinks");
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS,
                http_build_query(['CustomerLanguages'=>$newlinks]));

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $server_output = curl_exec ($ch);

    curl_close ($ch);

    echo json_encode($server_output);
    $_SESSION['message']['links']='Saved';

    echo var_dump($_SESSION['message']);

    header('Location: ' . $_SERVER['HTTP_REFERER'].'#links-panel');
  }
public function deleteLinks() {
    header('Content-Type: application/json');
    
    $newlinks=[];
    $post_data = $_POST['link'];

    echo "post_data : " . json_encode($post_data) . "\r\n";
    echo 'en test :  '. '"' . $post_data['English'] . '"' . "\r\n";


    $customerLanguages=$this->getCustomerLanguages();
    for( $i=0;$i<count($customerLanguages);$i++ ) {
      $del_str = $post_data[$customerLanguages[$i]['LanguageName']];
    $del_str = str_replace('$&*#', '":"', $del_str);
    $del_str = '"' . $del_str . '"';
      echo "del_str : " . $del_str . "\r\n";
      $str = $customerLanguages[$i]['Links'];

      echo "str : " . $str . "\r\n";
      $str = str_replace($del_str, '', $str );
      $str = str_replace(',,', ',', $str );
      $str = str_replace('{,', '{', $str );
      $str = str_replace(',}', '}', $str );
      echo "new str : " . $str . "\r\n" . "\r\n";

      array_push( $newlinks, ["Customerid"=>$customerLanguages[$i]['Customerid'], 
                            "FkLanguageid" => $customerLanguages[$i]['FkLanguageid'],
                            "PKCustomerLanguageID"=>$customerLanguages[$i]['PKCustomerLanguageID'] ,
                            "Links"=> $str]);
    }
    echo "newlinks - " . json_encode(array("CustomerLanguages" => $newlinks));


    $ch = curl_init();

    #curl_setopt($ch, CURLOPT_URL,"http://128.0.210.62/bleckmannapi/api/CustomerLanguage/PostManageLinks");
    curl_setopt($ch, CURLOPT_URL,"http://api.bleckmann.apoyar.eu/api/CustomerLanguage/PostManageLinks");
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS,
                http_build_query(['CustomerLanguages'=>$newlinks]));

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $server_output = curl_exec ($ch);

    curl_close ($ch);

    echo json_encode($server_output);
    $_SESSION['message']['links']='Saved';

    echo var_dump($_SESSION['message']);

    header('Location: ' . $_SERVER['HTTP_REFERER'].'#links-panel');
  }
  public function postComment() {
    header('Content-Type: application/json');
    echo "in php : ". "\r\n";
    echo json_encode($_POST) . "\r\n";
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL,"http://api.bleckmann.apoyar.eu/api/Returnorder/PostUpdateReturnorderComment");
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($_POST));

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $server_output = curl_exec ($ch);

    curl_close ($ch);

    echo json_encode($server_output);
    $_SESSION['message']['orders-messages']='Comment Saved';

    echo var_dump($_SESSION['message']);

    header('Location: ' . $_SERVER['HTTP_REFERER'].'#orders-messages');

  }
  public function debug() {
    foreach ($_POST['Languages'] as $key => $value) {
      $_POST['Languages'][$key]['Isdefault']="false";
      if($_POST['Languages'][$key]['LanguageName']==$_POST['DefaultLanguage']){
        $_POST['Languages'][$key]['Isdefault']="true";
      }
      echo "value : " . json_encode($value);
      // foreach ($key as $k => $v) {
      //   #unset($v['Links']);
      //   echo ", string : " $key;
      // }
    }
    echo var_dump($_POST);

    header('Content-Type: application/json');
  }
  function change_appearance_img($param1='') {
	  //header('Content-Type: application/json');	  
	  $PKSettingID = $_POST['PKSettingID'];
	  $customerid = $_POST['FKCustomerid'];
	  $image_type = $_POST['img_type'];
	  $img_file_tmp = $_FILES['img_file']['tmp_name'];
	  $img_file_name = $_FILES['img_file']['name'];
	  $img_file_type = $_FILES['img_file']['type'];
	  $img_file_size = $_FILES['img_file']['size'];
	  
	  //print_r($_FILES);exit();	  
	  $cfile = new CURLFile($img_file_tmp, $img_file_type, $image_type);
	  $data = array('test_file' => $cfile);
	  
	  $ch = curl_init();	  	
	  //curl_setopt($ch, CURLOPT_URL,"http://128.0.210.62/bleckmannapi/api/customersetting/PostUploadLoading?customerid=$customerid");
	  curl_setopt($ch, CURLOPT_URL,"http://api.bleckmann.apoyar.eu/api/customersetting/PostUploadLoading?customerid=$customerid");	  
	  
	  curl_setopt($ch, CURLOPT_POST, 1);
	  curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	  $server_output = curl_exec ($ch);
	  curl_close ($ch);
	  echo json_encode($server_output);
	  //echo 'Success';
	  
}
}
