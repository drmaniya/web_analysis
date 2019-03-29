<?php
class Profile extends CI_Controller
{
	
			function __construct()
			{
				parent::__construct();
				if($this->session->userdata('user') == '')
				{
					redirect('user/Login');	
				}
				$this->load->model('user/Login_model');	
				$this->load->model('user/User_model');
				$this->load->model('admin/User_model');	
				$this->load->model('admin/Country_model');
				$this->load->model('user/Dashboard_model');
				$this->load->library('form_validation');
				$this->load->library('image_lib');
			
			}
				
		  function index()
		  {
			  //echo "profile";
			  $id=$this->session->userdata('user');
			$data=$this->am->get_record($id);
	//echo $id;
			 //$this->load->view('user/Edit_profile');  
			  
				
		  }
	
	
		function update_user()
	  {
		   $id=$this->session->userdata('user');
			$data=array();
			$file_err=false;
			$data['con_data']=$this->Country_model->viewcondata();
	  		$qrr=$this->User_model->select_data($id);
		
			
			$data['name']=$qrr['user_name'];
			$data['email']=$qrr['user_email'];
			$data['password']=$qrr['user_password'];
			$data['mobile']=$qrr['user_mobile'];
			$data['gender']=$qrr['user_gender'];
			$data['country']=$qrr['country_id'];
			$data['status']=$qrr['user_status'];
			$data['image']=$qrr['user_image'];
			
			
			
			if($this->input->post('profile_update'))
			{
				$sel_img=$this->User_model->select_data($id);
				
				 $name=$this->input->post('name');	
					 $email=$this->input->post('email');
					 //$password=$this->input->post('password');
					 $mobile=$this->input->post('mobile');
					 $gender=$this->input->post('gender');
					 $country_id=$this->input->post('country');
					 $status=$this->input->post('status');	
						
					$this->form_validation->set_rules('name','Name','required|regex_match[/^[a-zA-Z ]+$/]');
					$this->form_validation->set_rules('email','Email','required|valid_email');
					//$this->form_validation->set_rules('password','Password','required|min_length[8]|max_length[12]');
					$this->form_validation->set_rules('mobile','Mobile No.','required|numeric');	
					$this->form_validation->set_rules('gender','Gender','required');
					$this->form_validation->set_rules('country','Country','required');
					//$this->form_validation->set_rules('status','Status','required');	
						
						
						
					if($this->form_validation->run() == false)
					{
						$data['name'] = set_value('name');
						$data['email'] = set_value('email');
						//$data['password'] = set_value('password');
						$data['mobile'] = set_value('mobile');
						$data['gender'] = set_value('gender');	
						$data['country'] = set_value('country');	
						//$data['status'] = set_value('status');	
						$data['image'] = set_value('image');	
					
					}
					else
					{
						
							if($_FILES['image']['name'] == '' && $qrr['user_image'] == '')	
							{
							
								$data['file_error'] = 'please upload Image';
								$data['email'] = set_value('email');
								$data['name'] = set_value('name');
								//$data['password'] = set_value('password');
								$data['mobile'] = set_value('mobile');
								$data['gender'] = set_value('gender');	
								$data['country'] = set_value('country');	
								//$data['status'] = set_value('status');	
								$data['image'] = set_value('image');	
							}
							else
							{
								$arr=array('user_name'=>$name,'user_email'=>$email,'user_mobile'=>$mobile,'user_gender'=>$gender,'country_id'=>$country_id);	
					 
					 		if(!empty($_FILES['image']['name'])){
								
							   $config['upload_path']='./assets/user/image/';
								$config['allowed_types']='gif|jpg|png|jpeg';
								  //$config['max_size']='2000';
								 
								$this->load->library('upload',$config);
						  		
										  
								   if ($this->upload->do_upload('image'))
								  {
									  unlink('./assets/user/image/'.$sel_img['user_image']);
									  
									  $arr['user_image'] =$this->upload->data('file_name');
									  
									
								 
								  }
								 else
								  {
									  $file_err = true;
								
									 $data['name'] = set_value('name');
									$data['email'] = set_value('email');
									//$data['password'] = set_value('password');
									$data['mobile'] = set_value('mobile');
									$data['gender'] = set_value('gender');	
									$data['country'] = set_value('country');	
									//$data['status'] = set_value('status');	
									$data['image'] = set_value('image');	
									 $arr['user_image'] =$sel_img['user_image'];
									 @$data['image_err']=$this->upload->display_errors();
								  }
							}
							
							if($file_err == false)
							{
								$this->User_model->update_data($id,$arr);				
							}
							}
					}
						 
			}
			
			if($this->input->post('change_password'))
				{
												//get record from textbox
					$id=$this->session->userdata('user');
					 $o_password=$this->input->post('o_password');
					 $n_password=$this->input->post('n_password');
					 $r_password=$this->input->post('r_password');
					
					$id=$this->session->userdata('user');
					
												//get record from user session id
												
					 $rec = $this->Dashboard_model->get_record($id);
						
					
					$orgnl_password=$rec['user_password'];

			
					$this->form_validation->set_rules('n_password','New Password','required|min_length[8]|max_length[12]');
					$this->form_validation->set_rules('r_password','Repeat Password','required|matches[n_password]');
						
					if($this->form_validation->run() == false)
					{
							
					}
					else
					{					
						if($orgnl_password == $o_password)
						{
					
														// Load Model For Update User Password	
								$new_pass=array('user_password'=>$n_password);
								$this->User_model->update_password($id,$new_pass);	
						}
						else
						{
							$data['old_error'] = "Old Password Is In-Correct...!!!";
							/*$data['n_password']= $n_password;
							$data['r_password']=$r_password;
							$data['o_password']=$o_password;*/
						}
					}
	  
				}
						
				$this->load->view('user/Edit_profile',$data);
	  }
}



?>