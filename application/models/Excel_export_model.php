<?php
class Excel_export_model extends CI_Model
{
	function fetch_data()
	{
		$this->db->order_by('studentID', 'DESC');
   		$query = $this->db->get('tbl_customer');
		return $query->result();
	}

	
}
