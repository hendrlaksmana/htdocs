<?php
	class m_katalog extends CI_Model
	{
			function tampil_data($limit, $start){
				$query = $this->db->get('produk',$limit, $start)->result();
				return $query;
			}

			//menampilkan produk alat
			function tampil_kategori($where,$table){		
				return $this->db->get_where($table,$where);
			}
		}
?>