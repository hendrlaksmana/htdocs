<?php
	 class c_artikel extends CI_Controller
	 {

	 	function __construct()
	 	{
	 		parent :: __construct();
		
	 		$this->load->model("m_artikel");
	 			$this->load->helper('url');
	 	}
	 	
	 	function index()
	 	{
	 		$data['artikel']=$this->m_artikel->tampil_data();
	 		$this->load->view("member/v_artikel",$data);
	 	}

	 	//menampilkan artikel
	 	function show($id_artikel){
	 		$where = array('id_artikel' => $id_artikel);
			$data['artikel'] = $this->m_artikel->show_artikel($where,'artikel')->result();
			$this->load->view("member/v_artikelshow",$data);
	 	}

	 	

	 } 
 ?>