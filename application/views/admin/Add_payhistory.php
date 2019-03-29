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
    	Payment History
        <small>Preview</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo site_url('admin/dashboard'); ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a href="#">Manage Payment History</a></li>
        <li class="active">Add Payment History</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        
        <div class="col-md-6">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Add New Payment</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="post" enctype="multipart/form-data">
              <div class="box-body">
              
              <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">User</label>

                  <div class="col-sm-10">
                    <select  class="form-control" name="user_name" id="inputPassword3">
                    <option value="">Select User Name</option>
                    <?php foreach (@$user_detail as $row) {?>
                    <option value="<?php echo @$row['user_id']; ?>" <?php if(@$user_name == @$row['user_id']){echo "selected"; }?> > <?php echo $row['user_name']; }?></option>
                  </select>
              	<?php 
					if(form_error('user_name'))
					{
						echo '<div class="callout callout-danger">'.form_error('user_name').'</div>';	
					}
				?>
              
              </div>
              </div>
              
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Transection ID</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="tras_id" value="<?php echo @$tras_id; ?>" id="inputEmail3" placeholder=" Transection ID">
                      <?php if(!form_error('user_name') && form_error('tras_id')){echo '<div class="callout callout-danger">'.form_error('tras_id').'</div>';}?>
                  </div>
                </div>
                
                
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Amount</label>

                  <div class="col-sm-10">
                    <select  class="form-control" name="amount" id="inputPassword3">
                    <option value="">Select Package Amount</option>
                    <?php foreach (@$pack_detail as $row) {?>
                    <option value="<?php echo @$row['pac_cost']; ?>" <?php if(@$amount == @$row['pac_cost']){echo "selected"; }?> > <?php echo @$row['pac_cost']; ?> &nbsp;:-&nbsp;&nbsp;<?php echo @$row['pac_duration']; }?> </option>
                  </select>
              	 
					 <?php if(!form_error('user_name') && !form_error('tras_id') && form_error('amount')){echo '<div class="callout callout-danger">'.form_error('amount').'</div>';}?>
			
              
              </div>
              </div>
              
              <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Package Id</label>

                  <div class="col-sm-10">
                    <select  class="form-control" name="pack_id" id="inputPassword3">
                    <option value="">Select Package Id</option>
                    <?php foreach (@$pack_detail as $row) {?>
                    <option value="<?php echo @$row['pac_id']; ?>" <?php if(@$pack_id == @$row['pac_id']){echo "selected"; }?> > <?php echo $row['pac_id']; ?> &nbsp;:-&nbsp;&nbsp;<?php echo @$row['pac_duration']; }?></option>
                  </select>
               <?php if(!form_error('user_name') && !form_error('tras_id') && !form_error('amount') && form_error('pack_id')){echo '<div class="callout callout-danger">'.form_error('pack_id').'</div>';}?>
			
              
              </div>
              
            </div>
                
                
               <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label"> Status</label>

                  <div class="col-sm-10">
                    <select  class="form-control" name="status" id="inputPassword3">
                    <option value="">Select Payment Status</option>
                   
                    <option value="success" <?php if(@$status == 'success'){echo "selected"; }?> >success</option>
                  	<option value="failure" <?php if(@$status == 'failure'){echo "selected"; }?>>failure</option>
                  </select>
              	 <?php if(!form_error('user_name') && !form_error('tras_id') && !form_error('amount') && !form_error('pack_id') && form_error('status')){echo '<div class="callout callout-danger">'.form_error('status').'</div>';}?>
			
              
              </div>
              
            </div> 
                
               <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label"> Package Info</label>

                  <div class="col-sm-10">
                    <select  class="form-control" name="pack_info" id="inputPassword3">
                    <option value="">Select Package Information</option>
                    <?php foreach (@$pack_detail as $row) {?>
                    <option value="<?php echo @$row['pac_duration']; ?>" <?php if(@$pack_info == @$row['pac_duration']){echo "selected"; }?> > <?php echo $row['pac_duration']; }?></option>
                  </select>
              	 <?php if(!form_error('user_name') && !form_error('tras_id') && !form_error('amount') && !form_error('pack_id') && !form_error('status') && form_error('pack_info')){echo '<div class="callout callout-danger">'.form_error('pack_info').'</div>';}?>
              
              </div>
              
            </div>
                
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Payment Time</label>

                  <div class="col-sm-10">
                    <input type="text" value="<?php echo @$pay_time; ?>" class="form-control" name="pay_time" id="inputPassword3" placeholder=" Set Payment Time (2018-03-08 17:09:32)">
             		<?php //if(form_error('email') && !form_error('name')){echo '<div class="callout callout-danger">'.form_error('email').'</div>'; }?>
                  </div>
                		
                </div>
              
                
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <input type="reset" class="btn btn-default" value="Cancel">
                <input type="submit" class="btn btn-info pull-right" value="Add Payment" name="add_payment" >
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