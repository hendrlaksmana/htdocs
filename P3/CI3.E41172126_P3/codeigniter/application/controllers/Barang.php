<?php
	 class Barang extends CI_Controller{

	 function __construct(){
	 	parent::__construct();
	 	//load class M_barang
	 	$this->load->model("M_barang"); //merujuk ke model
	 }

	function index(){		
	 	 	
	 	 	
	 	 	$data['list']=$this->M_barang->list_barang();
	 	 	
	 		$this->load->view('v_barang',$data); //merujuk ke view
	 	//	$data['judul']="ini adalah barang";
	 
	 }
	 
	 function edit(){
	 	echo "Edit";
	 }

	 function add(){
	 		$this->load->view('v_tambah');
	 }



} 