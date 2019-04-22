<?php
class Student extends CI_Model
{
	function select()
	{
		$this->db->order_by('studentID', 'DESC');
   		$query = $this->db->get('tbl_customer');
		return $query;
	}

	
}
?>
