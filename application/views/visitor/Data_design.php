<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Web Analysis</title>
  <link rel="icon" type="image/png" sizes="20x20" href="<?php echo base_url('assets/webvisitor/img/logofi.png');?>">
  <meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
  <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7; IE=EmulateIE9">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
    <link rel="shortcut icon" href=http://www.freshdesignweb.com/wp-content/themes/fv24/images/icon.ico />
    
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:400,300|Raleway:300,400,900,700italic,700,300,600">
  
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/webvisitor/css/jquery.bxslider.css');?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/webvisitor/css/font-awesome.min.css');?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/webvisitor/css/bootstrap.min.css');?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/webvisitor/css/animate.css');?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/webvisitor/css/styl.css');?>">
  
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/webvisitor/css/price/style.css');?>">
   <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/webvisitor/css/data.css');?>">
 
  
     
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
                <a class="navbar-brand" href="#">Web<span class="logo-dec">analysis</span></a>
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
              <?php if(@$pri_tone['content_status']==1){ ?>
              <div class="banner-info text-center wow fadeIn delay-05s">
                <h1 class="bnr-title"><!--PRICING--><?php  echo @$pri_tone['heading'] ?></h1>
                <h2 class="bnr-sub-title">
                     </h2>
                <p class="bnr-para"><!--
                Unlimited analysis,Daily update.</br>
                Best package provide by WEB ANALYSIS for weekly,monthaly,quartly,yearly pricing package.</br>
                when you log in our site as soon as your free trial day start for 7 day and then you will be purchase suitable package.
                --><?php  echo @$pri_tone['content'] ?></p>
               <div class="brn-btn">
                  
                </div>
               <!-- <div class="overlay-detail">
                  <a href="#feature"><i class="fa fa-angle-down"></i></a>
                </div>-->
              </div>
              <?php }?>
            </div>
          </div>
        </div>
      </div>
    </div>
   </div> 
    
    
<!---->
<section id="service" class="section-padding">
    
     <div class="container"> 
       <div class="row">

               <?php if(@$pri_ttwo['content_status']==1) {?>
                <div class="col-md-3 col-sm-6">
                    <div class="pricingTable wow fadeInLeft" data-wow-duration="2s">
                        <div class="pricingTable-header">
                            <h3 class="heading"><?php echo @$pri_ttwo['heading'];  ?><!--Weekly--></h3>
                            <span class="price-value">
                                <span class="currency"><?php echo @$pri_ttwo['mid_heading'];  ?><!--$--></span><?php echo @$pri_ttwo['sub_heading'];  ?><!-- 50-->
                                <span class="month"></span>
                            </span>
                        </div>
                        <div class="pricing-content">
                            <ul>
                            <?php echo @$pri_ttwo['content'];  ?>
                            <!--
                                <li>Unlimited Analysis</li>
                                <li>5 compititor</li>
                                <li>Unlimited Update</li>
                                <li>10 Subdomains</li>
                                <li></li>-->
                            </ul>
                           <!-- <a href="#" class="read">sign up</a>-->
                        </div>
                    </div>
                </div>
                <?php }?>

                 <?php if(@$pri_tthre['content_status']==1) {?>
                <div class="col-md-3 col-sm-6">
                    <div class="pricingTable wow fadeInUp" data-wow-duration="2s">
                        <div class="pricingTable-header">
                            <h3 class="heading"><!--Monthly--><?php echo @$pri_tthre['heading'];  ?></h3>
                            <span class="price-value">
                                <span class="currency"><!--$--><?php echo @$pri_tthre['mid_heading'];  ?></span> <!--150--><?php echo @$pri_tthre['sub_heading'];  ?>
                                <span class="month"></span>
                            </span>
                        </div>
                        <div class="pricing-content">
                            <ul>
                            <?php echo @$pri_tthre['content'];  ?>
                             <!--   <li>Unlimited Analysis</li>
                                <li>5 compititor</li>
                                <li>Unlimited Update</li>
                                <li>10 Subdomains</li>
                                <li></li>-->
                            </ul>
                            
                        </div>
                    </div>
                </div>
                <?php }?>


               <?php if(@$pri_tfou['content_status']==1) {?>
                <div class="col-md-3 col-sm-6">
                    <div class="pricingTable wow fadeInDown" data-wow-duration="2s">
                        <div class="pricingTable-header">
                            <h3 class="heading"><?php echo @$pri_tfou['heading'];  ?><!--Quartly--></h3>
                            <span class="price-value">
                                <span class="currency"><!--$--><?php echo @$pri_tfou['mid_heading'];  ?></span><?php echo @$pri_tfou['sub_heading'];  ?><!-- 700-->
                                <span class="month"></span>
                            </span>
                        </div>
                        <div class="pricing-content">
                            <ul><?php echo @$pri_tfou['content'];  ?><!--
                                    <li>Unlimited Analysis</li>
                                <li>5 compititor</li>
                                <li>Unlimited Update</li>
                                <li>10 Subdomains</li>
                                <li></li>-->
                            </ul>
                            
                        </div>
                    </div>
                </div>
                <?php }?>


               <?php if(@$pri_tfiv['content_status']==1) {?>  
                <div class="col-md-3 col-sm-6">
                    <div class="pricingTable wow fadeInRight" data-wow-duration="2s">
                        <div class="pricingTable-header">
                            <h3 class="heading"><!--Yearly--><?php echo @$pri_tfiv['heading'];  ?></h3>
                            <span class="price-value">
                                <span class="currency"><!--$--><?php echo @$pri_tfiv['mid_heading'];  ?></span> <!--1400--><?php echo @$pri_tfiv['sub_heading'];  ?>
                                <span class="month"></span>
                            </span>
                        </div>
                        <div class="pricing-content">
                            <ul><?php echo @$pri_tfiv['content'];  ?>
                            <!--
                                <li>Unlimited Analysis</li>
                                <li>5 compititor</li>
                                <li>Unlimited Update</li>
                                <li>10 Subdomains</li>
                                <li></li>-->
                                </ul>
                          
                        </div>
                    </div>
                </div>
                <?php }?>
            </div>
      </div>
    </section>   
 <!---->

              <div class="wrapper">
          <div class="container">
            <div class="row">

              <?php if(@$pri_tsix['content_status']==1) {?>
              <div class="banner-info text-center">
                <h1 class="bnr-title wow fadeInUp" data-wow-duration="2s" style="color:#999;"><?php echo @$pri_tsix['heading']; ?><!--Web Analysis For <span>DATA STUDIO--></span></h1>
                <h3 class="bnr-sub-title wow fadeInUp" data-wow-duration="2s" style="color:#999;">
                 <?php echo @$pri_tsix['mid_heading']; ?> <!-- Beautiful data visualization starts here--></h3>
                <p class="bnr-para wow fadeInUp" data-wow-duration="2s" style="color:#999;">
                <?php echo @$pri_tsix['sub_heading']; ?>
 <!--Web Analyzer turns your data into informative dashboards and reports that</br> are easy to read, easy to share, and fully customizable. Dashboarding allows you to </br>tell great data stories to support better business decisions.-->
                <?php echo @$pri_tsix['content']; ?>
<!--
Create unlimited Data Studio custom reports with full editing and sharing.</br>Web Data Studio marks the birth of a new era of how organizations consume, share, </br>and use analytics data to drive insights and create even greater business value.”--></p>
               <div class="brn-btn">
                  
                </div>
               <!-- <div class="overlay-detail">
                  <a href="#feature"><i class="fa fa-angle-down"></i></a>
                </div>-->
              </div>
              <?php } ?>
            </div>
          </div>



<!---->

  <section id="portfolio" class="section-padding wow fadeInUp delay-05s">
      <div class="container">
        <div class="row">

          <?php if(@$pri_nineteen['content_status']==1) {?>
          <div class="col-md-12 text-center white wow fadeInUp">
            <h2 class="" style="color:#999;"><?php echo @$pri_nineteen['heading']; ?><!--Live,Interactive Reports.--></h2> </br>
            
          </div>
          <div class="col-md-6 col-sm-6 col-xs-12 col-12">
            <div class="dsetfimg ">
             <a href="<?php echo base_url('index.php/user/Login');?>"><img src="<?php echo base_url('assets/webvisitor/img/'.@$pri_nineteen['image']);?>" class=" wow fadeInLeft" data-wow-duration="2s"></a>
            </div>
          </div>
           <?php }?> 
            
           <?php if(@$pri_ninine['content_status']==1) {?>
          <div class="col-md-6 col-sm-6 col-xs-12 col-12">
            <div class="dsetsimg">
            <a href="<?php echo base_url('index.php/user/Login');?>"> <img src="<?php echo base_url('assets/webvisitor/img/'.@$pri_ninine['image']);?>" class=" wow fadeInRight" data-wow-duration="2s"></a>
            </div>
          </div>
          <?php  }?>

        </div>
      </div>
    </section>
<!---->

<!---->
         <section id="service" class="section-padding wow fadeInUp delay-05s">
           <div class="container">
             <div class="row">
               
           <?php if(@$pri_tsev['content_status']==1) {?>    
          <div class="col-md-12 text-center white wow fadeInUp" data-wow-duration="2s">
            <h2 class="" style="color:#999;"><!--Capabilities--><?php echo @$pri_tsev['sub_heading']; ?></h2> </br>
            
          </div>
                 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-12">
                      <div class="fb wow fadeInLeft" data-wow-duration="2s">
                        <div class="fbi">
                      <img src="<?php echo base_url('assets/webvisitor/img/'.@$pri_tsev['image']);?>"> 
                         <h4><?php echo @$pri_tsev['heading']; ?><!--Put all your data to work.--></h4><p><?php echo @$pri_tsev['content']; ?>
<!--Easily access all the data sources you need to understand your business and make better decisions.--></p>
                      </div> 
                     </div> 
                 </div>
             <?php } ?>

              <?php  if(@$pri_teig['content_status']==1) {?>
                 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-12">
                     <div class="sb wow fadeInRight" data-wow-duration="2s">
                       <div class="sbi">
                   <img src="<?php echo base_url('assets/webvisitor/img/'.@$pri_teig['image']);?>"> 
                         
                    <h4><?php echo @$pri_teig['heading']; ?> <!--Transform your data.--></h4><p><?php echo @$pri_teig['content']; ?>
<!--Transform your raw data into the metrics and dimensions needed to create easy-to-follow reports and dashboards — no code or queries required.--></p>
                        </div>

                     </div>
                 </div> 
               <?php }?>

              </div>
              </div>
           </section>    
          
          <!--bottom part-->
          
             
         <section id="service" class="section-padding wow fadeInUp delay-05s">
           <div class="container">
             <div class="row">
                <?php if(@$pri_tnin['content_status']==1) {?>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-12">
                    <div class="tb wow fadeInLeft" data-wow-duration="2s">
                       <div class="tbi">
                      <img src="<?php echo base_url('assets/webvisitor/img/'.@$pri_tnin['image']);?>"> 
                         <h4> <?php echo @$pri_tnin['heading']; ?><!--Build engaging reports and dashboards.--></h4><p><?php echo @$pri_tnin['content']; ?>
<!--Data Studio gives you the ability to create meaningful, shareable charts and graphs that bring your data to life.--></p>
                        </div>
                    </div>
                 </div>
                <?php }?>


                <?php if(@$pri_tthr['content_status']==1) {?>
                 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-12">
                    <div class="fob wow fadeInRight" data-wow-duration="2s">
                       <div class="fobi">
                    <img src="<?php echo base_url('assets/webvisitor/img/'.@$pri_tthr['image']);?>"> 
                         
                    <h4><?php echo @$pri_tthr['heading']; ?><!--Leverage teamwork that works.--></h4><p><?php echo @$pri_tthr['content']; ?>
<!--Harness the collective wisdom of your team and work together quickly, from anywhere.--></p>
                    </div>
                   </div>  
                 </div>  
                 <?php }?>
              
             </div>
            </div>
          </section>
<!---->
        <section id="portfolio" class="section-padding wow fadeInUp delay-05s">
      <div class="container">
        <div class="row">

          <?php if(@$pri_thone['content_status']==1) {?>
          <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 att">
               <p class="sub-title pad-bt15 wow fadeInUp" data-wow-duration="2s"><b><!--FEATURED DATA CONNECTION--><?php echo @$pri_thone['heading'];  ?></b></br></br>
<!--Easily connect your all data--><?php echo @$pri_thone['mid_heading']; ?><?php echo @$pri_thone['content']; ?> 
<!--Our pre-built data connectors make it easy to bring together all the data you need, how you need it, to create interactive and dynamic reports.--></p>                <?php } ?>
          
          
          <div class="oneboxdata">
          <?php if(@$pri_thtwo['content_status']==1) {?>
         
            <div class="oeffectdata wow fadeInRight" data-wow-duration="2s">
                <b><h3><!--Web Analytics--><?php echo @$pri_thtwo['heading']; ?></h3></b></br></br>
                <p class="sub-title pad-bt15"><!--Add Web Analytics data to your dashboard to track and analyze the performance of your websites and mobile apps.--><?php echo @$pri_thtwo['content']; ?>
                  </p>
               <div class="farrdata">
                  <i class="fa fa-arrow-right" aria-hidden="true"></i> 
                </div>   
            </div>
           <?php } ?>

         
             <?php if(@$pri_ththr['content_status']==1) {?>
         
             <div class="seffectdata wow fadeInLeft" data-wow-duration="2s">
              <b><h3><!--Web AdWords--><?php echo @$pri_ththr['heading']; ?></h3></b></br></br>
              <p class="sub-title pad-bt15"><!-- Add Web AdWords data to your dashboard to track and analyze the performance of your digital marketing...--><?php echo @$pri_ththr['content']; ?>
              </p>
               <div class="sarrdata">
                 <i class="fa fa-arrow-right" aria-hidden="true"></i>
               </div>
               </div>
               <?php }?>
           </div>
           
       </div>
          
          <?php if(@$pri_thfou['content_status']==1) {?> 
          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <div class="effedata wow zoomIn" data-wow-duration="2s"> 
               <div class="setdata">
                  <b><h3><!--Web BigQuery--><?php echo @$pri_thfou['heading']; ?></h3></b></br></br>
              <p class="sub-title pad-bt15"> <?php echo @$pri_thfou['content']; ?><!--Add BigQuery data to your dashboard to track and analyze data from your big data warehouse or to visualize your key business metrics...-->
              </p>
               <div class="tarrdata">
                 <i class="fa fa-arrow-right" aria-hidden="true"></i>
               </div>
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
                    <textarea class="form-control" name="message" placeholder="Message"  rows="5" data-rule="required" data-msg="Please write something for us" <?php if(@form_error('message')){ echo "autofocus"; }?> > <?php echo @$message; ?></textarea>
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
  <script src="<?php echo base_url('assets/webvisitor/js/wow.min.js');?>"></script>
  <script>
    new WOW().init();
  </script>
    
    </body>
    </html> 

