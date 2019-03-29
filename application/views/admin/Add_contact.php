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
    	Contact
        <small>Preview</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo site_url('admin/dashboard'); ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a href="#">Manage Contact</a></li>
        <li class="active">Add Contact</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        
        <div class="col-md-6">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Add New Contact</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="post" enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Name</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="name" value="<?php echo @$name; ?>" id="inputEmail3" placeholder=" Name">
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
                  <label for="inputPassword3" class="col-sm-2 control-label">Mobile No.</label>

                  <div class="col-sm-10">
                    <input type="text" value="<?php echo @$mobile; ?>" class="form-control" name="mobile" id="inputPassword3" placeholder="Mobile No.">
                   <?php if(!form_error('email') && !form_error('name') && form_error('mobile')){echo '<div class="callout callout-danger">'.form_error('mobile').'</div>'; }?>
                  </div>
                </div>
                
                 <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Message</label>

                  <div class="col-sm-10">
                    <textarea class="form-control" name="message" id="inputPassword3" placeholder="Your Message"><?php echo @$message; ?></textarea>
                   <?php if(!form_error('email') && !form_error('name') && !form_error('mobile') && form_error('message')){echo '<div class="callout callout-danger">'.form_error('message').'</div>'; }?>
                  </div>
                </div>
                
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <input type="reset" class="btn btn-default" value="Cancel">
                <input type="submit" class="btn btn-info pull-right" value="Add" name="add
                _contact" >
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