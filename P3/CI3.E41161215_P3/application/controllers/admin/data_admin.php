<?php
	 class data_admin extends CI_Controller
	 {
	 	
	 	function index()
	 	{
	 		//load dari model
	 		$data['Judul']="Ini adalah Judul";
	 		$this->load->model("m_dataadmin");

	 		//load dari view
	 		$data['item']=$this->m_dataadmin->list_admin();
	 		$this->load->view("admin/v_dataadmin",$data);
	 	}
	 } 
 ?>