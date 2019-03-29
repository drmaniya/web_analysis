<?php

		class Message extends CI_Controller
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
				$this->load->model('admin/Message_model');
				$this->load->helper('common_helper'); 
			}
			
			
				
			function add_message()
			{
					$data=array();
					
					$admin_id=$this->session->userdata('admin');
					$data['user_detail']=$this->Message_model->get_userrecord();
							
					
					
					//echo "hello";
					if($this->input->post())
					{
						$user_email=$this->input->post('user_email');
						$message=$this->input->post('message');
						
						
						
						$this->form_validation->set_rules('user_email','User','required');
						$this->form_validation->set_rules('message','Message','required');
						
					
						
						if($this->form_validation->run() == false)
						{
							$data['user_email'] = set_value('user_email');
							$data['message'] = set_value('message');
						
							
						}
						else
						{		
							$arr=array('user_id'=>$user_email,'admin_id'=>$admin_id,'message'=>$message);
						$this->Message_model->insert($arr);
						}
					
					}
					$this->load->view('admin/Add_message',$data);
					
			}
			
			function view_message()
			{
					//echo "hello";	
				$arr['user_data']=$this->Paggination_model->pagination_data(3,4,"message","admin/Message/view_message/");
					
					//echo "<pre>";
					//print_r($arr);
					//$arr['user_data']=$this->Contact_model->view_data();
					$this->load->view('admin/View_message',$arr);
					
					
			}
			
			function delete($id='')
			{
				$this->Message_model->delete_data($id);	
				//echo "hiii".$id;
			}
			
		function update($id='')
			{
				//echo "hello ..".$id;
				$data=array();
				$this->load->library('form_validation');
				$arr=$this->Message_model->select_data($id);
				$admin_id=$this->session->userdata('admin');
				$data['user_detail']=$this->Message_model->get_userrecord();
				//echo "<pre>";
					$data['user_email']=$arr['user_id'];
					$data['message']=$arr['message'];
					
				
				
				if($this->input->post())
				{
					
					$user_email=$this->input->post('user_email');
					$message=$this->input->post('message');
					
				
					$this->form_validation->set_rules('user_email','User','required');
					$this->form_validation->set_rules('message','Message','required');
								
								
						  if($this->form_validation->run() == false)
						  {
								$data['user_email'] = set_value('user_email');	
								$data['message']=set_value('message');
								
						  
						  }
						else
						{
							$send_time = date("Y-m-d H:i:s");
								$arr=array('user_id'=>$user_email,'admin_id'=>$admin_id,'message'=>$message,'status'=>0,'send_time'=>$send_time,'seen_time'=>'');
								$this->Message_model->update_data($id,$arr);
						}
					}
				$this->load->view('admin/Add_message',$data);
			}
			
		
			function view_chat()
			{
				$arr['user_data']=$this->Paggination_model->pagination_data(3,4,"msg_info","admin/Message/view_chat/");
					
					//echo "<pre>";
					//print_r($arr);
					//$arr['user_data']=$this->Contact_model->view_data();
					$this->load->view('admin/View_chat',$arr);
					
			}
		
			function chat_delete($id='')
			{
			
				$this->Message_model->delete_chatdata(@$id);		
			}
			
			/*function ajax_search_contact()
			{
				$src_fed = $this->input->post('searchtxt');	
				$rec = "select * from contact_us where customer_name like '$src_fed%' ";
				$temp = 2;
				
				//$arr['user_data'] = $this->Paggination_model->pagination_data(3,4,$rec,"admin/Feedback/ajax_search_feedback/",0,0,0,$temp);
				
				$arr['user_data'] = $this->Contact_model->search_data();
				//echo "return ";
				//die;
				$this->load->view('admin/Search_contact',$arr);
				
			}*/
		}
?>