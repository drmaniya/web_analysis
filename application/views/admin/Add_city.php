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
<script src="<?php echo base_url('assets/admin/js/jquery-3.2.1.min.js'); ?>">
	</script>
    
    <script>
			$(document).ready(function(e) {
				//alert("hello");
                	$('.country').change(function()
					{
							var id=$('.country').val();
							
							$.ajax(
							{
								//alert("inajex");
								type:'POST',
								url:"<?php echo site_url('admin/City/ajax_country'); ?>",
								data:
								{
									'country_id':id	
								},
								success:function(data)
								{
									$('#mydiv').html(data);
										
								}
							});
								
					});
			});		
    </script>
    
 <div class="content-wrapper">
 	
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Admin
        <small>Preview City</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo site_url('admin/dashboard'); ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a href="#">Manage City</a></li>
        <li class="active">Add City</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        
        <div class="col-md-6">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Add City</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="post" enctype="multipart/form-data">
              <div class="box-body">
              
               <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Country</label>

                  <div class="col-sm-10">
                    <select  class="form-control country" name="country" id="inputPassword3">
                    <option value="">Select Country</option>
                    <?php foreach ($vcountry as $row) {?>
                    <option value="<?php echo $row['id']; ?>"
                    <?php if(@$cid==$row['id']){?> selected <?php } ?>><?php echo $row['country_name']; }?></option>
                  </select>
              	<?php 
					if(form_error('country'))
					{
						echo '<div class="callout callout-danger">'.form_error('country').'</div>';	
					}
				?>
              
              </div>
              
                </div>
              
               <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">State</label>

                  <div class="col-sm-10"> <span id="mydiv">
                    <select  class="form-control state_data" name="state" id="inputPassword3">
                    <option value="">Select State</option>
                    
                    <?php foreach ($vstate as $row) {?>
                    <option value="<?php echo $row['id']; ?>" <?php if( @$sid == @$row['id']){echo "selected"; }?>><?php echo $row['state_name']; }?></option>
                  </select>
                  <?php
				  	if(!form_error('country') && form_error('state'))
					{
						echo '<div class="callout callout-danger">'.form_error('state').'</div>';	
					}
				  ?>
                  </span>
                  </div>
                 
                </div>
              
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">City</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control"  name="city" id="inputEmail3" placeholder="ENTER CITY...!" value="<?php echo @$upd_city['city_name']; ?>" />
                  
                  <?php 
				  		if(!form_error('state') && form_error('city'))
						{
							echo '<div class="callout callout-danger">'.form_error('city').'</div>';	
						}
				  ?>
                  </div>
                </div>
<!--                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">HI</label>

                  <div class="col-sm-10">
                    <input type="email"  class="form-control" name="email" id="inputPassword3" placeholder="Email">
                  </div>
                </div>
    -->           
                
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