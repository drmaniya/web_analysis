<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Web Analysis</title>
  <link rel="icon" type="image/png" sizes="20x20" href="<?php echo base_url('assets/webvisitor/img/logofi.png');?>">
  <meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
  <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">

  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:400,300|Raleway:300,400,900,700italic,700,300,600">
   <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/webvisitor/css/bootstrap.min.css');?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/webvisitor/css/jquery.bxslider.css');?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/webvisitor/css/font-awesome.min.css');?>">
 
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/webvisitor/css/animate.css');?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/webvisitor/css/styl.css');?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/webvisitor/css/optimize.css');?>">
 
</head>

<body>

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
                <a class="navbar-brand" href="<?php echo base_url('index.php/Home');?>">Web<span class="logo-dec">analysis</span></a>
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

          <div class="wrapper">
          <div class="container">
            <div class="row">
													<?php  if(@$opti_thsix['content_status']==1) { ?>
               <div class="banner-info text-center wow fadeIn delay-05s" data-wow-duration="2s">
                <h1 class="bnr-title"><?php echo @$opti_thsix['heading'];  ?><!--Web Analysis For Optimize--></h1>
                <h2 class="bnr-sub-title"></h2>
                <p class="bnr-para"><?php echo @$opti_thsix['content'];  ?>
                  <!-- Discover the most engaging customer experiences</br> with Web Optimize. Test different variations of your website and then </br>tailor it to deliver a personalized experience that works best for </br>each customer and for your business.-->
                   </p>
        <!-- <div class="overlay-detail">
                   <a href="#feature"><i class="fa fa-angle-down"></i></a>
                </div>-->
              </div>
             <?php } ?>
							     </div>
          </div>
        </div>
      </div>
    </div>
<!---->

   <section id="blog" class="section-padding wow fadeInUp delay-05s" data-wow-duration="2s">
      <div class="container">
        <?php if(@$opti_thsev['content_status']==1) { ?>
								<div class="row">
          <div class="col-md-12 text-center">
            <h2 class="service-title pad-bt15 wow fadeInUp"><?php  echo @$opti_thsev['heading']; ?><!--Capabilities--></h2>
            <p class="sub-title pad-bt15"></p>
            <hr class="bottom-line">
          </div>
 									
										<div class="col-lg-4 col-md-4 col-sm-6 col-12 col-xs-12">
            <div class="blog-sec wow fadeInLeft" data-wow-duration="2s">
              <div class="blog-img">
                <a href="">
                </a>
              </div>
														
	             <div class="blog-info">
                <h2 style="color:#666";><?php  echo @$opti_thsev['mid_heading']; ?><!--Put Your Customer Insight Work--></h2>
                <p><?php  echo @$opti_thsev['content']; ?><!--Native integration with Web Analytics provides you with the rich behavioral insights that you need to test and deliver optimized customer experiences..--></p>
              </div>
														
														
            </div>
          </div>
										<?php } ?>
										
										
          	 <?php if(@$opti_theig['content_status']==1) {?>
										   
										<div class="col-lg-4 col-md-4 col-sm-6 col-12 col-xs-12">
            <div class="blog-sec wow zoomIn" data-wow-duration="2s">
              <div class="blog-img">
              </div>
             
												 <div class="blog-info">
                <h2 style="color:#666";><?php  echo @$opti_theig['mid_heading']; ?><!--Fit The Moment To Customer--></h2>
              <p><?php  echo @$opti_theig['content']; ?><!--Advanced experiment targeting means you can deploy the right experience to your customers at the right time — and with Optimize  you can use the valuable segments you’ve already discovered in Analytics.--></p>
              </div>
            </div>
          </div>
										<?php } ?>

         <?php  if(@$opti_thnin['content_status']==1) {?>
          <div class="col-lg-4 col-md-4 col-sm-6 col-12 col-xs-12">
            <div class="blog-sec wow fadeInRight" data-wow-duration="2s">
              <div class="blog-img">
                <a href="">
                </a>
              </div>
              <div class="blog-info">
                <h2 style="color:#666";><?php  echo @$opti_thnin['mid_heading']; ?><!--Easy Website Testing--></h2> <p><?php  echo @$opti_thnin['content']; ?><!--Optimize makes it easy for you to create A/B, multivariate, or redirect tests to change just about anything on your site and then quickly determine the impact on customer behavior.
-->
</p>
                
               </div>
            </div>
          </div>
										<?php } ?>
        </div>
      </div>
						
    </section>
<!---->

 <section id="service" class="section-padding">
      <div class="container">
        <div class="row">
									
									
          <div class="col-lg-8 col-md-8 col-sm-12 col-12 col-xs-12 opt">
            <?php if(@$opti_fourt['content_status']==1) {?>
									      <p class="sub-title pad-bt15 wow fadeInUp" data-wow-duration="2s"><b><?php echo @$opti_fourt['heading'];  ?><!--FOR BUSINESSES OF ALL SIZES--></b></br></br>
<!--Solutions for businesses big and small.--><?php echo @$opti_fourt['mid_heading'];  ?></br></br>
<!--Web Optimize offers small business and enterprise solutions to help you test and deliver optimal site experiences to your customers.--><?php echo @$opti_fourt['content'];  ?></p>
          <?php } ?>
          
          <div class="oneboxop">
            <?php if(@$opti_fone['content_status']==1) {?>
												<div class="oeffectop wow fadeInRight" data-wow-duration="2s">
                <b><h3><!--Web Optimize--><?php echo @$opti_fone['heading'];  ?></h3></b></br></br>
                <p class="sub-title pad-bt15"> <?php echo @$opti_fone['content'];  ?><!-- Core website testing solutions with room to grow.-->
                  </p>
               <div class="farrop">
                  <i class="fa fa-arrow-right" aria-hidden="true"></i> 
                </div>   
            </div>
												<?php } ?>
												
												 <?php if(@$opti_ftwo['content_status']==1) {?>
               <div class="seffectop wow fadeInLeft" data-wow-duration="2s">
              <b><h3><!--Enterprise -level Optimize--><?php echo @$opti_ftwo['heading'];  ?></h3></b></br></br>
              <p class="sub-title pad-bt15"><?php echo @$opti_ftwo['content'];  ?><!-- Enterprise level website testing and personalization with your analytics ausdiences..-->
              </p>
               <div class="sarrop">
                 <i class="fa fa-arrow-right" aria-hidden="true"></i>
               </div>
               </div>
														
           </div>
           
       </div>
           
								 <div class="col-lg-4 col-md-4 col-sm-12 col-12 col-xs-12">
            <div class="effeop"> 
               <div class="setimgtop">
                 <img src="<?php echo base_url('assets/webvisitor/img/'.@$opti_ftwo['image']);?>" class="wow zoomIn" data-wow-duration="2s">
               </div>
             </div>
        </div>
									<?php } ?>	
      </div>
     </div> 
    </section>
<!---->

 <!--footer-->
  <section id="contact" class="section-padding wow fadeInUp delay-05s">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center white">
            <h2 class="service-title pad-bt15 wow fadeInUp">Keep in touch with us</h2>
            <p class="sub-title pad-bt15"></p>
            <hr class="bottom-line white-bg">
          </div>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="loction-info white wow fadeInLeft" data-wow-duration="2s">
              <p><i class="fa fa-map-marker fa-fw pull-left fa-2x"></i>A99 Peladium<br>surat, Gujarat,India.</p>
              <p><i class="fa fa-envelope-o fa-fw pull-left fa-2x"></i>webanalysis09@gmail.com</p>
              <p><i class="fa fa-phone fa-fw pull-left fa-2x"></i>+7572808578 , +9723773672</p>
            </div>
          </div>
          
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="contact-form">
              <div id="sendmessage">Your Message Has Been Sent. Thank You!</div>
              
              <?php if(@form_error('name') || @form_error('email') || @form_error('mobile') || @form_error('message') || @$already) {?>
              <div class="wow fadeInUp delay-05s" style="background-color:#F00;color:#FFF;border-radius:5px;padding-left:15px;height:35px;margin-bottom:20px;padding-top:5px;">
                <?php 
					  if(@form_error('name'))
					  {	
						echo @form_error('name'); 
					  }
					  elseif(!@form_error('name') && @form_error('email'))
					  {
						echo @form_error('email');
					  }
					  elseif(!@form_error('name') && !@form_error('email') && @form_error('mobile'))
					  {
							echo @form_error('mobile');  
					  }
					  elseif(!@form_error('name') && !@form_error('email') && !@form_error('mobile') && @form_error('message'))
					  {
							echo @form_error('message');  
					  }
					  elseif(!@form_error('name') && !@form_error('email') && !@form_error('mobile') && !@form_error('message') && @$already)
					  {
							echo @$already;  
					  }
			
				?>
              </div>
              <?php } ?>
              
              <!--<?php   //if(!@form_error('name') && !@form_error('email') && !@form_error('mobile') && !@form_error('message') && !@$already) {?>
					
               <div class="wow fadeInUp delay-05s" style="background-color:#0C3;color:#FFF;border-radius:5px;padding-left:15px;height:35px;margin-bottom:20px;padding-top:5px;">
             <?php  	 
				
				//echo "Successfully keep In Touch with US...";
					  
			 ?>
              </div>
             <?php //} ?>-->
              <form  method="post" role="form" class="contactForm">
                <div class="col-md-6 padding-right-zero">
                  <div class="form-group wow fadeInRight" data-wow-duration="1s">
                    <input type="text" name="name" class="form-control " id="name" placeholder=" Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" value="<?php echo @$name; ?>" <?php if(@form_error('name') || @$already ){ echo "autofocus"; }?> />
                    
                  </div>
                </div>
            
               
                <div class="col-md-6">
                  <div class="form-group wow fadeInRight" data-wow-duration="1.5s">
                    <input type="text" class="form-control" name="email" id="email" placeholder=" Email" data-rule="email" data-msg="Please enter a valid email" <?php if(@form_error('email')){ echo "autofocus"; }?> value="<?php echo @$email; ?>"/>
                    <!--<div class="validation"></div>-->
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group wow fadeInRight" data-wow-duration="2s">
                    <input type="text" class="form-control" name="mobile" id="subject" placeholder="Mobile" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" <?php if(@form_error('mobile')){ echo "autofocus"; }?> value="<?php echo @$mobile; ?>" />
                    <div class="validation"></div>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group wow fadeInRight" data-wow-duration="2.5s">
                    <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message" <?php if(@form_error('message')){ echo "autofocus"; }?> > <?php echo @$message; ?></textarea>
                    <div class="validation"></div>
                  </div>
                  <input type="submit" class="btn btn-primary btn-submit wow zoomIn" data-wow-duration="3s" name="Send_contact" value="SEND NOW">
                </div>
              </form>
                      <!-- start google translater -->
            <div id="google_translate_element" class="translate_l"></div>
            <script type="text/javascript">
                function googleTranslateElementInit() 
                {
                    new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
                }
            </script>
            <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
            <!-- end google translater -->
            </div>
          </div>
        </div>
      </div>
    </section>
    <!---->
    <!---->
    <footer id="footer">
      <div class="container">
        <div class="row text-center">
          <p>&copy; Web Analysis All Rights Reserved.</p>
       <!--   <div class="credits">
            <!--
              All the links in the footer should remain intact.
              You can delete the links only if you purchased the pro version.
              Licensing information: https://bootstrapmade.com/license/
              Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Baker
            
            Designed by Bootstrap Templates</a>
          </div>
       --> </div>
      </div>
    </footer>
    
    <!---->
  </div>
  <script src="<?php echo base_url('assets/webvisitor/js/jquery.min.js');?>"></script>
  <script src="<?php echo base_url('assets/webvisitor/js/jquery.easing.min.js');?>"></script>
  <script src="<?php echo base_url('assets/webvisitor/js/bootstrap.min.js');?>"></script>
  <script src="<?php echo base_url('assets/webvisitor/js/wow.js');?>"></script>
  <script src="<?php echo base_url('assets/webvisitor/js/jquery.bxslider.min.js');?>"></script>
  <script src="<?php echo base_url('assets/webvisitor/js/custom.js');?>"></script>
  <script src="<?php echo base_url('assets/webvisitor/contactform/contactform.js');?>"></script>

    
    </body>
    </html> 

