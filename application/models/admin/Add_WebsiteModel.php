<?php 
		class Add_WebsiteModel extends CI_Model
		{
			
				function view_data()
				{
					$rec=$this->db->get('add_website');
					$res=$rec->result_array();
					//print_r($res);
					return $res;
				}
				
				function delete_site($web_id='')
				{
						$this->db->where('website_id',$web_id);
						$this->db->delete('add_website');
						redirect('admin/Add_site/view_site');
				}
				
				function update_status()
				{
				
				$id= $this->input->post('schange1');
				//echo $id;
				$this->db->where('website_id',$id);
				$qry=$this->db->get('add_website');
				$row=$qry->row_array();
				
				if($row['web_status'] == 1)
				{
					$data=0;	
				}
				else
				{
					$data=1;	
				}
				
				$status_data=array('web_status'=>$data);
				$this->db->where('website_id',$id);
				$this->db->update('add_website',$status_data);
				
				redirect('admin/Add_site/view_site');	
					
			}	
			
			function search_data()
			{
				$src_web = $this->input->post('searchtxt');	
				$rec = $this->db->query("select * from add_website where web_name like '$src_web%' or web_url like '$src_web%'");
				
				$res = $rec->result_array();	
				return $res;
			}
			
			function search_tracking()
			{
				@$website_id = @$this->session->userdata('wwebsite_id',$website_id);
				$src_web = $this->input->post('searchtxt');	
				
				$rec = $this->db->query("select * from website_tracking where website_id='$website_id' and (track_id like '$src_web%' or website_id like '$src_web%' or user_ip like '$src_web%' or user_city like '$src_web%' or user_state like '$src_web%' or user_country like '$src_web%' or http_refferer like '$src_web%' or device_type like '$src_web%' or device_os like '$src_web%' or device_browser like '$src_web%' or return_count like '$src_web%' or track_time like '$src_web%')");
				
				$res = $rec->result_array();	
				return $res;
			}
		}
?>