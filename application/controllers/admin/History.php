<?php

		class History extends CI_Controller
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
				$this->load->model('admin/History_model');
			}
		
			
			
			function view_adminhistory()
			{
					//echo "hello";	
			$arr['adminlog_data']=$this->Paggination_model->pagination_data(3,4,"admin_log","admin/History/view_adminhistory/");
					
					//echo "<pre>";
					//print_r($arr);
					//$arr['user_data']=$this->History_model->view_data();
					$this->load->view('admin/View_adminhis',$arr);
					
					
			}
			
			function view_userhistory()
			{
					//echo "hello";	
			$arr['userlog_data']=$this->Paggination_model->pagination_data(3,4,"user_log","admin/History/view_userhistory/");
					
					//echo "<pre>";
					//print_r($arr);
					//$arr['user_data']=$this->Feedback_model->view_data();
					$this->load->view('admin/View_userhis',$arr);
					
					
			}
			
			function delete_adminhis($id='')
			{
				$this->History_model->delete_adminhis($id);	
				//echo "hiii".$id;
			}
			
			function delete_userhis($id='')
			{
				$this->History_model->delete_userhis($id);	
				//echo "hiii".$id;
			}
			
			/*function ajax_change_status()
			{
				//echo "schange";
				$this->Feedback_model->update_status();	
			}*/
			
			/*function ajax_search_feedback()
			{
				$src_fed = $this->input->post('searchtxt');	
				$rec = "select * from feedback where feedbacker_name like '$src_fed%' ";
				$temp = 2;
				
				//$arr['user_data'] = $this->Paggination_model->pagination_data(3,4,$rec,"admin/Feedback/ajax_search_feedback/",0,0,0,$temp);
				
				$arr['user_data'] = $this->Feedback_model->search_data();
				//echo "return ";
				//die;
				$this->load->view('admin/search_feedback',$arr);
				
			}*/
		}
?>