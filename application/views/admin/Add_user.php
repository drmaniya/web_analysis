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
        <small>Add User Preview</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo site_url('admin/dashboard'); ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a href="#">Manage User</a></li>
        <li class="active">Add User</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        
        <div class="col-md-6" >
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Add New User</h3>
              <h6>All Filed Are Required</h6>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="post" enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Name</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="name" value="<?php echo @$name; ?>" id="inputEmail3" placeholder="User Name">
                    <?php if(form_error('name')){echo '<div class="callout callout-danger">'.form_error('name').'</div>'; }?>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Email</label>

                  <div class="col-sm-10">
                    <input type="email"  class="form-control" name="email" id="inputPassword3" placeholder=" User Email" value="<?php echo @$email; ?>">
                    <?php if(!form_error('name') && form_error('email')){echo '<div class="callout callout-danger">'.form_error('email').'</div>';}?>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Password</label>

                  <div class="col-sm-10">
                    <input type="password"  class="form-control" name="password" id="inputPassword3" placeholder="User Password" value="<?php echo @$password ?>">
                  <?php if(!form_error('name') && !form_error('email') && form_error('password')){echo '<div class="callout callout-danger">'.form_error('password').'</div>'; }?>
                  </div>
                </div>
                
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Mobile</label>

                  <div class="col-sm-10">
                    <input type="text"  class="form-control" name="mobile" id="inputPassword3" placeholder="User Mobile No." value="<?php echo @$mobile ?>">
                    <?php if(!form_error('password') && form_error('mobile'))
					{
						echo '<div class="callout callout-danger">'.form_error('mobile').'</div>';
					}?>
                  </div>
                </div>
                
                
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Gender</label>
					
                  <div class="col-sm-10">
                     <input type="radio" name="gender" value="male" <?php if(@$gender == 'male'){ echo "checked"; } ?> >&nbsp;&nbsp;Male&nbsp;&nbsp;
                     <input type="radio" name="gender" value="female" <?php if(@$gender == 'female'){ echo "checked"; } ?>>&nbsp;&nbsp;Female
                     <?php if(!form_error('mobile') && form_error('gender'))
					 {
							echo '<div class="callout callout-danger">'.form_error('gender').'</div>'; 
					  }
					 ?>
                  </div>
                </div>
                
                
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Country</label>

                  <div class="col-sm-10">
                    <select class="form-control" name="country" id="inputPassword3">
                       <option value="">Select Country</option>
                      
                       <?php foreach(@$con_data as $row){?>
                       <option value="<?php echo $row['id']; ?>" <?php if($row['id'] == @$country){ echo "selected"; }?> ><?php echo $row['country_name']; }?></option>
                    </select>
                   
                    <?php if(!form_error('gender') && form_error('country'))
					{
						echo '<div class="callout callout-danger">'.form_error('country').'</div>';	
					}
					?>
                  </div>
                </div>
                
            
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Status</label>

                  <div class="col-sm-10">
                    <select  class="form-control" name="status" id="inputPassword3">
                       <option value="">Select Status</option>
                      
                        <option value="1" <?php if(@$status == '1') { echo "selected"; }?>>Active</option>
                         <option value="0" <?php if(@$status == '0') { echo "selected"; }?>>UnActive</option>
                       
                    </select>
                    <?php if(!form_error('country') && form_error('status') )
					{
						echo '<div class="callout callout-danger">'.form_error('status').'</div>';	
					}?>
                  </div>
                </div>
                
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Image</label>

                  <div class="col-sm-10">
                    <input type="file" class="form-control" name="image" id="inputPassword3" >
                  <?php if(@$user_upd['user_image']){?></br><img src="<?php echo base_url('assets/user/image/'.@$user_upd['user_image'])?>" height="80px" width="80px" /> &nbsp;&nbsp;<label><?php echo @$user_upd['user_image']; ?></label><?php }?>
                  
				  <?php if(@$image) {?>
                    </br><img src="<?php echo base_url('assets/user/image/'.@$image)?>" height="80px" width="80px" /> &nbsp;&nbsp;<label><?php echo @$image; ?></label>
                    <?php } ?>	
					<?php 
						if(!form_error('status') && isset($file_err))
						{
							echo '<div class="callout callout-danger">'.$file_err.'</div>';
						}?>
                  </div>
               </div>
                
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <input type="reset" class="btn btn-default" value="Cancel">
                <input type="submit" class="btn btn-info pull-right" value="Add User" name="submit" >
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