
<?php 

		$this->load->view('admin/Header');
?>


<!--<script>
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
							url:"<?php echo site_url('admin/Feedback/ajax_change_status'); ?>",
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
			   
			   
			   $('#search_feedback').keyup(function(){
					 searchtxt = $('#search_feedback').val();
					
								$.ajax({
												type:'POST',
												url:"<?php echo site_url('admin/Feedback/ajax_search_feedback'); ?>",
												data:
												{
														'searchtxt':searchtxt,
															
												},
												success:function(data)
												{
													//alert("record inserted");
													//$('.prints').html(data);
													$('.search2').html(data);
												}
										});

					});
		   
        });
</script>-->


<!--***************** Switch Button Code Start *********************-->
<style>
	.switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;
}

.content-wrapper{margin-top:45px;}
/* Hide default HTML checkbox */
.switch input {display:none;}

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
        Admin Login & Logout History List
        <small>Delete History</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo site_url('admin/dashboard'); ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a href="#">Admin Histroy</a></li>
        <li class="active">View Admin History</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Avilable History's</h3>
              
            </div>
            <!-- /.box-header -->
           <!-- Search :-  <input type="search" name="name" id="search_adminlog" placeholder=" Enter A log time..."/>-->
            <div class="box-body search2">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th> Log Id</th>
                  <th> Admin Id</th>
                  <th> Admin IP Address</th>
                  <th> Login Time</th>
                  <th> Logout Time</th>
                  <th> Action</th>
                </tr>
                </thead>
                <tbody>
               
                	<?php foreach(@$adminlog_data as $row) {?>
                	<tr>	
                    	<td><?php echo @$row['log_id']; ?></td>
                        <td><?php echo @$row['admin_id']; ?></td>
                        <td><?php echo @$row['user_ip']; ?></td>
                        <td><?php echo @$row['login_time']; ?></td>
                        <td><?php echo @$row['logout_time']; ?></td>
                        
                        <td><a href="<?php echo site_url('admin/History/delete_adminhis/'.@$row['log_id']); ?>"><i class="fa fa-trash-o" aria-hidden="true"></i> </a></td>
                    </tr>
                    <?php }?>
                     <tr>
                        <td colspan="6">
                                <?php echo $this->pagination->create_links(); ?>
                        </td>
            		</tr>
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