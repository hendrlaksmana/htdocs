<?php
	class m_barang extends CI_Model
	{
		private $_table="barang";

			function list_barang(){
				// kalo di native : mysql_query("select *from barang")
				return $this->db->get($this->_table)->result();
			}

			function edit_barang($where,$table){		
				return $this->db->get_where($table,$where);
			}
		}
?>