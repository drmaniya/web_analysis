<!DOCTYPE html>
<html >
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="UTF-8">
  <title>Login & Sign Up Form Concept</title>
   <meta charset="utf-8">
   
  <link rel="icon" type="image/png" sizes="20x20" href="<?php echo base_url('assets/user/image/logofi.png');?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Web Analysis</title>
  <meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
  <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">

  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:400,300|Raleway:300,400,900,700italic,700,300,600">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/webvisitor/css/jquery.bxslider.css');?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/webvisitor/css/font-awesome.min.css');?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/webvisitor/css/bootstrap.min.css');?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/webvisitor/css/animate.css');?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/webvisitor/css/styl.css');?>">
  
  
  
  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Open+Sans:400,300'>
<link rel='stylesheet prefetch' href='https://fonts.googleapis.com/icon?family=Material+Icons'>
<link rel="stylesheet" href="<?php echo base_url() ?>assets/user/css/font-awesome.min.css" />
 <link rel="stylesheet" href="<?php echo base_url() ?>assets/user/css/style_log_reg.css">
 <!--<link rel="stylesheet" href="<?php echo base_url() ?>assets/user/js/jquery-3.2.1.min.js">-->
 
 <!--<link rel="stylesheet" href="<?php //echo base_url() ?>assets/user/css/bootstrap.min.css" />-->
  <script src="<?php echo base_url() ?>assets/user/js/index.js" type="text/javascript"></script>
 <!--<script src="<?php //echo base_url() ?>assets/user/js/bootstrap.min.js" type="text/javascript"></script>
  <script src="<?php //echo base_url() ?>assets/user/js/popper.min.js" type="text/javascript"> </script>-->
  
  <script type="text/javascript">
  
  //alert("heloo");
  var is_err = '<?php echo @$is_err; ?>';
  var is_err_log = '<?php echo @$is_err_log; ?>';
  
  window.onload = function(){
  
  if(is_err == 'yes'){
	 
	 cambiar_sign_up();
	  is_err_log=null;
  }
  else if(is_err_log == 'yes1')
  {
	cambiar_login();
	is_err=null;	  
	}
  };
  
  /*window.onload=function(){
	  
  if(is_err_log == 'yes_log')
  {cambiar_login();}
  };*/
  </script>
    <script src="<?php echo base_url('assets/webvisitor/js/jquery.min.js');?>"></script>
  <script src="<?php echo base_url('assets/webvisitor/js/jquery.easing.min.js');?>"></script>
  <script src="<?php echo base_url('assets/webvisitor/js/bootstrap.min.js');?>"></script>
  <script src="<?php echo base_url('assets/webvisitor/js/wow.js');?>"></script>
  <script src="<?php echo base_url('assets/webvisitor/js/jquery.bxslider.min.js');?>"></script>
  <script src="<?php echo base_url('assets/webvisitor/js/custom.js');?>"></script>
  <script src="<?php echo base_url('assets/webvisitor/contactform/contactform.js');?>"></script>

</head>

<body>

<!--	<div class="bk_video">
		<video muted preload="auto" autoplay loop>
        	<source src="<?php //echo base_url() ?>assets/user/video/web_analysis.mp4"  type="video/mp4" ></source>
        </video>
    </div>-->
    <div class="loader"></div>
  <div id="myDiv">
    <!--HEADER-->
    <div class="header">
      <div class="bg-color">
        <header id="main-header">
          <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
              <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
                <a class="navbar-brand" href="#">Web<span class="logo-dec">Analysis</span></a>
              </div>
              <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                  <li class="active"><a href="<?php echo base_url('index.php/Home');?>">Home</a></li>
                  <li class=""><a href="<?php echo base_url('index.php/visitor/Feature'); ?>">Feature</a></li>
                  <li class=""><a href="<?php echo base_url('index.php/visitor/Resource'); ?>">Resource</a></li>
                  <li class=""><a href="<?php echo base_url('index.php/visitor/Data'); ?>">Pricing</a></li>
                  <li class=""><a href="<?php echo base_url('index.php/visitor/Attribution'); ?>">Attribution</a></li>
                  <li class=""><a href="<?php echo base_url('index.php/visitor/Optimize'); ?>">Optimize</a></li>
                  <li class=""><a href="<?php echo base_url('index.php/user/Login');?>">Login</a></li>
                </ul>
              </div>
            </div>
          </nav>
        </header>
      
      </div>
    </div>
    <!--/ HEADER-->
    
  <div class="cotn_principal">
<div class="cont_centrar">

  <div class="cont_login">
<div class="cont_info_log_sign_up">
      <div class="col_md_login">
<div class="cont_ba_opcitiy">
        
        <h2>LOGIN</h2>  
  <p>Login Now...</p> 
  	<button class="btn_login" onclick="cambiar_login()">LOGIN</button>
   
  </div>
   <?php
   		if(@$block)
		{
			echo '<div style="color:red;font-weight:600">'.@$block.'</div>';	
		}
		else
		{
   			echo '<div style="color:red;font-weight:600">'.@$errmsg.'</div>'; 
		}
	?>
  </div>
<div class="col_md_sign_up">
<div class="cont_ba_opcitiy">
  <h2>SIGN UP</h2>

  
  <p>Please Fill Up The Sign Up Form </p>

  <button class="btn_sign_up" id="sign-up" onclick="cambiar_sign_up()">SIGN UP</button>
  
</div>
	<?php 
		if(@$user_exist)
		{
			echo '<div style="color:red;font-weight:600">'.@$user_exist.'</div>';
		}
		else if(@$email_err == 'false')
		{
			echo '<div style="color:red;font-weight:600">'."Email Is Not Sent Due To Some Internet Connection Problem Please 			Re-SignUp...!!!".'</div>';	
		}
		else
		{
			echo '<div style="color:red;font-weight:600">'.@$send_email.'</div>';	
		}
	?>
  </div>
       </div>

    <form method="post">
    <div class="cont_back_info">
       <div class="cont_img_back_grey">
       <img src="<?php echo base_url() ?>assets/user/image/reg_img.jpg" />
       <!--<img src="https://images.unsplash.com/42/U7Fc1sy5SCUDIu4tlJY3_NY_by_PhilippHenzler_philmotion.de.jpg?ixlib=rb-0.3.5&q=50&fm=jpg&crop=entropy&s=7686972873678f32efaf2cd79671673d" alt="" />-->
       </div>
       
    </div>
<div class="cont_forms" >
    <div class="cont_img_back_">
       <img src="<?php echo base_url() ?>assets/user/image/log_img.jpg" />
       <!--<img src="https://images.unsplash.com/42/U7Fc1sy5SCUDIu4tlJY3_NY_by_PhilippHenzler_philmotion.de.jpg?ixlib=rb-0.3.5&q=50&fm=jpg&crop=entropy&s=7686972873678f32efaf2cd79671673d" alt="" />-->
       </div>
 <div class="cont_form_login">
<a href="#" onclick="ocultar_login_sign_up()" >
<i class="fa fa-angle-right" aria-hidden="true"></i></a>
   <h2>LOGIN</h2>
 <input type="text" placeholder="Email" name="email_log" value="<?php echo @$email_log; ?>"/>
 <?php 
 		if(form_error('email_log'))
		{
			 echo '<div>'.form_error('email_log').'</div>'; 
		}
 ?>
<input type="password" placeholder="Password" name="password_log" />

 <?php 
 		if(form_error('password_log') && !form_error('email_log'))
		{
			 echo '<div>'.form_error('password_log').'</div>'; 
		}
 ?>
<input type="submit" class="btn_login" value="LOGIN" name="login" onclick="cambiar_login()" style="text-align:center;color:#FFF;text-transform:uppercase;letter-spacing:0.6px;">
  	<a href="<?php echo site_url('user/Login/forget_load'); ?>" style="color:#F00">Forgot Password</a>
  </div>
  </form>
  
  
  <form method="post">
 
   <div class="cont_form_sign_up">
<a href="#" onclick="ocultar_login_sign_up()"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
     <h2>SIGN UP</h2>
<input type="text" placeholder="User Name" name="name" value="<?php echo @$name ?>"/>
<?php if(form_error('name'))
		{ echo '<div>'.form_error('name').'</div>'; }
?>
<input type="text" placeholder="Email Id" name="email" value="<?php echo @$email; ?>"/>
	<?php
		if(form_error('email') && !form_error('name'))
		{echo '<div>'.form_error('email').'</div>'; }
	?>
<input type="text" placeholder="Mobile No." name="mobile" value="<?php echo @$mobile; ?>"/>
	<?php
		if(form_error('mobile') && !form_error('email'))
		{echo '<div>'.form_error('mobile').'</div>'; }
	?>
<input type="submit" class="btn_sign_up btnsub" name="sign_up" onclick="cambiar_sign_up()" value="SIGN UP" style="text-align:center;color:#FFF;text-transform:uppercase;letter-spacing:0.6px;margin-top:8px;">

</form>
  
  </div>
		
    </div>
    
  </div>
 </div>
</div>



<!---->
 <!--
     <section id="contact" class="section-padding wow fadeInUp delay-05s">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center white">
            <h2 class="service-title pad-bt15">Keep in touch with us</h2>
            <p class="sub-title pad-bt15"></p>
            <hr class="bottom-line white-bg">
          </div>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="loction-info white">
              <p><i class="fa fa-map-marker fa-fw pull-left fa-2x"></i>A99 Adam Street<br>Texas, TX 555072</p>
              <p><i class="fa fa-envelope-o fa-fw pull-left fa-2x"></i>info@domain.com</p>
              <p><i class="fa fa-phone fa-fw pull-left fa-2x"></i>+7353784822</p>
            </div>
          </div>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="contact-form">
              <div id="sendmessage">Your Message Has Been Sent. Thank You!</div>
              <div id="errormessage"></div>
              <form action="" method="post" role="form" class="contactForm">
                <div class="col-md-6 padding-right-zero">
                  <div class="form-group">
                    <input type="text" name="name" class="form-control" id="name" placeholder=" Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                    <div class="validation"></div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <input type="email" class="form-control" name="email" id="email" placeholder=" Email" data-rule="email" data-msg="Please enter a valid email" />
                    <div class="validation"></div>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                    <div class="validation"></div>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                    <div class="validation"></div>
                  </div>
                  <button type="submit" class="btn btn-primary btn-submit" name="submit">SEND NOW</button>
                </div>
              </form>

            </div>
          </div>
        </div>
      </div>
    </section>
    <!---->
    <!---->
    <!--<footer id="footer">
      <div class="container">
        <div class="row text-center">
          <p>&copy; Web Analyzer. All Rights Reserved.</p>
       <!--   <div class="credits">
            <!--
              All the links in the footer should remain intact.
              You can delete the links only if you purchased the pro version.
              Licensing information: https://bootstrapmade.com/license/
              Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Baker
            
            Designed by Bootstrap Templates</a>
          </div>
       --><!-- </div>
      </div>
    </footer>
    <!---->
  <!--</div>
   -->

</body>
</html>
