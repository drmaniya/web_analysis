<?php 

	class Home_model extends CI_Model
	{
			function get_contact($arr=array())
			{
											// insert into contact_us table
				$this->db->insert('contact_us',$arr);	
			}
			
			function contact_already($email='')
			{
				$this->db->where('customer_email',$email);
				$qrr = $this->db->get('contact_us');
				$res = $qrr->num_rows();	
				return $res;
				
				
			}
			
			//built for enterprize//
			
			function con($id='')
			{
			  	//$this->db->select('heading');
				$this->db->where('id',$id);
				
				$qry=$this->db->get('content');
				$rec=$qry->row_array();
				//print_r($rec);
				//die;
				return $rec;
				
			}
			
			function feedback_data()
			{
				$qrr=$this->db->get('feedback');
				$res=$qrr->result_array();
				return $res;	
					
			}
				
	}
?>