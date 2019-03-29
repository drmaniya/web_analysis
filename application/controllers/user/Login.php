<?php 

		class Login extends CI_Controller
		{
			function __construct()
			{
				parent::__construct();
				if($this->session->userdata('user')!='')
				{
					redirect('user/Dashboard');	
				}
				$this->load->model('user/Login_model');	
				$this->load->library('form_validation');
				$this->load->library('encrypt');
				
			}
			
			function generat_password($length = 9, $add_dashes = false, $available_sets = 'luds')
			{
				$sets = array();
				if(strpos($available_sets, 'u') !== false)
					$sets[] = 'ABCDEFGHJKMNPQRSTUVWXYZ';
				if(strpos($available_sets, 'd') !== false)
					$sets[] = '23456789';
				$all = '';
				$password = '';
				foreach($sets as $set)
				{
					$password .= $set[array_rand(str_split($set))];
					$all .= $set;
				}
				$all = str_split($all);
				for($i = 0; $i < $length - count($sets); $i++)
					$password .= $all[array_rand($all)];
				$password = str_shuffle($password);
				if(!$add_dashes)
					return $password;
				$dash_len = floor(sqrt($length));
				$dash_str = '';
				while(strlen($password) > $dash_len)
				{
					$dash_str .= substr($password, 0, $dash_len) . '-';
					$password = substr($password, $dash_len);
				}
				$dash_str .= $password;
				return $dash_str;
			}
			

			function email($email='',$password='')
			{
				
				$this->load->library('email');
				
				//if($_SERVER['HTTP_HOST'] == 'localhost')
				//{
					$config['protocol']='smtp';
					$config['smtp_host']='ssl://smtp.gmail.com';
					$config['smtp_user']='webanalysis09@gmail.com';
					$config['smtp_pass']='webanalysis09track';
					$config['smtp_port']= 465;
				//}
				
				$config['newline']="\r\n";
				$config['mailtype']='html';
				
				$this->email->initialize($config);
				$this->email->from('webanalysis09@gmail.com');
				$this->email->to($email);
				$this->email->subject('password from web Analysis...!!!');
				$this->email->message($password);
				
				if(is_connected())
				{
				
						if($this->email->send())
						{
							return 'true';
						}
						else
						{
							//show_error($this->email->print_debugger());	
							//die;
							return 'false';
						}
				
				}
				else
				{
					return 'false';
				}
			}
			
			function index()
			{
				$data=array();
			
				if($this->input->post('sign_up')=='SIGN UP')
				{
					
					$name = $this->input->post('name');	
					$email = $this->input->post('email');
					$mobile = $this->input->post('mobile');
					$length = 9; 
					$add_dashes = false; 
					$available_sets = 'luds';
					$password = $this->generat_password($length,$add_dashes,$available_sets);
					
					
					$this->form_validation->set_rules('name','Name','required|regex_match[/^[a-zA-Z ]+$/]');
					$this->form_validation->set_rules('email','Email Id','required|valid_email');
					$this->form_validation->set_rules('mobile','Mobile No.','required|numeric|max_length[10]|min_length[10]');
					
					
					if($this->form_validation->run() == false)
					{
						$data['is_err'] = 'yes';
						$data['name']=set_value('name');
						$data['email']=set_value('email');
						$data['mobile']=set_value('mobile');
						
					}
					else
					{	
						//$pass_ency=$this->encrypt->encode($password);
						//echo $pass_ency;
						//die;
						$arr=array('user_name'=>$name,'user_email'=>$email,'user_password'=>$password,'user_mobile'=>$mobile,'user_status'=>1);
						
						
						$res1=$this->Login_model->check_email_data($email);
						
						if($res1 == 1)
						{
							$data['user_exist'] = "User Already Exiest ...!!!";	
						}
						else
						{
								
							@$data['email_err'] =$this->email($email,$password);
							
							if($data['email_err'] == 'true')
							{
								$this->Login_model->add_data($arr);
								$data['send_email'] = "Your Password Has Been Send In Your Email Address...";				
							}
							
							
						}
					}
						
				}
				
					
				
				if($this->input->post('login')=='LOGIN')
				{
						//echo "hoiiiii,,,login";
						$msg=array();
						$email=$this->input->post('email_log');
						$password=$this->input->post('password_log');
						
					$this->form_validation->set_rules('email_log','Email Id','required|valid_email');
					$this->form_validation->set_rules('password_log','Password','required|min_length[8]|max_length[12]');
					
						$res=$this->Login_model->getdata($email,$password);	
					
					if($this->form_validation->run() == false)
					{
							$data['is_err_log'] = 'yes1';
							$data['email_log']=set_value('email_log');
							$data['password_log']=set_value('password_log');
					}
					else
					{
						$res=$this->Login_model->log_user();
						$row=$res->num_rows();
						
						
						 if($row == 1)
						{
							$req=$res->row_array();
							$id=$req['user_id'];
							
							if($req['user_status'] == 0)
							{
								$data['block']="You Are Blocked...!!!";	
							}
							else
							{
								$login_time = date("Y-m-d H:i:s");
								$myip = getHostByName(getHostName());
								$arr=array('user_id'=>$id,'user_ip'=>$myip,'login_time'=>$login_time);
								$this->session->set_userdata('log_time',$login_time);
								@$this->Login_model->user_loghis($arr);
								$this->session->set_userdata('user',$id);
								redirect('user/Dashboard');
							}
						}
						else
						{
							$data['errmsg']="Email Id Or Password Are May Be InCorrect..!!!";	
												
						}
					
					}
					
				}
				
				$this->load->view('user/Login_page',$data);
				
			
			}	
			
			function forget_load()
			{
				$data=array();
				
				if($this->input->post())
				{
						
				
						if($this->Login_model->check_email())
						{
								$arr['data']=$this->Login_model->get_password();
								$email=$arr['data']['user_email'];
								$link=$this->load->view('user/Email_link',$arr,true);
								$this->email($email,$link);
								$data['pass_send']="Recover Password Send In Your Email...";		
						}
						else
						{
								$data['id_not']="Email Id Does Not Exiest...!!!";
						}
						
						
				}	
				$this->load->view('user/Forget_password',$data);
				
				
			}
			
			
		}
?>