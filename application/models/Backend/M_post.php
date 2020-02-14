<?php
class M_post extends CI_Model{

	//BACKEND
	function get_all_post(){
		$result = $this->db->query("SELECT id_post,judul_post,gambar_post,DATE_FORMAT(tanggal_post,'%d %M %Y') AS tanggal_post,nama_kategori,nama_tag,post_status FROM tb_post JOIN tb_kategori ON id_kategori_post=id_kategori JOIN tb_tags ON id_tags_post=id_tag");
		return $result;
	}

	function count_all_post(){
  	$query = $this->db->count_all('tb_post');
  	return $query;
  }

	function get_post_list($limit, $start){
    // $query = $this->db->get('tb_post', $limit, $start);
    // return $query;
    $this->db->select ('*'); 
    $this->db->from ('tb_post t1');
    $this->db->join ('tb_kategori t2', 't2.id_kategori = t1.id_kategori_post');
    $this->db->join ('tb_tags t3', 't3.id_tag = t1.id_tags_post');
    $this->db->limit($limit, $start);
    $query = $this->db->get();
    return $query;
  }

  function search_post($keyword)
  {
		$this->db->select('*');
		$this->db->from('tb_post t1');
		$this->db->like('judul_post',$keyword);
		$this->db->or_like('konten_post',$keyword);
		$this->db->join ('tb_kategori t2', 't2.id_kategori = t1.id_kategori_post');
    $this->db->join ('tb_tags t3', 't3.id_tag = t1.id_tags_post');
		return $this->db->get('')->result();
	}

	function get_post_by_id($post_id){
		$result = $this->db->query("SELECT id_post,judul_post,gambar_post,DATE_FORMAT(tanggal_post,'%d %M %Y') AS tanggal_post,nama_kategori,nama_tag,id_kategori_post,id_tags_post,post_status,konten_post FROM tb_post JOIN tb_kategori ON id_kategori_post=id_kategori JOIN tb_tags ON id_tags_post=id_tag WHERE id_post='$post_id'");
		return $result;
	}

	function get_post_by_kategori($id_kategori){
		$result = $this->db->query("SELECT id_post,judul_post,gambar_post,DATE_FORMAT(tanggal_post,'%d %M %Y') AS tanggal_post,nama_kategori,nama_tag,post_status,konten_post,judul_post FROM tb_post JOIN tb_kategori ON id_kategori_post=id_kategori JOIN tb_tags ON id_tags_post=id_tag WHERE id_kategori='$id_kategori'");
		return $result;
	}

	function get_post_by_tag($id_tag){
		$result = $this->db->query("SELECT id_post,judul_post,gambar_post,DATE_FORMAT(tanggal_post,'%d %M %Y') AS tanggal_post,nama_tag,nama_kategori,post_status,konten_post,judul_post FROM tb_post JOIN tb_kategori ON id_kategori_post=id_kategori JOIN tb_tags ON id_tags_post=id_tag WHERE id_tag='$id_tag'");
		return $result;
	}

	function save_post($judul,$konten,$kategori,$gambar,$tags){
		$data = array(
	        'judul_post' 	   		=> $judul,
	        'konten_post'    		=> $konten,
	        'gambar_post' 	   	=> $gambar,
	        'id_kategori_post' 	=> $kategori,
	        'id_tags_post' 	   		=> $tags,   
	        'post_status' 	   	=> 1,
	        // 'post_user_id'	   	=> $this->session->userdata('id')
		);
		$this->db->insert('tb_post', $data);
	}

	function edit_post_with_img($id,$judul,$konten,$kategori,$gambar,$tags){
		$result = $this->db->query("UPDATE tb_post SET judul_post='$judul',konten_post='$konten',gambar_post='$gambar',id_kategori_post='$kategori',id_tags_post='$tags' WHERE id_post='$id'");
		return $result;
	}

	function edit_post_no_img($id,$judul,$konten,$kategori,$tags){
		$result = $this->db->query("UPDATE tb_post SET judul_post='$judul',konten_post='$konten',id_kategori_post='$kategori',id_tags_post='$tags' WHERE id_post='$id'");
		return $result;
	}

	function delete_post($post_id){
		$this->db->where('id_post', $post_id);
		$this->db->delete('tb_post');
	}
	
	//END BACKEND

}