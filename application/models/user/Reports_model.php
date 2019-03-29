<?php 

		class Reports_model extends CI_Model
		{
			
				function get_webstatus($website_id='')
				{
					$this->db->where('website_id',$website_id);
					$qrr=$this->db->get('add_website');
					@$rec = $qrr->row_array();	
					return $rec;
					
				}
			
				function get_trackdata($website_id='')
				{
					$this->db->where('website_id',$website_id);
					$qrr=$this->db->get('website_tracking');
					@$rec = $qrr->result_array();
					return $rec;	
				}
				
				function get_totalvisit($website_id='')
				{
					$this->db->where('website_id',$website_id);
					$qry = $this->db->get('website_tracking');
					return $qry;	
				}
				
				function get_ucountry($website_id='')
				{
					$qrr=$this->db->query("select user_country from website_tracking where website_id='$website_id' group by user_country");
					$conrec=$qrr->num_rows();
					//$res=$qrr->result_array();
					//print_r($res);
					//die;
					return $conrec;
						
				}
				
				function get_weburl($website_id='')
				{
						$this->db->where('website_id',$website_id);
						$qry = $this->db->get('add_website');
						$res = $qry->row_array();
						return $res;
						
				}
				
				function online_user($website_id='')
				{
					$qry=$this->db->query("select track_time from website_tracking where website_id='$website_id' ");
					return $qry;
					
				}	
				
				function get_yearreport($website_id='')
				{
					$qry=$this->db->query("select COUNT(user_ip) as cntip,YEAR(track_time) as year from website_tracking where website_id='$website_id' GROUP BY YEAR(track_time) ");
					$res = $qry->result_array();
					return $res;
						
				}	
				
				function get_yearmonth($website_id='')
				{
					$qry=$this->db->query("select COUNT(user_ip) as cntip,MONTH(track_time) as year from website_tracking where website_id='$website_id' GROUP BY MONTH(track_time) ");
					$res = $qry->result_array();
					return $res;
				}
				
				function get_yearday($website_id='')
				{
					$month=date('m');
					$year=date('Y');
					$qry=$this->db->query("select COUNT(user_ip) as cntip,date(track_time) as day from website_tracking where website_id='$website_id' and YEAR(track_time)='$year' and MONTH(track_time)='$month' GROUP BY date(track_time)");
						
						$res = $qry->result_array();
						return $res;
				}
				
				function get_totaly($website_id='')
				{
					$qry=$this->db->query("select YEAR(track_time) as year  from website_tracking where website_id='$website_id' GROUP BY YEAR(track_time)" );
					$rec = $qry->result_array();
					return $rec;
				}
				
				function get_totalm($website_id='')
				{
					$qry=$this->db->query("select MONTH(track_time) as month  from website_tracking where website_id='$website_id' GROUP BY MONTH(track_time)" );
					$rec = $qry->result_array();
					return $rec;
				}
				
				function get_totald($website_id='')
				{
					
					$qry=$this->db->query("select DAY(track_time) as day  from website_tracking where website_id='$website_id' GROUP BY DAY(track_time)" );
					$rec = $qry->result_array();
					return $rec;
					
						
				}
				
				function monthly_ajax()
				{
						$website_id=$this->input->post('web_id');
						$year=$this->input->post('chg_year');
						
						$qry=$this->db->query("select COUNT(user_ip) as cntip,MONTH(track_time) as month from website_tracking where website_id='$website_id' and YEAR(track_time)='$year' GROUP BY MONTH(track_time) ");
						
						$res = $qry->result_array();
						return $res;			
				}
				
				function daily_ajax()
				{
					$website_id=$this->input->post('web_id');
					$year=$this->input->post('dyear_val');
					$month=$this->input->post('dmonth_val');
					
					$qry=$this->db->query("select COUNT(user_ip) as cntip,date(track_time) as day from website_tracking where website_id='$website_id' and YEAR(track_time)='$year' and MONTH(track_time)='$month' GROUP BY date(track_time)");
						
						@$res = $qry->result_array();
						return $res;
					
				}
				
				function get_countryopen($website_id='')
				{
						$year=date('Y');
						$qrr=$this->db->query("select COUNT(user_country) as cnt_country,user_country as name_country from website_tracking where website_id='$website_id' and YEAR(track_time)='$year' GROUP BY user_country");
					
						@$res=$qrr->result_array();
						
						return $res;				
				}
				
				function prweb_open()
				{
						$website_id=$this->input->post('web_id');
						$year=$this->input->post('prsel_year');
						$qrr=$this->db->query("select COUNT(user_country) as cnt_country,user_country as name_country from website_tracking where website_id='$website_id' and YEAR(track_time)='$year' GROUP BY user_country");
					
						@$res=$qrr->result_array();
						
						return $res;
				}
				
				function get_cntry_mopen($website_id='')
				{
						$year=date('Y');
						$month=date('m');
						$qrr=$this->db->query("select COUNT(user_country) as cnt_country,user_country as name_country from website_tracking where website_id='$website_id' and YEAR(track_time)='$year' and MONTH(track_time)='$month' GROUP BY user_country");
						
						@$res=$qrr->result_array();
						//print_r($res);
						//die;
						return $res;				
				}
				
				function prweb_mopen()
				{
					$website_id=$this->input->post('web_id');
					$year=$this->input->post('selm_year');
					$month=$this->input->post('selm_month');
						
					$qrr=$this->db->query("select COUNT(user_country) as cnt_country,user_country as name_country from website_tracking where website_id='$website_id' and YEAR(track_time)='$year' and MONTH(track_time)='$month' GROUP BY user_country");
						
						@$res=$qrr->result_array();
						return $res;				
				}
				
				function prweb_dopen($website_id='')
				{
					$year=date('Y');
					$month=date('m');
					$day=date('d');
					$qrr=$this->db->query("select COUNT(user_country) as cnt_country,user_country as name_country from website_tracking where website_id='$website_id' and YEAR(track_time)='$year' and MONTH(track_time)='$month' and DAY(track_time)='$day' GROUP BY user_country");
						
						@$res=$qrr->result_array();
						
						return $res;
						
				}
				
				function prweb_dayopen()
				{
					$website_id=$this->input->post('web_id');
					$year=$this->input->post('seld_year');
					$month=$this->input->post('seld_month');
					$day=$this->input->post('seld_day');
					
					$qrr=$this->db->query("select COUNT(user_country) as cnt_country,user_country as name_country from website_tracking where website_id='$website_id' and YEAR(track_time)='$year' and MONTH(track_time)='$month' and DAY(track_time)='$day' GROUP BY user_country");
						
						@$res=$qrr->result_array();
						
						return $res;	
				}
				
				function get_ybrowser($website_id='',$browser='')
				{
					$year=date('Y');
					
					$qr1=$this->db->query("select COUNT(track_id) as total_visit from website_tracking where website_id='$website_id'");
					$re1=$qr1->result_array();
					$tot_visit=$re1[0]['total_visit'];
					
					$qry=$this->db->query("select COUNT(track_id) as no_cbvisit from website_tracking where website_id='$website_id' and device_browser LIKE '$browser%' and YEAR(track_time)=$year");
					
					$res = $qry->result_array();
					@$t_cbvisit = $res[0]['no_cbvisit'];
					@$data_pr=$t_cbvisit*100/$tot_visit;
					@$fi_res=sprintf('%0.2f', $data_pr);
				
					return $fi_res;
				
				}
				
				
				function get_umapcountry($website_id='')
				{
					$qrr=$this->db->query("select user_country from website_tracking where website_id='$website_id' group by user_country");
					$res=$qrr->result_array();
					//print_r($res);
					//die;
					return $res;
						
				}
				
				function search_webtrackdata()
				{
					//$website_id=$this->input->get();
					//print_r($website_id);
					@$website_id = @$this->session->userdata('website_iddd');
					//echo $website_id;
					$src_web = $this->input->post('searchtxt');	
				$rec = $this->db->query("select * from website_tracking where website_id='$website_id' and (track_id like '$src_web%' or website_id like '$src_web%' or user_ip like '$src_web%' or user_city like '$src_web%' or user_state like '$src_web%' or user_country like '$src_web%' or http_refferer like '$src_web%' or device_type like '$src_web%' or device_os like '$src_web%' or device_browser like '$src_web%' or return_count like '$src_web%' or track_time like '$src_web%')");
				
				$res = $rec->result_array();	
				return $res;
					
				}
		
		}
?>