<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class Artikel extends REST_Controller {

    function __construct($config = 'rest') {
        parent::__construct($config);
        $this->load->database();
    }

    //Menampilkan data member
    function index_get() {
        $id = $this->get('id_artikel');
        if ($id == '') {
            $artikel = $this->db->get('artikel')->result();
        } else {
            $this->db->where('id_artikel', $id);
            $artikel = $this->db->get('artikel')->result();
        }
        $this->response($artikel, 200);
    }

    //Mengirim atau menambah data member baru
    function index_post() {
        $data = array(
                    'id_artikel'       => $this->post('id_artikel'),
                    'judul_artikel'          => $this->post('judul_artikel'),
                    'foto'    => $this->post('foto'),
                    'deskripsi'    => $this->post('deskripsi'),
                    'tanggal'    => $this->post('tanggal'),
                    'penulis'    => $this->post('penulis'));
        $insert = $this->db->insert('artikel', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }

    //Memperbarui data member yang telah ada
    function index_put() {
        $id = $this->put('id_artikel');
        $data = array(
                    'id_artikel'       => $this->put('id_artikel'),
                    'judul_artikel'          => $this->put('judul_artikel'),
                    'foto'    => $this->put('foto'),
                    'deskripsi'    => $this->put('deskripsi'),
                    'tanggal'    => $this->put('tanggal'),
                    'penulis'    => $this->put('penulis'));
        $this->db->where('id_artikel', $id);
        $update = $this->db->update('artikel', $data);
        if ($update) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }

    //Menghapus salah satu data member
    function index_delete() {
        $id = $this->delete('id_artikel');
        $this->db->where('id_artikel', $id);
        $delete = $this->db->delete('artikel');
        
        if ($delete) {
            $this->response(array('status' => 'success'), 201);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
}
?>