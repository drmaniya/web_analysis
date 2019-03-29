<?php 
		class Country extends CI_Controller
		{
			function __construct()
			{
				parent::__construct();
				
				if($this->session->userdata('admin')=='')
				{
					redirect('admin/Login');
				}
				
				$this->load->model('admin/Country_model');	
				$this->load->model('admin/Admin_model');
				$this->load->model('admin/Paggination_model');
				$this->load->library('pagination');
				$this->load->library('form_validation');
				$this->load->model('admin/Getdata_model');
			}
			
			
			function add_country()
			{
					//echo "hello..";
					$conupd=array();
					
					if($this->input->post())
					{
						$this->form_validation->set_rules('country','Country','required|regex_match[/^[a-zA-Z ]+$/]|is_unique[country.country_name]');
						
						if($this->form_validation->run() == false)
						{
							$conupd['country_name']=set_value('country');	
							
						}
						else
						{
								$this->Country_model->addcondata();
						}
					}
					
					$this->load->view('admin/Add_country',$conupd);
			}	
			
			function view_country()
			{
		
					$data['vcon']=$this->Paggination_model->pagination_data(3,4,"country","admin/Country/view_country/");
					$this->load->view('admin/View_country',$data);
			}
			
			function delete_country($id='')
			{
					
					$this->Country_model->deletecondata($id);	
			}
			
			function update_country($id='')
			{
					//echo "update";	
					
					$qry['conupd']=$this->Country_model->selectcondata($id);
					$data1=$qry['conupd']['country_name'];
					
					if($this->input->post())
					{
						
						$this->form_validation->set_rules('country','Country','required|regex_match[/^[a-zA-Z ]+$/]');
						
						if($this->form_validation->run() == false)
						{
							$qry['conupd']['country_name']=set_value('country');	
						}
						
						else
						{
							$country_name=$this->input->post('country');
							$qry['conupd']=$this->Getdata_model->get_data($country_name,'country_name','country');
							if($data1 == $country_name)
							{
								$this->Country_model->updatecondata($id);
								
								//return ($msg);
							}
							else if($qry['conupd'] == '')
							{
									$this->Country_model->updatecondata($id);
							}
							else
							{
									$qry['conupd']['country_msg']="Country Is Already Exiest...!!!";
							}
						}
					}
				$this->load->view('admin/Add_country',$qry);
			
			}
			
		}
?>