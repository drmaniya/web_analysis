<?php 

		class Login_model extends CI_Model
		{
			
			function add_data($arr=array())
			{
			
				$this->db->insert('user',$arr);
				
				//print_r($this->db->last_query());
			}
			
			function check_email_data($email='')
			{
				$this->db->where('user_email',$email);
				$arr=$this->db->get('user');
				$res=$arr->num_rows();
				return $res;
			}	
			
			function getdata($email='',$password='')
			{
					$this->db->where('user_email',$email);
					$this->db->where('user_password',$password);
					$arr=$this->db->get('user');	
					
					$res=$arr->num_rows();
					return $res;
					
			}
			
			function check_email()
			{
				$for_email=$this->input->post('forget_email');	
				$this->db->where('user_email',$for_email);
				$res=$this->db->get('user');
				
				if($res->num_rows() == 1)
				{
					return true;	
				}
				else
				{
					return false;	
				}
					
			}
			
			function get_password()
			{
					$for_email=$this->input->post('forget_email');	
					$this->db->where('user_email',$for_email);
					$res=$this->db->get('user');
					return $res->row_array();
					
			}
			
			function log_user()
			{
				$email=$this->input->post('email_log');			 		
				$password=$this->input->post('password_log');
				
				$this->db->where('user_email',$email);
				$this->db->where('user_password',$password);
				$res=$this->db->get('user');
			
				return $res;
				//return $req;				
			}
			
			function user_loghis($arr=array())
			{
				$this->db->insert('user_log',$arr);
			}
			
		}
?>