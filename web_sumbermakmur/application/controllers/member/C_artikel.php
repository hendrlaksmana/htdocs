<?php
	 class c_artikel extends CI_Controller
	 {

	 	function __construct()
	 	{
	 		parent :: __construct();

		$this->load->library('pagination');
	 		$this->load->model("m_artikel");
	 			$this->load->helper('url');
	 	}
	 	
	 	function index()
	 	{
	 		$config['base_url'] = site_url('member/c_artikel'); //site url
        $config['total_rows'] = $this->db->count_all('produk'); //total row
        $config['per_page'] = 6;  //show record per halaman
        $config["uri_segment"] = 3;  // uri parameter
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);
 
        // Membuat Style pagination untuk BootStrap v4
      $config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Prev';
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';
 
        $this->pagination->initialize($config);
        $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
 
        //panggil function get_produk_list yang ada pada mmodel m_artikel. 
        $data['data'] = $this->m_artikel->tampil_data($config["per_page"], $data['page']);           
 
        $data['pagination'] = $this->pagination->create_links();
 
        //load view produk view
        $this->load->view('member/v_artikel',$data);

	 	}

	 	//menampilkan artikel
	 	function show($id_artikel){
	 		$where = array('id_artikel' => $id_artikel);
			$data['artikel'] = $this->m_artikel->show_artikel($where,'artikel')->result();
			$this->load->view("member/v_artikelshow",$data);
	 	}

	 	

	 } 
 ?>