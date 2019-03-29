<?php 

	class Contact_model extends CI_Model
	{
			function insert($arr=array())
			{
				
				$this->db->insert('contact_us',$arr);
				
			}	
			
			function get_record($id='')
			{
				$this->db->where('id',$id);
				$rec=$this->db->get('admin');
				$res=$rec->row_array();
				//print_r($res);
				return $res;
			}
			
			function view_data()
			{
				//echo "hello";
				//$id=$this->session->userdata('admin');
				//$this->db->where_not_in('id',$id);
				$rec=$this->db->get('contact_us');
				$res=$rec->result_array();
				//print_r($res);
				return $res;
				
			}
			
			function delete_data($id='')
			{
				//echo "hwooel.".$id
				$this->db->where('contact_id',$id);
				$this->db->delete('contact_us');
				redirect('admin/Contact/view_contact');
			}
			
			
			function select_data($id='')
			{
				//echo "hiii".$id;
				
				$this->db->where('contact_id',$id);
				$qry=$this->db->get('contact_us');
				$res=$qry->row_array();
				
				//print_r($res);
	
				return $res;				
			}
			
			function update_data($id='',$arr='')
			{
					
				$this->db->where('contact_id',$id);
				$this->db->update('contact_us',$arr);
							
				redirect('admin/Contact/view_contact');
			}
			
			function get_contemail($contact_id)
			{
				$this->db->where('contact_id',$contact_id);
				$qrr=$this->db->get('contact_us');
				$res=$qrr->row_array();
				return $res;
				
			}
			
			function search_data()
			{
				$src_fed = $this->input->post('searchtxt');	
				$rec = $this->db->query("select * from contact_us where customer_name like '$src_fed%' or customer_email like '$src_fed%'");
				
				$res = $rec->result_array();	
				return $res;
			}
	}
?>