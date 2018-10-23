<?php
/**
 * 
 */
class Hospital_model extends CI_Model
{
	
	function hospital_main()
	{
		echo "this is model function";
	}
	function insert_data($data){

		$this->db->insert('hospital',$data);
	}

}
?>