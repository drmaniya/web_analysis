<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Webanalysis</title>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/user/css/bootstrap.min.css" />
<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/user/js/bootstrap.min.js" />

</head>
<body>

<!-- Bootstrap 4 Navbar  -->
<!--<nav class="navbar navbar-expand-md navbar-dark bg-dark">
	<a href="#" class="navbar-brand">PayUMoney Gateway</a>

	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

	<div class="collapse navbar-collapse" id="navbarsExampleDefault">

		<ul class="navbar-nav ml-auto">

			<li class="nav-item ">
				<a href="https://facebook.com/anburocky3" class="nav-link" target="_blank">#Developer</a>
			</li>

			<li class="nav-item">
				<a href="<?php echo base_url(); ?>Welcome/help" class="nav-link">Help Article</a>
			</li>

			<li class="nav-item">
				<a href="https://facebook.com/cdudenetworks" class="nav-link" target="_blank">Support</a>
			</li>

		</ul>

	</div>
	
</nav>-->
<!-- End Bootstrap 4 Navbar -->



<div class="container mt-5">
<div class="row">
    <div class="col-md-2"></div>  
     <div class="col-md-8 text-center">
     	<div class="card">
    		<h4 class="card-header">Transaction <label for="failure" class="badge badge-danger">Failed</label></h4>
    		<div class="card-body">
    			<?php 
	                echo "<p>Your Package order status is ". $status ."..</br>";
	                echo "Your transaction id for this transaction is ".$txnid.". <br>Contact our WebAnalysis Admin.</p>";
	                echo "<a href='".site_url('user/Bank/failure/'.$status)."' class='btn btn-sm float-left btn-info'> < - Go Back</a>";
	            ?>
    		</div>
    	</div>
     </div> 
    <div class="col-md-2"></div>
</div>
<!-- Footer -->

<footer style="position: absolute;bottom:0; width: 90%;">
	<hr>
	<p>Copyright &copy; <?php echo date('Y'); ?>  
		<span class="float-right">Coded with WebAnalysis &hearts;	: <a href="https://www.facebook.com/profile.php?id=100008091698461" target="_blank">WebAnalyser Devloper</a></span></p>
</footer>
</div> 

</body>
</html>