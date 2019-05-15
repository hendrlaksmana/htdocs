<?php
	 class c_barang extends CI_Controller
	 {

	 	function __construct()
	 	{
	 		parent :: __construct();
	 		if($this->session->userdata('status') != "login"){
			redirect(base_url("login_adm"));
		}
	 		$this->load->model("m_barang");
	 			$this->load->helper('url');
	 	}
	 	
	 	function index()
	 	{
	 		$data['produk']=$this->m_barang->tampil_data();
	 		$this->load->view("admin/v_barang",$data);
	 	}

	 	function tambah()
	 	{
	 		$this->load->view("admin/v_tambahbarang");
	 	}

	 	function tambah_aksi(){
		$nama_produk = $this->input->post('nama_produk');
		$kategori = $this->input->post('kategori');
		$nama_file = $this->input->post('nama_file');
		$deskripsi = $this->input->post('deskripsi');
		$tanggal = $this->input->post('tanggal');
		$harga = $this->input->post('harga');
 
		$data = array(
			'nama_produk' => $nama_produk,
			'kategori' => $kategori,
			'nama_file' => $nama_file,
			'deskripsi' => $deskripsi,
			'tanggal' => $tanggal,
			'harga' => $harga
			);
		$this->m_barang->input_data($data,'produk');
		redirect('admin/c_barang');
	}

	 	//membuat fungsi edit, cek di adress /edit
	 	function edit($id_produk){
	 		$where = array('id_produk' => $id_produk);
			$data['produk'] = $this->m_barang->edit_data($where,'produk')->result();
			$this->load->view("admin/v_editbarang",$data);
	 	}

			function update(){
			$id_produk = $this->input->post('id_produk');
			$nama_produk = $this->input->post('nama_produk');
			$kategori = $this->input->post('kategori');
			$nama_file = $this->input->post('nama_file');
			$deskripsi = $this->input->post('deskripsi');
			$tanggal = $this->input->post('tanggal');
			$harga = $this->input->post('harga');
		 
			$data = array(
				'nama_produk' => $nama_produk,
				'kategori' => $kategori,
				'nama_file' => $nama_file,
				'deskripsi' => $deskripsi,
				'tanggal' => $tanggal,
				'harga' => $harga
			);
		 
			$where = array(
				'id_produk' => $id_produk
			);
		 
			$this->m_barang->update_data($where,$data,'produk');
			redirect('admin/c_barang');
		}

		//membuat fungsi hapus, cek di adress /hapus
	 	function delete($id_produk){
	 		$where = array('id_produk' => $id_produk);
			$this->m_barang->hapus_data($where,'produk');
			redirect('admin/c_barang');
	 	}

	 } 
 ?>