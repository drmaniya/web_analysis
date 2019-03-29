<?php
class Profile extends CI_Controller
{
	
		  function __construct()
		  {
			parent::__construct();  
		  		
				if($this->session->userdata('admin')=='')
				{
					redirect('admin/Login');	
				}
				
				$this->load->model('admin/Admin_model');
				$this->load->model('admin/Profile_model');
				$this->load->model('admin/Profile_model');
				$this->load->library('form_validation');
				

		  }
		  
		  function index()
		  {
			  $id=$this->session->userdata('admin');
			  $arr['data']=$this->Admin_model->get_record($id);
			$res['profile']=$this->Profile_model->select_data($id);	
			 $this->load->view('admin/Edit_profile',$res);
			
			
			
			/********************* Edit Profile Code Start *********************/
				
		  }
		  
		  function	profile()
		  { 
		  
		  	if($this->input->post('cancel')) 
			{
				redirect('admin/Dashboard');	
			}
			
			
		  
		  $id=$this->session->userdata('admin');
					$data=array();
				$file_err = false;
				$this->load->library('form_validation');
				$arr=$this->Admin_model->select_data($id);
				
				//echo "<pre>";
					$data['name']=$arr['name'];
					$data['email']=$arr['email'];
					//$data['password']=$arr['password'];
					$data['image']=$arr['image'];
					
				
				
				
				if($this->input->post())
				{
					 $id=$this->session->userdata('admin');
					$sel_img=$this->Admin_model->select_data($id);
					$name=$this->input->post('name');
					$email=$this->input->post('email');
					//$password=$this->input->post('password');
				
					$this->form_validation->set_rules('name','Name','required');
					$this->form_validation->set_rules('email','Email','required|valid_email');
					//$this->form_validation->set_rules('password','Password','required|min_length[8]|max_length[12]');
								
								
						  if($this->form_validation->run() == false)
						  {
								$data['name'] = set_value('name');	
								$data['email']=set_value('email');
								//$data['password']=set_value('password');
								$data['image']=set_value('image');
						  
						  }
						else{
								if($_FILES['image']['name'] == '' && $arr['image']== '')
								{
									$data['file_error'] = 'please upload ';
								}
								else		
								{							
								$arr=array('name'=>$name,'email'=>$email);
								
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
											//$data['password']=set_value('password');
											$data['image']=set_value('image');
										//$data['file_error'] = $this->upload->display_errors();
											$arr['image'] =$sel_img['image'];
											@$data['file_error']=$this->upload->display_errors();	
										}
									}
								if($file_err == false)
								{
									
										$this->Profile_model->update_data($id,$arr);
								}
								}
						}
					
					
					
				}
				$this->load->view('admin/Edit_profile',$data);	  
		 }
}

?>