<?php

class About_setting extends CI_Controller{
	
	function __construct(){
		parent::__construct();
    if($this->session->userdata('status') != "login"){
      redirect(base_url("Login"));
    }
		$this->load->model('backend/M_about');
		$this->load->library('upload');
	}

	function index(){
		$data = $this->M_about->get_tentang_data()->row();
		$x['id_about'] = $data->id_about;
		$x['gambar_header'] = $data->gambar_header;
		$x['judul_deskripsi_1'] = $data->judul_deskripsi_1;
		$x['judul_deskripsi_2'] = $data->judul_deskripsi_2;
		$x['isi_deskripsi_1'] = $data->isi_deskripsi_1;
		$x['isi_deskripsi_2'] = $data->isi_deskripsi_2;
		$x['gambar_deskripsi_1'] = $data->gambar_deskripsi_1;
		$x['gambar_deskripsi_2'] = $data->gambar_deskripsi_2;
		$this->load->view('Backend/templates/header.php');
		$this->load->view('Backend/v_about_setting',$x);
		$this->load->view('Backend/templates/footer.php');
	}

	function update(){
		$id_about = htmlspecialchars($this->input->post('id_about',TRUE),ENT_QUOTES);
		$judul_deskripsi_1 = $this->input->post('judul_deskripsi_1',TRUE);
		$isi_deskripsi_1 = $this->input->post('isi_deskripsi_1',TRUE);
		$judul_deskripsi_2 = $this->input->post('judul_deskripsi_2',TRUE);
		$isi_deskripsi_2 = $this->input->post('isi_deskripsi_2',TRUE);
		
		$config['upload_path'] = './assets/images/about/';
    $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
    $config['encrypt_name'] = FALSE;

    $this->upload->initialize($config);
     if(!empty($_FILES['gambar_header']['name']) && !empty($_FILES['gambar_deskripsi_1']['name']) && !empty($_FILES['gambar_deskripsi_2']['name'])){
    	if ($this->upload->do_upload('gambar_header')){
    		$data_gambar = $this->M_about->get_tentang_data()->row_array();
    		$foto = $this->M_about->get_tentang_data_by_id($data_gambar['id_about'])->row();
    		if ($foto->gambar_header != null) {
    			$target_file = './assets/images/about/'.$foto->gambar_header;
    			unlink($target_file);
    		}
        $gambar_header = $this->upload->data();
        $bg_header=$gambar_header['file_name'];
      }
      if ($this->upload->do_upload('gambar_deskripsi_1')){
      	$data_gambar = $this->M_about->get_tentang_data()->row_array();
    		$foto = $this->M_about->get_tentang_data_by_id($data_gambar['id_about'])->row();
    		if ($foto->gambar_deskripsi_1 != null) {
    			$target_file = './assets/images/about/'.$foto->gambar_deskripsi_1;
    			unlink($target_file);
    		}
        $gambar_deskripsi_1 = $this->upload->data();
        $bg_deskripsi_1=$gambar_deskripsi_1['file_name'];
      }
      if ($this->upload->do_upload('gambar_deskripsi_2')){
      	$data_gambar = $this->M_about->get_tentang_data()->row_array();
    		$foto = $this->M_about->get_tentang_data_by_id($data_gambar['id_about'])->row();
    		if ($foto->gambar_deskripsi_2 != null) {
    			$target_file = './assets/images/about/'.$foto->gambar_deskripsi_2;
    			unlink($target_file);
    		}
        $gambar_deskripsi_2 = $this->upload->data();
        $bg_deskripsi_2=$gambar_deskripsi_2['file_name'];
      }
      $this->M_about->update_tentang($id_about,$bg_header,$judul_deskripsi_1,$isi_deskripsi_1,$bg_deskripsi_1,$judul_deskripsi_2,$isi_deskripsi_2,$bg_deskripsi_2);
      $this->session->set_flashdata('msg','success');
      redirect('backend/about_setting');

    }elseif(!empty($_FILES['gambar_header']['name'])){
    	if ($this->upload->do_upload('gambar_header')){
    		$data_gambar = $this->M_about->get_tentang_data()->row_array();
    		$foto = $this->M_about->get_tentang_data_by_id($data_gambar['id_about'])->row();
    		if ($foto->gambar_header != null) {
    			$target_file = './assets/images/about/'.$foto->gambar_header;
    			unlink($target_file);
    		}
        $gambar_header = $this->upload->data();
        $bg_header=$gambar_header['file_name'];
      }
	    $this->M_about->update_tentang_bg_header($id_about,$bg_header,$judul_deskripsi_1,$isi_deskripsi_1,$judul_deskripsi_2,$isi_deskripsi_2);
      $this->session->set_flashdata('msg','success');
      redirect('backend/about_setting');

    }elseif(!empty($_FILES['gambar_deskripsi_1']['name'])){
    	if ($this->upload->do_upload('gambar_deskripsi_1')){
    		$data_gambar = $this->M_about->get_tentang_data()->row_array();
    		$foto = $this->M_about->get_tentang_data_by_id($data_gambar['id_about'])->row();
    		if ($foto->gambar_deskripsi_1 != null) {
    			$target_file = './assets/images/about/'.$foto->gambar_deskripsi_1;
    			unlink($target_file);
    		}
        $gambar_deskripsi_1 = $this->upload->data();
        $bg_deskripsi_1=$gambar_deskripsi_1['file_name'];
      }
	    $this->M_about->update_tentang_bg_deskripsi_1($id_about,$judul_deskripsi_1,$isi_deskripsi_1,$bg_deskripsi_1,$judul_deskripsi_2,$isi_deskripsi_2);
      $this->session->set_flashdata('msg','success');
      redirect('backend/about_setting');

    }elseif(!empty($_FILES['gambar_deskripsi_2']['name'])){
    	if ($this->upload->do_upload('gambar_deskripsi_2')){
    		$data_gambar = $this->M_about->get_tentang_data()->row_array();
    		$foto = $this->M_about->get_tentang_data_by_id($data_gambar['id_about'])->row();
    		if ($foto->gambar_deskripsi_2 != null) {
    			$target_file = './assets/images/about/'.$foto->gambar_deskripsi_2;
    			unlink($target_file);
    		}
        $gambar_deskripsi_2 = $this->upload->data();
        $bg_deskripsi_2=$gambar_deskripsi_2['file_name'];
      }
	    $this->M_about->update_tentang_bg_deskripsi_2($id_about,$judul_deskripsi_1,$isi_deskripsi_1,$judul_deskripsi_2,$isi_deskripsi_2,$bg_deskripsi_2);
      $this->session->set_flashdata('msg','success');
      redirect('backend/about_setting');

    }else{
    	$this->M_about->update_tentang_noimg($id_about,$judul_deskripsi_1,$isi_deskripsi_1,$judul_deskripsi_2,$isi_deskripsi_2);
        $this->session->set_flashdata('msg','success');
        redirect('backend/about_setting');    
    }
	}

}