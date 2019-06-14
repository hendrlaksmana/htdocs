<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class Admin extends REST_Controller {

    function __construct($config = 'rest') {
        parent::__construct($config);
        $this->load->database();
    }

    //Menampilkan data member
    function index_get() {
        $id = $this->get('id_admin');
        if ($id == '') {
            $member = $this->db->get('dataadmin')->result();
        } else {
            $this->db->where('id_admin', $id);
            $member = $this->db->get('dataadmin')->result();
        }
        $this->response($member, 200);
    }

    //Mengirim atau menambah data member baru
    function index_post() {
        $data = array(
                    'id_admin'       => $this->post('id_admin'),
                    'nama'          => $this->post('nama'),
                    'username'    => $this->post('username'),
                    'password'    => md5($this->post('password')),
                    'level'    => $this->post('level'));
        $insert = $this->db->insert('dataadmin', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }

    //Memperbarui data member yang telah ada
    function index_put() {
        $id = $this->put('id_admin');
        $data = array(
                    'id_admin'       => $this->put('id_admin'),
                    'nama'          => $this->put('nama'),
                    'username'    => $this->put('username'),
                    'password'    => md5($this->put('password')),
                    'level'    => $this->put('level'));
        $this->db->where('id_admin', $id);
        $update = $this->db->update('dataadmin', $data);
        if ($update) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }

    //Menghapus salah satu data member
    function index_delete() {
        $id = $this->delete('id_admin');
        $this->db->where('id_admin', $id);
        $delete = $this->db->delete('dataadmin');
        
        if ($delete) {
            $this->response(array('status' => 'success'), 201);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
}
?>