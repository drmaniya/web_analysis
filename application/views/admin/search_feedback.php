<table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th> FeedBack Id</th>
                  <th> FeedBcaker Name</th>
                  <th> Message</th>
                  <th> FeedBack Status</th>
                  <th> Action</th>
                </tr>
                </thead>
                <tbody>
               
                	<?php foreach(@$user_data as $row) {?>
                	<tr>	
                    	<td><?php echo @$row['feedback_id']; ?></td>
                        <td><?php echo @$row['feedbacker_name']; ?></td>
                        <td><?php echo @$row['feedbacker_message']; ?></td>
                        <td>
                        <span id="myspan">
                            <form method="post">
                            <label class="switch">
                              <input type="checkbox" name="status_value" class="status_btn" value="<?php if(@$row['feedback_status'] == 1){ echo 0;}else{echo 1;}?>" <?php if(@$row['feedback_status'] == 1){echo "checked"; } ?> onClick="getval(<?php echo @$row['feedback_id']; ?>);">
                              <span class="slider round"></span>
                            </label>
                            </form>
                        </span>
                       
                        </td>
                        <td><a href="<?php echo site_url('admin/Feedback/delete/'.@$row['feedback_id']); ?>"><i class="fa fa-trash-o" aria-hidden="true"></i> </a></td>
                    </tr>
                    <?php }?>
                     <tr>
                        <td colspan="5">
                                <?php echo $this->pagination->create_links(); ?>
                        </td>
            		</tr>
                </tbody>
              </table>