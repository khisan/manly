<?php

class M_about extends CI_Model{
	
	function get_tentang_data(){
		$query = $this->db->get('tb_about',1);
		return $query;
	}

	function get_tentang_data_by_id($id_about){
		$result = $this->db->query("SELECT * FROM tb_about WHERE id_about='$id_about'");
		return $result;
	}

	function update_tentang($id_about,$bg_header,$judul_deskripsi_1,$isi_deskripsi_1,$bg_deskripsi_1,$judul_deskripsi_2,$isi_deskripsi_2,$bg_deskripsi_2){
		$this->db->set('gambar_header',$bg_header);
		$this->db->set('judul_deskripsi_1',$judul_deskripsi_1);
		$this->db->set('isi_deskripsi_1',$isi_deskripsi_1);
		$this->db->set('gambar_deskripsi_1',$bg_deskripsi_1);
		$this->db->set('judul_deskripsi_2',$judul_deskripsi_2);
		$this->db->set('isi_deskripsi_1',$isi_deskripsi_1);
		$this->db->set('gambar_deskripsi_2',$bg_deskripsi_2);
		$this->db->where('id_about',$id_about);
		$this->db->update('tb_about');
	}

	function update_tentang_bg_header($id_about,$bg_header,$judul_deskripsi_1,$isi_deskripsi_1,$judul_deskripsi_2,$isi_deskripsi_2){
		$this->db->set('gambar_header',$bg_header);
		$this->db->set('judul_deskripsi_1',$judul_deskripsi_1);
		$this->db->set('isi_deskripsi_1',$isi_deskripsi_1);
		$this->db->set('judul_deskripsi_2',$judul_deskripsi_2);
		$this->db->set('isi_deskripsi_1',$isi_deskripsi_1);
		$this->db->where('id_about',$id_about);
		$this->db->update('tb_about');
	}

	function update_tentang_bg_deskripsi_1($id_about,$judul_deskripsi_1,$isi_deskripsi_1,$bg_deskripsi_1,$judul_deskripsi_2,$isi_deskripsi_2){
		$this->db->set('judul_deskripsi_1',$judul_deskripsi_1);
		$this->db->set('isi_deskripsi_1',$isi_deskripsi_1);
		$this->db->set('gambar_deskripsi_1',$bg_deskripsi_1);
		$this->db->set('judul_deskripsi_2',$judul_deskripsi_2);
		$this->db->set('isi_deskripsi_2',$isi_deskripsi_2);
		$this->db->where('id_about',$id_about);
		$this->db->update('tb_about');
	}

	function update_tentang_bg_deskripsi_2($id_about,$judul_deskripsi_1,$isi_deskripsi_1,$judul_deskripsi_2,$isi_deskripsi_2,$bg_deskripsi_2){
		$this->db->set('judul_deskripsi_1',$judul_deskripsi_1);
		$this->db->set('isi_deskripsi_1',$isi_deskripsi_1);
		$this->db->set('judul_deskripsi_2',$judul_deskripsi_2);
		$this->db->set('isi_deskripsi_2',$isi_deskripsi_2);
		$this->db->set('gambar_deskripsi_2',$bg_deskripsi_2);
		$this->db->where('id_about',$id_about);
		$this->db->update('tb_about');
	}

	function update_tentang_noimg($id_about,$judul_deskripsi_1,$isi_deskripsi_1,$judul_deskripsi_2,$isi_deskripsi_2){
		$this->db->set('judul_deskripsi_1',$judul_deskripsi_1);
		$this->db->set('isi_deskripsi_1',$isi_deskripsi_1);
		$this->db->set('judul_deskripsi_2',$judul_deskripsi_2);
		$this->db->set('isi_deskripsi_2',$isi_deskripsi_2);
		$this->db->where('id_about',$id_about);
		$this->db->update('tb_about');
	}
}