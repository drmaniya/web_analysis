<?php
$this->load->view('admin/Header');
?>
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
     <?php //print_r(@$err_msg); ?>
      <h1>
        Admin
        <small>Preview Country</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo site_url('admin/dashboard'); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Manage Country</a></li>
        <li class="active">Add Country</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        
        <div class="col-md-6">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Add Country</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="post" enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">COUNTRY</label>

                  <div class="col-sm-10">
                    <input type="text" value="<?php echo @$conupd['country_name']; ?>" class="form-control" name="country" id="inputEmail3" placeholder="ENTER COUNTRY...!" >
                    <?php 
					
					if(form_error('country'))
					{echo '<div class="callout callout-danger">'.form_error('country').'</div>';}
					elseif(@$country_name != '')
					{
						echo '<div class="callout callout-danger">'.@$conupd['country_msg'].'</div>';
					}
					else if(@$conupd['country_msg'] != '')
					{echo '<div class="callout callout-danger">'.@$conupd['country_msg'].'</div>'; }
					
					
					 ?>
                  </div>
                </div>
               
                
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <input type="reset" class="btn btn-default" value="Cancel">
                <input type="submit" class="btn btn-info pull-right" value="Add" name="submit" >
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
<?php
$this->load->view('admin/Footer');
?>