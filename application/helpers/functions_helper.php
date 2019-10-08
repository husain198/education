<?php
/**
 *  Helper File
 *
 * @package		Helper File
 * @author		Author name
 * @copyright		Copyright (c) 2016
 * @link			http://www.your-url.com
 * @since			Version 1.0
 */
 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
//Get User Info 
function getUserInfo($cid){ 
 		$ci=& get_instance();
        $ci->load->database(); 
        $sql = "SELECT * FROM edt_users Where user_id='".$cid."'"; 
        $query = $ci->db->query($sql);
        $result = $query->row();
		return $result; 
}
//Get User Type
function getUserType($cid){ 
 		$ci=& get_instance();
        $ci->load->database(); 
        $sql = "SELECT * FROM edt_user_type Where user_type_id='".$cid."'"; 
        $query = $ci->db->query($sql);
        $result = $query->row();
		return $result; 
}
 
?>