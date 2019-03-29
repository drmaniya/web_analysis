
<?php
$this->load->view('user/Header_user');
 
?>

<script type="text/javascript">
var chart1=null;
var chart2=null;
var chart3=null;
var chart4=null;
var chart5=null;
var dataPoints=[];
$(document).ready(function(e) {
    		
		var chg_year=0;
		var chg_month=0;
		var dyear_val=0;
		var dmonth_val=0;
		var prsel_year=0;
		var selm_year=0;
		var selm_month=0;
		var seld_year=0;
		var seld_month=0;
		var seld_day=0;
		var month_arr=[];
		var web_id=<?php echo @$website_id; ?>;
	
		$('#sel_dmonth').hide();
		$('#selm_month').hide();
		$('#seld_month').hide();
		$('#seld_day').hide();
		
		
		/*$('.chr_month').click(function(){
				setTimeout(function(){
					chart2.render();
					},5000);
		});*/
		
			$('#sel_year').change(function(){
						var year_val = $('#sel_year').val();
						chg_year = year_val;
						
						$.ajax(
							{
								type:'POST',
								url:"<?php echo site_url('user/Reports/month_rpt'); ?>",
								data:
								{
									'web_id':web_id,
									'chg_year':chg_year
								},
								dataType:"json",
								success:function(response)
								{
									dataPoints=[];
									for (var i = 0; i < response.length; i++) {
										dataPoints.push({ label: response[i].month, y: parseInt(response[i].cntip) });
									}
									//console.log(chart1)
									chart1.options.data[0].dataPoints = dataPoints;
									chart1.render();
									//dataPoints= response;
									//chart1.options.data[0].dataPoints = dataPoints;
									//console.log(dataPoints)
									
										
								}
							});	
						
				});		
			
			
			$('#sel_dyear').change(function(){
					dyear_val = $('#sel_dyear').val();
					$('#sel_dmonth').show();
					
					
			});
			
			$('#sel_dmonth').change(function(){
					dmonth_val = $('#sel_dmonth').val(); 
					
					$.ajax(
							{
								//alert("inajex");
								type:'POST',
								url:"<?php echo site_url('user/Reports/day_rpt'); ?>",
								data:
								{
									'web_id':web_id,
									'dyear_val':dyear_val,
									'dmonth_val':dmonth_val
								},
								dataType:"json",
								success:function(response)
								{
									dataPoints=[];
									for (var i = 0; i < response.length; i++) {
										dataPoints.push({ label: response[i].day, y: parseInt(response[i].cntip) });
									}
									//console.log(chart2)
									chart2.options.data[0].dataPoints = dataPoints;
									chart2.render();
									
									//dataPoints= response;
									//chart1.options.data[0].dataPoints = dataPoints;
									//console.log(dataPoints)
									//chart1.render();
									
								}
							});
			});
				


			$('#prsel_year').change(function(){
					 prsel_year = $('#prsel_year').val();
					
						$.ajax(
							{
								type:'POST',
								url:"<?php echo site_url('user/Reports/percountry_open'); ?>",
								data:
								{
									'web_id':web_id,
									'prsel_year':prsel_year
								},
								dataType:"json",
								success:function(response)
								{
									dataPoints=[];
									for (var i = 0; i < response.length; i++) {
										dataPoints.push({ label: response[i].name_country, y: parseInt(response[i].cnt_country) });
									}
								
									//console.log(chart1)
									chart3.options.data[0].dataPoints = dataPoints;
									chart3.render();
									//dataPoints= response;
									//chart1.options.data[0].dataPoints = dataPoints;
									//console.log(dataPoints)
									
										
								}
							});
				});
				
				
				$('#selm_year').change(function(){
						selm_year=$('#selm_year').val();
						$('#selm_month').show();
						
					});	
					
				$('#selm_month').change(function(){
						selm_month=$('#selm_month').val();
						
						
						$.ajax(
							{
								type:'POST',
								url:"<?php echo site_url('user/Reports/permonth_open'); ?>",
								data:
								{
									'web_id':web_id,
									'selm_year':selm_year,
									'selm_month':selm_month
									
								},
								dataType:"json",
								success:function(response)
								{
									dataPoints=[];
									for (var i = 0; i < response.length; i++) {
										dataPoints.push({ label: response[i].name_country, y: parseInt(response[i].cnt_country) });
									}
								
									//console.log(chart1)
									chart4.options.data[0].dataPoints = dataPoints;
									chart4.render();
									//dataPoints= response;
									//chart1.options.data[0].dataPoints = dataPoints;
									//console.log(dataPoints)
									
										
								}
							});
					});
				
				
				$('#seld_year').change(function(){
					seld_year=$('#seld_year').val();
					$('#seld_month').show();
					
				});
				
				$('#seld_month').change(function(){
					seld_month=$('#seld_month').val();
					$('#seld_day').show();
					
				});
				
				$('#seld_day').change(function(){
					seld_day=$('#seld_day').val();
					
						
						$.ajax(
							{
								type:'POST',
								url:"<?php echo site_url('user/Reports/perday_open'); ?>",
								data:
								{
									'web_id':web_id,
									'seld_year':seld_year,
									'seld_month':seld_month,
									'seld_day':seld_day
									
								},
								dataType:"json",
								success:function(response)
								{
									dataPoints=[];
									for (var i = 0; i < response.length; i++) {
										dataPoints.push({ label: response[i].name_country, y: parseInt(response[i].cnt_country) });
									}
								
									//console.log(chart1)
									chart5.options.data[0].dataPoints = dataPoints;
									chart5.render();
									//dataPoints= response;
									//chart1.options.data[0].dataPoints = dataPoints;
									//console.log(dataPoints)
									
										
								}
							});
				});
				
				
				
					$('#search_webtrack').keyup(function(){
					 searchtxt = $('#search_webtrack').val();
					
								$.ajax({
												type:'POST',
												url:"<?php echo site_url('user/Reports/ajax_search_webtrack'); ?>",
												data:
												{
														'searchtxt':searchtxt,
															
												},
												success:function(data)
												{
													//alert("record inserted");
													//$('.prints').html(data);
													$('.search2').html(data);
												}
										});

					});
				
				
				
				
			country_report();
			country_rmonthly();
			country_rweekly();
			
			ycountry_use();
			mcountry_use();
			dcountry_use();
			
				
	  
});



function country_report(){
				
				var chart = new CanvasJS.Chart("chartContainer", {
							<?php @$data = $this->Reports_model->get_yearreport(@$website_id); ?>
					animationEnabled: true,
					theme: "light2", // "light1", "light2", "dark1", "dark2"
					title:{
						text: "Yearly Website Traffic"
					},
					axisY: {
						title: "Number Of Visitors"
					},
					data: [{        
						type: "column",  
						showInLegend: true, 
						//legendMarkerColor: "grey",
						legendText: "Years",
						dataPoints: [   
						<?php foreach(@$data as $row){ ?>   
							{ y: <?php echo @$row['cntip']; ?>, label: "<?php echo @$row['year']?>" 					},
						<?php }?>	
						]
					}]
				});
				chart.render();	
			}
			
			function country_rmonthly(data=''){
				
			 chart1 = new CanvasJS.Chart("chartContainerm", {
							<?php @$data = @$this->Reports_model->get_yearmonth(@$website_id); ?>
					animationEnabled: true,
					theme: "light2", // "light1", "light2", "dark1", "dark2"
					title:{
						text: "Monthly Website Traffic"
					},
					axisY: {
						title: "Number Of Visitors"
					},
					data: [{        
						type: "column",  
						showInLegend: true, 
						//legendMarkerColor: "grey",
						legendText: "Month",
						dataPoints: [   
						<?php foreach(@$data as $row){ ?>   
							{ y: <?php echo @$row['cntip']; ?>, label: "<?php echo @$row['year']?>" 					},
						<?php }?>	
						]
					}]
				});
				chart1.render();	
			}
		
		
		
		
			function country_rweekly(){
			
				 chart2 = new CanvasJS.Chart("chartContainerd", {
					<?php @$data = $this->Reports_model->get_yearday($website_id); ?>
					animationEnabled: true,
					theme: "light2", // "light1", "light2", "dark1", "dark2"
					title:
					{
						text: "Daily Website Traffic"
					},
					axisY: 
					{
						title: "Number Of Visitors"
					},
					data: 
					[{        
						type: "column",  
						showInLegend: true, 
						//legendMarkerColor: "grey",
						legendText: "Days",
						dataPoints:
						 [   
						<?php foreach(@$data as $row){ ?>   
							{ y: <?php echo @$row['cntip']; ?>, label: "<?php echo @$row['day']?>" 					},
						<?php }?>	
						]
					}]
				
				});
				chart2.render();
			}
			
			
			function ycountry_use()
			{
				  chart3 = new CanvasJS.Chart("ycountry_web", {
					  <?php @$ycdata = $this->Reports_model->get_countryopen($website_id);?>
							animationEnabled: true,
							title:{
								text: "Selected Year Website Are Open In Following Country",
								horizontalAlign: "center"
							},
							data: [{
								type: "doughnut",
								startAngle: 60,
								//innerRadius: 60,
								indexLabelFontSize: 17,
								indexLabel: "{label} - #percent%",
								toolTipContent: "<b>{label}:</b> {y} (#percent%)",
								dataPoints: [
								<?php foreach(@$ycdata as $row) {?>
									{ y: <?php echo @$row['cnt_country']; ?>, label: "<?php echo @$row['name_country']; ?>" },
									<?php }?>
									
								]
							}]
						});
						chart3.render();
					
				}
				
				
				function mcountry_use()
				{
				  chart4 = new CanvasJS.Chart("mcountry_web", {
					  <?php $mcdata = $this->Reports_model->get_cntry_mopen($website_id);?>
							animationEnabled: true,
							title:{
								text: "Selected Year And Month Website Are Open In Following Country",
								horizontalAlign: "center"
							},
							data: [{
								type: "doughnut",
								startAngle: 60,
								//innerRadius: 60,
								indexLabelFontSize: 17,
								indexLabel: "{label} - #percent%",
								toolTipContent: "<b>{label}:</b> {y} (#percent%)",
								dataPoints: [
								<?php foreach(@$mcdata as $row) {?>
									{ y: <?php echo @$row['cnt_country']; ?>, label: "<?php echo @$row['name_country']; ?>" },
									<?php }?>
									
								]
							}]
						});
						chart4.render();
					
				}
				
				function dcountry_use()
				{
				  chart5 = new CanvasJS.Chart("dcountry_web", {
					  <?php @$mcdata = $this->Reports_model->prweb_dopen($website_id);?>
							animationEnabled: true,
							title:{
								text: "Selected Year,Month AND Day Website Are Open In Following Country",
								horizontalAlign: "center"
							},
							data: [{
								type: "doughnut",
								startAngle: 60,
								//innerRadius: 60,
								indexLabelFontSize: 17,
								indexLabel: "{label} - #percent%",
								toolTipContent: "<b>{label}:</b> {y} (#percent%)",
								dataPoints: [
								<?php foreach(@$mcdata as $row) {?>
									{ y: <?php echo @$row['cnt_country']; ?>, label: "<?php echo @$row['name_country']; ?>" },
									<?php }?>
									
								]
							}]
						});
						chart5.render();
					
				}
</script>


 <!--<script>
 	
	$(document).ready(function(e) {
        
    		
		
	  });
    </script>-->
    
    	
<style>
.container-fluid{padding-top:100px;}
 #map {
        height:500px;
		width:1000px;
      }
	  
	  .tblsclr{
		  	overflow-x:scroll;
			overflow-y:hidden;
		  }
		  
	  @media(max-width:767px)
	  {
		#map{height:200px;width:230px;}
		#map{overflow-x:scroll;overflow-y:hidden;}
		  
	  }
	  
	  @media(min-width:768px) and (max-width:991px)
	  {
		 #map{overflow-x:scroll;overflow-y:hidden;}
		 #map{height:500px;width:600px;} 
	  }
</style>
<div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
             <!--   <div class="row page-titles">
                    <div class="col-md-6 col-8 align-self-center">
                        <h3 class="text-themecolor m-b-0 m-t-0">Dashboard</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                    </div>
                    <div class="col-md-6 col-4 align-self-center">
                        <button class="right-side-toggle waves-effect waves-light btn-info btn-circle btn-sm pull-right m-l-10"><i class="ti-settings text-white"></i></button>
                        <button class="btn pull-right hidden-sm-down btn-success"><i class="mdi mdi-plus-circle"></i> Create</button>
                        <div class="dropdown pull-right m-r-10 hidden-sm-down">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                January 2017
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">February 2017</a>
                                <a class="dropdown-item" href="#">March 2017</a>
                                <a class="dropdown-item" href="#">April 2017</a>
                            </div>
                        </div>
                    </div>
                </div>-->
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <!-- Row -->
                <div class="row">
                    <!-- Column -->
                    <!--<label><a href="<?php echo site_url('user/User_site/site_view');?>">Back</a></label>-->
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <!-- Row -->
                                <div class="row">
                                    <div class="col-8"><span class="display-6"><?php echo @$total_visit;?></span>
                                        <h6>Total Visitors</h6></div>
                                    <div class="col-4 align-self-center text-right  p-l-0">
                                        <div id="sparklinedash3"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <!-- Row -->
                                <div class="row">
                                    <div class="col-8"><span class="display-6"><?php echo @$online_user; ?> </span>
                                        <h6><i class="fa fa-circle text-success"></i>&nbsp; Visitor</h6></div>
                                    <div class="col-4 align-self-center text-right p-l-0">
                                        <div id="sparklinedash"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <!-- Row -->
                                <div class="row">
                                    <div class="col-12"><span class="display-6"><?php echo @$unique_country; ?></span>
                                        <h6>Total Unique country</h6></div>
                                    <div class="col-4 align-self-center text-right p-l-0">
                                        <div id="sparklinedash2"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Column -->
                    <!--<div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <!-- Row
                                <div class="row">
                                    <div class="col-8"><span class="display-6">0%<i class="ti-angle-down font-14 text-danger"></i></span>
                                        <h6>Bounce Rate</h6></div>
                                    <div class="col-4 align-self-center text-right p-l-0">
                                        <div id="sparklinedash4"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>-->
                    
                    <!-- Column Global Rank -->
                    <?php
						@$web_url=@$get_url['web_url'];
						@$xmlString = file_get_contents('http://data.alexa.com/data?cli=10&dat=snbamz&url='.$web_url.'');
						
						$xml = simplexml_load_string($xmlString, "SimpleXMLElement", LIBXML_NOCDATA);
						$json = json_encode($xml);
						$array = json_decode($json,TRUE);
						//$xml = new SimpleXMLElement($xmlString);
						@$glob_rank = $array['SD'][1]['REACH']['@attributes']['RANK'];
						@$rank_namecntry=$array['SD'][1]['COUNTRY']['@attributes']['NAME'];
						@$rank_cntry=$array['SD'][1]['COUNTRY']['@attributes']['RANK'];
						//echo '<pre>';print_r($array);
						
?>
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <!-- Row -->
                                <div class="row">
                                    <div class="col-12"><span class="display-6"><?php echo @$glob_rank; ?></span>
                                        <h6>Globaly Website Rank</h6></div>
                                    <div class="col-4 align-self-center text-right p-l-0">
                                        <div id="sparklinedash2"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Column Country Rank-->
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <!-- Row -->
                                <div class="row">
                                    <div class="col-12"><span class="display-6"><?php echo @$rank_cntry; ?></span>
                                        <h6>In <?php echo @$rank_namecntry;?> Website Rank</h6></div>
                                    <div class="col-4 align-self-center text-right p-l-0">
                                        <div id="sparklinedash2"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
                
                
                            
                <!--Start label of infromation of package -->
             <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">All Visitors Are Visits From Following Country...</h4>									
                                 <div id="map"></div>
                                <!--<div id="visitfromworld" style="width:100%!important; height:415px"></div>-->
                            </div>
                        </div>
                    </div>
                </div>
             	
                <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body p-b-0">
                                <h4 class="card-title">Display Reports</h4>
                                <!--<h6 class="card-subtitle">Use default tab with class <code>customtab</code></h6>--> </div>
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs customtab" role="tablist">
                                <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#home2" role="tab"><span class="hidden-sm-up"><i class="fa fa-jpy"></i></span> <span class="hidden-xs-down">Yearly</span></a> </li>
                                <li class="nav-item chr_month"> <a class="nav-link" data-toggle="tab" href="#profile2" role="tab"><span class="hidden-sm-up"><i class="fa fa-line-chart"></i></span> <span class="hidden-xs-down">Monthly</span></a> </li>
                                <li class="nav-item chr_daily"> <a class="nav-link" data-toggle="tab" href="#messages2" role="tab"><span class="hidden-sm-up"><i class="fa fa-bar-chart"></i></span> <span class="hidden-xs-down">Daily</span></a> </li>
                              
                            </ul>
                             
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane active" id="home2" role="tabpanel">
                                    <div class="p-20">
                                      <div id="chartContainer" style="height: 370px; max-width: 920px; margin: 0px auto;"></div>	
                                      <div style="margin-top:15%">
                                       <select name="pryear" id="prsel_year">
                                        	<option value="">select Year</option>
                                       		<?php foreach(@$cnt_year as $row){?>
                                            <option value="<?php echo $row['year'];?>"><?php echo $row['year'];?></option>
                                            <?php } ?>
                                        </select>
                                      
                                            
                                            <div id="ycountry_web" style="height: 370px; max-width: 920px; margin: 0px auto;"></div>
										</div>
                                        <div style="margin-top:15%">
                                        	<div class="col-lg-4">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <h4 class="card-title">Current Year Browser Stats</h4>
                                                        <table class="table browser m-t-30 no-border">
                                                            <tbody>
                                                                <tr>
                                                                    <td style="width:40px"><img src="<?php echo base_url('assets/user/image/browser/chrome-logo.png'); ?>" alt=logo /></td>
                                                                    <td>Google Chrome</td>
                                                                    <td class="text-right"><span class="label label-light-info"><?php echo @$cnt_ycbrowser; ?>%</span></td>
                                                                </tr>
                                                                <tr>
                                                                    <td><img src="<?php echo base_url('assets/user/image/browser/firefox-logo.png'); ?>" alt=logo /></td>
                                                                    <td>Mozila Firefox</td>
                                                                    <td class="text-right"><span class="label label-light-success"><?php echo @$cnt_yfbrowser; ?>%</span></td>
                                                                </tr>
                                                                <tr>
                                                                    <td><img src="<?php echo base_url('assets/user/image/browser/safari-logo.png'); ?>" alt=logo /></td>
                                                                    <td>Apple Safari</td>
                                                                    <td class="text-right"><span class="label label-light-primary"><?php echo @$cnt_ysbrowser; ?>%</span></td>
                                                                </tr>
                                                                <tr>
                                                                    <td><img src="<?php echo base_url('assets/user/image/browser/internet-logo.png'); ?>" alt=logo /></td>
                                                                    <td>Internet Explorer</td>
                                                                    <td class="text-right"><span class="label label-light-warning"><?php echo @$cnt_yibrowser; ?>%</span></td>
                                                                </tr>
                                                                <tr>
                                                                    <td><img src="<?php echo base_url('assets/user/image/browser/opera-logo.png'); ?> " alt=logo /></td>
                                                                    <td>Opera mini</td>
                                                                    <td class="text-right"><span class="label label-light-danger"><?php echo @$cnt_yobrowser; ?>%</span></td>
                                                                </tr>
                                                                <tr>
                                                                    <td><img src="<?php echo base_url('assets/user/image/browser/internet-logo.png'); ?>" alt=logo /></td>
                                                                    <td>Microsoft edge</td>
                                                                    <td class="text-right"><span class="label label-light-megna"><?php echo @$cnt_ymbrowser; ?>%</span></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="profile2" role="tabpanel">
                                    
                                    <div class="p-20" >
                                   		<select name="year" id="sel_year">
                                        	<option value="">select Year</option>
                                       		<?php foreach(@$cnt_year as $row){?>
                                            <option value="<?php echo $row['year'];?>"><?php echo $row['year'];?></option>
                                            <?php } ?>
                                        </select>
                                        
                                       
                                        
                                      <div id="chrt_m">
                                        
                                      	<div id="chartContainerm" style="height: 370px; max-width: 920px; margin: 0px auto;"></div>
                                	
                                      </div>
                                      	<div style="margin-top:15%">
                                        	 <select  id="selm_year">
                                        	<option value="">select Year</option>
                                       		<?php foreach(@$cnt_year as $row){?>
                                            <option value="<?php echo $row['year'];?>"><?php echo $row['year'];?></option>
                                            <?php } ?>
                                        </select>
                                        
                                        <select id="selm_month" >
                                        	<option value="">select Month</option>
                                       		<?php foreach(@$cnt_month as $row){?>
                                            <option value="<?php echo $row['month'];?>"><?php echo $row['month'];?></option>
                                            <?php } ?>
                                        </select> 
                                        	 <div id="mcountry_web" style="height: 370px; max-width: 920px; margin: 0px auto;"></div>
                                        </div>
										
                                    </div>
                                </div>
                                <div class="tab-pane p-20 " id="messages2" role="tabpanel">
                                	 <select name="dyear" id="sel_dyear">
                                        	<option value="">select Year</option>
                                       		<?php foreach(@$cnt_year as $row){?>
                                            <option value="<?php echo $row['year'];?>"><?php echo $row['year'];?></option>
                                            <?php } ?>
                                        </select>
                                        
                                        <select id="sel_dmonth" name="dmonth">
                                        	<option value="">select Month</option>
                                       		<?php foreach(@$cnt_month as $row){?>
                                            <option value="<?php echo $row['month'];?>"><?php echo $row['month'];?></option>
                                            <?php } ?>
                                        </select> 
                                     
                                     <div id="chartContainerd"  style="height: 370px; max-width: 920px; margin: 0px auto;"></div>
                                    

										<div style="margin-top:15%">
                                        	 <select  id="seld_year">
                                        	<option value="">Select Year</option>
                                       		<?php foreach(@$cnt_year as $row){?>
                                            <option value="<?php echo $row['year'];?>"><?php echo $row['year'];?></option>
                                            <?php } ?>
                                        </select>
                                        
                                        <select id="seld_month" >
                                        	<option value="">Select Month</option>
                                       		<?php foreach(@$cnt_month as $row){?>
                                            <option value="<?php echo $row['month'];?>"><?php echo $row['month'];?></option>
                                            <?php } ?>
                                        </select> 
                                        
                                        <select id="seld_day" >
                                        	<option value="">Select Day</option>
                                       		<?php foreach(@$cnt_day as $row){?>
                                            <option value="<?php echo $row['day'];?>"><?php echo $row['day'];?></option>
                                            <?php } ?>
                                        </select> 
                                        	 <div id="dcountry_web" style="height: 370px; max-width: 920px; margin: 0px auto;"></div>
                                             
                                        </div>
                                </div>
                                
                                <div class="tab-pane p-20 " id="messages3" role="tabpanel">
                                	
                                </div>
                                <div class="tab-pane p-20 " id="messages4" role="tabpanel">
                                	
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                    <div class="col-12">
                        
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                  <div class="col-lg-8 col-sm-6 col-12">
                                 <h4 class="card-title">Website Visitor's Tracking Data</h4>
                                 <h6 class="card-subtitle">Swipe Mode, ModeSwitch,  Sortable, View</h6>
                                  </div>
                                  <div class="col-lg-4 col-sm-6 col-12">
                                     <!--<form class="app-search">-->
                                <input type="text" class="form-control" id="search_webtrack" placeholder="Search for..."> <!--<a class="srh-btn"></a>--> <!--</form>-->
                          
                                  </div>	

                                </div>
                                <div class="search2 tblsclr">
                                	<table class="tablesaw table-bordered table-hover table" data-tablesaw-mode="swipe" data-tablesaw-sortable data-tablesaw-sortable-switch data-tablesaw-minimap data-tablesaw-mode-switch>
                                    <thead>
                                        <tr>
                                            <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="persist">Ip Address</th>
                                            <th scope="col" data-tablesaw-sortable-col data-tablesaw-sortable-default-col data-tablesaw-priority="3">City</th>
                                            <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="2">State</th>
                                            <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="1">
                                                <abbr title="Rotten Tomato Rating">Country</abbr>
                                            </th>
                                            <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="4">Http Refferer</th>
                                                           <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="4">Device Type</th>               <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="4">Device Os</th>               <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="4">Device browser</th>               <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="4">No of Time Visits</th>
                                        </tr>


                                        
                                    </thead>
                                    <tbody>
                                    <?php foreach(@$tracking_data as $row){?>
                                        <tr>
                                            <td class="title"><?php echo @$row['user_ip'];?></td>
                                            <td><?php echo @$row['user_city'];?></td>
                                            <td><?php echo @$row['user_state'];?></td>
                                            <td><?php echo @$row['user_country'];?></td>
                                            <td><?php echo @$row['http_refferer'];?></td>
                                            <td><?php echo @$row['device_type'];?></td>
                                            <td><?php echo @$row['device_os'];?></td>
                                            <td><?php echo @$row['device_browser'];?></td>
                                            <td><?php echo @$row['return_count'];?></td>
                                        </tr>
                                       
                                        <?php }?>
                                        <!--<tr>
                                        	<td colspan="10"><?php //echo @$this->pagination->create_links(); ?></td>
                                            
                                        </tr>-->
                                    </tbody>
                                </table>
                                </div>
                                 
                            </div>
                        </div>
                        </div>
            
                      </div>
                    </div>
                    
                    </div>
                   
                    
                    
                    
                   
                      
                <!--Start Packsage List-->
              
                  <!--<div class="row col-lg-12">
                  	
                    <!-- Column -->
                    <div class="col-lg-12" id="week_list">
                    <!-- Chart Display-->	   
                                             

                    </div>
                    
                    <!-- Column -->
                   <!-- <div class="col-lg-3 col-md-6" id="month_list">
                      <div class="card">
                    	<div class="card-body">
                        	<div class="row">
                                   <div id="pricing-table" class="clear" style="margin-left:24px;">
                                    <div class="plan">
                                        <h3><?php //echo @$mpack_data['pac_duration']; ?><span>$<?php //echo @$mpack_data['pac_cost']; ?></span></h3>
                                        <a class="signup" href="<?php //echo site_url('user/Bank/bank_payment/'.@$mpack_data['pac_id']); ?>">Subscribe</a>         
                                        <ul>
                                            <li><b>10GB</b> Disk Space</li>
                                            <li><b>100GB</b> Monthly Bandwidth</li>
                                            <li><b>20</b> Email Accounts</li>
                                        <li><b>Unlimited</b> subdomains</li>            
                                        </ul> 
                                    </div>

                        </div>
                         </div>
                        </div>
                        </div>
                    </div>-->
                    <!-- Column -->
                   <!-- <div class="col-lg-3 col-md-6" id="qutry_list">
                    <div class="card">
                    	<div class="card-body">
                        	<div class="row">
                                   <div id="pricing-table" class="clear" style="margin-left:24px;">
                                <div class="plan">
                                    <h3><?php echo @$qpack_data['pac_duration']; ?><span>$<?php echo @$qpack_data['pac_cost']; ?></span></h3>
                                    <a class="signup" href="<?php echo site_url('user/Bank/bank_payment/'.@$qpack_data['pac_id']); ?>">Subscribe</a>         
                                    <ul>
                                        <li><b>10GB</b> Disk Space</li>
                                        <li><b>100GB</b> Monthly Bandwidth</li>
                                        <li><b>20</b> Email Accounts</li>
                                    <li><b>Unlimited</b> subdomains</li>            
                                    </ul> 
                                </div>
                            </div>
                             </div>
                        </div>
                        </div>                             
                    </div>-->
                    <!-- Column -->
                 <!--   <div class="col-lg-3 col-md-6" id="year_list">
                        <div class="card">
                    	<div class="card-body">
                        	<div class="row">
                       <div id="pricing-table" class="clear" style="margin-left:24px;">
                            <div class="plan">
                                <h3><?php //echo @$ypack_data['pac_duration']; ?><span>$<?php //echo @$ypack_data['pac_cost']; ?></span></h3>
                                <a class="signup" href="<?php //echo site_url('user/Bank/bank_payment/'.@$ypack_data['pac_id']); ?>">Subscribe</a>         
                                <ul>
                                    <li><b>10GB</b> Disk Space</li>
                                    <li><b>100GB</b> Monthly Bandwidth</li>
                                    <li><b>20</b> Email Accounts</li>
                                <li><b>Unlimited</b> subdomains</li>            
                                </ul> 
                            </div>
                        </div>
                          </div>
                            </div>
                             </div>
                    </div>
                </div>-->
                
                
                
     
<?php
$this->load->view('user/Footer_user');
?>
<script>		
			<?php @$cntry = @$this->Reports_model->get_umapcountry(@$website_id); ?>
			var cntry = '<?php echo json_encode($cntry);?>';
			cntry = JSON.parse(cntry);
			var len = cntry.length;
			//console.log(cntry.length)
			var i = 1;                     //  set your counter to 1

function myLoop (geocoder,map) {           //  create a loop function
   setTimeout(function () {    //  call a 3s setTimeout when the loop is called
      //alert('hello');          //  your code here
	  var addr = cntry[i].user_country;
	  console.log(cntry[i].user_country);
				//geocodeAddress(geocoder, map,addr);
      i++;                     //  increment the counter
      if (i < len) {            //  if the counter < 10, call the loop function
         myLoop();             //  ..  again which will trigger another 
      }                        //  ..  setTimeout()
   }, 3000)
}

//myLoop();         
			  function initMap() {
				var map = new google.maps.Map(document.getElementById('map'), {
				  zoom: 1.5,
				  center: {lat: -34.397, lng: 150.644}
				});
				var geocoder = new google.maps.Geocoder();
				//alert(addr[0]);
				
				
				
				<?php foreach(@$cntry as $row){?>
				var addr = '<?php echo @$row['user_country']?>';
				geocodeAddress(geocoder,map,addr);
				<?php }?>
				//geocodeAddress(geocoder, map,'pakistan');
				//geocodeAddress(geocoder, map,'russia');
				//geocodeAddress(geocoder, map,'africa');
				//document.getElementById('submit').addEventListener('click', function() {
					
				  //geocodeAddress(geocoder, map);
					//alert(geocoder);
					//alert(map);
				//});
			  }
		
			  function geocodeAddress(geocoder, resultsMap,addr) {
			   // var address = document.getElementById('address').value;
				
				var address = addr;
				geocoder.geocode({'address': address}, function(results, status) {
				  if (status === 'OK') {
					resultsMap.setCenter(results[0].geometry.location);
					var marker = new google.maps.Marker({
					  map: resultsMap,
					  position: results[0].geometry.location
					});
				  } else {
					console.log('Geocode was not successful for the following reason: ' + status);
				  }
				});
			  }
</script>
<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCL5qxwBRMrzBhAvTnwRcXL_2F8NtchHRA&callback=initMap">
    </script>
    
<script>
$(document).ready(function(e) {
    $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
	  var target = $(e.target).attr("href") // activated tab
	  console.log(target);
	 	setTimeout(function(){
			 chart1.render();
			  chart2.render();
			  chart4.render();
			  chart5.render();
			  
		},2);
	});
});
</script>