
<?php
	class Attr_model extends CI_Model
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
			
			function insert_feedback($arr)
			{
											// insert into Feedback table
				$this->db->insert('feedback',$arr);
			}
			
			function con($id='')
			{
			  	//$this->db->select('heading');
				$this->db->where('id',$id);
				$qry=$this->db->get('content');
				$rec=$qry->row_array();
				return $rec;
			}
				
	}

?>