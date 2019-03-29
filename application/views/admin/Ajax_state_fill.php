<select id="state">
     <option value="">Select State</option>
                    <?php foreach(@$sel_state as $row){ ?>
 	 <option value="<?php echo @$row['id']; ?>"><?php echo @$row['state_name']; ?></option>
                    <?php } ?>
 </select>