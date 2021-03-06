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
    	Message
        <small>Preview</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo site_url('admin/dashboard'); ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a href="#">Manage Message</a></li>
        <li class="active">Add Message</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        
        <div class="col-md-6">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Add New Message</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="post" enctype="multipart/form-data">
              <div class="box-body">
                
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">User</label>

                  <div class="col-sm-10">
                    <select  class="form-control" name="user_email" id="inputPassword3">
                    <option value="">Select User Email</option>
                    <?php foreach (@$user_detail as $row) {?>
                    <option value="<?php echo @$row['user_id']; ?>" <?php if(@$user_email == @$row['user_id']){echo "selected"; }?> > <?php echo $row['user_email']; }?></option>
                  </select>
              	<?php 
					if(form_error('user_email'))
					{
						echo '<div class="callout callout-danger">'.form_error('user_email').'</div>';	
					}
				?>
              
              </div>
              </div>
                
                
                 <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Message</label>

                  <div class="col-sm-10">
                    <textarea class="form-control" name="message" id="inputPassword3" placeholder="Your Message"><?php echo @$message; ?></textarea>
                   <?php if(!form_error('user_email') && form_error('message')){echo '<div class="callout callout-danger">'.form_error('message').'</div>'; }?>
                  </div>
                </div>
                
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <input type="reset" class="btn btn-default" value="Cancel">
                <input type="submit" class="btn btn-info pull-right" value="Add" name="add
                _message" >
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