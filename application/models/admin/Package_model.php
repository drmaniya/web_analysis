<?php
class Package_model extends CI_Model {

	function add_package()
	{

		$cost = $this->input->post('cost');
		$duration = $this->input->post('duration');
		$status = $this->input->post('status');
		$arr= array('pac_duration'=>$duration,'pac_cost'=>$cost,'pac_status'=>$status);
		$this->db->insert('package',$arr);
	}
	function view_package()
	{
		$qry = $this->db->get('package');
		$arr = $qry->result_array();
		return $arr; 
	}
	function delete_package($id='')
	{
		$this->db->where('pac_id',$id);
		$this->db->delete('package');
		redirect('admin/Package/view_package');
	}
	function update_package($id='')
	{
		
		$cost = $this->input->post('cost');
		$duration = $this->input->post('duration');
		$status = $this->input->post('status');
		$arr= array('pac_duration'=>$duration,'pac_cost'=>$cost,'pac_status'=>$status);
		$this->db->where('pac_id',$id);
		$this->db->update('package',$arr);
		redirect('admin/Package/view_package');
	}
	
	function update_status()
	{
		
		$id= $this->input->post('schange1');
		//echo $id;
		$this->db->where('pac_id',$id);
		$qry=$this->db->get('package');
		$row=$qry->row_array();
		
		if($row['pac_status'] == 1)
		{
			$data=0;	
		}
		else
		{
			$data=1;	
		}
		
		$status_data=array('pac_status'=>$data);
		$this->db->where('pac_id',$id);
		$this->db->update('package',$status_data);
		
		redirect('admin/Package/view_package');	
			
	}	

}
