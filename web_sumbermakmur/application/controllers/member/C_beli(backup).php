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
	 		$this->load->model("m_transaksi");
	 		$this->load->model("m_member");
			$this->load->helper('url');
			$this->load->library('cart');
	 	}
	 	
	 	//Tampil keranjang
	 	function index()
	 	{
	 		//$data['detail_transaksi']=$this->m_keranjang->tampil_data();
	 		$this->load->view("member/v_keranjang"/*,$data*/);
	 	}

	 	function tambah()
			{
				$data = array('id' => $this->input->post('id'),
									 'name' =>$this->input->post('nama_produk'),
									 'gambar' =>$this->input->post('gambar'),
									 'price' =>$this->input->post('harga'),
									 'qty' =>$this->input->post('jumlah')
									);  
				$this->cart->insert($data );
				redirect('member/c_beli');
			}
	 	

	 	//Ubah keranjang
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
				redirect('/member/c_beli');
			}

		//Form action saat beli produk

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

	 	

	 	//ssampe sisni masih pusing
	  function proses_order()
		{
		
		//-------------------------Input data member--------------------------
		$data_member = array('nama_produk' => $this->input->post('nama_produk'),
							'email' => $this->input->post('email'),
							'alamat' => $this->input->post('alamat'),
							'telp' => $this->input->post('telp'));
		$id_member = $this->m_barang->input_data($data_member);
		//-------------------------Input data order------------------------------
		$data_order = array('tanggal' => date('Y-m-d'),
					   		'member' => $id_member);
		$id_transaksi = $this->m_transaksi->tambah_transaksi($data_order);
		//-------------------------Input data detail order-----------------------		
		if ($cart = $this->cart->contents())
			{
				foreach ($cart as $item)
					{
						$data_detail = array('order_id' =>$id_transaksi,
										'produk' => $item['id'],
										'qty' => $item['qty'],
										'harga' => $item['price']);			
						$proses = $this->m_transaksi->tampil_transaksi($data_detail);
					}
			}
		//-------------------------Hapus shopping cart--------------------------		
		/*$this->cart->destroy();
		$data['kategori'] = $this->keranjang_model->get_kategori_all();
		
		$this->load->view('nota',$data);*/
		
	}


	 	

	 } 
 ?>