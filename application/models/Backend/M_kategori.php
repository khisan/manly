<?php
class M_kategori extends CI_Model{

	function get_all_category(){
		$result = $this->db->get('tb_kategori');
		return $result; 
	}

	function add_kategori($kategori,$slug){
		$data = array(
	        'nama_kategori' => $kategori,
	        'slug_kategori' => $slug
		);
		$this->db->insert('tb_kategori', $data);
	}

	function edit_kategori($id,$kategori,$slug){
		$data = array(
	        'nama_kategori' => $kategori,
	        'slug_kategori' => $slug
		);
		$this->db->where('id_kategori', $id);
		$this->db->update('tb_kategori', $data);
	}

	function delete_kategori($id){
		$this->db->where('id_kategori', $id);
		$this->db->delete('tb_kategori');
	}


}