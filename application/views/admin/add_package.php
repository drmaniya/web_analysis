<?php $this->load->view('admin/Header'); ?>
  <!-- Content Wrapper. Contains page content -->
  <style>
  
.content-wrapper{margin-top:45px;}
@media(max-width:767px)
{
	.content-wrapper{margin-top:100px;}

}
  </style>
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
   
      <h1>
      
        Admin
        <small>Add Package Preview</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo site_url('admin/dashboard'); ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a href="#">Manage Package</a></li>
        <li class="active">Add Package</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        
        <div class="col-md-6" >
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Add New Package</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="post" enctype="multipart/form-data">
              <div class="box-body">
              <div class="form-group">
                <?php if(validation_errors()){?>
                <div class="col-md-12 col-sm-12 col-xs-12 callout callout-danger">
                      <?php 
                        if(form_error('duration'))
                          echo form_error('duration');
                        else if(form_error('cost'))
                          echo form_error('cost');
                        else if(form_error('status'))
                          echo form_error('status');
                      ?>
                </div>
                <?php }?>
              </div>

                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-4 control-label">Package Duration</label>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          
                          <select name="duration" class="form-control col-md-7 col-xs-12">
                            <option value="">Select Duration</option>
                            <option value="weekly" <?php if (@$data['pac_duration']=='weekly'){ echo "selected"; }?>>Weekly</option>
                            <option value="monthly"  <?php if (@$data['pac_duration']=='monthly'){ echo "selected"; }?>>Monthly</option>
                            <option value="quarterly" <?php if (@$data['pac_duration']=='quarterly'){ echo "selected"; }?>>Quarterly</option>
                            <option value="yearly" <?php if (@$data['pac_duration']=='yearly'){ echo "selected"; }?>>yearly</option>
                          </select>
                              
                        </div>
                      </div>
                      <div class="form-group">

                        <label for="inputPassword3" class="col-sm-4 control-label">Package Cost</label>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="cost" class="form-control col-md-7 col-xs-12" value="<?php echo @$data['pac_cost']?>" placeholder="Enter a Cost">   
                        </div>
                      </div>
                      <div class="form-group">
                      <label for="inputPassword3" class="col-sm-4 control-label">Package Status</label>

                        <div class="col-md-6 col-sm-6 col-xs-12">
                          
                          <select name="status" class="form-control col-md-7 col-xs-12">
                            <option value="">Select Status</option>
                            <option value="activate" <?php if (@$data['pac_status'] == 1){ echo "selected"; }?>>Activate</option>
                            <option value="deactivate" <?php if (@$data['pac_status'] == 0){ echo "selected"; }?>>De-activate</option>
                          </select>   
                        </div>
                      </div>

              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <input type="reset" class="btn btn-default" value="Cancel">
                <input type="submit" class="btn btn-info pull-right" value="Add Package" name="submit" >
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