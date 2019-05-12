<?php
	class m_barang extends CI_Model
	{
		private $_table="produk";

		public $id_produk;
		public $nama_produk;
		public $kategori;
		public $nama_file;
		public $deskripsi;
		public $tanggal;
		public $harga;

		public function rules(){
			return [
				['field' => 'nama_produk',
				'label' => 'Nama Barang',
				'rules' => 'required'],

				['field' => 'kategori',
				'label' => 'kategori',
				'rules' => 'required'],

				//['field' => 'nama_file',
				//'label' => 'direktori file',
				//'rules' => 'required'],

				['field' => 'deskripsi',
				'label' => 'Deskripsi Barang',
				'rules' => 'required'],

				['field' => 'tanggal',
				'label' => 'Tanggal Update',
				'rules' => 'date(yyyy-mm-dd)'],

				['field' => 'harga',
				'label' => 'Harga Barang',
				'rules' => 'numeric'],
			];
		}

			function tampil_data(){
				// kalo di native : mysql_query("select *from barang")
				return $this->db->get('produk')->result();
			}

			public function save(){
	 		$post = $this -> input -> post();
	 		$this -> id_produk = uniqid();
	 		$this -> nama_produk = $post["nama"];
	 		$this -> kategori = $post["kategori"];
	 		//$this -> nama_file = $post["nama_file"];
	 		$this -> deskripsi = $post["deskripsi"];
	 		$this -> tanggal = $post["tang"];
	 		$this -> harga = $post["harga"];

	 		//mysql_query insert
	 		$this ->db->insert($this->_table,$this);
	 	}

		}
?>