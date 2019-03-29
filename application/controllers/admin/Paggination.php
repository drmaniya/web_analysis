<?php 

	class Paggination extends CI_Controller
	{
			function __construct()
			{
				parent::__construct();
				$this->load->model('admin/Paggination_model');	
				$this->load->library('pagination');
			} 	
			/*function demo()
			{
				echo "hello";	
			}*/
			function pagination_data($perpage=3,$segno=3,$table_name='',$siteurl='')
			{
				$per_page=$perpage;
				$start=$this->uri->segment($segno);
				$total=$this->Paggination_model->total_row($table_name);
					//echo $total;
				$config['base_url']=site_url($siteurl);
				$config['total_rows']=$total;
				$config['per_page']=$per_page;
				
						
						
				/****** codding for paggination design start*****/
				
				$config['full_tag_open']='<div class="pagination">';
				$config['full_tag_close']='</div>';
				$config['cur_tag_open'] ='<a class="active">';
				$config['cur_tag_close'] ='</a>';
				$config['first_link']='<<<';
				$config['last_link']='>>>';
				
				/****** codding for paggination design end*****/
					
						
				$this->pagination->initialize($config);
				$rec['data']=$this->Paggination_model->viewdata($per_page,$start,$table_name);
				
				return $rec;				
			}
	}	
?>