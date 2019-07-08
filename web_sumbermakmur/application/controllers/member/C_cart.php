<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_cart extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('cart');
		$this->load->model('M_produk');
	}

	public function index()
	 	{
	 		//$data['detail_transaksi']=$this->m_keranjang->tampil_data();
	 		$this->load->view("member/v_katalog"/*,$data*/);
	 	}

	function add()
		{
			$data= array('id' => $this->input->post('id'),
								 'name' => $this->input->post('nama_produk'),
								 'price' => $this->input->post('harga'),
								 'gambar' => $this->input->post('gambar'),
								 'qty' =>$this->input->post('qty')
								);
			$this->cart->insert($data);
			redirect('member/c_cart');
		}

	function delete($rowid) 
	{
		if ($rowid=="all")
			{
				$this->cart->destroy();
			}
		else
			{
				$data = array('rowid' => $rowid,
			  				  'qty' =>0);
				$this->cart->update($data);
			}
		redirect('member/C_cart');
	}

	function edit_cart()
	{
		$cart_info = $_POST['cart'] ;
		foreach( $cart_info as $id => $cart)
		{
			$rowid = $cart['rowid'];
			$price = $cart['price'];
			$gambar = $cart['gambar'];
			$amount = $price * $cart['qty'];
			$qty = $cart['qty'];
			$data = array('rowid' => $rowid,
							'harga' => $price,
							'gambar' => $gambar,
							'amount' => $amount,
							'qty' => $qty);
			$this->cart->update($data);
		}
		redirect('member/C_cart');
	}

}
?>