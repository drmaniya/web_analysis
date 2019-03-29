<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Web Analysis</title>
  <link rel="icon" type="image/png" sizes="20x20" href="<?php echo base_url('assets/webvisitor/img/logofi.png');?>">

  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/webvisitor/css/jquery.bxslider.css');?>">
<link href="<?php echo base_url('assets/webvisitor/css/bootstrap.min.css');?>" type="text/css" rel="stylesheet"/>
<link href="<?php echo base_url('assets/webvisitor/css/owl.carousel.min.css');?>" type="text/css" rel="stylesheet"/>
<link href="<?php echo base_url('assets/webvisitor/css/owl.theme.default.min.css');?>" type="text/css" rel="stylesheet"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/webvisitor/css/font-awesome.min.css');?>">
  
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/webvisitor/css/animate.css');?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/webvisitor/css/styl.css');?>">
  <link href="<?php echo base_url('assets/webvisitor/css/Seobenchmark.css');?>" rel="stylesheet" type="text/css"/>


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
              <?php  if(@$feat_fisix['content_status']==1) {?>
              <div class="banner-info text-center wow fadeIn delay-05s">
                <h1 class="bnr-title"><?php echo @$feat_fisix['heading'];  ?><!--Web Analysis For <span>SEO BENCHMARK Report--></span></h1>
                <div class="image"><img src="<?php  echo base_url('assets/webvisitor/img/'.@$feat_fisix['image']);?>"></div>
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
    
    <!--/ HEADER-->

<div class="list ml-0 mr-0">
	<div class="row no-gutters">

        <?php  if(@$feat_fisev['content_status']==1) {?>
    		<div class="col-lg-6 col-md-12 col-sm-12 col-12">
            	<div class="info wow fadeInLeft" data-wow-duration="2s">
                	<h3><?php echo @$feat_fisev['heading'];  ?><!--Your competitors' rankings--></h3>
                    <p class="list_con"><?php echo @$feat_fisev['mid_heading'];?><!--Discover keywords on which your competitors are ranked and generate organic traffic. Discover their ranking strategy and analyze keywords you should work on. Get detailed information for each keyword: Cost per click, search volume, competitive intensity etc.--></p>
                    <ul>
                    <?php  echo @$feat_fisev['sub_heading'];  ?>
                    <!--	<li><i class="fa fa-check fa-fw"></i><b> Keywords and positions</b></li>
                        <li><i class="fa fa-check fa-fw"></i><b> Estimated search traffic</b></li>
                        <li><i class="fa fa-check fa-fw"></i><b> Search volume</b></li>
                        <li><i class="fa fa-check fa-fw"></i><b> Cost per click</b></li>
                        <li><i class="fa fa-check fa-fw"></i><b> Competitiveness strength</b></li>
                    --></ul>
                    <a href="<?php echo base_url('index.php/user/Login');  ?>" class="btn btn-sm btn-success"><?php echo @$feat_fisev['content']; ?></a>
                </div>
      		</div>
            <div class="col-lg-6 col-md-12 col-sm-12 col-12">
            <div class="info_aa wow fadeInRight" data-wow-duration="2s">
            	<img src="<?php echo base_url('assets/webvisitor/img/'.@$feat_fisev['image']);?>"/>
             </div>
      		</div>
        </div>
        <?php } ?>
</div>

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