<?php

class M_blog extends CI_Model{
	
	function get_blogs(){
		$query = $this->db->get('tb_post');
		return $query;
	}

	function get_blog_perpage($offset,$limit){
		$this->db->select('tb_post.*');
		$this->db->from('tb_post');
		$this->db->order_by('id_post', 'DESC');
		$this->db->limit($limit,$offset);
		$query = $this->db->get();
		return $query;
	}

	// function get_post_by_slug($slug){
	// 	$query = $this->db->query("SELECT tb_post.*,user_name,COUNT(comment_id) AS comment_total,tb_category.* FROM tb_post 
	// 		LEFT JOIN tb_user ON post_user_id=user_id
	// 		LEFT JOIN tb_comment ON post_id=comment_post_id
	// 		LEFT JOIN tb_category ON post_category_id=category_id
	// 		WHERE post_slug='$slug' GROUP BY post_id LIMIT 1");
	// 	return $query;
	// }

	// function get_popular_post(){
	// 	$this->db->select('tb_post.*, user_name,user_photo');
	// 	$this->db->from('tb_post');
	// 	$this->db->join('tb_user', 'post_user_id=user_id','left');
	// 	$this->db->order_by('post_views', 'DESC');
	// 	$this->db->limit(5);
	// 	$query = $this->db->get();
	// 	return $query;
	// }

	// function get_related_post($category_id,$kode){
	// 	$query = $this->db->query("SELECT * FROM tb_post LEFT JOIN tb_user ON post_user_id=user_id 
	// 		WHERE post_category_id='$category_id' AND NOT post_id='$kode' ORDER BY post_views DESC LIMIT 2");
	// 	return $query;
	// }

	// function count_views($kode){
 //        $user_ip=$_SERVER['REMOTE_ADDR'];
 //        $cek_ip=$this->db->query("SELECT * FROM tb_post_views WHERE view_ip='$user_ip' AND view_post_id='$kode' AND DATE(view_date)=CURDATE()");
 //        if($cek_ip->num_rows() <= 0){
 //            $this->db->trans_start();
	// 			$this->db->query("INSERT INTO tb_post_views (view_ip,view_post_id) VALUES('$user_ip','$kode')");
	// 			$this->db->query("UPDATE tb_post SET post_views=post_views+1 where post_id='$kode'");
	// 		$this->db->trans_complete();
	// 		if($this->db->trans_status()==TRUE){
	// 			return TRUE;
	// 		}else{
	// 			return FALSE;
	// 		}
 //        }
 //    }

 //    function show_comments($kode){
 //    	$query = $this->db->query("SELECT * FROM tb_comment WHERE comment_post_id='$kode' AND comment_status='1' AND comment_parent='0'");
 //    	return $query;
 //    }

 //    function save_comment($post_id,$name,$email,$comment){
 //    	$data = array(
 //    		'comment_name' => $name,
 //    		'comment_email' => $email,
 //    		'comment_message' => $comment, 
 //    		'comment_post_id' => $post_id,
 //    		'comment_image' => 'user_blank.png'
 //    	);
 //    	$this->db->insert('tb_comment', $data);
 //    }

    function search_blog($query){
    	$result = $this->db->query("SELECT tb_post.*,user_name,user_photo FROM tb_post
			LEFT JOIN tb_user ON post_user_id=user_id
			LEFT JOIN tb_category ON post_category_id=category_id
			WHERE post_title LIKE '%$query%' OR category_name LIKE '%$query%' OR post_tags LIKE '%$query%' LIMIT 12");
    	return $result;
    }
}