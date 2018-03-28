<?php defined('BASEPATH') OR exit('No direct script access allowed');
	class Blog_model extends CI_Model{
		public function get_all()
		{
			$sql = "select * from blog";
			$query = $this->db->query($sql);
			return $query->result();
		}
		public function search($info)
		{
			
			$this->db->like('title',$info);
			$query=$this->db->get('blog');
			return $query->result();
		}
		
		
		
		
	}






?>