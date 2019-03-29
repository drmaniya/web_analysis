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
      <h1>
        Admin
        <small>Preview State</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo site_url('admin/dashboard'); ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a href="#">Manage State</a></li>
        <li class="active">Add State</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        
        <div class="col-md-6">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Add State</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="post" enctype="multipart/form-data">
            <input type="hidden" name="edit_id" value="<?php echo $this->uri->segment(4);?>">
              <div class="box-body">
              
               <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Country</label>

                  <div class="col-sm-10">
                    <select  class="form-control" name="country" id="inputPassword3">
                    <option value="">Select Country</option>
                    
                    <?php foreach($selcon as $row){?>
                    <option value="<?php echo $row['id']; ?>" <?php if($row['id'] == @$state_upd['country_id']){echo "selected"; }?>><?php  echo $row['country_name']; }?></option>
                  </select>
                  <?php 
				  		if(form_error('country')){
							
						echo '<div class="callout callout-danger">'.form_error('country').'</div>';	
							}
					
				  ?>
                  </div>
                  
                </div>
              
              
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">State</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" value="<?php echo @$state_upd['state_name']; ?>" name="state" id="inputEmail3" placeholder="ENTER STATE...!">
                    <?php 
						if(!form_error('country') && form_error('state'))
						{
							echo '<div class="callout callout-danger">'.form_error('state').'</div>';	
						}
						else if(@$state_upd['err_msg'] != '')
						{
							echo '<div class="callout callout-danger">'.@$state_upd['err_msg'].'</div>';	
						}
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