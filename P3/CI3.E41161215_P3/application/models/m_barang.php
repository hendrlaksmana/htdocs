<?php
	class m_barang extends CI_Model
	{
		private $_table="barang";

		public $id_barang;
		public $nama;
		public $deskripsi;
		public $stok;
		public $harga;

		public function rules(){
			return [
				['field' => 'nama',
				'label' => 'Nama Barang',
				'rules' => 'required'],

				['field' => 'harga',
				'label' => 'Harga Barang',
				'rules' => 'numeric'],

				['field' => 'deskripsi',
				'label' => 'Deskripsi Barang',
				'rules' => 'required'],

				['field' => 'stok',
				'label' => 'Stok Barang',
				'rules' => 'numeric']
			];
		}

			function list_barang(){
				// kalo di native : mysql_query("select *from barang")
				return $this->db->get($this->_table)->result();
			}

			public function save(){
	 		$post = $this -> input -> post();
	 		$this -> id_barang = uniqid();
	 		$this -> nama = $post["nama"];
	 		$this -> deskripsi = $post["deskripsi"];
	 		$this -> stok = $post["stok"];
	 		$this -> harga = $post["harga"];

	 		//mysql_query insert
	 		$this ->db->insert($this->_table,$this);
	 	}

	 		function hapus_data($where,$table){
				$this->db->where($where);
				$this->db->delete($table);
			}

			function edit_barang($where,$table){		
				return $this->db->get_where($table,$where);
			}

			function update_data($where,$data,$table){
				$this->db->where($where);
				$this->db->update($table,$data);
			}	

		}
?>