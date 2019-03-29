<?php

		class Feedback extends CI_Controller
		{
			
			function __construct()
			{
				parent::__construct();
				
				if($this->session->userdata('admin')=='')
				{
					redirect('admin/Login');	
				}
				
				$this->load->model('admin/Admin_model');
				$this->load->model('admin/Paggination_model');	
				$this->load->library('pagination');
				$this->load->library('form_validation');
				$this->load->model('admin/Feedback_model');
			}
		
			
			
			function view_feedback()
			{
					//echo "hello";	
			$arr['user_data']=$this->Paggination_model->pagination_data(3,4,"feedback","admin/Feedback/view_feedback/");
					
					//echo "<pre>";
					//print_r($arr);
					//$arr['user_data']=$this->Feedback_model->view_data();
					$this->load->view('admin/View_feedback',$arr);
					
					
			}
			
			function delete($id='')
			{
				$this->Feedback_model->delete_data($id);	
				//echo "hiii".$id;
			}
			
			function ajax_change_status()
			{
				//echo "schange";
				$this->Feedback_model->update_status();	
			}
			
			function ajax_search_feedback()
			{
				$src_fed = $this->input->post('searchtxt');	
				$rec = "select * from feedback where feedbacker_name like '$src_fed%' ";
				$temp = 2;
				
				//$arr['user_data'] = $this->Paggination_model->pagination_data(3,4,$rec,"admin/Feedback/ajax_search_feedback/",0,0,0,$temp);
				
				$arr['user_data'] = $this->Feedback_model->search_data();
				//echo "return ";
				//die;
				$this->load->view('admin/search_feedback',$arr);
				
			}
		}
?>