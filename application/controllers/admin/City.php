<?php 

	class City extends CI_Controller
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
				$this->load->model('admin/Admin_model');
				$this->load->library('form_validation');
			}
			
			function add_city()
			{
				//echo "heloo city control..";
				$qrr=array();
				
				if($this->input->post())
				{
					
					$this->form_validation->set_rules('country','Country','required');
					$this->form_validation->set_rules('state','State','required');
					$this->form_validation->set_rules('city','City','required|regex_match[/^[a-zA-Z ]+$/]');
					
					if($this->form_validation->run() == false)
					{
						
						$qrr['cid']=set_value('country');
						$qrr['sid']=set_value('state');
						$qrr['upd_city']['city_name']=set_value('city');	
					}
					else
					{
						$this->City_model->addcity_data();	
					}
				}
				
				$qrr['vcountry']=$this->Country_model->viewcondata();
				$qrr['vstate']=$this->State_model->view_data();
				$this->load->view('admin/Add_city',$qrr);
								
			
			}
			
			function ajax_country()
			{
				$qrr['vstate']=$this->City_model->ajax_data();
			    //print_r($qrr);
					$this->load->view('admin/ajax_state_page',$qrr);
				
				//echo "hello";	
			}
			
			function view_city()
			{
					$qrr['sel_country']=$this->City_model->select_country();
					$qrr['sel_state']=$this->City_model->select_state();	
					$qrr['sel_city']=$this->City_model->select_city();
					
					$this->load->view('admin/View_city',$qrr);
			}	
			
			function delete_city($id='')
			{
					//echo "helloo".$id;
					$this->City_model->delete_data($id);	
			}
			
			function update_city($id='')
			{
				//echo "heloooo".$id;
				
				$qrr['vcountry']=$this->Country_model->viewcondata();	
				
				$qrr['vstate']=$this->State_model->get_data();
				
				$qrr['upd_city']=$this->City_model->city_detail($id);
				
				$qrr['sid']=$qrr['upd_city']['state_id'];
				
				$qrr['upd_state']=$this->State_model->state_detail($qrr['sid']);
				
				$qrr['cid']=$qrr['upd_state'][0]['country_id'];
				
				if($this->input->post())
				{
					$this->form_validation->set_rules('country','Country','required');
					$this->form_validation->set_rules('state','State','required');
					$this->form_validation->set_rules('city','City','required|regex_match[/^[a-zA-Z ]+$/]');
					
					if($this->form_validation->run() == false)
					{
						$qrr['cid']=set_value('country');
						$qrr['sid']=set_value('state');
						$qrr['upd_city']['city_name']=set_value('city');	
					}
					else
					{
						$this->City_model->update_city($id);
					}
				}
				
			$this->load->view('admin/Add_city',$qrr);
					
			}
			
			function ajax_get_state()
  			{
    			$arr['sel_state']=$this->City_model->ajax_get_state();
   				 $this->load->view('admin/Ajax_state_fill',$arr);
  			}
			
			function ajax_filter_city()
			{
				$arr['sel_city']=$this->City_model->ajax_get_city();
				 $this->load->view('admin/Ajax_city_fill',$arr);		
			}
	}
?>