<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
  public function __construct(){
    parent::__construct();
    $this->load->library('unit_test');
	  $this->load->library('session');
    //$_SESSION['Customerid']=1;
  	$this->load->helper("url");
  	//$this->load->helper("get_appearance_settings.php");	
    $this->load->model('httpRequests');
    if ( $this->uri->segment(2) == 'login' ) {
      redirect('/login');
    }
    $req = array(
      'Customerid'=>$_SESSION['Customerid']
    );  
    $customer_details = $this->httpRequests->httpGet('Customer/GetActiveCustomerbyId', $req );
    $_SESSION['Customername'] = $customer_details['CustomerName'];
    
    if ( isset($_SESSION['Apoyar']) && $_SESSION['Roleid'] == 99 && $_SESSION['BMRoleid'] == 1 ) {
      redirect('bleckmann/customers');
    }
    $this->customerOpModes = $this->httpRequests->httpGet('operation/GetOperationsbyCustomerid', $req );
    if ( $this->uri->segment(2) != 'login' && $this->uri->segment(2) != 'loginSubmit') {
      if( (!isset($_SESSION['Apoyar'])) || ($_SESSION['Apoyar'] == '')) {
        redirect('/login');
      }
    }
	//$this->unit->run($test, $expected_result, $test_name);
	//$this->unit->run($this->sum(5,5),12,'Testing Sum function');
	//$this->unit->run($this->customers(),'','Testing customers function');
	//print_r($this->unit->result());
	//$this->unit->use_strict(TRUE);	
	//print_r($this->unit->report());	
	//exit();
  } 
  private function getCustomerLanguages(){
    $data = array( 'Customerid'=>$_SESSION['Customerid']);

    $data_url='?'.http_build_query($data);

    $data_string = json_encode($data);

    $ch = curl_init();

    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
    curl_setopt($ch, CURLOPT_URL, API_BASE_URL_BE."api/CustomerLanguage/GetCustomerLanguagebyId".$data_url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    // Send the request
    $result = json_decode(curl_exec($ch), true);

    // Free up the resources $curl is using
    curl_close($ch);

    return $result;
  }
  private function getTranslations(){

    $data = array(
      'Customerid'=>$_SESSION['Customerid']
    );

    $data_url='?'.http_build_query($data);

    $data_string = json_encode($data);

    $ch = curl_init();

    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
    curl_setopt($ch, CURLOPT_URL, API_BASE_URL_BE."api/Translation/GetAllTranslationsbyCustomerid".$data_url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    // Send the request
    $result = json_decode(curl_exec($ch), true);

    // Free up the resources $curl is using
    curl_close($ch);
    
    return $result;
  }
  public function settings(){
  	$req = array(
        'Customerid'=>$_SESSION['Customerid']
      );
    
    $data['customerLanguages'] = $this->httpRequests->httpGet('CustomerLanguage/GetCustomerLanguagebyId', $req);
    $data['returnReasons'] = $this->httpRequests->httpGet('ReturnReason/GetAllReturnReasonsbyCustomerid', $req);

    $this->load->view('admin/templates/adm_header');
    $this->load->view('admin/settings', $data);
    $this->load->view('admin/templates/footer');

    if(isset($_SESSION['message'])){
      unset($_SESSION['message']);
    }
  }
  public function orders(){
	  $customer_id = $_SESSION['Customerid'];	  
	  $data = array('customer_id'=>$customer_id);
    $this->load->view('admin/templates/adm_header');	
    $this->load->view('admin/orders');
    $this->load->view('admin/templates/footer');
    if(isset($_SESSION['message'])){
      unset($_SESSION['message']);
    }
  }

  public function appearance(){
	  
	//$data['appearanceSettings'] = $this->getCustomerAppearanceSettings();
    $req = array(
      'Customerid'=>$_SESSION['Customerid']
    );

    $data['appearanceSettings'] = $this->httpRequests->httpGet('CustomerSetting/GetCustomerFeaturesbyId', $req);
	//print_r($data['appearanceSettings']);
	
	  $customer_id = $_SESSION['Customerid'];

	  $data2 = array('Customerid'=>$customer_id);
	  $data_url='?'.http_build_query($data2);
	  $data_string = json_encode($data2);
	  $ch = curl_init();

	  curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
	  curl_setopt($ch, CURLOPT_URL, API_BASE_URL_BE."Api/CustomerSetting/GetCustomerFeaturesbyId".$data_url);
	  //curl_setopt($ch, CURLOPT_URL, "http://128.0.210.62/bleckmannapi/Api/CustomerSetting/GetCustomerFeaturesbyId".$data_url);
	  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

	  // Send the request
	  $result = json_decode(curl_exec($ch), true);
	  // Free up the resources $curl is using
	  curl_close($ch);
	  $appearanceSettings = $result;
	  
		  $appearanceSettings = $data['appearanceSettings'];
		  $serialize_appearance = @unserialize($appearanceSettings['CustomerSetting']['Colours']);
		  //print_r($serialize_appearance) ;exit();
		  if(!is_array($serialize_appearance)){
				  $header_color='#625454';
				  $menu_bg = '#1C1818';
				  $menu_font ='#FFFFFF';
				  $dd_bg = '#CC1543';
				  $dd_font ='#ffffff';
				  $accent_1 = '#CC1543';
				  $accent_2 = '#E25176';
		  }else{		  
			  $Colors = json_encode($serialize_appearance);
			  $Colors = json_decode($Colors);			
				if(count($Colors)>0){
					foreach($Colors as $result){						
						$header_color = (isset($Colors->Header))?$Colors->Header:'';
						$menu_bg = (isset($Colors->Menu[0]))?$Colors->Menu[0]:'';
						$menu_font = (isset($Colors->Menu[1]))?$Colors->Menu[1]:'';					
						$dd_bg = (isset($Colors->Dropdown[0]))?$Colors->Dropdown[0]:'';
						$dd_font = (isset($Colors->Dropdown[1]))?$Colors->Dropdown[1]:'';
						$accent_1 = (isset($Colors->Accent[0]))?$Colors->Accent[0]:'';
						$accent_2 = (isset($Colors->Accent[1]))?$Colors->Accent[1]:'';
					}
				
				}
		}
		$data['header_color'] = $header_color;
		$data['menu_bg'] = $menu_bg;
		$data['menu_font'] = $menu_font;
		$data['accent_1'] = $accent_1;
		$data['accent_2'] = $accent_2;
		$data['dd_bg'] = $dd_bg;
		$data['dd_font'] = $dd_font;	  
	  
	  //Use in Live
	  /**/
	  //file_exists($filename)
	  $logo = API_BASE_URL_FE.'images/'.$customer_id.'/logo/logo.png';
	  $spacer = API_BASE_URL_FE.'images/'.$customer_id.'/spacer/spacer.png';
	  $loading = API_BASE_URL_FE.'images/'.$customer_id.'/loading/loading.gif';
	  //@fopen($logo,'r');  
	  
	  $data['logo'] =  (@fopen($logo, 'r'))?$logo:base_url().'/img/logo.png';
	  $data['spacer'] = (@fopen($spacer, 'r'))?$spacer:base_url().'/img/bm-spacer.jpg';
	  $data['loading'] = (@fopen($loading, 'r'))?$loading:base_url().'/img/loading-pink.gif';	  
	  
	  $this->load->view('admin/templates/adm_header');
	  $this->load->view('admin/appearance', $data);
	  $this->load->view('admin/templates/footer');	  
  }
  public function submitReturnReasons(){
    header('Content-Type: application/json');
    //print_r(array_values($_POST['ReturnReasons']));exit();
	 $sort_ReturnReasons = array_values($_POST['ReturnReasons']);//array_values : This function has been used to order the index of POST array to avoid the conflict while changing postion and save
	
	 $server_output = $this->httpRequests->httpPost('ReturnReason/PostManageReturnReason',json_encode(array("ReturnReasons" => $sort_ReturnReasons)));

   $_SESSION['message']['rr']='Saved';
	//echo json_encode($server_output);exit();
    header('Location: ' . $_SERVER['HTTP_REFERER'].'#rr-panel');
  }
  public function save_appearance_settings(){
	  header('Content-Type: application/json');
	  $post_data = ['PKSettingID'=>$_POST['CustomerSetting']['PKSettingID'],
	  'FKCustomerid'=>$_POST['CustomerSetting']['FKCustomerid'],
	  'Colours'=>serialize($_POST['CustomerSetting']['Colours'])];
	  
		$server_output = $this->httpRequests->httpPost('CustomerSetting/PostManageCustomerSetting', json_encode($post_data) );

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
      
      unset($_POST['Languages'][$key]['Links']);
    }
    echo json_encode($_POST['Languages']);

    $server_output = $this->httpRequests->httpPost('CustomerLanguage/PostManageCustomerLanguage', 
                                                    json_encode(['CustomerLanguages'=>$_POST['Languages']]) );

    $_SESSION['message']['languages']='Saved';

    echo var_dump($_SESSION['message']);

    //eader('Location: ' . $_SERVER['HTTP_REFERER'].'#language-panel');

  }
  //for submiting emails
  public function submitEmails(){
    header('Content-Type: application/json');
    
    echo json_encode($_POST['Languages']);
    
    //exit();
    
    $server_output = $this->httpRequests->httpPost('CustomerLanguage/PostManageCustomerLanguage', 
                                                    json_encode(['CustomerLanguages'=>$_POST['Languages']]));

    $_SESSION['message']['emails']='Saved';

    echo var_dump($_SESSION['message']);
    
    

    header('Location: ' . $_SERVER['HTTP_REFERER'].'#email-panel');

  }
  //login screen for customer view
  public function login(){
    $this->load->view('admin/templates/header');
    $this->load->view('admin/login');
    $this->load->view('admin/templates/footer');
    if(isset($_SESSION['message'])){
      unset($_SESSION['message']);
    }
  }
  public function submitLinks() {
    header('Content-Type: application/json');
    
    #echo json_encode($_POST) . "\r\n";
    $newlinks=[];
    $post_data = $_POST['link'];
    $input_data = array(
      'Customerid'=>$_SESSION['Customerid']
    );
    //$customerLanguages=$this->getCustomerLanguages();
    $customerLanguages=$this->httpRequests->httpGet('CustomerLanguage/GetCustomerLanguagebyId', $input_data);
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

    $server_output = $this->httpRequests->httpPost('CustomerLanguage/PostManageLinks', json_encode(array("CustomerLanguages" => $newlinks)) );

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


    #$customerLanguages=$this->getCustomerLanguages();
    $input_data = array(
      'Customerid'=>$_SESSION['Customerid']
    );
    //$customerLanguages=$this->getCustomerLanguages();
    $customerLanguages=$this->httpRequests->httpGet('CustomerLanguage/GetCustomerLanguagebyId', $input_data);

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
    $server_output = $this->httpRequests->httpPost('CustomerLanguage/PostManageLinks', json_encode(array("CustomerLanguages" => $newlinks)) );

    $_SESSION['message']['links']='Saved';

    echo var_dump($_SESSION['message']);

    header('Location: ' . $_SERVER['HTTP_REFERER'].'#links-panel');
  }
  public function postComment() {
    header('Content-Type: application/json');
    echo "in php : ". "\r\n";
    echo json_encode($_POST) . "\r\n";

    $server_output = $this->httpRequests->httpPost('Returnorder/PostUpdateBMReturnorderComment', json_encode($_POST) );

    // $ch = curl_init();

    // curl_setopt($ch, CURLOPT_URL,API_BASE_URL_BE."api/Returnorder/PostUpdateReturnorderComment");
    // curl_setopt($ch, CURLOPT_POST, 1);
    // curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($_POST));

    // curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    // $server_output = curl_exec ($ch);

    // curl_close ($ch);

    // echo json_encode($server_output);
    $_SESSION['message']['orders-messages']='Comment Saved';

    echo var_dump($_SESSION['message']);

    header('Location: ' . $_SERVER['HTTP_REFERER'].'#orders-messages');

  }
  public function debug() {
    
    
    echo var_dump($_POST);
   
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
	  //echo $customerid;exit();
	  //print_r($_FILES);exit();	  
	  $cfile = new CURLFile($img_file_tmp, $img_file_type, $image_type);
	  $data = array('test_file' => $cfile);


    $server_output = $this->httpRequests->httpPostUpload('customersetting/PostUploadLoading?customerid=' . $customerid, $data );
	  
	  // $ch = curl_init();	  	
	  // //curl_setopt($ch, CURLOPT_URL,"http://128.0.210.62/bleckmannapi/api/customersetting/PostUploadLoading?customerid=$customerid");
	  // curl_setopt($ch, CURLOPT_URL,API_BASE_URL_BE."api/customersetting/PostUploadLoading?customerid=$customerid");	  
	  
	  // curl_setopt($ch, CURLOPT_POST, 1);
	  // curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	  // curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	  // $server_output = curl_exec ($ch);
	  // curl_close ($ch);
	  echo json_encode($server_output);

	  //echo 'Success';
	  
	}
	function save_show_email_setting($param1='') {	  	  
	  header('Content-Type: application/json');
	  
	  $data['PKSettingID'] = $_POST['PKSettingID'];
	  $data['FKCustomerid'] = $_POST['FKCustomerid'];
	  $data['ShowEmail'] = (isset($_POST['ShowEmail']) && $_POST['ShowEmail'] == 'true')?'true':'false';
	  //print_r($data);exit();
	  $server_output = $this->httpRequests->httpPost('CustomerSetting/PostManageCustomerSetting', json_encode($data));
	  //echo json_encode($server_output);
	  $_SESSION['message']['appearance']='Saved';
	  header('Location: ' . $_SERVER['HTTP_REFERER'].'#ap-panel');
	}
	function ro_option($param1=''){
		$req = array('Customerid'=>$_SESSION['Customerid'] );
    
		$data['customerLanguages'] = $this->httpRequests->httpGet('CustomerLanguage/GetCustomerLanguagebyId', $req);
		$data['appearanceSettings'] = $this->httpRequests->httpGet('CustomerSetting/GetCustomerFeaturesbyId', $req);
	
		$data['all_langs']=$data['customerLanguages'];
		$data['customername'] = $_SESSION['Customername'];

		$data['Links'] = [];
		//set customerLanguages to current selected language
		$this->Languagename='English';
		if ( count($data['customerLanguages']) > 0 ) {
			foreach($data['customerLanguages'] as $r) {
			  if($r['LanguageName']==$this->Languagename){
				$data['customerLanguages']=$r;
				$data['Links'] = $r['Links'];
			  }
			}
			//set translations to current selected language
			$data['translations']=[];
			foreach ($this->getTranslations() as $key => $value) {
			  foreach ($value as $kkey => $vvalue) {
				if($vvalue['Languagename']==$this->Languagename){
				  array_push($data['translations'], $vvalue);
				}
			  }
			}
		}
		$customer_id = $_SESSION['Customerid'];
		//echo API_BASE_URL_FE;exit();
		//$data = array('customer_id'=>,'api_base_url_fe'=>API_BASE_URL_FE);
    $data['customer_id'] = $customer_id;
    $data['api_base_url_fe'] = API_BASE_URL_FE;
    $data['allCountries'] = $this->httpRequests->httpGet('country/GetAllActiveCountries', '');
    $data['customerCountries']=$this->httpRequests->httpGet('country/GetAllActiveCountriesbyCustomerid', $req);
    #$data['customerOpModes'] = $this->httpRequests->httpGet('operation/GetOperationsbyCustomerid', $req );
    $data['customerOpModes'] = $this->customerOpModes;
		$this->load->view('admin/templates/adm_header');
		$this->load->view('admin/ro_option', $data);
		$this->load->view('admin/templates/footer');
		if(isset($_SESSION['message'])){
			unset($_SESSION['message']);
		}		
	}
	function operation_mode(){
		$customer_id = $_SESSION['Customerid'];
		//echo API_BASE_URL_FE;exit();
		$data = array('customer_id'=>$customer_id,'api_base_url_fe'=>API_BASE_URL_FE);
		$this->load->view('admin/templates/adm_header');
		$this->load->view('admin/operation_mode', $data);
		$this->load->view('admin/templates/footer');
		if(isset($_SESSION['message'])){
			unset($_SESSION['message']);
		}	
	}

}
