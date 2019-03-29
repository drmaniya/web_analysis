<?php
  
  class Userdata_callback extends CI_Controller
  {
	  	 function __construct()
		 {
				parent::__construct();
		 		$this->load->model('user/Userdata_callbackmodel');
		 }
	  
		function ajax_callback()
		{
			header('Access-Control-Allow-Origin: *');


			$user_ip = $this->input->get('user_ip');
		 	$user_city = $this->input->get('user_city');
		 	$user_state = $this->input->get('user_state');
		 	$user_country = $this->input->get('user_country');
		 	$user_httpref = $this->input->get('user_httpref');
		 	$device_type = $this->input->get('device_type');
		 	$device_os = $this->input->get('device_os');
		 	$device_browser = $this->input->get('device_browser');
			$site_id = $this->input->get('site_id');
			
			/*echo $user_city;
		 	echo $user_state;
		 	echo $user_country;
		 	echo $user_httpref;
		 	echo $device_type;
		 	echo $device_os;
		 	echo $device_browser;*/
			
			$rec = $this->Userdata_callbackmodel->get_ipcount($user_ip);
			
			//echo "heloo";
			//$res = $rec->num_rows();
			
			if($rec > 0)
			{
				/*echo "<script> console.log(" .$rec. ") </script>";*/
											// If User Are Same Ip Than Return Count Increase..
				$res = $this->Userdata_callbackmodel->get_repeatcount($user_ip);
				//print_r($res);
				$count = $res['return_count'];
				$count = $count + 1;
				$val = array('website_id'=>$site_id,'user_ip'=>$user_ip,'user_city'=>$user_city,'user_state'=>$user_state,'user_country'=>$user_country,'http_refferer'=>$user_httpref,'device_type'=>$device_type,'device_os'=>$device_os,'device_browser'=>$device_browser,'return_count'=>$count);
				
				$this->Userdata_callbackmodel->update_ipcount($user_ip,$val);			
			}
			else
			{
				$arr=array('website_id'=>$site_id,'user_ip'=>$user_ip,'user_city'=>$user_city,'user_state'=>$user_state,'user_country'=>$user_country,'http_refferer'=>$user_httpref,'device_type'=>$device_type,'device_os'=>$device_os,'device_browser'=>$device_browser,'return_count'=>0);
				
				$this->Userdata_callbackmodel->insert_userdata($arr);
				
			}
		}		  
  }
  
 ?>