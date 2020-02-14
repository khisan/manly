<?php

class User_setting extends CI_Controller{
	
	function __construct(){
		parent::__construct();
		if($this->session->userdata('status') != "login"){
			redirect(base_url("Login"));
		}
		$this->load->model('backend/M_user');
		$this->load->library('upload');
	}

	function index(){
		$data = $this->M_user->get_user_data()->row();
		$x['id_user'] = $data->id_user;
		$x['nama'] = $data->nama;
		$x['username'] = $data->username;
		$x['password'] = $data->password;
		$x['foto'] = $data->foto;
		$this->load->view('Backend/templates/header.php');
		$this->load->view('Backend/v_user_setting',$x);
		$this->load->view('Backend/templates/footer.php');
	}

	function update(){
		$id_user = htmlspecialchars($this->input->post('id_user',TRUE),ENT_QUOTES);
		$nama = $this->input->post('nama',TRUE);
		$username = $this->input->post('username',TRUE);
		
		$config['upload_path'] = './assets/images/user/';
    $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
    $config['encrypt_name'] = FALSE;

    $this->upload->initialize($config);
     if(!empty($_FILES['foto']['name'])){
    	if ($this->upload->do_upload('foto')){
    		$data_gambar = $this->M_user->get_user_data()->row_array();
    		$gambar = $this->M_user->get_user_data_by_id($data_gambar['id_user'])->row();
    		if ($gambar->foto != null) {
    			$target_file = './assets/images/user/'.$gambar->foto;
    			unlink($target_file);
    		}
        $foto = $this->upload->data();
        $bg_foto=$foto['file_name'];
      }
      $this->M_user->update_user($id_user,$nama,$username,$bg_foto);
      $this->session->set_flashdata('msg','success');
      redirect('backend/user_setting');
    }else{
    	$this->M_user->update_user_noimg($id_user,$nama,$username);
        $this->session->set_flashdata('msg','success');
        redirect('backend/user_setting');    
    }
	}

}