<?php
	 class c_barang extends CI_Controller
	 {

	 	function __construct()
	 	{
	 		parent :: __construct();
	 		if($this->session->userdata('status') != "login"){
			redirect(base_url("index.php/login_adm"));
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
		$nama_file = $this->_uploadImage();
		$deskripsi = $this->input->post('deskripsi');
		$tanggal = date("Y-m-d H:i:s");
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
			$deskripsi = $this->input->post('deskripsi');
			$tanggal = date("Y-m-d H:i:s");
			$harga = $this->input->post('harga');
		 
			$data = array(
				'nama_produk' => $nama_produk,
				'kategori' => $kategori,
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

	 	private function _uploadImage()
		{
		    $config['upload_path']          = './assets/upload/foto_produk/';
		    $config['allowed_types']        = 'gif|jpg|png|jpeg';
		    $config['file_name']            = $_FILES['nama_file']['name'];
		    $config['overwrite']			= true;
		    $config['max_size']             = 1024; // 1MB
		    // $config['max_width']            = 1024;
		    // $config['max_height']           = 768;

		    $this->load->library('upload', $config);

		    if ($this->upload->do_upload('nama_file')) {
		        return $this->upload->data("file_name");
		    }
		    
		    return "default.jpg";
		}

	 } 
 ?>