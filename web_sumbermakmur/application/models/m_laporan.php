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
			
			function detailtrans($where,$table){
				// kalo di native : mysql_query("select *from barang")
				$this->db->select('*');
				$this->db->join('produk','produk.id_produk=detail_transaksi.id_produk');
				return $this->db->get_where($table,$where);
			}

			function detailtr($where,$table){
				// kalo di native : mysql_query("select *from barang")
				$this->db->select('*');
				$this->db->join('biaya_kirim','biaya_kirim.id_ongkir=laporan_transaksi.id_ongkir');
				$this->db->join('datamember','datamember.id_member=laporan_transaksi.id_member');
				return $this->db->get_where($table,$where);
			}

			function get_sum(){
				$this->db->select_sum('total_pembelian','total_jumlah');
				$query = $this->db->get('laporan_transaksi')->result();
				return $query;
			}

		}
?>