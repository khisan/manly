<?php

class M_blog extends CI_Model{
	
	function get_blog_data(){
		$query = $this->db->get('tb_blog',1);
		return $query;
	}

	function get_blog_data_by_id($id_blog){
		$result = $this->db->query("SELECT * FROM tb_blog WHERE id_blog='$id_blog'");
		return $result;
	}

	function update_blog($id_blog,$bg_header){
		$this->db->set('gambar_header',$bg_header);
		$this->db->where('id_blog',$id_blog);
		$this->db->update('tb_blog');
	}
}