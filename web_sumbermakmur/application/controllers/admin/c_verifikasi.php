<?php
	 class c_verifikasi extends CI_Controller
	 {

	 	function __construct()
	 	{
	 		parent :: __construct();
	 		if($this->session->userdata('status') != "login"){
			redirect(base_url("login_adm"));
		}
	 		$this->load->model("m_verifikasi");
	 			$this->load->helper('url');
	 	}
	 	
	 	function index()
	 	{
	 		$data['verifikasi']=$this->m_verifikasi->tampil_data();
	 		$this->load->view("admin/v_verifikasi",$data);
	 	}

	 	function delete($id_verifikasi){
	 		$where = array('id_verifikasi' => $id_verifikasi);
			$this->m_verifikasi->hapus_data($where,'verifikasi');
			redirect('admin/c_verifikasi');
	 	}

	 } 
 ?>