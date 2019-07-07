<?php
	 class c_laporan extends CI_Controller
	 {

	 	function __construct()
	 	{
	 		parent :: __construct();
	 		if($this->session->userdata('status') != "login"){
			redirect(base_url("index.php/login_adm"));
		}
	 		$this->load->model("m_laporan");
	 			$this->load->helper('url');
	 	}
	 	
	 	function index()
	 	{
	 		$data['laporan_transaksi']=$this->m_laporan->tampil_data();
	 		$this->load->view("admin/v_laporan",$data);
	 	}

	 	function detail($id_transaksi)
	 	{
	 		$where = array('id_transaksi' => $id_transaksi);
	 		$data['trans'] = $this->m_laporan->detailtr($where,'laporan_transaksi')->result();
	 		$data['detail_transaksi'] = $this->m_laporan->detailtrans($where,'detail_transaksi')->result();
	 		$this->load->view("admin/v_detailtransaksi",$data);
	 	}

	 	function delete($id_transaksi){
	 		$where = array('id_transaksi' => $id_transaksi);
			$this->m_laporan->hapus_data($where,'laporan_transaksi');
			$this->m_laporan->hapus_detail($where,'detail_transaksi');
			redirect('admin/c_laporan');
	 	}

	 	function print(){
	 		$data['laporan_transaksi']=$this->m_laporan->tampil_data();
	 		$data['total_hasil']=$this->m_laporan->get_sum();
	 		$this->load->view("admin/v_laporan_print",$data);
	 	}

	 } 
 ?>