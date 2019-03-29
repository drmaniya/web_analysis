<?php $this->load->view('admin/Header'); ?>
<style>

.content-wrapper{margin-top:45px;}
@media(max-width:767px)
{
	 .content-wrapper{margin-top:100px;}
}
</style>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  
    <!-- Content Header (Page header) -->
    <section class="content-header">
    
      <h1>
        Admin
        <small>Preview</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo site_url('admin/dashboard'); ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a href="#">Manage Admin</a></li>
        <li class="active">Add Admin</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        
        <div class="col-md-6">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Add New Admin</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="post" enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Name</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="name" value="<?php echo @$name; ?>" id="inputEmail3" placeholder="Admin Name">
                      <?php if(form_error('name')){echo '<div class="callout callout-danger">'.form_error('name').'</div>';}?>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Email</label>

                  <div class="col-sm-10">
                    <input type="email" value="<?php echo @$email; ?>" class="form-control" name="email" id="inputPassword3" placeholder="Email">
             		<?php if(form_error('email') && !form_error('name')){echo '<div class="callout callout-danger">'.form_error('email').'</div>'; }?>
                  </div>
                		
                </div>
                
                  
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Password</label>

                  <div class="col-sm-10">
                    <input type="password" value="<?php echo @$password; ?>" class="form-control" name="password" id="inputPassword3" placeholder="Password">
                   <?php if(!form_error('email') && !form_error('name') && form_error('password')){echo '<div class="callout callout-danger">'.form_error('password').'</div>'; }?>
                  </div>
                </div>
                
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Admin Category</label>

                  <div class="col-sm-10">
                    <select class="form-control" name="level" id="inputPassword3">
                    	<option value="">Select Admin Level </option>
                        <option value="1" <?php if(@$level == 1){echo "selected"; } ?> >Main Admin </option>
                        <option value="2" <?php if(@$level == 2){echo "selected"; } ?>>Sub Admin</option>
                    </select>
                    <?php if(!form_error('email') && !form_error('name') && !form_error('password') && form_error('level')){echo '<div class="callout callout-danger">'.form_error('level').'</div>'; }?>
                  </div>
                </div>
                
                
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Image</label>
				
                  <div class="col-sm-10">
                    <input type="file" class="form-control" name="image" id="inputPassword3" >
                    <label style="color:#F00">*Image Size Should Be Less Than ' 1 ' MB.</label>
                 	<?php if(@$image) {?>
                    </br><img src="<?php echo base_url('assets/admin/image/'.@$image)?>" height="80px" width="80px" /> &nbsp;&nbsp;<label><?php echo @$image; ?></label>
                    <?php } ?>
                    
                    <?php if(!form_error('email') && !form_error('name') && !form_error('password') && isset($file_err))
					{
						echo '<div class="callout callout-danger">'.$file_err.'</div>'; 
					}
					elseif(!form_error('level') && @$file_error)
					{
						echo '<div class="callout callout-danger">'.@$file_error.'</div>';	
					}
					?>
                    
                  </div>
                </div>
                
              </div>
              <!-- /.box-body -->
               <?php if(@$chk_level == 'true') { ?>
               
              <div class="box-footer">
                <input type="reset" class="btn btn-default" value="Cancel">
                <input type="submit" class="btn btn-info pull-right" value="Sign in" name="submit" >
      	     </div>
            <?php }?>  
              <?php if(@$already){echo '<div class="callout callout-danger">'.@$already.'</div>';} ?>
              <!-- /.box-footer -->
            </form>
            
            <?php if(@$chk_level != 'true') { ?>
               <div class="box-footer">
                <button  class="btn btn-danger pull-right">You Are Not Eligible For Add New Admin		</button>             
                 </div>
          	<?php }?>

          </div>
          <!-- /.box -->
          
        </div>
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 
 <?php $this->load->view('admin/Footer'); ?>