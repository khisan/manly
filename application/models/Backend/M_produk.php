<?php
class M_produk extends CI_Model{

	//BACKEND
	function get_all_produk(){
		$result = $this->db->query("SELECT * FROM tb_produk");
		return $result;
	}

	function count_all_produk(){
  	$query = $this->db->count_all('tb_produk');
  	return $query;
  }

	function get_produk_list($limit, $start){
    $query = $this->db->get('tb_produk', $limit, $start);
    return $query;
  }

  function search_product($keyword)
  {
		$this->db->select('*');
		$this->db->from('tb_produk');
		$this->db->like('nama_produk',$keyword);
		$this->db->or_like('deskripsi_produk',$keyword);
		return $this->db->get()->result();
	}

	function get_produk_by_id($id_produk){
		$result = $this->db->query("SELECT * FROM tb_produk WHERE id_produk='$id_produk'");
		return $result;
	}

	function tambah_produk($nama_produk,$harga_produk,$deskripsi_produk,$stok_produk,$foto_produk){
		$data = array(
	        'nama_produk' 	   		=> $nama_produk,
	        'harga_produk'    		=> $harga_produk,
	        'deskripsi_produk' 	  => $deskripsi_produk,
	        'stok_produk' 				=> $stok_produk,
	        'foto_produk' 	   		=> $foto_produk,   
	        // 'produk_user_id'	   	=> $this->session->userdata('id')
		);
		$this->db->insert('tb_produk', $data);
	}

	function edit_produk_with_img($id,$nama_produk,$harga_new,$deskripsi_produk,$stok_produk,$gambar){
		$result = $this->db->query("UPDATE tb_produk SET nama_produk='$nama_produk',harga_produk='$harga_new',deskripsi_produk='$deskripsi_produk',stok_produk='$stok_produk',foto_produk='$gambar' WHERE id_produk='$id'");
		return $result;
	}

	function edit_produk_no_img($id,$nama_produk,$harga_new,$deskripsi_produk,$stok_produk){
		$result = $this->db->query("UPDATE tb_produk SET nama_produk='$nama_produk',harga_produk='$harga_new',deskripsi_produk='$deskripsi_produk',stok_produk='$stok_produk' WHERE id_produk='$id'");
		return $result;
	}

	function delete_produk($id_produk){
		$this->db->where('id_produk', $id_produk);
		$this->db->delete('tb_produk');
	}
	
	//END BACKEND

}