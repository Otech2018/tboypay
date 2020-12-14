<?php      session_start(); 

 include('../settings.php');     

$email2 = addslashes(htmlentities($_POST['email2']));
$password = addslashes(htmlentities($_POST['password']));

$query = "SELECT * from users WHERE (user_email ='$email2' or user_name ='$email2' ) AND user_password ='$password' ";

$query_run  =new run_query($query);
if( $query_run->num_rows >= 1){ 
			$data =	$query_run->result() ;
				extract($data );
	
			if($user_status === 'blocked' ){
            
           	echo 'blocked';
						
		  
	 }else if($user_status == 'Not_Active' ){
	 
	  	echo 'Not_Active';
				
			}else if($user_status == 'pending' ){
			
			echo 'pending';
			
			}
			
			else  if($user_status == 'Active' ){
			$_SESSION['user_id'] = $user_id;
			  
             echo 'Active';
            }
            
            }else{
			 echo 'invalid';
			
        }
		








?>