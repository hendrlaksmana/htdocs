<?php
	class m_transaksi extends CI_Model
	{
			function tampil_data(){
				// kalo di native : mysql_query("select *from barang")
				$this->db->select('*');
				$this->db->from('transaksi');
				$this->db->join('datamember','datamember.id_member=transaksi.id_member');
				$query = $this->db->get();
				return $query->result();
			}

			function hapus_data($where,$table){
				$this->db->where($where);
				$this->db->delete($table);
			}

		}
?>