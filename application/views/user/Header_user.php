<?php

if($this->session->userdata('user')!='')
{
	$id=$this->session->userdata('user');
	$data=$this->User_model->get_record($id);
}

?>

<?php 

		@$qrr=$this->db->query("select admin.image as ad_img,admin.name as ad_name,message.message as msg,TIME(message.send_time) as send_time from admin,message where message.user_id='$id' and admin.id=message.admin_id");
		
		@$user_num_msg=$qrr->num_rows();
		
		@$user_msg=$qrr->result_array();
		//$user_num_msg=$this->session->userdata('user_msgtotal');
		//$user_msg=$this->session->userdata('user_msg');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="20x20" href="<?php echo base_url('assets/user/image/logofi.png');?>">
    <title>Web Analysis</title>
    <!-- Bootstrap Core CSS -->
    
    <link href="<?php echo base_url('assets/user/plugins/bootstrap/css/bootstrap.min.css');?>" rel="stylesheet">
    <!-- chartist CSS -->
    <link href="<?php echo base_url('assets/user/plugins/chartist-js/dist/chartist.min.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/user/plugins/chartist-js/dist/chartist-init.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/user/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/user/plugins/css-chart/css-chart.css');?>" rel="stylesheet">
    <!-- Vector CSS -->
    <!--<link href="<?php echo base_url('assets/user/plugins/vectormap/jquery-jvectormap-2.0.2.css');?>" rel="stylesheet" />-->
    <!-- Calendar CSS -->
    <!--<link href="<?php echo base_url('assets/user/plugins/calendar/dist/fullcalendar.css');?>" rel="stylesheet" />-->
    <!-- Custom CSS -->
    <link href="<?php echo base_url('assets/user/scss/icons/font-awesome/css/font-awesome.min.css');?>" type="text/css" rel="stylesheet">
    <link href="<?php echo base_url('assets/user/css/styleone.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/user/css/price.css');?>" rel="stylesheet">
    
    
     <link href="<?php echo base_url('assets/user/css/model.css');?>" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="<?php echo base_url('assets/user/css/blue.css');?>" id="theme" rel="stylesheet">
    <link href="<?php echo base_url('assets/user/css/tablesaw.css');?>" id="theme" rel="stylesheet">
    
    
    
     <script src="<?php echo base_url('assets/user/js/popper.min.js'); ?>" type="text/javascript"></script>
     <script src="<?php echo base_url('assets/user/js/jquery-3.2.1.min.js'); ?>" type="text/javascript"></script>
	<script src="<?php echo base_url('assets/user/js/bootstrap.min.js'); ?>" type="text/javascript"></script>
    	
       
        <script src="<?php echo base_url('assets/user/js/canvasjs.min.js') ?>" type="text/javascript"></script>
        <script src="<?php echo base_url('assets/user/js/jquery.canvasjs.min.js') ?>" type="text/javascript"></script>

<!--<script>
    (function(i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function() {
            (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date();
        a = s.createElement(o), m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', '../../../../../www.google-analytics.com/analytics.js', 'ga');
    ga('create', 'UA-85622565-1', 'auto');
    ga('send', 'pageview');
    </script>-->
    
    
    <script type="text/javascript">
	
			function msg_clback(){
				<?php 
								@$seen_time = date("Y-m-d H:i:s");
								@$arr=array('status'=>1,'seen_time'=>$seen_time);
								@$this->db->where('user_id',$id);
								@$this->db->update('message',$arr);
							?>
								
						  
				}
				
				$(document).ready(function(){
                  	
						
					var val_trial = '<?php echo @$this->session->userdata('trial'); ?>';
						
					if(val_trial=='true')
					{
							
							$('#mgnt_site').show();
							$('#ftrial_btn').show();
							$('#pack_lbl').hide();
							//alert(val_trial);
							
							
					}
					else if(val_trial=='false')
					{
						
						$('#mgnt_site').attr('disabled');
						//$('#mgnt_site').attr('onclick','disabled');
							
							/*$('#mgnt_site').mouseover(function(){
								$('#mgnt_site a').css('cursor','not-allowed');
							});*/
						//alert(val_trial);
						$('#ftrial_btn').hide();
						$('#pack_lbl').show();
						$('#mgnt_site').hide();
						
						
					}
					
					// keyboard disable script
                /*$(document).keydown(function (event) {
                    if (event.keyCode == 123) { // Prevent F12
                        return false;
                    } else if (event.ctrlKey && event.shiftKey && event.keyCode == 73) { // Prevent Ctrl+Shift+I        
                        return false;
                    }else if (event.ctrlKey && event.keyCode == 85) { 
                        return false;
                    }
                });
                document.addEventListener('contextmenu', event => event.preventDefault());*/
               //  disable over
					
					
				  	
					
				  
                });
           
				
			</script>
         
         <script>
		 		
		 </script>
            <style>
			#main-wrapper{position:fixed;background-color:#FFF;z-index:1;}
			
			.main-header{position:fixed;width:100%;}

				.pagination {
					display: inline-block;
				}
				
				.pagination a {
					color: #333;
					float: left;
					padding: 8px 16px;
					text-decoration: none;
				}
				
				.pagination a.active {
					background-color: #09F;
					color: white;
					border-radius: 5px;
				}
				
				.pagination a:hover:not(.active) {
					background-color: #0CF;
					border-radius: 5px;
				}
				
			
			</style>
</head>

<body class="fix-header fix-sidebar card-no-border">

    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <!-- ============================================================== -->
                <!-- Logo -->
                <!-- ============================================================== -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="">
                        <!-- Logo icon -->
                        <b>
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <img src="<?php echo base_url('assets/user/image/logofi.png');?>" alt="homepage" class="dark-logo" style="width:60px; height:60px;"  />
                            <!-- Light Logo icon -->
                            <img src="<?php echo base_url('assets/user/image/logo-light-icon.png');?>" alt="homepage" class="light-logo"/>
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span>
                         <!-- dark Logo text -->
                         <img src="<?php echo base_url('assets/user/image/logo.jpg');?>" alt="homepage" class="dark-logo" style="width:120px;height:30px;"/>
                         <!-- Light Logo text -->    
                         <img src="<?php echo base_url('assets/user/image/logo-light-text.png');?>" class="light-logo" alt="homepage" /></span> </a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav mr-auto mt-md-0 ">
                        <!-- This is  -->
                        <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                        <li class="nav-item"> <a class="nav-link sidebartoggler hidden-sm-down text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="icon-arrow-left-circle"></i></a> </li>
                        <!-- ============================================================== -->
                        <!-- Comment -->
                        <!-- ============================================================== -->
                    <!--    <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted text-muted waves-effect waves-dark" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="mdi mdi-message"></i>
                                <div class="notify"> <span class="heartbit"></span> <span class="point"></span> </div>
                            </a>
                            <div class="dropdown-menu mailbox animated bounceInDown">
                                <ul>
                                    <li>
                                        <div class="drop-title">Notifications</div>
                                    </li>
                             
                                </ul>
                            </div>
                        </li>-->
                        <!-- ============================================================== -->
                        <!-- End Comment -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- Messages -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown seen_add" onClick="msg_clback();">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="#" id="2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="mdi mdi-bell"></i>
                                <div class="notify"> <span class="heartbit"></span> <span class="point"></span> </div>
                            </a>
                            <div class="dropdown-menu mailbox animated bounceInDown" aria-labelledby="2">
                                <ul>
                                    <li>
                                        <div class="drop-title">You have <?php echo @$user_num_msg; ?>  Notification</div>
                                    </li>
                               		<li>
                                        <div class="message-center">
                                        <?php if(@$user_msg){ foreach(@$user_msg as $row){?>
                                            
                                            <!-- Message -->
                                            <a href="#">
                                                <div class="user-img"> <img src="<?php echo base_url('assets/admin/image/'.@$row['ad_img']); ?>" alt="user" class="img-circle"> <span class="profile-status online pull-right"></span> </div>
                                                <div class="mail-contnet">
                                                    <h5> Admin : <?php echo @$row['ad_name']; ?></h5> <span class="mail-desc">Message : <?php echo @$row['msg']; ?></span> <span class="time">Send Time : <?php echo @$row['send_time'];?></span> </div>
                                            </a>
                                            
                                            <?php } } ?>
                                            <!-- Message -->
                                          
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>
                       
                    </ul>
                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav my-lg-0">
                    
                        <!--<li class="nav-item hidden-sm-down">
                          
                            <form class="app-search">
                                <input type="text" class="form-control" placeholder="Search for..."> <a class="srh-btn"><i class="ti-search"></i></a> </form>
                        </li>-->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            
                            <img src="<?php if(@$data['user_image'] != ''){echo base_url('assets/user/image/'.@$data['user_image']); }else{echo base_url('assets/user/image/default_profile.jpg');}?>" alt="user" class="profile-pic" height="30" width="30" />
                            </a>
                            <div class="dropdown-menu dropdown-menu-right animated flipInY">
                                <ul class="dropdown-user">
                                    <li>
                                        <div class="dw-user-box">
                                            <div class="u-img">
                                            <?php if(@$data['user_image'] != ''){?>
                                            <img src="<?php echo base_url('assets/user/image/'.@$data['user_image']);?>" alt="user"></div> <?php }else{?>
												  <img src="<?php echo base_url('assets/user/image/default_profile.jpg');?>" alt="user"></div>
											<?php } ?>
                                            <div class="u-text">
                                                <h4><?php echo @$data['user_name'];?></h4>
                                                <p class="text-muted"><?php echo @$data['user_email'];?></p><!--<a href="profile.html" class="btn btn-rounded btn-danger btn-sm">View Profile</a>--></div>
                                     
                                    <li role="separator" class="divider"></li>
                                    <li><a href="<?php echo site_url('user/Profile/update_user'); ?>"><i class="ti-user"></i> My Profile</a></li>
                                   <!-- <li><a href="#"><i class="ti-wallet"></i> My Balance</a></li>
                                    <li><a href="#"><i class="ti-email"></i> Inbox</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="#"><i class="ti-settings"></i> Account Setting</a></li>
                                    <li role="separator" class="divider"></li>-->
                                    <li><a href="<?php echo site_url('user/Dashboard/logout'); ?>" ><i class="fa fa-power-off"></i> Logout</a></li>
                                </ul>
                            </div>
                        </li>
                       <!-- <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="flag-icon flag-icon-in"></i></a>
         <div class="dropdown-menu  dropdown-menu-right animated bounceInDown"> 
         <a class="dropdown-item" href="#"><i class="flag-icon flag-icon-in"></i> India</a> 
         <a class="dropdown-item" href="#"><i class="flag-icon flag-icon-fr"></i> French</a> 			         <a class="dropdown-item" href="#"><i class="flag-icon flag-icon-us"> </i>US</a> 
         <a class="dropdown-item" href="#"><i class="flag-icon flag-icon-de"></i> Dutch</a> 
        </div>
                        </li>-->
                    </ul>
                </div>                                            		
            </nav>
        </header><!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- User profile -->
                <div class="user-profile">
                    <!-- User profile image -->
                    <div class="profile-img"> <img src="<?php if(@$data['user_image'] != ''){echo base_url('assets/user/image/'.@$data['user_image']);}else{echo base_url('assets/user/image/default_profile.jpg');}?>" alt="user"  height="50" width="50"/> </div>
                    <!-- User profile text-->
                    <div class="profile-text"> <a href="#" class="dropdown-toggle link u-dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"><?php echo @$data['user_name']; ?> <span class="caret"></span></a>
                        <div class="dropdown-menu animated flipInY">
                            <a href="<?php echo site_url('user/Profile/update_user'); ?>" class="dropdown-item"><i class="ti-user"></i> My Profile</a>
                            <!--<a href="#" class="dropdown-item"><i class="ti-wallet"></i> My Balance</a>
                            <a href="#" class="dropdown-item"><i class="ti-email"></i> Inbox</a>
                            <div class="dropdown-divider"></div> <a href="#" class="dropdown-item"><i class="ti-settings"></i> Account Setting</a>-->
                            <div class="dropdown-divider"></div> <a href="<?php echo site_url('user/Dashboard/logout'); ?>" class="dropdown-item"><i class="fa fa-power-off"></i> Logout</a>
                        </div>
                    </div>
                </div>
                <!-- End User profile text-->
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                       <!-- <li class="nav-small-cap">PERSONAL</li>-->
                        <li>
                            <a class="has-arrow" href="#" aria-expanded="false"><i class="mdi mdi-gauge"></i><span class="hide-menu">Dashboard </span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="<?php echo site_url('user/Dashboard/'); ?>">User Dashboard</a></li>
                               <!-- <li><a href="">Awesome Dashboard</a></li>-->
                                <!--<li><a href="index3.html">Classy Dashboard</a></li>
                                <li><a href="index4.html">Analytical Dashboard</a></li>
                                <li><a href="index5.html">Minimal Dashboard</a></li>
                            --></ul>
                        </li>
                        <li id="mgnt_site">
                            <a class="has-arrow" aria-expanded="false"><i class="fa fa-globe"></i><span class="hide-menu">Manage Website</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="<?php echo site_url('user/User_site/add'); ?>">Add Website</a></li>
                               <li><a href="<?php echo site_url('user/User_site/site_view');?>">view Website</a></li>
                              <!--  <li><a href="#">Support Ticket</a></li>
                                <li><a href="#">Contact / Employee</a></li>
                                <li><a href="#">Contact Grid</a></li>
                                <li><a href="app-contact-detail.html">Contact Detail</a></li>
                            --></ul>
                        </li>
                        
                        <li>
                            <a class="" href="<?php echo site_url('user/Sitevs/site'); ?>" aria-expanded="false"><i class="fa fa-bar-chart"></i><span class="hide-menu">Site Vs Site</span></a>
                            
                        </li>
                         <li>
                            <a class="" href="<?php echo site_url('user/Pagespeed/page_speed'); ?>" aria-expanded="false"><i class="fa fa-wrench"></i><span class="hide-menu">Page speed</span></a>
                            
                        </li>
                        
                      
                        
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
            <!-- Bottom points-->
            <div class="sidebar-footer">
                <!-- item-->
                <!--<a href="#" class="link" data-toggle="tooltip" title="Settings"><i class="ti-settings"></i></a>-->
                <!-- item-->
                <!--<a href="#" class="link" data-toggle="tooltip" title="Email"><i class="mdi mdi-gmail"></i></a>-->
                <!-- item-->
                <a href="<?php echo site_url('user/Dashboard/logout'); ?>" class="link" data-toggle="tooltip" title="Logout"><i class="mdi mdi-power"></i></a>
            </div>
            <!-- End Bottom points-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        </div>
        </body>
        </html>