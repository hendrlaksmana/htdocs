<?php
	 class c_admin extends CI_Controller
	 {

	 	function __construct()
	 	{
	 		parent :: __construct();
	 		if($this->session->userdata('status') != "login"){
			redirect(base_url("login_adm"));
		}
	 		$this->load->model("m_admin");
	 			$this->load->helper('url');

	 		if ($this->session->userdata('level') == "admin") {
	 			echo "Anda tidak berhak mengakses halaman ini";
	 			redirect(base_url("index.php/admin"));
	 		}
	 	}
	 	
	 	function index()
	 	{
	 		$data['dataadmin']=$this->m_admin->tampil_data();
	 		$this->load->view("admin/v_admin",$data);
	 	}

	 	function tambah()
	 	{
	 		$this->load->view("admin/v_tambahadmin");
	 	}

	 	function tambah_aksi(){
		$nama = $this->input->post('nama');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$level = $this->input->post('level');
 
		$data = array(
			'nama' => $nama,
			'username' => $username,
			'password' => md5($password),
			'level' => $level
			);

		$this->m_admin->input_data($data,'dataadmin');
		redirect('admin/c_admin');
	}

	 	//membuat fungsi edit, cek di adress /edit
	 	function edit($id_admin){
	 		$where = array('id_admin' => $id_admin);
			$data['dataadmin'] = $this->m_admin->edit_data($where,'dataadmin')->result();
			$this->load->view("admin/v_editadmin",$data);
	 	}

	 	function update(){
			$id_admin = $this->input->post('id_admin');
			$nama = $this->input->post('nama');
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$level = $this->input->post('level');
		 
			$data = array(
				'nama' => $nama,
				'username' => $username,
				'password' => md5($password),
				'level' => $level
			);
		 
			$where = array(
				'id_admin' => $id_admin
			);
		 
			$this->m_admin->update_data($where,$data,'dataadmin');
			redirect('admin/c_admin');
		}

		//membuat fungsi hapus, cek di adress /hapus
	 	function delete($id_admin){
	 		$where = array('id_admin' => $id_admin);
			$this->m_admin->hapus_data($where,'dataadmin');
			redirect('admin/c_admin');
	 	}

	 } 
 ?>