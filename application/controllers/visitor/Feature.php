<?php

		class Feature extends CI_Controller
		{
			
			function __construct()
			{
				parent::__construct();
				
				$this->load->model('visitor/Feature_model');
				$this->load->library('form_validation');
			}
			function index()
			{
				$data=array();
				
				if($this->input->post('Send_contact'))
				{
					$name = $this->input->post('name');
					$email = $this->input->post('email');
					$mobile = $this->input->post('mobile');
					$message = $this->input->post('message');
					
					$this->form_validation->set_rules('name','Name','required|alpha');
					$this->form_validation->set_rules('email','Email','required|valid_email');
					$this->form_validation->set_rules('mobile','Mobile','required|numeric|regex_match[/^[0-9]{10}$/]');
					$this->form_validation->set_rules('message','Message','required');
					
					if($this->form_validation->run() == false)
					{
						$data['name']=set_value('name');
						$data['email']=set_value('email');
						$data['mobile']=set_value('mobile');
						$data['message']=set_value('message');
					}
					else
					{
						$arr= array('customer_name'=>$name,'customer_email'=>$email,'customer_mobile'=>$mobile,'customer_message'=>$message);
												
											//call model for chcke user already contact
						$rec = $this->Feature_model->contact_already($email);						
											
											// Call model function for insert data...
						if($rec > 0)
						{
							
							$data['already']="already exist...!!!";
								
						}
						else
						{ 
							$this->Feature_model->get_contact($arr);	
						}
					}
				}
				
				   //report//
				    $data['feat_si']=$this->Feature_model->con(6);
					$data['feat_se']=$this->Feature_model->con(7);
					$data['feat_ei']=$this->Feature_model->con(8);
					$data['feat_ni']=$this->Feature_model->con(9);
					$data['feat_te']=$this->Feature_model->con(10);
					$data['feat_el']=$this->Feature_model->con(11);
					
					$data['feat_tw']=$this->Feature_model->con(12);
					//over//
				
				$this->load->view('visitor/Feature_design',$data);
			}
			
		 function seo()
		   {
	           $data['feat_fnin']=$this->Feature_model->con(49);
			   $data['feat_fift']=$this->Feature_model->con(50);
			   $data['feat_fione']=$this->Feature_model->con(51);
			   $data['feat_fitwo']=$this->Feature_model->con(52);
			   $data['feat_fithr']=$this->Feature_model->con(53);
			   $data['feat_fifou']=$this->Feature_model->con(54);
			   $data['feat_fifiv']=$this->Feature_model->con(55);
			   
			   
			   
    $this->load->view('visitor/Feature_sub/Seo_crawel',$data);
    }
	
   function seobenchmark()
   
   {
	     $data['feat_fisix']=$this->Feature_model->con(56);
         $data['feat_fisev']=$this->Feature_model->con(57);
			   
	 $this->load->view('visitor/Feature_sub/Seo_benchmark',$data);
       
   }
   
   function page()
   {
	     $data['feat_fieig']=$this->Feature_model->con(58);
         $data['feat_finin']=$this->Feature_model->con(59);
		 $data['feat_sixteen']=$this->Feature_model->con(60);
         $data['feat_sixone']=$this->Feature_model->con(61);
         $data['feat_sixtwo']=$this->Feature_model->con(62);
         $data['feat_sixthr']=$this->Feature_model->con(63);
		
	 $this->load->view('visitor/Feature_sub/Page_analysis',$data);
       
   }
   
   function backlink()
   {
	   
	     $data['feat_sixfou']=$this->Feature_model->con(64);
         $data['feat_sixfiv']=$this->Feature_model->con(65);
		
	 $this->load->view('visitor/Feature_sub/Backlinks',$data);
       
   }
   
   function sitevssite()
   {
	     $data['feat_sixsix']=$this->Feature_model->con(66);
         $data['feat_sixsev']=$this->Feature_model->con(67);
		
	   
	 $this->load->view('visitor/Feature_sub/Site_vs_site',$data);
       
   }
   
   function ranktracking()
   
   { 
         $data['feat_sixeig']=$this->Feature_model->con(68);
         $data['feat_sixnin']=$this->Feature_model->con(69);
		
	   
	 $this->load->view('visitor/Feature_sub/Rank_tracing',$data);
       
   }
}
?>

  