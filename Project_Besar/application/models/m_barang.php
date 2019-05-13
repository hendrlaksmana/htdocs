<?php
	class m_barang extends CI_Model
	{
			function tampil_data(){
				// kalo di native : mysql_query("select *from barang")
				return $this->db->get('produk')->result();
			}

			function input_data($data,$table){
				$this->db->insert($table,$data);
			}

		}
?>