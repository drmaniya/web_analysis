<?php 

		class State_model extends CI_Model
		{
				function insert_state()
				{
					$country_id=$this->input->post('country');
					$state_name=$this->input->post('state');
					$arr=array('country_id'=>$country_id,'state_name'=>$state_name);
					
					$this->db->insert('state',$arr);
					
				}
				
				function view_data()
				{
					//echo "hiii";
					$this->db->select('state.*,country.country_name');
					$this->db->join('country','state.country_id=country.id');
					$qry=$this->db->get('state');
					$res=$qry->result_array();
					//print_r($res);
					return $res;
					
	
				}			
				
				function delete_data($id='')
				{
					//echo "hllooo delete model...".$id;
					$this->db->where('id',$id);
					$this->db->delete('state');
					redirect('admin/State/view_state');	
				}
				
				function get_data()
				{
					$qry=$this->db->get('state');
					$res=$qry->result_array();
					return $res;	
				}
				
				function select_data($id='')
				{
					//echo "helloo..".$id;
					$this->db->where('id',$id);
					$arr=$this->db->get('state');
					$rec=$arr->row_array();
					return $rec;
				}
				
				function update_data($id='')
				{
					//echo "hjelsf".$id;
					$country_id=$this->input->post('country');
					$state_name=$this->input->post('state');
					$arr=array('country_id'=>$country_id,'state_name'=>$state_name);
					$this->db->where('id',$id);
					$this->db->update('state',$arr);
					
					redirect('admin/State/view_state');	
				}
				
				function state_detail($id='')
				{
					//echo "hiii";
					$this->db->where('state.id',$id);
					$this->db->select('state.*,country.*');
					$this->db->join('country','state.country_id=country.id');
					$qry=$this->db->get('state');
					$res=$qry->result_array();
					//print_r($res);
					return $res;
				}
		}
?>