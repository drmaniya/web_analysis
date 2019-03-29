<?php
 
 	class Login_model extends CI_Model
	{
		function log_admin()
		{
			//echo "heloo";
				$email=$this->input->post('email');			 		
				$password=$this->input->post('password');
				$this->db->where('email',$email);
				$this->db->where('password',$password);
				$res=$this->db->get('admin');
				return $res;				
		}	
		
		function get_email($email='')
		{
				//echo "heloo".$email;
				//die;
				$this->db->where('email',$email);
				$res=$this->db->get('admin');
				return $res;
		}
		
		function admin_loghis($arr=array())
		{
			$this->db->insert('admin_log',$arr);
		}
		
	}
 ?>