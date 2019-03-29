<?php

class Webcontent_model extends CI_Model
{
  		function add_content($arr=array())
		{
			//echo "helloasdf";
			
			$this->db->insert('content',$arr);					
		
		}
		
		function view_data()
		{
			$qrr=$this->db->get('content');	
			$res=$qrr->result_array();
			
			return $res;
		}
		
		function delete_data($id='')
		{
			$this->db->where('id',$id);
			$qry=$this->db->get('content');
			$res=$qry->row_array();
			unlink('./assets/webvisitor/img/'.$res['image']);
		
			$this->db->where('id',$id);
			$this->db->delete('content');
			
			redirect('admin/Webcontent/view_content');
		}
		
		function select_data($id='')
		{
			$this->db->where('id',$id);
			$arr=$this->db->get('content');
			$res=$arr->row_array();
			
			return $res;	
		}
		
		function update_data($id='',$arr=array())
		{
			$this->db->where('id',$id);
			$this->db->update('content',$arr);
			redirect('admin/Webcontent/view_content');	
		}
		
			function update_status()
			{
				
				$id= $this->input->post('schange1');
				//echo $id;
				$this->db->where('id',$id);
				$qry=$this->db->get('content');
				$row=$qry->row_array();
				
				if($row['content_status'] == 1)
				{
					$data=0;	
				}
				else
				{
					$data=1;	
				}
				
				$status_data=array('content_status'=>$data);
				$this->db->where('id',$id);
				$this->db->update('content',$status_data);
				
				redirect('admin/Webcontent/view_content');	
					
			}	
			
			function search_data()
			{
				$src_fed = $this->input->post('searchtxt');	
				$rec = $this->db->query("select * from content where heading like '$src_fed%' or mid_heading like '$src_fed%' or sub_heading like '$src_fed%' or content like '$src_fed%' or page_name like '$src_fed%' or content_status like '$src_fed%' or image like '$src_fed%'");
				
				//$rec = $this->db->query("select * from content where heading like '$src_fed%' ");
				
				$res = $rec->result_array();	
				return $res;
			}
	
}
?>