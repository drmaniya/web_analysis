<?php 

	class Payment_historymodel extends CI_Model
	{
			function insert($arr=array())
			{
				
				$this->db->insert('payment_history',$arr);
				
			}	
			
			function get_record($id='')
			{
				$this->db->where('id',$id);
				$rec=$this->db->get('admin');
				$res=$rec->row_array();
				//print_r($res);
				return $res;
			}
			
			function get_packdetail()
			{
				$qrr=$this->db->get('package');
				$res=$qrr->result_array();
				return $res;
			
			}
			
			function user_detail()
			{
				$qry=$this->db->get('user');
				$res=$qry->result_array();
				return $res;
					
			}
			
			function view_data()
			{
				//echo "hello";
				//$id=$this->session->userdata('admin');
				//$this->db->where_not_in('id',$id);
				$rec=$this->db->get('payment_history');
				$res=$rec->result_array();
				return $res;
				
			}
			
			function delete_data($id='')
			{
				//echo "hwooel.".$id
				$this->db->where('payment_id',$id);
				$this->db->delete('payment_history');
				redirect('admin/Payment_history/view_payhistory');
			}
			
			
			function select_data($id='')
			{
				//echo "hiii".$id;
				
				$this->db->where('payment_id',$id);
				$qry=$this->db->get('payment_history');
				$res=$qry->row_array();
				
				//print_r($res);
	
				return $res;				
			}
			
			function update_data($id='',$arr='')
			{
					
				$this->db->where('payment_id',$id);
				$this->db->update('payment_history',$arr);
							
				redirect('admin/Payment_history/view_payhistory');
			}
			
			
			
			function search_data()
			{
				$src_fed = $this->input->post('searchtxt');	
				$rec = $this->db->query("select * from payment_history where payment_id like '$src_fed%' or user_id like '$src_fed%' or transection_id like '$src_fed%' or amount like '$src_fed%' or package_id like '$src_fed%' or payment_status like '$src_fed%' or package_info like '$src_fed%' or payment_time like '$src_fed%'");
				
				$res = $rec->result_array();	
				return $res;
			}
			
			
	}
?>