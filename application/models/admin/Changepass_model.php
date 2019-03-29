<?php 

	class Changepass_model extends CI_Model
	{
			function old_getdata($id=0,$old_password=0)
			{
				$this->db->where('id',$id);
				$this->db->where('password',$old_password);
				$qrr=$this->db->get('admin');
				//$res=$qrr->row_array();
				$rec_no=$qrr->num_rows();
				
				return $rec_no;
				
				
			}
			
			function ch_pass($id=0,$new_password=array())
			{
				$this->db->where('id',$id);
				$this->db->update('admin',$new_password);
			}
	}
?>