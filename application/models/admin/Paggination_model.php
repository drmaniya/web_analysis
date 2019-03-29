<?php 

	class Paggination_model extends CI_model
	{
		
		
			function total_row($table_name='')
				{
						$qry=$this->db->get($table_name);
						$rec=$qry->num_rows();
						
						return $rec;
				}	
				
				function viewdata($per_page='',$start='',$table_name='')
				{
					
							//echo "hello...world";
							$id=$this->session->userdata($table_name);
							$this->db->where_not_in('id',$id);
							$this->db->limit($per_page,$start);
							$sel=$this->db->get($table_name);
							$rec=$sel->result_array();
							return $rec;
				}
				
				 function get_trackdata($per_page='',$start='',$table_name='',$website_id='',$col_name='')
				{
					$this->db->where($col_name,$website_id);
					$qrr=$this->db->get($table_name);
					@$rec = $qrr->result_array();
					return $rec;	
				}
				
				function viewdata_admin($per_page='',$start='',$table_name='')
				{
					
							$id=$this->session->userdata($table_name);	
							$this->db->where_not_in('id',$id);
							$this->db->where_not_in('level',1);
							$this->db->limit($per_page,$start);
							$sel=$this->db->get($table_name);
							$rec=$sel->result_array();
							return $rec;
				}
				
				function search_view($per_page='',$start='',$qry)
				{
					
					$rec = $this->db->query($qry);
					$this->db->limit($per_page,$start);
					$res = $rec->result_array();	
					
					return $res;		
				}
				
				function view_join_data($per_page,$start,$table_name,$sel_para,$join_tab,$join_para)
				{
					//echo "hiii";
					$this->db->select($sel_para);
					$this->db->join($join_tab,$join_para,'left');
					$this->db->limit($per_page,$start);
					$qry=$this->db->get($table_name);
					$res=$qry->result_array();
					//print_r($res);
					return $res;
					
	
				}		
				
				function pagination_data($perpage=3,$segno=3,$table_name='',$siteurl='',$sel_para='',$join_tab='',$join_para='',$temp='')
				{
					
				$per_page=$perpage;
				$start=$this->uri->segment($segno);
				$total=$this->total_row($table_name);
					//echo $total;
				$config['base_url']=site_url($siteurl);
				$config['total_rows']=$total;
				$config['per_page']=$per_page;
					
						
				/****** codding for paggination design start*****/
				
				$config['full_tag_open']='<div class="pagination">';
				$config['full_tag_close']='</div>';
				$config['cur_tag_open'] ='<a class="active">';
				$config['cur_tag_close'] ='</a>';
				
				/****** codding for paggination design end*****/
				
				//echo "asdas".$temp." ".$per_page." ".$segno." ".$table_name." ".$siteurl." ".$sel_para." ".$join_tab;
					//die;		
				$this->pagination->initialize($config);
					
				
				if($temp == 1)
				{
					//echo "join";
					$rec=$this->view_join_data($per_page,$start,$table_name,$sel_para,$join_tab,$join_para);
					
				}
				elseif($temp == 2)
				{
					
					$rec = $this->search_view($per_page,$start,$table_name);		
				}
				elseif($temp == 3)
				{
					$rec = $this->viewdata_admin($per_page,$start,$table_name);		
					//echo $this->db->last_query();
				}
				elseif($temp == 4)
				{
					//echo "zfre";
					//die;
					$rec = $this->get_trackdata($per_page,$start,$table_name,$sel_para,$join_tab);	
				}
				else
				{
					$rec=$this->viewdata($per_page,$start,$table_name);
				}
				return $rec;				
			}	
	}
?>