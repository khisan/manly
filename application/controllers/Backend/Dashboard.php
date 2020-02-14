<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('backend/M_post');
		$this->load->model('backend/M_produk');
	
		if($this->session->userdata('status') != "login"){
			redirect(base_url("Login"));
		}
	}

	public function index()
	{
		$data['all_post'] = $this->M_post->count_all_post(); 
		$data['all_post_produk'] = $this->M_produk->count_all_produk();
		$this->load->view('Backend/templates/header.php');
		$this->load->view('Backend/index.php',$data);
		$this->load->view('Backend/templates/footer.php');
	}
}
