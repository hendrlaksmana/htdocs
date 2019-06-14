<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class Produk extends REST_Controller {

    function __construct($config = 'rest') {
        parent::__construct($config);
        $this->load->database();
    }

    //Menampilkan data member
    function index_get() {
        $id = $this->get('id_produk');
        if ($id == '') {
            $member = $this->db->get('produk')->result();
        } else {
            $this->db->where('id_produk', $id);
            $member = $this->db->get('produk')->result();
        }
        $this->response($member, 200);
    }

    //Mengirim atau menambah data member baru
    function index_post() {
        $data = array(
                    'id_produk'       => $this->post('id_produk'),
                    'nama_produk'          => $this->post('nama_produk'),
                    'kategori'    => $this->post('kategori'),
                    'nama_file'    => $this->post('nama_file'),
                    'deskripsi'    => $this->post('deskripsi'),
                    'tanggal'    => $this->post('tanggal'),
                    'harga'    => $this->post('harga'));
        $insert = $this->db->insert('produk', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }

    //Memperbarui data member yang telah ada
    function index_put() {
        $id = $this->put('id_produk');
        $data = array(
                    'id_produk'       => $this->put('id_produk'),
                    'nama_produk'          => $this->put('nama_produk'),
                    'kategori'    => $this->put('kategori'),
                    'nama_file'    => $this->put('nama_file'),
                    'deskripsi'    => $this->put('deskripsi'),
                    'tanggal'    => $this->put('tanggal'),
                    'harga'    => $this->put('harga'));
        $this->db->where('id_produk', $id);
        $update = $this->db->update('produk', $data);
        if ($update) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }

    //Menghapus salah satu data member
    function index_delete() {
        $id = $this->delete('id_produk');
        $this->db->where('id_produk', $id);
        $delete = $this->db->delete('produk');
        
        if ($delete) {
            $this->response(array('status' => 'success'), 201);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
}
?>