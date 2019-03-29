<?php 

	class Country_model extends CI_model
	{
			function addcondata()
			{
					$country_name=$this->input->post('country');
					$arr= array('country_name'=>$country_name);
					
						//echo "success";
						$this->db->insert('country',$arr);	
					
					
						
			}
			
			function viewcondata()
			{
					$rec=$this->db->get('country');	
					$res=$rec->result_array();
					return $res;
			}
			
			function deletecondata($id='')
			{
				//echo "deletecondata".$id;
					
				$this->db->where('id',$id);
				$this->db->delete('country');
				redirect('admin/Country/view_country');	
			}
			
			function selectcondata($id='')
			{
				//echo "update_model".$id;
				
				$this->db->where('id',$id);
				$rec=$this->db->get('country');
				$res=$rec->row_array();
				
				return $res;	
			}
			
			function updatecondata($id='')
			{
				$country_name=$this->input->post('country');
				$arr= array('country_name'=>$country_name);
				
				//$res=$this->Getdata_model->get_data($country_name,'country_name','country');
				
				//echo $res['country_name'];
				//die;
				$this->db->where('id',$id);
				$this->db->update('country',$arr);
				redirect('admin/Country/view_country');
			}
	}
	
?>