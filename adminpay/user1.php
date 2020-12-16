<?php

 include('../inc/settings.php'); 

?>
<!doctype html>

<html>
	<head>

<?php     
require "script/mlc/script_head.php";
?>

<meta name="viewport" content="width=1024">
   

  
    <meta name="description" content="BEST INVESTMENT IN NIGERIA,  MAKE MONEY ONLINE, ">

    <meta name="keywords" content=" diploiders  ">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-tap-highlight" content="no">
    
  <meta http-equiv="pragma" content="no-cache" />

   <title> <?php echo $site_name; ?> | ADMIN users </title>

	
	</head>

<body >
	<?php     
require "header_admin.php";
?>
   
 
 
<br/><br/><br/><br/><br/>
 
  
   <main>
   <div class="container">
<br/>
     <div class="row dip_font -text" >
	
	<h1 >USERS  </h1><hr/>
	
	<div class="col m2 l2 s12"><br/> <br/></div>
	

		<div class="col m8 s12" >
		
<div >		


	  
	 <ul class="collapsible popout" data-collapsible="accordion">
      
  <?php	

   $queryts_user = "select * from users  ";
   
   $query_run_user  =new run_query($queryts_user);
   $num1 =1;
if( $query_run_user->num_rows >= 1){ 
while(	$data_user =	$query_run_user->result()){
				extract($data_user );  

				
  if ($user_status =='Active'){
   $button =" 
<input type=\"submit\" class=\"btn red white-text\" name=\"block$user_id\" value=\"block\"/>
   
   
   

	 ";
   
   
   
  
  }else{
  $button = "
  <input type=\"submit\" class=\"btn green white-text\" name=\"unblock$user_id\" value=\"Unblock\"/> 
 ";
  
  
  }

echo "<li>
      <div class=\"collapsible-header\" > $num1  | &nbsp; &nbsp; <b>$user_email</b></div>
     <div class=\"collapsible-body\" style=\"color:black; font-size:12px;\"> 
	NAME: $user_name <br/>
  EMAIL: $user_email <br/>
  PASSWORD: $user_password <br/>
  STATUS: $user_status <br/>
  REG DATE: $reg_date <br/> <hr/>
  BTC WALLET: $btc_address <br/> <hr/>
  ETH WALLET: $eth_address <br/> <hr/>
  ADDRESS: $address <br/> <hr/>
  COUNTRY: $country <br/> <hr/>
  
  REF BONUS: $user_ref_bonus <br/><hr/>
  UPLINER: $user_referrer <br/><hr/>
  <form method=\"POST\" action=\"user1.php\"> 
  $button
  </form>
	</div>
    
	</li>
    ";


	


$num1++;


 
	 
	 


 if(isset($_POST['block'.$user_id]))  { 
  $query121wx = new run_query("UPDATE `users` SET `user_status` ='blocked'  where user_id='$user_id' ");
		
 
 	echo "<script>alert(\" USER BLOCKED! \");</script>"; 
  echo "<script>window.location.replace(\"user1.php\");</script>"; 
      
 }
 
 
 
  if(isset($_POST['unblock'.$user_id]))  { 
  $query121wx = new run_query("UPDATE `users` SET `user_status` ='Active'  where user_id='$user_id' ");
			
 
 	echo "<script>alert(\"USER ACTIVATED!\");</script>"; 
  echo "<script>window.location.replace(\"user1.php\");</script>"; 
   
 }
	

}

}else{
echo "<script>alert(\"NO RESULT FOUND!\");</script>"; 

}
 

?>
  
  </ul>
                                 

</div>


</div>
		
		
	
	
	<div class="col m2 l2 s12"><br/> <br/></div>
	
	
			</div>


   


   </div>

 
   </main>
 

<?php     

require "script/mlc/script_foot.php";
?>


</body>

</html>
        