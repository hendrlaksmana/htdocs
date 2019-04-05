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
	 		$this->load->view("admin/v_barang",$data);
	 	}

	 	//membuat fungsi edit, cek di adress /edit
	 	function edit(){
	 		$where = array('id_barang' => $id_barang);
			$data['item'] = $this->m_barang->edit_barang($where,'id_barang')->result();
			$this->load->view('v_barang',$data);
	 	}

	 	//membuat fungsi hapus, cek di adress /hapus
	 	function delete(){
	 		$where = array('id' => $id);
			$this->m_data->hapus_data($where,'user');
			redirect('crud/index');
	 	}
	 } 
 ?>