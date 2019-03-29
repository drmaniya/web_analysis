<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Web Analysis</title>
  <link rel="icon" type="image/png" sizes="20x20" href="<?php echo base_url('assets/webvisitor/img/logofi.png');?>">
  <meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
  <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">

  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:400,300|Raleway:300,400,900,700italic,700,300,600">

<link href="<?php echo base_url('assets/webvisitor/css/owl.carousel.min.css');?>" type="text/css" rel="stylesheet"/>
<link href="<?php echo base_url('assets/webvisitor/css/owl.theme.default.min.css');?>" type="text/css" rel="stylesheet"/> 
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/webvisitor/css/jquery.bxslider.css');?>"/>
<link href="<?php echo base_url('assets/webvisitor/css/font-awesome.min.css');?>" type="text/css" rel="stylesheet" />

<link href="<?php echo base_url('assets/webvisitor/css/bootstrap.min.css');?>" type="text/css" rel="stylesheet"/> 
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/webvisitor/css/animate.css');?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/webvisitor/css/styl.css');?>">
<link href="<?php echo base_url('assets/webvisitor/css/Blink.css');?>" rel="stylesheet" type="text/css"/>


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
              <?php if(@$feat_sixfou['content_status']==1) { ?>
              <div class="banner-info text-center wow fadeIn delay-05s">
                <h1 class="bnr-title"><?php echo @$feat_sixfou['heading']; ?><!--Web Analysis For BACKLINKS Report--></span></h1>
                <h2 class="bnr-sub-title"></h2>
                <div class="image"> <img src="<?php echo base_url('assets/webvisitor/img/'.@$feat_sixfou['image']);?>">
                </div>
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
 </div>       
        <!---->




<div class="list ml-0 mr-0">
	<div class="row no-gutters">

      <?php if(@$feat_sixfiv['content_status']==1) { ?>
    		<div class="col-lg-6 col-md-12 col-sm-12 col-12">
            	<div class="info wow fadeInLeft" data-wow-duration="2s">
                	<h3><?php  echo @$feat_sixfiv['heading']; ?><!--List your backlinks--></h3>
                    <p class="list_con"><?php  echo @$feat_sixfiv['mid_heading']; ?><!--Find the list of backlinks pointing to a domain, a subdomain or an URL. Discover your competitors' most important backlinks and improve your netlinking strategy.--></p>
                    <ul><?php  echo @$feat_sixfiv['sub_heading']; ?>
                    <!--	<li><i class="fa fa-check fa-fw"></i><b> Follow/Nofollow links</b></li>
                        <li><i class="fa fa-check fa-fw"></i><b> Analysis of the importance of the link</b></li>
                        <li><i class="fa fa-check fa-fw"></i><b> Link anchor</b></li>
                        <li><i class="fa fa-check fa-fw"></i><b> Destination URL</b></li>
                        <li><i class="fa fa-check fa-fw"></i><b> Ordered by trust</b></li>-->
                    </ul>
                    <a href="<?php echo base_url('index.php/user/Login');  ?>" class="btn btn-sm btn-success"><?php  echo @$feat_sixfiv['content']; ?><!--Try now for free!--></a>
                </div>
      		</div>
            <div class="col-lg-6 col-md-12 col-sm-12 col-12">
            <div class="info_aa wow fadeInRight" data-wow-duration="2s">
            	<img src="<?php echo base_url('assets/webvisitor/img/'.@$feat_sixfiv['image']);?>"/>
             </div>
      		</div>
          <?php } ?>
        </div>
</div>
<!---->

  <footer id="footer">
      <div class="container">
        <div class="row text-center">
          <p>&copy; Web Analysis. All Rights Reserved.</p>
       <!--   <div class="credits">
            <!
              All the links in the footer should remain intact.
              You can delete the links only if you purchased the pro version.
              Licensing information: https://bootstrapmade.com/license/
              Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Baker
            
            Designed by Bootstrap Templates</a>
          </div>
       --> </div>
      </div>
    </footer>

 <script src="<?php echo base_url('assets/webvisitor/js/jquery.min.js');?>"></script>
  <script src="<?php echo base_url('assets/webvisitor/js/jquery.easing.min.js');?>"></script>
  <script src="<?php echo base_url('assets/webvisitor/js/bootstrap.min.js');?>"></script>
  <script src="<?php echo base_url('assets/webvisitor/js/wow.js');?>"></script>
  <script src="<?php echo base_url('assets/webvisitor/js/jquery.bxslider.min.js');?>"></script>
  <script src="<?php echo base_url('assets/webvisitor/js/custom.js');?>"></script>
  <script src="<?php echo base_url('assets/webvisitor/contactform/contactform.js');?>"></script>

       

</body>
</html>