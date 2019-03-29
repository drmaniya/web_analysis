<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Web Analysis</title>
  <link rel="icon" type="image/png" sizes="20x20" href="<?php echo base_url('assets/webvisitor/img/logofi.png');?>">
<link href="<?php echo base_url('assets/webvisitor/css/bootstrap.min.css');?>" type="text/css" rel="stylesheet"/>
<link href="<?php echo base_url('assets/webvisitor/css/owl.carousel.min.css');?>" type="text/css" rel="stylesheet"/>
<link href="<?php echo base_url('assets/webvisitor/css/owl.theme.default.min.css');?>" type="text/css" rel="stylesheet"/>
<link href="<?php echo base_url('assets/webvisitor/css/animate.css');?>" type="text/css" rel="stylesheet"/>
<link href="<?php echo base_url('assets/webvisitor/css/font-awesome.min.css');?>" type="text/css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/webvisitor/css/styl.css');?>">
     <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/webvisitor/css/feat.css');?>">
    
<link href="<?php echo base_url('assets/webvisitor/css/Crawl.css');?>" rel="stylesheet" type="text/css"/>
<script src="<?php echo base_url('assets/webvisitor/js/jquery-3.2.1.min.js');?>"></script>
<script src="<?php echo base_url('assets/webvisitor/js/owl.carousel.min.js');?>"> </script>
<script src="<?php echo base_url('assets/webvisitor/js/popper.min.js');?>"></script>
<script src="<?php echo base_url('assets/webvisitor/js/bootstrap.min.js');?>"></script>


<script src="<?php echo base_url('assets/webvisitor/js/wow.min.js');?>"></script>
              <script>
              new WOW().init();
              </script>

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

              <?php if(@$feat_fnin['content_status']==1) {?>
              <div class="banner-info text-center wow fadeIn delay-05s">
                <h1 class="bnr-title"><!--Web Analysis For Crawel Report--><?php  echo @$feat_fnin['heading']; ?></span></h1>
                <h2 class="bnr-sub-title"><!--SEO CRAWEL--><?php  echo @$feat_fnin['mid_heading']; ?></h2>
                <p class="bnr-para"><?php  echo @$feat_fnin['content']; ?><!--
Whether you want to boost sales or find more users, web </br>Analytics features help you improve your business across your sites and apps. </br>Data collection and management with Web Analysis provides a single,  </br>comprehensive view of the customer that can be customized  </br>to your needs and shared across the organization. --> </p>
               <div class="brn-btn">
                  
                </div>
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
       <section id="portfolio" class="section-padding wow fadeInUp delay-05s">
     
<div class="contain_1">
	<div class="container pl-0 pr-0">
		<div class="row no-gutters">
        <?php if(@$feat_fift['content_status']==1) { ?>
    		<div class="col-lg-4 col-md-4 col-sm-12 col-12">
            <div class="javascript wow fadeInLeft" data-wow-duration="2s">
            	<h3><?php  echo @$feat_fift['heading']; ?><!--Javascript analysis--></h3>
                <p><?php  echo @$feat_fift['content']; ?><!--The Web Analysis crawl is the first crawler that analyzes Javascript websites (DOM) as Web does.--></p>
            </div>
            </div>
           <?php } ?>

           
        <?php if(@$feat_fione['content_status']==1) { ?>
            <div class="col-lg-4 col-md-4 col-sm-12 col-12">
            <div class="instant wow rollIn" data-wow-duration="2s">
            	<h3><?php  echo @$feat_fione['heading']; ?><!--Instant report--></h3>
                <p><?php  echo @$feat_fione['content']; ?><!---Get the report in real time as soon as you start your crawl. Stop wasting your time waiting for your report.--></p>
            </div>
            </div>
           <?php }?>

           
        <?php if(@$feat_fitwo['content_status']==1) { ?>
            <div class="col-lg-4 col-md-4 col-sm-12 col-12">
            <div class="page wow fadeInRight" data-wow-duration="2s"> 
            	<h3><?php  echo @$feat_fitwo['heading']; ?><!--No page limit--></h3>
                <p><?php  echo @$feat_fitwo['content']; ?><!--You can crawl all websites from one to several million pages! You can limit the crawl to a certain number of pages if needed.--></p>
            </div>
            </div>
            <?php } ?>
        </div>
    </div>
</div>  
</section>

   <section id="portfolio" class="section-padding wow fadeInUp delay-05s">
     
<div class="contain_2">
	<div class="container pl-0 pr-0">
		<div class="row no-gutters">
    		
       
        <?php if(@$feat_fithr['content_status']==1) { ?>
        <div class="col-lg-4 col-md-4 col-sm-12 col-12">
            <div class="javascript wow fadeInLeft" data-wow-duration="2s">
            	<h3><?php  echo @$feat_fithr['heading']; ?><!--No installation required--></h3>
                <p><?php  echo @$feat_fithr['content']; ?><!--Analyze all websites (yours and your competitors' one) without any installation.--></p>
            </div>
            </div>
        <?php } ?>

           
        <?php if(@$feat_fifou['content_status']==1) { ?>
            <div class="col-lg-4 col-md-4 col-sm-12 col-12">
            <div class="instant wow rollIn" data-wow-duration="2s">
            	<h3><?php  echo @$feat_fifou['heading']; ?><!--PDF and CSV exports--></h3>
                <p><?php  echo @$feat_fifou['content']; ?><!--Export all your analysis in PDF (analysis summary) or CSV (pages details).--> </p>
            </div>
            </div>
            <?php } ?>


           
        <?php if(@$feat_fifiv['content_status']==1) { ?>
            <div class="col-lg-4 col-md-4 col-sm-12 col-12">
            <div class="page wow fadeInRight" data-wow-duration="2s"> 
            	<h3><?php  echo @$feat_fifiv['heading']; ?><!--Outgoing links--></h3>
                <p><?php  echo @$feat_fifiv['content']; ?><!--The crawler analyzes each outgoing link to make sure they are not broken, within a limit of 100 outgoing links per page.--></p>
            </div>
            </div>
           <?php }?>   

        </div>
    </div>
</div>    
 </section> 
       

 <!--footer-->
      
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