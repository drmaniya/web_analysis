<!DOCTYPE html>
<html lang="en">


<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="" />
    <meta name="author" content="" />
  <title>Web Analysis</title>
  <link rel="icon" type="image/png" sizes="20x20" href="<?php echo base_url('assets/webvisitor/img/logofi.png');?>">
  <meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
  <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">

  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:400,300|Raleway:300,400,900,700italic,700,300,600">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/webvisitor/css/bootstrap.min.css');?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/webvisitor/css/font-awesome.min.css');?>">

  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/webvisitor/css/jquery.bxslider.css');?>">
    
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/webvisitor/css/animate.css');?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/webvisitor/css/styl.css');?>">
<style>
.carousel-indicators li{background-color:#000;}
.carousel-indicators .active{background-color:#F00;}
.carousel-indicators{bottom:-40px;}
.pad-top {

     padding-top:80px;
}
#carousel-example {
    margin-top:50px;
	color:#000;

}

.text-center {
    text-align:center;
}

.user-img {
border: 2px solid #fff;
overflow: hidden;
border-radius: 50%;
display: inline-block;
}

.img-u {
  height: 220px;
width: 250px;
}

.c-black {
    color:#000;
    font-style: italic;
font-size: 20px;
padding: 5px;
}
</style>
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
                <a class="navbar-brand" href="<?php echo base_url('index.php/Home');?>">Web<span class="logo-dec">Analysis</span></a>
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

              <?php if(@$head_seventeen['content_status']==1) {?>
              <div class="banner-info text-center wow fadeIn delay-05s">
                <h1 class="bnr-title"><?php echo @$head_seventeen['heading'];  ?><!--Welcome to Web Analysis--></h1>
                <h2 class="bnr-sub-title"><?php echo @$head_seventeen['mid_heading'];  ?><!--Improve Customer Experience--></h2>
                <p class="bnr-para"><?php echo @$head_seventeen['content'];  ?><!--Web Analytics gives you the digital analytics tools you need to analyze data from all </br>touchpoints in one place, for a deeper understanding of the customer experience.</br> You can then share the insights that matter with your whole organization.--></p>
              
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
    
     <section id="portfolio">
      <div class="container">
        <div class="row">
          
          <?php if(@$head_sevone['content_status']==1) {?>
          <div class="col-md-12 text-center">
            <h2 class="service-title pad-bt15"><?php echo @$head_sevone['heading']; ?><!--Report--></h2>
            <p class="sub-title pad-bt15"><?php echo @$head_sevone['content']; ?><!--The most efficient Website Analyzer
Crawl, On-page analysis, Rank Tracking, Backlinks and more....--></p>
            <hr class="bottom-line">
          </div>
          <?php } ?>

          <?php if(@$head_sevtwo['content_status']==1) {?>
          <div class="col-md-4 col-sm-6 col-xs-12 portfolio-item padding-right-zero mr-btn-15      wow fadeInLeft delay-05s" data-wow-duration="1.5s">
            <figure>
           <img src="<?php echo base_url('assets/webvisitor/img/'.@$head_sevtwo['image']);?>" class="img-responsive">
              
              <figcaption>
                <h2><?php echo @$head_sevtwo['heading']; ?><!--Site vs Site--></h2>
                <p><?php echo @$head_sevtwo['content']; ?><!--Compare queries getting the most SEO traffic between two websites and optimize your SEO strategy.--></p>
           </figcaption>
            </figure>
          </div>
          <?php } ?>
        
         <?php if(@$head_sevthr['content_status']==1) {?>
          <div class="col-md-4 col-sm-6 col-xs-12 portfolio-item padding-right-zero mr-btn-15 wow zoomIn" data-wow-duration="2s">
            <figure>
              
            <img src="<?php echo base_url('assets/webvisitor/img/'.@$head_sevthr['image']);?>" class="img-responsive">
                 
              <figcaption>
                <h2><?php echo @$head_sevthr['heading']; ?><!--Backlinks--></h2>
              <p><?php echo @$head_sevthr['content']; ?>
<!--Get the list of the most important follow and nofollow backlinks of any URL or domain name. Check backlinks of your competitors and discover their strategy.-->.</p>
             </figcaption>
            </figure>
          </div>
          <?php } ?>

           <?php if(@$head_sevfou['content_status']==1) {?>
          <div class="col-md-4 col-sm-6 col-xs-12 portfolio-item padding-right-zero mr-btn-15      wow fadeInRight delay-05s" data-wow-duration="1.5s">
            <figure>
              <img src="<?php echo base_url('assets/webvisitor/img/'.@$head_sevfou['image']);?>" class="img-responsive">
              <figcaption>
                <h2><?php echo @$head_sevfou['heading']; ?><!--Page analysis-->
</h2><p><?php echo @$head_sevfou['content']; ?><!--Criteria based on SEO, design, content, performance, accessibility and security provides. you with each issue you have to fix to improve your SEO.--></p>
           </figcaption>
            </figure>
          </div>
         <?php } ?>

        <?php if(@$head_sevfiv['content_status']==1) {?>
        <div class="col-md-4 col-sm-6 col-xs-12 portfolio-item padding-right-zero mr-btn-15      wow fadeInLeft delay-05s" data-wow-duration="2s">
            <figure>
             <img src="<?php echo base_url('assets/webvisitor/img/'.@$head_sevfiv['image']);?>" class="img-responsive">
           <figcaption>
                <h2><?php echo @$head_sevfiv['heading']; ?><!--SEO Crawl-->
</h2>
                <p><?php echo @$head_sevfiv['content']; ?><!-- Discover your strengths and weaknesses easily check.if your website can be crawled by search engines.--></p>
              </figcaption>
            </figure>
          </div>
         <?php } ?>
      
         <?php if(@$head_sevsix['content_status']==1) {?> 
          <div class="col-md-4 col-sm-6 col-xs-12 portfolio-item padding-right-zero mr-btn-15 wow zoomIn" data-wow-duration="2s">
            <figure>
           <img src="<?php echo base_url('assets/webvisitor/img/'.@$head_sevsix['image']);?>" class="img-responsive">
              <figcaption>
                <h2><?php echo @$head_sevsix['heading']; ?><!--SEO benchmark--></h2>
                <p><?php echo @$head_sevsix['content']; ?><!--
SEO traffic to one domain name with details like Cost Per Clic, competition, search volume, etc.--></p>
              </figcaption>
            </figure>
          </div>
          <?php } ?>
         
         <?php if(@$head_sevsev['content_status']==1) { ?>
        <div class="col-md-4 col-sm-6 col-xs-12 portfolio-item padding-right-zero mr-btn-15      wow fadeInRight delay-05s" data-wow-duration="2s">
            <figure>
              <img src="<?php echo base_url('assets/webvisitor/img/'.@$head_sevsev['image']);?>" class="img-responsive">
              
              <figcaption>
                <h2><?php echo @$head_sevsev['heading']; ?><!--Rank Tracking--></h2>
                <p><?php echo @$head_sevsev['content']; ?><!--
 Compare your position to that of your competitors and track easily and automatically your SEO.--></p>
              </figcaption>
            </figure>
          </div>  
        <?php  } ?>
       
        </div>
      </div>
    </section>
    <!---->
    <section id="feature" class="section-padding">
      <div class="container">
        <div class="row">
          
          <?php if(@$head_seveig['content_status']==1) {?>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="wrap-item text-center">
              <div class="item-img       wow fadeInLeft delay-05s" data-wow-duration="2s">
                <img src="<?php echo base_url('assets/webvisitor/img/'.@$head_seveig['image']);?>">
              </div>
              <h3 class="pad-bt15      wow fadeInLeft delay-05s" data-wow-duration="2s">   <?php echo @$head_seveig['heading']; ?><!-- Build A Complete Picture.--></h3>
              <p   class=" wow fadeInLeft delay-05s" data-wow-duration="2s"><?php echo @$head_seveig['content']; ?><!--Understand your site and app users to better evaluate the performance of your content, products, and more.--></p>
              </div>
          </div>
          <?php } ?>          

          <?php if(@$head_sevnin['content_status']==1) {?>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="wrap-item text-center">
              <div class="item-img      wow fadeInUp delay-05s" data-wow-duration="2s">
                <img src="<?php echo base_url('assets/webvisitor/img/'.@$head_sevnin['image']);?>">
              </div>
              <h3 class="pad-bt15      wow fadeInUp delay-05s" data-wow-duration="2s"><?php echo @$head_sevnin['heading']; ?><!--Get Insight Only Google Can Give You.--></h3>
              <p class="     wow fadeInUp delay-05s" data-wow-duration="2s">
<!--Access Google’s proprietary audience data and machine learning capabilities to help get the most out of your data.--><?php echo @$head_sevnin['content']; ?></p>
            </div>
          </div>
          <?php } ?>

         <?php if(@$head_eighteen['content_status']==1) {?>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="wrap-item text-center">
              <div class="item-img      wow fadeInUp delay-05s" data-wow-duration="2s">
                <img src="<?php echo base_url('assets/webvisitor/img/'.@$head_eighteen['image']);?>">
              </div>
              <h3 class="pad-bt15      wow fadeInUp delay-05s" data-wow-duration="2s"><?php echo @$head_eighteen['heading']; ?><!--Connect Your Digital Analytics To Results.--></h3>
              <p   class="   wow fadeInUp delay-05s" data-wow-duration="2s"><?php echo @$head_eighteen['content']; ?><!--web Analytics is built to work with Google’s media and publisher products so you can use your digital analytics insights to drive real impact.--></p>
            </div>
          </div>
          <?php } ?>

          <?php if(@$head_eigone['content_status']==1) {?>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="wrap-item text-center">
              <div class="item-img  wow fadeInRight delay-05s" data-wow-duration="2s">
                <img src="<?php echo base_url('assets/webvisitor/img/'.@$head_eigone['image']);?>">
              </div>
              <h3 class="pad-bt15      wow fadeInRight delay-05s" data-wow-duration="2s">
              <?php echo @$head_eigone['heading']; ?><!--Make Your Digital Analytics Data Work For You.--></h3>
              <p class="wow fadeInRight delay-05s" data-wow-duration="2s">     <?php echo @$head_eigone['content']; ?>        <!--Process and share massive amounts of data quickly with an easy-to-use interface combined with shareable reports.-->
           </p>
            </div>
          </div>
        <?php } ?>

        </div>
      </div>
    </section>
    <!---->
    <!---->
    <section id="service" class="section-padding">
      <div class="container">
        <div class="row">
          <?php if(@$head_eigtwo['content_status']==1){ ?>
          <div class="col-md-12 text-center">
            <h2 class="service-title pad-bt15 wow fadeInUp" style="color:#333;"><?php echo @$head_eigtwo['heading']; ?><!--Built For Enterprize--></h2>
            <p class="sub-title pad-bt15 wow fadeInUp"><?php echo @$head_eigtwo['content']; ?><!--The 360 Suite comes equipped with comprehensive administration capabilities that allow for more control when it comes to user management, auditing, and account permissions..--></p>
            <hr class="bottom-line">
          </div>
          <?php } ?>
         

         <?php if(@$head_f['content_status']==1) { ?>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="service-item      wow fadeInLeft delay-05s" data-wow-duration="2s">
              <h3><span><?php 	echo @$head_f['heading'];?></span>
                <?php echo @$head_f['sub_heading'];  ?>
               </h3>
               <p><?php echo @$head_f['content'];  ?></p>             
            </div>
          </div>
          <?php } ?>
         
         <?php if(@$head_t['content_status']==1) {?>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="service-item      wow fadeInDown delay-05s" data-wow-duration="2s">
              <h3 class="wow fadeInDown delay-05s" data-wow-duration="2s"><span><?php echo @$head_t['heading'] ?></span><?php echo @$head_t['sub_heading']?></h3>
              <p><?php echo @$head_t['content'] ?></p>
            </div>
          </div>   
          <?php } ?>
         
         <?php if(@$head_fo['content_status']==1) {?>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="service-item      wow fadeInDown delay-05s" data-wow-duration="2s">
              <h3 class="     wow fadeInDown delay-05s" data-wow-duration="2s"><span><?php echo @$head_fo['heading']?></span><?php echo @$head_fo['sub_heading']?></h3>
              <p><?php echo @$head_fo['content']?></p>
              
            </div>
          </div>
          <?php } ?>
          
          <?php if(@$head_fi['content_status']==1) {?>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="service-item      wow fadeInRight delay-05s" data-wow-duration="2s">
              <h3><span><?php echo @$head_fi['heading']?></span><?php echo @$head_fi['sub_heading']?></h3>
              <p><?php echo @$head_fi['content']?></p>

            </div>
          </div>
        <?php } ?>
          
        </div>
      </div>
    </section>
    <!---->
    <!---->
    <!---->
    <!---->
         <!--report make before after header and image for that place-->
    <!---->
    <!---->
    <section id="testimonial" class="wow fadeInUp delay-05s">
      <div class="bg-testicolor">
        <div class="container section-padding">
          <div class="row">
            <div class="testimonial-item">
              <ul class="bxslider">
                <?php foreach(@$feedback_data as $row){
					if(@$row['feedback_status'] == 1){ ?>
                <li>
                                    <center style="color:#FFF;"> <h1>FEEDBACK REVIEWS</h1></center>

                  <blockquote>
                   
                    <!--<img src="<?php echo base_url('assets/webvisitor/img/'.@$head_eigthr['image']);?>" class="img-responsive">-->
                    <p><?php echo @$row['feedbacker_message'];  ?><!--
Thanks to WEB ANALYSIS, our customers save time and money. This powerful tool offers a simple and clear SEO review : we no longer need to spend hours in complex explanations.--> 
</p>
                  </blockquote>
                  <small>-&nbsp;<?php echo @$row['feedbacker_name'];  ?><!--Jean-Philippe Wozniak , COJT Ecommerce Consultant, Client-->
                  </small>
                </li>
                <?php } }?>
                
              <!--  <li>
                  <blockquote>
                    <img src="<?php echo base_url('assets/webvisitor/img/'.@$head_eigfou['image']);?>" class="img-responsive">
                    <p>We regularly use Web Analysis wether to improve our own SEO or that of our clients. It is a complete and modern tool which offers a real spare of time for web agencies.
                    <?php echo @$head_eigfou['content']; ?>
                    
</p>
                  </blockquote>
                  <small><?php echo @$head_eigfou['heading']; ?>Nicolas Lambert, Axysweb, Client</small>
                </li>
                <li>
                  <blockquote>
                    <img src="<?php echo base_url('assets/webvisitor/img/'.@$head_eigfiv['image']);?>" class="img-responsive">
                    <p><?php echo @$head_eigfiv['content']; ?>TransUnion sees drastic cost efficiencies and conversion improvement with Analytics 360.

</p>
                  </blockquote>
                  <small>TransUnion, Client<?php echo @$head_eigfiv['heading']; ?></small>
                </li>
                <li>
                  <blockquote>
                    <img src="<?php echo base_url('assets/webvisitor/img/'.@$head_eigsix['image']);?>" class="img-responsive">
                    <p><?php echo @$head_eigsix['content']; ?><Mumzworld reaches 300% return on ad spend with enhanced ecommerce and data import from Google Analytics.
</p>
                  </blockquote>
                  <small><?php echo @$head_eigsix['heading']; ?>Mumzworld.com, Client</small>
                </li>-->
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!---->
    
    <section id="blog" class="section-padding wow fadeInUp delay-05s">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <h2 class="service-title pad-bt15">Functionality</h2>
            <p class="sub-title pad-bt15"></p>
            <hr class="bottom-line">
          </div>

          <?php if(@$head_eigsev['content_status']==1) {?>
          <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="blog-sec      wow fadeInLeft delay-05s" data-wow-duration="2s">
              <div class="blog-img">
                <a href="">
                  <img src="<?php echo base_url('assets/webvisitor/img/'.@$head_eigsev['image']);?>" class="img-responsive">
                </a>
              </div>
              <div class="blog-info">
                <h2 style="color:#666";><?php echo @$head_eigsev['heading']; ?><!--Full Report In Few Second--></h2>
                <div class="blog-comment">
                 <p>
                    <span><a href="#"><i class="fa fa-comments"></i></a><?php echo @$head_eigsev['mid_heading']; ?><!-- 15--></span>
                    <span><a href="#"><i class="fa fa-eye"></i></a><?php echo @$head_eigsev['sub_heading']; ?> <!--11--></span></p>
                </div>
                <p><?php echo @$head_eigsev['content']; ?><!--In a few seconds, a complete report of your website is generated. This job would take several hours being done manually. Stop wasting your time in time-consuming operations by using our website analyzer tool.--></p>
              </div>
            </div>
          </div>
          <?php } ?>

         <?php if(@$head_eigeig['content_status']==1){?>
          <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="blog-sec wow zoomIn" data-wow-duration="2s">
              <div class="blog-img">
                     <img src="<?php echo base_url('assets/webvisitor/img/'.@$head_eigeig['image']);?>" class="img-responsive">
              </div>
              <div class="blog-info   wow fadeInDown delay-05s" data-wow-duration="2s">
                <h2  style="color:#666";><?php echo @$head_eigeig['heading']; ?><!--...Of Any Website...--></h2>
                <div class="blog-comment">
                  <p>
                    <span><a href="#"><i class="fa fa-comments"></i></a><?php echo @$head_eigeig['mid_heading']; ?> <!--15--></span>
                    <span><a href="#"><i class="fa fa-eye"></i></a><?php echo @$head_eigeig['sub_heading']; ?> <!--11--></span></p>
                </div>
              <p><?php echo @$head_eigeig['content']; ?><!--You can analyze any website you want. Check your website's strengths and weaknesses and compare it to your competitors easily. You can analyze any type of website : HTML5, Wordpress, Prestashop, Joomla, Magento, etc.--></p>
              </div>
            </div>
           </div>
           <?php } ?>

          
         <?php if(@$head_eignin['content_status']==1) {?>
          <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="blog-sec wow zoomIn" data-wow-duration="2s">
              <div class="blog-img">
                <a href="">
                  <img src="<?php echo base_url('assets/webvisitor/img/'.@$head_eignin['image']);?>" class="img-responsive">
                </a>
              </div>
              <div class="blog-info">
                <h2  style="color:#666";><!--With Your Own Color...!--><?php echo @$head_eignin['heading']; ?></h2>
                <div class="blog-comment">
                 <p>
                    <span><a href="#"><i class="fa fa-comments"></i></a><?php echo @$head_eignin['mid_heading']; ?><!-- 15--></span>
                    <span><a href="#"><i class="fa fa-eye"></i></a> <?php echo @$head_eignin['sub_heading']; ?><!--11--></span></p>
                </div>
                <p><?php echo @$head_eignin['content']; ?><!--Export the analysis report in white label PDFs. Use our style editor, customize your reports for your customers under your own corporate identity (logo, colors, fonts, etc.) and become SEO analysis reseller!.--></p>
                
               </div>
            </div>
          </div>
         <?php } ?> 


         </div>
       </div>
   </section>
    <!---->
    <div class="container">
        
        <div class="row ">
            <div class="col-md-12 setcro">
                <div id="carousel-example" class="carousel slide" data-ride="carousel">
               <?php if(@$head_hun['content_status']==1) {?>
                     <?php echo @$head_hun['sub_heading']; ?>
                    <!--<ol class="carousel-indicators">
                        <li data-target="#carousel-example" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example" data-slide-to="1"></li>
                        <li data-target="#carousel-example" data-slide-to="2"></li>
                    </ol>-->

                    <?php } ?>

                    <div class="carousel-inner">
                        <div class="item active">
                            <div class="container center">
                              <?php if(@$head_hun['content_status']==1) {?>
                                <div class="col-md-6 col-md-offset-3 slide-custom">
                                   
                                    <h4><?php echo @$head_hun['heading']; ?><!--<i class="fa fa-quote-left"></i>The Struggle you are in today is developing the strength you need for tomorrow.. <i class="fa fa-quote-right"></i>--></h4>
                                     <div class="user-img pull-right">
						<img src="<?php echo base_url('assets/webvisitor/img/'.@$head_hun['image']);?>" alt="" class="img-u image-responsive"  />
					</div>
                                    <h5 class="pull-right"><?php echo @$head_hun['mid_heading']; ?><!--</br></br></br><strong class="c-black">Rahul Lunagariya</br></strong></br>Developer--></h5>
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="item">
                            <div class="container center">
                              <?php if(@$head_hunone['content_status']==1) { ?>
                                <div class="col-md-6 col-md-offset-3 slide-custom">
                                    <h4><?php echo @$head_hunone['heading']; ?> <!--<i class="fa fa-quote-left"></i> It takes a minutes to like someone, An hour to love someone, but to forget someone takes a lifetime... <i class="fa fa-quote-right"></i>--></h4>
                                         <div class="user-img pull-right">
                             
						<img src="<?php echo base_url('assets/webvisitor/img/'.@$head_hunone['image']); ?> " alt="" class="img-u image-responsive"/>
					</div>
                                    <h5 class="pull-right"><?php echo  @$head_hunone['mid_heading']; ?><!--</br></br></br>strong class="c-black">DR</strong></br></br>Designer-->
                                    </h5>
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="item">
                            <div class="container center">
                              <?php if(@$head_huntwo['content_status']==1)  { ?>
                                <div class="col-md-6 col-md-offset-3 slide-custom">
                                    <h4><?php echo @$head_huntwo['heading'];  ?><!--<i class="fa fa-quote-left"></i>You can not have better tomorrow if you are still thinking about yesterday.. <i class="fa fa-quote-right"></i>--></h4>
                                        <div class="user-img pull-right">
						<img src="<?php echo base_url('assets/webvisitor/img/'.@$head_huntwo['image']);?>" alt="" class="img-u image-responsive" />
					</div>
                                    <h5 class="pull-right"><?php echo @$head_huntwo['mid_heading']; ?><!--<strong class="c-black">Darshan Kanojiya</strong></br></br>Data Analyst --></h5>
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
</br></br>
    
    <!---->
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
                    <textarea class="form-control" name="message" rows="5" data-rule="required" placeholder="Message" data-msg="Please write something for us"  <?php if(@form_error('message')){ echo "autofocus"; }?> > <?php echo @$message; ?></textarea>
                    <div class="validation"></div>
                  </div>
                  <input type="submit" class="btn btn-primary btn-submit wow zoomIn" data-wow-duration="3s" name="Send_contact" value="SEND NOW" <?php if(@$contact_success){echo "autofocus"; } ?> >
                </div>
               <?php if(@$contact_success){echo '<label style="color:white">'.@$contact_success.'</label>'; }?>
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
  <script src="<?php echo base_url('assets/webvisitor/js/wow.min.js');?>">
    
  </script> 
  <script>
    new WOW().init();
  </script> 
</html>
