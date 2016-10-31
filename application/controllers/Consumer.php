<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Consumer extends CI_Controller {
  
  public function __construct(){
    parent::__construct();
    $this->load->helper("url");
	$this->load->helper("get_appearance_settings.php");
    
    $this->Customerid=$_GET['Customer'];

    if(isset($_GET['Lang'])){
      $this->Languagename=$_GET['Lang'];
    }
    else{
      foreach($this->getCustomerLanguages() as $l){
        if($l['Isdefault']==true){
          $this->Languagename=$l['LanguageName'];
          break;
        }
        else{
          $this->Languagename='English';
          $this->Links = $l['Links'];
          
        }
      }
    }
  }

  private function getCustomerLanguages(){
    $data = array(
      'Customerid'=>$this->Customerid
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
  private function getTranslations(){

    $data = array(
      'Customerid'=>$this->Customerid
    );

    $data_url='?'.http_build_query($data);

    $data_string = json_encode($data);

    $ch = curl_init();

    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
    curl_setopt($ch, CURLOPT_URL, "http://returns.dev.apoyar.eu/api/Translation/GetAllTranslationsbyCustomerid".$data_url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    // Send the request
    $result = json_decode(curl_exec($ch), true);

    // Free up the resources $curl is using
    curl_close($ch);
    
    return $result;
  }
  public function portal(){

    $data['customerLanguages']=$this->getCustomerLanguages();
    $data['all_langs']=$data['customerLanguages'];

    $data['Links'] = [];
    //set customerLanguages to current selected language
    foreach($data['customerLanguages'] as $r){
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



    
    $data['Customerid']=$this->Customerid;
    $data['LanguageName']=$this->Languagename;
	//Use in Live
	/* In header I have put the (style scoped) for specific requirement*/
	$hdr_bg = get_appearance_value('header_color', $customer_id);
	$menu_bg = get_appearance_value('menu_bg', $customer_id);	
	$dd_bg = get_appearance_value('dd_bg', $customer_id);
	
	$data['menu_font'] = get_appearance_value('menu_font', $customer_id);
	$data['accent_1'] = get_appearance_value('accent_1', $customer_id);
	$data['accent_2'] = get_appearance_value('accent_2', $customer_id);	
	$data['dd_font'] = get_appearance_value('dd_font', $customer_id);	
	
	$data['dd_bg_style'] = 'style="background-color:'.$dd_bg.' !important;"';	
	$data['menu_bg_style'] = 'style="background-color:'.$menu_bg.' !important;"';
	$data['hdr_bg_style'] = 'style="background-color:'.$hdr_bg.' !important"';
	
	$data['logo'] = 'http://returns.dev.apoyar.eu/images/'.$customer_id.'/logo/logo.png';
	$data['spacer'] = 'http://returns.dev.apoyar.eu/images/'.$customer_id.'/spacer/spacer.png';
	$data['loading'] = 'http://returns.dev.apoyar.eu/images/'.$customer_id.'/loading/loading.gif';	
	
	

    $this->load->view('consumer/templates/header', $data);
    $this->load->view('consumer/portal', $data);
    $this->load->view('consumer/templates/footer');
  }
}