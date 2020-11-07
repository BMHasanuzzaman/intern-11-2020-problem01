<?php
	
/**
 * 
 */
class Register_model extends CI_Model
{
	# This function save user record in database
	public function __construct($formArray)
	{
		$this->db->insert('userdetail', $formArray);
	}
}
?>