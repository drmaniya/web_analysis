<?php
		class Profile_model extends CI_Model
		{
				function select_data($id)
				{
					$this->db->where('id',$id);
					$arr=$this->db->get('admin');
					$res=$arr->row_array();
					//echo $this->db->last_query();	
					return $res;
				}	
				
				function update_data($id='',$arr='')
				{
					$this->db->where('id',$id);
					$this->db->update('admin',$arr);
					//echo $this->db->last_query();
					redirect('admin/Dashboard');
				}
		}
?> 