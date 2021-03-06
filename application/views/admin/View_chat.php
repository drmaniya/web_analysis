
<?php 

		$this->load->view('admin/Header');
?>

<!--<script>
	$(document).ready(function(e) {
        $('#search_contact').keyup(function(){
					 searchtxt = $('#search_contact').val();
					
								$.ajax({
												type:'POST',
												url:"<?php echo site_url('admin/Contact/ajax_search_contact'); ?>",
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
@media(max-width:767px)
{
	.content-wrapper{margin-top:100px;}
	
.box{overfloaw-x:scroll;overflow-y:hidden;}

}
@media(min-width:768px) and (max-width:991px)
{.box{overfloaw-x:scroll;overflow-y:hidden;}

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

</style>


<!--***************** Switch Button Code End *********************-->

		<div class="content-wrapper">
    <!-- Content Header (Page header) -->
 
    <section class="content-header">
      <h1>
        Chat List
        <small>Delete Chat</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo site_url('admin/dashboard'); ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a href="#">Chat History</a></li>
        <li class="active">View Chat History</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Avilable Chating</h3>
            </div>
            <!-- /.box-header -->
           <!-- Search :-  <input type="search" name="name" id="search_message" placeholder=" Enter A Contact Name or Email..."/>-->
            <div class="box-body search2">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th> Chat Id</th>
                  <th> From Id</th>
                  <th> To Id</th>
                  <th> Chat</th>
                  <th> Send_time</th>
                  <th> Action</th>
                </tr>
                </thead>
                <tbody>
               
                	<?php foreach(@$user_data as $row) {?>
                	<tr align="center">	
                    	<td><?php echo @$row['id']; ?></td>
                        <td><?php echo @$row['from_id']; ?></td>
                        <td><?php echo @$row['to_id']; ?></td>
                        <td><textarea disabled><?php echo @$row['msg']; ?></textarea></td>
                        <td><?php echo @$row['send_time']; ?></td>
                        <td><a href="<?php echo site_url('admin/Message/chat_delete/'.@$row['id']); ?>" onclick="return confirm('Are you sure?')"><i class="fa fa-trash-o" aria-hidden="true"></i> </a></td>
                    </tr>
                    <?php }?>
                     
                    <tr>
                        <td colspan="11">
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