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

  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/webvisitor/css/animate.css');?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/webvisitor/css/styl.css');?>">
     <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/webvisitor/css/feat.css');?>">
<link href="<?php echo base_url('assets/webvisitor/css/Page.css');?>" rel="stylesheet" type="text/css"/>
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
              <?php if(@$feat_fieig['content_status']==1) {?>
              <div class="banner-info text-center wow fadeIn delay-05s">
               <h1 class="bnr-title" style="color:#FFF;"><?php echo @$feat_fieig['heading'];  ?><!--Web Analysis For Page Analysis Report--></h1>
                <h2 class="bnr-sub-title"><?php echo @$feat_fieig['mid_heading'];  ?><!--PAGE ANALYSIS--></h2>
                <p class="bnr-para"><?php echo @$feat_fieig['content'];  ?><!--
Whether you want to boost sales or find more users, Web </br>Analysis features help you improve your business across your sites and apps. </br>Data collection and management with Web Analyzer provides a single,  </br>comprehensive view of the customer that can be customized  </br>to your needs and shared across the organization. --> </p>
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


<!---->

<div class="instant">
	<div class="container pl-0 pr-0">
		<div class="row no-gutters">
       <?php if(@$feat_finin['content_status']==1) {?>
    		<div class="col-lg-3 col-md-5 col-sm-12 col-12">
        		<div class="instant_left wow fadeInLeft" data-wow-duration="2s">
        			<div class="instant_image">
        				<img src="<?php echo base_url('assets/webvisitor/img/'.@$feat_finin['image']);?>">
            		</div>
        		</div>
        	</div>
    		<div class="col-lg-9 col-md-7 col-sm-12 col-12">
        		<div class="instant_right wow fadeInRight" data-wow-duration="2s">
                	<h1><?php echo @$feat_finin['heading'];  ?><!--An instant Score--></h1>
                	<p class="featured"><?php echo @$feat_finin['mid_heading'];  ?><!--Get the benchmark of a page quality--></p>
                	<p class="contant"><?php echo @$feat_finin['content'];  ?><!--The Page Analysis Score is the score we give to each page optimization. More than a simple number, this indicator represents the overall quality of the page and allows you to quickly compare two analyses. The score is a weighted score calculated on the entirety of the score of each criterion.--></p>
           		</div>
        	</div>
          <?php } ?> 
   			</div>
		</div>
	</div>   
</div>



<div class="detailed">
	<div class="container pl-0 pr-0">
		<div class="row no-gutters">
    		<?php if(@$feat_sixteen['content_status']==1) {?>
              
        <div class="col-lg-3 col-md-5 col-sm-12 col-12">
        		<div class="instant_left wow fadeInLeft" data-wow-duration="2s">
        			<div class="instant_image">
        				<img src="<?php echo base_url('assets/webvisitor/img/'.@$feat_sixteen['image']);?>">
            		</div>
        		</div>
        	</div>
    		<div class="col-lg-9 col-md-7 col-sm-12 col-12">
        		<div class="instant_right wow fadeInRight" data-wow-duration="2s">
                	<h1><?php  echo @$feat_sixteen['heading']; ?><!--Detailes Criteria--></h1>
                	<p class="featured"><?php  echo @$feat_sixteen['mid_heading']; ?><!--Decipher each point of your analysis with tool tips--></p>
                	<p class="contant"><?php  echo @$feat_sixteen['content']; ?><!--Each criterion in our analysis is commented in order to succinctly explain its relevance in your page optimization.--></p>
           		</div>
        	</div>
          <?php } ?>
   			</div>
		</div>
	</div>   
</div>



<div class="chart">
	<div class="container pl-0 pr-0">
		<div class="row no-gutters">
      <?php if(@$feat_sixone['content_status']==1) {?>
              
    		<div class="col-lg-3 col-md-5 col-sm-12 col-12">
        		<div class="instant_left wow fadeInLeft" data-wow-duration="2s">
        			<div class="instant_image">
        				<img src="<?php echo base_url('assets/webvisitor/img/'.@$feat_sixone['image']);?>">
            		</div>
        		</div>
        	</div>
    		<div class="col-lg-9 col-md-7 col-sm-12 col-12">
        		<div class="instant_right wow fadeInRight" data-wow-duration="2s">
                	<h1><?php  echo @$feat_sixone['heading']; ?><!--Easy-to-use charts--></h1>
                	<p class="featured"><?php  echo @$feat_sixone['mid_heading']; ?><!--A quickly view of your strengths and weaknesses.--></p>
                	<p class="contant"><?php  echo @$feat_sixone['content']; ?><!--Easy-to-use, clear and detailed charts help you to understand at a glance strengths and weaknesses of your page and offer you an easier reading of your analysis.--></p>
           		</div>
        	</div>
          <?php } ?>
   			</div>
		</div>
	</div>   
</div>



<div class="prioritirized">
	<div class="container pl-0 pr-0">
		<div class="row no-gutters">
      <?php if(@$feat_sixtwo['content_status']==1) {?>
              
    		<div class="col-lg-3 col-md-5 col-sm-12 col-12">
        		<div class="instant_left wow fadeInLeft" data-wow-duration="2s">
        			<div class="instant_image">
        				<img src="<?php echo base_url('assets/webvisitor/img/'.@$feat_sixtwo['image']);?>">
            		</div>
        		</div>
        	</div>
    		<div class="col-lg-9 col-md-7 col-sm-12 col-12">
        		<div class="instant_right wow fadeInRight" data-wow-duration="2s">
                	<h1><?php echo @$feat_sixtwo['heading'];  ?><!--A prioritized to do list--></h1>
                	<p class="featured"><?php echo @$feat_sixtwo['mid_heading'];  ?><!--Generate your SEO to do list in order of importance--></p>
                	<p class="contant"><?php echo @$feat_sixtwo['content'];  ?><!--The automatically generated to do list allows you to identify at a glance priorities to solve in your website from the most urgent to the less important.--></p>
           		</div>
        	</div>
          <?php } ?>
   			</div>
		</div>
	</div>   
</div>



<div class="customizable">
	<div class="container pl-0 pr-0">
		<div class="row no-gutters">
      <?php if(@$feat_sixthr['content_status']==1) {?>
              
    		<div class="col-lg-3 col-md-5 col-sm-12 col-12">
        		<div class="instant_left wow fadeInLeft" data-wow-duration="2s">
        			<div class="instant_image">
        				<img src="<?php echo base_url('assets/webvisitor/img/'.@$feat_sixthr['image']);?>">
            		</div>
        		</div>
        	</div>
    		<div class="col-lg-9 col-md-7 col-sm-12 col-12">
        		<div class="instant_right wow fadeInRight" data-wow-duration="2s">
                	<h1><?php echo @$feat_sixthr['heading'];  ?><!--Customizable PDF exports--></h1>
                	<p class="featured"><?php echo @$feat_sixthr['mid_heading'];  ?><!--Resell our analyses in white labelled PDFs--></p>
                	<p class="contant"><?php echo @$feat_sixthr['content'];  ?><!--Thanks to our theme editor, export your analyses in customizable PDF with your own colors and logo by selecting which criteria you want to export.--></p>
           		</div>
        	</div>
          <?php  } ?>
   			</div>
		</div>
	</div>   
</div>
</br></br></br>

<!---->



 <!--footer-->
      
    <!---->
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