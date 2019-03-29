

<?php 
	
	class Login extends CI_Controller
	{
		function __construct()
		{
				parent::__construct();
				
				if($this->session->userdata('admin')!='')
				{
					redirect('admin/Dashboard');	
				}
				$this->load->model('admin/Login_model');	
		}
			
		function index()
		{
			
			$msg=array();
				
			if($this->input->post('submit'))
			{
				$res=$this->Login_model->log_admin();
				$row=$res->num_rows();
					
				if($row == 1)
				{
					$req=$res->row_array();
					$id=$req['id'];
					$login_time = date("Y-m-d H:i:s");
					$myip = getHostByName(getHostName());
					$arr=array('admin_id'=>$id,'user_ip'=>$myip,'login_time'=>$login_time);
					$this->session->set_userdata('log_time',$login_time);
					@$this->Login_model->admin_loghis($arr);
					$this->session->set_userdata('admin',$id);
					
					redirect('admin/Dashboard');
				}
				else
				{
						$msg['errmsg']="Email Id or Password Are May Be InCorrect..!!!";	
				}
			}
			
			if($this->input->post('password_submit'))
			{
				$email=$this->input->post('forgot_email');
			
				$rec=$this->Login_model->get_email($email);
				$row=$rec->num_rows();
				
				if($row == 1)
				{
						$res_data=$rec->row_array();
						$password=$res_data['password'];
						$this->load->helper('common_helper');
						$msg['email_val']=email($email,$password); 
						
					//$this->Login_model->get_password($email);
				}
				else
				{
					$msg['email_incorrect']="Email Id Is InCorrect..!!!";		
				}
				
				
			}
			$this->load->view('admin/Login_page',$msg);	
		}
		
		
	}
?>