<table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th> WebContent Id</th>
                  <th> Heading</th>
                  <th> Mid Heading</th>
                  <th> Sub Heading</th>
                  <th> Content</th>
                  <th> Page Name</th>
                  <th> Image</th>
                  <th> Status</th>
                  <th> Action</th>
                </tr>
                </thead>
                <tbody>
               
                	<?php foreach(@$user_data as $row) {?>
                	<tr>	
                    	<td><?php echo @$row['id']; ?></td>
                        <td><?php echo @$row['heading']; ?></td>
                        <td><textarea disabled rows="5"><?php echo @$row['mid_heading']; ?></textarea></td>
                        <td><textarea disabled rows="5"><?php echo @$row['sub_heading']; ?></textarea></td>
                        <td><textarea disabled rows="5" cols="25"><?php echo @$row['content']; ?></textarea></td>
                        <td><?php echo @$row['page_name']; ?></td>
                        <td>
                        <?php if(@$row['image'] == ''){echo "---"; }else{?>
                        <img src="<?php echo base_url('assets/webvisitor/img/'.$row['image'])?>" height="50px" width="50px" /><?php } ?></td>
                        
                        <td>
						<?php //echo @$row['user_status']; ?>
                        <span id="myspan">
                        <form method="post">
                        <label class="switch">
                          <input type="checkbox" name="status_value" class="status_btn" value="<?php if(@$row['content_status'] == 1){ echo 0;}else{echo 1;}?>" <?php if(@$row['content_status'] == 1){echo "checked"; } ?> onClick="getval(<?php echo @$row['id']; ?>);">
                          <span class="slider round"></span>
                        </label>
                        </form>
                        </span>
                        </td>
                        
                        
                        <td><a href="<?php echo site_url('admin/Webcontent/delete_content/'.$row['id']); ?>" onclick="return confirm('Are you sure?')"><i class="fa fa-trash-o" aria-hidden="true"></i> </a>&nbsp;||&nbsp;<a href="<?php echo site_url('admin/Webcontent/update_content/'.$row['id']); ?>" onclick="return confirm('Are you sure?')"> <i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
                    </tr>
                    <?php }?>
                    
                    <tr>
                        <td colspan="11">
                                <?php echo $this->pagination->create_links(); ?>
                        </td>
            		</tr>
                </tbody>
              </table>