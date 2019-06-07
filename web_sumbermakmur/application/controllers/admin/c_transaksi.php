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

	 	function sukses($id_transaksi){
	 		$where = array('id_transaksi' => $id_transaksi);
			$data['transaksi'] = $this->m_transaksi->sukses_data($where,'transaksi')->result();
			$this->load->view("admin/v_sukses",$data);
	 	}

		function finalisasi(){
			$id_transaksi = $this->input->post('id_transaksi');
			$id_member = $this->input->post('id_member');
			$id_ongkir = $this->input->post('id_ongkir');
			$tanggal = date("Y-m-d H:i:s");
			$total_pembelian = $this->input->post('total_pembelian');
		 
			$data = array(
				'id_member' => $id_member,
				'id_ongkir' => $id_ongkir,
				'tanggal' => $tanggal,
				'total_pembelian' => $total_pembelian
			);
		 
			$where = array(
				'id_transaksi' => $id_transaksi
			);
		 
			$this->m_transaksi->final_data($where,$data,'laporan_transaksi');
			$this->m_transaksi->del($where,'transaksi');
			redirect('admin/c_transaksi');
		}

	 } 
 ?>