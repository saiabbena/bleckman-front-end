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
    curl_setopt($ch, CURLOPT_URL, "http://returns.dev.apoyar.eu/api/CustomerLanguage/GetCustomerLanguagebyId".$data_url);
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
    curl_setopt($ch, CURLOPT_URL, "http://returns.dev.apoyar.eu/api/ReturnReason/GetAllReturnReasonsbyCustomerid".$data_url);
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

    curl_setopt($ch, CURLOPT_URL,"http://returns.dev.apoyar.eu/api/ReturnReason/PostManageReturnReason");
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

    curl_setopt($ch, CURLOPT_URL,"http://returns.dev.apoyar.eu/api/CustomerLanguage/PostManageCustomerLanguage");
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
    curl_setopt($ch, CURLOPT_URL,"http://returns.dev.apoyar.eu/api/CustomerLanguage/PostManageLinks");
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
    curl_setopt($ch, CURLOPT_URL,"http://returns.dev.apoyar.eu/api/CustomerLanguage/PostManageLinks");
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
  public function debug() {
    header('Content-Type: application/json');
  }
}
