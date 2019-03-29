<?php
 $this->load->view('user/Header_user');
 
?><head>
  <style>
  	.pdeg{
			background-color:red;
			color:white;
			border-radius:5px;
			padding:2px 10px !important;
		}
	#eye_pass{
			position:absolute;
			top: 10px;
   		   right: 10px;
		}
		
.container-fluid{padding-top:85px;}
  </style>
</head>

 




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
                        <h3 class="text-themecolor m-b-0 m-t-0">Profile</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo site_url('user/Dashboard/'); ?>">Home</a></li>
                            <li class="breadcrumb-item active">Profile</li>
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
                    </div>-->
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <!-- Row -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-4 col-xlg-3 col-md-5">
                        <div class="card">
                        <?php //echo $image; ?>
                            <div class="card-body">
                                <center class="m-t-30"> <img src="<?php if(@$image != ''){echo base_url('assets/user/image/'.@$image); }else{echo base_url('assets/user/image/default_profile.jpg');}?>" class="img-circle" width="150" height="150" />
                                    <h4 class="card-title m-t-10"><?php echo @$name;?></h4>
                                    <!--<h6 class="card-subtitle">Accoubts Manager Amix corp</h6>-->
                                 <!--  <div class="row text-center justify-content-md-center">
                                        <div class="col-4"><a href="javascript:void(0)" class="link"><i class="icon-people"></i> <font class="font-medium">254</font></a></div>
                                        <div class="col-4"><a href="javascript:void(0)" class="link"><i class="icon-picture"></i> <font class="font-medium">54</font></a></div>
                                    </div>-->
                                </center>
                            </div>
                            <div>
                                <hr> </div>
                            <div class="card-body"> <small class="text-muted">Email address </small>
                                <h6><?php echo @$email;?></h6> <small class="text-muted p-t-30 db">Phone</small>
                                <h6>+<?php echo @$mobile; ?></h6> <!--<small class="text-muted p-t-30 db">Address</small>-->
                               <!-- <h6>71 Pilgrim Avenue Chevy Chase, MD 20815</h6>-->
                              <!--  <div class="map-box">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d470029.1604841957!2d72.29955005258641!3d23.019996818380896!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e848aba5bd449%3A0x4fcedd11614f6516!2sAhmedabad%2C+Gujarat!5e0!3m2!1sen!2sin!4v1493204785508" width="100%" height="150" frameborder="0" style="border:0" allowfullscreen></iframe>
                                </div>--> <small class="text-muted p-t-30 db">Social Profile</small>
                                <br/>
                                <a href="https://www.facebook.com/WebAnalysis-563385004022701/" target="_blank"><button class="btn btn-circle btn-secondary"><i class="fa fa-facebook"></i></button></a>
                                <a href="https://twitter.com/web_analysis_09" target="_blank"><button class="btn btn-circle btn-secondary" ><i class="fa fa-twitter"></i></button></a>
                               <a href="https://www.instagram.com/web_analysis/" target="_blank"> <button class="btn btn-circle btn-secondary"><i class="fa fa-instagram" ></i></button></a>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                  <!--  <div class="col-lg-8 col-xlg-9 col-md-7">
                        <div class="card">
                            <!-- Nav tabs -->
                           <!-- <ul class="nav nav-tabs profile-tab" role="tablist">
                                <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#home" role="tab">Timeline</a> </li>
                                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#profile" role="tab">Profile</a> </li>
                                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#settings" role="tab">Settings</a> </li>
                            </ul>-->
                            <!-- Tab panes -->
                          <!--  <div class="tab-content">
                                <div class="tab-pane active" id="home" role="tabpanel">
                                    <div class="card-body">
                                        <div class="profiletimeline">
                                            <div class="sl-item">
                                                <div class="sl-left"> <img src="../assets/images/users/1.jpg" alt="user" class="img-circle" /> </div>
                                                <div class="sl-right">
                                                    <div><a href="#" class="link">John Doe</a> <span class="sl-date">5 minutes ago</span>
                                                        <p>assign a new task <a href="#"> Design weblayout</a></p>
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-6 m-b-20"><img src="../assets/images/big/img1.jpg" class="img-responsive radius" /></div>
                                                            <div class="col-lg-3 col-md-6 m-b-20"><img src="../assets/images/big/img2.jpg" class="img-responsive radius" /></div>
                                                            <div class="col-lg-3 col-md-6 m-b-20"><img src="../assets/images/big/img3.jpg" class="img-responsive radius" /></div>
                                                            <div class="col-lg-3 col-md-6 m-b-20"><img src="../assets/images/big/img4.jpg" class="img-responsive radius" /></div>
                                                        </div>
                                                        <div class="like-comm"> <a href="javascript:void(0)" class="link m-r-10">2 comment</a> <a href="javascript:void(0)" class="link m-r-10"><i class="fa fa-heart text-danger"></i> 5 Love</a> </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="sl-item">
                                                <div class="sl-left"> <img src="../assets/images/users/2.jpg" alt="user" class="img-circle" /> </div>
                                                <div class="sl-right">
                                                    <div> <a href="#" class="link">John Doe</a> <span class="sl-date">5 minutes ago</span>
                                                        <div class="m-t-20 row">
                                                            <div class="col-md-3 col-xs-12"><img src="../assets/images/big/img1.jpg" alt="user" class="img-responsive radius" /></div>
                                                            <div class="col-md-9 col-xs-12">
                                                                <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. </p> <a href="#" class="btn btn-success"> Design weblayout</a></div>
                                                        </div>
                                                        <div class="like-comm m-t-20"> <a href="javascript:void(0)" class="link m-r-10">2 comment</a> <a href="javascript:void(0)" class="link m-r-10"><i class="fa fa-heart text-danger"></i> 5 Love</a> </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="sl-item">
                                                <div class="sl-left"> <img src="../assets/images/users/3.jpg" alt="user" class="img-circle" /> </div>
                                                <div class="sl-right">
                                                    <div><a href="#" class="link">John Doe</a> <span class="sl-date">5 minutes ago</span>
                                                        <p class="m-t-10"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper </p>
                                                    </div>
                                                    <div class="like-comm m-t-20"> <a href="javascript:void(0)" class="link m-r-10">2 comment</a> <a href="javascript:void(0)" class="link m-r-10"><i class="fa fa-heart text-danger"></i> 5 Love</a> </div>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="sl-item">
                                                <div class="sl-left"> <img src="../assets/images/users/4.jpg" alt="user" class="img-circle" /> </div>
                                                <div class="sl-right">
                                                    <div><a href="#" class="link">John Doe</a> <span class="sl-date">5 minutes ago</span>
                                                        <blockquote class="m-t-10">
                                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                                                        </blockquote>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--second tab-->
                               <!-- <div class="tab-pane" id="profile" role="tabpanel">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-3 col-xs-6 b-r"> <strong>Full Name</strong>
                                                <br>
                                                <p class="text-muted">Johnathan Deo</p>
                                            </div>
                                            <div class="col-md-3 col-xs-6 b-r"> <strong>Mobile</strong>
                                                <br>
                                                <p class="text-muted">(123) 456 7890</p>
                                            </div>
                                            <div class="col-md-3 col-xs-6 b-r"> <strong>Email</strong>
                                                <br>
                                                <p class="text-muted">johnathan@admin.com</p>
                                            </div>
                                            <div class="col-md-3 col-xs-6"> <strong>Location</strong>
                                                <br>
                                                <p class="text-muted">London</p>
                                            </div>
                                        </div>
                                        <hr>
                                        <p class="m-t-30">Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries </p>
                                        <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                        <h4 class="font-medium m-t-30">Skill Set</h4>
                                        <hr>
                                        <h5 class="m-t-30">Wordpress <span class="pull-right">80%</span></h5>
                                        <div class="progress">
                                            <div class="progress-bar bg-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width:80%; height:6px;"> <span class="sr-only">50% Complete</span> </div>
                                        </div>
                                        <h5 class="m-t-30">HTML 5 <span class="pull-right">90%</span></h5>
                                        <div class="progress">
                                            <div class="progress-bar bg-info" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width:90%; height:6px;"> <span class="sr-only">50% Complete</span> </div>
                                        </div>
                                        <h5 class="m-t-30">jQuery <span class="pull-right">50%</span></h5>
                                        <div class="progress">
                                            <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:50%; height:6px;"> <span class="sr-only">50% Complete</span> </div>
                                        </div>
                                        <h5 class="m-t-30">Photoshop <span class="pull-right">70%</span></h5>
                                        <div class="progress">
                                            <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%; height:6px;"> <span class="sr-only">50% Complete</span> </div>
                                        </div>
                                    </div>
                                </div>-->
                                <div class="tab-pane" id="settings" role="tabpanel">
                                    <div class="card-body">
                                        <form class="form-horizontal form-material" method="post" enctype="multipart/form-data">
                                            <div class="form-group">
                                                <label class="col-md-12">Name</label>
                                                <div class="col-md-12">
                                                    <input type="text" value="<?php echo @$name; ?>" class="form-control form-control-line"  name="name" <?php if(form_error('name')){ echo 'autofocus' ;} ?> >
                                                     <?php if(form_error('name')){echo '<div class="pdeg">'.form_error('name').'</div>'; }?>
                                                   
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="example-email" class="col-md-12">Email</label>
                                                <div class="col-md-12">
                                                    <input type="email" value="<?php echo @$email; ?>" class="form-control form-control-line" name="email" id="example-email" <?php if(form_error('email')){ echo 'autofocus' ;} ?>>
                                                    <?php if(!form_error('name') && form_error('email')){echo '<div class="pdeg">'.form_error('email').'</div>'; }?>
                                                </div>
                                            </div>
                                          
                                           
                                          
                                            <div class="form-group">
                                                <label class="col-md-12">Phone No</label>
                                                <div class="col-md-12">
                                                    <input type="text" value="<?php echo @$mobile;?>" class="form-control form-control-line" name="mobile" <?php if(form_error('mobile')){ echo 'autofocus' ;} ?>>
                                                     <?php if(!form_error('password') && form_error('mobile'))
					{
						echo '<div class="callout callout-danger">'.form_error('mobile').'</div>';
					}?>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-md-12">
                                                   
                                                <div class="form-group">
                                                    <label class="control-label">Gender</label>
                                                    <div class="form-check">
                                                        <label class="custom-control custom-radio">
                                                            <input id="radio1" value="male" name="gender" type="radio" <?php if(@$gender == 'male'){ echo "checked"; } ?> checked class="custom-control-input">
                                                            <span class="custom-control-indicator"></span>
                                                            <span class="custom-control-description">Male</span>
                                                        </label>
                                                        <label class="custom-control custom-radio">
                                                            <input id="radio2" value="female" name="gender" type="radio" class="custom-control-input" <?php if(@$gender == 'female'){ echo "checked"; } ?>>
                                                            <span class="custom-control-indicator"></span>
                                                            <span class="custom-control-description">Female</span>
                                                        </label>
                                                    </div>
                                               <?php if(!form_error('mobile') && form_error('gender'))
					 {
							echo '<div class="callout callout-danger">'.form_error('gender').'</div>'; 
					  }
					 ?>
                                            </div>
                                                </div>
                                            </div>
                                             <div class="form-group">
                                                <label class="col-sm-12">Choose Your Country</label>
                                                
                                                <div class="col-sm-12">
                                                    <select class="form-control form-control-line" name="country" <?php if(form_error('country')){ echo 'autofocus' ;} ?>>
                                                   
                                                        <option value="">Select Country</option>
                                                      <?php foreach(@$con_data as $row){?>
                                                        <option value="<?php echo $row['id']; ?>" <?php if($row['id'] == @$country){ echo "selected"; }?>><?php echo $row['country_name']; }?></option>
                                                        
                                                    </select>
                                                </div>
                                                 <?php if(!form_error('gender') && form_error('country'))
					{
						echo '<div class="pdeg">'.form_error('country').'</div>';	
					}
					?>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label class="col-md-12">Change Profile Image</label>
                                                <div class="col-md-12">
                                                    <input type="file" name="image" class="form-control form-control-line" <?php if(@$image_err){ echo 'autofocus'; }?> >
                                                    
                                                </div>
                                                <label style="color:#F00">*Image Size Should Be Less Than ' 1 ' MB.</label>
                                                <?php 
						if(!form_error('country') && isset($file_err))
						{
							echo '<div class="pdeg">'.$file_err.'</div>';
						}
						elseif(!form_error('country') && @$image_err)
						{
							echo '<div class="pdeg">'.@$image_err.'</div>';	
						}
						?>
                        
                                            </div>
                                           
                                     
                                        
                                            <div class="form-group">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <input type="submit" value="Update Profile" class="btn btn-success" name="profile_update">
                                                </div>
                                                </form>
                                                <div class="col-sm-3">
                                                <button type="button" id="change-password-btn" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Change Password
</button>
                                                </div>
                                                </div>
                                            </div>
                                         <!--model-->
                                         
                                         

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Reset Password</h5>
        <button type="button" class="close"  data-dismiss="modal" aria-label="Close" id="mdlclose">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <form method="post">
 <!-- <div class="form-row">-->
   <!-- <div class="form-group col-md-6">
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control"  id="inputEmail4" placeholder="Email">
    </div>-->
    <div class="form-group" style="position:relative">
      
      <input type="password" class="form-control" name="o_password" id="oldpassword" placeholder="Old Password" required >
      
      <i class="fa fa-eye field-icon toggle-password eye_pass_old" id="eye_pass"></i>
      <?php if(@$old_error){echo '<div class="alert alert-danger">'.@$old_error.'</div>';} ?>
    </div>
  <!--</div>-->
  <div class="form-group" style="position:relative">
   
    <input type="password" class="form-control" id="npassword" name="n_password" placeholder="New Password 8 to 12 Numeric & Alpha Numeric Only"  >
     <i class="fa fa-eye field-icon toggle-password eye_pass_new" id="eye_pass"></i>
    <?php if(form_error('n_password')){ echo '<div class="alert alert-danger">'.form_error('n_password').'</div>'; }?>
  </div>
  <div class="form-group" style="position:relative">
   
    <input type="password" class="form-control" name="r_password" id="conpassword" placeholder="Repeat New Password" >
     <i class="fa fa-eye field-icon toggle-password eye_pass_repeat" id="eye_pass"></i>
    <?php if(!form_error('o_password') && !form_error('n_password') && form_error('r_password')){echo '<div class="alert alert-danger">'.form_error('r_password').'</div>'; }?>
  </div>
<!--  <button type="submit" class="btn btn-primary">Submit </button>
-->    </div>
      
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal" id="model_close" >Close</button>
        <input type="submit" class="btn btn-primary" value="Save changes" id="save_model" name="change_password">
      </div>
      

    </div>
  </div>
</div>
                                         
                                         
                                         <!---->   
                                            
                                         
                                            
                                       </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>
                <!-- Row -->
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- =====================================-->




<?php
$this->load->view('user/Footer_user');
?>
<script type="text/javascript">
$(document).ready(function(){

	
$('#save_model').click(function(){
		//window.onload();
	});
	
	$('#mdlclose').click(function (){
			//alert('success');
			window.location = '<?php echo site_url('user/Profile/update_user');?>';
		}); 	
		
	$('#model_close').click(function (){
		window.location = '<?php echo site_url('user/Profile/update_user');?>';
		});

	 $(document).keyup(function(e) {
     if (e.keyCode == 27) { // escape key maps to keycode `27`
        // <DO YOUR WORK HERE>
		window.location = '<?php echo site_url('user/Profile/update_user');?>';
    		}	
		});
									/* Start for change the type of input password */
		$('.eye_pass_old').mouseover(function(){
			
			 $('#oldpassword').attr('type', 'text');		
			$('.eye_pass_old').css('cursor','pointer');
		});
		
		$('.eye_pass_old').mouseleave(function(){
			
			 $('#oldpassword').attr('type', 'password');		
		
		});
		
		$('.eye_pass_new').mouseover(function(){
				
			 $('#npassword').attr('type', 'text');	
			 $('.eye_pass_new').css('cursor','pointer');	
			
		});
		
		$('.eye_pass_new').mouseleave(function(){
			
			 $('#npassword').attr('type', 'password');		
			
		});
		
		$('.eye_pass_repeat').mouseover(function(){
				
			$('#conpassword').attr('type', 'text');		
			$('.eye_pass_repeat').css('cursor','pointer');
		});
		
		$('.eye_pass_repeat').mouseleave(function(){
			
			 $('#conpassword').attr('type', 'password');		
			
		});	
		
		/* End for change the type of input password */
		
$(function () {
var change_err = '<?php echo @$old_error; ?>';	
var repeat_err = '<?php if(form_error('r_password')) {echo 'true'; } ?>';
var max_num = '<?php if(form_error('n_password')) {echo 'true'; } ?>';
		

if(change_err!='' || repeat_err != '' || max_num != '' ){
	
	$('#change-password-btn').trigger('click');
		
}


  $('[data-toggle="popover"]').popover();
});

$('.popover-dismiss').popover({
  trigger: 'focus'
});

$(function () {
  $('.example-popover').popover({
    container: 'body'
  });
});
});
  </script>
  
