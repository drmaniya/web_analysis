<?php
class Package extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		if($this->session->userdata('admin')=='')
		{
					redirect('admin/Login');	
		}
		$this->load->model('admin/Admin_model');
		$this->load->model('admin/Package_model');
		$this->load->model('admin/Getdata_model');
	}
	function add_package()
	{
		$arr = array();
		$this->load->library('form_validation');
		if($this->input->post())
		{
			$this->form_validation->set_rules('duration','Package Duration','required');
			$this->form_validation->set_rules('cost','Package Cost','required|numeric');
			$this->form_validation->set_rules('status','Status','required');
			if($this->form_validation->run()==FALSE)
			{
				$arr['data']['pac_duration']=$this->input->post('duration');
				$arr['data']['pac_cost']=$this->input->post('cost');
				$arr['data']['pac_status']=$this->input->post('status');
			}
			else
			{
				$this->Package_model->add_package();
			}
		}
		$this->load->view('admin/add_package',$arr);
	}
	function view_package()
	{
		$arr['data'] = $this->Package_model->view_package();
		$this->load->view('admin/view_package',$arr);
	}
	function update_package($id='')
	{
		$this->load->library('form_validation');
		$arr['data']= $this->Getdata_model->get_data($id,'pac_id','package');
		
		if($this->input->post())
		{
			$this->form_validation->set_rules('duration','Package Duration','required');
			$this->form_validation->set_rules('cost','Package Cost','required|numeric');
			$this->form_validation->set_rules('status','Status','required');
			if($this->form_validation->run()==FALSE)
			{
				$arr['data']['pac_duration']=$this->input->post('duration');
				$arr['data']['pac_cost']=$this->input->post('cost');
				$arr['data']['pac_status']=$this->input->post('status');
			}
			else
			{
				$this->Package_model->update_package($id);
			}
		}
		$this->load->view('admin/add_package',$arr);
	}
	function delete_package($id='')
	{
		$this->Package_model->delete_package($id);
	}

	function ajax_change_status()
	{
		//echo "schange";
		$this->Package_model->update_status();	
	}
}
