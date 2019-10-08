<?php 

class Admin_model extends CI_Model 
{

public function __construct()
	{ 
		parent::__construct(); 	
		$this->load->database();
	}

  
 function getSingle($table,$where)
	{
		$this->db->where($where);
		$data = $this->db->get($table);
		$get = $data->row();
	   
		$num = $data->num_rows();
		
		if($num){
			return $get;
		}
		else
		{
			return false;
		}
	}
  
  /* ************* get all data as where class *************** */	
	function getAll($table)
	{
		
		$data = $this->db->get($table);
		$get = $data->result();
		if($get){
			return $get;
		}else{
			return FALSE;
		}
	}
 
}
?>    



