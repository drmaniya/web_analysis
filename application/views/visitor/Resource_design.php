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
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/webvisitor/css/jquery.bxslider.css');?>"><ol></ol>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/webvisitor/css/font-awesome.min.css');?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/webvisitor/css/bootstrap.min.css');?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/webvisitor/css/animate.css');?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/webvisitor/css/styl.css');?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/webvisitor/css/ree.css');?>">
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
            <div class="row">
              <?php if(@$res_twe['content_status']==1) { ?>
              <div class="banner-info text-center wow fadeIn delay-05s">

                <h1 class="bnr-title"><?php echo @$res_twe['heading']; ?><!--Web Analysis For <span>Resource</span>--></h1>
                <h2 class="bnr-sub-title"><?php echo @$res_twe['mid_heading']; ?><!--Resource--></h2>
                <p class="bnr-para"><?php echo @$res_twe['content']; ?><!--The Web Analysis Suite combines enterprise analytics,</br> tagging, site optimization, data visualization, market research, attribution,</br> and audience management into a powerful measurement solution for your business.--></p>
                <div class="brn-btn">
                  
                </div>
               <!-- <div class="overlay-detail">
                  <a href="#feature"><i class="fa fa-angle-down"></i></a>
                </div>-->
              </div>
              <?php  } ?>
            </div>
		       </div>
        </div>
      </div>
    </div>
		
    
<!---->

      <section id="service" class="section-padding">
      <div class="container">
        <div class="row">
         <?php if(@$res_nin['content_status']==1) {?>
          <div class="col-md-6 col-sm-6 col-xs-12 re">
               <p class="sub-title pad-bt15 wow fadeInLeft"><?php echo @$res_nin['heading']; ?><!--Get the latest insights on marketing analytics and stay in-the-know with reports, videos, infographics, and whitepapers.--></p>
          </div>

          
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="ef"> 
               <div class="setimg wow fadeInRight" data-wow-duration="2s">
                 <img src="<?php echo base_url('assets/webvisitor/img/'.@$res_nin['image']);?>">
               </div>
               <div class="setcon" data-wow-duration="2s">
                     <h4 class=" wow fadeInLeft"><?php echo @$res_nin['sub_heading']; ?><!--New research: The customer experience is written in data.--></h4>
                    
                     <p class="wow fadeInRight"> <?php echo @$res_nin['content']; ?><!--This Econsultancy report shows why and how the most successful brands are
                      putting data at the center of marketing strategy.-->
                    </p>
                 <div class="arrset">  
                  <i class="fa fa-arrow-right" aria-hidden="true"></i>  
                 </div>
               </div>
          </div>
        </div>
        <?php  } ?>
      </div>
     </div> 
    </section>
    
    <!---->
    <!---->
     <section id="portfolio" class="section-padding wow fadeInUp delay-05s">
      <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
            <h4 class="wow fadeInUp" data-wow-duration="2s">FEATURED RESOURCE</h4>
           <hr class="bottom-line">
          </div> 

           <?php if(@$res_thi['content_status']==1){?>
            <div class="col-lg-4 col-md-4 col-sm-4 col-12 col-xs-12">
              <div class="ffrb wow fadeInLeft" data-wow-duration="2s">
                  <div class="pad"> 
                     <h3><?php echo @$res_thi['heading']; ?></h3>
                     <h5><?php echo @$res_thi['mid_heading']; ?></h5></br>
                     <span><?php echo @$res_thi['sub_heading']; ?></span> </br></br>
                     <p><?php echo @$res_thi['content']; ?></p>
                   </div>
               </div>
            </div>
            <?php } ?>

            <?php if(@$res_fou['content_status']==1) { ?>
            <div class="col-lg-4 col-md-4 col-sm-4 col-12 col-xs-12">
               <div class="fsrb wow zoomIn" data-wow-duration="2s">
                 <div class="pad">
                     <h3><?php echo @$res_fou['heading']; ?></h3>
                     <h5><?php echo @$res_fou['mid_heading']; ?></h5></br>
                     <span><?php echo @$res_fou['sub_heading']; ?></span> </br></br>
                     <p><?php echo @$res_fou['content']; ?></p>
     
                 </div>
                </div>
            </div>
            <?php } ?>
            

            <?php if(@$res_fif['content_status']==1) {?>
            <div class="col-lg-4 col-md-4 col-sm-4 col-12 col-xs-12">
                <div class="ftrb wow fadeInRight" data-wow-duration="2s">
                  <div class="pad">
                     <h3><?php echo @$res_fif['heading']; ?></h3>
                     <h5><?php echo @$res_fif['mid_heading']; ?></h5></br>
                     <span><?php echo @$res_fif['sub_heading']; ?><!--Get more value from your AdWords investment with web Optimize.--></span> </br></br>
                     <p><?php echo @$res_fif['content']; ?><!--If you use AdWords to reach your customers online, you can use the web Optimize and AdWords integration to make your marketing dollars go further. With Optimize, you can test different variations of your website, target your experiment to your AdWords keywords, and then see which variation works best for your customers and your business.--></p>
     
                   </div>
                </div>
            </div>
            <?php  } ?>
     
         </div>
       </div>
      </section>   
    
    <!--second-->
     <section id="service" class="section-padding">
      <div class="container">
        <div class="row">

          <?php if(@$res_six['content_status']==1) {?>
            <div class="col-lg-4 col-md-4 col-sm-4 col-12 col-xs-12">
              <div class="sfrb wow fadeInLeft" data-wow-duration="2s">
                <div class="pad">
                       <h3><?php echo @$res_six['heading']; ?><!--GUIDE--></h3>
                     <h5><?php echo @$res_six['mid_heading']; ?><!--Measurement Strategy..--></h5></br>
                     <span><?php echo @$res_six['sub_heading']; ?><!--How to build a culture of growth--></span> </br></br>
                     <p><?php echo @$res_six['content']; ?><!--Most companies have a few people who are testers and optimizers by nature, interest, or experience. But what really moves the dial is when everyone in the company embraces a test-and-learn approach to improving the customer experience across all touchpoints.--></p>
     
                </div>
              </div>
            </div>
           <?php  } ?>
            

           <?php if(@$res_sev['content_status']==1) {?> 
            <div class="col-lg-4 col-md-4 col-sm-4 col-12 col-xs-12">
                <div class="ssrb wow zoomIn" data-wow-duration="2s">
                  <div class="pad">
                     <h3><?php echo @$res_sev['heading']; ?><!--ARTICLE--></h3>
                     <h5><?php echo @$res_sev['mid_heading']; ?><!--Measurement Strategy..--></h5></br>
                     <span><?php echo @$res_sev['sub_heading']; ?><!--Convert the most valuable customers--></span> </br></br>
                     <p><?php echo @$res_sev['content']; ?><!--It can be difficult for marketers to move beyond simple cost-based metrics. But to understand customer conversions and the value attached to those conversions, you need a more sophisticated attribution model.--></p>
     
                  </div>
                 </div>
            </div>
            <?php  } ?>
            

            <?php if(@$res_eig['content_status']==1) { ?>
            <div class="col-lg-4 col-md-4 col-sm-4 col-12 col-xs-12">
               <div class="strb wow fadeInRight" data-wow-duration="2s">
                   <div class="pad">
                      <h3><?php echo @$res_eig['heading']; ?><!--MARKET RESEARCH--></h3>
                     <h5><?php echo @$res_eig['mid_heading']; ?><!--Market research and consumer insight..--></h5></br>
                     <span><?php echo @$res_eig['sub_heading']; ?><!--Research that's fast and accurate at the same time.--></span> </br></br>
                     <p><?php echo @$res_eig['content']; ?><!--Reach a representative sample — including thousands of responses — in as little as 48 hours. Get accurate results you can trust.--></p>
     
                   </div>
                </div>
            </div>
           <?php } ?>
           
         </div>
       </div>
      </section>   
    
    <!---third-->
    
  <!--   <section id="portfolio" class="section-padding wow fadeInUp delay-05s">
      <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-12 col-xs-12">
             <div class="ffrb">
                  <div class="pad">
                      <h3>PRODUCT OVERVIEW</h3>
                     <h5>Data visulization and reporting</h5></br>
                     <span>Put the power of your marketing data in everyone's hands</span> </br></br>
                     <p>Web Data is a new-breed of data visualization and reporting tools that take data-driven decision making to a much higher level. Data Studio lets you effortlessly connect to all your marketing data and turn that data into beautiful, informative reports that are easy to understand and share and fully customizable.</p>
     
                    </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-12 col-xs-12">
               <div class="fsrb">
                    <div class="pad">
                    <h3>PRODUCT OVERVIEW</h3>
                     <h5>Data visulization and reporting</h5></br>
                     <span>Put the power of your marketing data in everyone's hands</span> </br></br>
                     <p>Web Data is a new-breed of data visualization and reporting tools that take data-driven decision making to a much higher level. Data Studio lets you effortlessly connect to all your marketing data and turn that data into beautiful, informative reports that are easy to understand and share and fully customizable.</p>
     
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-4 col-sm-4 col-12 col-xs-12">
              <div class="ftrb">
                  <div class="pad">
                       <h3>PRODUCT OVERVIEW</h3>
                     <h5>Data visulization and reporting</h5></br>
                     <span>Put the power of your marketing data in everyone's hands</span> </br></br>
                     <p>Web Data is a new-breed of data visualization and reporting tools that take data-driven decision making to a much higher level. Data Studio lets you effortlessly connect to all your marketing data and turn that data into beautiful, informative reports that are easy to understand and share and fully customizable.</p>
     
                  </div> 
               </div>
            </div>
     
         </div>
       </div>
      </section>   
    -->


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

    
    </body>
    </html> 

