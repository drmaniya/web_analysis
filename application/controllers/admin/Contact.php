<?php

		class Contact extends CI_Controller
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
				$this->load->model('admin/Contact_model');
				$this->load->helper('common_helper'); 
			}
			
			function addstate()
			{
				$this->load->view('admin/Add_state');
			}
			
			
				
			function add_contact()
			{
					$data=array();
					
					$id=$this->session->userdata('admin');
					$arr['data']=$this->Admin_model->get_record($id);
							
					
					
					//echo "hello";
					if($this->input->post())
					{
						$name=$this->input->post('name');
						$email=$this->input->post('email');
						//$password=$this->input->post('password');
						$mobile=$this->input->post('mobile');
						$message=$this->input->post('message');
						
						
						$this->form_validation->set_rules('name','Name','required|regex_match[/^[a-zA-Z ]+$/]');
						$this->form_validation->set_rules('email','Email','required|valid_email');
						$this->form_validation->set_rules('mobile','Mobile','required|min_length[10]');							
						$this->form_validation->set_rules('message','Message','required');
						/*$this->form_validation->set_rules('password','Password','required|min_length[8]|max_length[12]');*/
					
						
						if($this->form_validation->run() == false)
						{
							$data['name'] = set_value('name');
							$data['email'] = set_value('email');
							$data['mobile']=set_value('mobile');
							$data['message']=set_value('message');
							
						}
						else
						{		
							$arr=array('customer_name'=>$name,'customer_email'=>$email,'customer_mobile'=>$mobile,'customer_message'=>$message);
						$this->Contact_model->insert($arr);
						}
					
					}
					$this->load->view('admin/Add_contact',$data);
					
			}
			
			function view_contact()
			{
					//echo "hello";	
				$arr['user_data']=$this->Paggination_model->pagination_data(3,4,"contact_us","admin/Contact/view_contact/");
					
					//echo "<pre>";
					//print_r($arr);
					//$arr['user_data']=$this->Contact_model->view_data();
					$this->load->view('admin/View_contact',$arr);
					
					
			}
			
			function delete($id='')
			{
				$this->Contact_model->delete_data($id);	
				//echo "hiii".$id;
			}
			
		function update($id='')
			{
				//echo "hello ..".$id;
				$data=array();
				$this->load->library('form_validation');
				$arr=$this->Contact_model->select_data($id);
				
				//echo "<pre>";
					$data['name']=$arr['customer_name'];
					$data['email']=$arr['customer_email'];
					$data['mobile']=$arr['customer_mobile'];
					$data['message']=$arr['customer_message'];
				
				
				
				if($this->input->post())
				{
					
					
					$name=$this->input->post('name');
					$email=$this->input->post('email');
					$mobile=$this->input->post('mobile');
					$message=$this->input->post('message');
					
				
					$this->form_validation->set_rules('name','Name','required');
					$this->form_validation->set_rules('email','Email','required|valid_email');
					$this->form_validation->set_rules('mobile','Mobile','required');
					$this->form_validation->set_rules('message','Message','required');
								
								
						  if($this->form_validation->run() == false)
						  {
								$data['name'] = set_value('name');	
								$data['email']=set_value('email');
								$data['mobile']=set_value('mobile');
								$data['message']=set_value('message');
						  
						  }
						else
						{
								$arr=array('customer_name'=>$name,'customer_email'=>$email,'customer_mobile'=>$mobile,'customer_message'=>$message);
								$this->Contact_model->update_data($id,$arr);
						}
					}
				$this->load->view('admin/Add_contact',$data);
			}
			
			function contact_replay($contact_id='')
			{
												// Get Customer Email...
												
				$data['cont_email']=$this->Contact_model->get_contemail($contact_id);	
			
			
				if($this->input->post('replay_contact'))
					{
						
						$email=$this->input->post('email');
						$subject=$this->input->post('subject');
						$message=$this->input->post('message');
						
						
						$this->form_validation->set_rules('email','Email','required|valid_email');
						$this->form_validation->set_rules('subject',' Subject','required');							
						$this->form_validation->set_rules('message','Message','required');
						
						
						if($this->form_validation->run() == false)
						{
							$data['email'] = set_value('email');
							$data['subject']=set_value('subject');
							$data['message']=set_value('message');
							
						}
						else
						{			
							
							$data['email_res']=email_contreplay($email,$subject,$message);
						}
					
					}
			
			
			
				$this->load->view('admin/Contact_replay',$data);	
					
			}	
			
			function ajax_search_contact()
			{
				$src_fed = $this->input->post('searchtxt');	
				$rec = "select * from contact_us where customer_name like '$src_fed%' ";
				$temp = 2;
				
				//$arr['user_data'] = $this->Paggination_model->pagination_data(3,4,$rec,"admin/Feedback/ajax_search_feedback/",0,0,0,$temp);
				
				$arr['user_data'] = $this->Contact_model->search_data();
				//echo "return ";
				//die;
				$this->load->view('admin/Search_contact',$arr);
				
			}
		}
?>