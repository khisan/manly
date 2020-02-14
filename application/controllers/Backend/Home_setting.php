<?php

class Home_setting extends CI_Controller{
	
	function __construct(){
		parent::__construct();
    if($this->session->userdata('status') != "login"){
      redirect(base_url("Login"));
    }
		$this->load->model('backend/M_setting');
		$this->load->library('upload');
	}

	function index(){
		$data = $this->M_setting->get_home_data()->row();
		//echo $data['id_home'];
		$x['id_home'] = $data->id_home;
    $x['favicon'] = $data->favicon;
    $x['logo_header'] = $data->logo_header;
		$x['caption_1'] = $data->caption_1;
		$x['caption_2'] = $data->caption_2;
		$x['caption_3'] = $data->caption_3;
		$x['image_slider_1'] = $data->image_slider_1;
		$x['image_slider_2'] = $data->image_slider_2;
		$x['image_slider_3'] = $data->image_slider_3;
		$this->load->view('Backend/templates/header.php');
		$this->load->view('Backend/v_home_setting',$x);
		$this->load->view('Backend/templates/footer.php');
	}

	function update(){
		$id_home = htmlspecialchars($this->input->post('id_home',TRUE),ENT_QUOTES);
		$caption_1 = htmlspecialchars($this->input->post('caption_1',TRUE),ENT_QUOTES);
		$caption_2 = htmlspecialchars($this->input->post('caption_2',TRUE),ENT_QUOTES);
		$caption_3 = htmlspecialchars($this->input->post('caption_3',TRUE),ENT_QUOTES);
		
		$config['upload_path'] = './assets/images/theme/';
    $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
    $config['encrypt_name'] = FALSE;

    $this->upload->initialize($config);
    if(!empty($_FILES['image_slider_1']['name']) && !empty($_FILES['image_slider_2']['name']) && !empty($_FILES['image_slider_3']['name']) && !empty($_FILES['favicon']['name']) && !empty($_FILES['logo_header']['name'])){
    	if ($this->upload->do_upload('image_slider_1')){
    		$data_gambar = $this->M_setting->get_home_data()->row_array();
    		$foto = $this->M_setting->get_home_data_by_id($data_gambar['id_home'])->row();
    		if ($foto->image_slider_1 != null) {
    			$target_file = './assets/images/theme/'.$foto->image_slider_1;
    			unlink($target_file);
    		}
        $image_slider_1 = $this->upload->data();
        $bg_slider_1=$image_slider_1['file_name'];
      }
      if ($this->upload->do_upload('image_slider_2')){
      	$data_gambar = $this->M_setting->get_home_data()->row_array();
    		$foto = $this->M_setting->get_home_data_by_id($data_gambar['id_home'])->row();
    		if ($foto->image_slider_2 != null) {
    			$target_file = './assets/images/theme/'.$foto->image_slider_2;
    			unlink($target_file);
    		}
        $image_slider_2 = $this->upload->data();
        $bg_slider_2=$image_slider_2['file_name'];
      }
      if ($this->upload->do_upload('image_slider_3')){
      	$data_gambar = $this->M_setting->get_home_data()->row_array();
    		$foto = $this->M_setting->get_home_data_by_id($data_gambar['id_home'])->row();
    		if ($foto->image_slider_3 != null) {
    			$target_file = './assets/images/theme/'.$foto->image_slider_3;
    			unlink($target_file);
    		}
        $image_slider_3 = $this->upload->data();
        $bg_slider_3=$image_slider_3['file_name'];
      }
      if ($this->upload->do_upload('favicon')){
        $data_gambar = $this->M_setting->get_home_data()->row_array();
        $foto = $this->M_setting->get_home_data_by_id($data_gambar['id_home'])->row();
        if ($foto->favicon != null) {
          $target_file = './assets/images/theme/'.$foto->favicon;
          unlink($target_file);
        }
        $favicon = $this->upload->data();
        $bg_favicon = $favicon['file_name'];
      }
      if ($this->upload->do_upload('logo_header')){
        $data_gambar = $this->M_setting->get_home_data()->row_array();
        $foto = $this->M_setting->get_home_data_by_id($data_gambar['id_home'])->row();
        if ($foto->logo_header != null) {
          $target_file = './assets/images/theme/'.$foto->logo_header;
          unlink($target_file);
        }
        $logo_header = $this->upload->data();
        $bg_logo_header = $logo_header['file_name'];
      }
      $this->M_setting->update_informasi($id_home,$caption_1,$caption_2,$caption_3,$bg_slider_1,$bg_slider_2,$bg_slider_3,$bg_favicon,$bg_logo_header);
      $this->session->set_flashdata('msg','success');
      redirect('backend/home_setting');

    }elseif(!empty($_FILES['image_slider_1']['name'])){
    	if ($this->upload->do_upload('image_slider_1')){
    		$data_gambar = $this->M_setting->get_home_data()->row_array();
    		$foto = $this->M_setting->get_home_data_by_id($data_gambar['id_home'])->row();
    		if ($foto->image_slider_1 != null) {
    			$target_file = './assets/images/theme/'.$foto->image_slider_1;
    			unlink($target_file);
    		}
        $image_slider_1 = $this->upload->data();
        $bg_slider_1=$image_slider_1['file_name'];
      }
	    $this->M_setting->update_informasi_bg_slider_1($id_home,$caption_1,$caption_2,$caption_3,$bg_slider_1);
      $this->session->set_flashdata('msg','success');
      redirect('backend/home_setting');

    }elseif(!empty($_FILES['image_slider_2']['name'])){
    	if ($this->upload->do_upload('image_slider_2')){
    		$data_gambar = $this->M_setting->get_home_data()->row_array();
    		$foto = $this->M_setting->get_home_data_by_id($data_gambar['id_home'])->row();
    		if ($foto->image_slider_2 != null) {
    			$target_file = './assets/images/theme/'.$foto->image_slider_2;
    			unlink($target_file);
    		}
        $image_slider_2 = $this->upload->data();
        $bg_slider_2=$image_slider_2['file_name'];
      }
	    $this->M_setting->update_informasi_bg_slider_2($id_home,$caption_1,$caption_2,$caption_3,$bg_slider_2);
      $this->session->set_flashdata('msg','success');
      redirect('backend/home_setting');

    }elseif(!empty($_FILES['image_slider_3']['name'])){
    	if ($this->upload->do_upload('image_slider_3')){
    		$data_gambar = $this->M_setting->get_home_data()->row_array();
    		$foto = $this->M_setting->get_home_data_by_id($data_gambar['id_home'])->row();
    		if ($foto->image_slider_3 != null) {
    			$target_file = './assets/images/theme/'.$foto->image_slider_3;
    			unlink($target_file);
    		}
        $image_slider_3 = $this->upload->data();
        $bg_slider_3=$image_slider_3['file_name'];
      }
	    $this->M_setting->update_informasi_bg_slider_3($id_home,$caption_1,$caption_2,$caption_3,$bg_slider_3);
      $this->session->set_flashdata('msg','success');
      redirect('backend/home_setting');

    }elseif(!empty($_FILES['favicon']['name'])){
      if ($this->upload->do_upload('favicon')){
        $data_gambar = $this->M_setting->get_home_data()->row_array();
        $foto = $this->M_setting->get_home_data_by_id($data_gambar['id_home'])->row();
        if ($foto->favicon != null) {
          $target_file = './assets/images/theme/'.$foto->favicon;
          unlink($target_file);
        }
        $favicon = $this->upload->data();
        $bg_favicon = $favicon['file_name'];
      }
      $this->M_setting->update_informasi_bg_favicon($id_home,$caption_1,$caption_2,$caption_3,$bg_favicon);
      $this->session->set_flashdata('msg','success');
      redirect('backend/home_setting');

    }elseif(!empty($_FILES['logo_header']['name'])){
      if ($this->upload->do_upload('logo_header')){
        $data_gambar = $this->M_setting->get_home_data()->row_array();
        $foto = $this->M_setting->get_home_data_by_id($data_gambar['id_home'])->row();
        if ($foto->logo_header != null) {
          $target_file = './assets/images/theme/'.$foto->logo_header;
          unlink($target_file);
        }
        $logo_header = $this->upload->data();
        $bg_logo_header = $logo_header['file_name'];
      }
      $this->M_setting->update_informasi_bg_logo_header($id_home,$caption_1,$caption_2,$caption_3,$bg_logo_header);
      $this->session->set_flashdata('msg','success');
      redirect('backend/home_setting');

    }else{
    	$this->M_setting->update_informasi_noimg($id_home,$caption_1,$caption_2,$caption_3);
        $this->session->set_flashdata('msg','success');
        redirect('backend/home_setting');    
    }
	}
}