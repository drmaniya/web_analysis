<?php
class User extends CI_Controller
{
  function __construct()
 	{
	  parent::__construct();
	  
		
			if($this->session->userdata('admin')=='')
			{
				redirect('admin/Login');
			}
			
			$this->load->model('admin/Admin_model');
			$this->load->model('admin/Country_model');	
			$this->load->model('admin/City_model');
			$this->load->model('admin/State_model');
			$this->load->model('admin/User_model');	
			$this->load->model('admin/Paggination_model');
			$this->load->library('pagination');
					
				
	 }	
	 
	  function add_user()
	  {	
	  
	  		$data=array();
			$this->load->library('form_validation');
	 		$data['con_data']=$this->Country_model->viewcondata();
			 
			
			if($this->input->post())
			{
				
				
					 $name=$this->input->post('name');	
					 $email=$this->input->post('email');
					 $password=$this->input->post('password');
					 $mobile=$this->input->post('mobile');
					 $gender=$this->input->post('gender');
					 $country_id=$this->input->post('country');
					
					 $status=$this->input->post('status');	
						
						
					$this->form_validation->set_rules('name','Name','required|regex_match[/^[a-zA-Z ]+$/]');
					$this->form_validation->set_rules('email','Email','required|valid_email');
					$this->form_validation->set_rules('password','Password','required|min_length[8]|max_length[12]');
					$this->form_validation->set_rules('mobile','Mobile No.','required|numeric');	
					$this->form_validation->set_rules('gender','Gender','required');
					$this->form_validation->set_rules('country','Country','required');
					$this->form_validation->set_rules('status','Status','required');
					
						if($this->form_validation->run() == false)
						{
							$data['name']=set_value('name');
							$data['email'] = set_value('email');
							$data['password'] = set_value('password');
							$data['mobile'] = set_value('mobile');
							$data['gender'] = set_value('gender');	
							$data['country'] = set_value('country');	
							$data['status'] = set_value('status');	
							$data['image'] = set_value('image');	
								
						}
						
						else
						{
							
							if($_FILES['image']['name'] == '')
							{
								
								$data['file_err']='Please upload Image...';
								
								$data['name'] = set_value('name');
								$data['email'] = set_value('email');
								$data['password'] = set_value('password');
								$data['mobile'] = set_value('mobile');
								$data['gender'] = set_value('gender');	
								$data['country'] = set_value('country');	
								$data['status'] = set_value('status');	
								$data['image'] = set_value('image');
							}
							
							else
							{
								
								
						   		$arr=array('user_name'=>$name,'user_email'=>$email,'user_password'=>$password,'user_mobile'=>$mobile,'user_gender'=>$gender,'country_id'=>$country_id,'user_status'=>$status);	
						   
						   $config['upload_path']='./assets/user/image/';
							  $config['allowed_types']='gif|jpg|png';
							  $this->load->library('upload',$config);
					  
									  
							   if ($this->upload->do_upload('image'))
							  {
								  $arr['user_image'] =$this->upload->data('file_name');
								  $this->User_model->add_user($arr);
							  }
							 else
							  {
								  $data['file_error']=$this->upload->display_errors();
							  }
							}
							
						}
						
				}	
				$this->load->view('admin/Add_user',$data); 
	 	
	  }
	  
	  function view_user()
	  {
		
			$sel_para = 'user.*,country.country_name';
			$country = 'country';
			$join_para = 'country,user.country_id=country.id';
			$temp=1;
			
			$us_data['user_data'] = $this->Paggination_model->pagination_data(3,4,"user","admin/User/view_user/",$sel_para,$country,$join_para,$temp);	
		//$us_data['user_data']=$this->User_model->view_data();  
		$this->load->view('admin/View_user',$us_data);		  
	  
	  }
	  
	  function delete_user($id='')
	  {
			
	  		$this->User_model->delete_data($id);
	  }
	  
	  function update_user($id='')
	  {
			$data=array();
			$this->load->library('form_validation');	
			$data['con_data']=$this->Country_model->viewcondata();
	  		$qrr=$this->User_model->select_data($id);
			
			//echo "<pre>";
			//print_r($qrr);
			
			$data['name']=$qrr['user_name'];
			$data['email']=$qrr['user_email'];
			$data['password']=$qrr['user_password'];
			$data['mobile']=$qrr['user_mobile'];
			$data['gender']=$qrr['user_gender'];
			$data['country']=$qrr['country_id'];
			$data['status']=$qrr['user_status'];
			$data['image']=$qrr['user_image'];
			
			
			
			if($this->input->post())
			{
				$file_err=false;
				@$sel_img=$this->User_model->select_data($id);
				 $name=$this->input->post('name');	
					 $email=$this->input->post('email');
					 $password=$this->input->post('password');
					 $mobile=$this->input->post('mobile');
					 $gender=$this->input->post('gender');
					 $country_id=$this->input->post('country');
					 $status=$this->input->post('status');	
						
					$this->form_validation->set_rules('name','Name','required|regex_match[/^[a-zA-Z ]+$/]');
					$this->form_validation->set_rules('email','Email','required|valid_email');
					$this->form_validation->set_rules('password','Password','required|min_length[8]|max_length[12]');
					$this->form_validation->set_rules('mobile','Mobile No.','required|numeric');	
					$this->form_validation->set_rules('gender','Gender','required');
					$this->form_validation->set_rules('country','Country','required');
					$this->form_validation->set_rules('status','Status','required');	
						
						
						
					if($this->form_validation->run() == false)
					{
						$data['name'] = set_value('name');
						$data['email'] = set_value('email');
						$data['password'] = set_value('password');
						$data['mobile'] = set_value('mobile');
						$data['gender'] = set_value('gender');	
						$data['country'] = set_value('country');	
						$data['status'] = set_value('status');	
						$data['image'] = set_value('image');	
					
					}
					else
					{
							if($_FILES['image']['name'] == '' && $qrr['user_image'] == '')	
							{
								$data['file_error'] = 'please upload Image';
								$data['email'] = set_value('email');
								$data['name'] = set_value('name');
								$data['password'] = set_value('password');
								$data['mobile'] = set_value('mobile');
								$data['gender'] = set_value('gender');	
								$data['country'] = set_value('country');	
								$data['status'] = set_value('status');	
								$data['image'] = set_value('image');	
							}
							else
							{
								@$arr=array('user_name'=>$name,'user_email'=>$email,'user_password'=>$password,'user_mobile'=>$mobile,'user_gender'=>$gender,'country_id'=>$country_id,'user_status'=>$status);	
					 
					 		if(!empty($_FILES['image']['name'])){
								
+							   $config['upload_path']='./assets/user/image/';
								  $config['allowed_types']='gif|jpg|png';
								  $this->load->library('upload',$config);
						  
										  
								   if ($this->upload->do_upload('image'))
								  {
									  @unlink('./assets/user/image/'.$sel_img['user_image']);
									  @$arr['user_image'] =$this->upload->data('file_name');
									  
								  }
								 else
								  {
									  $file_err = true;
									 $data['name'] = set_value('name');
									$data['email'] = set_value('email');
									$data['password'] = set_value('password');
									$data['mobile'] = set_value('mobile');
									$data['gender'] = set_value('gender');	
									$data['country'] = set_value('country');	
									$data['status'] = set_value('status');	
									$data['image'] = set_value('image');	
									 @$arr['user_image'] = @$sel_img['user_image'];
									  
								  }
							}
							
							if($file_err == false)
							{
								$this->User_model->update_data($id,$arr);				
							}
							}
					}
						 
			}
	  			$this->load->view('admin/Add_user',$data);
	  }
	
			function ajax_change_status()
				{
					//echo "schange";
					$this->User_model->update_status();	
				}
				
				function ajax_search_user()
				{
					$src_fed = $this->input->post('searchtxt');	
					$rec = "select * from user where user_name like '$src_fed%' ";
					$temp = 2;
					
					//$arr['user_data'] = $this->Paggination_model->pagination_data(3,4,$rec,"admin/User/ajax_search_user/",0,0,0,$temp);
					
					$arr['user_data'] = $this->User_model->search_data();
					//echo "return ";
					//die;
					$this->load->view('admin/Search_user',$arr);
					
				}
}

?>
