<?php

class Bank extends CI_Controller
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
				$this->load->model('user/Bank_model');	
			
			}
				
				
		
		
	function bank_payment($pac_id='')
	{
			$temp=0;
			$pac_data=array();
			$pac_data['get_res'] = $this->Bank_model->get_pacdata($pac_id);	
			
			 $pac_data['package_id'] = $pac_id;
			
					
				
			if($this->input->post('pay_money'))
			{	
				@$package_id = $pac_id;
				@$user_id=$this->session->userdata('user');

			 	@$amount =  $this->input->post('payble_amount');
			 	@$product_info = $this->input->post('product_info');
			 	@$customer_name = $this->input->post('customer_name');
			 	@$customer_emial = $this->input->post('customer_email');
			 	@$customer_mobile = $this->input->post('mobile_number');
				@$customer_address = $this->input->post('customer_address');
				
					//payumoney details
				$this->form_validation->set_rules('product_info','Package Information','required|alpha');
				$this->form_validation->set_rules('customer_name','Payer Name','required|regex_match[/^[a-zA-Z ]+$/]');
				$this->form_validation->set_rules('customer_email','Payer Email','required|valid_email');
				$this->form_validation->set_rules('mobile_number','Mobile No.','required|numeric|regex_match[/^[0-9]{10}$/]');
				$this->form_validation->set_rules('customer_address','Address','required');
				
					if($this->form_validation->run() == false)
					{
						$pac_data['product_info']=set_value('product_info');
						$pac_data['customer_name']=set_value('customer_name');
						$pac_data['mobile_number']=set_value('mobile_number');
						$pac_data['customer_email']=set_value('customer_email');
						
						$pac_data['customer_address']=set_value('customer_address');	
					}
					else
					{			
							$MERCHANT_KEY = "AP2SoqZb"; //change  merchant with yours
							$SALT = "MJ14WSwpVP";  //change salt with yours 
				
							$txnid = substr(hash('sha256', mt_rand() . microtime()), 0, 20);
							//optional udf values 
							$udf1 = $package_id;
							$udf2 = $user_id;
							$udf3 = '';
							$udf4 = '';
							$udf5 = '';
							
							 $hashstring = $MERCHANT_KEY . '|' . $txnid . '|' . $amount . '|' . $product_info . '|' . $customer_name . '|' . $customer_emial . '|' . $udf1 . '|' . $udf2 . '|' . $udf3 . '|' . $udf4 . '|' . $udf5 . '||||||' . $SALT;
							 $hash = strtolower(hash('sha512', $hashstring));
							
							 
						   $success = site_url() . '/user/bank/status'; //get function from success and put in this  
							$fail = site_url() . '/user/bank/status';
							//$fail = $this->failure();
							//$cancel = base_url() . 'Status';
							$cancel = site_url() . '/user/bank/status';
							
							
							 $data = array(
								'mkey' => $MERCHANT_KEY,
								'tid' => $txnid,
								'hash' => $hash,
								'amount' => $amount,           
								'name' => $customer_name,
								'productinfo' => $product_info,
								'mailid' => $customer_emial,
								'package_id' => $udf1,
								'user_id' => $udf2,
								'phoneno' => $customer_mobile,
								'address' => $customer_address,
								'action' => "https://sandboxsecure.payu.in", /*for live change action  https://secure.payu.in && if u test mode set :- https://test.payu.in && https://sandboxsecure.payu.in */
								'sucess' => $success,
								'failure' => $fail,
								'cancel' => $cancel            
							);
							
							$temp=1;
							$this->load->view('user/confirmation',$data);   
					}
				
			}
			if($temp == 0)
			{
				$this->load->view('user/Bank_detail',$pac_data);
			}
		}
		
		
		function status()
		{
			//echo '<pre>';print_r($this->input->post());
			
			$status = $this->input->post('status');
      //if (empty($status)) {
         //   redirect('Welcome');
       // }
       
				 $firstname = $this->input->post('firstname');
				$amount = $this->input->post('amount');
				$txnid = $this->input->post('txnid');
				$posted_hash = $this->input->post('hash');
				$key = $this->input->post('key');
				$productinfo = $this->input->post('productinfo');
				$email = $this->input->post('email');
				$package_id = $this->input->post('udf1');
				$user_id = $this->input->post('udf2');
				$salt = "2pe1DXr1in"; //  Your salt
				$add = $this->input->post('additionalCharges');
				If (isset($add)) {
					$additionalCharges = $this->input->post('additionalCharges');
					$retHashSeq = $additionalCharges . '|' . $salt . '|' . $status . '|||||||||||' . $email . '|' . $firstname . '|' . $productinfo . '|' . $amount . '|' . $txnid . '|' . $key;
				} else {
		
					$retHashSeq = $salt . '|' . $status . '|||||||||||' . $email . '|' . $firstname . '|' . $productinfo . '|' . $amount . '|' . $txnid . '|' . $key;
				}
				 $data['hash'] = hash("sha512", $retHashSeq);
				  $data['amount'] = $amount;
				  $data['txnid'] = $txnid;
				  $data['posted_hash'] = $posted_hash;
				  $data['status'] = $status;
				  $data['package_id']=$package_id;
				  $data['user_id']=$user_id;
				  $data['pack_info']=$productinfo;
				  
				  if($status == 'success'){

				  	@$arr=array('user_id'=>$user_id,'transection_id'=>$txnid,'amount'=>$amount,'package_id'=>$package_id,'payment_status'=>$status,'package_info'=>$productinfo);

				  	$this->Bank_model->add_payment_his($arr,$user_id,$status);
					 
					 $this->load->view('user/success', $data);   
				 	
				 }
				 else{

				 		@$arr=array('user_id'=>$user_id,'transection_id'=>$txnid,'amount'=>$amount,'package_id'=>$package_id,'payment_status'=>$status,'package_info'=>$productinfo);
				 	  $this->Bank_model->addfal_payment_his($arr);
					  $this->load->view('user/failure', $data); 
				 }	

		}
		
		function failure($status='')
		{
			/*print_r($status);
			die;
				$result['fail_package']="Package Transection Are Fail Please Try Again...!!!";
				//$this->load->view('user/Bank_detail',$result);	
				$this->bank_payment($pac_id='');*/
			redirect('user/Dashboard');
		}
		
		function success($status='')
		{
			redirect('user/Dashboard');
				//echo $status;	
				//die;
		}
}

?>