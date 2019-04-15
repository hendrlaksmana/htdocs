<?php
	 class Barang extends CI_Controller{

	 function __construct()
	 {
	 	parent ::__construct();
	 	//load class M_barang
	 	$this->load->model("M_barang"); //merujuk ke model
	 	//load class form validasi
	 	$this->load->library("form_validation");
	 }

	function index()
	{		
			//load dari model 	 	
	 	 	$data['list']=$this->M_barang->list_barang();
	 	 	
	 		$this->load->view('v_barang',$data); //merujuk ke view
	 	//	$data['judul']="ini adalah barang";
	 
	 }
	 
	 function edit(){
	 	echo "Edit";
	 }

	 function add(){
	 		$Barang= $this ->M_barang;
	 		$this->load->view('v_tambah');
	 
	 		$validasi=$this->form_validation;
	 		$validasi->set_rules($Barang->rules());

	 		if ($validasi ->run()) {
				$Barang->save(); 			
	 		}
	}
}