<?php
class Post extends CI_Controller{
	function __construct(){
	parent::__construct();
		$this->load->model('Backend/M_tag');
		$this->load->model('Backend/M_kategori');
		$this->load->model('Backend/M_post');
		$this->load->library('upload');
	}

	function index(){
		$x['data'] = $this->M_post->get_all_post();
		$this->load->view('Backend/templates/header.php');
		$this->load->view('Backend/v_post',$x);
		$this->load->view('Backend/templates/footer.php');
	}

	function add_new(){
		$x['tag']	   = $this->M_tag->get_all_tag();
		$x['kategori'] = $this->M_kategori->get_all_category();
		$this->load->view('Backend/templates/header.php');
		$this->load->view('Backend/v_add_post',$x);
		$this->load->view('Backend/templates/footer.php');
	}

	function get_edit(){
		$post_id = $this->uri->segment(4);
		$x['tag']	   = $this->M_tag->get_all_tag();
		$x['kategori'] = $this->M_kategori->get_all_category();
		$x['data'] = $this->M_post->get_post_by_id($post_id);
		$this->load->view('Backend/templates/header.php');
		$this->load->view('backend/v_edit_post',$x);
		$this->load->view('Backend/templates/footer.php');
	}

	function publish(){
		$config['upload_path'] = './assets/images/blog/';
    $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
    $config['encrypt_name'] = FALSE;

	    $this->upload->initialize($config);

	    if(!empty($_FILES['filefoto']['name'])){
        if ($this->upload->do_upload('filefoto')){
          $img = $this->upload->data();
          //Compress Image
          $config['image_library']='gd2';
          $config['source_image']='./assets/images/blog/'.$img['file_name'];
          $config['create_thumb']= FALSE;
          $config['maintain_ratio']= FALSE;
          $config['quality']= '100%';
          $config['new_image']= './assets/images/blog/'.$img['file_name'];
          $this->load->library('image_lib', $config);
          $this->image_lib->resize();

        $gambar=$img['file_name'];
				$judul	  = strip_tags(htmlspecialchars($this->input->post('judul',TRUE),ENT_QUOTES));
				$konten = $this->input->post('konten');
				$kategori = $this->input->post('kategori',TRUE);
				$tags = $this->input->post('tag');

				$this->M_post->save_post($judul,$konten,$kategori,$gambar,$tags);
				echo $this->session->set_flashdata('msg','success');
				redirect('Backend/post');
			}else{
	            echo $this->session->set_flashdata('msg','warning');
	            redirect('Backend/post');
	        }

	    }else{
			redirect('Backend/post');
		}
	}

	function edit(){
		$config['upload_path'] = './assets/images/blog/';
    $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
    $config['encrypt_name'] = FALSE;

    $this->upload->initialize($config);

	    if(!empty($_FILES['filefoto']['name'])){
	      if ($this->upload->do_upload('filefoto')){
		      $data_gambar = $this->M_post->get_all_post()->row_array();
	    		$foto = $this->M_post->get_post_by_id($data_gambar['id_post'])->row();
	    		if ($foto->gambar_post != null) {
	    			$target_file = './assets/images/blog/'.$foto->gambar_post;
	    			unlink($target_file);
	    		}
          $img = $this->upload->data();
          $config['image_library']='gd2';
          $config['source_image']='./assets/images/blog/'.$img['file_name'];
          $config['create_thumb']= FALSE;
          $config['maintain_ratio']= FALSE;
          $config['quality']= '100%';
          $config['new_image']= './assets/images/blog/'.$img['file_name'];
          $this->load->library('image_lib', $config);

		      $gambar=$img['file_name'];
		      $id 	  = $this->input->post('post_id',TRUE);
					$judul	  = strip_tags(htmlspecialchars($this->input->post('judul',TRUE),ENT_QUOTES));
					$konten = $this->input->post('konten');
					$kategori = strip_tags(htmlspecialchars($this->input->post('kategori',TRUE),ENT_QUOTES));
					$tags = strip_tags(htmlspecialchars($this->input->post('tag',TRUE),ENT_QUOTES));

					$this->M_post->edit_post_with_img($id,$judul,$konten,$kategori,$gambar,$tags);
					echo $this->session->set_flashdata('msg','info');
					redirect('Backend/post');
					}else{
		            echo $this->session->set_flashdata('msg','warning');
		            redirect('Backend/post');
		      }

		    }else{
		    $id 	  = $this->input->post('post_id',TRUE);
				$judul	  = strip_tags(htmlspecialchars($this->input->post('judul',TRUE),ENT_QUOTES));
				$konten = $this->input->post('konten');
				$kategori = strip_tags(htmlspecialchars($this->input->post('kategori',TRUE),ENT_QUOTES));
				$tags = strip_tags(htmlspecialchars($this->input->post('tag',TRUE),ENT_QUOTES));

				$this->M_post->edit_post_no_img($id,$judul,$konten,$kategori,$tags);
				echo $this->session->set_flashdata('msg','info');
				redirect('Backend/post');
			}

		}

	function delete(){
		$post_id = $this->input->post('id',TRUE);
		$data_gambar = $this->M_post->get_all_post()->row_array();
    $foto = $this->M_post->get_post_by_id($data_gambar['id_post'])->row();
		if ($foto->gambar_post != null) {
			$target_file = './assets/images/blog/'.$foto->gambar_post;
			unlink($target_file);
		}
		$this->M_post->delete_post($post_id);
		echo $this->session->set_flashdata('msg','success-delete');
		redirect('Backend/post');
	}

	//upload image summernote
	function upload_image(){
		if(isset($_FILES["file"]["name"])){
		 $config['upload_path'] = './assets/images/';
		 $config['allowed_types'] = 'jpg|jpeg|png|gif';
		 $this->upload->initialize($config);
		 if(!$this->upload->do_upload('file')){
				$this->upload->display_errors();
				return FALSE;
		 }else{
				$data = $this->upload->data();
        //Compress Image
        $config['image_library']='gd2';
        $config['source_image']='./assets/images/'.$data['file_name'];
        $config['create_thumb']= FALSE;
        $config['maintain_ratio']= TRUE;
        $config['quality']= '100%';
        $config['new_image']= './assets/images/'.$data['file_name'];
        $this->load->library('image_lib', $config);
        //$this->image_lib->resize();
				echo base_url().'assets/images/'.$data['file_name'];
		 	}
		}
	}
}