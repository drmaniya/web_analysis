<?php 

	class Feedback_model extends CI_Model
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
				$rec=$this->db->get('feedback');
				$res=$rec->result_array();
				//print_r($res);
				return $res;
				
			}
			
			function delete_data($id='')
			{
				//echo "hwooel.".$id
				$this->db->where('feedback_id',$id);
				$this->db->delete('feedback');
				redirect('admin/Feedback/view_feedback');
			}
			
			
			
			function update_status()
			{
				
				$id= $this->input->post('schange1');
				//echo $id;
				$this->db->where('feedback_id',$id);
				$qry=$this->db->get('feedback');
				$row=$qry->row_array();
				
				if($row['feedback_status'] == 1)
				{
					$data=0;	
				}
				else
				{
					$data=1;	
				}
				
				$status_data=array('feedback_status'=>$data);
				$this->db->where('feedback_id',$id);
				$this->db->update('feedback',$status_data);
				
				redirect('admin/Feedback/view_feedback');	
					
			}
			
			function search_data()
			{
				$src_fed = $this->input->post('searchtxt');	
				$rec = $this->db->query("select * from feedback where feedbacker_name like '$src_fed%' ");
				
				$res = $rec->result_array();	
				return $res;
			}
			
	}
?>