<?php
/**
 * 
 */
class Testss_model extends CI_Model
{
	
	function testss_main()
	{
		echo "this is model function";
	}
	function insert_data($data){

		$this->db->insert('donor',$data);
	}

}
?>