<?php 

	class Pagespeed extends CI_Controller
	{
		
		public $web;
		
	
			function __construct()
			{
				parent::__construct();
				
				if($this->session->userdata('user')=='')
				{
					redirect('user/Login');
				}
				
				$this->load->model('user/User_model');
				$this->load->model('user/Login_model');
				$this->load->model('user/Dashboard_model');
				$this->load->model('user/Reports_model');
				$this->load->helper('common_helper');
				@$this->load->helper('pagespeed');
				
			}
			
			function page_speed()
			{
				
				$data=array();
				//$data_mob=array('');
				if($this->input->post())
				{
					
					if(is_connected())
					{
							//$this->load->helper('pagespeed');	
						
					@$this->load->helper('pagespeed');
				  
				  	@$this->web=$this->input->post('web_url');
					
					@$web_url = $this->input->post('web_url');
					@$this->session->set_userdata('web_url',@$web_url);
						
					$data['device_type']="desktop";		
					@$insights = new SSX\API\Google\PageSpeed\ApiClient('desktop',$web_url,"AIzaSyCL5qxwBRMrzBhAvTnwRcXL_2F8NtchHRA");
					
					//@$insights2 = new SSX\API\Google\PageSpeed\ApiClient('mobile',$web_url,"AIzaSyCL5qxwBRMrzBhAvTnwRcXL_2F8NtchHRA");
					
					@$pagespeed=$insights->getRaw();
					//echo '<pre>';print_r($pagespeed);die;
					@$jas_data=json_encode($pagespeed);
					
					@$jas_decode=json_decode($jas_data,TRUE);
					
												// Get Screen Short...
					@$image =$pagespeed->screenshot->data;
					@$image = str_replace(array('_', '-'), array('/', '+'), $image);
					@$data['image']=  "<img src=\"data:image/jpeg;base64,".@$image."\" />";
					
												// Get Screen Short end...
					@$data['page_score'] = $jas_decode['score'];
					@$data['web_title']=$jas_decode['title'];
									
												//Get No Of Resources..
												
					@$data['no_resources']=$jas_decode['pageStats']['numberResources'];						
					
											//Optimize images...	
					@$data['optmiz_imgname']= $jas_decode['formattedResults']['ruleResults']['OptimizeImages']['localizedRuleName'];
					
					@$data['optimize_img']=$jas_decode['formattedResults']['ruleResults']['OptimizeImages']['urlBlocks'][1]['urls'];
					
					//echo "<pre>";
					
					@$data['oprimize_imgformat1']=$jas_decode['formattedResults']['ruleResults']['OptimizeImages']['urlBlocks'][0]['header']['format'];
					
					@$data['oprimize_imgformat2']=$jas_decode['formattedResults']['ruleResults']['OptimizeImages']['urlBlocks'][1]['header']['format'];
					
					@$data['oprimize_imgformaturl']=$jas_decode['formattedResults']['ruleResults']['OptimizeImages']['urlBlocks'][1]['header']['args'][0]['value'];
					
					@$data['oprimize_imgformatmb']=$jas_decode['formattedResults']['ruleResults']['OptimizeImages']['urlBlocks'][1]['header']['args'][1]['value'];
					
					@$data['oprimize_imgformatpr']=$jas_decode['formattedResults']['ruleResults']['OptimizeImages']['urlBlocks'][1]['header']['args'][2]['value'];
					
					
											//Optimize images Track Complete...
					
					
											//MinimizeRenderBlockingResources...
					
					@$data['elimini_rend_block']=$jas_decode['formattedResults']['ruleResults']['MinimizeRenderBlockingResources']['localizedRuleName'];
					
					@$data['elimini_block_0format']=$jas_decode['formattedResults']['ruleResults']['MinimizeRenderBlockingResources']['urlBlocks'][0]['header']['format'];
					
					@$data['elimini_block_1format']=$jas_decode['formattedResults']['ruleResults']['MinimizeRenderBlockingResources']['urlBlocks'][1]['header']['format'];
					
					@$data['elimini_block_2format']=$jas_decode['formattedResults']['ruleResults']['MinimizeRenderBlockingResources']['urlBlocks'][2]['header']['format'];
					
					@$data['elimini_block_link']= $jas_decode['formattedResults']['ruleResults']['MinimizeRenderBlockingResources']['urlBlocks'][2]['header']['args'][0]['value'];
					
					@$data['elimini_block_urls']= $jas_decode['formattedResults']['ruleResults']['MinimizeRenderBlockingResources']['urlBlocks'][2]['urls'];
					
					
									//MinimizeRenderBlockingResources Track Complete...
					
					
											// MinifyJavaScript Track Start...
				
					@$data['minify_jsname']=$jas_decode['formattedResults']['ruleResults']['MinifyJavaScript']['localizedRuleName'];
					
					@$data['minify_0jsformat']=$jas_decode['formattedResults']['ruleResults']['MinifyJavaScript']['urlBlocks'][0]['header']['format'];
					
					@$data['minify_1jsformat']=$jas_decode['formattedResults']['ruleResults']['MinifyJavaScript']['urlBlocks'][1]['header']['format'];
					
					@$data['minify_js_args']=$jas_decode['formattedResults']['ruleResults']['MinifyJavaScript']['urlBlocks'][1]['header']['args'];
					
					@$data['minify_js_urls']=$jas_decode['formattedResults']['ruleResults']['MinifyJavaScript']['urlBlocks'][1]['urls'];
					
					
					//echo "<pre>";
					//print_r($jas_decode['formattedResults']['ruleResults']['MinifyJavaScript']['urlBlocks'][1]['urls']);
					
					/*foreach(@$data['minify_js_urls'] as $row)
					{
						@$minify_info = $row['result']['args'];		
						
						foreach(@$minify_info as $minify_jsinfo)
						{
							echo $minify_jsexp=$minify_jsinfo['value']."&nbsp;";	
							//$minifyjs_expout=explode(' ', @$minify_jsexp);
							//print_r( $minifyjs_expout);
						}
						echo "&nbsp"."reduction could save after compression.";
					}
					die;*/
					
					/*foreach($data['minify_js_args'] as $k=>$row)
					{
						//echo $row['format']."<br>";
						if($k>0)
						{
							echo @$row['value']."</br>";
						}
					}*/
					
												// MinifyJavaScript Track Start Complete...
					
					
												// Minify CSS Track Start...
												
					@$data['minify_cssname']=$jas_decode['formattedResults']['ruleResults']['MinifyCss']['localizedRuleName'];
					
					@$data['minify_0cssformat']=$jas_decode['formattedResults']['ruleResults']['MinifyCss']['urlBlocks'][0]['header']['format'];
					
					@$data['minify_1cssformat']=$jas_decode['formattedResults']['ruleResults']['MinifyCss']['urlBlocks'][1]['header']['format'];
					
					@$data['minify_css_args']=$jas_decode['formattedResults']['ruleResults']['MinifyCss']['urlBlocks'][1]['header']['args'];
					
					@$data['minify_css_urls']=$jas_decode['formattedResults']['ruleResults']['MinifyCss']['urlBlocks'][1]['urls'];
											
													// Minify CSS Track  Complete...
													
													// Minify HTML Track Start ...
					
					@$data['minify_htmlname']=$jas_decode['formattedResults']['ruleResults']['MinifyHTML']['localizedRuleName'];
					
					@$data['minify_0htmlformat']=$jas_decode['formattedResults']['ruleResults']['MinifyHTML']['urlBlocks'][0]['header']['format'];
					
					@$data['minify_1htmlformat']=$jas_decode['formattedResults']['ruleResults']['MinifyHTML']['urlBlocks'][1]['header']['format'];
					
					@$data['minify_html_args']=$jas_decode['formattedResults']['ruleResults']['MinifyHTML']['urlBlocks'][1]['header']['args'];
					
					@$data['minify_html_urls']=$jas_decode['formattedResults']['ruleResults']['MinifyHTML']['urlBlocks'][1]['urls'];
					
													// Minify HTML Track End ...
					
												// Optimizations Already Present Start..
					
												// AvoidLandingPageRedirects Start...
					@$data['rules_avodpagename']=$jas_decode['formattedResults']['ruleResults']['AvoidLandingPageRedirects']['localizedRuleName'];
					
					@$data['rules_avodformat']=$jas_decode['formattedResults']['ruleResults']['AvoidLandingPageRedirects']['urlBlocks'][0]['header']['format'];
					
					@$data['rules_avodformatlink']=$jas_decode['formattedResults']['ruleResults']['AvoidLandingPageRedirects']['urlBlocks'][0]['header']['args'][0]['value'];
												
												// AvoidLandingPageRedirects end...
					
					
												//EnableGzipCompression Start...
					
					@$data['rules_enablezipname']=$jas_decode['formattedResults']['ruleResults']['EnableGzipCompression']['localizedRuleName'];	
					
					@$data['rules_enablezipformat']=$jas_decode['formattedResults']['ruleResults']['EnableGzipCompression']['urlBlocks'][0]['header']['format'];
					
					@$data['rules_enableziplink']=$jas_decode['formattedResults']['ruleResults']['EnableGzipCompression']['urlBlocks'][0]['header']['args'][0]['value'];					
												
												//EnableGzipCompression End...
							
												// LeverageBrowserCaching Start ...
											
					@$data['rules_levername']=$jas_decode['formattedResults']['ruleResults']['LeverageBrowserCaching']['localizedRuleName'];	
					
					@$data['rules_leverformat']=$jas_decode['formattedResults']['ruleResults']['LeverageBrowserCaching']['urlBlocks'][0]['header']['format'];
					
					@$data['rules_leverlink']=$jas_decode['formattedResults']['ruleResults']['LeverageBrowserCaching']['urlBlocks'][0]['header']['args'][0]['value'];
												
												// LeverageBrowserCaching End...
												
												// PrioritizeVisibleContent Start ...
											
					@$data['rules_prviname']=$jas_decode['formattedResults']['ruleResults']['PrioritizeVisibleContent']['localizedRuleName'];	
					
					@$data['rules_prviformat']=$jas_decode['formattedResults']['ruleResults']['PrioritizeVisibleContent']['urlBlocks'][0]['header']['format'];
					
					@$data['rules_prvilink']=$jas_decode['formattedResults']['ruleResults']['PrioritizeVisibleContent']['urlBlocks'][0]['header']['args'][0]['value'];
												
												// PrioritizeVisibleContent End...
					
					
												// MainResourceServerResponseTime Start ...
											
					@$data['rules_serresname']=$jas_decode['formattedResults']['ruleResults']['MainResourceServerResponseTime']['localizedRuleName'];	
					
					@$data['rules_serresformat']=$jas_decode['formattedResults']['ruleResults']['MainResourceServerResponseTime']['urlBlocks'][0]['header']['format'];
					
					@$data['rules_serreslink']=$jas_decode['formattedResults']['ruleResults']['MainResourceServerResponseTime']['urlBlocks'][0]['header']['args'][0]['value'];
												
												// MainResourceServerResponseTime End...
					
					//echo '<pre>';
					//print_r(@$data['minify_css_urls']);
					//die;
					//echo @$data['rules_serresname'];
												
					//die;	
					//echo '<pre>';					
					//print_r($jas_decode);
					//die;
						//print_r($insights->getRaw());
					//$web_id = $CI->uri->segement(6);
							//echo $web_id;
					//die;*/
						
					}
					else
					{
						@$data['inter_prblm']="Due To Some Internet Connection Problem Please Try Again..!!!";	
								//echo @$data['inter_prblm'];
									//die;		
							
					}
				}
				
				$this->load->view('user/Pagespeed_view',$data);
					
			}
			
			function ajax_mob_data()
			{
				$data=array();
				@$web_url = $this->session->userdata('web_url');
				@$device_type = $this->input->post('device_type');
				$data['device_type']=@$device_type;
				@$insights = new SSX\API\Google\PageSpeed\ApiClient(@$device_type,@$web_url,"AIzaSyCL5qxwBRMrzBhAvTnwRcXL_2F8NtchHRA");
					
					//@$insights2 = new SSX\API\Google\PageSpeed\ApiClient('mobile',$web_url,"AIzaSyCL5qxwBRMrzBhAvTnwRcXL_2F8NtchHRA");
					
					@$pagespeed=$insights->getRaw();
					//echo '<pre>';print_r($pagespeed);die;
					@$jas_data=json_encode($pagespeed);
				
					@$jas_decode=json_decode($jas_data,TRUE);
					
					@$image =$pagespeed->screenshot->data;
					@$image = str_replace(array('_', '-'), array('/', '+'), $image);
					@$data['image']=  "<img src=\"data:image/jpeg;base64,".@$image."\" />";
					
					
					@$data['page_score'] = $jas_decode['score'];
					@$data['web_title']=$jas_decode['title'];
									
									//Get No Of Resources..
												
					@$data['no_resources']=$jas_decode['pageStats']['numberResources'];
									
									
											//Optimize images...	
					@$data['optmiz_imgname']= $jas_decode['formattedResults']['ruleResults']['OptimizeImages']['localizedRuleName'];
					
					@$data['optimize_img']=$jas_decode['formattedResults']['ruleResults']['OptimizeImages']['urlBlocks'][1]['urls'];
					
					//echo "<pre>";
					
					@$data['oprimize_imgformat1']=$jas_decode['formattedResults']['ruleResults']['OptimizeImages']['urlBlocks'][0]['header']['format'];
					
					@$data['oprimize_imgformat2']=$jas_decode['formattedResults']['ruleResults']['OptimizeImages']['urlBlocks'][1]['header']['format'];
					
					@$data['oprimize_imgformaturl']=$jas_decode['formattedResults']['ruleResults']['OptimizeImages']['urlBlocks'][1]['header']['args'][0]['value'];
					
					@$data['oprimize_imgformatmb']=$jas_decode['formattedResults']['ruleResults']['OptimizeImages']['urlBlocks'][1]['header']['args'][1]['value'];
					
					@$data['oprimize_imgformatpr']=$jas_decode['formattedResults']['ruleResults']['OptimizeImages']['urlBlocks'][1]['header']['args'][2]['value'];
					
					
											//Optimize images Track Complete...
					
					
											//MinimizeRenderBlockingResources...
					
					@$data['elimini_rend_block']=$jas_decode['formattedResults']['ruleResults']['MinimizeRenderBlockingResources']['localizedRuleName'];
					
					@$data['elimini_block_0format']=$jas_decode['formattedResults']['ruleResults']['MinimizeRenderBlockingResources']['urlBlocks'][0]['header']['format'];
					
					@$data['elimini_block_1format']=$jas_decode['formattedResults']['ruleResults']['MinimizeRenderBlockingResources']['urlBlocks'][1]['header']['format'];
					
					@$data['elimini_block_2format']=$jas_decode['formattedResults']['ruleResults']['MinimizeRenderBlockingResources']['urlBlocks'][2]['header']['format'];
					
					@$data['elimini_block_link']= $jas_decode['formattedResults']['ruleResults']['MinimizeRenderBlockingResources']['urlBlocks'][2]['header']['args'][0]['value'];
					
					@$data['elimini_block_urls']= $jas_decode['formattedResults']['ruleResults']['MinimizeRenderBlockingResources']['urlBlocks'][2]['urls'];
					
					
									//MinimizeRenderBlockingResources Track Complete...
					
					
											// MinifyJavaScript Track Start...
				
					@$data['minify_jsname']=$jas_decode['formattedResults']['ruleResults']['MinifyJavaScript']['localizedRuleName'];
					
					@$data['minify_0jsformat']=$jas_decode['formattedResults']['ruleResults']['MinifyJavaScript']['urlBlocks'][0]['header']['format'];
					
					@$data['minify_1jsformat']=$jas_decode['formattedResults']['ruleResults']['MinifyJavaScript']['urlBlocks'][1]['header']['format'];
					
					@$data['minify_js_args']=$jas_decode['formattedResults']['ruleResults']['MinifyJavaScript']['urlBlocks'][1]['header']['args'];
					
					@$data['minify_js_urls']=$jas_decode['formattedResults']['ruleResults']['MinifyJavaScript']['urlBlocks'][1]['urls'];
					
					
					//echo "<pre>";
					//print_r($jas_decode['formattedResults']['ruleResults']['MinifyJavaScript']['urlBlocks'][1]['urls']);
					
					/*foreach(@$data['minify_js_urls'] as $row)
					{
						@$minify_info = $row['result']['args'];		
						
						foreach(@$minify_info as $minify_jsinfo)
						{
							echo $minify_jsexp=$minify_jsinfo['value']."&nbsp;";	
							//$minifyjs_expout=explode(' ', @$minify_jsexp);
							//print_r( $minifyjs_expout);
						}
						echo "&nbsp"."reduction could save after compression.";
					}
					die;*/
					

					/*foreach($data['minify_js_args'] as $k=>$row)
					{
						//echo $row['format']."<br>";
						if($k>0)
						{
							echo @$row['value']."</br>";
						}
					}*/
					
												// MinifyJavaScript Track Start Complete...
					
					
												// Minify CSS Track Start...
												
					@$data['minify_cssname']=$jas_decode['formattedResults']['ruleResults']['MinifyCss']['localizedRuleName'];
					
					@$data['minify_0cssformat']=$jas_decode['formattedResults']['ruleResults']['MinifyCss']['urlBlocks'][0]['header']['format'];
					
					@$data['minify_1cssformat']=$jas_decode['formattedResults']['ruleResults']['MinifyCss']['urlBlocks'][1]['header']['format'];
					
					@$data['minify_css_args']=$jas_decode['formattedResults']['ruleResults']['MinifyCss']['urlBlocks'][1]['header']['args'];
					
					@$data['minify_css_urls']=$jas_decode['formattedResults']['ruleResults']['MinifyCss']['urlBlocks'][1]['urls'];
											
													// Minify CSS Track  Complete...
													
													// Minify HTML Track Start ...
					
					@$data['minify_htmlname']=$jas_decode['formattedResults']['ruleResults']['MinifyHTML']['localizedRuleName'];
					
					@$data['minify_0htmlformat']=$jas_decode['formattedResults']['ruleResults']['MinifyHTML']['urlBlocks'][0]['header']['format'];
					
					@$data['minify_1htmlformat']=$jas_decode['formattedResults']['ruleResults']['MinifyHTML']['urlBlocks'][1]['header']['format'];
					
					@$data['minify_html_args']=$jas_decode['formattedResults']['ruleResults']['MinifyHTML']['urlBlocks'][1]['header']['args'];
					
					@$data['minify_html_urls']=$jas_decode['formattedResults']['ruleResults']['MinifyHTML']['urlBlocks'][1]['urls'];
					
													// Minify HTML Track End ...
					
												// Optimizations Already Present Start..
					
												// AvoidLandingPageRedirects Start...
					@$data['rules_avodpagename']=$jas_decode['formattedResults']['ruleResults']['AvoidLandingPageRedirects']['localizedRuleName'];
					
					@$data['rules_avodformat']=$jas_decode['formattedResults']['ruleResults']['AvoidLandingPageRedirects']['urlBlocks'][0]['header']['format'];
					
					@$data['rules_avodformatlink']=$jas_decode['formattedResults']['ruleResults']['AvoidLandingPageRedirects']['urlBlocks'][0]['header']['args'][0]['value'];
												
												// AvoidLandingPageRedirects end...
					
					
												//EnableGzipCompression Start...
					
					@$data['rules_enablezipname']=$jas_decode['formattedResults']['ruleResults']['EnableGzipCompression']['localizedRuleName'];	
					
					@$data['rules_enablezipformat']=$jas_decode['formattedResults']['ruleResults']['EnableGzipCompression']['urlBlocks'][0]['header']['format'];
					
					@$data['rules_enableziplink']=$jas_decode['formattedResults']['ruleResults']['EnableGzipCompression']['urlBlocks'][0]['header']['args'][0]['value'];					
												
												//EnableGzipCompression End...
							
												// LeverageBrowserCaching Start ...
											
					@$data['rules_levername']=$jas_decode['formattedResults']['ruleResults']['LeverageBrowserCaching']['localizedRuleName'];	
					
					@$data['rules_leverformat']=$jas_decode['formattedResults']['ruleResults']['LeverageBrowserCaching']['urlBlocks'][0]['header']['format'];
					
					@$data['rules_leverlink']=$jas_decode['formattedResults']['ruleResults']['LeverageBrowserCaching']['urlBlocks'][0]['header']['args'][0]['value'];
												
												// LeverageBrowserCaching End...
												
												// PrioritizeVisibleContent Start ...
											
					@$data['rules_prviname']=$jas_decode['formattedResults']['ruleResults']['PrioritizeVisibleContent']['localizedRuleName'];	
					
					@$data['rules_prviformat']=$jas_decode['formattedResults']['ruleResults']['PrioritizeVisibleContent']['urlBlocks'][0]['header']['format'];
					
					@$data['rules_prvilink']=$jas_decode['formattedResults']['ruleResults']['PrioritizeVisibleContent']['urlBlocks'][0]['header']['args'][0]['value'];
												
												// PrioritizeVisibleContent End...
					
					
												// MainResourceServerResponseTime Start ...
											
					@$data['rules_serresname']=$jas_decode['formattedResults']['ruleResults']['MainResourceServerResponseTime']['localizedRuleName'];	
					
					@$data['rules_serresformat']=$jas_decode['formattedResults']['ruleResults']['MainResourceServerResponseTime']['urlBlocks'][0]['header']['format'];
					
					@$data['rules_serreslink']=$jas_decode['formattedResults']['ruleResults']['MainResourceServerResponseTime']['urlBlocks'][0]['header']['args'][0]['value'];
												
												// MainResourceServerResponseTime End...
					
					$this->load->view('user/Ajax_Pagespeed_view',@$data);
			}
	
	}
?>