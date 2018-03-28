<?php defined('BASEPATH') OR exit('No direct script access allowed');
	/**
	 * 
	 */
	class User_model extends CI_Model {
		
		public function insert_name($uname,$pass)
		{
			$arr = array(
				'uname' => $uname,
				'pass' => $pass 
				
			    );
			$query = $this->db->insert('user',$arr);
			return $query;
		}
		public function select_name($uname,$pass)
		{
			$sql = "select * from user where uname='$uname' and pass='$pass'";
			$query = $this->db->query($sql);
			return $query->row();
		}
	}
	
	






?>