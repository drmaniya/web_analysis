<?php

class User_model extends CI_Model
{
  		function add_user($arr=array())
		{
			//echo "helloasdf";
			
			$this->db->insert('user',$arr);					
		
		}
		
		function view_data()
		{
			$this->db->select('user.*,country.country_name');
			$this->db->join('country','user.country_id=country.id');
			$qrr=$this->db->get('user');	
			$res=$qrr->result_array();
			
			return $res;
		}
		
		function delete_data($id='')
		{
			$this->db->where('user_id',$id);
			$qry=$this->db->get('user');
			$res=$qry->row_array();
			unlink('./assets/user/image/'.$res['user_image']);
		
			$this->db->where('user_id',$id);
			$this->db->delete('user');
			
			redirect('admin/User/view_user');
		}
		
		function select_data($id='')
		{
			$this->db->where('user_id',$id);
			$arr=$this->db->get('user');
			$res=$arr->row_array();
			
			return $res;	
		}
		
		function update_data($id='',$arr=array())
		{
			$this->db->where('user_id',$id);
			$this->db->update('user',$arr);
			redirect('admin/User/view_user');	
		}
		
			function update_status()
			{
				
				$id= $this->input->post('schange1');
				//echo $id;
				$this->db->where('user_id',$id);
				$qry=$this->db->get('user');
				$row=$qry->row_array();
				
				if($row['user_status'] == 1)
				{
					$data=0;	
				}
				else
				{
					$data=1;	
				}
				
				$status_data=array('user_status'=>$data);
				$this->db->where('user_id',$id);
				$this->db->update('user',$status_data);
				
				redirect('admin/User/view_user');	
					
			}	
			
			function search_data()
			{
				$src_fed = $this->input->post('searchtxt');	
				/*$rec = $this->db->query("select user.*,country.country_name from user,country where user.country_id=country.id and user.user_name like '$src_fed%' or user.user_email like '$src_fed%'");
				
				$res = $rec->result_array();	
				return $res;*/
				$arr = array();
				$this->db->select('*');
				//$this->db->join('country','country.id=user.country_id');
				$this->db->or_where("user_name like '$src_fed%'");
				$this->db->or_where("user_email like '$src_fed%'");
				$qry=$this->db->get('user');
				$res=$qry->result_array();
				foreach($res as $row)
				{
					if(@$row['country_id']!='')
					{
										// This is for join country name...
							$this->db->select('*');
							$this->db->join('country','country.id=user.country_id');
							$this->db->where('user.user_id',@$row['user_id']);
							$qrr=$this->db->get('user');
							$rec=$qrr->row_array();
							array_push($arr,$rec); // here record with country name push
					}
					else
					{
						array_push($arr,$row);	 // record without null country name push
					}
				}
				
				
			
				//echo $this->db->last_query();
				//return $res;
				return $arr;
			}
	
}
?>