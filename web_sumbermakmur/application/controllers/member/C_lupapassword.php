<?php
	 class C_lupapassword extends CI_Controller
	 {
	 	function __construct()
	 	{
	 		parent :: __construct();
	 		$this->load->model("m_lupapasswd");
	 			$this->load->helper('url');

	 	}
	 	
	 	function index()
	 	{
	 		$this->load->view("member/v_lupapass");
	 	}

	 	function input_username()
	 	{
	 		$username = $this->input->post('username');
			$where = array(
				'username' => $username,
				);
			$cek = $this->m_lupapasswd->cek_login("datamember",$where)->row_array();
			if($cek > 0){
	 
				$data_session = array(
					'username' => $cek['username'],
					'id_member' => $cek['id_member'],
					'pertanyaan_keamanan1' => $cek['pertanyaan_keamanan1'],
					'pertanyaan_keamanan2' => $cek['pertanyaan_keamanan2']
					);
	 
				$this->session->set_userdata($data_session);
	 
				redirect(base_url("index.php/member/C_lupapassword/tanyajawab"));
	 
			}else{
				$this->load->view('member/v_lupapass_fail');
			}
		}

		function tanyajawab(){
	 		$this->load->view("member/v_lupapass_jawab");
	 	}

	 	function verifikasi_keamanan(){

	 		$jawaban1 = $this->input->post('jawaban1');
	 		$jawaban2 = $this->input->post('jawaban2');
			$where = array(
				'jawaban1' => $jawaban1,
				'jawaban2' => $jawaban2,
				);
			$cek = $this->m_lupapasswd->cek_login_jawaban("datamember",$where)->row_array();
			if($cek > 0){

				redirect(base_url("index.php/member/C_lupapassword/updatepass"));
	 
			}else{
				$this->load->view('member/v_lupapass_jawab_fail');
			}
	 	}

	 	function updatepass(){
	 		$this->load->view('member/v_ganti_pass');
	 	}

	 	function update_pass_proses(){
	 		$id_member = $this->input->post('id_member');
	 		$password = $this->input->post('password');
		 
			$data = array(
				'password' => md5($password)
			);
		 
			$where = array(
				'id_member' => $id_member
			);
		 
			$this->m_lupapasswd->update_data($where,$data,'datamember');
			redirect('login_member');
	 	}


	 	}
 ?>