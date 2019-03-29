<?php

		class Home extends CI_Controller
		{
			
			function __construct()
			{
				parent::__construct();
				
				$this->load->model('Home_model');
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
						$rec = $this->Home_model->contact_already($email);						
											
											// Call model function for insert data...
						if($rec > 0)
						{
							
							$data['already']="already exist...!!!";
								
						}
						else
						{ 
							$this->Home_model->get_contact($arr);
							$data['contact_success']="Keep In Touch With Successfully...";	
						}
					}
				}
				
				
				//  built for enterprize//
					$data['feedback_data']=$this->Home_model->feedback_data();
					$data['head_f']=$this->Home_model->con(1);
					$data['head_t']=$this->Home_model->con(3);
					$data['head_fo']=$this->Home_model->con(4);
					$data['head_fi']=$this->Home_model->con(5);
                      
					  $data['head_seventeen']=$this->Home_model->con(70);
					  $data['head_sevone']=$this->Home_model->con(71);
					  $data['head_sevtwo']=$this->Home_model->con(72);
					  $data['head_sevthr']=$this->Home_model->con(73);
					  $data['head_sevfou']=$this->Home_model->con(74);
					  $data['head_sevfiv']=$this->Home_model->con(75);
					  $data['head_sevsix']=$this->Home_model->con(76);
					  $data['head_sevsev']=$this->Home_model->con(77);
					  $data['head_seveig']=$this->Home_model->con(78);
					  $data['head_sevnin']=$this->Home_model->con(79);
					  $data['head_eighteen']=$this->Home_model->con(80);
					  $data['head_eigone']=$this->Home_model->con(81);	
					  $data['head_eigtwo']=$this->Home_model->con(82);	
					  $data['head_eigthr']=$this->Home_model->con(83);	
					  $data['head_eigfou']=$this->Home_model->con(84);	
					  $data['head_eigfiv']=$this->Home_model->con(85);	
					  $data['head_eigsix']=$this->Home_model->con(86);	
					  $data['head_eigsev']=$this->Home_model->con(87);	
					  $data['head_eigeig']=$this->Home_model->con(88);	
					  $data['head_eignin']=$this->Home_model->con(89);						
					//$data['head_r']=$this->Home_model->con(2);
					$data['head_hun']=$this->Home_model->con(100);	
					  $data['head_hunone']=$this->Home_model->con(101);	
					  $data['head_huntwo']=$this->Home_model->con(102);	
					
					//print_r($data['head_s']);
					//print_r($data['head_r']);
					//die;
				//over//	
					
					
				$this->load->view('visitor/Web_design',$data);
			}
			
	
}
?>