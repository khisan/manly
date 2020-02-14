<?php
class Tag extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('status') != "login"){
			redirect(base_url("Login"));
		}
		$this->load->model('Backend/M_tag');
	}

	function index(){
		$x['data'] = $this->M_tag->get_all_tag();
		$this->load->view('Backend/templates/header.php');
		$this->load->view('Backend/v_tag',$x);
		$this->load->view('Backend/templates/footer.php');
	}

	function save(){
		$tag = strip_tags(htmlspecialchars($this->input->post('nama_tag',TRUE),ENT_QUOTES));
		$this->M_tag->add_tag($tag);
		$this->session->set_flashdata('msg','success');
		redirect('Backend/tag');
	}

	function edit(){
		$id		 = $this->input->post('kode',TRUE);
		$tag 	 = strip_tags(htmlspecialchars($this->input->post('nama_tag2',TRUE),ENT_QUOTES));
		$this->M_tag->edit_tag($id,$tag);
		$this->session->set_flashdata('msg','info');
		redirect('Backend/tag');
	}

	function delete(){
		$id = $this->input->post('id',TRUE);
		$this->M_tag->delete_tag($id);
		$this->session->set_flashdata('msg','success-delete');
		redirect('Backend/tag');
	}
}