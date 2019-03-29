<?php 

	class Message_model extends CI_Model
	{
			function insert($arr=array())
			{
				
				$this->db->insert('message',$arr);
				
			}	
			
			function get_record($id='')
			{
				$this->db->where('id',$id);
				$rec=$this->db->get('message');
				$res=$rec->row_array();
				//print_r($res);
				return $res;
			}
			
			function get_userrecord()
			{
				$qrr=$this->db->get('user');
				$res=$qrr->result_array();
				return $res;	
			}
			
			function view_data()
			{
				//echo "hello";
				//$id=$this->session->userdata('admin');
				//$this->db->where_not_in('id',$id);
				$rec=$this->db->get('message');
				$res=$rec->result_array();
				//print_r($res);
				return $res;
				
			}
			
			function delete_data($id='')
			{
				//echo "hwooel.".$id
				$this->db->where('message_id',$id);
				$this->db->delete('message');
				redirect('admin/Message/view_message');
			}
			
			
			function select_data($id='')
			{
				//echo "hiii".$id;
				
				$this->db->where('message_id',$id);
				$qry=$this->db->get('message');
				$res=$qry->row_array();
				
				//print_r($res);
	
				return $res;				
			}
			
			function update_data($id='',$arr='')
			{
					
				$this->db->where('message_id',$id);
				$this->db->update('message',$arr);
							
				redirect('admin/Message/view_message');
			}
			
		
			function delete_chatdata($id='')
			{
				$this->db->where('id',$id);
				$this->db->delete('msg_info');
				redirect('admin/Message/view_chat');	
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