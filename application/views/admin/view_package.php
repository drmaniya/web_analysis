
<?php 

		$this->load->view('admin/Header');
?>

<script>
		var get=0;
		function getval(data)
		{
			get = data;
		
		}
		
		$(document).ready(function(e) {
         
		   $('.status_btn').click(function(){
			   
			 
				var status_val = $('.status_btn').val();
				var schange = get;
				//alert(schange);
					$.ajax({
						
							type:'POST',
							url:"<?php echo site_url('admin/Package/ajax_change_status'); ?>",
							data:
							{
								'schange1':schange,	
								'value':status_val
							},
							success:function(data)
							{
								
							}
						});
			   
			   });
		   
        });
</script>

<!--***************** Switch Button Code Start *********************-->
<style>
	.switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;
}

/* Hide default HTML checkbox */
.switch input {display:none;}

.content-wrapper{margin-top:45px;}
/* The slider */
.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #2196F3;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}
@media(max-width:767px)
{
	.content-wrapper{margin-top:100px;}
	
.box{overfloaw-x:scroll;overflow-y:hidden;}

}
</style>


<!--***************** Switch Button Code End *********************-->

		<div class="content-wrapper">
    <!-- Content Header (Page header) -->
 
    <section class="content-header">
      <h1>
        Package List
        <small>Delete || Update Package</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo site_url('admin/dashboard'); ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a href="#">Manage Package</a></li>
        <li class="active">View Package</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Package View</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th> Id</th>
                  <th> Duration</th>
                  <th> Cost</th>
                  <th> Status</th>
                  <th> Action</th>
                </tr>
                </thead>
                <tbody>
               
                <?php foreach($data as $row){?>
                          
                	<tr>	
                    	<td><?php echo @$row['pac_id']; ?></td>
                        <td><?php echo @$row['pac_duration']; ?></td>
                        <td><?php echo @$row['pac_cost']; ?></td>                        
                        <td>
                        <span id="myspan">
                        <form method="post">
                        <label class="switch">
                          <input type="checkbox" name="status_value" class="status_btn" value="<?php if(@$row['pac_status'] == 1){ echo 0;}else{echo 1;}?>" <?php if(@$row['pac_status'] == 1){echo "checked"; } ?> onClick="getval(<?php echo @$row['pac_id']; ?>);">
                          <span class="slider round"></span>
                        </label>
                        </form>
                        </span>
                        </td>

                        
                        <td><a href="<?php echo site_url('admin/Package/delete_package/'.$row['pac_id']); ?>" onclick="return confirm('Are you sure?')"><i class="fa fa-trash-o" aria-hidden="true"></i> </a>&nbsp;||&nbsp;<a href="<?php echo site_url('admin/Package/update_package/'.$row['pac_id']); ?>"> <i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
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