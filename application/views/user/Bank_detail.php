
  <?php  $this->load->view('user/Header_user'); ?>
<style>
.container-fluid{padding-top:85px;}
</style>
        <div class="page-wrapper">
        
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-6 col-8 align-self-center">
                        <h3 class="text-themecolor m-b-0 m-t-0">Forms</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo site_url('user/Dashboard/'); ?>">Package List</a></li>
                            <li class="breadcrumb-item active">Paying Detail Form</li>
                        </ol>
                    </div>
                    <!--<div class="col-md-6 col-4 align-self-center">
                        <button class="right-side-toggle waves-effect waves-light btn-info btn-circle btn-sm pull-right m-l-10"><i class="ti-settings text-white"></i></button>
                        <button class="btn pull-right hidden-sm-down btn-success"><i class="mdi mdi-plus-circle"></i> Create</button>
                        <div class="dropdown pull-right m-r-10 hidden-sm-down">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                January 2017
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">February 2017</a>
                                <a class="dropdown-item" href="#">March 2017</a>
                                <a class="dropdown-item" href="#">April 2017</a>
                            </div>
                        </div>
                    </div>-->
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
               
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">PAYING DETAIL</h4>
                                <h6 class="card-subtitle">FILL UP FORM</h6>
                                <form class="floating-labels m-t-40" method="post">
                                
                                    <div class="form-group m-b-40">
                                        <input type="hidden" name="payble_amount" class="form-control" id="payble_amount" required value="<?php echo @$get_res['pac_cost']; ?>">
                                        <span class="bar"></span>
                                       
                                    </div>
                                    <div class="form-group m-b-40">
                                        <input type="text"  name="product_info" class="form-control" id="product_info" value="<?php echo @$get_res['pac_duration']; ?>" readonly>
                                        <span class="bar"></span>
                                       
                                        <?php if(@form_error('product_info')){ echo form_error('product_info'); }?>
                                    </div>
                                    
                                    <div class="form-group m-b-40">
                                        <input type="text" name="customer_name" class="form-control" id="customer_name" required value="<?php echo @$customer_name; ?>" >
                                        <span class="bar"></span>
                                        <label for="input3">Payer Full Name (Only alphabets)</label>
                                        <?php if(!@form_error('product_info') && @form_error('customer_name')){ echo form_error('customer_name'); }?>
                                    </div>
                                    
                                    <div class="form-group m-b-40">
                                        <input type="text" name="mobile_number" class="form-control" id="mobile_number" required value="<?php echo @$mobile_number; ?>">
                                        <span class="bar"></span>
                                        <label for="input3">Mobile No.</label>
                                        <?php if(!@form_error('product_info') && !@form_error('customer_name') && @form_error('mobile_number')){ echo @form_error('mobile_number'); }?>
                                    </div>
                                    
                                    
                                    <div class="form-group m-b-40">
                                        <input type="text" name="customer_email" class="form-control" id="customer_email" required value="<?php echo @$customer_email; ?>">
                                        <span class="bar"></span>
                                        <label for="input3">Email Address</label>
                                         <?php if(!@form_error('product_info') && !@form_error('customer_name') && !@form_error('mobile_ number') && @form_error('customer_email')){ echo form_error('customer_email'); }?>
                                    </div>
                                    
                                    <div class="form-group m-b-40">
                                        <textarea  name="customer_address" class="form-control" id="customer_address" required value="<?php echo @$customer_address; ?>"></textarea>
                                        <span class="bar"></span>
                                        <label for="input3">Your Address</label>
                                                <?php if(!@form_error('product_info') && !@form_error('customer_name') && !@form_error('mobile_ number') && !@form_error('customer_email')){ echo form_error('customer_address'); }?>
                                    </div>
                                    
                                    
                                <!--    <div class="form-group m-b-40">
                                        <input type="text" class="form-control" id="input4" required>
                                        <span class="bar"></span>
                                        <label for="input4">Helping text</label>
                                        <span class="help-block"><small>A block of help text that breaks onto a new line and may extend beyond one line.</small></span> </div>
                                    <div class="form-group m-b-40">
                                        <input type="text" class="form-control" id="input5" data-toggle="tooltip" data-placement="bottom" title="input with tooltip!!" required>
                                        <span class="bar"></span>
                                        <label for="input5">Input with tooltip</label>
                                    </div>
                                    <div class="form-group m-b-40">
                                        <select class="form-control p-0" id="input6" required>
                                            <option></option>
                                            <option>Male</option>
                                            <option>Female</option>
                                        </select><span class="bar"></span>
                                        <label for="input6">Gender</label>
                                    </div>
                                    <div class="form-group m-b-5">
                                        <textarea class="form-control" rows="4" id="input7" required></textarea>
                                        <span class="bar"></span>
                                        <label for="input7">Text area</label>
                                    </div>-->
                                      <input type="submit" name="pay_money" class="btn btn-success" value="Submit">    
                                  
                                        <input type="reset" value="Cancel" class="btn btn-inverse" />
                                </form>
                            </div>
                        </div>
                       
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
               
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            </div>
           <?php $this->load->view('user/Footer_user'); ?>