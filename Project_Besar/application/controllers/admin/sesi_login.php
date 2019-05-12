<?php 
 
class sesi_login extends CI_Controller{
 
	function __construct(){
		parent::__construct();
	
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login_adm"));
		}
	}
 
	function index(){
		$this->load->view('admin/dashboard');
	}
}