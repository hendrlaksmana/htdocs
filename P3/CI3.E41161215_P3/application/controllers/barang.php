<?php

class barang extends CI_Controller
{
	
	function index()
	{
		$data['judul']="Judul Barang";
		$this->load->model("m_barang");

		$data['item']=$this->m_barang->list_barang();
		$this->load->view("v_barang",$data);
	}

	function edit(){
		echo "Edit";
	}
}
  ?>