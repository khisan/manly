<?php

class Blog_setting extends CI_Controller{
	
	function __construct(){
		parent::__construct();
		if($this->session->userdata('status') != "login"){
			redirect(base_url("Login"));
		}
		$this->load->model('backend/M_blog');
		$this->load->library('upload');
	}

	function index(){
		$data = $this->M_blog->get_blog_data()->row();
		$x['id_blog'] = $data->id_blog;
		$x['gambar_header'] = $data->gambar_header;
    $this->load->view('Backend/templates/header.php');
		$this->load->view('Backend/v_blog_setting',$x);
		$this->load->view('Backend/templates/footer.php');
	}

	function update(){
		$id_blog = htmlspecialchars($this->input->post('id_blog',TRUE),ENT_QUOTES);

		$config['upload_path'] = './assets/images/header_blog/';
    $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
    $config['encrypt_name'] = FALSE;

    $this->upload->initialize($config);
     if(!empty($_FILES['gambar_header']['name'])){
    	if ($this->upload->do_upload('gambar_header')){
    		$data_gambar = $this->M_blog->get_blog_data()->row_array();
    		$foto = $this->M_blog->get_blog_data_by_id($data_gambar['id_blog'])->row();
    		if ($foto->gambar_header != null) {
    			$target_file = './assets/images/header_blog/'.$foto->gambar_header;
    			unlink($target_file);
    		}
        $gambar_header = $this->upload->data();
        $bg_header=$gambar_header['file_name'];
      }
      $this->M_blog->update_blog($id_blog,$bg_header);
      $this->session->set_flashdata('msg','success');
      redirect('backend/blog_setting');
    }
	}

}