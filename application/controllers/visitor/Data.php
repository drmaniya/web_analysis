<?php

		class Data extends CI_Controller
		{
			
			function __construct()
			{
				parent::__construct();
				
				$this->load->model('visitor/Data_model');
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
						$rec = $this->Data_model->contact_already($email);						
											
											// Call model function for insert data...
						if($rec > 0)
						{
							
							$data['already']="already exist...!!!";
								
						}
						else
						{ 
							$this->Data_model->get_contact($arr);	
						}
					}
				}
				
				
				$data['pri_tone']=$this->Data_model->con(21);
				$data['pri_ttwo']=$this->Data_model->con(22);
				$data['pri_tthre']=$this->Data_model->con(23);
				$data['pri_tfou']=$this->Data_model->con(24);
				$data['pri_tfiv']=$this->Data_model->con(25);
				$data['pri_tsix']=$this->Data_model->con(26);
				$data['pri_tsev']=$this->Data_model->con(27);
				$data['pri_teig']=$this->Data_model->con(28);
				$data['pri_tnin']=$this->Data_model->con(29);
				$data['pri_tthr']=$this->Data_model->con(30);
				$data['pri_thone']=$this->Data_model->con(31);
				$data['pri_thtwo']=$this->Data_model->con(32);
				$data['pri_ththr']=$this->Data_model->con(33);
				$data['pri_thfou']=$this->Data_model->con(34);
				
				
				$data['pri_nineteen']=$this->Data_model->con(90);
				$data['pri_ninine']=$this->Data_model->con(99);
				
				
				$this->load->view('visitor/Data_design',$data);
			}
}
?>