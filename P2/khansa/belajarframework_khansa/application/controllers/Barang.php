<?php
    class Barang extends CI_controller{

        function_construct(){
            parent::_construct();
                //load class Barang_model
                $this->load-> model("Barang_model");
                //load class form_validation
                $this->load->library("form_validation");
            }
        
        function index(){
            $data['list']=$this->barang_model->getAll();
            $this->load->view("admin/barang/v_barang", $data);
        }
        
        function add(){
            $this->load->view('admin/barang/v_tambah';)
        }

        function edit($id){
        }
    }
?>
