<?php
	 class C_beli extends CI_Controller
	 {
		public 	function __construct()
		{
	 		parent :: __construct();
	 		if($this->session->userdata('status') != "login") {
			redirect(base_url("index.php/login_member"));	
		}

	 		$this->load->model("m_keranjang");
			$this->load->helper('url');
			$this->load->library('cart');
	 	}
	 	
	 	//Tampil keranjang
	 	function index()
	 	{
	 		//$data['detail_transaksi']=$this->m_keranjang->tampil_data();
	 		$this->load->view("member/v_keranjang"/*,$data*/);
	 	}

	 	//Ubah keranjang
	 	function ubah_keranjang()
	 	{
			$cart_info = $_POST['cart'] ;
			foreach( $cart_info as $id => $cart)
			{
				$rowid = $cart['rowid'];
				$nama_produk = $cart['nama_produk'];
				$gambar = $cart['gambar'];
				$harga = $cart['harga'];
				$jumlah = $cart['jumlah'];
				$data = array('rowid' => $rowid,
								'nama_produk' => $nama_produk,
								'gambar' => $gambar,
								'harga' => $harga,
								'jumlah' => $jumlah);
				$this->cart->update($data);
				}
				redirect('member/c_beli');
			}

		//Form action saat beli produk
		function tambah()
		{
			$data_produk= array('id' => $this->input->post('id'),
								 'nama_produk' =>$this->input->post('nama_produk'),
								 'gambar' =>$this->input->post('gambar'),
								 'harga' =>$this->input->post('harga'),
								 'jumlah' =>$this->input->post('jumlah')
								);
			$this->cart->insert($data_produk);
			redirect('c_beli');
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
		redirect('c_beli');
	}

	 	function checkout()
	 	{
	 	/*	$data['keranjang']=$this->m_keranjang->tampil_data();
	 	*/	$this->load->view("member/v_checkout"/*,$data*/);
	 	}

		function nota()
	 	{
	 	/*	$data['keranjang']=$this->m_keranjang->tampil_data();
	 	*/	$this->load->view("member/v_nota"/*,$data*/);
	 	}



	 	/*function delete($id_keranjang){
	 		$where = array('id_keranjang' => $id_keranjang);
			$this->m_keranjang->hapus_data($where,'keranjang');
			redirect('member/c_keranjang');
	 	}*/

	 } 
 ?>