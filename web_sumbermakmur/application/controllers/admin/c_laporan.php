<?php
	 class c_laporan extends CI_Controller
	 {

	 	function __construct()
	 	{
	 		parent :: __construct();
	 		if($this->session->userdata('status') != "login"){
			redirect(base_url("login_adm"));
		}
	 		$this->load->model("m_laporan");
	 			$this->load->helper('url');
	 	}
	 	
	 	function index()
	 	{
	 		$data['laporan_transaksi']=$this->m_laporan->tampil_data();
	 		$this->load->view("admin/v_laporan",$data);
	 	}

	 } 
 ?>