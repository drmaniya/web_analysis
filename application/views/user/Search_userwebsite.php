<table class="tablesaw table-bordered table-hover table">
                                    <thead>
                                        <tr>
                                            <th>WebSite URL</th>
                                            <th>Website Name</th>
                                            <th>Action</th>
                                            <!--<th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="1">
                                                <abbr title="Rotten Tomato Rating">Rating</abbr>
                                            </th>
                                            <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="4">Gross</th>-->
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach(@$site_view as $row){?>
                                        <tr>
                                            <td class="title"><a href="<?php echo @$row['web_url']; ?>" target="_blank"><?php echo @$row['web_url']; ?></a></td>
                                            <td><?php echo @$row['web_name']; ?></td>
                                            <td><a href="<?php echo site_url('user/User_site/site_delete/'.@$row['website_id']); ?>" ><i class="fa fa-trash-o" aria-hidden="true" data-toggle="tooltip" data-placement="bottom" title="Delete"></i></a>&nbsp;||&nbsp;<a href="<?php echo site_url('user/User_site/site_update/'.@$row['website_id']); ?>"><i class="fa fa-pencil-square-o" aria-hidden="true" data-toggle="tooltip" data-placement="bottom" title="Update"></i>&nbsp;</a><?php if(@$webid_alredy > 0){?>||&nbsp;<a href="<?php echo site_url('user/Reports/get_reports/'.@$row['website_id']); ?>"><button class="btn btn-info">&nbsp;View Report</button></a><?php } ?>&nbsp;||
                                            
                                            
                                             <button type="button" class="btn btn-primary getwebid" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo" data-webid=<?php echo $row['website_id']; ?> data-weburl=<?php echo $row['web_url']; ?>>&nbsp;Get Code</button>


<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Copy Script Tag Put In Your Website Home Page Head Tag</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
         
          <div class="form-group">
            <label for="message-text" class="col-form-label">
            	Please Don't Chang Any Value
            </label>
            
            <textarea class="form-control" id="textarea_code" rows="5">
            	
            </textarea>
          
          	
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>&nbsp;
        <!--<button type="button" class="btn btn-primary">Send message</button>-->
      </div>
    </div>
  </div>
</div>
                                           
                                            
                                            
                                            
                                </td>
                                            
                                            
                                            
                                           
                                        </tr>
                                        <?php }?>
                                        <!--<tr>
                                            <td class="title"><a href="javascript:void(0)">Titanic</a></td>
                                            <td>2</td>
                                            <td>1997</td>
                                            <td>88%</td>
                                            <td>$2.1B</td>
                                        </tr>
                                        <tr>
                                            <td class="title"><a href="javascript:void(0)">The Avengers</a></td>
                                            <td>3</td>
                                            <td>2012</td>
                                            <td>92%</td>
                                            <td>$1.5B</td>
                                        </tr>
                                        <tr>
                                            <td class="title"><a href="javascript:void(0)">Harry Potter and the Deathly Hallows—Part 2</a></td>
                                            <td>4</td>
                                            <td>2011</td>
                                            <td>96%</td>
                                            <td>$1.3B</td>
                                        </tr>
                                        <tr>
                                            <td class="title"><a href="javascript:void(0)">Frozen</a></td>
                                            <td>5</td>
                                            <td>2013</td>
                                            <td>89%</td>
                                            <td>$1.2B</td>
                                        </tr>
                                        <tr>
                                            <td class="title"><a href="javascript:void(0)">Iron Man 3</a></td>
                                            <td>6</td>
                                            <td>2013</td>
                                            <td>78%</td>
                                            <td>$1.2B</td>
                                        </tr>
                                        <tr>
                                            <td class="title"><a href="javascript:void(0)">Transformers: Dark of the Moon</a></td>
                                            <td>7</td>
                                            <td>2011</td>
                                            <td>36%</td>
                                            <td>$1.1B</td>
                                        </tr>
                                        <tr>
                                            <td class="title"><a href="javascript:void(0)">The Lord of the Rings: The Return of the King</a></td>
                                            <td>8</td>
                                            <td>2003</td>
                                            <td>95%</td>
                                            <td>$1.1B</td>
                                        </tr>
                                        <tr>
                                            <td class="title"><a href="javascript:void(0)">Skyfall</a></td>
                                            <td>9</td>
                                            <td>2012</td>
                                            <td>92%</td>
                                            <td>$1.1B</td>
                                        </tr>
                                        <tr>
                                            <td class="title"><a href="javascript:void(0)">Transformers: Age of Extinction</a></td>
                                            <td>10</td>
                                            <td>2014</td>
                                            <td>18%</td>
                                            <td>$1.0B</td>
                                        </tr>-->
                                    </tbody>
                                </table>
                                
                                
                           
                           
           <?php if($_SERVER['HTTP_HOST'] == 'localhost')
{
	?>

<script type="text/javascript">
				var get_webid;
				var get_weburl;
				$(document).ready(function(e) {
                    $('.getwebid').click(function(){
							 get_webid = $(this).data('webid');
							//alert(get_webid);
							
							//var head = document.getElementsByTagName('head').item(0);
						
							//var id = 6;
							var html = '&lt;script type="text/javascript"&gt; var site_id='+ get_webid+'; &lt;/script&gt;';
							html += '&lt;script type="text/javascript" src="http://localhost/web_analysis/assets/web_script.js" &gt;&lt;/script&gt;';
							document.getElementById('textarea_code').innerHTML = html;

							
						
						});
					    	
                   });
			   
                </script>
	<?php }else{?>
	<script type="text/javascript">
				var get_webid;
				var get_weburl;
				$(document).ready(function(e) {
                    $('.getwebid').click(function(){
							 get_webid = $(this).data('webid');
							//alert(get_webid);
							
							//var head = document.getElementsByTagName('head').item(0);
						
							//var id = 6;
							var html = '&lt;script type="text/javascript"&gt; var site_id='+ get_webid+'; &lt;/script&gt;';
							html += '&lt;script type="text/javascript" src="http://webanalysis.creativewebinfotech.com/webanalysis/assets/web_script.js" &gt;&lt;/script&gt;';
							document.getElementById('textarea_code').innerHTML = html;

							
						
						});
					    	
                   });
			   
                </script>
                <?php }?>     
                           