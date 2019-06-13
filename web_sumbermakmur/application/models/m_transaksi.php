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
<<<<<<< HEAD
<<<<<<< HEAD
				$this->db->select('*');
				$this->db->from('transaksi');
				$this->db->join('detail_transaksi','detail_transaksi.id_transaksi=transaksi.id_transaksi');
<<<<<<< HEAD

				$this->db->where($where);
				$this->db->delete($table);
			}

			function hapus_detail($where,$table){
				$this->db->select('*');
				$this->db->from('detail_transaksi');
				$this->db->join('transaksi','transaksi.id_transaksi=detail_transaksi.id_transaksi');
				$this->db->where($where);
				$this->db->delete($table);
			}

			function sukses_data($where,$table){		
				return $this->db->get_where($table,$where);
			}

			function final_data($where,$data,$table){
				$this->db->where($where);
				$this->db->insert($table,$data);
			}

			function del($where,$table){

=======
>>>>>>> parent of 356912a... update aboutus
=======
>>>>>>> parent of 54bb9f9... Merge branch 'master' of https://github.com/hendrlaksmana/htdocs
=======
>>>>>>> parent of 356912a... update aboutus
				$this->db->where($where);
				$this->db->delete($table);
			}

		}
?>