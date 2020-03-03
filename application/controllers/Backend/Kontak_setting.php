<?php

class kontak_setting extends CI_Controller{
	
	function __construct(){
		parent::__construct();
		if($this->session->userdata('status') != "login"){
			redirect(base_url("Login"));
		}
		$this->load->model('backend/M_kontak');
		$this->load->library('upload');
	}

	function index(){
		$data = $this->M_kontak->get_kontak_data()->row();
		$x['id_kontak'] = $data->id_kontak;
		$x['gambar_header'] = $data->gambar_header;
		$x['alamat'] = $data->alamat;
		$x['no_hp'] = $data->no_hp;
		$x['email'] = $data->email;
    $this->load->view('Backend/templates/header.php');
		$this->load->view('Backend/v_kontak_setting',$x);
		$this->load->view('Backend/templates/footer.php');
	}

	function update(){
		$id_kontak = htmlspecialchars($this->input->post('id_kontak',TRUE),ENT_QUOTES);
		$alamat = $this->input->post('alamat',TRUE);
		$no_hp = $this->input->post('no_hp',TRUE);
		$email = $this->input->post('email',TRUE);
		
		function hp($nohp) {
    // kadang ada penulisan no hp 0811 239 345
    $nohp = str_replace(" ","",$nohp);
    // kadang ada penulisan no hp (0274) 778787
    $nohp = str_replace("(","",$nohp);
    // kadang ada penulisan no hp (0274) 778787
    $nohp = str_replace(")","",$nohp);
    // kadang ada penulisan no hp 0811.239.345
    $nohp = str_replace(".","",$nohp);

    // cek apakah no hp mengandung karakter + dan 0-9
    if(!preg_match('/[^+0-9]/',trim($nohp))){
      // cek apakah no hp karakter 1-3 adalah +62
      if(substr(trim($nohp), 0, 3)=='+62'){
          $hp = trim($nohp);
      }
      // cek apakah no hp karakter 1 adalah 0
      elseif(substr(trim($nohp), 0, 1)=='0'){
          $hp = '+62'.substr(trim($nohp), 1);
    	}
    }
    print $hp;
		}
		hp($nohp);

		$config['upload_path'] = './assets/images/kontak/';
    $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
    $config['encrypt_name'] = FALSE;

    $this->upload->initialize($config);
     if(!empty($_FILES['gambar_header']['name'])){
    	if ($this->upload->do_upload('gambar_header')){
    		$data_gambar = $this->M_kontak->get_kontak_data()->row_array();
    		$foto = $this->M_kontak->get_kontak_data_by_id($data_gambar['id_kontak'])->row();
    		if ($foto->gambar_header != null) {
    			$target_file = './assets/images/kontak/'.$foto->gambar_header;
    			unlink($target_file);
    		}
        $gambar_header = $this->upload->data();
        $bg_header=$gambar_header['file_name'];
      }
      $this->M_kontak->update_kontak($id_kontak,$bg_header,$alamat,$no_hp,$email);
      $this->session->set_flashdata('msg','success');
      redirect('backend/kontak_setting');
    }else{
    	$this->M_kontak->update_kontak_noimg($id_kontak,$alamat,$no_hp,$email);
        $this->session->set_flashdata('msg','success');
        redirect('backend/kontak_setting');    
    }
	}

}