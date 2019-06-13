<?php
	 class C_katalog extends CI_Controller
	 {

	 	function __construct()
	 	{
	 		parent :: __construct();
		
	 		$this->load->model("m_katalog");
	 			$this->load->helper('url');
	 	}
	 	
	 	/*
	 	function index()
	 	{
	 		$data['produk']=$this->m_katalog->tampil_data();
	 		$this->load->view("member/v_katalog",$data);
	 	}*/

	 	//menampilkan produk
	 	function alat_pertanian(){
	 		$where = array('kategori' => 'alat pertanian');
			$data['produk'] = $this->m_katalog->tampil_kategori($where,'produk')->result();
			$this->load->view("member/v_katalog",$data);
	 	}

	 	function benih(){
	 		$where = array('kategori' => 'benih');
			$data['produk'] = $this->m_katalog->tampil_kategori($where,'produk')->result();
			$this->load->view("member/v_katalog",$data);
	 	}
	 	function bibit(){
	 		$where = array('kategori' => 'bibit');
			$data['produk'] = $this->m_katalog->tampil_kategori($where,'produk')->result();
			$this->load->view("member/v_katalog",$data);
	 	}
	 	function pupuk(){
	 		$where = array('kategori' => 'pupuk');
			$data['produk'] = $this->m_katalog->tampil_kategori($where,'produk')->result();
			$this->load->view("member/v_katalog",$data);
	 	}
	 	

	 } 
 ?>