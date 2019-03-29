<?php  $this->load->view('user/Header_user'); ?>
 <style>
 
.card-body{padding-top:100px;}
 </style>
  <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
        
  <div class="row">
  
                    <div class="col-lg-12">
                        <div class="card card-outline-info">
                            
                            <div class="card-body">
                            
                                <form method="post">
                                    <div class="form-body">
                                        <h3 class="card-title">Add WebSite || WebSite URL</h3>
                                        <hr>
                                        
                                        <div class="row p-t-20">
                                       
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">WebSite Name</label>
                                                    <input type="text" name="web_name" id="firstName" class="form-control" placeholder="Enter Website Name" value="<?php echo @$web_name; ?>">
                                                    <?php
													if(form_error('web_name'))
													{
													 echo '<div style="color:white;background-color:red;padding:5px;border-radius:5px;">'.form_error('web_name').'</div>'; }?>
                                                    <?php if(@$web_err){echo '<div style="color:white;background-color:red;padding:10px;border-radius:5px;">'.@$web_err.'</div>';}?>
                                      
                                                    <small class="form-control-feedback"> </small> </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">WebSite URL</label>
                                                    <input type="url" id="lastName" name="web_url" class="form-control" placeholder="http:// Enter Website URL " value="<?php echo @$web_url; ?>">
                                                     <?php 
													 if(!form_error('web_name') && form_error('web_url')){
													 echo '<div style="color:white;background-color:red;padding:3px;border-radius:5px;">'.form_error('web_url').'</div>'; }?>
                                                     <?php echo @$web_urlerr;?>
                                                    <small class="form-control-feedback">  </small> </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        
                                                                      <div class="form-actions">
                                        <input type="submit" name="add_website" class="btn btn-success" value="Submit">    
                                                 
                                        <input type="reset" value="Cancel" class="btn btn-inverse" />
                                        </div>
                                    </div>
                                </form>
                            </div>
                            
                     <?php if(@$package_not){echo '<div style="color:white;background-color:red;padding:3px;border-radius:5px;width:auto;text-align:center;padding:10px 10px;">'.@$package_not.'</div>';} ?>
                        </div>
                    </div>
                </div>
                                      <!--  /row
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group has-success">
                                                    <label class="control-label">Gender</label>
                                                    <select class="form-control custom-select">
                                                        <option value="">Male</option>
                                                        <option value="">Female</option>
                                                    </select>
                                                    <small class="form-control-feedback"> Select your gender </small> </div>
                                            </div>
                                            /span
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Date of Birth</label>
                                                    <input type="date" class="form-control" placeholder="dd/mm/yyyy">
                                                </div>
                                            </div>
                                            /span
                                        </div>
                                        /row
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Category</label>
                                                    <select class="form-control custom-select" data-placeholder="Choose a Category" tabindex="1">
                                                        <option value="Category 1">Category 1</option>
                                                        <option value="Category 2">Category 2</option>
                                                        <option value="Category 3">Category 5</option>
                                                        <option value="Category 4">Category 4</option>
                                                    </select>
                                                </div>
                                            </div>
                                            /span
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Membership</label>
                                                    <div class="form-check">
                                                        <label class="custom-control custom-radio">
                                                            <input id="radio1" name="radio" type="radio" checked class="custom-control-input">
                                                            <span class="custom-control-indicator"></span>
                                                            <span class="custom-control-description">Free</span>
                                                        </label>
                                                        <label class="custom-control custom-radio">
                                                            <input id="radio2" name="radio" type="radio" class="custom-control-input">
                                                            <span class="custom-control-indicator"></span>
                                                            <span class="custom-control-description">Paid</span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            /span
                                        </div>
                                        /row-->
                                       <!-- <h3 class="box-title m-t-40">Address</h3>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-12 ">
                                                <div class="form-group">
                                                    <label>Street</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>City</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            /span
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>State</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            /span
                                        </div>
                                        /row
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Post Code</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            /span
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Country</label>
                                                    <select class="form-control custom-select">
                                                        <option>--Select your Country--</option>
                                                        <option>India</option>
                                                        <option>Sri Lanka</option>
                                                        <option>USA</option>
                                                    </select>
                                                </div>
                                            </div>
                                            /span
                                        </div>
                                    </div>-->
      
                
  
<?php  $this->load->view('user/Footer_user'); ?>