<?php 

		class Userdata_callbackmodel extends CI_Model
		{
			
			function insert_userdata($arr=array())
			{
				$this->db->insert('website_tracking',$arr);
			}	
			
			function get_ipcount($user_ip='')
			{
				$this->db->where('user_ip',$user_ip);
				$qrr=$this->db->get('website_tracking');	
				$res=$qrr->num_rows();
				return $res;
			}
			
			function update_ipcount($user_ip='',$arr='')
			{
				$this->db->where('user_ip',$user_ip);
				$this->db->update('website_tracking',$arr);
			}
			
			function get_repeatcount($user_ip='')
			{
				$this->db->where('user_ip',$user_ip);
				$this->db->select('website_tracking.return_count');
				
				$qry = $this->db->get('website_tracking');		
				$rec = $qry->row_array();
				/*echo  "<script> console.log(" .$rec. ") </script>";*/
				return $rec;
				
			}
		}
?>