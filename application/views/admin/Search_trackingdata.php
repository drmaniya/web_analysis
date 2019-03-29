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
                            </tr>
                                       
                        <?php }?>
                        <tr>
                        <td colspan="11">
                                <?php echo $this->pagination->create_links(); ?>
                        </td>
            		</tr>
                </tbody>
              </table>