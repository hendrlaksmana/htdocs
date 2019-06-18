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
				$id = $this->input->post('id');
				$qty = $this->input->post('qty');
				$price = $this->input->post('price');
				$name = $this->input->post('name');
				
			
			$data = array( 	'id' => $id, 
							'qty' => $qty,
							'price' => $price,
							'name' => $name
							);

				$this->cart->insert($data);
				redirect('member/c_beli','refresh');
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