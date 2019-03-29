<?php 

		class State extends CI_Controller
		{
			
			function __construct()
			{
				parent::__construct();
				
				if($this->session->userdata('admin')=='')
				{
					redirect('admin/Login');
				}
				
				$this->load->model('admin/State_model');
				$this->load->model('admin/Country_model');
				$this->load->model('admin/Admin_model');
				$this->load->library('form_validation');
				$this->load->model('admin/Paggination_model');
				$this->load->library('pagination');
				$this->load->model('admin/Getdata_model');
					
			}
			
			function add_state()
			{
				//echo "hiii";
				$state_upd=array();
				
				$qrr['selcon']=$this->Country_model->viewcondata();
				
				
				
				if($this->input->post())
				{
					$this->form_validation->set_rules('country','Country','required');
					$this->form_validation->set_rules('state','State','required|regex_match[/^[a-zA-Z ]+$/]|is_unique[state.state_name]');
					
					if($this->form_validation->run() == false)
					{
						$qrr['state_upd']['country_id']=set_value('country');
						$qrr['state_upd']['state_name']=set_value('state');
					}
					else
					{
						$state_name=$this->input->post('state');
						$country_id=$this->input->post('country');
						$res=$this->Getdata_model->get_data($state_name,'state_name','state');
						
						if($res['state_name'] == $state_name && $res['country_id'] == $country_id)
						{
							$qrr['state_upd']['err_msg']="State Is Already Exiest...!!!";
						}
						
						if($res['state_name'] != $state_name && $res['country_id'] == $country_id){
							$this->State_model->insert_state();	
							}
						if($res['state_name'] == $state_name && $res['country_id'] != $country_id){
							
							$this->State_model->insert_state();
						}
						
						if($res['state_name'] != $state_name && $res['country_id'] != $country_id){
							
							$this->State_model->insert_state();
						}
						
					}
				}	
				$this->load->view('admin/Add_state',$qrr);
			}
			
			public function state_check()
			{
				$country_id = $this->input->post('country');
				$state = $this->input->post('state');
				$this->db->where('id !=',$this->input->post('edit_id'));
				$this->db->where('country_id',$country_id);
				$res = $this->Getdata_model->get_datas($state,'state_name','state');
				//echo $this->db->last_query();
				if(sizeof($res)==1){
				
				$this->form_validation->set_message('state_check', 'State is Already Exiest in this Country');
				return FALSE;
				}else{
					return TRUE;
				}
				
			}

			
			function view_state()
			{
				$sel_para = 'state.*,country.country_name';
				$country='country';
				$join_para='state.country_id=country.id';
				$temp=1;
					//$this->db->join($country,$join_para);
				$arr['vstate']=$this->Paggination_model->pagination_data(3,4,"state","admin/State/view_state/",$sel_para,$country,$join_para,$temp);	
				
					//$arr['vstate']=$this->State_model->view_data();
					//echo "<pre>";
					//print_r($arr);
					$this->load->view('admin/View_state',$arr);
								
			}	
			
			function delete_State($id='')
			{
				//echo "hlooe...delete".$id;
				$this->State_model->delete_data($id);	
			}
			
			function update_state($id='')
			{
				//echo "helloo".$id;
				$qrr['selcon']=$this->Country_model->viewcondata();
				$qrr['state_upd']=$this->State_model->select_data($id);
				$state_chk=	$qrr['state_upd']['state_name'];
				$country_chk=$qrr['state_upd']['country_id'];
				
				if($this->input->post())
				{
					$this->form_validation->set_rules('country','Country','required');
					$this->form_validation->set_rules('state','State','required|regex_match[/^[a-zA-Z ]+$/]|callback_state_check');
					
					if($this->form_validation->run() == false)
					{
						$qrr['state_upd']['country_id']=set_value('country');
						$qrr['state_upd']['state_name']=set_value('state');
					}
					else
					{
					
						if($state_name == $state_chk && $country_id == $country_chk)
						{
							$this->State_model->update_data($id);
						}
						else if(in_array($country_id,$qrr['state_upd']['country_id']) == false)
						{
							$this->State_model->update_data($id);	
						}
					}
				}
				$this->load->view('admin/Add_state',$qrr);
			}
			
		}
	
?>