<?php
class Produk extends CI_Controller{
	function __construct(){
	parent::__construct();
		$this->load->model('Backend/M_produk');
		$this->load->library('upload');
	}

	function index(){
		$x['data'] = $this->M_produk->get_all_produk();
		$this->load->view('Backend/templates/header.php');
		$this->load->view('Backend/v_produk',$x);
		$this->load->view('Backend/templates/footer.php');
	}

	function add_new(){
		$this->load->view('Backend/templates/header.php');
		$this->load->view('Backend/v_add_produk');
		$this->load->view('Backend/templates/footer.php');
	}

	function get_edit(){
		$id_produk = $this->uri->segment(4);
		$x['data'] = $this->M_produk->get_produk_by_id($id_produk);
		$this->load->view('Backend/templates/header.php');
		$this->load->view('backend/v_edit_produk',$x);
		$this->load->view('Backend/templates/footer.php');
	}

	function tambah_produk(){
		$config['upload_path'] = './assets/images/produk/';
    $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
    $config['encrypt_name'] = FALSE;

    $this->upload->initialize($config);

    if(!empty($_FILES['foto_produk']['name'])){
      if ($this->upload->do_upload('foto_produk')){
        $img = $this->upload->data();
        //Compress Image
        $config['image_library']='gd2';
        $config['source_image']='./assets/images/produk/'.$img['file_name'];
        $config['create_thumb']= FALSE;
        $config['maintain_ratio']= FALSE;
        $config['quality']= '100%';
        $config['new_image']= './assets/images/produk/'.$img['file_name'];
        $this->load->library('image_lib', $config);
        $this->image_lib->resize();

        $foto_produk=$img['file_name'];
				$nama_produk = strip_tags(htmlspecialchars($this->input->post('nama_produk',TRUE),ENT_QUOTES));
				$harga_produk = $this->input->post('harga_produk');
				$harga_new = str_replace(".", "", $harga_produk);
				$deskripsi_produk = $this->input->post('deskripsi_produk');
				$stok_produk = strip_tags(htmlspecialchars($this->input->post('stok_produk',TRUE),ENT_QUOTES));

				$this->M_produk->tambah_produk($nama_produk,$harga_new,$deskripsi_produk,$stok_produk,$foto_produk);
				echo $this->session->set_flashdata('msg','success');
				redirect('Backend/produk');
			}else{
          echo $this->session->set_flashdata('msg','warning');
          redirect('Backend/produk');
	    }
		}
	}

	function edit(){
		$config['upload_path'] = './assets/images/produk/';
    $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
    $config['encrypt_name'] = FALSE;

    $this->upload->initialize($config);

    if(!empty($_FILES['foto_produk']['name'])){
      if ($this->upload->do_upload('foto_produk')){
      	$id = $this->input->post('id_produk',TRUE);
      	$data_gambar = $this->M_produk->get_all_produk()->row_array();
    		$foto = $this->M_produk->get_produk_by_id($id)->row();
    		if ($foto->foto_produk != null) {
    			$target_file = './assets/images/produk/'.$foto->foto_produk;
    			unlink($target_file);
    		}
        $img = $this->upload->data();
        $config['image_library']='gd2';
        $config['source_image']='./assets/images/produk/'.$img['file_name'];
        $config['create_thumb']= FALSE;
        $config['maintain_ratio']= FALSE;
        $config['quality']= '100%';
        $config['new_image']= './assets/images/produk/'.$img['file_name'];
        $this->load->library('image_lib', $config);
        $this->image_lib->resize();

	      $gambar=$img['file_name'];
				$nama_produk = strip_tags(htmlspecialchars($this->input->post('nama_produk',TRUE),ENT_QUOTES));
				$harga_produk = $this->input->post('harga_produk');
				$harga_new = str_replace(".", "", $harga_produk);
				$deskripsi_produk = strip_tags(htmlspecialchars($this->input->post('deskripsi_produk',TRUE),ENT_QUOTES));
				$stok_produk = strip_tags(htmlspecialchars($this->input->post('stok_produk',TRUE),ENT_QUOTES));
				$this->M_produk->edit_produk_with_img($id,$nama_produk,$harga_new,$deskripsi_produk,$stok_produk,$gambar);
				echo $this->session->set_flashdata('msg','info');
				redirect('Backend/produk');
				}else{
          echo $this->session->set_flashdata('msg','warning');
          redirect('Backend/produk');
	      }

	    }else{
	    $id = $this->input->post('id_produk',TRUE);
			$nama_produk	  = strip_tags(htmlspecialchars($this->input->post('nama_produk',TRUE),ENT_QUOTES));
			$harga_produk = $this->input->post('harga_produk');
			$harga_new = str_replace(".", "", $harga_produk);
			$deskripsi_produk = $this->input->post('deskripsi_produk');
			$stok_produk = strip_tags(htmlspecialchars($this->input->post('stok_produk',TRUE),ENT_QUOTES));

			$this->M_produk->edit_produk_no_img($id,$nama_produk,$harga_new,$deskripsi_produk,$stok_produk);
			echo $this->session->set_flashdata('msg','info');
			redirect('Backend/produk');
		}

	}

	function delete(){
		$id_produk = $this->input->post('id',TRUE);
		$data_gambar = $this->M_produk->get_all_produk()->row_array();
		$foto = $this->M_produk->get_produk_by_id($data_gambar['id_produk'])->row();
		if ($foto->foto_produk != null) {
			$target_file = './assets/images/produk/'.$foto->foto_produk;
			unlink($target_file);
		}
		$this->M_produk->delete_produk($id_produk);
		echo $this->session->set_flashdata('msg','success-delete');
		redirect('Backend/produk');
	}

	//upload image summernote
	function upload_image(){
		if(isset($_FILES["file"]["name"])){
		 $config['upload_path'] = './assets/images/produk/';
		 $config['allowed_types'] = 'jpg|jpeg|png|gif';
		 $this->upload->initialize($config);
		 if(!$this->upload->do_upload('file')){
				$this->upload->display_errors();
				return FALSE;
		 }else{
				$data = $this->upload->data();
        //Compress Image
        $config['image_library']='gd2';
        $config['source_image']='./assets/images/produk/'.$data['file_name'];
        $config['create_thumb']= FALSE;
        $config['maintain_ratio']= TRUE;
        $config['quality']= '100%';
        $config['width']= 1200;
        $config['height']= 601;
        $config['new_image']= './assets/images/produk/'.$data['file_name'];
        $this->load->library('image_lib', $config);
        //$this->image_lib->resize();
				echo base_url().'assets/images/produk/'.$data['file_name'];
		 	}
		}
	}
}