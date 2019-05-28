<?php
	 class c_transaksi extends CI_Controller
	 {

	 	function __construct()
	 	{
	 		parent :: __construct();
	 		if($this->session->userdata('status') != "login"){
			redirect(base_url("login_adm"));
		}
	 		$this->load->model("m_transaksi");
	 			$this->load->helper('url');
	 	}
	 	
	 	function index()
	 	{
	 		$data['transaksi']=$this->m_transaksi->tampil_data();
	 		$this->load->view("admin/v_transaksi",$data);
	 	}

	 	function delete($id_transaksi){
	 		$where = array('id_transaksi' => $id_transaksi);
			$this->m_transaksi->hapus_data($where,'transaksi');
			redirect('admin/c_transaksi');
	 	}

	 	function detail()
	 	{
	 		$where = array('id_transaksi' => $id_transaksi);
	 		$data['detail_transaksi']=$this->m_detailtransaksi->tampil_data($where,'detail_transaksi')->result();
	 		$this->load->view("admin/v_detailtransaksi",$data);
	 	}

	 } 
 ?>