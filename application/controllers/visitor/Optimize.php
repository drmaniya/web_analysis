<?php
class Optimize extends CI_Controller
{
   function __construct()
			{
				parent::__construct();
				
				$this->load->model('visitor/Optimize_model');
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
					
					$this->form_validation->set_rules('name','Name','required|alpha');
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
						$rec = $this->Optimize_model->contact_already($email);						
											
											// Call model function for insert data...
						if($rec > 0)
						{
							
							$data['already']="already exist...!!!";
								
						}
						else
						{ 
							$this->Optimize_model->get_contact($arr);	
						}
					}
				}
				
				//start//
				
				$data['opti_thsix']=$this->Optimize_model->con(36);
				$data['opti_thsev']=$this->Optimize_model->con(37);
				$data['opti_theig']=$this->Optimize_model->con(38);
				$data['opti_thnin']=$this->Optimize_model->con(39);
				$data['opti_fourt']=$this->Optimize_model->con(40);
				$data['opti_fone']=$this->Optimize_model->con(41);
				$data['opti_ftwo']=$this->Optimize_model->con(42);
				
				
				//over//
				$this->load->view('visitor/Optimize_design',$data);
			}
	
}



?> 