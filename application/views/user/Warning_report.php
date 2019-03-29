<?php   $this->load->view('user/Header_user'); ?>
 <style>
 .pack_sel{
				height:auto;
				text-align:center;
				width:auto;
				background-color:#F00;
				color:#FFF;
				border-radius:5px;
				box-shadow:0px 0px 20px #999999;
				border:hidden;
				font-family:"Rubik", sans-serif;
				letter-spacing:0.5px;
				padding:12px 10px;
			}
			
			.pack_sel:hover{
						height:auto;
						text-align:center;
						width:auto;
						background-color:#FFF;
						color:#060;
						border-radius:5px;
						box-shadow:0px 0px 20px #FF0000;
						border:hidden;
						font-family:"Rubik", sans-serif;
						letter-spacing:0.5px;
						padding:12px 10px;
						cursor:help;
						transition:0.5s;
					}
			.set{margin-top:200px;}		
      @media(max-width:767px)
	  {
		.set{margin-top:20px !important;}	  
	  }
	  @media(min-width:768px) and (max-width:991px)
	  {
		.set{margin-top:50px !important;}	  
	  }
	  @media(min-width:992px) and (max-width:1024px)
	  {
		 .set{margin-top:70px !important;}	 
	  }
	  
.container-fluid{padding-top:85px;}
 </style>
 <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ==================================================
                
                ============ -->
                <div class="row page-titles">
                    <div class="col-md-6 col-8 align-self-center">
                        <h3 class="text-themecolor m-b-0 m-t-0">Dashboard</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo site_url('user/User_site/site_view');?>">View Reports</a></li>
                            <li class="breadcrumb-item active">Warning</li>
                        </ol>
                    </div>
					</div><div class="set"></div>
                    <div class="col-lg-6 col-md-6 col-sd-6" style="margin:auto;"> 
                    
					 <label name="free_trial_web" class="pack_sel" id="ftrial_btn">ENTER CORRECT WEBSITE URL OTHERWISE CONTACT TO WEB ANALYSIS</label>
					</div>
                    </div>
                    </div>
                    
					<?php $this->load->view('user/Footer_user'); ?>