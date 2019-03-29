<table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Id</th>
                  <th>Country Name</th>
                  <th>State Name</th>
                  <th>City Name</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
               
                	<?php foreach(@$sel_city as $row) {?>
                	<tr>	
                    	<td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['country_name']; ?></td>
                        <td><?php echo $row['state_name']; ?></td>
                        <td><?php echo $row['city_name']; ?></td>
                        <td><a href="<?php echo site_url('admin/City/delete_city/'.$row['id']); ?>" onclick="return confirm('Are you sure?')" ><i class="fa fa-trash-o" aria-hidden="true"></i> </a>&nbsp;||&nbsp;<a href="<?php echo site_url('admin/City/update_city/'.$row['id']); ?>"> <i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
                    </tr>
                    <?php }?>
                </tbody>
              </table>