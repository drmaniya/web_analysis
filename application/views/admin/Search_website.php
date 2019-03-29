<table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th> Website Id</th>
                  <th> Website Name</th>
                  <th> Website URL </th>
                  <th> User Id</th>
                  <th> WebSite Status</th>
                  <th> Created_Time</th>
                  <th> Action</th>
                </tr>
                </thead>
                <tbody>
               
                	<?php foreach(@$web_data as $row) {?>
                	<tr>	
                    	<td><?php echo @$row['website_id']; ?></td>
                        <td><?php echo @$row['web_name']; ?></td>
                        <td><a href="<?php echo @$row['web_url'];?>" target="_blank"><?php echo @$row['web_url']; ?></a></td>
                        <td><?php echo @$row['user_id']; ?></td>
                       
                        <td >
						<?php //echo @$row['web_status']; ?>
                        <span id="myspan">
                        <form method="post">
                        <label class="switch">
                          <input type="checkbox" name="status_value" class="status_btn" value="<?php if(@$row['web_status'] == 1){ echo 0;}else{echo 1;}?>" <?php if(@$row['web_status'] == 1){echo "checked"; } ?> onClick="getval(<?php echo @$row['website_id']; ?>);">
                          <span class="slider round"></span>
                        </label>
                        </form>
                        </span>
                        </td>
                        
                        
                        
                        <td><?php echo @$row['web_created_time']; ?></td>
                        
                        <td align="center"><a href="<?php echo site_url('admin/Add_site/delete_website/'.$row['website_id']); ?>" onclick="return confirm('Are you sure?')"><i class="fa fa-trash-o" aria-hidden="true"></i> </a>||&nbsp;<a href="<?php echo site_url('admin/Reports_admin/get_reports/'.$row['website_id']); ?>">View Report</a></td>
                    </tr>
                    <?php } ?>
                    <tr>
                        <td colspan="5">
                                <?php echo $this->pagination->create_links(); ?>
                        </td>
            		</tr>
                </tbody>
              </table>