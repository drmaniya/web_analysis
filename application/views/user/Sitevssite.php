
<?php   $this->load->view('user/Header_user'); ?>


<script>
var chart1=null;
//console.log(<?php //echo $chart;?>);
		$(document).ready(function(e) {
           
		    sitevs_yearly();
        });
		
			function sitevs_yearly()
			{
				
				 chart1 = new CanvasJS.Chart("sitevs_year", {
					animationEnabled: true,
					exportEnabled: true,
					title:{
						text: "Site Vs Site Traffic"             
					}, 
					axisY:{
						title: "Number of Visitors"
					},
					toolTip: {
						shared: true
					},
					legend:{
						cursor:"pointer",
						itemclick: toggleDataSeries
					},
					
					data: <?php echo @$chart;?>
		});

	chart1.render();

		function toggleDataSeries(e) {
			if(typeof(e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
				e.dataSeries.visible = false;
			}
			else {
				e.dataSeries.visible = true;            
			}
			chart1.render();

			}
			}

</script>
<style>

.container-fluid{padding-top:85px;}
</style>
  <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-6 col-8 align-self-center">
                        <h3 class="text-themecolor m-b-0 m-t-0">Site Vs Site Reports</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo site_url('user/Dashboard/'); ?>">Dashboard</a></li>
                            <li class="breadcrumb-item active">Site Vs Site</li>
                        </ol>
                    </div>
                    
					</div>
                    
                    

                    </div>
                    
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Current Year Site Traffic</h4>
                                <!--<h6 class="card-subtitle">Use default tab with class <code>nav-tabs & tabcontent-border </code></h6>-->
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#home" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">Yearly</span></a> </li>
                                   <!-- <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#profile" role="tab"><span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">Monthly</span></a> </li>
                                    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#messages" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">Daily</span></a> </li>-->
                                </ul>
                                <!-- Tab panes -->
                                <div class="tab-content tabcontent-border">
                                    <div class="tab-pane active" id="home" role="tabpanel">
                                        <div class="p-20">
                                             <div id="sitevs_year" style="height: 370px; max-width: 920px; margin: 0px auto;"></div>
                                        </div>
                                    </div>
                                    <div class="tab-pane  p-20" id="profile" role="tabpanel">2</div>
                                    <div class="tab-pane p-20" id="messages" role="tabpanel">3</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    
                   
                    </div>
                    
                    
<?php $this->load->view('user/Footer_user'); ?>