<?php
class Fecth_term extends CI_Model
{
	function select()
	{
		$query = $this->db->get('terms');
		return $query;
	}
}
