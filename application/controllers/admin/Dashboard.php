<?php 

		class Dashboard extends CI_Controller
		{
			function __construct()
			{
				parent::__construct();
				
				if($this->session->userdata('admin')=='')
				{
					redirect('admin/Login');
				}
				$this->load->model('admin/Admin_model');
				$this->load->model('admin/Dashboard_model');
			}
				
			function index()
			{
					 $id=$this->session->userdata('admin');
					$arr['data']=$this->Dashboard_model->get_record($id);
					
												// Function Are Call for find total user...
					$arr['total_user']=$this->Dashboard_model->get_totaluser();
												
											// Function Are Call for find total Sub-Admin...
					$arr['total_subadmin']=$this->Dashboard_model->get_totalsubadmin();
					
											// Function Are Call for find total Website...
					$arr['total_website']=$this->Dashboard_model->get_totalwebsite();
					
					
					$this->load->view('admin/Dashboard_page',$arr);
						
							
			}
			
			function logout()
			{
				//$this->session->sess_destroy();
				$login_time = @$this->session->userdata('log_time');
				$logout_time = date("Y-m-d H:i:s");
				
				$arr=array('logout_time'=>$logout_time);
				$this->Dashboard_model->admin_logouthis($arr,$login_time);
				
				$this->session->unset_userdata('admin');
				@$this->session->unset_userdata('main_admin');
				@$this->session->unset_userdata('log_time');
				@$this->session->unset_userdata('wwebsite_id');
				redirect('admin/Login');
				//echo "hiii";	
			}
			
		}
?>