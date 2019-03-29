<?php

		class Payment_history extends CI_Controller
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
				$this->load->model('admin/Payment_historymodel');
				$this->load->helper('common_helper'); 
			}
			
				
			function payment_his()
			{
				
					$data=array();
					
					$id=$this->session->userdata('admin');
					//$arr['data']=$this->Admin_model->get_record($id);
					$data['pack_detail']=$this->Payment_historymodel->get_packdetail();	
					$data['user_detail']=$this->Payment_historymodel->user_detail();
					
					//echo "hello";
					if($this->input->post())
					{
						$user_name=$this->input->post('user_name');
						$tras_id=$this->input->post('tras_id');
						$amount=$this->input->post('amount');
						$pack_id=$this->input->post('pack_id');
						$status=$this->input->post('status');
						$pack_info=$this->input->post('pack_info');
						$pay_time=$this->input->post('pay_time');
						
						
						
						$this->form_validation->set_rules('user_name','User Name','required');
						$this->form_validation->set_rules('tras_id','Transection Id','required');
						$this->form_validation->set_rules('amount','Amount','required');							
						$this->form_validation->set_rules('pack_id','Package Id','required');
						$this->form_validation->set_rules('status','Package Status','required');
						$this->form_validation->set_rules('pack_info','Package Info','required');
					
						
						if($this->form_validation->run() == false)
						{
							$data['user_name'] = set_value('user_name');
							$data['tras_id'] = set_value('tras_id');
							$data['amount']=set_value('amount');
							$data['pack_id']=set_value('pack_id');
							$data['status']=set_value('status');
							$data['pack_info']=set_value('pack_info');
							$data['pay_time']=set_value('pay_time');
							
						}
						else
						{		
							$arr=array('user_id'=>$user_name,'transection_id'=>$tras_id,'amount'=>$amount,'package_id'=>$pack_id,'payment_status'=>$status,'package_info'=>$pack_info);
							$this->Payment_historymodel->insert($arr);
						}
					
					}
					$this->load->view('admin/Add_payhistory',$data);
					
			}
			
			function view_payhistory()
			{	
				$arr['pay_data']=$this->Paggination_model->pagination_data(3,4,"payment_history","admin/Payment_history/view_payhistory/");
					
					//echo "<pre>";
					//print_r($arr);
					//$arr['pay_data']=$this->Payment_historymodel->view_data();
					$this->load->view('admin/View_payhistory',$arr);
					
					
			}
			
			function delete($id='')
			{
				$this->Payment_historymodel->delete_data($id);	
				//echo "hiii".$id;
			}
			
		function update($id='')
			{
				//echo "hello ..".$id;
				$data=array();
				$this->load->library('form_validation');
				$arr=$this->Payment_historymodel->select_data($id);
				$data['pack_detail']=$this->Payment_historymodel->get_packdetail();	
				$data['user_detail']=$this->Payment_historymodel->user_detail();
					
				$data['user_name']=$arr['user_id'];
				$data['tras_id']=$arr['transection_id'];
				$data['amount']=$arr['amount'];
				$data['pack_id']=$arr['package_id'];
				$data['status']=$arr['payment_status'];
				$data['pack_info']=$arr['package_info'];
				$data['pay_time']=$arr['payment_time'];
								
				
				if($this->input->post())
				{
					
					
					$user_name=$this->input->post('user_name');
					$tras_id=$this->input->post('tras_id');
					$amount=$this->input->post('amount');
					$pack_id=$this->input->post('pack_id');
					$status=$this->input->post('status');
					$pack_info=$this->input->post('pack_info');
					$pay_time=$this->input->post('pay_time');
					
				
					$this->form_validation->set_rules('user_name','User Name','required');
					$this->form_validation->set_rules('tras_id','Transection Id','required');
					$this->form_validation->set_rules('amount','Amount','required');							
					$this->form_validation->set_rules('pack_id','Package Id','required');
					$this->form_validation->set_rules('status','Package Status','required');
					$this->form_validation->set_rules('pack_info','Package Info','required');
				
									
								
						  if($this->form_validation->run() == false)
						  {
							$data['user_name'] = set_value('user_name');
							$data['tras_id'] = set_value('tras_id');
							$data['amount']=set_value('amount');
							$data['pack_id']=set_value('pack_id');
							$data['status']=set_value('status');
							$data['pack_info']=set_value('pack_info');
							$data['pay_time']=set_value('pay_time');
						  
						  }
						else
						{
							$arr=array('user_id'=>$user_name,'transection_id'=>$tras_id,'amount'=>$amount,'package_id'=>$pack_id,'payment_status'=>$status,'package_info'=>$pack_info,'payment_time'=>$pay_time);
							$this->Payment_historymodel->update_data($id,$arr);
						}
					}
				$this->load->view('admin/Add_payhistory',$data);
			}
			
			/*function contact_replay($contact_id='')
			{
												// Get Customer Email...
												
				$data['cont_email']=$this->Contact_model->get_contemail($contact_id);	
			
			
				if($this->input->post('replay_contact'))
					{
						
						$email=$this->input->post('email');
						$subject=$this->input->post('subject');
						$message=$this->input->post('message');
						
						
						$this->form_validation->set_rules('email','Email','required|valid_email');
						$this->form_validation->set_rules('subject',' Subject','required');							
						$this->form_validation->set_rules('message','Message','required');
						
						
						if($this->form_validation->run() == false)
						{
							$data['email'] = set_value('email');
							$data['subject']=set_value('subject');
							$data['message']=set_value('message');
							
						}
						else
						{			
							
							$data['email_res']=email_contreplay($email,$subject,$message);
						}
					
					}
			
			
			
				$this->load->view('admin/Contact_replay',$data);	
					
			}	*/
			
			function ajax_search_payment()
			{
				$src_fed = $this->input->post('searchtxt');	
				$rec = "select * from payment_history where user_id like '$src_fed%' ";
				$temp = 2;
				
				//$arr['user_data'] = $this->Paggination_model->pagination_data(3,4,$rec,"admin/Feedback/ajax_search_feedback/",0,0,0,$temp);
				
				$arr['pay_data'] = $this->Payment_historymodel->search_data();
				//echo "return ";
				//die;
				$this->load->view('admin/Search_payhistory',$arr);
				
			}
		}
?>