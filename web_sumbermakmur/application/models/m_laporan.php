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

			function hapus_data($where,$table){
				$this->db->select('*');
				$this->db->from('laporan_transaksi');
				$this->db->join('detail_transaksi','detail_transaksi.id_transaksi=laporan_transaksi.id_transaksi');
				$this->db->where($where);
				$this->db->delete($table);
			}

			function hapus_detail($where,$table){
				$this->db->select('*');
				$this->db->from('detail_transaksi');
				$this->db->join('laporan_transaksi','laporan_transaksi.id_transaksi=detail_transaksi.id_transaksi');
				$this->db->where($where);
				$this->db->delete($table);
			}
			
			function detailtrans(){
				// kalo di native : mysql_query("select *from barang")
				$this->db->select('*');
				$this->db->from('detail_transaksi');
				$this->db->join('produk','produk.id_produk=detail_transaksi.id_produk');
				$this->db->join('laporan_transaksi','laporan_transaksi.id_transaksi=detail_transaksi.id_transaksi');
				$this->db->join('biaya_kirim','biaya_kirim.id_ongkir=laporan_transaksi.id_ongkir');
				$this->db->join('datamember','datamember.id_member=laporan_transaksi.id_member');
				$query = $this->db->get();
				return $query->result();
			}

			function detailtr(){
				// kalo di native : mysql_query("select *from barang")
				$this->db->select('*');
				$this->db->from('transaksi');
				$this->db->join('biaya_kirim','biaya_kirim.id_ongkir=transaksi.id_ongkir');
				$this->db->join('datamember','datamember.id_member=transaksi.id_member');
				$this->db->join('detail_transaksi','transaksi.id_transaksi=detail_transaksi.id_transaksi');
				$this->db->join('produk','produk.id_produk=detail_transaksi.id_produk');
				$this->db->limit(1);
				$querys = $this->db->get();
				return $querys->result();
			}

		}
?>