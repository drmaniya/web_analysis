<table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Payment Id</th>
                  <th>User Id</th>
                  <th>Transection Id</th>
                  <th>Amount</th>
                  <th>Package ID</th>
                  <th>Payment Status</th>
                  <th>Package Info</th>
                  <th>Payment Time</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
               
                	<?php foreach(@$pay_data as $row) {?>
                	<tr>	
                    	<td><?php echo @$row['payment_id']; ?></td>
                        <td><?php echo @$row['user_id']; ?></td>
                        <td><?php echo @$row['transection_id']; ?></td>
                        <td><?php echo @$row['amount']; ?></td>
                         <td><?php echo @$row['package_id']; ?></td>
                         <td><?php echo @$row['payment_status']; ?></td>
                         <td><?php echo @$row['package_info']; ?></td>
                         <td><?php echo @$row['payment_time']; ?></td>
                        <td><a href="<?php echo site_url('admin/Payment_history/delete/'.@$row['payment_id']); ?>" onclick="return confirm('Are you sure?')"><i class="fa fa-trash-o" aria-hidden="true"></i> </a>&nbsp;||&nbsp;<a href="<?php echo site_url('admin/Payment_history/update/'.$row['payment_id']); ?>"> <i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
                    </tr>
                    <?php }?>
                     
                    <tr>
                        <td colspan="11">
                                <?php echo $this->pagination->create_links(); ?>
                        </td>
            		</tr>
                </tbody>
              </table>