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
	 		$this->load->model("m_barang");
	 	//	$this->load->model("m_member");
			$this->load->helper('url');

	 		if($this->session->userdata('status') != "login") 
			redirect(base_url("index.php/login_member"));	
		
	 		
	 	}
	 	
	 	//Tampil keranjang
	 	function index()
	 	{
	 		$data['produk']=$this->m_barang->tampil_data();
	 		$this->load->view("member/v_keranjang",$data);
	 	}

	 	function tambah()
		{
			$data_produk= array('id' => $this->input->post('id'),
							 'name' => $this->input->post('nama'),
							 'price' => $this->input->post('harga'),
							 'gambar' => $this->input->post('gambar'),
							 'qty' =>$this->input->post('qty')
							);
			$this->cart->insert($data_produk);
			redirect('member/c_beli');
		}

		function hapus($rowid) 
		{
			if ($rowid=="all")
				{
					$this->cart->destroy();
				}
			else
				{
					$data = array('rowid' => $rowid,
				  				  'jumlah' =>0);
					$this->cart->update($data);
				}
			redirect('member/c_beli');
		}

		function ubah_keranjang()
	 	{
			$cart_info = $_POST['cart'] ;
			foreach( $cart_info as $id => $cart)
			{
				$rowid = $cart['rowid'];
				$name = $cart['nama_produk'];
				$gambar = $cart['gambar'];
				$price = $cart['harga'];
				$qty = $cart['jumlah'];
				$data = array('rowid' => $rowid,
								'name' => $nama_produk,
								'gambar' => $gambar,
								'price' => $harga,
								'qty' => 0);
				$this->cart->update($data);

				}
				redirect('member/c_beli');
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









