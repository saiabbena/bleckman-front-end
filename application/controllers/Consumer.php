<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Consumer extends CI_Controller {
  
  public function __construct(){
    parent::__construct();
    $this->load->helper("url");
    
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

    //set customerLanguages to current selected language
    foreach($data['customerLanguages'] as $r){
      if($r['LanguageName']==$this->Languagename){
        $data['customerLanguages']=$r;
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

    $this->load->view('consumer/templates/header', $data);
    $this->load->view('consumer/portal', $data);
    $this->load->view('consumer/templates/footer');
  }
}