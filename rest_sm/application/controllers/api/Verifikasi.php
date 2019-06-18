<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class Verifikasi extends REST_Controller {

    function __construct($config = 'rest') {
        parent::__construct($config);
        $this->load->database();
    }

    //Menampilkan data member
    function index_get() {
        $id = $this->get('id_verifikasi');
        if ($id == '') {
            $verifikasi = $this->db->get('verifikasi')->result();
        } else {
            $this->db->where('id_verifikasi', $id);
            $verifikasi = $this->db->get('verifikasi')->result();
        }
        $this->response($verifikasi, 200);
    }

    //Mengirim atau menambah data member baru
    function index_post() {
        $data = array(
                    'id_verifikasi'       => $this->post('id_verifikasi'),
                    'nama'          => $this->post('nama'),
                    'username'    => $this->post('username'),
                    'email'    => $this->post('email'),
                    'alamat'    => $this->post('alamat'),
                    'no_telp'    => $this->post('no_telp'),
                    'foto_transferbank'    => $this->post('foto_transferbank'));
        $insert = $this->db->insert('verifikasi', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }

    //Memperbarui data member yang telah ada
    function index_put() {
        $id = $this->put('id_verifikasi');
        $data = array(
                    'id_verifikasi'       => $this->put('id_verifikasi'),
                    'nama'          => $this->put('nama'),
                    'username'    => $this->put('username'),
                    'email'    => $this->put('email'),
                    'alamat'    => $this->put('alamat'),
                    'no_telp'    => $this->put('no_telp'),
                    'foto_transferbank'    => $this->put('foto_transferbank'));
        $this->db->where('id_verifikasi', $id);
        $update = $this->db->update('verifikasi', $data);
        if ($update) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }

    //Menghapus salah satu data member
    function index_delete() {
        $id = $this->delete('id_verifikasi');
        $this->db->where('id_verifikasi', $id);
        $delete = $this->db->delete('verifikasi');
        
        if ($delete) {
            $this->response(array('status' => 'success'), 201);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
}
?>