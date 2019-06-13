<?php
	class m_verifikasi extends CI_Model
	{
			function tampil_data(){
				// kalo di native : mysql_query("select *from barang")
				return $this->db->get('verifikasi')->result();
			}

			function hapus_data($where,$table){
				$this->db->where($where);
				$this->db->delete($table);
			}

		}
?>