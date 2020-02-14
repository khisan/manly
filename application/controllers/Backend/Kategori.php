<?php
class Kategori extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('status') != "login"){
			redirect(base_url("Login"));
		}
		$this->load->model('Backend/M_kategori');
		$this->load->helper('text');
	}

	function index(){
		$x['data'] = $this->M_kategori->get_all_category();
		$this->load->view('Backend/templates/header.php');
		$this->load->view('Backend/v_kategori',$x);
		$this->load->view('Backend/templates/footer.php');
	}

	function save(){
		$kategori = strip_tags(htmlspecialchars($this->input->post('nama_kategori',TRUE),ENT_QUOTES));
		$string   = preg_replace('/[^a-zA-Z0-9 \&%|{.}=,?!*()"-_+$@;<>\']/', '', $kategori);
		$trim     = trim($string);
		$slug     = strtolower(str_replace(" ", "-", $trim));
		$this->M_kategori->add_kategori($kategori,$slug);
		$this->session->set_flashdata('msg','success');
		redirect('Backend/kategori');
	}

	function edit(){
		$id		  = $this->input->post('kode',TRUE);
		$kategori = strip_tags(htmlspecialchars($this->input->post('nama_kategori2',TRUE),ENT_QUOTES));
		$string   = preg_replace('/[^a-zA-Z0-9 \&%|{.}=,?!*()"-_+$@;<>\']/', '', $kategori);
		$trim     = trim($string);
		$slug     = strtolower(str_replace(" ", "-", $trim));
		$this->M_kategori->edit_kategori($id,$kategori,$slug);
		$this->session->set_flashdata('msg','info');
		redirect('Backend/kategori');
	}

	function delete(){
		$id = $this->input->post('id',TRUE);
		$this->M_kategori->delete_kategori($id);
		$this->session->set_flashdata('msg','success-delete');
		redirect('Backend/kategori');
	}

}
