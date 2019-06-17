<?php
	class m_keranjang extends CI_Model
	{

		function tampil_produk(){
			return $this->db->get('produk')->result();
			}

		function tampil_transaksi(){
				// kalo di native : mysql_query("select *from barang")
				$this->db->select('*');
				$this->db->from('detail_transaksi');
				$this->db->join('produk','produk.id_produk=detail_transaksi.id_produk');
				$this->db->join('transaksi','transaksi.id_transaksi=detail_transaksi.id_transaksi');
				$this->db->join('biaya_kirim','biaya_kirim.id_ongkir=transaksi.id_ongkir');
				$this->db->join('datamember','datamember.id_member=transaksi.id_member');
				$query = $this->db->get();
				return $query->result();
			}

		
}
?>