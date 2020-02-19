<?php

class M_user extends CI_Model
{

	function get_user_data()
	{
		$query = $this->db->get('tb_user', 1);
		return $query;
	}

	function get_user_data_by_id($id_user)
	{
		$result = $this->db->query("SELECT * FROM tb_user WHERE id_user='$id_user'");
		return $result;
	}

	function update_user($id_user, $nama, $username, $bg_foto)
	{
		$this->db->set('foto', $bg_foto);
		$this->db->set('nama', $nama);
		$this->db->set('username', $username);
		$this->db->where('id_user', $id_user);
		$this->db->update('tb_user');
	}

	function update_user_noimg($id_user, $nama, $username)
	{
		$this->db->set('nama', $nama);
		$this->db->set('username', $username);
		$this->db->where('id_user', $id_user);
		$this->db->update('tb_user');
	}
}
