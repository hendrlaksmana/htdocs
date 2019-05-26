<?php
	class m_katalog extends CI_Model
	{
			function tampil_data(){
				// kalo di native : mysql_query("select *from barang")
				return $this->db->get('produk')->result();
			}

			//menampilkan produk alat
			function tampil_kategori($where,$table){		
				return $this->db->get_where($table,$where);
			}
	
		}
?>