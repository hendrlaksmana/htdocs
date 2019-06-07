<?php
	class m_laporan extends CI_Model
	{
			function tampil_data(){
				// kalo di native : mysql_query("select *from barang")
				$this->db->select('*');
				$this->db->from('laporan_transaksi');
				$this->db->join('datamember','datamember.id_member=laporan_transaksi.id_member');
				$query = $this->db->get();
				return $query->result();
			}

		}
?>