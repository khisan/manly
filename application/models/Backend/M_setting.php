<?php

class M_setting extends CI_Model{
	
	function get_home_data(){
		$query = $this->db->get('tb_home',1);
		return $query;
	}

	function get_home_data_by_id($id_home){
		$result = $this->db->query("SELECT * FROM tb_home WHERE id_home='$id_home'");
		return $result;
	}

	function update_informasi($id_home,$caption_1,$caption_2,$caption_3,$bg_slider_1,$bg_slider_2,$bg_slider_3,$bg_favicon,$bg_logo_header){
		$this->db->set('caption_1',$caption_1);
		$this->db->set('caption_2',$caption_2);
		$this->db->set('caption_3',$caption_3);
		$this->db->set('image_slider_1',$bg_slider_1);
		$this->db->set('image_slider_2',$bg_slider_2);
		$this->db->set('image_slider_3',$bg_slider_3);
		$this->db->set('favicon',$bg_favicon);
		$this->db->set('logo_header',$bg_logo_header);
		$this->db->where('id_home',$id_home);
		$this->db->update('tb_home');
	}

	function update_informasi_bg_slider_1($id_home,$caption_1,$caption_2,$caption_3,$bg_slider_1){
		$this->db->set('caption_1',$caption_1);
		$this->db->set('caption_2',$caption_2);
		$this->db->set('caption_3',$caption_3);
		$this->db->set('image_slider_1',$bg_slider_1);
		$this->db->where('id_home',$id_home);
		$this->db->update('tb_home');
	}

	function update_informasi_bg_slider_2($id_home,$caption_1,$caption_2,$caption_3,$bg_slider_2){
		$this->db->set('caption_1',$caption_1);
		$this->db->set('caption_2',$caption_2);
		$this->db->set('caption_3',$caption_3);
		$this->db->set('image_slider_2',$bg_slider_2);
		$this->db->where('id_home',$id_home);
		$this->db->update('tb_home');
	}

	function update_informasi_bg_slider_3($id_home,$caption_1,$caption_2,$caption_3,$bg_slider_3){
		$this->db->set('caption_1',$caption_1);
		$this->db->set('caption_2',$caption_2);
		$this->db->set('caption_3',$caption_3);
		$this->db->set('image_slider_3',$bg_slider_3);
		$this->db->where('id_home',$id_home);
		$this->db->update('tb_home');
	}

	function update_informasi_bg_favicon($id_home,$caption_1,$caption_2,$caption_3,$bg_favicon){
		$this->db->set('caption_1',$caption_1);
		$this->db->set('caption_2',$caption_2);
		$this->db->set('caption_3',$caption_3);
		$this->db->set('favicon',$bg_favicon);
		$this->db->where('id_home',$id_home);
		$this->db->update('tb_home');
	}

	function update_informasi_bg_logo_header($id_home,$caption_1,$caption_2,$caption_3,$bg_logo_header){
		$this->db->set('caption_1',$caption_1);
		$this->db->set('caption_2',$caption_2);
		$this->db->set('caption_3',$caption_3);
		$this->db->set('logo_header',$bg_logo_header);
		$this->db->where('id_home',$id_home);
		$this->db->update('tb_home');
	}

	function update_informasi_noimg($id_home,$caption_1,$caption_2,$caption_3){
		$this->db->set('caption_1',$caption_1);
		$this->db->set('caption_2',$caption_2);
		$this->db->set('caption_3',$caption_3);
		$this->db->where('id_home',$id_home);
		$this->db->update('tb_home');
	}
}