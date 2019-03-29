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
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">General Elements</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        
        <div class="col-md-6">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Admin Profile</h3>
              <?php if(@$image) {?>
                    </br><img class="profile-user-img img-responsive img-circle" src="<?php echo base_url('assets/admin/image/'.@$image)?>" height="80px" width="80px" /> 
                    <?php } ?>
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
                
                  
               <!--  <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Password</label>

                  <div class="col-sm-10">
                    <input type="password" value="<?php echo @$password; ?>" class="form-control" name="password" id="inputPassword3" placeholder="Password">
                   <?php if(!form_error('email') && !form_error('name') && form_error('password')){echo '<div class="callout callout-danger">'.form_error('password').'</div>'; }?>
                  </div>
                </div> -->
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Image</label>

                  <div class="col-sm-10">
                    <input type="file" class="form-control" name="image" id="inputPassword3" >
                 	<label style="color:#F00">*Image Size Should Be Less Than ' 1 ' MB.</label>
					<?php if(@$image) {?>
                    </br><img src="<?php echo base_url('assets/admin/image/'.@$image)?>" height="80px" width="80px" /> &nbsp;&nbsp;<label><?php echo @$image; ?></label>
                    <?php } ?>
                    
                    <?php 
					if(!form_error('email') && !form_error('name') && isset($file_err))
					{
						echo '<div class="callout callout-danger">'.$file_err.'</div>'; 
					}
					elseif(!form_error('email') && @$file_error)
					{
						echo '<div class="callout callout-danger">'.@$file_error.'</div>';	
					}
					
					
					?>
                  </div>
                </div>
                
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <input type="submit" class="btn btn-default" value="Cancel" name="cancel">
                <input type="submit" class="btn btn-info pull-right" value="Save" name="submit" >
              </div>
              <!-- /.box-footer -->
            </form>
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