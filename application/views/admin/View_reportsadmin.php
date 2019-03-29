
<?php //echo "<pre>";print_r(@$country_nam);die; ?>
<?php
$this->load->view('admin/Header');
 
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
		
		
		$('.chr_month').click(function(){
				setTimeout(function(){
					chart2.render()
					},5000);
		});
		
		
			$('#sel_year').change(function(){
						var year_val = $('#sel_year').val();
						chg_year = year_val;
						
						$.ajax(
							{
								type:'POST',
								url:"<?php echo site_url('admin/Reports_admin/month_rpt'); ?>",
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
								url:"<?php echo site_url('admin/Reports_admin/day_rpt'); ?>",
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
								url:"<?php echo site_url('admin/Reports_admin/percountry_open'); ?>",
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
								url:"<?php echo site_url('admin/Reports_admin/permonth_open'); ?>",
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
								url:"<?php echo site_url('admin/Reports_admin/perday_open'); ?>",
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

<script>
$(document).ready(function(e) {
    

	$('#search_track').keyup(function(){
				
							 searchtxt = $('#search_track').val();
							
										$.ajax({
													type:'POST',
													url:"<?php echo site_url('admin/Reports_admin/ajax_search_track'); ?>",
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
});
</script>

<style>
.container-fluid{padding-top:100px;}
 #map {
        height:500px;
		width:1000px;
      }

	@media(max-width:767px)
	  {
		#map{height:200px;width:230px;}
		#map{overflow-x:scroll;overflow-y:hidden;}
		 .tabbox{overflow-x:scroll;overflow-y:hidden;}
		
	  }
	  
	  @media(min-width:768px) and (max-width:991px)
	  {
		 #map{overflow-x:scroll;overflow-y:hidden;}
		 #map{heig1ht:500px;width:600px;} 
		 .tabbox{overflow-x:scroll;overflow-y:hidden;}
		 
	 }
	 
	 .dt_scrl{
		 		overflow-x:scroll;
				overflow-y:hidden;
		}
</style>
<body>
     
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
 
    <section class="content-header">
      <h1>
        Reports List
        <small> User Side All Reports</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href=""><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Data tables</li>
      </ol>
    </section>
    
    

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
            <a href="<?php echo site_url('admin/Add_site/view_site');?>"><i class="fa fa-backward"></i></a>&nbsp;&nbsp;
              <h3 class="box-title">Reports...</h3>
            </div>
            
            <!--Other Data-->
            
            <div class="row">
        		<div class="col-lg-2 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><?php echo @$total_visit;?></h3>

              <p>Total Visitors</p>
            </div>
            <div class="icon">
              <i class="ion ion-person"></i>
            </div>
           <!-- <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>-->
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-2 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3><?php echo @$online_user; ?></h3>

              <p><i class="fa fa-circle text-success"></i>&nbsp; Visitor</p>
            </div>
            <div class="icon">
              <i class="fa fa-eye"></i>
            </div>
           <!-- <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>-->
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-2 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-blue">
            <div class="inner">
              <h3><?php echo @$unique_country; ?></h3>

              <p>Total Unique country</p>
            </div>
            <div class="icon">
              <i class="fa fa-globe"></i>
            </div>
            <!--<a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>-->
          </div>
        </div>
        <!-- ./col -->
         <?php
						$web_url=@$get_url['web_url'];
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
        
        <div class="col-lg-2 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3><?php echo @$glob_rank; ?></h3>

              <p>Globaly Website Rank</p>
            </div>
            <div class="icon">
              <i class="fa fa-wordpress"></i>
            </div>
           <!-- <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>-->
          </div>
        </div>
        <!-- ./col -->
        
      	<div class="col-lg-2 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3><?php echo @$rank_cntry; ?></h3>

              <p>In <?php echo @$rank_namecntry;?> Website Rank</p>
            </div>
            <div class="icon">
              <i class="fa fa-flag"></i>
            </div>
           <!-- <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>-->
          </div>
        </div>  
      </div>
      
            
            
            <!--Map Are Display-->
            
            <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">All Visitors Are Visits From Following Country...</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
            		<div id="map"></div>    
              </div>
              <!-- /.table-responsive -->
            </div>
            
          </div>
          
            <!--TAB MENU FOR CHART-->
            
            <div class="col-lg-12">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#activity" data-toggle="tab">Yearly</a></li>
              <li><a href="#timeline" data-toggle="tab">Monthly</a></li>
              <li><a href="#settings" data-toggle="tab">Daily</a></li>
            </ul>
            <div class="tab-content">
              <div class="active tab-pane" id="activity">
                <!-- Tab 1 Post -->
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
                
                <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Current Year Browser Stats</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <ul class="products-list product-list-in-box">
                <li class="item">
                  <div class="product-img">
                    <img src="<?php echo base_url('assets/user/image/browser/chrome-logo.png'); ?>" alt=logo /> 
                  </div>
                  <div class="product-info">
                    
                      <span class="label label-warning pull-right"><?php echo @$cnt_ycbrowser; ?>%</span>
                    
                  </div>
                </li>
                <!-- /.item -->
                <li class="item">
                  <div class="product-img">
                    <img src="<?php echo base_url('assets/user/image/browser/firefox-logo.png'); ?>" alt=logo />
                  </div>
                  <div class="product-info">
                    
                      <span class="label label-info pull-right"><?php echo @$cnt_yfbrowser; ?>%</span>
                   
                  </div>
                </li>
                <!-- /.item -->
                <li class="item">
                  <div class="product-img">
                    <img src="<?php echo base_url('assets/user/image/browser/safari-logo.png'); ?>" alt=logo />
                  </div>
                  <div class="product-info">
                  <span class="label label-danger pull-right"><?php echo @$cnt_ysbrowser; ?>%</span>
                  
                  </div>
                </li>
                <!-- /.item -->
                <li class="item">
                  <div class="product-img">
                    <img src="<?php echo base_url('assets/user/image/browser/internet-logo.png'); ?>" alt=logo />
                  </div>
                  <div class="product-info">
                    
                      <span class="label label-success pull-right"><?php echo @$cnt_yibrowser; ?>%</span>
               
                  </div>
                </li>
                <!-- /.item -->
              	<li class="item">
                  <div class="product-img">
                    <img src="<?php echo base_url('assets/user/image/browser/opera-logo.png'); ?> " alt=logo />
                  </div>
                  <div class="product-info">
                    
                      <span class="label label-primary pull-right"><?php echo @$cnt_yobrowser; ?>%</span>
               
                  </div>
                </li>
                <li class="item">
                  <div class="product-img">
                    <img src="<?php echo base_url('assets/user/image/browser/internet-logo.png'); ?>" alt=logo />&nbsp;&nbsp;Microsoft edge
                  </div>
                  <div class="product-info">
                    
                      <span class="label label-danger pull-right"><?php echo @$cnt_ymbrowser; ?>%</span>
               
                  </div>
                </li>
              </ul>
            </div>
            <!-- /.box-body -->
            
            <!-- /.box-footer -->
          </div>
                
                <!-- / Tab 1post -->

                
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="timeline">
                <!-- Tab 2 For Char -->
                
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
              <!-- /.tab-pane -->

              <div class="tab-pane" id="settings">
                <!--Tab 3 for Chart-->
                
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
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        
            <!-- /.box-header -->
             <div>
             	Search :-  <input type="search" name="name" id="search_track" placeholder=" Enter A Track Data..."/>
                    
             </div> 
            <div class="box-body search2 tabbox dt_scrl">
              
             <table id="example2" class="table table-bordered table-hover">
                <thead>
                 
                <tr>
                  <th> Track Id</th>
                  <th> Website Id</th>
                  <th>	Visitor Ip</th>
                  <th> Visitor City</th>
                  <th> Visitor State</th>
                  <th> Visitor Country</th>
                  <th> Httpr Refferer</th>
                  <th> Device Type</th>
                  <th> Device Os</th>
                  <th> Device Browser</th>
                  <th> Return Count</th>
                  <th> Track Time</th>
                  
                </tr>
                </thead>
                <tbody>
               			<?php foreach(@$tracking_data as $row){?>
                            <tr>
                            	<td><?php echo @$row['track_id'];?></td>
                            	<td><?php echo @$row['website_id'];?></td>
                                <td><?php echo @$row['user_ip'];?></td>
                                <td><?php echo @$row['user_city'];?></td>
                                <td><?php echo @$row['user_state'];?></td>
                                <td><?php echo @$row['user_country'];?></td>
                                <td><?php echo @$row['http_refferer'];?></td>
                                <td><?php echo @$row['device_type'];?></td>
                                <td><?php echo @$row['device_os'];?></td>
                                <td><?php echo @$row['device_browser'];?></td>
                                <td><?php echo @$row['return_count'];?></td>
                                <td><?php echo @$row['track_time'];?></td>
                            </tr>
                                       
                        <?php }?>
                        <tr>
                        <td colspan="12">
                                <?php echo $this->pagination->create_links(); ?>
                        </td>
            		</tr>
                </tbody>
              </table>
            </div>
            
      
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
      </div>
    </section>
    <!-- /.content -->
  </div>      

</body>
<?php
$this->load->view('admin/Footer');
?>

<script>		
			<?php @$cntry = @$this->Reports_model->get_umapcountry(@$website_id); ?>
			
			  function initMap() {
				var map = new google.maps.Map(document.getElementById('map'), {
				  zoom: 1.5,
				  center: {lat: -34.397, lng: 150.644}
				});
				var geocoder = new google.maps.Geocoder();
				//alert(addr[0]);
				setTimeout(function () {
				<?php foreach(@$cntry as $row){?>
				var addr = '<?php echo @$row['user_country']?>';
				
				geocodeAddress(geocoder, map,addr);
				 
				<?php }?>
				}, 1000)
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