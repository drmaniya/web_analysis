
 <?php $this->load->view('user/Header_user');?>
 <link href="<?php echo base_url('assets/user/css/chat.css');?>" type="text/css" rel="stylesheet"/>
 
 
 <script>

$(document).ready(function(){
        $(".left-first-section").click(function(){
            $('.main-section').toggleClass("open-more");
        });
    });
	
    $(document).ready(function(){
        $(".fa-minus").click(function(){
            $('.main-section').toggleClass("open-more");
        });
    });
 </script>
 
 <script>
		function imsg_send()
		{
			
			var from_id = '<?php echo @$this->session->userdata('user'); ?>';
			var to_id = 1;
			var msg = $('#input_chat').val();
				if(msg == ''){return false;}
				//alert(from_id);
				$.ajax({
					type:'POST',
					url:'<?php echo site_url('user/Dashboard/add_chat'); ?>',
					data:{from_id:from_id,to_id:to_id,msg:msg},
					dataType:'JSON',
					success:function(response){
						//console.log(response.conversation);return false;
						var html='';
						for(var i=0;i<response.conversation.length;i++){
							if(from_id == (response.conversation[i].from_id)){
								html += '<li><div class="right-chat"><p>'+response.conversation[i].msg+'</p></div></li>';	
							}else{
								html += '<li><div class="left-chat"><p>'+response.conversation[i].msg+'</p></div></li>';	
							}
							 
						}
						$('#conversation').html(html);
						$('#input_chat').val('');		
					}
				});
				
			
		}
				
		$(function(){
				
				
				var scr = $('#conversation');
			//	console.log(scr);
				var height = scr[0].scrollHeight;
				//console.log(height);
				scr.scrollTop(height);	
				
			});
			
			var $time = '';
			
			function auto_get_chat_func(from_id,to_id){
	
			clearTimeout($time);
			auto_get_chat(from_id,to_id);	
		}
		
		
			function auto_get_chat(from_id,to_id){
				//alert("dasd");
			//var from_id = from_id;
			//var to_id	= to_id;
			//console.log(from_id);console.log(to_id);return false;
			//clearTimeout(time);
			$.ajax({
				type:'POST',
				url:'<?php echo site_url('user/Dashboard/get_chat_data'); ?>',
				data:{from_id:from_id,to_id:to_id},
				dataType:'JSON',
				success:function(response){
					//console.log(response.conversation);return false;
					var html='';
					for(var i=0;i<response.conversation.length;i++){
						if(from_id == (response.conversation[i].from_id)){
							html += '<li><div class="right-chat"><p>'+response.conversation[i].msg+'</p></div></li>';	
						}else{
							html += '<li><div class="left-chat"><p>'+response.conversation[i].msg+'</p></div></li>';	
						}
						 
					}
					$('#chat_box').show();
					$('#chat_name').text(response.chat_user_data.fname);
					$('#input_chat').attr('data-from_id',from_id);
					$('#input_chat').attr('data-to_id',to_id);
					$('#conversation').html(html);
				}
			});
			
			$time = setTimeout(function(){
				
				auto_get_chat(from_id,to_id)
			},3000);
			
		}
		
		
		$(document).ready(function(e) {
		
				//alert("asdsa");
		$('#input_chat').keyup(function(e){
			if(e.keyCode==13){
				var from_id = '<?php echo @$this->session->userdata('user'); ?>';
				var to_id = 1;
				var msg = $(this).val();
				if(msg == ''){return false;}
				//alert(from_id);
				$.ajax({
					type:'POST',
					url:'<?php echo site_url('user/Dashboard/add_chat'); ?>',
					data:{
							from_id:from_id,
							to_id:to_id,
							msg:msg
					},
					dataType:'JSON',
					success:function(response){
						//console.log(response.conversation);return false;
						var html='';
						for(var i=0;i<response.conversation.length;i++){
							if(from_id == (response.conversation[i].from_id)){
								html += '<li><div class="right-chat"><p>'+response.conversation[i].msg+'</p></div></li>';	
							}else{
								html += '<li><div class="left-chat"><p>'+response.conversation[i].msg+'</p></div></li>';	
							}
							 
						}
						$('#conversation').html(html);
						$('#input_chat').val('');		
					}
				});
				
			}
			});
		});
			
		
		$(document).on('click','.user_chat_box',function(){
			//alert();
			//console.log(time);
			var from_id = '<?php echo @$this->session->userdata('user'); ?>';
			var to_id = 1;
			$.ajax({
				type:'POST',
				url:'<?php echo site_url('user/Dashboard/get_chat_data'); ?>',
				data:{from_id:from_id,to_id:to_id},
				dataType:'JSON',
				success:function(response){
					//console.log(response.conversation);return false;
					
					var html='';
					for(var i=0;i<response.conversation.length;i++){
						if(from_id == (response.conversation[i].from_id)){
							html += '<li><div class="right-chat"><p>'+response.conversation[i].msg+'</p></div></li>';	
						}else{
							html += '<li><div class="left-chat"><p>'+response.conversation[i].msg+'</p></div></li>';	
						}
						 
					}
					//$('#chat_box').show();
					$('#chat_name').text(response.chat_user_data.fname);
					$('#input_chat').attr('data-from_id',from_id);
					$('#input_chat').attr('data-to_id',to_id);
					$('#conversation').html(html);
					
					var scr = $('#conversation');
					console.log(scr);
					var height = scr[0].scrollHeight;
//					alert(height);
					scr.scrollTop(height);			
					//clearTimeout(time);
					auto_get_chat_func(from_id,to_id);
				}
			});
		});
	
		
		 $(document).ready(function(){
    	$(".fa-minus").click(function(){
            $('.main-section').toggleClass("open-more").after(function(){
				var scr = $('#conversation');
				//console.log(scr);
				var height = scr[0].scrollHeight;
				//alert(height);
				scr.scrollTop(height);					
			});
			});
		});
		
		
		function chat_delete()
		{
			<?php 
					// @$from_id=@$this->session->userdata('user');
					 //$this->Dashboard_model->chat_delete(@$from_id);	
			?>
		}
 </script>
 
 
 
 
 <!-- Page wrapper  -->
 
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-6 col-8 align-self-center">
                        <h3 class="text-themecolor m-b-0 m-t-0">Dashboard</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Home Dashboard</li>
                        </ol>
                    </div>
                   <!-- <div class="col-md-6 col-4 align-self-center">
                        <button class="right-side-toggle waves-effect waves-light btn-info btn-circle btn-sm pull-right m-l-10"><i class="ti-settings text-white"></i></button>
                        <button class="btn pull-right hidden-sm-down btn-success"><i class="mdi mdi-plus-circle"></i> Create</button>
                        <div class="dropdown pull-right m-r-10 hidden-sm-down">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                January 2017
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">February 2017</a>
                                <a class="dropdown-item" href="#">March 2017</a>
                                <a class="dropdown-item" href="#">April 2017</a>
                            </div>
                        </div>
                    </div>
-->                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <!-- Row -->
              <!--  <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-8"><span class="display-6">0 <i class="ti-angle-down font-14 text-danger"></i></span>
                                        <h6>Total Visits</h6></div>
                                    <div class="col-4 align-self-center text-right  p-l-0">
                                        <div id="sparklinedash3"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-8"><span class="display-6">0 <i class="ti-angle-up font-14 text-success"></i></span>
                                        <h6>Page Views</h6></div>
                                    <div class="col-4 align-self-center text-right p-l-0">
                                        <div id="sparklinedash"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                  
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-8"><span class="display-6">0 <i class="ti-angle-up font-14 text-success"></i></span>
                                        <h6>Unique Visits</h6></div>
                                    <div class="col-4 align-self-center text-right p-l-0">
                                        <div id="sparklinedash2"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                  
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-8"><span class="display-6">0%<i class="ti-angle-down font-14 text-danger"></i></span>
                                        <h6>Bounce Rate</h6></div>
                                    <div class="col-4 align-self-center text-right p-l-0">
                                        <div id="sparklinedash4"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                -->
                <!--Start label of infromation of package -->
                	<div class="col-lg-6 col-md-6 col-sd-6" style="margin:auto;"> 
                    
                     <!--<label name="free_trial_web" class="btn btn-block btn-outline-success"  style="height:40px"  id="ftrial_btn">Your Free Trial Start Remaining Day Is&nbsp;&nbsp;<big><?php //echo @$remaining_day; ?>&nbsp; out of &nbsp;7</big></label>-->
                     
                     
                     <label name="free_trial_web" class="pack_sel" id="ftrial_btn"><?php if(@$package_select){echo @$package_select; }?></label>
                     
                <!-- <label  class="btn btn-block btn-outline-danger"  style="height:40px;text-align:center;width:auto"  id="pack_lbl">Free Trial Expire Please Select Package For Your Continues WebAnalysis...</big></label>-->
                 
                 <label  class="pack_expr packer" id="pack_lbl"><?php if(@$pack_expire){	echo @$pack_expire; } ?></label>
                 
                    </div>
                
                <!--Start Packsage List-->
                <script type="text/javascript"> 
				
				$(document).ready(function(e) {
                    
                
                		var chk_week='<?php echo @$wpack_data['pac_status'];?>';
						if(chk_week == 1)
						{
							//alert(chk_week);
							$('#week_list').show();	
						}
						else
						{
							//alert(chk_week);
							$('#week_list').hide();
						}
						
						
						var chk_month='<?php echo @$mpack_data['pac_status'];?>';
						if(chk_month == 1)
						{
							//alert(chk_week);
							$('#month_list').show();	
						}
						else
						{
							//alert(chk_week);
							$('#month_list').hide();
						}
						
						
						var chk_qutry='<?php echo @$qpack_data['pac_status'];?>';
						if(chk_qutry == 1)
						{
							//alert(chk_week);
							$('#qutry_list').show();	
						}
						else
						{
							//alert(chk_week);
							$('#qutry_list').hide();
						}
						
						var chk_year='<?php echo @$ypack_data['pac_status'];?>';
						if(chk_year == 1)
						{
							//alert(chk_week);
							$('#year_list').show();	
						}
						else
						{
							//alert(chk_week);
							$('#year_list').hide();
						}
                });
                </script>
                  <div class="row" style="padding-top:50px;">
                    <!-- Column -->
                    <div class="col-lg-3 col-md-6" id="week_list">
                    <div class="card">
                    	<div class="card-body">
                        	<div class="row">
                            
                        
                                <!-- Row -->
                                   <div id="pricing-table" class="clear" style="margin-left:24px;">
                                    <div class="plan">
                                        <h3><?php echo @$wpack_data['pac_duration']; ?><span><i class="fa fa-rupee"></i><?php echo @$wpack_data['pac_cost']; ?></span></h3>
                                        <a class="signup" href="<?php echo site_url('user/Bank/bank_payment/'.@$wpack_data['pac_id']); ?>">Subscribe</a>         
                                        <ul>
                                            <li>TOTAL VISITOR</li>
                                            <li>RANK IN INDIA</li>
                                            <li>RANK IN WORLD</li>
                                        <li>ONLINE VISITOR</li>            
                                        </ul> 
                                        
                                            </div>
                        </div>
                        </div>
                        </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="col-lg-3 col-md-6" id="month_list">
                      <div class="card">
                    	<div class="card-body">
                        	<div class="row">
                                   <div id="pricing-table" class="clear" style="margin-left:24px;">
                                    <div class="plan">
                                        <h3><?php echo @$mpack_data['pac_duration']; ?><span><i class="fa fa-rupee"></i><?php echo @$mpack_data['pac_cost']; ?></span></h3>
                                        <a class="signup" href="<?php echo site_url('user/Bank/bank_payment/'.@$mpack_data['pac_id']); ?>">Subscribe</a>         
                                        <ul>
                                        <li>TOTAL VISITOR</li>
                                            <li>RANK IN INDIA</li>
                                            <li>RANK IN WORLD</li>
                                        <li>ONLINE VISITOR</li>    </ul> 
                                    </div>

                        </div>
                         </div>
                        </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="col-lg-3 col-md-6" id="qutry_list">
                    <div class="card">
                    	<div class="card-body">
                        	<div class="row">
                                   <div id="pricing-table" class="clear" style="margin-left:24px;">
                                <div class="plan">
                                    <h3><?php echo @$qpack_data['pac_duration']; ?><span><i class="fa fa-rupee"></i><?php echo @$qpack_data['pac_cost']; ?></span></h3>
                                    <a class="signup" href="<?php echo site_url('user/Bank/bank_payment/'.@$qpack_data['pac_id']); ?>">Subscribe</a>         
                                    <ul>
                                    <li>TOTAL VISITOR</li>
                                            <li>RANK IN INDIA</li>
                                            <li>RANK IN WORLD</li>
                                        <li>ONLINE VISITOR</li>    </ul> 
                                </div>
                            </div>
                             </div>
                        </div>
                        </div>                             
                    </div>
                    <!-- Column -->
                    <div class="col-lg-3 col-md-6" id="year_list">
                        <div class="card">
                    	<div class="card-body">
                        	<div class="row">
                       <div id="pricing-table" class="clear" style="margin-left:24px;">
                            <div class="plan">
                                <h3><?php echo @$ypack_data['pac_duration']; ?><span><i class="fa fa-rupee"></i><?php echo @$ypack_data['pac_cost']; ?></span></h3>
                                <a class="signup" href="<?php echo site_url('user/Bank/bank_payment/'.@$ypack_data['pac_id']); ?>">Subscribe</a>         
                                <ul>
                                <li>TOTAL VISITOR</li>
                                            <li>RANK IN INDIA</li>
                                            <li>RANK IN WORLD</li>
                                        <li>ONLINE VISITOR</li>    </ul> 
                            </div>
                        </div>
                          </div>
                            </div>
                             </div>
                    </div>
                </div>
         <!--chat-->
             <div class="main-section" id="chat_box">
    <div class="row border-chat">
        <div class="col-md-12 col-sm-12 col-xs-12 first-section">
            <div class="row">
                <div class="col-md-8 col-sm-6 col-xs-6 left-first-section">
                    <p id="chat_name" class="user_chat_box">Chat With Admin</p>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-6 right-first-section">
                    <a href=""><i class="fa fa-minus" aria-hidden="true"></i></a>
      			<!--<i class="fa fa-trash-o" onClick="chat_delete();"></i>-->      
                    
                    <!--<a href="#"><i class="fa fa-minus" aria-hidden="true"></i></a>-->
                   <!-- <a href="#"><i class="fa fa-clone" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-times" aria-hidden="true"></i></a>
                --></div>
            </div>
        </div>
    </div>
    <div class="row border-chat"> 
        <div class="col-md-12 col-sm-12 col-xs-12 second-section">
            <div class="chat-section">
                <ul id="conversation">
                   <!-- <li>
                        <div class="left-chat">
                            <img src="/demo/man01.png">
                            <p>Lorem ipsum dolor sit ameeserunt.
                            </p>
                            <span>2 min</span>
                        </div>
                    </li>
                    <li>
                        <div class="right-chat">
                            <img src="/demo/man02.png">
                            <p>Lorem ipsum dolor sit ameeserunt.</p>
                            <span>2 min</span>
                        </div>
                    </li>-->
                    
                   <!-- <li>
                        <div class="left-chat">
                            <img src="/demo/man01.png">
                            <p>Lorem ipsum dolor sit ameeserunt.</p>
                            <span>2 min</span>
                        </div>
                    </li>
                    <li>
                        <div class="right-chat">
                            <img src="/demo/man02.png">
                            <p>Lorem ipsum dolor sit ameeserunt.</p>
                            <span>2 min</span>
                        </div>
                    </li>
                    <li>
                        <div class="left-chat">
                            <img src="/demo/man01.png">
                            <p>Lorem ipsum dolor sit ameeserunt.</p>
                            <span>2 min</span>
                        </div>
                    </li>
                    <li>
                        <div class="right-chat">
                            <img src="/demo/man02.png">
                            <p>Lorem ipsum dolor sit ameeserunt.</p>
                            <span>2 min</span>
                        </div>
                    </li>
                    <li>
                        <div class="left-chat">
                            <img src="/demo/man01.png">
                            <p>Lorem ipsum dolor sit ameeserunt.</p>
                            <span>2 min</span>
                        </div>
                    </li>
                    <li>
                        <div class="right-chat">
                            <img src="/demo/man02.png">
                            <p>Lorem ipsum dolor sit ameeserunt.</p>
                            <span>2 min</span>
                        </div>
                    </li>-->
                </ul>
            </div>
        </div>
    </div>
    <div class="row border-chat">
        <div class="col-md-12 col-sm-12 col-xs-12 third-section">
            <div class="text-bar">
                <input type="text" placeholder="Write messege" id="input_chat"><a onClick="imsg_send();"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>
            
            </div>
            
        </div>
    </div>
</div>
                
                
        
                
                
     
                
                
                
                <!-- Row -->
                <!-- Row -->
               <!-- <div class="row">
                    <!-- Column -->
                  
                  
                  <!--  <div class="col-lg-8">
                        <div class="card">
                            <div class="card-body">
                                <ul class="list-inline pull-right">
                                    <li>
                                        <h6 class="text-muted"><i class="fa fa-circle m-r-5" style="color:#51bdff"></i>2015</h6>
                                    </li>
                                    <li>
                                        <h6 class="text-muted"><i class="fa fa-circle m-r-5" style="color:#11a0f8"></i>2016</h6>
                                    </li>
                                    <li>
                                        <h6 class="text-muted"><i class="fa fa-circle m-r-5 text-info"></i>2017</h6>
                                    </li>
                                </ul>
                                <h4 class="card-title">Total Revenue</h4>
                                <div class="clear"></div>
                                <div class="total-sales" style="height: 365px;"></div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!--<div class="col-lg-4">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Sales Prediction</h4>
                                        <div class="d-flex flex-row">
                                            <div class="align-self-center">
                                                <span class="display-6 text-primary">$3528</span>
                                                <h6 class="text-muted">10% Increased</h6>
                                                <h5>(150-165 Sales)</h5>
                                            </div>
                                            <div class="ml-auto">
                                                <div id="gauge-chart" style=" width:150px; height:150px;"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Sales Difference</h4>
                                        <div class="d-flex flex-row">
                                            <div class="align-self-center">
                                                <span class="display-6 text-success">$4316</span>
                                                <h6 class="text-muted">10% Increased</h6>
                                                <h5>(150-165 Sales)</h5>
                                            </div>
                                            <div class="ml-auto">
                                                <div class="ct-chart" style="width:120px; height: 120px;"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
               <!-- </div>
                <!-- Row -->
                <!--<div class="row">
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Total Visits</h4>
                                <div id="visitfromworld" style="width:100%!important; height:415px"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Browser Stats</h4>
                                <table class="table browser m-t-30 no-border">
                                    <tbody>
                                        <tr>
                                            <td style="width:40px"><img src="<?php echo base_url('assets/user/image/browser/chrome-logo.png');?>" alt=logo /></td>
                                            <td>Google Chrome</td>
                                            <td class="text-right"><span class="label label-light-info">23%</span></td>
                                        </tr>
                                        <tr>
                   <td><img src="<?php echo base_url('assets/user/image/browser/firefox-logo.png');?>" alt=logo /></td>
                                            <td>Mozila Firefox</td>
                                            <td class="text-right"><span class="label label-light-success">15%</span></td>
                                        </tr>
                                        <tr>
                                            <td><img src="<?php echo base_url('assets/user/image/browser/safari-logo.png');?>" alt=logo /></td>
                                            <td>Apple Safari</td>
                                            <td class="text-right"><span class="label label-light-primary">07%</span></td>
                                        </tr>
                                        <tr>
                                            <td><img src="<?php echo base_url('assets/user/image/browser/internet-logo.png');?>" alt=logo /></td>
                                            <td>Internet Explorer</td>
                                            <td class="text-right"><span class="label label-light-warning">09%</span></td>
                                        </tr>
                                        <tr>
                                            <td><img src="<?php echo base_url('assets/user/image/browser/opera-logo.png');?>" alt=logo /></td>
                                            <td>Opera mini</td>
                                            <td class="text-right"><span class="label label-light-danger">23%</span></td>
                                        </tr>
                                        <tr>
                                            <td><img src="<?php echo base_url('assets/user/image/browser/internet-logo.png');?>" alt=logo /></td>
                                            <td>Microsoft edge</td>
                                            <td class="text-right"><span class="label label-light-megna">09%</span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Row -->
               <!-- <div class="row">
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-body">
                                <div id="calendar"></div>
                                <!-- BEGIN MODAL -->
                   <!--             <div class="modal fade none-border" id="my-event">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title"><strong>Add Event</strong></h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            </div>
                                            <div class="modal-body"></div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-white waves-effect" data-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-success save-event waves-effect waves-light">Create event</button>
                                                <button type="button" class="btn btn-danger delete-event waves-effect waves-light" data-dismiss="modal">Delete</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Modal Add Category -->
                       <!--         <div class="modal fade none-border" id="add-new-event">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title"><strong>Add</strong> a category</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            </div>
                                            <div class="modal-body">
                                                <form>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <label class="control-label">Category Name</label>
                                                            <input class="form-control form-white" placeholder="Enter name" type="text" name="category-name" />
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label class="control-label">Choose Category Color</label>
                                                            <select class="form-control form-white" data-placeholder="Choose a color..." name="category-color">
                                                                <option value="success">Success</option>
                                                                <option value="danger">Danger</option>
                                                                <option value="info">Info</option>
                                                                <option value="primary">Primary</option>
                                                                <option value="warning">Warning</option>
                                                                <option value="inverse">Inverse</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger waves-effect waves-light save-category" data-dismiss="modal">Save</button>
                                                <button type="button" class="btn btn-white waves-effect" data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- END MODAL -->
                          <!--  </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex flex-row">
                                    <div class=""><img src="<?php echo base_url('assets/user/image/users/1.jpg');?>" alt="user" class="img-circle" width="100"></div>
                                    <div class="p-l-20">
                                        <h3 class="font-medium">Daniel Kristeen</h3>
                                        <h6>UIUX Designer</h6>
                                        <button class="btn btn-success"><i class="ti-plus"></i> Follow</button>
                                    </div>
                                </div>
                                <div class="row m-t-40">
                                    <div class="col b-r">
                                        <h2 class="font-light">14</h2>
                                        <h6>Photos</h6></div>
                                    <div class="col b-r">
                                        <h2 class="font-light">54</h2>
                                        <h6>Videos</h6></div>
                                    <div class="col">
                                        <h2 class="font-light">145</h2>
                                        <h6>Tasks</h6></div>
                                </div>
                            </div>
                            <div>
                                <hr>
                            </div>
                            <div class="card-body">
                                <p class="text-center aboutscroll" style="overflow: hidden; width: auto; height: 80px;">
                                    Lorem ipsum dolor sit ametetur adipisicing elit, sed do eiusmod tempor incididunt adipisicing elit, sed do eiusmod tempor incididunLorem ipsum dolor sit ametetur adipisicing elit, sed do eiusmod tempor incididuntt
                                </p>
                                <ul class="list-icons d-flex flex-item text-center p-t-10">
                                    <li class="col"><a href="javascript:void(0)" data-toggle="tooltip" title="" data-original-title="Website"><i class="fa fa-globe font-20"></i></a></li>
                                    <li class="col"><a href="javascript:void(0)" data-toggle="tooltip" title="" data-original-title="twitter"><i class="fa fa-twitter font-20"></i></a></li>
                                    <li class="col"><a href="javascript:void(0)" data-toggle="tooltip" title="" data-original-title="Facebook"><i class="fa fa-facebook-square font-20"></i></a></li>
                                    <li class="col"><a href="javascript:void(0)" data-toggle="tooltip" title="" data-original-title="Youtube"><i class="fa fa-youtube-play font-20"></i></a></li>
                                    <li class="col"><a href="javascript:void(0)" data-toggle="tooltip" title="" data-original-title="Linkd-in"><i class="fa fa-linkedin-square font-20"></i></a></li>
                                </ul>
                            </div>
                            <div>
                                <hr>
                            </div>
                            <div class="card-body">
                                <div class="row text-center">
                                    <div class="col-12 m-b-30">
                                        <h4>Followers</h4></div>
                                    <div class="col"><span class="round" data-toggle="tooltip" title="Varun"><img src="<?php echo base_url('assets/user/image/users/4.jpg');?>" alt="user" width="45"/></span></div>
                                    <div class="col"><span class="round" data-toggle="tooltip" title="Alia"><img src="<?php echo base_url('assets/user/image/users/2.jpg');?>" alt="user" width="45"/></span></div>
                                    <div class="col"><span class="round" data-toggle="tooltip" title="Akshay"><img src="<?php echo base_url('assets/user/image/users/3.jpg');?>" alt="user" width="45"/></span></div>
                                    <div class="col"><span class="round" data-toggle="tooltip" title="More">5+</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Row -->
                <!-- Row -->
                <!--<div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Recent Chats</h4>
                                <div class="chat-box">
                                    <!--chat Row -->
                    <!--                <ul class="chat-list">
                                        <!--chat Row -->
                        <!--                <li>
                                            <div class="chat-img"><img src="<?php echo base_url('assets/user/image/users/1.jpg');?>" alt="user" /></div>
                                            <div class="chat-content">
                                                <h5>James Anderson</h5>
                                                <div class="box bg-light-info">Lorem Ipsum is simply dummy text of the printing & type setting industry.</div>
                                            </div>
                                            <div class="chat-time">10:56 am</div>
                                        </li>
                                        <!--chat Row -->
                            <!--            <li>
                                            <div class="chat-img"><img src="<?php echo base_url('assets/user/image/users/2.jpg');?>" alt="user" /></div>
                                            <div class="chat-content">
                                                <h5>Bianca Doe</h5>
                                                <div class="box bg-light-success">It’s Great opportunity to work.</div>
                                            </div>
                                            <div class="chat-time">10:57 am</div>
                                        </li>
                                        <!--chat Row -->
                    <!--                    <li class="odd">
                                            <div class="chat-content">
                                                <div class="box bg-light-inverse">I would love to join the team.</div>
                                                <br/>
                                            </div>
                                            <div class="chat-time">10:58 am</div>
                                        </li>
                                        <!--chat Row -->
                       <!--                 <li class="odd">
                                            <div class="chat-content">
                                                <div class="box bg-light-inverse">Whats budget of the new project.</div>
                                                <br/>
                                            </div>
                                            <div class="chat-time">10:59 am</div>
                                        </li>
                                        <!--chat Row -->
                           <!--             <li>
                                            <div class="chat-img"><img src="<?php echo base_url('assets/user/image/users/3.jpg');?>" alt="user" /></div>
                                            <div class="chat-content">
                                                <h5>Angelina Rhodes</h5>
                                                <div class="box bg-light-primary">Well we have good budget for the project</div>
                                            </div>
                                            <div class="chat-time">11:00 am</div>
                                        </li>
                                        <!--chat Row -->
             <!--                       </ul>
                                </div>
                            </div>
                            <div class="card-body b-t">
                                <div class="row">
                                    <div class="col-8">
                                        <textarea placeholder="Type your message here" class="form-control b-0"></textarea>
                                    </div>
                                    <div class="col-4 text-right">
                                        <button type="button" class="btn btn-info btn-circle btn-lg"><i class="fa fa-paper-plane-o"></i> </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Recent Messages</h4>
                                <div class="message-box">
                                    <div class="message-widget">
                                        <!-- Message -->
                 <!--                       <a href="#">
                                            <div class="user-img"> <img src="<?php echo base_url('assets/user/image/users/1.jpg');?>" alt="user" class="img-circle"> <span class="profile-status online pull-right"></span> </div>
                                            <div class="mail-contnet">
                                                <h5>Pavan kumar</h5> <span class="mail-desc">Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum has been.</span> <span class="time">9:30 AM</span> </div>
                                        </a>
                                        <!-- Message -->
                     <!--                   <a href="#">
                                            <div class="user-img"> <img src="<?php echo base_url('assets/user/image/users/2.jpg');?>" alt="user" class="img-circle"> <span class="profile-status busy pull-right"></span> </div>
                                            <div class="mail-contnet">
                                                <h5>Sonu Nigam</h5> <span class="mail-desc">I've sung a song! See you at</span> <span class="time">9:10 AM</span> </div>
                                        </a>
                                        <!-- Message -->
                         <!--               <a href="#">
                                            <div class="user-img"> <span class="round">A</span> <span class="profile-status away pull-right"></span> </div>
                                            <div class="mail-contnet">
                                                <h5>Arijit Sinh</h5> <span class="mail-desc">Simply dummy text of the printing and typesetting industry.</span> <span class="time">9:08 AM</span> </div>
                                        </a>
                                        <!-- Message -->
                         <!--               <a href="#">
                                            <div class="user-img"> <img src="<?php echo base_url('assets/user/image/users/4.jpg');?>" alt="user" class="img-circle"> <span class="profile-status offline pull-right"></span> </div>
                                            <div class="mail-contnet">
                                                <h5>Pavan kumar</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:02 AM</span> </div>
                                        </a>
                                        <!-- Message -->
                          <!--              <a href="#">
                                            <div class="user-img"> <img src="<?php echo base_url('assets/user/image/users/1.jpg');?>" alt="user" class="img-circle"> <span class="profile-status online pull-right"></span> </div>
                                            <div class="mail-contnet">
                                                <h5>Pavan kumar</h5> <span class="mail-desc">Welcome to the Elite Admin</span> <span class="time">9:30 AM</span> </div>
                                        </a>
                                        <!-- Message -->
                              <!--          <a href="#">
                                            <div class="user-img"> <img src="<?php echo base_url('assets/user/image/users/2.jpg');?>" alt="user" class="img-circle"> <span class="profile-status busy pull-right"></span> </div>
                                            <div class="mail-contnet">
                                                <h5>Sonu Nigam</h5> <span class="mail-desc">I've sung a song! See you at</span> <span class="time">9:10 AM</span> </div>
                                        </a>
                                        <!-- Message -->
                                <!--    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Row -->
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
             <!--   <div class="right-sidebar">
                    <div class="slimscrollright">
                        <div class="rpanel-title"> Service Panel <span><i class="ti-close right-side-toggle"></i></span> </div>
                        <div class="r-panel-body">
                            <ul id="themecolors" class="m-t-20">
                                <li><b>With Light sidebar</b></li>
                                <li><a href="javascript:void(0)" data-theme="default" class="default-theme">1</a></li>
                                <li><a href="javascript:void(0)" data-theme="green" class="green-theme">2</a></li>
                                <li><a href="javascript:void(0)" data-theme="red" class="red-theme">3</a></li>
                                <li><a href="javascript:void(0)" data-theme="blue" class="blue-theme working">4</a></li>
                                <li><a href="javascript:void(0)" data-theme="purple" class="purple-theme">5</a></li>
                                <li><a href="javascript:void(0)" data-theme="megna" class="megna-theme">6</a></li>
                                <li class="d-block m-t-30"><b>With Dark sidebar</b></li>
                                <li><a href="javascript:void(0)" data-theme="default-dark" class="default-dark-theme">7</a></li>
                                <li><a href="javascript:void(0)" data-theme="green-dark" class="green-dark-theme">8</a></li>
                                <li><a href="javascript:void(0)" data-theme="red-dark" class="red-dark-theme">9</a></li>
                                <li><a href="javascript:void(0)" data-theme="blue-dark" class="blue-dark-theme">10</a></li>
                                <li><a href="javascript:void(0)" data-theme="purple-dark" class="purple-dark-theme">11</a></li>
                                <li><a href="javascript:void(0)" data-theme="megna-dark" class="megna-dark-theme ">12</a></li>
                            </ul>
                            <ul class="m-t-20 chatonline">
                                <li><b>Chat option</b></li>
                                <li>
                                    <a href="javascript:void(0)"><img src="<?php echo base_url('assets/user/image/users/1.jpg');?>" alt="user-img" class="img-circle"> <span>Varun Dhavan <small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="<?php echo base_url('assets/user/image/users/2.jpg');?>" alt="user-img" class="img-circle"> <span>Genelia Deshmukh <small class="text-warning">Away</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="<?php echo base_url('assets/user/image/users/3.jpg');?>" alt="user-img" class="img-circle"> <span>Ritesh Deshmukh <small class="text-danger">Busy</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="<?php echo base_url('assets/user/image/users/4.jpg');?>" alt="user-img" class="img-circle"> <span>Arijit Sinh <small class="text-muted">Offline</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="<?php echo base_url('assets/user/image/users/5.jpg');?>" alt="user-img" class="img-circle"> <span>Govinda Star <small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="<?php echo base_url('assets/user/image/users/6.jpg');?>" alt="user-img" class="img-circle"> <span>John Abraham<small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="<?php echo base_url('assets/user/image/users/7.jpg');?>" alt="user-img" class="img-circle"> <span>Hritik Roshan<small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="<?php echo base_url('assets/user/image/users/8.jpg');?>" alt="user-img" class="img-circle"> <span>Pwandeep rajan <small class="text-success">online</small></span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
           <!-- </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- =========================================-->
            <?php  $this->load->view('user/Footer_user'); ?>
			
         
         
         
         
         
         
            
   <!-- <script type="text/javascript">
				$(document).ready(function(e) {
                   // $('#mgnt_site').hide();
					var val_trial = '<?php //echo @$trial_true; ?>';
						alert(val_trial);
					if(val_trial == 'true')
					{
							alert(val_trial);
							//$('#mgnt_site').hide();
							$('#mgnt_site').prop("disabled", true);
							
							$('#mgnt_site').mouseover(function(){
								$('#mgnt_site a').css('cursor','not-allowed');
							});
							
					}
					else
					{
						alert(val_trial);
						$('#mgnt_site').show();
					}
					
					/*$('#ftrial_btn').click(function(){
						/*var val_trial='<?php //echo @$trial_true; ?>'
						alert(val_trial);
							//$('#mgnt_site').show();
						});*/
                });
            </script>-->
			
			
			
			
			
			
			
			
			
			
			
			
			