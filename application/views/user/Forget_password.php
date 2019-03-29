<!doctype html>
<html>
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Web Analysis</title>
  <meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
  <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">

	 <link rel="icon" type="image/png" sizes="20x20" href="<?php echo base_url('assets/user/image/logofi.png');?>">
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:400,300|Raleway:300,400,900,700italic,700,300,600">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/webvisitor/css/jquery.bxslider.css');?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/webvisitor/css/font-awesome.min.css');?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/webvisitor/css/bootstrap.min.css');?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/webvisitor/css/animate.css');?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/webvisitor/css/styl.css');?>">
  <!--<link href="<?php echo base_url() ?>assets/user/css/forgot_password.css" type="text/css" rel="stylesheet">-->
  <script src="<?php echo base_url('assets/webvisitor/js/jquery.min.js');?>"></script>
  <script src="<?php echo base_url('assets/webvisitor/js/jquery.easing.min.js');?>"></script>
  <script src="<?php echo base_url('assets/webvisitor/js/bootstrap.min.js');?>"></script>
  <script src="<?php echo base_url('assets/webvisitor/js/wow.js');?>"></script>
  <script src="<?php echo base_url('assets/webvisitor/js/jquery.bxslider.min.js');?>"></script>
  <script src="<?php echo base_url('assets/webvisitor/js/custom.js');?>"></script>
  <script src="<?php echo base_url('assets/webvisitor/contactform/contactform.js');?>"></script>
<style>

@charset "utf-8";
/* CSS Document */
.set{height:300px;width:400px;}
.set h1{padding:20px;margin-top:150px;}


	.conset{height:250px;}
	
	.conset{
		        margin-top:100px;
				
				width:400px;
		     	text-align:center;
				box-shadow:0px 0px 10px rgba(255,255,255,1);
		}		

.email_des{margin-top:30px;width:230px;border-radius:10px;outline:none;color:#000;padding-left:5px;}
.sub_btn{margin-top:30px;padding:3px 105px;border-radius:10px;outline:none;color:#4A566D;background-color:#FFF;}
@media (max-width:767px)
{
	.set{width:280px;}
	.conset{width:280px;margin-bottom:20px;margin-top:40px;}
.email_des{margin-top:30px;width:200px;border-radius:10px;outline:none;color:#000;padding-left:5px;}
.sub_btn{margin-top:40px;padding:5px 85px;border-radius:10px;outline:none;color:#4A566D;background-color:#FFF;}


}

@media (min-width:768px) and (max-width:991px)
{
	.set{width:100%;}
.set h1{padding:10px;margin-top:50px;}
.conset{width:400px;text-align:center;margin-top:0px;margin-bottom:20px;margin-left:160px;}
	
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
                <a class="navbar-brand" href="#">Web<span class="logo-dec">Analysis</span></a>
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
              <div class="banner-info text-center wow fadeIn delay-05s">
               <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                 <div class="set">
                  <h1 class="bnr-title">In Order To Recover Your Password We Need To Confirm Your Identity, Please Enter Your Oganization Email Address.</h1>
                 </div>
             </div>
            <div class="col-lg-6 col-md-12 col-sm-12 col-12">
            <div class="conset">
            
            </br>
                  <h3 align="center"> Forgot Password </h3>
<form method="post">
                  <i class="fa fa-envelope" style="font-size:20px;"></i>&nbsp;
                  <input type="email" class="email_des" name="forget_email" placeholder="Email.."></br>
                <input type="submit" name="submit" class="sub_btn">
       
                  </form>
                  <?php if(@$pass_send){echo @$pass_send;}else{echo @$id_not;}?>
          </div>  
            
            </div>
         
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
   </div>   
</body>
</html>