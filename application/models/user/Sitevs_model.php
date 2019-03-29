<?php 
		
		class Sitevs_model extends CI_Model
		{
			function get_webname($user_id='')
			{
				/*$this->db->where('user_id',$user_id);
				$qry = $this->db->get('add_website');
				$res = $qry->result_array();*/
				
		$qrr=$this->db->query("select add_website.web_name,add_website.website_id, COUNT(website_tracking.user_ip) as user,YEAR(website_tracking.track_time) as year from add_website,website_tracking where add_website.user_id='$user_id' and add_website.website_id=website_tracking.website_id GROUP BY website_tracking.website_id,YEAR(website_tracking.track_time)");
			
		
				$res=$qrr->result_array();
						return $res;
				
			}
			
			function get_webmonth($user_id='')
			{
				$qry=$this->db->query("select YEAR(website_tracking.track_time) as year from website_tracking,add_website where add_website.user_id='$user_id' GROUP BY YEAR(website_tracking.track_time)");
				
				$res=$qry->result_array();
				
				$data=array();
				//foreach($res as $row)
			//	{		
				//	print_r($row);
					
					//$data=array_push($data,$rec);
				//} 
				//($res);
				//die;
			}
		
		}

?>