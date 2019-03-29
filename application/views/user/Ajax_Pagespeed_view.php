	  <div class="setc">
                                                 <b><?php if(@$web_title){echo "WebSite Name Is:- ".@$web_title; }?></b></br></br> </div>
      										 <?php if(@$device_type == "desktop"){?>        
                                            <div class="iset">
            
                                              <img src="<?php echo base_url('assets/user/image/cm.jpg');?>">
                                 
                                              <div class="inner effect3">
                             <?php echo @$image; ?>  
                                            
                                              </div>
                                              </div>
                                            <?php }elseif(@$device_type == "mobile"){?> 
                                             
   												  
                                                  <div class="mobiset">
            
                                              <img src="<?php echo base_url('assets/user/image/11.png');?>">
                                 
                                              <div class="mobinnerset mobeffect">
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
                   
                                         <div  data-toggle="collapse" class="flipajdata" data-target="#panexp" aria-expanded="false" aria-controls="panexp" >Show how to fix</div>
					
                                           <div id="panexp" class="collapse panelajdata" style="font-weight:400;color:#000"><label><?php echo @$oprimize_imgformat1; ?></label>
                                                
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
                          
                                    <div data-toggle="collapse" class="flipajdata" data-target="#panexp1" aria-expanded="false" aria-controls="panexp1" >Show how to fix</div>
					      
                                         <div id="panexp1" class="collapse panelajdata" style="font-weight:400;color:#000"><label><?php echo @$elimini_block_0format; ?></label>
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
                                    <div data-toggle="collapse" class="flipajdata" data-target="#panexp2" aria-expanded="false" aria-controls="panexp2">Show how to fix</div>
														      
                                         <div id="panexp2" class="collapse panelajdata" style="font-weight:400;color:#000"><label><b><?php echo @$minify_0jsformat; ?></b></label><br>
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
                                    <div data-toggle="collapse" class="flipajdata" data-target="#panexp3" aria-expanded="false" aria-controls="panexp3">Show how to fix</div>
					      
                                         <div id="panexp3" class="collapse panelajdata" style="font-weight:400;color:#000"><label><b><?php echo @$minify_0cssformat; ?></b></label>
                                         
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
                                    <div data-toggle="collapse" class="flipajdata" data-target="#panexp4" aria-expanded="false" aria-controls="panexp4">Show how to fix</div>
					      
                                         <div id="panexp4" class="collapse panelajdata" style="font-weight:400;color:#000"><label><b><?php echo @$minify_0htmlformat; ?></b></label>
                                         
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
                          
                                    <div data-toggle="collapse" class="flipajdata" data-target="#panexp5" aria-expanded="false" aria-controls="panexp5">Show how to fix</div>
					      
                                         <div id="panexp5" class="collapse panelajdata" style="font-weight:400;color:#000"><!--<label>Eliminate render-blocking JavaScript and CSS in above-the-fold content</label>-->
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