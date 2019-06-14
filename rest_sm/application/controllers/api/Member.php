<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class Member extends REST_Controller {

    function __construct($config = 'rest') {
        parent::__construct($config);
        $this->load->database();
    }

    //Menampilkan data member
    function index_get() {
        $id = $this->get('id_member');
        if ($id == '') {
            $member = $this->db->get('datamember')->result();
        } else {
            $this->db->where('id_member', $id);
            $member = $this->db->get('datamember')->result();
        }
        $this->response($member, 200);
    }

    //Mengirim atau menambah data member baru
    function index_post() {
        $data = array(
                    'id_member'       => $this->post('id_member'),
                    'nama'          => $this->post('nama'),
                    'alamat'    => $this->post('alamat'),
                    'no_telp'    => $this->post('no_telp'),
                    'email'    => $this->post('email'),
                    'username'    => $this->post('username'),
                    'password'    => md5($this->post('password')));
        $insert = $this->db->insert('datamember', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }

    //Memperbarui data member yang telah ada
    function index_put() {
        $id = $this->put('id_member');
        $data = array(
                    'id_member'       => $this->put('id_member'),
                    'nama'          => $this->put('nama'),
                    'alamat'    => $this->put('alamat'),
                    'no_telp'    => $this->put('no_telp'),
                    'email'    => $this->put('email'),
                    'username'    => $this->put('username'),
                    'password'    => md5($this->put('password')));
        $this->db->where('id_member', $id);
        $update = $this->db->update('datamember', $data);
        if ($update) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }

    //Menghapus salah satu data member
    function index_delete() {
        $id = $this->delete('id_member');
        $this->db->where('id_member', $id);
        $delete = $this->db->delete('datamember');
        
        if ($delete) {
            $this->response(array('status' => 'success'), 201);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
}
?>