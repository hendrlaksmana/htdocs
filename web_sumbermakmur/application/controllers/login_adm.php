<?php 
 
class login_adm extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
		$this->load->model('m_login');
		
		// load Session Library
        $this->load->library('session');
         
        // load url helper
        $this->load->helper('url');
 
	}
 
	function index(){
		$this->load->view('v_login');
	}
 
	function aksi_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => md5($password)
			);
		$cek = $this->m_login->cek_login("dataadmin",$where)->row_array();
		if($cek > 0){
 
			$data_session = array(
				'username' => $cek['username'],
				'nama' => $cek['nama'],
				'level' => $cek['level'],
				'status' => "login"
				);
 
			$this->session->set_userdata($data_session);
 
			redirect(base_url("index.php/admin"));
 
		}else{
			echo "Username dan password salah !";
		}
	}
 
	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('index.php/login_adm'));
	}
}