<?php
  
  class User_site extends CI_Controller
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
				$this->load->model('user/User_sitemodel');
				$this->load->model('admin/User_model');	
				$this->load->model('admin/Country_model');
				$this->load->library('form_validation');
				
				//$this->load->library('form_validation');
				
			}
			
	 function add()
	 {
		  $data=array();
		  @$this->session->unset_userdata('website_iddd');
			
				 if($this->input->post('add_website'))
				 {
					 $set_pack = @$this->session->userdata('set_pack');
		 								//Get Currently logged User Id from session 
					$id=$this->session->userdata('user');
					
					 $web_name=$this->input->post('web_name');	
					 $web_url=$this->input->post('web_url');	
					
					$this->form_validation->set_rules('web_name','Website Name','required|is_unique[add_website.web_name]');
					$this->form_validation->set_rules('web_url','Website URL','required|valid_url|is_unique[add_website.web_url]');
					
					if($this->form_validation->run() == false)
					{
						$data['web_name']=set_value('web_name');
						$data['web_url']=set_value('web_url');	
					}
					else
					{	
						$arr=array('web_name'=> $web_name,'web_url'=>$web_url,'user_id'=>$id);
						
											//Load model for insert data....	
						if($set_pack == 'select_pack')
						{	
							$this->User_sitemodel->add_website($arr);
						}
						else
						{
								$data['package_not']="Please Select Package...!!!";	
						}
					}
					
				 }
		 $this->load->view('user/User_addsite',$data); 
	 }
		 
		 function site_view()
		{
			$count=0;	
			@$this->session->unset_userdata('website_iddd');
			$id=$this->session->userdata('user');
			$data['site_view']=$this->User_sitemodel->view_website($id);
			
												// call for get website_id based on userid..
			$rec = $this->User_sitemodel->get_webid($id);
			$arr = $rec->num_rows();
			$data['webdata']=$rec->result_array();
			
												// call for get track website_id 
			$rec_track = $this->User_sitemodel->get_webtrackid();	
			$arr_track = $rec_track->num_rows();
			$data['web_trackid']=$rec_track->result_array();
			
		
			
			for($i=0;$i<$arr;$i++)
			{
				for($j=0;$j<$arr_track;$j++)
				{
					$web_id = $data['webdata'][$i]['website_id'];
					$web_trackid = $data['web_trackid'][$j]['website_id'];
					//echo "website_id for website table :- ".$web_id;
					//echo "website_id for website track table :-".$web_trackid;
					if($web_id == $web_trackid)
					{
						$count = $count + 1;	
					}
				}
			}
			$data['webid_alredy'] = $count;
			$this->load->view('user/User_viewsite',$data);
		}
	  
	  	 function site_delete($id='')
	  	 {
									// Website Are Deleted Based On Id...		   
		 	$this->User_sitemodel->delete_site($id);
		 }
 
 		 function site_update($id='')
		 {
			 $tlp=0;
			 $tlp_url=0;
		 			//Get Record for particular website id
					$arr_all=$this->User_sitemodel->get_all();
				
					
				$arr=$this->User_sitemodel->get_webdata($id);
				
		 		 $data['web_name']=$arr['web_name'];
				 $data['web_url']=$arr['web_url'];
				 
				if($this->input->post())
				{
					
					 $web_name=$this->input->post('web_name');	
					 $web_url=$this->input->post('web_url');	
											// Model are called for update data...
					$store=array('web_name'=>$web_name,'web_url'=>$web_url);
					
						$this->form_validation->set_rules('web_name','Website Name','required');
				$this->form_validation->set_rules('web_url','Website URL','required|valid_url');
					
					if($this->form_validation->run() == false)
					{
						$data['web_name']=set_value('web_name');
						$data['web_url']=set_value('web_url');	
					}
					else
					{
						foreach($arr_all as $row)
						{
							if($row['web_name'] == $web_name)
							{
								$tlp=1;	
							}
							else if($row['web_url'] == $web_url)
							{
								$tlp_url=1;	
							}
							
						}
						
						
						if($web_name == $data['web_name'])
						{
							$this->User_sitemodel->update_site($id,$store);	
						}
						else if($tlp == 0)
						{
							$this->User_sitemodel->update_site($id,$store);	
						}
						
						else if($tlp_url == 0)
						{
							$this->User_sitemodel->update_site($id,$store);	
						}
						else
						{
							$data['web_name']=set_value('web_name');
							$data['web_url']=set_value('web_url');
							if($tlp == 1)
							{
								$data['web_err']="This Website Name Is Already Exist...!!!";
							}
							else if($tlp_url == 1)
							{
								$data['web_urlerr']="This Website URL Is Already Exist...!!!";	
							}
						}
					
					}
				}		 
				 $this->load->view('user/User_addsite',$data);
		 
		 }
		 
		

		 /*function ajax_callback()
		 {
		 	$user_ip = $this->input->get('user_ip');
		 	$user_city = $this->input->get('user_city');
		 	$user_state = $this->input->get('user_state');
		 	$user_country = $this->input->get('user_country');
		 	$user_httpref = $this->input->get('user_httpref');
		 	$device_type = $this->input->get('device_type');
		 	$device_os = $this->input->get('device_os');
		 	$device_browser = $this->input->get('device_browser');


		 	//echo $id;
		 	echo $user_city;
		 	echo $user_state;
		 	echo $user_country;
		 	echo $user_httpref;
		 	echo $device_type;
		 	echo $device_os;
		 	echo $device_browser;
		 	echo "heloo";
		 }*/
		 
		 
		 function ajax_search_userwebsite()
			{
				//$src_fed = $this->input->post('searchtxt');	
				//$rec = "select * from feedback where feedbacker_name like '$src_fed%' ";
				//$temp = 2;
				
				//$arr['user_data'] = $this->Paggination_model->pagination_data(3,4,$rec,"admin/Feedback/ajax_search_feedback/",0,0,0,$temp);
				
				$count=0;	
				$id=$this->session->userdata('user');
				@$data['site_view'] = $this->User_sitemodel->search_data();
				
				
													// call for get website_id based on userid..
					@$rec = $this->User_sitemodel->get_webid($id);
					@$arr = $rec->num_rows();
					@$data['webdata']=$rec->result_array();
					
														// call for get track website_id 
					@$rec_track = $this->User_sitemodel->get_webtrackid();	
					@$arr_track = $rec_track->num_rows();
					@$data['web_trackid']=$rec_track->result_array();
					
				
					
					for($i=0;$i<$arr;$i++)
					{
						for($j=0;$j<$arr_track;$j++)
						{
							$web_id = $data['webdata'][$i]['website_id'];
							$web_trackid = $data['web_trackid'][$j]['website_id'];
							//echo "website_id for website table :- ".$web_id;
							//echo "website_id for website track table :-".$web_trackid;
							if($web_id == $web_trackid)
							{
								$count = $count + 1;	
							}
						}
					}
					@$data['webid_alredy'] = $count;
				//echo "return ";
				//die;
				$this->load->view('user/Search_userwebsite',$data);
				
			}
 
  }
	
	

?>