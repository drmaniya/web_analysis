<?php
$this->load->view('admin/Header');
?>
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
        State List
        <small>Delete || Update States</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo site_url('admin/dashboard'); ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a href="#">Manage state</a></li>
        <li class="active">View state</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Avilable States</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Id</th>
                  <th>Country Name</th>
                  <th>State Name</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
               
                	<?php foreach(@$vstate as $row) {?>
                	<tr>	
                    	<td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['country_name']; ?></td>
                        <td><?php echo $row['state_name']; ?></td>
                        <td><a href="<?php echo site_url('admin/State/delete_State/'.$row['id']); ?>"><i class="fa fa-trash-o" aria-hidden="true"></i> </a>&nbsp;||&nbsp;<a href="<?php echo site_url('admin/State/update_state/'.$row['id']); ?>"> <i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
                    </tr>
                    <?php }?>
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