<?php
	 class barang extends CI_Controller
	 {
	 	
	 	function index()
	 	{
	 		//load dari model
	 		$data['Judul']="Ini adalah Judul";
	 		$this->load->model("m_barang");

	 		//load dari view
	 		$data['item']=$this->m_barang->list_barang();
	 		$this->load->view("v_barang",$data);
	 	}

	 	//membuat fungsi edit, cek di adress /edit
	 	function edit(){
	 		echo "edit";
	 	}
	 } 
 ?>