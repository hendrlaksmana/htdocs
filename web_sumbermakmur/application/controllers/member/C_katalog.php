<?php
	 class C_katalog extends CI_Controller
	 {

	 	function __construct()
	 	{
	 		parent :: __construct();
			
			$this->load->library('pagination');
	 		$this->load->model("m_katalog");
	 		$this->load->helper('url');
	 	}
	 	
	 	
	 	function index()
	 	{
	 		$config['base_url'] = site_url('member/c_katalog/index'); //site url
        $config['total_rows'] = $this->db->count_all('produk'); //total row
        $config['per_page'] = 20;  //show record per halaman
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
 
        //panggil function get_produk_list yang ada pada mmodel m_katalog. 
        $data['data'] = $this->m_katalog->tampil_data($config["per_page"], $data['page']);           
 
        $data['pagination'] = $this->pagination->create_links();
 
        //load view produk view
        $this->load->view('member/v_katalog_semua',$data);

	 	}

	 	//menampilkan produk
	 	function alat_pertanian(){
	 		$where = array('kategori' => 'alat pertanian');
			$data['produk'] = $this->m_katalog->tampil_kategori($where,'produk')->result();
			$this->load->view("member/v_katalog",$data);
	 	}

	 	function benih(){
	 		$where = array('kategori' => 'benih');
			$data['produk'] = $this->m_katalog->tampil_kategori($where,'produk')->result();
			$this->load->view("member/v_katalog",$data);
	 	}

	 	function bibit(){
	 		$where = array('kategori' => 'bibit');
			$data['produk'] = $this->m_katalog->tampil_kategori($where,'produk')->result();
			$this->load->view("member/v_katalog",$data);
	 	}
	 	function pupuk(){
	 		$where = array('kategori' => 'pupuk');
			$data['produk'] = $this->m_katalog->tampil_kategori($where,'produk')->result();
			$this->load->view("member/v_katalog",$data);
	 	}


	 	//menampilkan detail produk
	 	//Ini sudah fix muncul
	 	function detail_alat($id_produk){
	 		$where = array('id_produk' => $id_produk);
			$data['produk'] = $this->m_katalog->tampil_kategori($where,'produk')->result();
			$this->load->view("member/v_kategorishow",$data);
	 	}
	 	

	 } 
 ?>