<?php 

	class Add_site extends CI_Controller
	{
		
		function __construct()
			{
				parent::__construct();
				
				if($this->session->userdata('admin')=='')
				{
					redirect('admin/Login');
				}
				
				$this->load->model('admin/State_model');	
				$this->load->model('admin/City_model');
				$this->load->model('admin/Country_model');
				$this->load->model('admin/Paggination_model');	
				$this->load->library('pagination');
				$this->load->model('admin/Admin_model');
				$this->load->model('admin/Add_WebsiteModel');
				$this->load->library('form_validation');
			}
				
	
		function view_site()
		{
			@$this->session->unset_userdata('wwebsite_id');
									// View Website Detail in Admin Side
				$res['web_data']=$this->Paggination_model->pagination_data(3,4,"add_website","admin/Add_site/view_site/");
									
				//$res['web_data']=$this->Add_WebsiteModel->view_data();
				
				$this->load->view('admin/View_Website',$res);
		}
		
		function delete_website($web_id='')
		{
									// Delete record WebSite From Admin Side
									
			$this->Add_WebsiteModel->delete_site($web_id);	
		}
		
		function ajax_change_status()
		{
									//Update Status for Website
			$this->Add_WebsiteModel->update_status();	
		}
		
		function ajax_search_website()
			{
				$src_fed = $this->input->post('searchtxt');	
				$rec = "select * from add_website where web_name like '$src_fed%' ";
				$temp = 2;
				
				//$arr['user_data'] = $this->Paggination_model->pagination_data(3,4,$rec,"admin/Feedback/ajax_search_feedback/",0,0,0,$temp);
				
				$arr['web_data'] = $this->Add_WebsiteModel->search_data();
				//echo "return ";
				//die;
				$this->load->view('admin/Search_website',$arr);
				
			}
	}

?>