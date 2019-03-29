<?php
class Attribution extends CI_Controller
{
   function __construct()
			{
				parent::__construct();
				
				$this->load->model('visitor/Attr_model');
				$this->load->library('form_validation');
			}
			function index()
			{
				$data=array();
				
				if($this->input->post('Send_contact'))
				{
					$name = $this->input->post('name');
					$email = $this->input->post('email');
					$mobile = $this->input->post('mobile');
					$message = $this->input->post('message');
					
					$this->form_validation->set_rules('name','Name','required|regex_match[/^[a-zA-Z ]+$/]');
					$this->form_validation->set_rules('email','Email','required|valid_email');
					$this->form_validation->set_rules('mobile','Mobile','required|numeric|regex_match[/^[0-9]{10}$/]');
					$this->form_validation->set_rules('message','Message','required');
					
					if($this->form_validation->run() == false)
					{
						$data['name']=set_value('name');
						$data['email']=set_value('email');
						$data['mobile']=set_value('mobile');
						$data['message']=set_value('message');
					}
					else
					{
						$arr= array('customer_name'=>$name,'customer_email'=>$email,'customer_mobile'=>$mobile,'customer_message'=>$message);
												
											//call model for chcke user already contact
						$rec = $this->Attr_model->contact_already($email);						
											
											// Call model function for insert data...
						if($rec > 0)
						{
							
							$data['already']="already exist...!!!";
								
						}
						else
						{ 
							$this->Attr_model->get_contact($arr);	
						}
					}
				}
				
				
				
				
				if($this->input->post('Send_feedback'))
				{
					$name = $this->input->post('fed_name');
					$message = $this->input->post('fed_message');
					
					$this->form_validation->set_rules('fed_name','FeedBack Name','required|regex_match[/^[a-zA-Z ]+$/]');
					$this->form_validation->set_rules('fed_message','FeedBack Message','required');
				
				
					if($this->form_validation->run() == false)
					{
						$data['fed_name']=set_value('fed_name');
						$data['fed_message']=set_value('fed_message');
					}
					else
					{
						$arr= array('feedbacker_name'=>$name,'feedbacker_message'=>$message);
												
											// Call model function for insert data...
						$this->Attr_model->insert_feedback($arr);
						$data['fed_success']="Your FeedBack Are Successfully Send...";	
					}
				
				}
				
				
				$data['attr_fthr']=$this->Attr_model->con(43);
				$data['attr_ffou']=$this->Attr_model->con(44);
				$data['attr_ffiv']=$this->Attr_model->con(45);
				$data['attr_fsix']=$this->Attr_model->con(46);
				$data['attr_fsev']=$this->Attr_model->con(47);
				$data['attr_feig']=$this->Attr_model->con(48);
				$data['attr_fnin']=$this->Attr_model->con(49);
				
				
				$this->load->view('visitor/Attribution_design',$data);
			}
	
}



?> 