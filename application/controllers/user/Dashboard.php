<?php

class Dashboard extends CI_Controller
{
	
	
			function __construct()
			{
				parent::__construct();
				
				if($this->session->userdata('user')=='')
				{
					redirect('user/Login');
				}
				$this->load->model('user/User_model');
				$this->load->model('user/Login_model');
				$this->load->model('user/Dashboard_model');
			}
			
			
		  function index()
		  {
			 $id=$this->session->userdata('user');
			$arr['data']=$this->Dashboard_model->get_record($id);
			session_regenerate_id();
			
			$rec = $this->Dashboard_model->get_packinfo($id);
			$payment_status=$rec['payment_status'];
			$package_info=$rec['package_info'];
			$payment_time=$rec['payment_time'];
			//echo $payment_time;
			$payment_timestamp = strtotime($payment_time);
			$payment_date = date('Y-m-d', $payment_timestamp);
			//echo $payment_date;
			//die;
			//echo  session_id();
		
													// this code for trial...
				 $id=$this->session->userdata('user');
				 $arr=$this->Dashboard_model->get_record($id);
				 $user_created_date=$arr['user_created_time'];
				 $timestamp = strtotime($user_created_date);
				$created_date = date('Y-m-d', $timestamp);
													
				
				//$created_date = date('M-d-Y',$timestamp);
				
				/*$date = $created_date;
				$date = strtotime($date);
				$date = strtotime("+7 day", $date);
				$expire_date = date('M d, Y', $date);*/
				
				$current_date= date('M d, Y');
				
				
				$date1 = new DateTime($created_date);
				$date2 = new DateTime($current_date);
				
				$diff = $date2->diff($date1)->format("%a");
				//echo $diff;
												// End Trial Code...
												
				if($payment_status == "success" && $package_info == "weekly")
				{
					$creat_date1 = new DateTime($payment_date);
					$current_date2 = new DateTime($current_date);
				
					$diff_date = $current_date2->diff($creat_date1)->format("%a");
					
						if($diff_date <= 7)
						{
							//$arr['trial_true'] = "true";
							$arr['remaining_day']=7-$diff_date;
							$arr['package_select']="Your ".$package_info." Package Has Been Started Remaining Day Is ".$arr['remaining_day']." Out Of 7 ";
							$this->session->set_userdata('trial','true');
							$this->session->set_userdata('set_pack','select_pack');	
						}
						else
						{
						//$arr['trial_true'] = "false";
						//@$this->session->unset_userdata('trial');
							$arr['pack_expire'] = "Your ".$package_info." Package Has Been Expire Please Select New Package For Your Continues WebAnalysis...";
							$this->session->set_userdata('trial','false');	
							@$this->session->unset_userdata('set_pack');
						}
					
				}
				elseif($payment_status == "success" && $package_info == "monthly")
				{
					//echo "enter";
					$creat_date1 = new DateTime($payment_date);
					$current_date2 = new DateTime($current_date);
				
					$diff_date = $current_date2->diff($creat_date1)->format("%a");
					
						if($diff_date <= 28)
						{
							//$arr['trial_true'] = "true";
							$arr['remaining_day']=28-$diff_date;
							$arr['package_select']="Your ".$package_info." Package Has Been Started Remaining Day Is ".$arr['remaining_day']." Out Of 28 ";
							$this->session->set_userdata('set_pack','select_pack');
							$this->session->set_userdata('trial','true');	
						}
						else
						{
						//$arr['trial_true'] = "false";
						//@$this->session->unset_userdata('trial');
						$arr['pack_expire'] = "Your ".$package_info." Package Has Been Expire Please Select New Package For Your Continues WebAnalysis...";
						$this->session->set_userdata('trial','false');
						@$this->session->unset_userdata('set_pack');	
						}
					//die;	
				}
				elseif($payment_status == "success" && $package_info == "quarterly")
				{
					//echo "enter";
					$creat_date1 = new DateTime($payment_date);
					$current_date2 = new DateTime($current_date);
				
					$diff_date = $current_date2->diff($creat_date1)->format("%a");
					//echo "asdas:-".$diff_date;
					//die;
						if($diff_date <= 84)
						{
							//$arr['trial_true'] = "true";
							$arr['remaining_day']=84-$diff_date;
							$arr['package_select']="Your ".$package_info." Package Has Been Started Remaining Day Is ".$arr['remaining_day']." Out Of 84 ";
							$this->session->set_userdata('set_pack','select_pack');
							$this->session->set_userdata('trial','true');
								
						}
						else
						{
						//$arr['trial_true'] = "false";
						//@$this->session->unset_userdata('trial');
						$arr['pack_expire'] = "Your ".$package_info." Package Has Been Expire Please Select New Package For Your Continues WebAnalysis...";
						$this->session->set_userdata('trial','false');	
						@$this->session->unset_userdata('set_pack');
						}
					//die;	
				}
				elseif($payment_status == "success" && $package_info == "yearly")
				{
					//echo "enter";
					$creat_date1 = new DateTime($payment_date);
					$current_date2 = new DateTime($current_date);
				
					$diff_date = $current_date2->diff($creat_date1)->format("%a");
					//echo "asdas:-".$diff_date;
					//die;
						if($diff_date <= 365)
						{
							//$arr['trial_true'] = "true";
							$arr['remaining_day']=365-$diff_date;
							$arr['package_select']="Your ".$package_info." Package Has Been Started Remaining Day Is ".$arr['remaining_day']." Out Of 365 ";
							$this->session->set_userdata('set_pack','select_pack');
							$this->session->set_userdata('trial','true');	
						}
						else
						{
						//$arr['trial_true'] = "false";
						//@$this->session->unset_userdata('trial');
						$arr['pack_expire'] = "Your ".$package_info." Package Has Been Expire Please Select New Package For Your Continues WebAnalysis...";
						$this->session->set_userdata('trial','false');	
						@$this->session->unset_userdata('set_pack');
						}
					//die;	
				}
				else
				{
					if($diff <= 7)
					{
						//$arr['trial_true'] = "true";
						$arr['remaining_day']=7-$diff;
						$arr['package_select']="Your Free Trial Has Been Started Remaining Day Is ".$arr['remaining_day']." Out Of 7 ";
						$this->session->set_userdata('set_pack','select_pack');
						$this->session->set_userdata('trial','true');	
					}
					else
					{
						//$arr['trial_true'] = "false";
						//@$this->session->unset_userdata('trial');
						$arr['pack_expire'] = "Free Trial Expire Please Select Package For Your Continues WebAnalysis...";
						$this->session->set_userdata('trial','false');	
						@$this->session->unset_userdata('set_pack');
					}
				
				}
									// Call Model Function For Get Package data...
			
					$arr['wpack_data']=$this->Dashboard_model->package_data(1);
					$arr['mpack_data']=$this->Dashboard_model->package_data(2);
					$arr['qpack_data']=$this->Dashboard_model->package_data(3);
					$arr['ypack_data']=$this->Dashboard_model->package_data(4);				
			
			
			
				//****** This Code Is write For Show message *****//
			
				/*$qrr=$this->Dashboard_model->user_msg(@$id);
				$rec_user=$qrr->num_rows();
				
				$res_user=$qrr->result_array();
				
				$this->session->set_userdata('user_msgtotal',$rec_user);
				$this->session->set_userdata('user_msg',$res_user);*/
				//$arr['user_msg']=$this->Dashboard_model->user_msg(@$id);
				
				$this->db->select('id');
				@$qry=$this->db->get('admin');
				@$arr['admin_id']=$qry->row_array();
							
			$this->load->view('user/Dashboard_user',$arr);  
		  }
		 
		 
		 function get_chat_data(){
				@$from_id = $this->input->post('from_id');
				@$to_id = $this->input->post('to_id');
				@$chat_user_data = $this->Dashboard_model->user_data($to_id);
				
				@$conversation = $this->Dashboard_model->get_conversation($to_id,$from_id);
				echo json_encode(array('chat_user_data'=>$chat_user_data,'conversation'=>$conversation));	
		}
		 
		 
		  function add_chat(){
				@$from_id = $this->input->post('from_id');
				@$to_id = $this->input->post('to_id');
				@$msg = $this->input->post('msg');
				@$arr = array('from_id'=>$from_id,'to_id'=>$to_id,'msg'=>$msg);
				@$last_msg = $this->Dashboard_model->add_chat($arr);
				echo json_encode(array('conversation'=>$last_msg));
		}
	
		  function logout()
		  {
			  $login_time = @$this->session->userdata('log_time');
			  $logout_time = date("Y-m-d H:i:s");
				
				$arr=array('logout_time'=>$logout_time);
				$this->Dashboard_model->user_logouthis($arr,$login_time);
				
				@$this->session->unset_userdata('user');
				@$this->session->unset_userdata('web_url');
				@$this->session->unset_userdata('log_time');
				@$this->session->unset_userdata('website_iddd');
				//@$this->session->unset_userdata('user_msg');
				//@$this->session->unset_userdata('user_msgtotal');
				redirect('user/Login'); 
		 }
		 
		 
	
}

?>