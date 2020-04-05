<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('M_blog');
		$this->load->model('Backend/M_kategori');
		$this->load->model('Backend/M_post');
		$this->load->model('Backend/M_tag');
		$this->load->helper('text');
	}

	function search(){
		$keyword = $this->input->post('keyword');
		$x['data']=$this->M_post->search_post($keyword);
		$x['kategori'] = $this->M_kategori->get_all_category();
    $x['tag'] = $this->M_tag->get_all_tag();
    $home = $this->db->get('tb_home',1)->row();
    $x['favicon'] = $home->favicon;
    $x['logo_header'] = $home->logo_header;
    $kontak = $this->db->get('tb_kontak',1)->row();
    $x['alamat'] = $kontak->alamat;
    $x['no_hp'] = $kontak->no_hp;
    $x['email'] = $kontak->email;
		$this->load->view('Frontend/cari_blog',$x);
		$this->load->view('Frontend/templates/footer.php');
	}

	function detail($id_post){
		$x['data'] = $this->M_post->get_post_by_id($id_post);
		$x['kategori'] = $this->M_kategori->get_all_category();
    $x['tag'] = $this->M_tag->get_all_tag();
    $home = $this->db->get('tb_home',1)->row();
    $x['favicon'] = $home->favicon;
    $x['logo_header'] = $home->logo_header;
    $kontak = $this->db->get('tb_kontak',1)->row();
    $x['alamat'] = $kontak->alamat;
    $x['no_hp'] = $kontak->no_hp;
    $x['email'] = $kontak->email;
		$this->load->view('Frontend/detail_blog',$x);
		$this->load->view('Frontend/templates/footer');
	}

	function kategori($id_kategori){
		$x['data'] = $this->M_post->get_post_by_kategori($id_kategori);
		$x['kategori'] = $this->M_kategori->get_all_category();
    $x['tag'] = $this->M_tag->get_all_tag();
    $home = $this->db->get('tb_home',1)->row();
    $x['favicon'] = $home->favicon;
    $x['logo_header'] = $home->logo_header;
    $kontak = $this->db->get('tb_kontak',1)->row();
    $x['alamat'] = $kontak->alamat;
    $x['no_hp'] = $kontak->no_hp;
    $x['email'] = $kontak->email;
    $x['gambar_header'] = $kontak->gambar_header;
		$this->load->view('Frontend/kategori_blog',$x);
		$this->load->view('Frontend/templates/footer');
	}

	function tag($id_tag){
		$x['data'] = $this->M_post->get_post_by_tag($id_tag);
		$x['kategori'] = $this->M_kategori->get_all_category();
    $x['tag'] = $this->M_tag->get_all_tag();
    $home = $this->db->get('tb_home',1)->row();
    $x['favicon'] = $home->favicon;
    $x['logo_header'] = $home->logo_header;
    $kontak = $this->db->get('tb_kontak',1)->row();
    $x['alamat'] = $kontak->alamat;
    $x['no_hp'] = $kontak->no_hp;
    $x['email'] = $kontak->email;
		$this->load->view('Frontend/tag_blog',$x);
		$this->load->view('Frontend/templates/footer');
	}

	public function index()
	{
		//konfigurasi pagination
    $config['base_url'] = site_url('Blog/index'); //site url
    $config['total_rows'] = $this->db->count_all('tb_post'); //total row
    $config['per_page'] = 2;  //show record per halaman
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

    $data['data'] = $this->M_post->get_post_list($config["per_page"], $data['page']);
    $data['kategori'] = $this->M_kategori->get_all_category();
    $data['tag'] = $this->M_tag->get_all_tag();           
    $data['pagination'] = $this->pagination->create_links();
    $home = $this->db->get('tb_home',1)->row();
    $data['favicon'] = $home->favicon;
    $data['logo_header'] = $home->logo_header;
    $kontak = $this->db->get('tb_kontak',1)->row();
    $data['alamat'] = $kontak->alamat;
    $data['no_hp'] = $kontak->no_hp;
    $data['email'] = $kontak->email;
    $kontak = $this->db->get('tb_blog', 1)->row();
    $data['gambar_header'] = $kontak->gambar_header;
  	$this->load->view('Frontend/blog.php',$data);
  	$this->load->view('Frontend/templates/footer.php');
	}
}
