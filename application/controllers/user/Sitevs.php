<?php 

		class Sitevs extends CI_Controller
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
				$this->load->model('user/Reports_model');
				$this->load->model('user/Sitevs_model');
			}
			
			function site()
			{
				$data=array();
				$user_id=$this->session->userdata('user');
					
							// Get website Id for User Add website..
						$web_info=$this->Sitevs_model->get_webname($user_id);
						$years = array();
			$years = array_map(function($website){
				return $website['year'];
			},$web_info);
			$names = array_map(function($website){
				return $website['web_name'];
			},$web_info);
			$web_ids = array_map(function($website){
				return $website['website_id'];
			},$web_info);
			$web_traffic = array();
			foreach($web_info as $web){
				$web_traffic[$web['website_id'].'_'.$web['year']]= $web['user'];
			};
			
			$names = array_unique($names);
			$web_ids = array_unique($web_ids);
			$years = array_unique($years);
			//echo '<pre>';
			//print_r($web_ids);
			//$web_traffic = array_unique($web_traffic);
			$data_chart =array();
			foreach($names as $key=>$row){
				
				$temp = array('type'=>'spline','name'=>$row,'showInLegend'=> true);
				$chartInfo = array();
				
				foreach($years as $year){
					//echo $web_ids[$key].'_'.$year;
					$user = isset($web_traffic[$web_ids[$key].'_'.$year]) ? $web_traffic[$web_ids[$key].'_'.$year] :0;
					//$user = $web_traffic[$web_ids[$key].'_'.$year];
					$chartInfo[] = array('label'=>$year,'y'=>intval($user));
				}
				$temp['dataPoints']=$chartInfo;
				$data_chart[] = $temp;
			}
			$data['chart'] = json_encode($data_chart);
			
											//	Monthly get records...		
						$this->Sitevs_model->get_webmonth($user_id);
				$this->load->view('user/Sitevssite',$data);	
			}
		}
?>