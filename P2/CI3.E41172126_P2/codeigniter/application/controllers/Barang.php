<?php
	 class Barang extends CI_Controller
	 {
	 	 public	function index(){		
	 	 	
	 	 	$this->load->model("M_barang"); //merujuk ke model
	 	 	$data['list']=$this->M_barang->list_barang();
	 	 	
	 		$data['judul']="ini adalah barang";
	 		$this->load->view('v_barang',$data); //merujuk ke view
	 	}
	 
	 function edit(){
	 	echo "Edit";
	 }

} 