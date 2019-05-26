<?php
	 class c_artikel extends CI_Controller
	 {

	 	function __construct()
	 	{
	 		parent :: __construct();
	 		if($this->session->userdata('status') != "login"){
			redirect(base_url("login_adm"));
		}
	 		$this->load->model("m_artikel");
	 			$this->load->helper('url');
	 	}
	 	
	 	function index()
	 	{
	 		$data['artikel']=$this->m_artikel->tampil_data();
	 		$this->load->view("admin/v_artikel",$data);
	 	}

	 	function tambah()
	 	{
	 		$this->load->view("admin/v_tambahartikel");
	 	}

	 	function tambah_aksi(){
		$judul_artikel = $this->input->post('judul_artikel');
		$foto = $this->_uploadImage();
		$deskripsi = $this->input->post('deskripsi');
		$tanggal = date("Y-m-d H:i:s");
		$penulis = $this->input->post('penulis');
 
		$data = array(
			'judul_artikel' => $judul_artikel,
			'foto' => $foto,
			'deskripsi' => $deskripsi,
			'tanggal' => $tanggal,
			'penulis' => $penulis
			);

		$this->m_artikel->input_data($data,'artikel');
		redirect('admin/c_artikel');
	}

	 	//membuat fungsi edit, cek di adress /edit
	 	function edit($id_artikel){
	 		$where = array('id_artikel' => $id_artikel);
			$data['artikel'] = $this->m_artikel->edit_data($where,'artikel')->result();
			$this->load->view("admin/v_editartikel",$data);
	 	}

			function update(){
			$id_artikel = $this->input->post('id_artikel');
			$judul_artikel = $this->input->post('judul_artikel');
			$deskripsi = $this->input->post('deskripsi');
			$tanggal = date("Y-m-d H:i:s");
		 
			$data = array(
				'judul_artikel' => $judul_artikel,
				'deskripsi' => $deskripsi,
				'tanggal' => $tanggal
			);
		 
			$where = array(
				'id_artikel' => $id_artikel
			);
		 
			$this->m_artikel->update_data($where,$data,'artikel');
			redirect('admin/c_artikel');
		}

		//membuat fungsi hapus, cek di adress /hapus
	 	function delete($id_artikel){
	 		$where = array('id_artikel' => $id_artikel);
			$this->m_artikel->hapus_data($where,'artikel');
			redirect('admin/c_artikel');
	 	}

	 	private function _uploadImage()
		{
		    $config['upload_path']          = './assets/upload/artikel/';
		    $config['allowed_types']        = 'gif|jpg|png|jpeg';
		    $config['file_name']            = $_FILES['foto']['name'];
		    $config['overwrite']			= true;
		    $config['max_size']             = 1024; // 1MB
		    // $config['max_width']            = 1024;
		    // $config['max_height']           = 768;

		    $this->load->library('upload', $config);

		    if ($this->upload->do_upload('foto')) {
		        return $this->upload->data("file_name");
		    }
		    
		    return "default.jpg";
		}

	 } 
 ?>