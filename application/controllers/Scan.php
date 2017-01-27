<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Scan extends CI_Controller {
  public function __construct(){
    parent::__construct();
	$this->load->database();
    $this->load->library('session');
  	$this->load->helper("url");
    $this->load->model('httpRequests');    
  }
  function index() {
	$this->db->SELECT('*');
	$this->db->FROM('bmcarrier');	
	$this->db->where('Isactive', '1');
	$res_carriers = $this->db->get()->result_array();
    $page_data['carriers'] = $res_carriers;
	$this->load->view('Scan/templates/header');
    $this->load->view('Scan/scan', $page_data);
    $this->load->view('Scan/templates/footer');
    if(isset($_SESSION['message'])){
      unset($_SESSION['message']);
    }
  }
  
}

?>