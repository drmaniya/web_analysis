<?php 

		class Bank_model extends CI_Model
		{
				function get_pacdata($id='')
				{
						$this->db->where('pac_id',$id);
						$qrr=$this->db->get('package');
						@$res=$qrr->row_array();
						return $res;
						
				}

				function add_payment_his($arr=array(),$user_id='',$status='')
				{
					$this->db->where('user_id',$user_id);
					$this->db->where('payment_status','success');
					$qry=$this->db->get('payment_history');
					@$rec = $qry->num_rows();
					

					if($rec > 0 )
					{
						$this->db->where('user_id',$user_id);	
						$this->db->where('payment_status','success');
						$this->db->update('payment_history',$arr);	
					}
					else 
					{
						$this->db->insert('payment_history',$arr);
					}	
					
				}	

				function addfal_payment_his($arr=array())
				{

						$this->db->insert('payment_history',$arr);
				}
		}

?>