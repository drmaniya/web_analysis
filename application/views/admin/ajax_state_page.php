 
  <select  class="form-control" name="state" id="inputPassword3">
                    <option value="">Select State</option>
                    
                    <?php foreach ($vstate as $row) {?>
                    <option value="<?php echo $row['id']; ?>"><?php echo $row['state_name']; }?>				</option>
                  </select>
                  