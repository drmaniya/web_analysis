<?php
class Webcontent extends CI_Controller
{
  function __construct()
 	{
	  parent::__construct();
	  
		
			if($this->session->userdata('admin')=='')
			{
				redirect('admin/Login');
			}
			
			$this->load->model('admin/Admin_model');
			$this->load->model('admin/Country_model');	
			$this->load->model('admin/City_model');
			$this->load->model('admin/State_model');
			$this->load->model('admin/User_model');
			$this->load->model('admin/Webcontent_model');	
			$this->load->model('admin/Paggination_model');
			$this->load->library('pagination');
					
				
	 }	
	 
	  function add_content()
	  {	
	  
	  		$data=array();
			$this->load->library('form_validation');
	 		$data['con_data']=$this->Country_model->viewcondata();
			 
			
			if($this->input->post())
			{
				
				
					 $heading=$this->input->post('heading');	
					 $mid_heading=$this->input->post('mid_heading');
					 $sub_heading=$this->input->post('sub_heading');
					 $content=$this->input->post('content');
					 $page_name=$this->input->post('page_name');
					
						
							
							
								
						   		$arr=array('heading'=>$heading,'mid_heading'=>$mid_heading,'sub_heading'=> $sub_heading,'content'=> $content,'page_name'=>$page_name);	
						   
						   $config['upload_path']='./assets/webvisitor/img/';
							  $config['allowed_types']='gif|jpg|png|jpeg';
							  $this->load->library('upload',$config);
					 
					 	if($this->upload->do_upload('image'))
						{
							$arr['image']=$this->upload->data('file_name');
						    $this->Webcontent_model->add_content($arr);
						}
						else
						{
							$data['img_err']=$this->upload->display_errors();
						}
							
				}	
				$this->load->view('admin/Add_content',$data); 
	 	
	  }
	  
	  function view_content()
	  {
			$us_data['user_data'] = $this->Paggination_model->pagination_data(3,4,"content","admin/Webcontent/view_content/");	
		//$us_data['user_data']=$this->Webcontent_model->view_data();  
		$this->load->view('admin/View_content',$us_data);		  
	  
	  }
	  
	  function delete_content($id='')
	  {
			
	  		$this->Webcontent_model->delete_data($id);
	  }
	  
	  function update_content($id='')
	  {
			$data=array();
			$this->load->library('form_validation');	
			//$data['con_data']=$this->Country_model->viewcondata();
	  		$qrr=$this->Webcontent_model->select_data($id);
			
			//echo "<pre>";
			//print_r($qrr);
			
			$data['heading']=$qrr['heading'];
			$data['mid_heading']=$qrr['mid_heading'];
			$data['sub_heading']=$qrr['sub_heading'];
			$data['content']=$qrr['content'];
			$data['page_name']=$qrr['page_name'];
			$data['image']=$qrr['image'];
			
			
			
			if($this->input->post())
			{
				$sel_img=$this->Webcontent_model->select_data($id);
				 	
					$heading=$this->input->post('heading');	
					 $mid_heading=$this->input->post('mid_heading');
					 $sub_heading=$this->input->post('sub_heading');
					 $content=$this->input->post('content');
					 $page_name=$this->input->post('page_name');
					
							
					$arr=array('heading'=>$heading,'mid_heading'=>$mid_heading,'sub_heading'=>$sub_heading,'content'=>$content,'page_name'=>$page_name);	
					 
						
							   $config['upload_path']='./assets/webvisitor/img/';
								  $config['allowed_types']='gif|jpg|png|jpeg';
								  $this->load->library('upload',$config);
						   
								   if ($this->upload->do_upload('image'))
								  {
									  unlink('./assets/webvisitor/img/'.$sel_img['image']);
									  $arr['image'] =$this->upload->data('file_name');
									  
								  }
								 else
								  {
									 
									  $arr['image'] =$sel_img['image'];
								  }
						
								$this->Webcontent_model->update_data($id,$arr);				
				
						 
			}
	  			$this->load->view('admin/Add_content',$data);
	  }
	
			function ajax_change_status()
				{
					//echo "schange";
					$this->Webcontent_model->update_status();	
				}
				
				function ajax_search_content()
				{
					$src_fed = $this->input->post('searchtxt');	
					$rec = "select * from content where heading like '$src_fed%' ";
					$temp = 2;
					
					//$arr['user_data'] = $this->Paggination_model->pagination_data(3,4,$rec,"admin/Feedback/ajax_search_feedback/",0,0,0,$temp);
					
					$arr['user_data'] = $this->Webcontent_model->search_data();
					//echo "return ";
					//die;
					$this->load->view('admin/Search_content',$arr);
					
				}
}

?>
