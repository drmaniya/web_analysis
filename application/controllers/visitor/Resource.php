<?php
class Resource extends CI_Controller
{
   function __construct()
			{
				parent::__construct();
				
				$this->load->model('visitor/Resource_model');
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
						$rec = $this->Resource_model->contact_already($email);						
											
											// Call model function for insert data...
						if($rec > 0)
						{
							
							$data['already']="already exist...!!!";
								
						}
						else
						{ 
							$this->Resource_model->get_contact($arr);	
						}
					}
				}
				
				$data['res_thi']=$this->Resource_model->con(13);
				$data['res_fou']=$this->Resource_model->con(14);
				$data['res_fif']=$this->Resource_model->con(15);
				$data['res_six']=$this->Resource_model->con(16);
				$data['res_sev']=$this->Resource_model->con(17);
				$data['res_eig']=$this->Resource_model->con(18);
				$data['res_nin']=$this->Resource_model->con(19);
				$data['res_twe']=$this->Resource_model->con(20);
				
				
				$this->load->view('visitor/Resource_design',$data);
			}
	
}



?> 