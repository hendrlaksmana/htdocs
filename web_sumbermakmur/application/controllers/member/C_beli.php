<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
	 class C_beli extends CI_Controller
	 {
		function __construct()
		{
	 		parent :: __construct();
	 			$this->load->library('cart');
	 			$this->load->model("m_keranjang");
	 		$this->load->model("m_transaksi");
	 		$this->load->model("m_member");
			$this->load->helper('url');

	 		if($this->session->userdata('status') != "login") 
			redirect(base_url("index.php/login_member"));	
		
	 		
	 	}
	 	
	 	//Tampil keranjang
	 	function index()
	 	{
	 		//$data['detail_transaksi']=$this->m_keranjang->tampil_data();
	 		$this->load->view("member/v_keranjang"/*,$data*/);
	 	}

	 	function tambah()
			{
		$data_produk= array('id' => $this->input->post('id'),
							 'name' => $this->input->post('nama'),
							 'price' => $this->input->post('harga'),
							 'gambar' => $this->input->post('gambar'),
							 'qty' =>$this->input->post('1')
							);
		$this->cart->insert($data_produk);
		redirect('member/c_katalog');
		}

		function checkout()
	 	{
	 		$data['biaya_kirim']=$this->m_keranjang->tampil_data();
	 		$this->load->view("member/v_checkout",$data);

	 	}

		function nota()
	 	{
	 		$data['biaya_kirim']=$this->m_keranjang->tampil_data();
	 		$this->load->view("member/v_nota",$data);
	 	}

	 		 } 

 ?>