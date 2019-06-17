<?php
	 class C_verifikasi extends CI_Controller
	 {

	 	function __construct()
	 	{
	 		parent :: __construct();
	 		if($this->session->userdata('status') != "login"){
			redirect(base_url("index.php/login_member"));
		}
	 		$this->load->model("m_verifikasi");
	 			$this->load->helper('url');
	 	}
	 	
	 	function index()
	 	{
	 	/*	$data['verifikasi']=$this->m_verifikasi->tampil_data();
	 	*/	$this->load->view("member/v_verifikasi"/*,$data*/);
	 	}

	 	/*function delete($id_verifikasi){
	 		$where = array('id_verifikasi' => $id_verifikasi);
			$this->m_verifikasi->hapus_data($where,'verifikasi');
			redirect('member/c_verifikasi');
	 	}*/

	 } 
 ?>