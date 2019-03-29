<?php 

	class User_model extends CI_Model
	{
		function get_record($id='')
			{
				$this->db->where('user_id',$id);
				$rec=$this->db->get('user');
				$res=$rec->row_array();
				//print_r($res);
				return $res;
			}
			
			function select_data($id='')
		{
			$this->db->where('user_id',$id);
			$arr=$this->db->get('user');
			$res=$arr->row_array();
			
			return $res;	
		}
		
		
		function update_data($id='',$arr=array())
		{
			
			$this->db->where('user_id',$id);
			$this->db->update('user',$arr);
			
			
			redirect('user/Profile/update_user');	
		}
		
		function update_password($id='',$new_pass=array())
		{
										// Update User Password...
				$this->db->where('user_id',$id);
				$this->db->update('user',$new_pass);
				
				redirect('user/Profile/update_user');
		}
	}
?>