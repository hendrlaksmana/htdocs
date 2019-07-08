<?php
	 class C_profile extends CI_Controller
	 {

	 	function __construct()
	 	{
	 		parent :: __construct();
	 		if($this->session->userdata('status') != "login"){
			redirect(base_url("index.php/login_member"));}
	 	}
	 	
	 	function index()
	 	{
	 		$this->load->view("member/v_profile");
	 	}
	 } 
 ?>