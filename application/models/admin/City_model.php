<?php 

		class City_model extends CI_Model
		{
			function ajax_data()
			{
					$id=$this->input->post('country_id');
					$this->db->where('country_id',$id);
					$qry=$this->db->get('state');
					$res=$qry->result_array();
					//print_r($res);
					return $res;
					//echo "hello";	
			}
			
			function addcity_data()
			{
				//$country_id=$this->input->post('country');			
				$state_id=$this->input->post('state');
				$city=$this->input->post('city');
				$arr=array('state_id'=>$state_id,'city_name'=>$city);	
				$this->db->insert('city',$arr);
			}
			
			function select_city()
			{
				
				$this->db->select('city.*,state.state_name,country.country_name');
				$this->db->join('state','city.state_id=state.id');
				$this->db->join('country','state.country_id=country.id');
				
				$qrr=$this->db->get('city');
				$rec=$qrr->result_array();	
				return $rec;
				
			}
			
			function select_country()
			{
				
				$this->db->select('country.country_name,country.id');
				$qry=$this->db->get('country');
				$rec=$qry->result_array();
				return $rec;
			}
			
			function select_state()
			{
				$this->db->select('state.state_name');
				$qry=$this->db->get('state');
				$rec_state=$qry->result_array();
				return $rec_state;
			} 
			
			function city_detail($id='')
			{
				$this->db->where('city.id',$id);
				$this->db->select('city.*,state.*');
				$this->db->join('state','city.state_id=state.id');
				$qrr=$this->db->get('city');
				$rec=$qrr->row_array();	
			
				return $rec;
			}
			
			function delete_data($id='')
			{
				//echo "delete model".$id;
				$this->db->where('id',$id);
				$this->db->delete('city');
				redirect('admin/City/view_city');	
			}
			
			function select_data($id='')
			{
				$this->db->where('id',$id);
				$qry=$this->db->get('city');
				$res=$qry->row_array();
				
				return $res;	
			}
			
			function update_city($id='')
			{
				$state_id=$this->input->post('state');
				$city=$this->input->post('city');
				$arr=array('state_id'=>$state_id,'city_name'=>$city);
				$this->db->where('id',$id);	
				$this->db->update('city',$arr);
				
				redirect('admin/City/view_city');
			}
			
			// After change country, automatic fill up state combobox
			function ajax_get_state(){
				$ajax_country_id=$this->input->post('ajax_country_id');
				$this->db->where('country_id',$ajax_country_id);
				$qry=$this->db->get('state');
				return $qry->result_array();
			}
			
			function ajax_get_city()
			{
				$ajax_state_id=$this->input->post('state_id');
				/*$this->db->where('state_id',$ajax_country_id);
				$qry=$this->db->get('city');
				return $qry->result_array();*/
				
				$this->db->where('state_id',$ajax_state_id);
				$this->db->select('city.*,state.state_name,country.country_name');
				$this->db->join('state','city.state_id=state.id');
				$this->db->join('country','state.country_id=country.id');
				
				$qrr=$this->db->get('city');
				$rec=$qrr->result_array();	
				return $rec;
				
			}
		}
?>