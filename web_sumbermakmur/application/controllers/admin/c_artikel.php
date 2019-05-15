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
		$foto = $this->input->post('foto');
		$deskripsi = $this->input->post('deskripsi');
		$tanggal = $this->input->post('tanggal');
 
		$data = array(
			'judul_artikel' => $judul_artikel,
			'foto' => $foto,
			'deskripsi' => $deskripsi,
			'tanggal' => $tanggal
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
			$foto = $this->input->post('foto');
			$deskripsi = $this->input->post('deskripsi');
			$tanggal = $this->input->post('tanggal');
		 
			$data = array(
				'judul_artikel' => $judul_artikel,
				'foto' => $foto,
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

	 } 
 ?>