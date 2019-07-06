<?php
	 class C_verifikasi extends CI_Controller
	 {

	 	function __construct()
	 	{
	 		parent :: __construct();
	 		if($this->session->userdata('status') != "login"){
			redirect(base_url("index.php/login_member"));
		}
	 		$this->load->model("m_verifikasi");
	 			$this->load->helper('url');
	 	}
	 	
	 	function index()
	 	{
	 		$this->load->view("member/v_verifikasi");
	 	}

	 	private function _uploadImage()
		{
		    $config['upload_path']          = './assets/upload/transfer_bank/';
		    $config['allowed_types']        = 'gif|jpg|png|jpeg';
		    $config['file_name']            = $_FILES['foto_transferbank']['name'];
		    $config['overwrite']			= true;
		    $config['max_size']             = 1024; // 1MB
		    // $config['max_width']            = 1024;
		    // $config['max_height']           = 768;

		    $this->load->library('upload', $config);

		    if ($this->upload->do_upload('foto_transferbank')) {
		        return $this->upload->data("file_name");
		    }
		    
		    return "default.jpg";
		}

	 	function finalisasi(){
			$id_verifikasi = $this->input->post('id_verifikasi');
			$nama = $this->input->post('nama');
			$username = $this->input->post('username');
			$email = $this->input->post('email');
			$alamat = $this->input->post('alamat');
			$no_telp = $this->input->post('no_telp');
			$foto_transferbank = $this->_uploadImage();
		 
			$data = array(
				'nama' => $nama,
				'username' => $username,
				'email' => $email,
				'alamat' => $alamat,
				'no_telp' => $no_telp,
				'foto_transferbank' => $foto_transferbank
			);
		 
			$where = array(
				'id_verifikasi' => $id_verifikasi
			);
		 
			$this->m_verifikasi->final_data($where,$data,'verifikasi');
			redirect(base_url());
		}

	 } 
 ?>