<?php defined('BASEPATH') OR exit('No direct script access allowed');
	class Blog extends  CI_Controller{
		public function __construct()
		{
			parent::__construct();
		}
		public function index()
		{
			$this->load->model("Blog_model");
			$result = $this->Blog_model->get_all();
			$data['blogs'] = $result; 
			$this->load->view("index.php",$data);
		}
		public function search()
		{
			$info = $this->input->post('search_info');
			$this->load->model("Blog_model");
			$result = $this->Blog_model->search($info);
			$data['blogs']=$result;
			$this->load->view("index.php",$data);
			
		}
		public function all()
		{
			$this->load->view("all.php");
		}
		public function add()
		{
			$this->load->view("add.php");
		}
		
		
		
	}





?>