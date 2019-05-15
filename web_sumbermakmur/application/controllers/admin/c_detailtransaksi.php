<?php
	 class c_detailtransaksi extends CI_Controller
	 {

	 	function __construct()
	 	{
	 		parent :: __construct();
	 		if($this->session->userdata('status') != "login"){
			redirect(base_url("login_adm"));
		}
	 		$this->load->model("m_detailtransaksi");
	 			$this->load->helper('url');
	 	}
	 	
	 	function index()
	 	{
	 		$where = array('id_transaksi' => $id_transaksi);
	 		$data['detail_transaksi']=$this->m_detailtransaksi->tampil_data($where,'detail_transaksi')->result();
	 		$this->load->view("admin/v_detailtransaksi",$data);
	 	}

	 } 
 ?>