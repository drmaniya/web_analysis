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
<link href="<?php echo base_url('assets/webvisitor/css/font-awesome.min.css');?>" type="text/css" rel="stylesheet" />


  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/webvisitor/css/jquery.bxslider.css');?>">
 
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/webvisitor/css/bootstrap.min.css');?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/webvisitor/css/animate.css');?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/webvisitor/css/styl.css');?>">
  
<link href="<?php echo base_url('assets/webvisitor/css/Ranktracking.css');?>" rel="stylesheet" type="text/css"/>

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
               <?php if(@$feat_sixeig['content_status']==1) { ?>
               <div class="banner-info text-center wow fadeIn delay-05s">
                <h1 class="bnr-title"><?php echo @$feat_sixeig['heading'];  ?><!--Web Analysis For RANK TRACkING Report--></h1>
                <h2 class="bnr-sub-title"></h2>
                <div class="image"><img src="<?php echo base_url('assets/webvisitor/img/'.@$feat_sixeig['image']);?>"></div>
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
    <!--/ HEADER-->


<div class="feature wow fadeIn">
	<div class="row no-gutters">
      <?php if(@$feat_sixnin['content_status']==1) {?>
    	<div class="col-lg-6 col-md-12 col-sm-12 col-12">
        	<div class="info wow fadeInLeft" data-wow-duration="2s">
            	<h3><?php  echo @$feat_sixnin['heading']; ?><!--An efficient rank tracking--></h3>
               
                <p class="track2"><?php  echo @$feat_sixnin['mid_heading']; ?><!--Track the keywords position of your website thanks to the Rank Tracking. Our tool gives you the possibility to analyze your rank to identify the best keywords opportunities. Discover the positions of your competitors on your keywords with our competitive intelligence. Our position tracking tool will be essential in your web strategy providing clear and detailed charts of the evolution of your position.--></p>
               <ul class="ul"><?php  echo @$feat_sixnin['sub_heading']; ?>
                	<!--<li><i class="fa fa-check"></i><b> Track the 100 first results (10 first pages of Google)</b></li>
                	<li><i class="fa fa-check"></i><b> Tracked every day</b></li>
                	<li><i class="fa fa-check"></i><b> National in 58 countries or geolocated in 36,000 cities across the world</b></li>
                	<li><i class="fa fa-check"></i><b> Track up to 5 competitors</b></li>
                	<li><i class="fa fa-check"></i><b> Get suggested keywords to track</b></li>-->
            	</ul>
                <a href="<?php echo base_url('index.php/user/Login'); ?>" class="btn btn-sm btn-success"><?php  echo @$feat_sixnin['content']; ?><!--Try now for free!--></a>
              
            </div>
        </div>
        <div class="col-lg-6 col-md-12 col-sm-12 col-12">
        <div class="feature_image wow fadeInRight" data-wow-duration="2s">
        	<img src="<?php echo base_url('assets/webvisitor/img/'.@$feat_sixnin['image']);?>">
            
         </div>
        </div>
        <?php } ?>
        
    </div>
</div>




<div class="divider">
	<div class="row no-gutters">
    	<div class="col-lg-12 col-md-12 col-sm-12 col-12">
        	<hr>
        </div>
     </div>
</div>


<div class="head">
	<div class="row no-gutters">
    	<div class="col-lg-12 col-md-12 col-sm-12 col-12">
        	<p class="con">Available in 59 countries worldwide</p>
        </div>
     </div>
</div>


<div class="flag">
	<div class="row no-gutters">
    	<div class="col-lg-3 col-md-3 col-sm-12 col-12">
        	<div class="flag_1">
             
            <p class="p"><img src="<?php echo base_url('assets/webvisitor/img/at.png');?>"/> AUSTRIA</p>
         <p class="p"><img src="<?php echo base_url('assets/webvisitor/img/be.png');?>"/> BELGIUM</p>
          <p class="p"><img src="<?php echo base_url('assets/webvisitor/img/bg.png');?>"/> BANGLADESH</p>
          <p class="p"><img src="<?php echo base_url('assets/webvisitor/img/ca.png');?>"/> CANADA</p>
          <p class="p"><img src="<?php echo base_url('assets/webvisitor/img/ch.png');?>"/>SWIZERLAND</p>
         <p class="p"><img src="<?php echo base_url('assets/webvisitor/img/cl.png');?>"/> CHILE</p>
          <p class="p"><img src="<?php echo base_url('assets/webvisitor/img/il.png');?>"/> ISRAIL</p>
          <p class="p"><img src="<?php echo base_url('assets/webvisitor/img/in.png');?>"/> INDIA</p>
          <p class="p"><img src="<?php echo base_url('assets/webvisitor/img/jp.png');?>"/> JAPAN</p>
          <p class="p"><img src="<?php echo base_url('assets/webvisitor/img/nz.png');?>"/> NEW ZEALAND</p>
          <p class="p"><img src="<?php echo base_url('assets/webvisitor/img/th.png');?>"/> THAILAND</p>
          <p class="p"><img src="<?php echo base_url('assets/webvisitor/img/uk.png');?>"/> UNITED KINGDOM</p>
          <p class="p"><img src="<?php echo base_url('assets/webvisitor/img/ae.png');?>"/> UNITED ARAB EMIRATES</p>
            
<p class="p"><img src="<?php echo base_url('assets/webvisitor/img/za.png');?>"/> SOUTH AFRICA</p>
        <p class="p"><img src="<?php echo base_url('assets/webvisitor/img/us.png');?>"/>UNITED STATE OF AMERICA</p>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-12 col-12">
        	<div class="flag_2">
      	<p class="p"><img src="<?php echo base_url('assets/webvisitor/img/ar.png');?>"/> ARGENTINA</p>
      <p class="p"><img src="<?php echo base_url('assets/webvisitor/img/au.png');?>"/> AUSTRALIA</p>
       <p class="p"><img src="<?php echo base_url('assets/webvisitor/img/br.png');?>"/> BRAZIL</p>
       
       <p class="p"><img src="<?php echo base_url('assets/webvisitor/img/cy.png');?>"/> CYPRUS</p>
       <p class="p"><img src="<?php echo base_url('assets/webvisitor/img/eg.png');?>"/> EGYPT</p>
       <p class="p"><img src="<?php echo base_url('assets/webvisitor/img/et.png');?>"/> ETHIOPIA</p>
       <p class="p"><img src="<?php echo base_url('assets/webvisitor/img/hk.png');?>"/> HONG KONG</p>
       <p class="p"><img src="<?php echo base_url('assets/webvisitor/img/lb.png');?>"/> LEBANON</p>
       <p class="p"><img src="<?php echo base_url('assets/webvisitor/img/mx.png');?>"/> MEXICO</p>
       <p class="p"><img src="<?php echo base_url('assets/webvisitor/img/my.png');?>"/> MALASIA</p>
       <p class="p"><img src="<?php echo base_url('assets/webvisitor/img/pe.png');?>"/> PERU</p>
       <p class="p"><img src="<?php echo base_url('assets/webvisitor/img/ph.png');?>"/> PHILIPPINES</p>
       <p class="p"><img src="<?php echo base_url('assets/webvisitor/img/pk.png');?>"/> PAKISTAN</p>
       <p class="p"><img src="<?php echo base_url('assets/webvisitor/img/sg.png');?>"/> SINGAPORE</p>
       <p class="p"><img src="<?php echo base_url('assets/webvisitor/img/tr.png');?>"/> TURKEY</p>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-12 col-12">
        	<div class="flag_3">
                 <p class="p"><img src="<?php echo base_url('assets/webvisitor/img/tw.png');?>"/> TAIWAN</p>
         <p class="p"><img src="<?php echo base_url('assets/webvisitor/img/ua.png');?>"/> UKRAINE</p>
         <p class="p"><img src="<?php echo base_url('assets/webvisitor/img/uy.png');?>"/> URUGUAY</p>
         <p class="p"><img src="<?php echo base_url('assets/webvisitor/img/vn.png');?>"/> VIETNAM</p>
         <p class="p"><img src="<?php echo base_url('assets/webvisitor/img/cz.png');?>"/> CZECH REPUBLIC</p>
         <p class="p"><img src="<?php echo base_url('assets/webvisitor/img/de.png');?>"/> GERMANY</p>
         <p class="p"><img src="<?php echo base_url('assets/webvisitor/img/dk.png');?>"/> DENMARK</p>
         <p class="p"><img src="<?php echo base_url('assets/webvisitor/img/ee.png');?>"/> ESTONIA</p>
         <p class="p"><img src="<?php echo base_url('assets/webvisitor/img/es.png');?>"/> SPAIN</p>
         <p class="p"><img src="<?php echo base_url('assets/webvisitor/img/fi.png');?>"/> FINLAND</p>
         <p class="p"><img src="<?php echo base_url('assets/webvisitor/img/fr.png');?>"/> FRANCE</p>
         <p class="p"><img src="<?php echo base_url('assets/webvisitor/img/ge.png');?>"/> GEORGIA</p>
         <p class="p"><img src="<?php echo base_url('assets/webvisitor/img/gr.png');?>"/> GREECE</p>
         <p class="p"><img src="<?php echo base_url('assets/webvisitor/img/hr.png');?>"/> CROATIA</p>
         <p class="p"><img src="<?php echo base_url('assets/webvisitor/img/hu.png');?>"/> HUNGARY</p>
            
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-12 col-12">
        	<div class="flag_4">
    
       <p class="p"><img src="<?php echo base_url('assets/webvisitor/img/ie.png');?>"/> IRELAND</p>
       <p class="p"><img src="<?php echo base_url('assets/webvisitor/img/it.png');?>"/> ITALY</p>
<p class="p"><img src="<?php echo base_url('assets/webvisitor/img/kz.png');?>"/> KAZAKHSTAN</p>
        <p class="p"><img src="<?php echo base_url('assets/webvisitor/img/lt.png');?>"/> LITHUANIA</p>
          <p class="p"><img src="<?php echo base_url('assets/webvisitor/img/lu.png');?>"/> 	LUXEMBOURG</p>
          <p class="p"><img src="<?php echo base_url('assets/webvisitor/img/nl.png');?>"/> NETHERLANDS</p>
          <p class="p"><img src="<?php echo base_url('assets/webvisitor/img/no.png');?>"/> NORWAY</p>
          <p class="p"><img src="<?php echo base_url('assets/webvisitor/img/pl.png');?>"/> POLAND</p>
           <p class="p"><img src="<?php echo base_url('assets/webvisitor/img/pt.png');?>"/> PORTUGAL</p>
           <p class="p"><img src="<?php echo base_url('assets/webvisitor/img/ro.png');?>"/> ROMANIA</p>
           <p class="p"><img src="<?php echo base_url('assets/webvisitor/img/rs.png');?>"/> SERBIA</p>
            <p class="p"><img src="<?php echo base_url('assets/webvisitor/img/ru.png');?>"/> RUSSIA</p>
           <p class="p"><img src="<?php echo base_url('assets/webvisitor/img/se.png');?>"/> SWEDEN</p>
            </div>
        </div>
     </div>
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

 <script src="<?php echo base_url('assets/webvisitor/js/jquery.min.js');?>"></script>
  <script src="<?php echo base_url('assets/webvisitor/js/jquery.easing.min.js');?>"></script>
  <script src="<?php echo base_url('assets/webvisitor/js/bootstrap.min.js');?>"></script>
  <script src="<?php echo base_url('assets/webvisitor/js/wow.js');?>"></script>
  <script src="<?php echo base_url('assets/webvisitor/js/jquery.bxslider.min.js');?>"></script>
  <script src="<?php echo base_url('assets/webvisitor/js/custom.js');?>"></script>
  <script src="<?php echo base_url('assets/webvisitor/contactform/contactform.js');?>"></script>

       
</body>
</html>