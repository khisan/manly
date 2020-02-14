<?php

class M_kontak extends CI_Model{
	
	function get_kontak_data(){
		$query = $this->db->get('tb_kontak',1);
		return $query;
	}

	function get_kontak_data_by_id($id_kontak){
		$result = $this->db->query("SELECT * FROM tb_kontak WHERE id_kontak='$id_kontak'");
		return $result;
	}

	function update_kontak($id_kontak,$bg_header,$alamat,$no_hp,$email){
		$this->db->set('gambar_header',$bg_header);
		$this->db->set('alamat',$alamat);
		$this->db->set('no_hp',$no_hp);
		$this->db->set('email',$email);
		$this->db->where('id_kontak',$id_kontak);
		$this->db->update('tb_kontak');
	}

	function update_kontak_noimg($id_kontak,$alamat,$no_hp,$email){
		$this->db->set('alamat',$alamat);
		$this->db->set('no_hp',$no_hp);
		$this->db->set('email',$email);
		$this->db->where('id_kontak',$id_kontak);
		$this->db->update('tb_kontak');
	}
}