<?php
	class m_member extends CI_Model
	{
			function tampil_data(){
				// kalo di native : mysql_query("select *from barang")
				return $this->db->get('datamember')->result();
			}

			function input_data($data,$table){
				$this->db->insert($table,$data);
			}

			function tambah_pelanggan($data)
				{
					$this->db->insert('tbl_pelanggan', $data);
					$id = $this->db->insert_id();
					return (isset($id)) ? $id : FALSE;
				}

			function edit_data($where,$table){		
				return $this->db->get_where($table,$where);
			}

			function update_data($where,$data,$table){
				$this->db->where($where);
				$this->db->update($table,$data);
			}

			function hapus_data($where,$table){
				$this->db->where($where);
				$this->db->delete($table);
			}

		}
?>