<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Reservasi extends CI_Model
{
    public function insert($data)
	{
		$this->db->insert('t_reservasi', $data);
	}

	public function delete($id){
		$this->db->where('id',$id)->delete('t_reservasi');
	}

	public function getOnGoingReservasi()
	{
		$query = $this->db->query("select * from t_reservasi where status = 1 order by date asc");
        return $query->result();
	}

	public function getDoneReservasi()
	{
		$query = $this->db->query("select * from t_reservasi where status = 2 order by date asc");
        return $query->result();
	}

	public function changeStatusKonfirmasi($id){
		$this->db->where('id',$id)->update('t_reservasi',["status" => 2]);
	}

	public function changeStatusSelesai($id){
		$this->db->where('id',$id)->update('t_reservasi',["status" => 3]);
	}
}
