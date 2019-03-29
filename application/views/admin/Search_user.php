<table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th> Id</th>
                  <th> Name</th>
                  <th> Email</th>
                  <th> Password</th>
                  <th> Mobile No.</th>
                  <th> Gender</th>
                  <th> Country</th>
                  <th> Image</th>
                  <th> Status</th>
                  <th> Created_Time</th>
                  <th> Action</th>
                  <th>Chating</th>
                </tr>
                </thead>
                <tbody>
               
                	<?php foreach(@$user_data as $row) {?>
                	<tr>	
                    	<td><?php echo @$row['user_id']; ?></td>
                        <td><?php echo @$row['user_name']; ?></td>
                        <td><?php echo @$row['user_email']; ?></td>
                        <td><?php echo @$row['user_password']; ?></td>
                        <td><?php echo @$row['user_mobile']; ?></td>
                        <td><?php echo @$row['user_gender']; ?></td>
                        <td><?php echo @$row['country_name']; ?></td>
                        <td><img src="<?php echo base_url('assets/user/image/'.$row['user_image'])?>" height="50px" width="50px" /></td>
                        
                        <td>
						<?php //echo @$row['user_status']; ?>
                        <span id="myspan">
                        <form method="post">
                        <label class="switch">
                          <input type="checkbox" name="status_value" class="status_btn" value="<?php if(@$row['user_status'] == 1){ echo 0;}else{echo 1;}?>" <?php if(@$row['user_status'] == 1){echo "checked"; } ?> onClick="getval(<?php echo @$row['user_id']; ?>);">
                          <span class="slider round"></span>
                        </label>
                        </form>
                        </span>
                        </td>
                        
                        
                        
                        <td><?php echo @$row['user_created_time']; ?></td>
                        
                        <td><a href="<?php echo site_url('admin/User/delete_user/'.$row['user_id']); ?>" onclick="return confirm('Are you sure?')"><i class="fa fa-trash-o" aria-hidden="true"></i> </a>&nbsp;||&nbsp;<a href="<?php echo site_url('admin/User/update_user/'.$row['user_id']); ?>"> <i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
                        
                         <td>
                   
                    	<a href="javascript:void(0)" class="user_chat_box"  data-to_id='<?php echo @$row['user_id']; ?>' data-from_id='1' onClick="user(<?php echo @$row['user_id']; ?>);">Chat</a>
                        
                    </td>
                    </tr>
                    <?php }?>
                    
                    <tr>
                        <td colspan="11">
                                <?php echo $this->pagination->create_links(); ?>
                        </td>
            		</tr>
                </tbody>
              </table>