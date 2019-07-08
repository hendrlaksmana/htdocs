<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;
class artikel_android extends REST_Controller {

    function __construct($config = 'rest') {
        parent::__construct($config);
    }

    //Menampilkan data artikel
    function index_get() { 
        $artikel = $this->db->get('artikel')->result();
        $this->response(array("result"=>$artikel, 200));
    }

}
?>