<?php 

class Common_model extends CI_Model 
{

public function __construct()
	{ 
		parent::__construct(); 	
		$this->load->database();
	}

/******************************************
* 	Select Data By Where and orderby      *
******************************************/	
public function SelectRecord($TableName,$Selectdata,$WhereData,$orderby)
    {
		$this->db->select($Selectdata);
		if(!empty($orderby)){
			$this->db->order_by($orderby);
		}
		if(!empty($WhereData)){
			$this->db->where($WhereData);
		}
		$query = $this->db->get($TableName);
		
		return $query;
	}

/*****************************************
* 	Select Data By Where Conditions      *
*****************************************/	
  
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
  
  
/*****************************************
* 	Select Data By Where In Conditions   *
*****************************************/
public function get_data_where_in($table,$where_in,$data) 
  {
	 $this->db->select('*');
	 $this->db->from($table);
	 $this->db->where_in($where_in,$data);
	 $query = $this->db->get();
	 return $query;
  }  
/************************************************
*   Select Data By Where In & Wher Conditions   *
*************************************************/
public function get_data_where_with_where_in($table,$where,$where_in,$data)   
  {
   $this->db->select('*');
   $this->db->from($table);
   $this->db->where($where);
   $this->db->where_in($where_in,$data);
   $query = $this->db->get();
   return $query;
  }    
/*****************************************
* 				Select Data  		     *
*****************************************/  
public function get_all_data($table,$groupby='')
	{
		if(!empty($groupby))
		{
			$this->db->group_by($groupby);
		}
		$query = $this->db->get($table);
		return $query;
	} 
/*****************************************
* 	   Select Data  using Find in	     *
*****************************************/ 
public function get_data_find_in_set($table,$value,$colum) 
  {  
     $where = "FIND_IN_SET('".$value."', ".$colum.")";  
	 $this->db->select('*');
	 $this->db->from($table);
	 $this->db->where($where);
	 $query = $this->db->get();
	 return $query;
  } 
/*****************************************************
* 	   Select Data  using Find in With Where	     *
*****************************************************/ 
public function get_data_find_in_set_with_where($table,$value,$colum,$where_Data) 
  {  
     $where = "FIND_IN_SET('".$value."', ".$colum.")";  
	 $this->db->select('*');
	 $this->db->from($table);
	 $this->db->where($where_Data);
	 $this->db->where($where);
	 $query = $this->db->get();
	 return $query;
  }   
/*****************************************
* 	   		Join Query		   		     *
*****************************************/
public function joinData($place1,$place2,$WhereData,$Selectdata,$TableName1,$TableName2,$orderby){
		$this->db->select($Selectdata);
		$this->db->from($TableName1);
		$this->db->join($TableName2, $place1 .'='. $place2);
		$this->db->order_by($orderby);
    if($WhereData !=''){
		  $this->db->where($WhereData);
    }
		$query = $this->db->get();
		return $query;
	}     	
	
/*****************************************		
*   Join Query  With Where In            *		
*****************************************/		
public function joinDataWithWhereIn($place1,$place2,$WhereData,$Selectdata,$TableName1,$TableName2,$wherein,$whereinData,$orderby){		
	    $this->db->select($Selectdata);		
	    $this->db->from($TableName1);		
	    $this->db->join($TableName2, $place1 .'='. $place2);		
	    $this->db->order_by($orderby);		
	    $this->db->where($WhereData);		
	    $this->db->where_in($wherein,$whereinData);		
	    $query = $this->db->get();		
	    return $query;		
	  }     	
/*****************************************
* 		Save Data(Insert Query)    		 *
*****************************************/
public function save($table, $data)
	{
		$this->db->insert($table, $data);
		return $this->db->insert_id();
	}
/*****************************************
* 		Update Data(Update Query)    	 *
*****************************************/
public function update($table,$where,$data)
  {
      $this->db->where($where);
      $this->db->update($table, $data); 
  }

/*************************************************
*   Update Data(Update Query) with Where In      *
*************************************************/
public function update_where_in($table,$wherein,$whereinData,$data)
  {
      $this->db->where_in($wherein,$whereinData);
      $this->db->update($table, $data); 
  }

/*****************************************
* 		Delete Data(Delete Query)    	 *
*****************************************/
public function delete($table,$where)
 {
	$this->db->where($where);
	$this->db->delete($table); 
 }
/*****************************************
* 		Send Email(Email function)    	 *
*****************************************/ 
public function sendEmail($emailData)
{
    $this->load->library('email');

    
    $config['protocol'] = "smtp";
    $config['smtp_host'] = "ssl://sg2plcpnl0119.prod.sin2.secureserver.net";
    $config['smtp_port'] = "465";
    $config['smtp_user'] = "itsupport@salasar-travels.com"; 
    $config['smtp_pass'] = "it@123";
    $config['charset'] = "utf-8";
    $config['mailtype'] = "html";
    $config['newline'] = "\r\n";
    $this->email->initialize($config);
    $this->email->from('itsupport@salasar-travels.com', 'Salasar Travels');
    $list = $emailData['to'];
    $this->email->to($list);
    $this->email->subject($emailData['subject']);
    $this->email->message($emailData['body']);
    if($this->email->send()){
        echo "send";
        return 1; //IF MAIL HAS BEEN SENT SUCCESSFULLY
                            }
    else{
        echo "not";
        return 2; //IF MAIL HAS BEEN NOT SENT! FAIL
        }
}
/*****************************************************
* 		Send Email With Attach(Email function)    	 *
*****************************************************/ 
public function sendEmailWithattach($emailData,$path)
{
    $this->load->library('email');
    $config['protocol'] = "smtp";
    $config['smtp_host'] = "ssl://sg2plcpnl0119.prod.sin2.secureserver.net";
    $config['smtp_port'] = "465";
    $config['smtp_user'] = "itsupport@salasar-travels.com"; 
    $config['smtp_pass'] = "it@123";
    $config['charset'] = "utf-8";
    $config['mailtype'] = "html";
    $config['newline'] = "\r\n";
    $this->email->initialize($config);
    $this->email->from('itsupport@salasar-travels.com', 'Salasar Travels');
    $list = $emailData['to'];
    $this->email->to($list);
    $this->email->subject($emailData['subject']);
    $this->email->message($emailData['body']);
	$this->email->attach($path);
    if($this->email->send()){
        echo "send";
        return 1; //IF MAIL HAS BEEN SENT SUCCESSFULLY
                            }
    else{
        echo "not";
        return 2; //IF MAIL HAS BEEN NOT SENT! FAIL
        }
}
 
}
?>    



