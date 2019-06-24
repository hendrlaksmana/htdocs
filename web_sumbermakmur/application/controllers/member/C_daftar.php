<?php
	 class c_daftar extends CI_Controller
	 {

	 	function __construct()
	 	{
	 		parent :: __construct();
	 		
	 		$this->load->model("m_member");
	 			$this->load->helper('url');
		}
	 	
	 	
	 	function index()
	 	{
	 		$data['datamember']=$this->m_member->tampil_data();
	 		$this->load->view("member/v_daftar",$data);
	 	}


	 	function tambah_aksi(){
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$no_telp = $this->input->post('no_telp');
		$email = $this->input->post('email');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$pertanyaan_keamanan1 = $this->input->post('pertanyaan_keamanan1');
		$jawaban1 = $this->input->post('jawaban1');
		$pertanyaan_keamanan2 = $this->input->post('pertanyaan_keamanan2');
		$jawaban2 = $this->input->post('jawaban2');
 
		$data = array(
			'nama' => $nama,
			'alamat' => $alamat,
			'no_telp' => $no_telp,
			'email' => $email,
			'username' => $username,
			'password' => md5($password),
			'pertanyaan_keamanan1' => $pertanyaan_keamanan1,
			'jawaban1' => $jawaban1,
			'pertanyaan_keamanan2' => $pertanyaan_keamanan2,
			'jawaban2' => $jawaban2

			);

		$this->m_member->input_data($data,'datamember');
		redirect('member/c_daftar/sukses_login');
	}
		function sukses_login(){
			$this->load->view("member/v_daftarsukses");
		}
	 	
	 } 
 ?>