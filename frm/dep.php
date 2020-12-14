<?php

 include('set.php');   

   $user_data_id = $_SESSION['user_id'];
  
	$user = new run_query("select * from users where user_id = '$user_data_id' and user_status ='Active' ");
	$user_data =	$user->result();
	extract($user_data );
				

//submit new fund ends


?>