<table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th> Id</th>
                  <th> Name</th>
                  <th> Email</th>
                  <th> Mobile No.</th>
                  <th> Message</th>
                  <th> Action</th>
                </tr>
                </thead>
                <tbody>
               
                	<?php foreach(@$user_data as $row) {?>
                	<tr>	
                    	<td><?php echo @$row['contact_id']; ?></td>
                        <td><?php echo @$row['customer_name']; ?></td>
                        <td><a href="<?php echo site_url('admin/contact/contact_replay/'.@$row['contact_id']); ?>"><?php echo @$row['customer_email']; ?></a></td>
                        <td><?php echo @$row['customer_mobile']; ?></td>
                         <td><textarea disabled><?php echo @$row['customer_message']; ?></textarea></td>
                        <td><a href="<?php echo site_url('admin/Contact/delete/'.@$row['contact_id']); ?>" onclick="return confirm('Are you sure?')"><i class="fa fa-trash-o" aria-hidden="true"></i> </a>&nbsp;||&nbsp;<a href="<?php echo site_url('admin/Contact/update/'.$row['contact_id']); ?>"> <i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
                    </tr>
                    <?php }?>
                     
                    <tr>
                        <td colspan="11">
                                <?php echo $this->pagination->create_links(); ?>
                        </td>
            		</tr>
                </tbody>
              </table>