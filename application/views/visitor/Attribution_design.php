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
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/webvisitor/css/jquery.bxslider.css');?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/webvisitor/css/font-awesome.min.css');?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/webvisitor/css/bootstrap.min.css');?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/webvisitor/css/animate.css');?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/webvisitor/css/styl.css');?>">
  
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/webvisitor/css/attribution.css');?>">
  <!-- =======================================================
    Theme Name: Baker
    Theme URL: https://bootstrapmade.com/baker-free-onepage-bootstrap-theme/
    Author: BootstrapMade.com
    Author URL: https://bootstrapmade.com
  ======================================================= -->
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
          <div class="col-md-3 col-sm-3 col-xs-12">
          </div>
          <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="contact-form">
            
             <div class="row">
              <div class="banner-info text-center wow fadeIn delay-05s">
                <h2 class="bnr-title">PROVIDE YOUR<span> FEEDBACK</span></h2>
                <p class="bnr-para">Provide Your Feedback Which Help Us to Improve Our System.</p>
                 <form  method="post">
                <div class="col-md-12">
                  <div class="form-group wow fadeInLeft" data-wow-duration="2.5s">
                    <input type="text" name="fed_name" class="form-control " id="name" placeholder=" Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" value="<?php echo @$fed_name; ?>" />
                    
                  </div>
                </div>
                
                
               <div class="col-md-12">
                  <div class="form-group wow fadeInRight" data-wow-duration="2.5s">
                    <textarea class="form-control" name="fed_message" rows="5" placeholder="Please write something for us"><?php echo @$fed_message; ?></textarea>
                  </div>
                   <input type="submit" class="btn btn-primary btn-submit wow zoomIn" data-wow-duration="2s" name="Send_feedback" value="SEND NOW">
                </div>
              
                </form>
                                        <?php 
                                              if(@form_error('fed_name'))
                                              {	
                                                echo '<label class="alert alert-danger">'.@form_error('fed_name').'</label>'; 
                                              }
                                              elseif(!@form_error('fed_name') && @form_error('fed_message'))
                                              {
                                                echo '<label class="alert alert-danger">'.@form_error('fed_message').'</label>';   
                                              }
											  elseif(!@form_error('fed_name') && !@form_error('fed_message'))
                                               {
												 if(@$fed_success){
                                             	   echo '<label class="alert alert-success">'.@$fed_success.'</label>';   						}
                                              }
                                        ?>
                        </div>
                 
                 <div class="col-md-4 col-sm-4 col-xs-12">
                  </div>
          
          
                 </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
<!---->
    <section id="service" class="section-padding">
      
      <div class="row">

       <?php if(@$attr_fthr['content_status']==1) {?> 
       <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                   <center> <h1 class="bnr-title wow fadeInUp"><?php  echo @$attr_fthr['heading']; ?><!--Web Analysis For Attribution--></span></h1>
                 <p class="bnr-para wow fadeInUp"><?php  echo @$attr_fthr['content']; ?><!--How do you measure and optimize marketing spend across </br>multiple channels and across multiple devices?</br> Use it to uncover insights, understand the impact of your marketing on the</br> customer journey, and improve ROI.--></p></center>
          
          </div>
        <?php }?>
        </div>
      </section> 
<!---->


    <section id="service" class="section-padding">
      <div class="container">
        <div class="row">
         <?php if(@$attr_ffou['content_status']==1) {?>
          <div class="col-md-6 col-sm-6 col-xs-12 re">
               <p class="sub-title pad-bt15  wow fadeInLeft"><b><?php  echo @$attr_ffou['heading']; ?><!--DIGITAL ATTRIBUTION--></b></br>
<!--Make your marketing more effective.--><?php  echo @$attr_ffou['mid_heading']; ?></br></br><?php  echo @$attr_ffou['content']; ?>
<!--Web Attribution uses a data-driven approach to determine how impactful your ads are, allowing you to make better cross-channel and cross-device decisions and drive greater returns.--></p>
          </div>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="ef"> 
               <div class="setimg wow fadeInRight" data-wow-duration="2s">
               
                <img src="<?php echo base_url('assets/webvisitor/img/'.@$attr_ffou['image']); ?>">
               </div>
               
          </div>
       
        </div>
          <?php }?> 
      </div>
     </div> 
    </section>


<!---->

 <section id="portfolio" class="section-padding">
      <div class="container">
        <div class="row">

          <?php if(@$attr_ffiv['content_status']==1) {?>
          <div class="col-md-6 col-sm-6 col-xs-12">
             <div class="eff"> 
               <div class="setimgs wow fadeInLeft" data-wow-duration="2s">
                 <img src="<?php echo base_url('assets/webvisitor/img/'.@$attr_ffiv['image']);?>">
               </div>
             </div>
           </div>
          <div class="col-md-6 col-sm-6 col-xs-12 at">
             <p class="sub-title pad-bt15 wow fadeInRight" data-wow-duration="2s"><b><?php  echo @$attr_ffiv['heading']; ?><!--TV ATTRIBUTION--></b></br><?php  echo @$attr_ffiv['mid_heading']; ?>
               <!-- See the impact TV has on your business.--></br></br><?php  echo @$attr_ffiv['content']; ?>
<!--TV Attribution analyzes website and search activity after TV spots air to determine their impact at the most granular level..--></p>
 
        </div>
        <?php } ?>

      </div>
     </div> 
    </section>
<!---->
    <section id="service" class="section-padding">
      <div class="container">
        <div class="row">

          <?php if(@$attr_fsix['content_status']==1) {?>
          <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 att">
               <p class="sub-title pad-bt15 wow fadeInUp" data-wow-duration="2s"><b><?php  echo @$attr_fsix['heading']; ?><!--FOR BUSINESSES OF ALL SIZES--></b></br></br>
<!--Solutions for businesses big and small.--><?php  echo @$attr_fsix['mid_heading']; ?></br></br><?php  echo @$attr_fsix['content']; ?>
<!--Web Attribution helps companies of all sizes answer the question, “Is my marketing working?”--></p>
          <?php } ?>
          
          <div class="onebox">


          <?php if(@$attr_fsev['content_status']==1) {?>
            <div class="oeffect wow fadeInRight" data-wow-duration="2s">
                <b><h3><!--Web Attribution--><?php  echo @$attr_fsev['heading']; ?></h3></b></br></br>
                <p class="sub-title pad-bt15"> <?php  echo @$attr_fsev['content']; ?><!-- Cross-channel and Cross-device attribution for free.-->
                  </p>
               <div class="farr">
                  <i class="fa fa-arrow-right" aria-hidden="true"></i> 
                </div>   

            </div>
           <?php } ?>
                


          <?php if(@$attr_feig['content_status']==1) {?>  
               <div class="seffect wow fadeInLeft" data-wow-duration="2s">
              <b><h3><!--Enterprise -level Attribution--><?php  echo @$attr_feig['heading']; ?></h3></b></br></br>
              <p class="sub-title pad-bt15"><?php  echo @$attr_feig['content']; ?> <!--Enteerprise level attribution designde to meet the data integration and modeling needs of the largest advertiser..-->
              </p>
               <div class="sarr">
                 <i class="fa fa-arrow-right" aria-hidden="true"></i>
               </div>
               </div>
             
           </div>
           
       </div>
           
          
          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <div class="effe"> 
               <div class="setimgt wow zoomIn" data-wow-duration="2s">
                 <img src="<?php echo base_url('assets/webvisitor/img/'.@$attr_feig['image']);?>">
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
          <p>&copy; Web Analysis. All Rights Reserved.</p>
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
<script type="text/javascript">
wow = new WOW(
                      {
                      boxClass:     'wow',      // default
                      animateClass: 'animated', // default
                      offset:       0,          // default
                      mobile:       false,       // default
                      live:         true        // default
                    }
                    )
                    wow.init();
</script>    
    </body>
    </html> 

