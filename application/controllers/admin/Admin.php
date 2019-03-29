<?php

		class Admin extends CI_Controller
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
			}
			
			function addstate()
			{
				$this->load->view('admin/Add_state');
			}
			
			
				
			function form()
			{
					$data=array();
					
					$id=$this->session->userdata('admin');
					$arr['data']=$this->Admin_model->get_record($id);
					$data['admin_level'] = $this->Admin_model->get_record($id);
						
					if($data['admin_level']['level'] == 1)
					{
							$this->session->set_userdata('main_admin','true');
							 
					}
						$data['chk_level'] = @$this->session->userdata('main_admin');
					
					//echo "hello";
					if($this->input->post())
					{
						$name=$this->input->post('name');
						$email=$this->input->post('email');
						$password=$this->input->post('password');
						$level=$this->input->post('level');
						
						$this->form_validation->set_rules('name','Name','required|regex_match[/^[a-zA-Z ]+$/]');
						$this->form_validation->set_rules('email','Email','required|valid_email');
						$this->form_validation->set_rules('password','Password','required|min_length[8]|max_length[12]');
						$this->form_validation->set_rules('level','Admin Category','required');
								
								
						  if($this->form_validation->run() == false)
						  {
								$data['name'] = set_value('name');	
						  		$data['email']=set_value('email');
								$data['password']=set_value('password');
								$data['level']=set_value('level');
								$data['image']=set_value('image');
								
						  }
						  else
						  {
						  		
							if($_FILES['image']['name'] == ''){
								$data['file_err'] = 'Please upload Image';
								$data['name'] = set_value('name');	
								$data['email']=set_value('email');
								$data['password']=set_value('password');
								$data['level']=set_value('level');
								$data['image']=set_value('image');
							}else
							{	
							
							  $arr=array('name'=>$name,'email'=>$email,'password'=>$password,'level'=>$level);
							  
							  $config['upload_path']='./assets/admin/image/';
							  $config['allowed_types']='gif|jpg|png|jpeg';
							  $this->load->library('upload',$config);
					  
									  
							   if ($this->upload->do_upload('image'))
							  {
								  $arr['image'] =$this->upload->data('file_name');
								 $rec = $this->Admin_model->get_already($email);
								 
								  if($rec > 0)
								  {
								  	$data['already'] = "Already Exiest...!!!";
								  }
								  else
								  {
									$this->Admin_model->insert($arr);  
								  }
							  }
							 else
							  {
								@$data['name'] = set_value('name');	
								@$data['email']=set_value('email');
								@$data['password']=set_value('password');
								@$data['level']=set_value('level');
								@$data['image']=set_value('image');
								 @$data['file_error']=$this->upload->display_errors();
							  }
							}
						  }
								  
							
					}
					$this->load->view('admin/Add_admin',$data);
					
			}
			
			function view()
			{
					//echo "hello";	
					$temp = 3;
				$id=$this->session->userdata('admin');
				$arr['chk_level']=$this->Admin_model->get_record($id);
			$arr['data']=$this->Paggination_model->pagination_data(3,4,"admin","admin/admin/view/",0,0,0,$temp);
					
					//echo "<pre>";
					//print_r($arr);die;
					//$arr['data']=$this->Admin_model->view_data();
					$this->load->view('admin/View_admin',$arr);
					
					
			}
			
			function delete($id='')
			{
				$this->Admin_model->delete_data($id);	
				//echo "hiii".$id;
			}
			
		function update($id='')
			{
				//echo "hello ..".$id;
				$data=array();
				$file_err = false;
				$this->load->library('form_validation');
				$arr=$this->Admin_model->select_data($id);
				
				//echo "<pre>";
					$data['name']=$arr['name'];
					$data['email']=$arr['email'];
					$data['password']=$arr['password'];
					$data['level']=$arr['level'];
					$data['image']=$arr['image'];
					
					$ses_id=$this->session->userdata('admin');
					$data['admin_level'] = $this->Admin_model->get_record($ses_id);
					if($data['admin_level']['level'] == 1)
					{
							$this->session->set_userdata('main_admin','true');
							 
					}
					$data['chk_level'] = @$this->session->userdata('main_admin');
					//echo $data['chk_level'];
					//die;
					
				if($this->input->post())
				{
					
					$sel_img=$this->Admin_model->select_data($id);
					$name=$this->input->post('name');
					$email=$this->input->post('email');
					$password=$this->input->post('password');
					$level=$this->input->post('level');
				
					$this->form_validation->set_rules('name','Name','required');
					$this->form_validation->set_rules('email','Email','required|valid_email');
					$this->form_validation->set_rules('password','Password','required|min_length[8]|max_length[12]');
					$this->form_validation->set_rules('level','Admin Category','required');
									
								
						  if($this->form_validation->run() == false)
						  {
								$data['name'] = set_value('name');	
								$data['email']=set_value('email');
								$data['password']=set_value('password');
								$data['level']=set_value('level');
								$data['image']=set_value('image');
						  
						  }
						else{
								if($_FILES['image']['name'] == '' && $arr['image']== '')
								{
									$data['file_error'] = 'please upload ';
								}
								else		
								{							
								$arr=array('name'=>$name,'email'=>$email,'password'=>$password);
								
									if(!empty($_FILES['image']['name'])){
										$config['upload_path']='./assets/admin/image/';
										$config['allowed_types']='gif|jpg|png';
										$this->load->library('upload',$config);
							
										 if ($this->upload->do_upload('image'))
										{
											unlink('./assets/admin/image/'.$sel_img['image']);
											
											$arr['image']=$this->upload->data('file_name');
											
										}
									   else
										{
											$file_err = true;
											$data['name'] = set_value('name');	
											$data['email']=set_value('email');
											$data['password']=set_value('password');
											$data['level']=set_value('level');
											$data['image']=set_value('image');
										
										//$data['file_error'] = $this->upload->display_errors();
										@$arr['image'] = $sel_img['image'];
										@$data['file_error']=$this->upload->display_errors();	
										}
									}
								if($file_err == false)
								{
									
										$this->Admin_model->update_data($id,$arr);
								}
								}
						}
					
					
					
				}
				$this->load->view('admin/Add_admin',$data);
			}	
		}
?>