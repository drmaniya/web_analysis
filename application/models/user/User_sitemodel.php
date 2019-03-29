<?php 

		class User_sitemodel extends CI_Model
		{
			
			function add_website($arr='')
			{
				
				$this->db->insert('add_website',$arr);
				//echo $this->db->last_query();	
			}	
			
			function view_website($id='')
			{
						// Get Particular User Login All Record from Add_Website
					$this->db->where('user_id',$id);	
					$qrr=$this->db->get('add_website');
					$res=$qrr->result_array();
				
					return $res;	
					
			}
			
			function delete_site($id='')
			{
				$this->db->where('website_id',$id);
				$this->db->delete('add_website');
				redirect('user/User_site/site_view');	
			}
			
			function get_webdata($webid='')
			{
				//echo "sdfds".$webid;
				$this->db->where('website_id',$webid);
				$qrr=$this->db->get('add_website');
				$res=$qrr->row_array();
				return $res;
				
			}
			
			function update_site($webid='',$store=array())
			{
				$this->db->where('website_id',$webid);
				$this->db->update('add_website',$store);
				//echo $this->db->last_query();
				redirect('user/User_site/site_view');	
			}
			
			function get_all()
			{
				$qrr=$this->db->get('add_website');	
				$res=$qrr->result_array();
				return $res;
				
			}
			
			function get_webid($id='')
			{
				$this->db->where('user_id',$id);
				$qry=$this->db->get('add_website');	
				
				return $qry;
				
			}
			
			function get_webtrackid()
			{
				$qry=$this->db->get('website_tracking');
				return $qry;
			}
			
			function search_data()
			{
				$id=$this->session->userdata('user');
				$src_fed = $this->input->post('searchtxt');	
				$rec = $this->db->query("select * from add_website where user_id='$id' and (web_name like '$src_fed%' or web_url like '$src_fed%')");
				
				$res = $rec->result_array();	
				return $res;
			}
		}
		
?>