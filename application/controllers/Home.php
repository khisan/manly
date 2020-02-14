<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	function __construct(){
		parent::__construct();
    $this->load->model('Backend/M_produk');
    $this->load->model('Backend/M_kontak');
	}

	public function index()
	{
		$home = $this->db->get('tb_home',1)->row();
		$x['caption_1'] = $home->caption_1;
		$x['caption_2'] = $home->caption_2;
		$x['caption_3'] = $home->caption_3;
		$x['image_slider_1'] = $home->image_slider_1;
		$x['image_slider_2'] = $home->image_slider_2;
		$x['image_slider_3'] = $home->image_slider_3;
    $x['favicon'] = $home->favicon;
    $x['logo_header'] = $home->logo_header;
    $kontak = $this->db->get('tb_kontak',1)->row();
    $x['alamat'] = $kontak->alamat;
    $x['no_hp'] = $kontak->no_hp;
    $x['email'] = $kontak->email;
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
    $x['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

    //panggil function get_mahasiswa_list yang ada pada mmodel mahasiswa_model. 
    $x['data'] = $this->M_produk->get_produk_list($config["per_page"], $x['page']);          
    $x['pagination'] = $this->pagination->create_links();
		$this->load->view('Frontend/index.php',$x);
		$this->load->view('Frontend/templates/footer.php');
	}
}
