<?php
	 class c_member extends CI_Controller
	 {

	 	function __construct()
	 	{
	 		parent :: __construct();
	 		if($this->session->userdata('status') != "login"){
			redirect(base_url("index.php/login_adm"));
		}
	 		$this->load->model("m_member");
	 			$this->load->helper('url');
	 	}
	 	
	 	function index()
	 	{
	 		$data['datamember']=$this->m_member->tampil_data();
	 		$this->load->view("admin/v_member",$data);
	 	}

	 	function tambah()
	 	{
	 		$this->load->view("admin/v_tambahmember");
	 	}

	 	function tambah_aksi(){
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$no_telp = $this->input->post('no_telp');
		$email = $this->input->post('email');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
 
		$data = array(
			'nama' => $nama,
			'alamat' => $alamat,
			'no_telp' => $no_telp,
			'email' => $email,
			'username' => $username,
			'password' => md5($password)
			);

		$this->m_member->input_data($data,'datamember');
		redirect('admin/c_member');
	}

	 	//membuat fungsi edit, cek di adress /edit
	 	function edit($id_member){
	 		$where = array('id_member' => $id_member);
			$data['datamember'] = $this->m_member->edit_data($where,'datamember')->result();
			$this->load->view("admin/v_editmember",$data);
	 	}

			function update(){
			$id_member = $this->input->post('id_member');
			$nama = $this->input->post('nama');
			$alamat = $this->input->post('alamat');
			$no_telp = $this->input->post('no_telp');
			$email = $this->input->post('email');
			$username = $this->input->post('username');
		 
			$data = array(
				'nama' => $nama,
				'alamat' => $alamat,
				'no_telp' => $no_telp,
				'email' => $email,
				'username' => $username
			);
		 
			$where = array(
				'id_member' => $id_member
			);
		 
			$this->m_member->update_data($where,$data,'datamember');
			redirect('admin/c_member');
		}

		//membuat fungsi hapus, cek di adress /hapus
	 	function delete($id_member){
	 		$where = array('id_member' => $id_member);
			$this->m_member->hapus_data($where,'datamember');
			redirect('admin/c_member');
	 	}

	 } 
 ?>