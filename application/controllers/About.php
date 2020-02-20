<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Backend/M_about');
	}

	public function index()
	{
		$home = $this->db->get('tb_home',1)->row();
		$data['favicon'] = $home->favicon;
    $data['logo_header'] = $home->logo_header;
		$tentang = $this->db->get('tb_about', 1)->row();
		$data['gambar_header'] = $tentang->gambar_header;
		$data['judul_deskripsi_1'] = $tentang->judul_deskripsi_1;
		$data['isi_deskripsi_1'] = $tentang->isi_deskripsi_1;
		$data['gambar_deskripsi_1'] = $tentang->gambar_deskripsi_1;
		$data['judul_deskripsi_2'] = $tentang->judul_deskripsi_2;
		$data['isi_deskripsi_2'] = $tentang->isi_deskripsi_2;
		$data['gambar_deskripsi_2'] = $tentang->gambar_deskripsi_2;
		$kontak = $this->db->get('tb_kontak',1)->row();
		$data['alamat'] = $kontak->alamat;
    $data['no_hp'] = $kontak->no_hp;
    $data['email'] = $kontak->email;
		$this->load->view('Frontend/about.php',$data);
		$this->load->view('Frontend/templates/footer.php');
	}
}
