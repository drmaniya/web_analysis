<?php 

	class Admin_model extends CI_Model
	{
			function insert($arr=array())
			{
				$this->db->insert('admin',$arr);
			}	
			
			function get_record($id='')
			{
				$this->db->where('id',$id);
				$rec=$this->db->get('admin');
				$res=$rec->row_array();
				//print_r($res);
				return $res;
			}
			
			function get_already($email='')
			{
				$this->db->where('email',$email);
				$qrr=$this->db->get('admin');
				$res=$qrr->num_rows();
				return $res;
					
			}
			
			function view_data()
			{
				//echo "hello";
				$id=$this->session->userdata('admin');
				$this->db->where_not_in('id',$id);
				$rec=$this->db->get('admin');
				$res=$rec->result_array();
				//print_r($res);
				return $res;
			}
			
			function delete_data($id='')
			{
				//echo "hwooel.".$id
				$this->db->where('id',$id);
				$qry=$this->db->get('admin');
				$res=$qry->row_array();
				
				unlink('./assets/admin/image/'.$res['image']);
				
				$this->db->where('id',$id);
				$this->db->delete('admin');
				redirect('admin/Admin/view');
			}
			
			
			function select_data($id='')
			{
				//echo "hiii".$id;
				
				$this->db->where('id',$id);
				$qry=$this->db->get('admin');
				
				$res=$qry->row_array();
				
				//print_r($res);
				return $res;				
			}
			
			function update_data($id='',$arr='')
			{
					
				$this->db->where('id',$id);
				$this->db->update('admin',$arr);
							
				redirect('admin/Admin/view');
			}
	}
?>