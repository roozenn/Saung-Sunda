<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Menu extends CI_Model
{
	public function insert($data)
	{
		$this->db->insert('t_menu', $data);
	}
	
	public function update($data, $id){
		$this->db->where('id',$id)->update('t_menu',$data);
	}

	public function delete($id){
		$this->db->where('id',$id)->delete('t_menu');
	}
	
	public function getAll()
	{
		$query = $this->db->query("SELECT * from t_menu");
        return $query->result();
	}

	public function getMakanan()
	{
		$query = $this->db->query("SELECT * from t_menu WHERE jenis = 1");
        return $query->result(); 
	}

	public function getMinuman()
	{
		$query = $this->db->query("SELECT * from t_menu WHERE jenis = 2");
        return $query->result();
	}

	public function getDataById($id)
	{
		$query = $this->db->query("SELECT * FROM t_menu WHERE id = $id");
		return $query->row();
	}
}
