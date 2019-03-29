
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
         
		  $(document).on('change','.status_btn',function(){
			  
			 
				var status_val = $('.status_btn').val();
				var schange = get;
				//alert(schange);
					$.ajax({
						
							type:'POST',
							url:"<?php echo site_url('admin/Add_site/ajax_change_status'); ?>",
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
			   
			   $('#search_Website').keyup(function(){
					 searchtxt = $('#search_Website').val();
					
								$.ajax({
												type:'POST',
												url:"<?php echo site_url('admin/Add_site/ajax_search_website'); ?>",
												data:
												{
														'searchtxt':searchtxt,
															
												},
												success:function(data)
												{
													//alert("record inserted");
													//$('.prints').html(data);
												
													$('.search2').html(data);
													
													var elems = Array.prototype.slice.call(document.querySelectorAll('#aj_rebind .status_btn'));
													  elems.forEach(function(html) {
														var switchery = new Switchery(html);
													  });
							  						$('.status_btn').bind('change');
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
.content-wrapper{margin-top:45px;}
@media(max-width:767px)
{
	.content-wrapper{margin-top:100px;}

.box{overfloaw-x:scroll;overflow-y:hidden;}
}
@media(min-width:768px) and (max-width:991px)
{
.box{overfloaw-x:scroll;overflow-y:hidden;}
}
</style>


<!--***************** Switch Button Code End *********************-->

		<div class="content-wrapper">
    <!-- Content Header (Page header) -->
 
    <section class="content-header">
      <h1>
        Websites List
        <small>Delete Website</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo site_url('admin/dashboard'); ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a href="#">Manage Website</a></li>
        <li class="active">View Website</li>
      </ol>
    </section>

    <!-- Main content -->
    
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Avilable Website's</h3>
            </div>
            <!-- /.box-header -->
            Search :-  <input type="search" name="name" id="search_Website" placeholder=" Enter A Website Name..."/>
            <div class="box-body search2" id="aj_rebind">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th> Website Id</th>
                  <th> Website Name</th>
                  <th> Website URL </th>
                  <th> User Id</th>
                  <th> WebSite Status</th>
                  <th> Created_Time</th>
                  <th> Action</th>
                </tr>
                </thead>
                <tbody>
               
                	<?php foreach(@$web_data as $row) {?>
                	<tr>	
                    	<td><?php echo @$row['website_id']; ?></td>
                        <td><?php echo @$row['web_name']; ?></td>
                        <td><a href="<?php echo @$row['web_url'];?>" target="_blank"><?php echo @$row['web_url']; ?></a></td>
                        <td><?php echo @$row['user_id']; ?></td>
                       
                        <td >
						<?php //echo @$row['web_status']; ?>
                        <span id="myspan">
                        <form method="post">
                        <label class="switch">
                          <input type="checkbox" name="status_value" class="status_btn" value="<?php if(@$row['web_status'] == 1){ echo 0;}else{echo 1;}?>" <?php if(@$row['web_status'] == 1){echo "checked"; } ?> onClick="getval(<?php echo @$row['website_id']; ?>);">
                          <span class="slider round"></span>
                        </label>
                        </form>
                        </span>
                        </td>
                        
                        
                        
                        <td><?php echo @$row['web_created_time']; ?></td>
                        
                        <td align="center"><a href="<?php echo site_url('admin/Add_site/delete_website/'.$row['website_id']); ?>" onclick="return confirm('Are you sure?')"><i class="fa fa-trash-o" aria-hidden="true"></i> </a>||&nbsp;<a href="<?php echo site_url('admin/Reports_admin/get_reports/'.$row['website_id']); ?>">View Report</a></td>
                    </tr>
                    <?php } ?>
                    <tr>
                        <td colspan="5">
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