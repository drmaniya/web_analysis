<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
    <!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
    <!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
    <!--[if IE 9]> <html class="no-js ie9 oldie" lang="en"> <![endif]-->
    <meta charset="utf-8">
    <!-- Set the viewport width to device width for mobile -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="Coming soon, Bootstrap, Bootstrap 3.0, Free Coming Soon, free coming soon, free template, coming soon template, Html template, html template, html5, Code lab, codelab, codelab coming soon template, bootstrap coming soon template">
    <title>LOGIN</title>
    
  <link rel="icon" type="image/png" sizes="20x20" href="<?php echo base_url('assets/admin/image/logofi.png');?>">
    <!-- ============ Google fonts ============ -->
    <link href='http://fonts.googleapis.com/css?family=EB+Garamond' rel='stylesheet'
        type='text/css' />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700,300,800'
        rel='stylesheet' type='text/css' />
    <!-- ============ Add custom CSS here ============ -->
    <link href="<?php echo base_url('assets/admin/css/bootstrap.min.css');?>" rel="stylesheet" type="text/css" />
      <link href="<?php echo base_url('assets/admin/css/style.css');?>" rel="stylesheet" type="text/css" />    
   
    <link href="<?php echo base_url('assets/admin/css/font-awesome.css');?>" rel="stylesheet" type="text/css" />
	
		<!-- j-query file-->
    <script type="text/javascript" src="<?php echo base_url() ?>assets/admin/js/jquery-3.2.1.min.js"></script>
    
	<script type="text/javascript">
		
			$(document).ready(function(e) {
				var err_msg = '<?php echo @$email_incorrect; ?>';
				var err_val	=  '<?php echo @$email_val; ?>';
				if(err_msg != '' || err_val != '')
				{
					//alert(err_msg);
					
					$('#log_form').hide();
					$('#fpassword').hide();
					$('#forgot_form').show();
					$('#ftitle').show();
					$('#log_now').show();
				}
				else{
					 $('#forgot_form').hide();
					$('#ftitle').hide();
					$('#log_now').hide();
				}
				
               
				$('#fpassword').click(function(){
						//alert("helooe");	
						$('#log_form').hide();
						$('#fpassword').hide();
						 $('#forgot_form').show();
						 $('#ftitle').show();
						 $('#log_now').show();	
				})
            });
    </script>
    
</head>
<body>
    <div id="custom-bootstrap-menu" class="navbar navbar-default " role="navigation">
    <div class="container">
        <!--<div class="navbar-header"><a class="navbar-brand" href="#">Bootstrap</a>
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-menubuilder"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
            </button>
        </div>-->
        <!--<div class="collapse navbar-collapse navbar-menubuilder">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="/">Home</a>
                </li>
                <li><a href="/products">Products</a>
                </li>
                <li><a href="/about-us">About Us</a>
                </li>
                <li><a href="/contact">Contact Us</a>
                </li>
            </ul>
        </div>-->
    </div>
</div>

        <div class="container">
           <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 text-center">
           <div id="banner">
             <h1>Admin <strong>Login Form</strong> for web analysis</h1>

            <h5><strong></strong></h5>
           
           </div>
          
              
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="registrationform">
            <form class="form-horizontal" method="post" id="log_form">
                <fieldset>
                    <legend>Admin Login <i class="fa fa-pencil pull-right"></i></legend>
                 <!--  	<div class="form-group">
                        <label for="inputEmail" class="col-lg-2 control-label">
                            Name</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="inputEmail" placeholder="Name">
                        </div>
                    </div>-->    <p class="login-box-msg"><?php if(@$errmsg){print_r(@$errmsg);}else{?>Sign in to start your session<?php }?></p>
                    <div class="form-group">
                        <label for="inputEmail" class="col-lg-2 control-label">
                            Email</label>
                        <div class="col-lg-10">
                            <input type="email" name="email" class="form-control" id="inputEmail" placeholder="Email" required />
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword" class="col-lg-2 control-label">
                            Password</label>
                        <div class="col-lg-10">
                            <input type="password" name="password" class="form-control" id="inputPassword" placeholder="Password" required />
                          <!--  <div class="checkbox">
                                <label>
                                    <input type="checkbox">
                                    Checkbox
                                </label>
                            </div>-->
                        </div>
                    </div>
                   <!--<div class="form-group">
                        <label for="textArea" class="col-lg-2 control-label">
                            Textarea</label>
                        <div class="col-lg-10">
                            <textarea class="form-control" rows="3" id="textArea"></textarea>
                           <span class="help-block">A longer block of help text that breaks onto a new line and
                                may extend beyond one line.</span>
                        </div>
                    </div>-->
                  <!--  <div class="form-group">
                        <label class="col-lg-2 control-label">
                            Radios</label>
                        <div class="col-lg-10">
                            <div class="radio">
                                <label>
                                    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
                                    Option one is this
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                                    Option two can be something else
                                </label>
                            </div>
                        </div>
                    </div>-->
                 <!--   <div class="form-group">
                        <label for="select" class="col-lg-2 control-label">
                            Selects</label>
                        <div class="col-lg-10">
                            <select class="form-control" id="select">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                           
                        </div>
                    </div>-->
                    <div class="form-group">
                        <div class="col-lg-10 col-lg-offset-2">
                            <input type="reset" class="btn btn-warning" value=" Cancel" name="cancel">
                              
                            <input type="submit" class="btn btn-primary" value="Submit" name="submit">
                               
                        </div>
                    </div>
                </fieldset>
            </form>
         	
            <!-- ForGot Password Form Start-->
            
            <legend id="ftitle">Admin Forgot Password <i class="fa fa-pencil pull-right"></i></legend>
            	<form class="form-horizontal" method="post" id="forgot_form">
                <fieldset>
                   
                    <div class="form-group">
                        <label for="inputEmail" class="col-lg-2 control-label">
                            Email</label>
                        <div class="col-lg-10">
                            <input type="email" name="forgot_email" class="form-control" id="inputEmail" placeholder="Email Id" required />
                            <label for="inputEmail" class="col-lg-12 control-label" style="padding:0 !important;">
                            <?php  if(@$email_incorrect)
									{
										echo @$email_incorrect;
									}
									elseif(@$email_val == 'false')
									{
										echo "ReEnter Your Email Some Internet Connection Problem";	
									}
									elseif(@$email_val == 'true')
									{
										echo "Password Has Been Send In Your Email...";
									}
								
							 ?></label>
                        </div>
                    </div>
                  
                 
                 
                 
                    <div class="form-group">
                        <div class="col-lg-10 col-lg-offset-2">
                            <input type="reset" class="btn btn-warning" value=" Cancel" name="password_cancel">
                              
                            <input type="submit" class="btn btn-primary" value="Submit" name="password_submit">
                               
                        </div>
                    </div>
                </fieldset>
            </form>
            		
            <!--  ForGot Password Form End-->
			<label style="text-decoration:none;color:#FFF;cursor:pointer" id="fpassword">Forgot Password </label>
            <label><a href="<?php echo site_url('admin/Login'); ?>" style="text-decoration:none;color:#FFF" id="log_now">Back To Login From...</a></label>
         </div>


         </div>
        </div>
        <script src="<?php echo base_url('assets/admin/js/jquery.js');?>" type="text/javascript"></script>
        <script src="<?php echo base_url('assets/admin/js/bootstrap.min.js');?>" type="text/javascript"></script>
        <script src="<?php echo base_url('assets/admin/js/jquery.backstretch.js');?>" type="text/javascript"></script>
        
        
      <script type="text/javascript">
            'use strict';

            /* ========================== */
            /* ::::::: Backstrech ::::::: */
            /* ========================== */
            // You may also attach Backstretch to a block-level element
            $.backstretch(
        [
            "<?php echo base_url('assets/admin/img/44.jpg');?>",
            "<?php echo base_url('assets/admin/img/colorful.jpg');?>",
            "<?php echo base_url('assets/admin/img/34.jpg');?>",
            "<?php echo base_url('assets/admin/img/images.jpg');?>"
        ],

        {
            duration: 4500,
            fade: 1500
        }
    );
        </script>


</body>
</html>
