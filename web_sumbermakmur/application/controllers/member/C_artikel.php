<?php
	 class C_artikel extends CI_Controller {

	 	function __construct() 	{
	 		parent :: __construct();
	 		
		 		$this->load->model("m_artikel");
	 			$this->load->helper('url');
	 	}
	 	
	 	function index()
	 	{
	 		$data['artikel']=$this->m_artikel->tampil_data();
	 		$this->load->view("member/v_artikel",$data);
	 	}

	 	function show()
	 	{
	 		$data['artikel']=$this->m_artikel->tampil_data();
	 		$this->load->view("member/v_artikelshow",$data);
	 	
	 	}
	 }
	 	
?>