<?php $this->load->view('admin/Header'); ?>
<style>

.content-wrapper{margin-top:45px;}
@media(max-width:767px)
{
	 .content-wrapper{margin-top:100px;}
}

#eye_pass{
			position:absolute;
			top: 10px;
   		   right: 40px;
		}
</style>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  
    <!-- Content Header (Page header) -->
    <section class="content-header">
    
      <h1>
        Edit Password
        <small>Preview</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo site_url('admin/dashboard'); ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <!--<li><a href="#"></a></li>-->
        <li class="active">Edit Password</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        
        <div class="col-md-6">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Admin Change Your Password</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="post" enctype="multipart/form-data">
              <div class="box-body">
               
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Old Password</label>

                  <div class="col-sm-10">
                    <input type="password" value="<?php echo @$old_password; ?>" class="form-control opass" name="old_password" id="inputPassword3" placeholder="Old Password" >
                    <i class="fa fa-eye field-icon toggle-password eye_pass_old" id="eye_pass"></i>
                   <?php 
				   if(form_error('old_password'))
				   {echo '<div class="callout callout-danger">'.form_error('old_password').'</div>';
				   }
				   elseif(!form_error('old_password') && @$old_err)
				   {
						echo '<div class="callout callout-danger">'.@$old_err.'</div>';			   
					}
				   
				   ?>
                  </div>
                </div>
                
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">New Password</label>

                  <div class="col-sm-10">
                    <input type="password" value="<?php echo @$new_password; ?>" class="form-control npass" name="new_password" id="inputPassword3" placeholder="New Password">
                   <i class="fa fa-eye field-icon toggle-password eye_pass_new" id="eye_pass"></i>
				   <?php if(!form_error('old_password') && !@$old_err && form_error('new_password'))
				   {echo '<div class="callout callout-danger">'.form_error('new_password').'</div>';
				   }
				   ?>
                  </div>
                </div>
                  
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Confirm Password</label>

                  <div class="col-sm-10">
                    <input type="password" value="<?php echo @$conf_password; ?>" class="form-control cpass" name="conf_password" id="inputPassword3" placeholder="Repeat New Password">
                    <i class="fa fa-eye field-icon toggle-password eye_pass_conf" id="eye_pass"></i>
                   <?php if(!form_error('old_password') && !form_error('new_password') && form_error('conf_password'))
				   {echo '<div class="callout callout-danger">'.form_error('conf_password').'</div>';
				   }
				   elseif(!form_error('old_password') && !form_error('new_password') && !form_error('conf_password') && !@$old_err && @$conf_err)
				   {
						echo '<div class="callout callout-danger">'.@$conf_err.'</div>';				   
					}
				   ?>
                  </div>
                </div>
                
              
                
              </div>
              <!-- /.box-body -->
               
               
              <div class="box-footer">
                <input type="reset" class="btn btn-default" value="Cancel">
                <input type="submit" class="btn btn-info pull-right" value="Save" name="change_password" >
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
 
 <script>
 	$(document).ready(function(e) {
		
		// W.a.s for Change Input Type When Mouse Hover..
        
		$('.eye_pass_old').mouseover(function(){
			
			 $('.opass').attr('type', 'text');		
			$('.eye_pass_old').css('cursor','pointer');
		});
		
		$('.eye_pass_old').mouseleave(function(){
			
			 $('.opass').attr('type', 'password');		
		
		});
		
		$('.eye_pass_new').mouseover(function(){
			
			 $('.npass').attr('type', 'text');		
			$('.eye_pass_new').css('cursor','pointer');
		});
		
		$('.eye_pass_new').mouseleave(function(){
			
			 $('.npass').attr('type', 'password');		
		
		});
		
		$('.eye_pass_conf').mouseover(function(){
			
			 $('.cpass').attr('type', 'text');		
			$('.eye_pass_conf').css('cursor','pointer');
		});
		
		$('.eye_pass_conf').mouseleave(function(){
			
			 $('.cpass').attr('type', 'password');		
		
		});
		
		// End for Change Input Type When Mouse Hover..
		
    });
 </script>