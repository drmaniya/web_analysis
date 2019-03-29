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
        <small>Add WebSite Content Preview</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">General Elements</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        
        <div class="col-md-6" >
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Add New WebSite Content</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="post" enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Heading</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="heading"  id="inputEmail3" placeholder="Website Content Heading" value="<?php echo @$heading; ?>" >
                    <?php //if(form_error('heading')){echo '<div class="callout callout-danger">'.form_error('heading').'</div>'; }?>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">MID_Heading</label>

                  <div class="col-sm-10">
                    <input type="text"  class="form-control" name="mid_heading" id="inputPassword3" placeholder=" Website MID_Heading" value="<?php echo @$mid_heading; ?>">
                    <?php //if(!form_error('name') && form_error('email')){echo '<div class="callout callout-danger">'.form_error('email').'</div>';}?>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Sub Heading</label>

                  <div class="col-sm-10">
                    <textarea  name="sub_heading"  placeholder=" Website Sub Heading"  class="form-control"><?php echo @$sub_heading; ?></textarea>
                  <?php //if(!form_error('name') && !form_error('email') && form_error('password')){echo '<div class="callout callout-danger">'.form_error('password').'</div>'; }?>
                  </div>
                </div>
                
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Website Content </label>

                  <div class="col-sm-10">
                    <textarea  name="content"  placeholder=" Website Content "  class="form-control" ><?php echo @$content; ?></textarea>
                    
                  </div>
                </div>
                
                
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Page Name</label>
					
                  <div class="col-sm-10">
                    <input type="text" name="page_name" placeholder=" Page Name " class="form-control" value="<?php echo @$page_name; ?>" >
                  </div>
                </div>
                
                
              
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Image</label>

                  <div class="col-sm-10">
                    <input type="file" class="form-control" name="image" id="inputPassword3" >
                 
                  
				  <?php if(@$image) {?>
                    </br><img src="<?php echo base_url('assets/webvisitor/img/'.@$image)?>" height="80px" width="80px" /> &nbsp;&nbsp;<label><?php echo @$image; ?></label>
                    <?php } ?>	
					
                  </div>
               </div>
                
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <input type="reset" class="btn btn-default" value="Cancel">
                <input type="submit" class="btn btn-info pull-right" value="Add Web Content" name="submit" >
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