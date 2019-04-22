<?php
class Fecth_activity extends CI_Model
{
	function select()
	{
		$this->db->order_by('id', 'DESC');
		$query = $this->db->get('activity');
		return $query;
	}
	function select_where($year)
	{
		// var_dump($year);
		$this->db->order_by('id', 'DESC');
		$sql = "SELECT * FROM activity WHERE year = $year ";
		$query = $this->db->query($sql);
		return $query;
	}
	function select_where_join($id)
	{
		$sql = "SELECT * FROM activity JOIN tbl_customer ON activity.id = tbl_customer.activityID WHERE activity.id = $id";
		$query = $this->db->query($sql);
		return $query;
	}
}
