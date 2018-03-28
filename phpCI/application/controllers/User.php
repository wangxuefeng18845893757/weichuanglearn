<?php defined('BASEPATH') OR exit('No direct script access allowed');
	
	/**
	 * 
	 */
	class User extends CI_Controller {
		public function __construct(){
			parent::__construct();
			$this->load->model("User_model");
		}
		public function reg() {
			$this->load->view('reg.php');
		}
		public function do_reg()
		{
			$uname = $this->input->post("uname");
			$pass = $this->input->post("pass");
			$mpass = md5($pass);
			$query = $this->User_model->insert_name($uname,$mpass);
			if($query){
				redirect("User/login");
			}else {
				echo "error";
			}
			
		}
		public function login()
		{
			$this->load->view('login.php');
		}
		public function do_login()
		{
			$uname = $this->input->post('uname') ;
			$pass = $this->input->post('pass');
			$mpass = md5($pass);
			$query = $this->User_model->select_name($uname,$mpass);
			if($query){
				$arr = array(
					'uid'=>$query->uid,
					'uname'=>$query->uname,
				
				);
				$this->session->set_userdata($arr);
				redirect("Blog/index");
			}
		}
	    public function unlogin()
		{
			$arr = array('uid','uname');
			$this->session->unset_userdata($arr);
			redirect("Blog/index");
		}
	}


?>