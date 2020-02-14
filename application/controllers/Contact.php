<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Backend/M_kontak');
	}

	public function index()
	{
		$kontak = $this->db->get('tb_kontak', 1)->row();
		$data['gambar_header'] = $kontak->gambar_header;
		$data['alamat'] = $kontak->alamat;
		$data['no_hp'] = $kontak->no_hp;
		$data['email'] = $kontak->email;
		$home = $this->db->get('tb_home',1)->row();
    $data['favicon'] = $home->favicon;
    $data['logo_header'] = $home->logo_header;
		$this->load->view('Frontend/contact.php',$data);
		$this->load->view('Frontend/templates/footer.php');
	}
}
