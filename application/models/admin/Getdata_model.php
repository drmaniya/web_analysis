<?php
class Getdata_model extends CI_Model
{
	function get_data($data='',$fname='',$tname='')
	{
		$this->db->where($fname,$data);
		$qry = $this->db->get($tname);
		return $qry->row_array();
	}
	
	
	function get_datas($id='',$fname='',$tname='')
	{
		$this->db->where($fname,$id);
		$qry = $this->db->get($tname);
		return $qry->result_array();	
	}
	function delete_image($id='',$fname='',$tname='',$path='',$img_name='')
	{
		$this->db->where($fname,$id);
		$qry = $this->db->get($tname);
		$arr = $qry->row_array();
		unlink($path.$arr[$img_name]);
	}
	function search($id='',$fname='',$tname='')
	{
		$this->db->like($fname,$id);
		$qry = $this->db->get($tname);
		return $qry->result_array();
	}
	function search_join($id='',$fname='',$tname='',$join='',$jointname='')
	{
		$this->db->join($jointname,$join);
		$this->db->like($fname,$id);
		$qry = $this->db->get($tname);
		return $qry->result_array();	
		//echo $this->db->last_query();
	}
	function multi_search($id='',$fname='',$fid='',$ffname='',$tname='',$join='',$jointname='')
	{
		$this->db->join($jointname,$join);
		$this->db->like($fname,$id);
		$this->db->like($ffname,$fid);
		$qry = $this->db->get($tname);
		return $qry->result_array();	
		//echo $this->db->last_query();	
	}
	function multi_search_limit($id='',$fname='',$fid='',$ffname='',$tname='',$join='',$jointname='',$start='',$end='')
	{
		$this->db->join($jointname,$join);
		$this->db->like($fname,$id);
		$this->db->like($ffname,$fid);
		$this->db->limit($end,$start);
		$qry = $this->db->get($tname);
		return $qry->result_array();	
		//echo $this->db->last_query();	
	}
	function get_tbl_info($tbl='',$grp_by='')
	{
		$this->db->group_by($grp_by);
		$qry = $this->db->get($tbl);
		return $qry->result_array();
	}
	function count_record($tbl='')
	{
		$qry = $this->db->get($tbl);
		return $qry->num_rows();
	}
}
?>