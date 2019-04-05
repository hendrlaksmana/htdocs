<?php
class M_barang extends CI_Model{
	//buat fungsi utk ambil data

	private $table="barang";
	public function list_barang(){
		// mysqli_query(select * from)
		return $this->db->get($this->table)->result();
	}

	public function save()
	{
		//mysql_query ("select * from kode barang where kdbarang="$")
		$post = $this->input->post();
	}

}

