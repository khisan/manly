<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Shop extends CI_Controller {

	function __construct(){
	parent::__construct();
		$this->load->model('Backend/M_produk');
    $this->load->model('Backend/M_kategori');
	}

	function search(){
    $home = $this->db->get('tb_home',1)->row();
    $data['favicon'] = $home->favicon;
    $data['logo_header'] = $home->logo_header;
		$keyword = $this->input->post('keyword');
		$data['products']=$this->M_produk->search_product($keyword);
    $data['kategori'] = $this->M_kategori->get_all_category();
    $kontak = $this->db->get('tb_kontak',1)->row();
    $data['alamat'] = $kontak->alamat;
    $data['no_hp'] = $kontak->no_hp;
    $data['email'] = $kontak->email;
		$this->load->view('Frontend/cari_produk',$data);
		$this->load->view('Frontend/templates/footer.php');
	}

	function detail($id_produk){
    $home = $this->db->get('tb_home',1)->row();
    $x['favicon'] = $home->favicon;
    $x['logo_header'] = $home->logo_header;
		$x['data'] = $this->M_produk->get_produk_by_id($id_produk);
    $kontak = $this->db->get('tb_kontak',1)->row();
    $x['alamat'] = $kontak->alamat;
    $x['no_hp'] = $kontak->no_hp;
    $x['email'] = $kontak->email;
		$this->load->view('Frontend/detail_produk',$x);
		$this->load->view('Frontend/templates/footer');
	}

	public function index()
	{
    //konfigurasi pagination
    $config['base_url'] = site_url('shop/index'); //site url
    $config['total_rows'] = $this->db->count_all('tb_produk'); //total row
    $config['per_page'] = 12;  //show record per halaman
    $config["uri_segment"] = 3;  // uri parameter
    $choice = $config["total_rows"] / $config["per_page"];
    $config["num_links"] = floor($choice);

    //Membuat Style pagination untuk BootStrap v4
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

    //panggil function get_mahasiswa_list yang ada pada mmodel mahasiswa_model. 
    $home = $this->db->get('tb_home',1)->row();
    $data['favicon'] = $home->favicon;
    $data['logo_header'] = $home->logo_header;
    $data['data'] = $this->M_produk->get_produk_list($config["per_page"], $data['page']);          
    $data['pagination'] = $this->pagination->create_links();
    $kontak = $this->db->get('tb_kontak',1)->row();
    $data['alamat'] = $kontak->alamat;
    $data['no_hp'] = $kontak->no_hp;
    $data['email'] = $kontak->email;
  	$this->load->view('Frontend/produk.php',$data);
  	$this->load->view('Frontend/templates/footer.php');
	}
}