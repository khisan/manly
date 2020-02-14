<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->model('Backend/M_user');
		$this->load->model('M_login');
	}

	function index(){
		$this->load->view('login');
	}

	function aksi_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => md5($password)
		);
		$cek = $this->M_login->cek_login("tb_user",$where)->num_rows();
		$user = $this->db->get_where('tb_user', ['username' => $username])->row_array();
		if($cek > 0){

			$data_session = array(
				'id_user' => $user['id_user'],
				'username' => $username,
				'nama' => $user['nama'],
				'foto' => $user['foto'],
				'status' => "login"
			);
			$this->session->set_userdata($data_session);
			redirect("Backend/dashboard");

		}else{
			$this->session->set_flashdata('msg','error');
			redirect('Login');
		}
	}

	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('Login'));
	}
}
