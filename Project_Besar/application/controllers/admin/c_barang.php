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
	 		//load class form validasi
	 		$this->load->library("form_validation");
	 	}
	 	
	 	function index()
	 	{
	 		//load dari model
	 		//$data['Judul']="Ini adalah Judul";
	 		//$this->load->model("m_barang");

	 		//load dari view
	 		$data['produk']=$this->m_barang->tampil_data();
	 		$this->load->view("admin/v_barang",$data);
	 	}

	 	function tambah(){

	 		$produk= $this ->m_barang;
	 		//membuat variabel
	 		//$this->load->view("admin/v_tambah");
	 		
	 		$validasi=$this->form_validation;

	 		$validasi->set_rules($produk->rules());

	 		if ($validasi ->run()) {

	 			//menyimpan data ke database
	 			$produk->save();
	 			redirect('admin/c_barang');
	 		}

	 	}

	 	//membuat fungsi edit, cek di adress /edit
	 	function edit($id_barang){
	 		$where = array('id_barang' => $id_barang);
			$data['barang'] = $this->m_barang->edit_barang($where,'barang')->result();
			$this->load->view("admin/v_edit",$data);
	 	}

	 	//membuat fungsi hapus, cek di adress /hapus
	 	function delete($id_barang){
	 		$where = array('id_barang' => $id_barang);
			$this->m_barang->hapus_data($where,'barang');
			redirect('admin/barang');
	 	}

	 	function update(){
			$id_barang = $this->input->post('id_barang');
			$nama = $this->input->post('nama');
			$deskripsi = $this->input->post('deskripsi');
			$stok = $this->input->post('stok');
			$harga = $this->input->post('harga');
		 
			$data = array(
				'nama' => $nama,
				'deskripsi' => $deskripsi,
				'stok' => $stok,
				'harga' => $harga
			);
		 
			$where = array(
				'id_barang' => $id_barang
			);
		 
			$this->m_barang->update_data($where,$data,'barang');
			redirect('admin/barang');
		}

	 } 
 ?>