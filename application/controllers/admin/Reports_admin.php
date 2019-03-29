<?php 

	class Reports_admin extends CI_Controller
	{
	
	
			function __construct()
			{
				parent::__construct();
				
				if($this->session->userdata('admin')=='')
				{
					redirect('admin/Login');	
				}
				$this->load->model('user/User_model');
				$this->load->model('user/Login_model');
				$this->load->model('user/Dashboard_model');
				$this->load->model('user/Reports_model');
				$this->load->model('admin/Admin_model');
				$this->load->model('admin/Paggination_model');
				$this->load->model('admin/Add_WebsiteModel');	
				$this->load->library('pagination');
				$this->load->library('form_validation');
				
				
			}
			
			function get_reports($website_id='')
			{
				/*$this->load->helper('pagespeed');
				$insights = new SSX\API\Google\PageSpeed\ApiClient("http://google.com","AIzaSyCL5qxwBRMrzBhAvTnwRcXL_2F8NtchHRA");
				echo '<pre>';//print_r();

					$pagespeed=$insights->getRaw();
					$jas_data=json_encode($pagespeed);
				
					$jas_decode=json_decode($jas_data,TRUE);
					print_r($jas_decode);
					die;
//print_r($insights->getRaw());
				/*$web_id = $CI->uri->segement(6);
				echo $web_id;
				die;*/
				@$this->session->unset_userdata('wwebsite_id');
				@$this->session->set_userdata('wwebsite_id',$website_id);
				$data=array();
											//get status of website Id...
				$web_status = $this->Reports_model->get_webstatus($website_id);	
				//$this->Reports_model->prweb_dopen($website_id);
				
				@$data['website_id']=$website_id;
								
											
											
											//get all tracking detail of Id...
				@$data['tracking_data']=$this->Paggination_model->pagination_data(3,4,"website_tracking","admin/Reports_admin/get_reports/");

				//@$data['tracking_data']= $this->Reports_model->get_trackdata($website_id);
											
											//	get User Open In Country...
				@$data['country_nam']=$this->Reports_model->get_umapcountry($website_id);
											
											// Find Total Visitor...
				@$res = $this->Reports_model->get_totalvisit($website_id);	
				$rec_total = $res->num_rows();
				$data['total_visit'] = $rec_total;
				
				
											//Get Website Url...
				$data['get_url'] = $this->Reports_model->get_weburl($website_id);
				
											// Find Total Unique Country...
				$data['unique_country']=$this->Reports_model->get_ucountry($website_id);
						 
						 					// Find Online User...
				$qry = $this->Reports_model->online_user($website_id);
				$online_count=$qry->num_rows();
				//echo $online_count;
				$res = $qry->result_array();	
				
				@$on=0;
				
				for($i=0;$i<$online_count;$i++)
				{	
				
					$datetime1 = new DateTime($res[$i]['track_time']);
					$datetime2 = new DateTime(date('Y-m-d H:i:s'));
					$interval = $datetime1->diff($datetime2);
					 $diff_minitue = $interval->format('%i');
						
						if($diff_minitue < 2 and $diff_minitue > 0)
						{
							$on = $on + 1;
						}
					
				}
				@$data['online_user'] = $on;
				
											//select Year,month...
				$data['cnt_year'] = $this->Reports_model->get_totaly($website_id);
				$data['cnt_month'] = $this->Reports_model->get_totalm($website_id);
				$data['cnt_day'] = $this->Reports_model->get_totald($website_id);
				
				@$data['cnt_ycbrowser']=$this->Reports_model->get_ybrowser($website_id,"Chrome");
				@$data['cnt_yfbrowser']=$this->Reports_model->get_ybrowser($website_id,"Firefox");
				@$data['cnt_ysbrowser']=$this->Reports_model->get_ybrowser($website_id,"Safari");
				@$data['cnt_yibrowser']=$this->Reports_model->get_ybrowser($website_id,"Internet");
			@$data['cnt_yobrowser']=$this->Reports_model->get_ybrowser($website_id,"Opera");
			@$data['cnt_ymbrowser']=$this->Reports_model->get_ybrowser($website_id,"Microsoft");
				
				@$qrr = $this->Reports_model->get_countryopen($website_id);	
					
					//$insights=$this->ApiClient->page_speed("http://google.com", "AIzaSyCL5qxwBRMrzBhAvTnwRcXL_2F8NtchHRA");
								
				//$insights = new SSX\API\Google\PageSpeed\ApiClient("http://google.com",			"AIzaSyCL5qxwBRMrzBhAvTnwRcXL_2F8NtchHRA");
					//echo '<pre>';//print_r();

					//print_r($insights->getRaw());
					//die;
					//$res=$qrr->result_array();
					//$noof = $qrr->num_rows();
					//$data['country_open']=$res;
					//echo $noof;
						/*for($i=0;$i<$noof;$i++)
						{
							$total=$res[$i]['cnt_country'];	
							$data['country_name']=$res[$i]['country'];
							$country_pr = $total*129/100;
							$data['country_pr'] = $country_pr;
								
						}*/
						
				
						
						$this->load->view('admin/View_reportsadmin',$data);	
					
			}
	
			function month_rpt()
			{
				$report = $this->Reports_model->monthly_ajax();
				$data = array();
				foreach($report as $row){
					$data[] = array('y'=>$row['cntip'],'label'=>$row['month']);
				}
				echo json_encode($report);
				//echo '<pre>';print_r($data);die;
				//$this->load->view('user/month_ajax_rpt',$res);
			}	
			
			function day_rpt()
			{
				@$report = $this->Reports_model->daily_ajax();
				$data = array();
				foreach($report as $row){
					$data[] = array('y'=>$row['cntip'],'label'=>$row['day']);
				}
				echo json_encode($report);
			}
			
			function percountry_open()
			{
				$report = $this->Reports_model->prweb_open();
				$data = array();
				foreach($report as $row){
					$data[] = array('y'=>$row['cnt_country'],'label'=>$row['name_country']);
				}
				echo json_encode($report);
			}
			
			function permonth_open()
			{
				$report = $this->Reports_model->prweb_mopen();
				$data = array();
				foreach($report as $row){
					$data[] = array('y'=>$row['cnt_country'],'label'=>$row['name_country']);
				}
				echo json_encode($report);
			}
			
			function perday_open()
			{
				$report = $this->Reports_model->prweb_dayopen();
				$data = array();
				foreach($report as $row){
					$data[] = array('y'=>$row['cnt_country'],'label'=>$row['name_country']);
				}
				echo json_encode($report);	
			}
			
			function ajax_search_track()
			{
				$src_fed = $this->input->post('searchtxt');	
				$rec = "select * from website_tracking where user_country like '$src_fed%' ";
				$temp = 2;
				
				//$arr['user_data'] = $this->Paggination_model->pagination_data(3,4,$rec,"admin/Feedback/ajax_search_feedback/",0,0,0,$temp);
				
				$arr['tracking_data'] = $this->Add_WebsiteModel->search_tracking();
				//echo "return ";
				//die;
				$this->load->view('admin/Search_trackingdata',$arr);	
			}
			
	}

?>