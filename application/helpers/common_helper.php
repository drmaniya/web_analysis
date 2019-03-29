
<?php 
		function email($email='',$password='')
			{
				
				$CI=&get_instance();
				
				$CI->load->library('email');
				//if($_SERVER['HTTP_HOST'] == 'localhost')
				//{
					$config['protocol']='smtp';
					$config['smtp_host']='ssl://smtp.gmail.com';
					$config['smtp_user']='webanalysis09@gmail.com';
					$config['smtp_pass']='webanalysis09track';
					$config['smtp_port']= 465;
				//}
				
				$config['newline']="\r\n";
				$config['mailtype']='html';
				
				$CI->email->initialize($config);
				$CI->email->from('webanalysis09@gmail.com');
				$CI->email->to($email);
				$CI->email->subject('password from web Analysis...!!!');
				$CI->email->message($password);
				
				if(is_connected())
				{
						if($CI->email->send())
						{
							return 'true';
						}
						else
						{	
							return 'false';
						}
				
				}
				else
				{
					return 'false';
				}
				
					
			}
			
			
			
		
			function is_connected()
			{
				$connected = @fsockopen("www.google.com", 80); 
													//website, port  (try 80 or 443)
				if ($connected){
					$is_conn = true; //action when connected
					fclose($connected);
				}else{
					$is_conn = false; //action in connection failure
				}
				return $is_conn;
			
			}
			
			function email_contreplay($email='',$subject='',$message='')
			{
				
				$CI=&get_instance();
				
				$CI->load->library('email');
				
				//if($_SERVER['HTTP_HOST'] == 'localhost')
				//{
					$config['protocol']='smtp';
					$config['smtp_host']='ssl://smtp.gmail.com';
					$config['smtp_user']='webanalysis09@gmail.com';
					$config['smtp_pass']='webanalysis09track';
					$config['smtp_port']= 465;
				//}
			
				$config['newline']="\r\n";
				$config['mailtype']='html';
				
				$CI->email->initialize($config);
				$CI->email->from('webanalysis09@gmail.com');
				$CI->email->to($email);
				$CI->email->subject($subject);
				$CI->email->message($message);
				
				if(is_connected())
				{
				
						if($CI->email->send())
						{
							return 'true';
						}
						else
						{	
							return 'false';
						}
				
				}
				else
				{
					return 'false';
				}
				
					
			}
			
			function pagination($table_name='',$per_page='',$siteurl='')
			{
				$CI = &get_instance();
				$CI->load->library('pagination');
				$total=$this->total_row($table_name);
				$config['base_url'] = site_url($siteurl);
				$config['total_rows'] = $total;
				$config['per_page'] = $per_page;
				
				/****** codding for paggination design start*****/
				
				$config['full_tag_open']='<div class="pagination">';
				$config['full_tag_close']='</div>';
				$config['cur_tag_open'] ='<a class="active">';
				$config['cur_tag_close'] ='</a>';
				
				/****** codding for paggination design end*****/
			
				
				$config['next_link'] = '<i class="fa fa-caret-right"></i>';
				$config['prev_link'] = '<i class="fa fa-caret-left"></i>';  
				$config['first_link'] = '<i class="fa fa-chevron-left"></i><i class="fa fa-caret-left"></i>'; 
				$config['last_link'] = '<i class="fa fa-caret-right"></i><i class="fa fa-chevron-right"></i>';
				
			
				$CI->pagination->initialize($config);
				return $CI->pagination->create_links();
					
			}
?>