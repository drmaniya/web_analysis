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
        Admin List
        <small>Delete || Update Admin</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo site_url('admin/dashboard'); ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a href="#">Manage Admin</a></li>
        <li class="active">View Admin</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Avilable Admin</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Id</th>
                  <th>Name</th>
                  <th>Email</th>
                 
                  <th>Image</th>
                  <?php if(@$chk_level['level'] == 1) {?>
                  <th>Action</th>
                  <?php } ?>
                </tr>
                </thead>
                <tbody>
                	<?php foreach($data as $row) {?>
                	<tr>	
                    	<td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                       
                        <td><img src="<?php echo base_url() ?>assets/admin/image/<?php echo $row['image']; ?> " height="50px" width="50px" /></td>
                        <?php if(@$chk_level['level'] == 1) {?>
                        <td><a href="<?php echo site_url('admin/Admin/delete/'.$row['id']); ?>" onclick="return confirm('Are you sure?')"><i class="fa fa-trash-o" aria-hidden="true"></i> </a>&nbsp;||&nbsp;<a href="<?php echo site_url('admin/Admin/update/'.$row['id']); ?>"> <i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
                        <?php }?>
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