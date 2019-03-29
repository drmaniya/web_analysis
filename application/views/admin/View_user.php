
<?php 

		$this->load->view('admin/Header');
?>
<link href="<?php echo base_url('assets/user/css/chat.css');?>" type="text/css" rel="stylesheet"/>
 <script>

$(document).ready(function(){
        $(".left-first-section").click(function(){
            $('.main-section').toggleClass("open-more");
        });
    });
	
    $(document).ready(function(){
        $(".fa-minus").click(function(){
            $('.main-section').toggleClass("open-more");
        });
    });
 </script>
 
 
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
							url:"<?php echo site_url('admin/User/ajax_change_status'); ?>",
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
			   
			   $('#search_user').keyup(function(){
					 searchtxt = $('#search_user').val();
					
								$.ajax({
												type:'POST',
												url:"<?php echo site_url('admin/User/ajax_search_user'); ?>",
												data:
												{
														'searchtxt':searchtxt,
															
												},
												success:function(data)
												{
													//alert("record inserted");
													//$('.prints').html(data);
													$('.search2').html(data);
													var elems = document.querySelectorAll('#aj_rebind .status_btn');
													  elems.forEach(function(html) {
														var switchery = new Switchery(html);
													  });
							  						$('.status_btn').bind('change');
												}
										});

					});
		   
        });
</script>


<script>
		
		var user_id=0;
           
		  function iamsg_send(){
			  
				var from_id = 1;
				var to_id = user_id;
				//alert(to_id);
				var msg = $('#input_chat').val();
				if(msg == ''){return false;}
				//alert(from_id);
				$.ajax({
					type:'POST',
					url:'<?php echo site_url('user/Dashboard/add_chat'); ?>',
					data:{from_id:from_id,to_id:to_id,msg:msg},
					dataType:'JSON',
					success:function(response){
						//console.log(response.conversation);return false;
						var html='';
						for(var i=0;i<response.conversation.length;i++){
							if(from_id == (response.conversation[i].from_id)){
								html += '<li><div class="right-chat"><p>'+response.conversation[i].msg+'</p></div></li>';	
							}else{
								html += '<li><div class="left-chat"><p>'+response.conversation[i].msg+'</p></div></li>';	
							}
							 
						}
						$('#conversation').html(html);
						$('#input_chat').val('');
					$('#chat_name').text(response.chat_user_data.user_name);

					}
				});
			}
			
			
		    function user(uid){
				user_id = uid;
				$('#chat_box').show();
				}
        
				
		$(function(){
				
				
				var scr = $('#conversation');
			//	console.log(scr);
				var height = scr[0].scrollHeight;
				//alert(height);
				scr.scrollTop(height);	
				
			});
			
			var $time = '';
			
			function close_chat(){
			clearTimeout($time);
			$('#chat_box').hide();	

		}

			function auto_get_chat_func(from_id,to_id){
	
			clearTimeout($time);
			auto_get_chat(from_id,to_id);	
		}
		
		
			function auto_get_chat(from_id,to_id){
				//alert("dasd");
			//var from_id = from_id;
			//var to_id	= to_id;
			//console.log(from_id);console.log(to_id);return false;
			//clearTimeout(time);
			$.ajax({
				type:'POST',
				url:'<?php echo site_url('user/Dashboard/get_chat_data'); ?>',
				data:{from_id:from_id,to_id:to_id},
				dataType:'JSON',
				success:function(response){
					//console.log(response.conversation);return false;
					var html='';
						for(var i=0;i<response.conversation.length;i++){
						if(from_id == (response.conversation[i].from_id)){
							
							html += '<li><div class="right-chat"><p>'+response.conversation[i].msg+'</p></div></li>';	
						}else{
							html += '<li><div class="left-chat"><p>'+response.conversation[i].msg+'</p></div></li>';	
						}
						 
					}
					$('#conversation').html(html);
					$('#chat_name').text(response.chat_user_data.user_name);

						//$('#input_chat').val('');		
				}
			});
			
			$time = setTimeout(function(){
				//alert(from_id);
				auto_get_chat(from_id,to_id)
			},3000);
			
		}
		
		
		$(document).ready(function(e) {
		
				//alert("asdsa");
		$('#input_chat').keyup(function(e){
			if(e.keyCode==13){
				var from_id = 1;
				var to_id = user_id;
				//alert(to_id);
				var msg = $(this).val();
				if(msg == ''){return false;}
				//alert(from_id);
				$.ajax({
					type:'POST',
					url:'<?php echo site_url('user/Dashboard/add_chat'); ?>',
					data:{from_id:from_id,to_id:to_id,msg:msg},
					dataType:'JSON',
					success:function(response){
						//console.log(response.conversation);return false;
						var html='';
						for(var i=0;i<response.conversation.length;i++){
							if(from_id == (response.conversation[i].from_id)){
								html += '<li><div class="right-chat"><p>'+response.conversation[i].msg+'</p></div></li>';	
							}else{
								html += '<li><div class="left-chat"><p>'+response.conversation[i].msg+'</p></div></li>';	
							}
							 
						}
						$('#conversation').html(html);
						$('#input_chat').val('');	
					$('#chat_name').text(response.chat_user_data.user_name);

					}
				});
				
			}
			});
			$('#chat_box').hide();
		});
			
		
		$(document).on('click','.user_chat_box',function(){
			
			//console.log(time);
			var from_id = 1;
			var to_id = user_id;
			$.ajax({
				type:'POST',
				url:'<?php echo site_url('user/Dashboard/get_chat_data'); ?>',
				data:{from_id:from_id,to_id:to_id},
				dataType:'JSON',
				success:function(response){
					//console.log(response.conversation);return false;
					
					var html='';
					for(var i=0;i<response.conversation.length;i++){
						if(from_id == (response.conversation[i].from_id)){
							html += '<li><div class="right-chat"><p>'+response.conversation[i].msg+'</p></div></li>';	
						}else{
							html += '<li><div class="left-chat"><p>'+response.conversation[i].msg+'</p></div></li>';	
						}
						 
					}
					//alert("asdas");
					//
					//$('#chat_box').show();
					$('#conversation').html(html);
					$('#input_chat').val('');
					$('#chat_name').text(response.chat_user_data.name);


					var scr = $('#conversation');
					//console.log(scr);
					var height = scr[0].scrollHeight;
					//alert(height);
					//scr.scrollTop(height);			
					//clearTimeout(time);
					auto_get_chat_func(from_id,to_id);
				}
			});
		});
	
		
		 $(document).ready(function(){
			
				
    	$(".fa-minus").click(function(){
            $('.main-section').toggleClass("open-more").after(function(){
				var scr = $('#conversation');
				//console.log(scr);
				var height = scr[0].scrollHeight;
				//alert(height);
				scr.scrollTop(height);					
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

.content-wrapper{margin-top:45px;}
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
        Users List
        <small>Delete || Update User</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo site_url('admin/dashboard'); ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a href="#">Manage User</a></li>
        <li class="active">View User</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Avilable User's</h3>
            </div>
            <!-- /.box-header -->
              Search :-  <input type="search" name="name" id="search_user" placeholder=" Enter A User Name or Email..."/>
            <div class="box-body search2" id="aj_rebind">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th> Id</th>
                  <th> Name</th>
                  <th> Email</th>
                  <th> Password</th>
                  <th> Mobile No.</th>
                  <th> Gender</th>
                  <th> Country</th>
                  <th> Image</th>
                  <th> Status</th>
                  <th> Created_Time</th>
                  <th> Action</th>
                  <th>Chating</th>
                </tr>
                </thead>
                <tbody>
               
                	<?php foreach(@$user_data as $row) {?>
                	<tr>	
                    	<td><?php echo @$row['user_id']; ?></td>
                        <td><?php echo @$row['user_name']; ?></td>
                        <td><?php echo @$row['user_email']; ?></td>
                        <td><?php echo @$row['user_password']; ?></td>
                        <td><?php echo @$row['user_mobile']; ?></td>
                        <td><?php echo @$row['user_gender']; ?></td>
                        <td><?php echo @$row['country_name']; ?></td>
                        <td><img src="<?php echo base_url('assets/user/image/'.$row['user_image'])?>" height="50px" width="50px" /></td>
                        
                        <td>
						<?php //echo @$row['user_status']; ?>
                        <span id="myspan">
                        <form method="post">
                        <label class="switch">
                          <input type="checkbox" name="status_value" class="status_btn" value="<?php if(@$row['user_status'] == 1){ echo 0;}else{echo 1;}?>" <?php if(@$row['user_status'] == 1){echo "checked"; } ?> onClick="getval(<?php echo @$row['user_id']; ?>);">
                          <span class="slider round"></span>
                        </label>
                        </form>
                        </span>
                        </td>
                        
                        
                        
                        <td><?php echo @$row['user_created_time']; ?></td>
                        
                        <td><a href="<?php echo site_url('admin/User/delete_user/'.$row['user_id']); ?>" onclick="return confirm('Are you sure?')" ><i class="fa fa-trash-o" aria-hidden="true"></i> </a>&nbsp;||&nbsp;<a href="<?php echo site_url('admin/User/update_user/'.$row['user_id']); ?>"> <i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
                    
                    <td>
                   
                    	<a href="javascript:void(0)" class="user_chat_box"  data-to_id='<?php echo @$row['user_id']; ?>' data-from_id='1' onClick="user(<?php echo @$row['user_id']; ?>);">Chat</a>
                        
                    </td>
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
    
    <div class="main-section" id="chat_box">
    <div class="row border-chat">
        <div class="col-md-12 col-sm-12 col-xs-12 first-section">
            <div class="row">
                <div class="col-md-8 col-sm-6 col-xs-6 left-first-section">
                    <p id="chat_name" class="">Chat With User</p>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-6 right-first-section">
                    <!--<a href=""><i class="fa fa-minus" aria-hidden="true"></i></a>-->
            
                    <a href="#"><i class="fa fa-times" onClick="close_chat();" aria-hidden="true"></i></a>
                    <!--<a href="#"><i class="fa fa-minus" aria-hidden="true"></i></a>-->
                   <!-- <a href="#"><i class="fa fa-clone" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-times" aria-hidden="true"></i></a>
                --></div>
            </div>
        </div>
    </div>
    <div class="row border-chat"> 
        <div class="col-md-12 col-sm-12 col-xs-12 second-section">
            <div class="chat-section">
                <ul id="conversation">
                   
                </ul>
            </div>
        </div>
    </div>
    <div class="row border-chat">
        <div class="col-md-12 col-sm-12 col-xs-12 third-section">
            <div class="text-bar">
                <input type="text" placeholder="Write messege" id="input_chat"><a onClick="iamsg_send();"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>
            </div>
        </div>
    </div>
</div>
  </div>
 


<?php 
	$this->load->view('admin/Footer');
?>