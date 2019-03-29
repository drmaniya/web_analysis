<?php 

	class Dashboard_model extends CI_Model
	{
	
			function get_record($id='')
			{
					//echo "hello".$id;
					$this->db->where('id',$id);
					$rec=$this->db->get('admin');
					$get=$rec->row_array();
					//print_r($get);
					return $get;		
			}
			
			function get_totaluser()
			{	
					$qry = $this->db->get('user');
					$rec = $qry->num_rows();
					return $rec;
			}
			
			function get_totalsubadmin()
			{
					$this->db->where('level',2);
					$qry=$this->db->get('admin');
					$res=$qry->num_rows();
					return $res;
			}
			
			function get_totalwebsite()
			{
				$qry = $this->db->get('add_website');
				$rec = $qry->num_rows();
				return $rec;
			}
			
			function admin_logouthis($arr=array(),$login_time='')
			{
				$this->db->where('login_time',$login_time);
				$this->db->update('admin_log',$arr);	
			}
	}
		
?>