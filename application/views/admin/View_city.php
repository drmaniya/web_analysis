<?php
$this->load->view('admin/Header');
?>

	<script type="text/javascript">
	
			$(document).ready(function(e) {
          		$('#state').hide();
				 $('#view_all').hide(); 
				function select_all()
				{
					//alert("asdas");
					window.location = '<?php echo site_url('admin/City/view_city');?>';	
				}
				
				$('#country').change(function(){
					$('#state').show();
						
						var ajax_country_id=$('#country').val();
						
						$.ajax({
							type:'post',
							url:'<?php echo site_url('admin/City/ajax_get_state');?>',
							data:{
								'ajax_country_id':ajax_country_id
							},
							success:function(data){
								$('#state').html(data);
							}
						});
					});
				    
				$('#state').change(function(){
					$('#view_all').show();
					
					var ajax_state_id=$('#state').val();
					
					$.ajax({
							type:'post',
							url:'<?php echo site_url('admin/City/ajax_filter_city');?>',//parameter for use a single function for both level filter
							data:{
								'state_id':ajax_state_id
							},
							success:function(data){
								$('.table').html(data);
							}
						});
					
				});
					
            });
			
			
			
	</script>
    <style>
	
.content-wrapper{margin-top:45px;}
@media(max-width:767px)
{
	.content-wrapper{margin-top:100px;}
	
.box{overfloaw-x:scroll;overflow-y:hidden;}

}
	</style>
	<div class="content-wrapper">
    <!-- Content Header (Page header) -->
   
	
    <section class="content-header">
      <h1>
        City List
        <small>Delete || Update City</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo site_url('admin/dashboard'); ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a href="#">Manage City</a></li>
        <li class="active">View City</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Avilable Cities</h3>
            </div>
            
            	
            <!-- /.box-header -->
            <div class="box-body">
            <select id="country">
            		<option value="">Select Country</option>
                    <?php foreach(@$sel_country as $row){ ?>
                    <option value="<?php echo @$row['id']; ?>"><?php echo @$row['country_name']; ?></option>
                    <?php } ?>
            </select>
            <select id="state">
            		<option value="">Select State</option>
                    <?php foreach(@$sel_state as $row){ ?>
                    <option value="<?php echo @$row['id']; ?>"><?php echo @$row['state_name']; ?></option>
                    <?php } ?>
            </select>
           	<input type="button" id="view_all" value="View All Cities" onClick="location.reload();">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>City Id</th>
                  <th>Country Name</th>
                  <th>State Name</th>
                  <th>City Name</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
               
                	<?php foreach(@$sel_city as $row) {?>
                	<tr>	
                    	<td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['country_name']; ?></td>
                        <td><?php echo $row['state_name']; ?></td>
                        <td><?php echo $row['city_name']; ?></td>
                        <td><a href="<?php echo site_url('admin/City/delete_city/'.$row['id']); ?>" onclick="return confirm('Are you sure?')" ><i class="fa fa-trash-o" aria-hidden="true"></i> </a>&nbsp;||&nbsp;<a href="<?php echo site_url('admin/City/update_city/'.$row['id']); ?>"> <i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
                    </tr>
                    <?php }?>
                </tbody>
              </table>
            </div>
            

      
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
      </div>
    </section>
    <!-- /.content -->
  </div>
  	
<?php
$this->load->view('admin/Footer');
?>