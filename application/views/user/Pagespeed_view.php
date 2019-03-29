
<?php   $this->load->view('user/Header_user'); ?>


<script>
	$('.preloder').hide();
$(document).ready(function(e) {
    $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
	  //console.log($(e.target).attr('data-device')) // newly activated tab
	  
	  var device = ($(e.target).attr('data-device'));
	  e.relatedTarget // previous active tab
		//console.log(device);
		
		$.ajax(
		{
			type:'POST',
			url:"<?php echo site_url('user/Pagespeed/ajax_mob_data'); ?>",	
			data:
			{
				'device_type':device	
			},
			beforeSend:function(){
					$('.preloder').show();
				},
			success:function(data)
			{
					//console.log("das");
					//console.log(data);
					if(device == 'mobile')
					{
						$('#ajax_pagespeed_mobile').html(data);
					}
					else if(device == 'desktop')
					{
						$('#ajax_pagespeed_desktop').html(data);
					}
				//$('ajax_pagespeedmob').innerHTML(data);
				//$('#mydiv').html(data);
					
			},
			complete:function(){
					$('.preloder').hide();
				}
		}
		);
	})
});
</script>
<script> 
$(document).ready(function(){
    $("#flip").click(function(){
        $("#panel").slideToggle("slow");
    });
	
	 $("#flip1").click(function(){
        $("#panel1").slideToggle("slow");
    });
	
	 $("#flip2").click(function(){
        $("#panel2").slideToggle("slow");
    });
	
	 $("#flip3").click(function(){
        $("#panel3").slideToggle("slow");
    });
	
	 $("#flip4").click(function(){
        $("#panel4").slideToggle("slow");
    });
	
	  $("#flip5").click(function(){
        $("#panel5").slideToggle("slow");
      });
	  
	  $("#flipm").click(function(){
        $("#panelm").slideToggle("slow");
      });
	  
	  $("#flipm1").click(function(){
        $("#panelm1").slideToggle("slow");
      });
	  
	  $("#flipm2").click(function(){
        $("#panelm2").slideToggle("slow");
      });
	  
	  $("#flipm3").click(function(){
        $("#panelm3").slideToggle("slow");
      });
	  
	  $("#flipm4").click(function(){
        $("#panelm4").slideToggle("slow");
      });
	  
	  $("#flipm5").click(function(){
        $("#panelm5").slideToggle("slow");
      });
	  
	  $("#flipaj").click(function(){
        $("#panelaj").slideToggle("slow");
      });
	  //$(document).on('click',"#flipaj",function(){
        //alert('sdsad');
       	// $(document).find("#panelaj").slideToggle("slow");
      //});
	  
	  
	  $("#flipaj1").click(function(){
        $("#panelaj1").slideToggle("slow");
    	});
		
		$("#flipaj2").click(function(){
        	$("#panelaj2").slideToggle("slow");
    	});
		
		$("#flipaj3").click(function(){
       	 $("#panelaj3").slideToggle("slow");
    	});
		
		$("#flipaj4").click(function(){
        $("#panelaj4").slideToggle("slow");
    });
	
		$("#flipaj5").click(function(){
     	   $("#panelaj5").slideToggle("slow");
    	});
});

	/*function flipaj(){
		console.log('this');
		alert("dadas");
        $("#panelaj").slideToggle("slow");
		alert("dadas23");
      	//$(document).find("#panelaj").slideToggle("slow");
    }*/

</script>


<style type="text/css">
		
		.loader{
    width: 150px;
    height: 150px;
    margin: 40px auto;
    transform: rotate(-45deg);
    font-size: 0;
    line-height: 0;
    animation: rotate-loader 5s infinite;
    padding: 25px;
    border: 1px solid #cf303d;
}
.loader .loader-inner{
    position: relative;
    display: inline-block;
    width: 50%;
    height: 50%;
}
.loader .loading{
    position: absolute;
    background: #cf303d;
}
.loader .one{
    width: 100%;
    bottom: 0;
    height: 0;
    animation: loading-one 1s infinite;
}
.loader .two{
    width: 0;
    height: 100%;
    left: 0;
    animation: loading-two 1s infinite;
    animation-delay: 0.25s;
}
.loader .three{
    width: 0;
    height: 100%;
    right: 0;
    animation: loading-two 1s infinite;
    animation-delay: 0.75s;
}
.loader .four{
    width: 100%;
    top: 0;
    height: 0;
    animation: loading-one 1s infinite;
    animation-delay: 0.5s;
}
@keyframes loading-one {
    0% {
        height: 0;
        opacity: 1;
    }
    12.5% {
        height: 100%;
        opacity: 1;
    }
    50% {
        opacity: 1;
    }
    100% {
        height: 100%;
        opacity: 0;
    }
}
@keyframes loading-two {
    0% {
        width: 0;
        opacity: 1;
    }
    12.5% {
        width: 100%;
        opacity: 1;
    }
    50% {
        opacity: 1;
    }
    100% {
        width: 100%;
        opacity: 0;
    }
}
@keyframes rotate-loader {
    0% {
        transform: rotate(-45deg);
    }
    20% {
        transform: rotate(-45deg);
    }
    25% {
        transform: rotate(-135deg);
    }
    45% {
        transform: rotate(-135deg);
    }
    50% {
        transform: rotate(-225deg);
    }
    70% {
        transform: rotate(-225deg);
    }
    75% {
        transform: rotate(-315deg);
    }
    95% {
        transform: rotate(-315deg);
    }
    100% {
        transform: rotate(-405deg);
    }
}
	</style>

<style> 
#panel{
    padding: 5px;
    text-align: center;
    background-color: #CCC;
	color:#000;
    border: solid 1px #c3c3c3;
	margin-bottom:20px;
	height:auto;
	padding: 30px;
    display: none;
}
 #flip {
    padding: 5px;
    text-align: center;
    background-color: #CCC;
	color:#000;
    border: solid 1px #c3c3c3;
	margin-bottom:20px;
}
	.ul_type{
			list-style-type:none;	
		}
		
 #flip1 {
    padding: 5px;
    text-align: center;
    background-color: #CCC;
	color:#000;
    border: solid 1px #c3c3c3;
	margin-bottom:20px;
}


#panel1{
   
    text-align: center;
    background-color: #CCC;
	color:#000;
    border: solid 1px #c3c3c3;
	margin-bottom:20px;
    padding: 30px;
    display: none;
    height:auto;
}


 #flip2{
    padding: 5px;
    text-align: center;
    background-color: #CCC;
	color:#000;
    border: solid 1px #c3c3c3;
	margin-bottom:20px;
}


#panel2{
   
    text-align: center;
    background-color: #CCC;
	color:#000;
    border: solid 1px #c3c3c3;
	margin-bottom:20px;
    padding: 30px;
    display: none;
    height:auto;
}


 #flip3{
    padding: 5px;
    text-align: center;
    background-color: #CCC;
	color:#000;
    border: solid 1px #c3c3c3;
	margin-bottom:20px;
}


#panel3{
 
    text-align: center;
    background-color: #CCC;
	color:#000;
    border: solid 1px #c3c3c3;
	margin-bottom:20px;
    padding: 30px;
    display: none;
    height:auto;
}


 #flip4{
    padding: 5px;
    text-align: center;
    background-color: #CCC;
	color:#000;
    border: solid 1px #c3c3c3;
	margin-bottom:20px;
}


#panel4{

    text-align: center;
    background-color: #CCC;
	color:#000;
    border: solid 1px #c3c3c3;
	margin-bottom:20px;
    padding: 30px;
    display: none;
    height:auto;
}


#flip5{
    padding: 5px;
    text-align: center;
    background-color: #CCC;
	color:#000;
    border: solid 1px #c3c3c3;
	margin-bottom:20px;
}


#panel5{

    text-align: center;
    background-color: #CCC;
	color:#000;
    border: solid 1px #c3c3c3;
	margin-bottom:20px;
    padding: 30px;
    display: none;
    height:auto;
}

							// style for mobile...

#flipm{
    padding: 5px;
    text-align: center;
    background-color: #CCC;
	color:#000;
    border: solid 1px #c3c3c3;
	margin-bottom:20px;
}


#panelm{

    text-align: center;
    background-color: #CCC;
	color:#000;
    border: solid 1px #c3c3c3;
	margin-bottom:20px;
    padding: 30px;
    display: none;
    height:auto;
}

#flipm1{
    padding: 5px;
    text-align: center;
    background-color: #CCC;
	color:#000;
    border: solid 1px #c3c3c3;
	margin-bottom:20px;
}


#panelm2{

    text-align: center;
    background-color: #CCC;
	color:#000;
    border: solid 1px #c3c3c3;
	margin-bottom:20px;
    padding: 30px;
    display: none;
    height:auto;
}

#flipm3{
    padding: 5px;
    text-align: center;
    background-color: #CCC;
	color:#000;
    border: solid 1px #c3c3c3;
	margin-bottom:20px;
}


#panelm3{

    text-align: center;
    background-color: #CCC;
	color:#000;
    border: solid 1px #c3c3c3;
	margin-bottom:20px;
    padding: 30px;
    display: none;
    height:auto;
}

#flipm4{
    padding: 5px;
    text-align: center;
    background-color: #CCC;
	color:#000;
    border: solid 1px #c3c3c3;
	margin-bottom:20px;
}


#panelm4{

    text-align: center;
    background-color: #CCC;
	color:#000;
    border: solid 1px #c3c3c3;
	margin-bottom:20px;
    padding: 30px;
    display: none;
    height:auto;
}

#flipm5{
    padding: 5px;
    text-align: center;
    background-color: #CCC;
	color:#000;
    border: solid 1px #c3c3c3;
	margin-bottom:20px;
}


#panelm5{

    text-align: center;
    background-color: #CCC;
	color:#000;
    border: solid 1px #c3c3c3;
	margin-bottom:20px;
    padding: 30px;
    display: none;
    height:auto;
}

							// Style for Ajax Page 
#flipaj{
     padding: 5px;
    text-align: center;
    background-color: #CCC;
	color:#000;
    border: solid 1px #c3c3c3;
	margin-bottom:20px;
}


#panelaj{

    text-align: center;
    background-color: #CCC;
	color:#000;
    border: solid 1px #c3c3c3;
	margin-bottom:20px;
    padding: 30px;
    display: none;
    height:auto;
}

#flipaj1{
    padding: 5px;
    text-align: center;
    background-color: #CCC;
	color:#000;
    border: solid 1px #c3c3c3;
	margin-bottom:20px;
}


#panelaj1{

    text-align: center;
    background-color: #CCC;
	color:#000;
    border: solid 1px #c3c3c3;
	margin-bottom:20px;
    padding: 30px;
    display: none;
    height:auto;
}

#flipaj2{
    padding: 5px;
    text-align: center;
    background-color: #CCC;
	color:#000;
    border: solid 1px #c3c3c3;
	margin-bottom:20px;
}

#panelaj2{

    text-align: center;
    background-color: #CCC;
	color:#000;
    border: solid 1px #c3c3c3;
	margin-bottom:20px;
    padding: 30px;
    display: none;
    height:auto;
}

#flipaj3{
    padding: 5px;
    text-align: center;
    background-color: #CCC;
	color:#000;
    border: solid 1px #c3c3c3;
	margin-bottom:20px;
}


#panelaj3{

    text-align: center;
    background-color: #CCC;
	color:#000;
    border: solid 1px #c3c3c3;
	margin-bottom:20px;
    padding: 30px;
    display: none;
    height:auto;
}

#flipaj4{
    padding: 5px;
    text-align: center;
    background-color: #CCC;
	color:#000;
    border: solid 1px #c3c3c3;
	margin-bottom:20px;
}


#panelaj4{

    text-align: center;
    background-color: #CCC;
	color:#000;
    border: solid 1px #c3c3c3;
	margin-bottom:20px;
    padding: 30px;
    display: none;
    height:auto;
}

#flipaj5{
    padding: 5px;
    text-align: center;
    background-color: #CCC;
	color:#000;
    border: solid 1px #c3c3c3;
	margin-bottom:20px;
}


#panelaj5{

    text-align: center;
    background-color: #CCC;
	color:#000;
    border: solid 1px #c3c3c3;
	margin-bottom:20px;
    padding: 30px;
    display: none;
    height:auto;
}

.panelajdata{

    text-align: center;
    background-color: #CCC;
	color:#000;
    border: solid 1px #c3c3c3;
	margin-bottom:20px;
    padding: 30px;
    display: none;
    height:auto;
}

.flipajdata{
    padding: 5px;
    text-align: center;
    background-color: #CCC;
	color:#000;
    border: solid 1px #c3c3c3;
	margin-bottom:20px;
}

.iset{height:300px;width:350px;}
.iset img{
	height:100%;
	width:100%;}
.inner{
position:absolute;
}
.inner img{
	margin:0;
	position:absolute;
	top:50%;
	left:6.1%;
	width:247px;
	height:176px;
	transform:translateY(-50%);
}
.effect3{top:172px;
left:6.1%;}
.oset{height:120px;width:180px;background-color:#CCC;float:left;margin-left:30px;padding:30px;color:#000;box-shadow:3px 3px 3px 3px #333;}
.tset{height:120px;width:180px;background-color:#CCC;margin-left:30px;padding:30px;color:#000;box-shadow:3px 3px 3px 3px #333;}
.conset{margin-top:30px;}
.page_state{margin-top:20px;}
.scr{ max-height: 200px;
    background-color:#FFF;
	width:100%;
	margin:0px !important;
	
    overflow-y: scroll;}
	.scr1{ max-height: 200px;
    background-color:#FFF;
	width:100%;
	margin:0px !important;
	
    overflow-y: scroll;}
	.bd{border-top:1px #ccc dashed;}
	/*mobset*/
	.mobiset{margin-left:100px; width:250px;height:400px;}
	.mobiset img{width:100%;height:100%;}
	.mobinnerset{
position:absolute;
}
.mobinnerset img{
	margin:0;
	position:absolute;
	top:50%;
	left:14.1%;
	width:224px;
	height:328px;
	transform:translateY(-50%);
}
.mobeffect{top:380px;
left:14.1%;}	

	
@media(max-width:767px)
{
	.setc{height:120px;}
	.pull-left{margin-left:0px !important;padding-left:0px !important;}
	.oset{height:120px;width:160px;float:none;margin-right:20px; margin-bottom:30px;padding-top:40px;padding-left:20px;}
	.tset{height:120px;width:160px;margin-right:20px; margin-bottom:10px;padding-left:10px;padding-top:40px;}
    #panel{height:600px;}
	#panel1{height:600px;}
	.iset{width:220px;height:170px;}
	.iset img{
	height:100%;
	width:100%;}
.inner{
position:absolute;
}
.inner img{
	margin:0;
	position:absolute;
	top:70px;
	left:18%;
	width:155px;
	height:100px;
	transform:translateY(-50%);
}
.effect3{top:122px;
left:18%;}


	.mobiset{margin-left:1px; width:220px;height:380px;}
	.mobiset img{width:100%;height:100%;}
	.mobinnerset{
position:absolute;
}
.mobinnerset img{
	margin:0;
	position:absolute;
	top:50%;
	left:17.8%;
	width:197px;
	height:305px;
	transform:translateY(-50%);
}
.mobeffect{top:425px;
left:17.8%;}
.setmin{width:120px;}
}
@media(min-width:992px) and (max-width:1024px)
{

.inner img{
	margin:0;
	position:absolute;
	top:50%;
	left:7%;
	width:247px;
	height:174px;
	transform:translateY(-50%);
}
.effect3{top:172px;
left:7%;}	




.mobinnerset img{
	margin:0;
	position:absolute;
	top:50%;
	left:16.3%;
	width:223px;
	height:320px;
	transform:translateY(-50%);
}
.mobeffect{top:380px;
left:16.3%;}
	
}
@media (min-width:768px) and (max-width:991px)
{
	.setc{height:80px;}
.setmin{width:220px;}
.iset img{
	

	height:100%;
	width:100%;}
.inner{
position:absolute;
}
.inner img{
	margin:0;
	position:absolute;
	top:50%;
	left:9.7%;
	width:247px;
	height:174px;
	transform:translateY(-50%);
}
.effect3{top:205px;
left:9.7%;}	



	.mobiset{margin-left:100px; width:200px;height:350px;}
	.mobiset img{width:100%;height:100%;}
	.mobinnerset{
position:absolute;
}
.mobinnerset img{
	margin:0;
	position:absolute;
	top:50%;
	left:22.2%;
	width:178px;
	height:280px;
	transform:translateY(-50%);
}
.mobeffect{top:385px;
left:22.2%;}
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
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-6 col-8 align-self-center">
                        <h3 class="text-themecolor m-b-0 m-t-0">PageSpeed Insights</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo site_url('user/Dashboard/'); ?>">Dashboard</a></li>
                            <li class="breadcrumb-item active">PageSpeed Insights Tools</li>
                        </ol>
                    </div>
                    
					</div>
                    
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Start PageSpeed Insights</h4>
                                <!--<h6 class="card-subtitle">FILL UP FORM</h6>-->
                                <form class="floating-labels m-t-40" method="post">
                                
                                    
                                   
                                    <div class="form-group m-b-40">
                                        <input type="url" name="web_url" class="form-control" id="input5" data-toggle="tooltip" data-placement="bottom" title="http://" required>
                                        <span class="bar"></span>
                                        <label for="input5">Enter a Web page URL</label>
                                    </div>
                                    
                                    
                                      <input type="submit" name="page_speed" class="btn btn-primary" value="ANALYZE">    
                                  
               
                                </form>
                                <?php if(@$inter_prblm){echo @$inter_prblm;}?>
                            </div>
                        </div>
                       
                    </div>

                    </div>
                    
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Your Site Page Speed</h4>
                               <!-- <h6 class="card-subtitle">Use default tab with class <code>nav-tabs & tabcontent-border </code></h6>-->
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="nav-item" > <a class="nav-link active" data-toggle="tab" href="#home" data-device="desktop" role="tab"><span class="hidden-sm-up"><i class="fa fa-desktop"></i>&nbsp; Desktop</span> <span class="hidden-xs-down"><img src="<?php echo base_url('assets/user/image/pc_pagespeed.jpg');?>">&nbsp;&nbsp;<b>Desktop</b></span></a> </li>
                                    <li class="nav-item"  > <a class="nav-link" data-toggle="tab" href="#profile" data-device="mobile" role="tab"><span class="hidden-sm-up"><i class="fa fa-mobile"></i>&nbsp; Mobile</span><span class="hidden-xs-down"> <img src="<?php echo base_url('assets/user/image/mob_pagespeed.jpg');?>">&nbsp;&nbsp;<b>Mobile</b></span></a> </li>
                                   <!-- <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#messages" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">Daily</span></a> </li>-->
                                </ul>
                                <!-- Tab panes -->
                                <div class="tab-content tabcontent-border">
                                 <div class="tab-pane active" id="home" role="tabpanel">
                                    <div class="col-12">
                                        <div id="ajax_pagespeed_desktop">
                                       <div class="setc">
                                                 <b><?php if(@$web_title){echo "WebSite Name Is:- ".@$web_title; }?></b></br></br> </div>
                                          
                                         <?php if(@$device_type == "desktop"){?>        
                                            <div class="iset">
            
                                              <img src="<?php echo base_url('assets/user/image/cm.jpg');?>">
                                 
                                              <div class="inner effect3">
                             <?php echo @$image; ?>  
                                            
                                              </div>
                                              </div>
                                            <?php }?>  
                                              
                                          <div class="p-20">
                                                               
                                         <div class="pull-left">
                                            <div class="oset">
                                                 <center><b style="font-weight:500;"> No. Resources</b></br>
                                                  <?php echo @$no_resources;?></center>
                                            </div>
                                          </div>
                                           <div class="pull-left">
                                            <div class="tset">
                                            <center> <b style="font-weight:500;">OPTIMIZATION</b></br>
                                             <?php if(@$page_score){echo @$page_score;}else{echo "0";}?>&nbsp;/&nbsp; 100</center>
                                             </div>
                                           </div>
                                         <div style="clear:both"></div>
                                       <div class="conset">
                                          Data about the real-world performance of this page was <a href="https://developers.google.com/speed/docs/insights/faq#speedscoreunavailable" target="_blank">unavailable</a>. PageSpeed Insights was still able to analyze this page to find potential optimizations. Applying these optimizations may improve the speed of this page. Please investigate the recommendations below. <a href="https://developers.google.com/speed/docs/insights/about" target="_blank">Learn more.</a>    
                                        </div>
                                        <!--<div class="page_state">
                                       <b style="font-weight:500;"> Page Stats</b></br></br>
PSI estimates this page requires 1 additional round trips to load render blocking resources and 9.9 MB to fully render. The median page requires 4 round trips and 3.4 MB. Fewer round trips and bytes results in faster pages.
                                        
                                        </div>--></br></br>
                                        <b style="font-weight:500;">Optimization Suggestions</b></br></br>								
                                        <?php if(@$optmiz_imgname){?>
                                        <b style="font-weight:500;margin-top:3%"><?php echo @$optmiz_imgname; ?></b>
                   
                                         <div id="flip">Show how to fix</div>
					
                                            	<div id="panel" style="font-weight:400;color:#000"><label><?php echo @$oprimize_imgformat1; ?></label>
                                                <div>
                                                <?php if(@$oprimize_imgformat2){?>
                                                <label class="setmin"><?php  
												@$optize_word = explode(' ',@$oprimize_imgformat2); 
											?><a href="<?php echo @$oprimize_imgformaturl; ?>" target="_blank"><?php echo @$optize_word[0]."&nbsp;".@$optize_word[1]."&nbsp;".@$optize_word[2]."&nbsp;".@$optize_word[3];?></a><?php echo "&nbsp;".@$optize_word[4]."&nbsp;".@$optize_word[5]."&nbsp;".@$optize_word[6]."&nbsp;".@$optize_word[7]."&nbsp;".@$optize_word[8]."&nbsp;".@$oprimize_imgformatmb."&nbsp;"."(" .@$oprimize_imgformatpr ."&nbsp;"."reduction" .")";
						?>
                                                </label>
                                                <?php } ?>
                                                </div>
                                            <div class="scr">
                                           
                                          <ul class="ul_type">
                                          <?php if(@$optimize_img){foreach(@$optimize_img as $row)
											{?>
												<li class="bd"><?php echo @$row['result']['args'][0]['value'];?></li>
										<?php } }?>
                                             
                                          </ul>
                                          
                                            </div>
                                              </div>
                                            <?php } ?>  
                                           
                                          <?php if(@$elimini_rend_block){?>  
                                        <b style="font-weight:500;"><?php echo @$elimini_rend_block; ?></b></br>
                          
                                    <div id="flip1">Show how to fix</div>
					      
                                         <div id="panel1" style="font-weight:400;color:#000"><label><?php echo @$elimini_block_0format; ?></label>
                                         <br>
                                         <label><?php echo @$elimini_block_1format; ?></label>
                                         <br>
                                         <label class="setmin"><?php
										 		@$elimini_arr = explode(' ', @$elimini_block_2format); 
										echo "<a href='https://developers.google.com/speed/docs/insights/OptimizeCSSDelivery' target='_blank' >".@$elimini_arr[0]."&nbsp;".@$elimini_arr[1]."&nbsp;".@$elimini_arr[2]."</a>"."&nbsp;".@$elimini_arr[3]."&nbsp;".@$elimini_arr[4]."&nbsp;".@$elimini_arr[5]."&nbsp;".@$elimini_arr[6];
										 ?></label>
                                         
                                          <div class="scr">
                                          <ul class="ul_type">
                                         <?php  if(@$elimini_block_urls){foreach(@$elimini_block_urls as $row)
										{	?>
                                        <li  class="bd"><?php echo @$row['result']['args']['0']['value']; ?></li>
                                    				
									<?php } } ?>
                                           
                                          </ul>
                                          
                                          </div>
                                            </div>
                                 	<?php }?>
                                 
                                 
                                    <?php if(@$minify_jsname){?>
                                    <b style="font-weight:500;"><?php echo @$minify_jsname; ?></b></br>
                                    <div id="flip2">Show how to fix</div>
														      
                                         <div id="panel2" style="font-weight:400;color:#000"><label><b><?php echo @$minify_0jsformat; ?></b></label><br>
                                         <label class="setmin">
										 <?php 
										 @$minify_jsarr = explode(' ', @$minify_1jsformat); 
							echo "<a href='https://developers.google.com/speed/docs/insights/MinifyResources' target='_blank' >".@$minify_jsarr[0]."&nbsp;".@$minify_jsarr[1]."</a>"."&nbsp;".@$minify_jsarr[2]."&nbsp;".@$minify_jsarr[3]."&nbsp;".@$minify_jsarr[4]."&nbsp;".@$minify_jsarr[5]."&nbsp;".@$minify_jsarr[6]."&nbsp;".@$minify_jsarr[7]."&nbsp;".@$minify_jsarr[8]."&nbsp;".@$minify_jsarr[9]."&nbsp;".@$minify_jsarr[10];
					if(@$minify_js_args){			
					 foreach(@$minify_js_args as $k=>$row)
					{
						//echo $row['format']."<br>";
						if(@$k>0)
						{
							echo "&nbsp;".@$row['value'];
						}
					}			 
					}?></label>
                                          <div class="scr">
                                          <ul class="ul_type">
                                         <?php  if(@$minify_js_urls){foreach(@$minify_js_urls as $row)
												{
												@$minify_info = $row['result']['args'];		
												
												foreach(@$minify_info as $minify_jsinfo)
												{
												?><li  class="bd"><?php	echo @$minify_jsinfo['value']."&nbsp;";	
								
												}
												echo "&nbsp"."reduction could save after compression.";?> </li><?php
												} } ?>
                                          
                                         
                                          </ul>
                                          
                                          </div>
                                            </div>
                                 <?php } ?>
                                 
                                 
                                 <?php if(@$minify_cssname){?>
                                    <b style="font-weight:500;"><?php echo @$minify_cssname; ?></b></br>
                                    <div id="flip3">Show how to fix</div>
					      
                                         <div id="panel3" style="font-weight:400;color:#000"><label><b><?php echo @$minify_0cssformat; ?></b></label>
                                         
                                          <label class="setmin">
                                          
										 <?php 
										 @$minify_cssarr = explode(' ', @$minify_1cssformat); 
							echo "<a href='https://developers.google.com/speed/docs/insights/MinifyResources' target='_blank' >".@$minify_cssarr[0]."&nbsp;".@$minify_cssarr[1]."</a>"."&nbsp;".@$minify_cssarr[2]."&nbsp;".@$minify_cssarr[3]."&nbsp;".@$minify_cssarr[4]."&nbsp;".@$minify_cssarr[5]."&nbsp;".@$minify_cssarr[6]."&nbsp;".@$minify_cssarr[7]."&nbsp;".@$minify_cssarr[8]."&nbsp;".@$minify_cssarr[9]."&nbsp;".@$minify_cssarr[10];
					if(@$minify_css_args){			
					 foreach(@$minify_css_args as $k=>$row)
					{
						//echo $row['format']."<br>";
						if(@$k>0)
						{
							echo "&nbsp;".@$row['value']."&nbsp;"."reduction";
						}
					}			 
					}?></label>
                                          <div class="scr">
                                          <ul class="ul_type">
                                             <?php  if(@$minify_css_urls){foreach(@$minify_css_urls as $row)
												{
												@$minify_info = $row['result']['args'];		
												
												foreach(@$minify_info as $minify_cssinfo)
												{
												?><li  class="bd"><?php	echo @$minify_cssinfo['value']."&nbsp;";	
								
												}
												echo "&nbsp"."reduction could save after compression.";?> </li><?php
												} } ?>
                                         
                                             
                                             
                                            <!-- <li  class="bd">d</li>
                                             <li  class="bd">d</li>
                                             <li  class="bd">d</li>
                                             <li  class="bd">d</li>
                                             <li  class="bd">d</li>
                                             <li  class="bd">d</li>
                                             <li  class="bd">d</li>
                                             <li  class="bd">d</li>-->
                                          
                                            
                                          </ul>
                                          
                                          </div>
                                            </div>
                                            
                                    <?php } ?>        
                                        
                                 
                                 <?php if(@$minify_htmlname){?>
                                    <b style="font-weight:500;"><?php echo @$minify_htmlname; ?></b></br>
                                    <div id="flip4">Show how to fix</div>
					      
                                         <div id="panel4" style="font-weight:400;color:#000"><label><b><?php echo @$minify_0htmlformat; ?></b></label>
                                         
                                         <label class="setmin">
										 <?php 
										 @$minify_htmlarr = explode(' ', @$minify_1htmlformat); 
							echo "<a href='https://developers.google.com/speed/docs/insights/MinifyResources' target='_blank' >".@$minify_htmlarr[0]."&nbsp;".@$minify_htmlarr[1]."</a>"."&nbsp;".@$minify_htmlarr[2]."&nbsp;".@$minify_htmlarr[3]."&nbsp;".@$minify_htmlarr[4]."&nbsp;".@$minify_htmlarr[5]."&nbsp;".@$minify_htmlarr[6]."&nbsp;".@$minify_htmlarr[7]."&nbsp;".@$minify_htmlarr[8]."&nbsp;".@$minify_htmlarr[9]."&nbsp;".@$minify_htmlarr[10];
					if(@$minify_html_args){			
					 foreach(@$minify_html_args as $k=>$row)
					{
						//echo $row['format']."<br>";
						if(@$k>0)
						{
							echo "&nbsp;".@$row['value']."&nbsp;"."reduction";
						}
					}			 
					}?></label>
                                          <div class="scr">
                                          <ul class="ul_type">
                                             <?php  if(@$minify_html_urls){foreach(@$minify_html_urls as $row)
												{
												@$minify_info = $row['result']['args'];		
												
												foreach(@$minify_info as $minify_htmlinfo)
												{
												?><li  class="bd"><?php	echo @$minify_htmlinfo['value']."&nbsp;";	
								
												}
												echo "&nbsp"."reduction could save after compression.";?> </li><?php
												} } ?>
                                         
                                             <!--<li  class="bd">d</li>
                                             <li  class="bd">d</li>
                                             <li  class="bd">d</li>
                                             <li  class="bd">d</li>
                                             <li  class="bd">d</li>
                                             <li  class="bd">d</li>
                                             <li  class="bd">d</li>-->
                                             
                                          
                                          </ul>
                                          
                                          </div>
                                            </div>
                                        <?php } ?>
                                         
                                         
                                        <b style="font-weight:500;">Optimization Already  Present</b></br>
                          
                                    <div id="flip5">Show how to fix</div>
					      
                                         <div id="panel5" style="font-weight:400;color:#000"><!--<label>Eliminate render-blocking JavaScript and CSS in above-the-fold content</label>-->
                                         <br>
                                         
                                          <div class="scr">
                                          <ul class="ul_type">
                                          <?php if(@$rules_avodpagename){?>
                                             <li><label><b><?php if(@$rules_avodpagename){echo @$rules_avodpagename; }?></b></label><br>
                                            <label class="setmin">  <?php 
							@$rules_avodarr = explode(' ', @$rules_avodformat); 
							echo @$rules_avodarr[0]."&nbsp;".@$rules_avodarr[1]."&nbsp;".@$rules_avodarr[2]."&nbsp;".@$rules_avodarr[3]."&nbsp;".@$rules_avodarr[4]."&nbsp;".@$rules_avodarr[5]."&nbsp;".@$rules_avodarr[6]."&nbsp;".@$rules_avodarr[7]."&nbsp;"."<a href='".@$rules_avodformatlink."' target='_blank' >".@$rules_avodarr[8]."&nbsp;".@$rules_avodarr[9]."&nbsp;".@$rules_avodarr[10]."&nbsp;".@$rules_avodarr[11]."&nbsp;".@$rules_avodarr[12]."</a>"; ?>
                                            </label> </li>
                                            <?php }?>
                                             
                                             
                                             <?php if(@$rules_enablezipname){?>
                                             <li class="bd"><label><b><?php if(@$rules_enablezipname){echo @$rules_enablezipname; }?></b></label><br>
                                            <label>  <?php 
							@$rules_enaziparr = explode(' ', @$rules_enablezipformat); 
							echo @$rules_enaziparr[0]."&nbsp;".@$rules_enaziparr[1]."&nbsp;".@$rules_enaziparr[2]."&nbsp;".@$rules_enaziparr[3]."&nbsp;".@$rules_enaziparr[4]."&nbsp;".@$rules_enaziparr[5]."&nbsp;".@$rules_enaziparr[6]."&nbsp;"."<a href='".@$rules_enableziplink."' target='_blank' >".@$rules_enaziparr[7]."&nbsp;".@$rules_enaziparr[8]."&nbsp;".@$rules_enaziparr[9]."&nbsp;"."</a>"; ?>
                                            </label> </li>
                                            <?php }?>
                                            
                                            <?php if(@$rules_levername){?>
                                             <li class="bd"><label><b><?php if(@$rules_levername){echo @$rules_levername; }?></b></label><br>
                                            <label>  <?php 
							@$rules_leverarr = explode(' ', @$rules_leverformat); 
							echo @$rules_leverarr[0]."&nbsp;".@$rules_leverarr[1]."&nbsp;".@$rules_leverarr[2]."&nbsp;".@$rules_leverarr[3]."&nbsp;".@$rules_leverarr[4]."&nbsp;".@$rules_leverarr[5]."&nbsp;".@$rules_leverarr[6]."&nbsp;".@$rules_leverarr[7]."&nbsp;"."<a href='".@$rules_leverlink."' target='_blank' >".@$rules_leverarr[8]."&nbsp;".@$rules_leverarr[9]."&nbsp;".@$rules_leverarr[10]."&nbsp;"."</a>"; ?>
                                            </label> </li>
                                            <?php }?>
                                            
                                            
                                             <?php if(@$rules_prviname){?>
                                             <li class="bd"><label><b><?php if(@$rules_prviname){echo @$rules_prviname; }?></b></label><br>
                                            <label>  <?php 
							@$rules_prviarr = explode(' ', @$rules_prviformat); 
							echo @$rules_prviarr[0]."&nbsp;".@$rules_prviarr[1]."&nbsp;".@$rules_prviarr[2]."&nbsp;".@$rules_prviarr[3]."&nbsp;".@$rules_prviarr[4]."&nbsp;".@$rules_prviarr[5]."&nbsp;".@$rules_prviarr[6]."&nbsp;".@$rules_prviarr[7]."&nbsp;".@$rules_prviarr[8]."&nbsp;".@$rules_prviarr[9]."&nbsp;"."<a href='".@$rules_prvilink."' target='_blank' >".@$rules_prviarr[10]."&nbsp;".@$rules_prviarr[11]."&nbsp;".@$rules_prviarr[12]."&nbsp;"."</a>"; ?>
                                            </label> </li>
                                            <?php }?>
                                            
                                             <?php if(@$rules_serresname){?>
                                             <li class="bd"><label><b><?php if(@$rules_serresname){echo @$rules_serresname; }?></b></label><br>
                                            <label>  <?php 
							@$rules_servarr = explode(' ', @$rules_serresformat); 
							echo @$rules_servarr[0]."&nbsp;".@$rules_servarr[1]."&nbsp;".@$rules_servarr[2]."&nbsp;".@$rules_servarr[3]."&nbsp;".@$rules_servarr[4]."&nbsp;".@$rules_servarr[5]."&nbsp;".@$rules_servarr[6]."&nbsp;"."<a href='".@$rules_serreslink."' target='_blank' >".@$rules_servarr[7]."&nbsp;".@$rules_servarr[8]."&nbsp;".@$rules_servarr[9]."&nbsp;".@$rules_servarr[10]."</a>"; ?>
                                            </label> </li>
                                            <?php }?>
                                            
                                          </ul>
                                          
                                          </div>
                                            </div>
                                         
                                         
                                         
                                         
                                         </div>
                                   		</div>
                                        </div>
                                    </div>
                                   
                                    <div class="tab-pane  p-20" id="profile" role="tabpanel">
                                   		<div id="ajax_pagespeed_mobile">	
                                           
                                           <div class="container preloder">
   												 <div class="row">
        <div class="col-md-12">
            <div class="loader">
                <div class="loader-inner">
                    <div class="loading one"></div>
                </div>
                <div class="loader-inner">
                    <div class="loading two"></div>
                </div>
                <div class="loader-inner">
                    <div class="loading three"></div>
                </div>
                <div class="loader-inner">
                    <div class="loading four"></div>
                </div>
            </div>
        </div>
    </div>
											</div>
                                           
                                           
                                           
                                           
                                           
                                           
                                        <!-- <div class="setc">
                                                 <b><?php if(@$web_title){echo "WebSite Name Is:- ".@$web_title; }?></b></br></br> </div>
                                                 
                                                 
                                         <div class="col-12">       
                                         <?php if(@$device_type == "mobile"){?>        
                                            <div class="mobiset">
            
                                              <img src="<?php echo base_url('assets/user/image/11.png');?>">
                                 
                                              <div class="mobinnerset mobeffect">
                             <?php echo @$image; ?>  
                                            
                                              </div>
                                              </div>
                                            <?php }?> 
                                            </div>
                                           
                                       	 <div class="p-20">
                                                               
                                         <div class="pull-left">
                                            <div class="oset">
                                                 <center><b style="font-weight:500;"> SPEED</b></br>
                                                  UNAVAILABLE</center>
                                            </div>
                                          </div>
                                           <div class="pull-left">
                                            <div class="tset">
                                            <center> <b style="font-weight:500;">OPTIMIZATION</b></br>
                                             <?php if(@$page_score){echo @$page_score;}else{echo "0";}?>&nbsp;/&nbsp; 100</center>
                                             </div>
                                           </div>
                                         <div style="clear:both"></div>
                                       <div class="conset">
                                          Data about the real-world performance of this page was <a href="https://developers.google.com/speed/docs/insights/faq#speedscoreunavailable" target="_blank">unavailable</a>. PageSpeed Insights was still able to analyze this page to find potential optimizations. Applying these optimizations may improve the speed of this page. Please investigate the recommendations below. <a href="https://developers.google.com/speed/docs/insights/about" target="_blank">Learn more.</a>    
                                        </div>
                                        <div class="page_state">
                                       <b style="font-weight:500;"> Page Stats</b></br></br>
PSI estimates this page requires 1 additional round trips to load render blocking resources and 9.9 MB to fully render. The median page requires 4 round trips and 3.4 MB. Fewer round trips and bytes results in faster pages.
                                        
                                        </div></br></br>
                                        <b style="font-weight:500;">Optimization Suggestions</b></br></br>								
                                        <?php if(@$optmiz_imgname){?>
                                        <b style="font-weight:500;margin-top:3%"><?php echo @$optmiz_imgname; ?></b>
                   
                                         <div id="flipm">Show how to fix</div>
					
                                            	<div id="panelm" style="font-weight:400;color:#000"><label><?php echo @$oprimize_imgformat1; ?></label>
                                                <div>
                                                <?php if(@$oprimize_imgformat2){?>
                                                <label><?php  
												@$optize_word = explode(' ',@$oprimize_imgformat2); 
											?><a href="<?php echo @$oprimize_imgformaturl; ?>" target="_blank"><?php echo @$optize_word[0]."&nbsp;".@$optize_word[1]."&nbsp;".@$optize_word[2]."&nbsp;".@$optize_word[3];?></a><?php echo "&nbsp;".@$optize_word[4]."&nbsp;".@$optize_word[5]."&nbsp;".@$optize_word[6]."&nbsp;".@$optize_word[7]."&nbsp;".@$optize_word[8]."&nbsp;".@$oprimize_imgformatmb."&nbsp;"."(" .@$oprimize_imgformatpr ."&nbsp;"."reduction" .")";
						?>
                                                </label>
                                                <?php } ?>
                                                </div>
                                            <div class="scr">
                                           
                                          <ul class="ul_type">
                                          <?php if(@$optimize_img){foreach(@$optimize_img as $row)
											{?>
												<li class="bd"><?php echo @$row['result']['args'][0]['value'];?></li>
										<?php } }?>
                                             
                                          </ul>
                                          
                                            </div>
                                              </div>
                                            <?php } ?>  
                                           
                                          <?php if(@$elimini_rend_block){?>  
                                        <b style="font-weight:500;"><?php echo @$elimini_rend_block; ?></b></br>
                          
                                    <div id="flipm1">Show how to fix</div>
					      
                                         <div id="panelm1" style="font-weight:400;color:#000"><label><?php echo @$elimini_block_0format; ?></label>
                                         <br>
                                         <label><?php echo @$elimini_block_1format; ?></label>
                                         <br>
                                         <label><?php
										 		@$elimini_arr = explode(' ', @$elimini_block_2format); 
										echo "<a href='https://developers.google.com/speed/docs/insights/OptimizeCSSDelivery' target='_blank' >".@$elimini_arr[0]."&nbsp;".@$elimini_arr[1]."&nbsp;".@$elimini_arr[2]."</a>"."&nbsp;".@$elimini_arr[3]."&nbsp;".@$elimini_arr[4]."&nbsp;".@$elimini_arr[5]."&nbsp;".@$elimini_arr[6];
										 ?></label>
                                         
                                          <div class="scr">
                                          <ul class="ul_type">
                                         <?php  if(@$elimini_block_urls){foreach(@$elimini_block_urls as $row)
										{	?>
                                        <li  class="bd"><?php echo @$row['result']['args']['0']['value']; ?></li>
                                    				
									<?php } } ?>
                                           
                                          </ul>
                                          
                                          </div>
                                            </div>
                                 	<?php }?>
                                 
                                 
                                    <?php if(@$minify_jsname){?>
                                    <b style="font-weight:500;"><?php echo @$minify_jsname; ?></b></br>
                                    <div id="flipm2">Show how to fix</div>
														      
                                         <div id="panelm2" style="font-weight:400;color:#000"><label><b><?php echo @$minify_0jsformat; ?></b></label><br>
                                         <label>
										 <?php 
										 @$minify_jsarr = explode(' ', @$minify_1jsformat); 
							echo "<a href='https://developers.google.com/speed/docs/insights/MinifyResources' target='_blank' >".@$minify_jsarr[0]."&nbsp;".@$minify_jsarr[1]."</a>"."&nbsp;".@$minify_jsarr[2]."&nbsp;".@$minify_jsarr[3]."&nbsp;".@$minify_jsarr[4]."&nbsp;".@$minify_jsarr[5]."&nbsp;".@$minify_jsarr[6]."&nbsp;".@$minify_jsarr[7]."&nbsp;".@$minify_jsarr[8]."&nbsp;".@$minify_jsarr[9]."&nbsp;".@$minify_jsarr[10];
					if(@$minify_js_args){			
					 foreach(@$minify_js_args as $k=>$row)
					{
						//echo $row['format']."<br>";
						if(@$k>0)
						{
							echo "&nbsp;".@$row['value'];
						}
					}			 
					}?></label>
                                          <div class="scr">
                                          <ul class="ul_type">
                                         <?php  if(@$minify_js_urls){foreach(@$minify_js_urls as $row)
												{
												@$minify_info = $row['result']['args'];		
												
												foreach(@$minify_info as $minify_jsinfo)
												{
												?><li  class="bd"><?php	echo @$minify_jsinfo['value']."&nbsp;";	
								
												}
												echo "&nbsp"."reduction could save after compression.";?> </li><?php
												} } ?>
                                          
                                         
                                          </ul>
                                          
                                          </div>
                                            </div>
                                 <?php } ?>
                                 
                                 
                                 <?php if(@$minify_cssname){?>
                                    <b style="font-weight:500;"><?php echo @$minify_cssname; ?></b></br>
                                    <div id="flipm3">Show how to fix</div>
					      
                                         <div id="panelm3" style="font-weight:400;color:#000"><label><b><?php echo @$minify_0cssformat; ?></b></label>
                                         
                                          <label>
										 <?php 
										 @$minify_cssarr = explode(' ', @$minify_1cssformat); 
							echo "<a href='https://developers.google.com/speed/docs/insights/MinifyResources' target='_blank' >".@$minify_cssarr[0]."&nbsp;".@$minify_cssarr[1]."</a>"."&nbsp;".@$minify_cssarr[2]."&nbsp;".@$minify_cssarr[3]."&nbsp;".@$minify_cssarr[4]."&nbsp;".@$minify_cssarr[5]."&nbsp;".@$minify_cssarr[6]."&nbsp;".@$minify_cssarr[7]."&nbsp;".@$minify_cssarr[8]."&nbsp;".@$minify_cssarr[9]."&nbsp;".@$minify_cssarr[10];
					if(@$minify_css_args){			
					 foreach(@$minify_css_args as $k=>$row)
					{
						//echo $row['format']."<br>";
						if(@$k>0)
						{
							echo "&nbsp;".@$row['value']."&nbsp;"."reduction";
						}
					}			 
					}?></label>
                                          <div class="scr">
                                          <ul class="ul_type">
                                             <?php  if(@$minify_css_urls){foreach(@$minify_css_urls as $row)
												{
												@$minify_info = $row['result']['args'];		
												
												foreach(@$minify_info as $minify_cssinfo)
												{
												?><li  class="bd"><?php	echo @$minify_cssinfo['value']."&nbsp;";	
								
												}
												echo "&nbsp"."reduction could save after compression.";?> </li><?php
												} } ?>
                                         
                                             
                                             
                                             <li  class="bd">d</li>
                                             <li  class="bd">d</li>
                                             <li  class="bd">d</li>
                                             <li  class="bd">d</li>
                                             <li  class="bd">d</li>
                                             <li  class="bd">d</li>
                                             <li  class="bd">d</li>
                                             <li  class="bd">d</li>
                                          
                                            
                                          </ul>
                                          
                                          </div>
                                            </div>
                                            
                                    <?php } ?>        
                                        
                                 
                                 <?php if(@$minify_htmlname){?>
                                    <b style="font-weight:500;"><?php echo @$minify_htmlname; ?></b></br>
                                    <div id="flipm4">Show how to fix</div>
					      
                                         <div id="panelm4" style="font-weight:400;color:#000"><label><b><?php echo @$minify_0htmlformat; ?></b></label>
                                         
                                         <label>
										 <?php 
										 @$minify_htmlarr = explode(' ', @$minify_1htmlformat); 
							echo "<a href='https://developers.google.com/speed/docs/insights/MinifyResources' target='_blank' >".@$minify_htmlarr[0]."&nbsp;".@$minify_htmlarr[1]."</a>"."&nbsp;".@$minify_htmlarr[2]."&nbsp;".@$minify_htmlarr[3]."&nbsp;".@$minify_htmlarr[4]."&nbsp;".@$minify_htmlarr[5]."&nbsp;".@$minify_htmlarr[6]."&nbsp;".@$minify_htmlarr[7]."&nbsp;".@$minify_htmlarr[8]."&nbsp;".@$minify_htmlarr[9]."&nbsp;".@$minify_htmlarr[10];
					if(@$minify_html_args){			
					 foreach(@$minify_html_args as $k=>$row)
					{
						//echo $row['format']."<br>";
						if(@$k>0)
						{
							echo "&nbsp;".@$row['value']."&nbsp;"."reduction";
						}
					}			 
					}?></label>
                                          <div class="scr">
                                          <ul class="ul_type">
                                             <?php  if(@$minify_html_urls){foreach(@$minify_html_urls as $row)
												{
												@$minify_info = $row['result']['args'];		
												
												foreach(@$minify_info as $minify_htmlinfo)
												{
												?><li  class="bd"><?php	echo @$minify_htmlinfo['value']."&nbsp;";	
								
												}
												echo "&nbsp"."reduction could save after compression.";?> </li><?php
												} } ?>
                                         
                                             <li  class="bd">d</li>
                                             <li  class="bd">d</li>
                                             <li  class="bd">d</li>
                                             <li  class="bd">d</li>
                                             <li  class="bd">d</li>
                                             <li  class="bd">d</li>
                                             <li  class="bd">d</li>
                                             
                                          
                                          </ul>
                                          
                                          </div>
                                            </div>
                                        <?php } ?>
                                         
                                         
                                        <b style="font-weight:500;">Optimization Already  Present</b></br>
                          
                                    <div id="flipm5">Show how to fix</div>
					      
                                         <div id="panelm5" style="font-weight:400;color:#000"><!--<label>Eliminate render-blocking JavaScript and CSS in above-the-fold content</label>
                                         <br>
                                         
                                          <div class="scr">
                                          <ul class="ul_type">
                                          <?php if(@$rules_avodpagename){?>
                                             <li><label><b><?php if(@$rules_avodpagename){echo @$rules_avodpagename; }?></b></label><br>
                                            <label>  <?php 
							@$rules_avodarr = explode(' ', @$rules_avodformat); 
							echo @$rules_avodarr[0]."&nbsp;".@$rules_avodarr[1]."&nbsp;".@$rules_avodarr[2]."&nbsp;".@$rules_avodarr[3]."&nbsp;".@$rules_avodarr[4]."&nbsp;".@$rules_avodarr[5]."&nbsp;".@$rules_avodarr[6]."&nbsp;".@$rules_avodarr[7]."&nbsp;"."<a href='".@$rules_avodformatlink."' target='_blank' >".@$rules_avodarr[8]."&nbsp;".@$rules_avodarr[9]."&nbsp;".@$rules_avodarr[10]."&nbsp;".@$rules_avodarr[11]."&nbsp;".@$rules_avodarr[12]."</a>"; ?>
                                            </label> </li>
                                            <?php }?>
                                             
                                             
                                             <?php if(@$rules_enablezipname){?>
                                             <li class="bd"><label><b><?php if(@$rules_enablezipname){echo @$rules_enablezipname; }?></b></label><br>
                                            <label>  <?php 
							@$rules_enaziparr = explode(' ', @$rules_enablezipformat); 
							echo @$rules_enaziparr[0]."&nbsp;".@$rules_enaziparr[1]."&nbsp;".@$rules_enaziparr[2]."&nbsp;".@$rules_enaziparr[3]."&nbsp;".@$rules_enaziparr[4]."&nbsp;".@$rules_enaziparr[5]."&nbsp;".@$rules_enaziparr[6]."&nbsp;"."<a href='".@$rules_enableziplink."' target='_blank' >".@$rules_enaziparr[7]."&nbsp;".@$rules_enaziparr[8]."&nbsp;".@$rules_enaziparr[9]."&nbsp;"."</a>"; ?>
                                            </label> </li>
                                            <?php }?>
                                            
                                            <?php if(@$rules_levername){?>
                                             <li class="bd"><label><b><?php if(@$rules_levername){echo @$rules_levername; }?></b></label><br>
                                            <label>  <?php 
							@$rules_leverarr = explode(' ', @$rules_leverformat); 
							echo @$rules_leverarr[0]."&nbsp;".@$rules_leverarr[1]."&nbsp;".@$rules_leverarr[2]."&nbsp;".@$rules_leverarr[3]."&nbsp;".@$rules_leverarr[4]."&nbsp;".@$rules_leverarr[5]."&nbsp;".@$rules_leverarr[6]."&nbsp;".@$rules_leverarr[7]."&nbsp;"."<a href='".@$rules_leverlink."' target='_blank' >".@$rules_leverarr[8]."&nbsp;".@$rules_leverarr[9]."&nbsp;".@$rules_leverarr[10]."&nbsp;"."</a>"; ?>
                                            </label> </li>
                                            <?php }?>
                                            
                                            
                                             <?php if(@$rules_prviname){?>
                                             <li class="bd"><label><b><?php if(@$rules_prviname){echo @$rules_prviname; }?></b></label><br>
                                            <label>  <?php 
							@$rules_prviarr = explode(' ', @$rules_prviformat); 
							echo @$rules_prviarr[0]."&nbsp;".@$rules_prviarr[1]."&nbsp;".@$rules_prviarr[2]."&nbsp;".@$rules_prviarr[3]."&nbsp;".@$rules_prviarr[4]."&nbsp;".@$rules_prviarr[5]."&nbsp;".@$rules_prviarr[6]."&nbsp;".@$rules_prviarr[7]."&nbsp;".@$rules_prviarr[8]."&nbsp;".@$rules_prviarr[9]."&nbsp;"."<a href='".@$rules_prvilink."' target='_blank' >".@$rules_prviarr[10]."&nbsp;".@$rules_prviarr[11]."&nbsp;".@$rules_prviarr[12]."&nbsp;"."</a>"; ?>
                                            </label> </li>
                                            <?php }?>
                                            
                                             <?php if(@$rules_serresname){?>
                                             <li class="bd"><label><b><?php if(@$rules_serresname){echo @$rules_serresname; }?></b></label><br>
                                            <label>  <?php 
							@$rules_servarr = explode(' ', @$rules_serresformat); 
							echo @$rules_servarr[0]."&nbsp;".@$rules_servarr[1]."&nbsp;".@$rules_servarr[2]."&nbsp;".@$rules_servarr[3]."&nbsp;".@$rules_servarr[4]."&nbsp;".@$rules_servarr[5]."&nbsp;".@$rules_servarr[6]."&nbsp;"."<a href='".@$rules_serreslink."' target='_blank' >".@$rules_servarr[7]."&nbsp;".@$rules_servarr[8]."&nbsp;".@$rules_servarr[9]."&nbsp;".@$rules_servarr[10]."</a>"; ?>
                                            </label> </li>
                                            <?php }?>
                                            
                                          </ul>
                                          
                                          </div>
                                            </div>!-->
                                         
                                         
                                         
                                         
                                         </div>
                                         </div>
                                    </div>
                                    <!--<div class="tab-pane p-20" id="messages" role="tabpanel">3</div>
                                </div>-->
                            </div>
                        </div>
                    </div>
                    
                    
                   
                    </div>
                    
<?php $this->load->view('user/Footer_user'); ?>
