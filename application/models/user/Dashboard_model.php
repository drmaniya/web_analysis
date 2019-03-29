<?php 

	class Dashboard_model extends CI_Model
	{
	
			function get_record($id='')
			{
					$this->db->where('user_id',$id);
					$rec=$this->db->get('user');
					$get=$rec->row_array();
					//print_r($get);
					//die;
					return $get;		
			}
			
			function package_data($pac_id='')
			{
				$this->db->where('pac_id',$pac_id);
				$qrr=$this->db->get('package');
				$rec=$qrr->row_array();
				//echo "<pre>";	
				return $rec;
				//die;
			}
			
			function get_packinfo($user_id='')
			{
				$pay_status = 'success';
				
				
				$this->db->where('user_id',$user_id);
				$this->db->where('payment_status',$pay_status);
				$qry = $this->db->get('payment_history');
				$res = $qry->row_array();
				
				return $res;
			}
			
			/*function user_msg($id='')
			{
				$qrr=$this->db->query("select admin.image as ad_img,admin.name as ad_name,message.message as msg,TIME(message.send_time) as send_time from admin,message where message.user_id='$id' and admin.id=message.admin_id");
				
				return $qrr;
			}*/
			
			function user_logouthis($arr=array(),$login_time='')
			{
				$this->db->where('login_time',$login_time);
				$this->db->update('user_log',$arr);	
			}
			
			function user_data($uid=''){
				$this->db->where('user_id',$uid);
				$val=$this->db->get('user');
				return $val->row_array();
			}
			
			function get_conversation($to_id=0,$from_id=0){
				$this->db->where('to_id',$to_id);
				$this->db->where('from_id',$from_id);
				@$array1 = $this->db->get('msg_info')->result_array();
				
				$this->db->where('from_id',$to_id);
				$this->db->where('to_id',$from_id);
				@$array2 = $this->db->get('msg_info')->result_array();
				@$array3 = array_merge($array1,$array2);
				//print_r(krsort(array_merge($array1,$array2)));die;
				return $array4 = $this->array_orderby($array3,'send_time',SORT_ASC);
				//$array4 = array();
				
				//pre($array4);die;
		
			}
		
		
			function array_orderby()
			{
					$args = func_get_args();
					$data = array_shift($args);
					foreach ($args as $n => $field) {
						if (is_string($field)) {
							$tmp = array();
							foreach ($data as $key => $row)
								@$tmp[$key] = $row[$field];
							$args[$n] = $tmp;
							}
					}
					@$args[] = &$data;
					call_user_func_array('array_multisort', $args);
					return array_pop($args);
			}
			
			function add_chat($arr = array()){
				$this->db->insert('msg_info',$arr);
				
				$this->db->where('to_id',$arr['to_id']);
				$this->db->where('from_id',$arr['from_id']);
				@$array1 = $this->db->get('msg_info')->result_array();
				
				$this->db->where('from_id',$arr['to_id']);
				$this->db->where('to_id',$arr['from_id']);
				@$array2 = $this->db->get('msg_info')->result_array();
				@$array3 = array_merge($array1,$array2);
				//pre(krsort(array_merge($array1,$array2)));die;
				return $array4 = $this->array_orderby($array3,'send_time',SORT_ASC);	
			}
	
			function chat_delete($from_id=0)
			{
					$this->db->where('from_id',@$from_id);
					$this->db->delete('msg_info');
			}
	}
		
?>