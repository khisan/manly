<?php
class M_tag extends CI_Model{

	function get_all_tag(){
		$result = $this->db->get('tb_tags');
		return $result; 
	}

	function add_tag($tag){
		$data = array(
	        'nama_tag' => $tag
		);
		$this->db->insert('tb_tags', $data);
	}

	function edit_tag($id,$tag){
		$data = array(
	        'nama_tag' => $tag
		);
		$this->db->where('id_tag', $id);
		$this->db->update('tb_tags', $data);
	}

	function delete_tag($id){
		$this->db->where('id_tag', $id);
		$this->db->delete('tb_tags');
	}


}