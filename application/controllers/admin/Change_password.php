<?php
	
	class Change_password extends CI_Controller
		{
			
			function __construct()
			{
				parent::__construct();
				
				if($this->session->userdata('admin')=='')
				{
					redirect('admin/Login');	
				}
				
				$this->load->model('admin/Admin_model');
				$this->load->model('admin/Changepass_model');
				$this->load->model('admin/Paggination_model');	
				$this->load->library('pagination');
				$this->load->library('form_validation');
			}
			
			function change_pass()
			{
				//echo "das";
				//die;	
				$data=array();
				$id=$this->session->userdata('admin');
				if($this->input->post('change_password'))
				{
					$old_password=$this->input->post('old_password');
					$new_password=$this->input->post('new_password');
					$conf_password=$this->input->post('conf_password');
					
					$this->form_validation->set_rules('old_password','Old Password','required');
					$this->form_validation->set_rules('new_password','New Password','required|min_length[8]|max_length[12]');
					$this->form_validation->set_rules('conf_password','Confirm Password','required');		
					if($this->form_validation->run() == false)
					{
						$data['old_password']=set_value('old_password');
						$data['new_password']=set_value('new_password');
						$data['conf_password']=set_value('conf_password');
					}
					else
					{
						$rec = $this->Changepass_model->old_getdata($id,$old_password);							
						
						
						if($rec == 1)
						{
							if($new_password == $conf_password)
							{
								$new_pass=array('password'=>$new_password);
								$this->Changepass_model->ch_pass($id,$new_pass);
							}
							else
							{
								@$data['old_password']=set_value('old_password');
								@$data['new_password']=set_value('new_password');
								@$data['conf_password']=set_value('conf_password');
								@$data['conf_err']="New Password && Repeat New Password Are Not Match...!!!";	
							}
						}	
						else
						{
							@$data['old_password']=set_value('old_password');
							@$data['new_password']=set_value('new_password');
							@$data['conf_password']=set_value('conf_password');
							@$data['old_err']="Old Password Are Incorrect...!!!";	
						}
					}
				}
				$this->load->view('admin/Edit_password',$data);
			}
		}
?>