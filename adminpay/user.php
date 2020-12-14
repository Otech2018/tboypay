<?php

include('../frm/set.php');

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

 if( isset($_POST['btn_search'])  ){
 $search_user = addslashes(htmlentities($_POST['search_user']));

   $queryts_user = "select * from users where  user_name ='$search_user' || user_email ='$search_user' ";
   
   $query_run_user  =new run_query($queryts_user);
if( $query_run_user->num_rows >= 1){ 
	$data_user =	$query_run_user->result();
				extract($data_user );  
				
		
                              
  if ($user_status =='Active'){
   $button =" 
    <form method=\"POST\" action=\"user.php\"> 
  <input type=\"text\" style=\"display:none;\" value=\"$user_id\" name=\"user_id\"/>

<input type=\"submit\" class=\"btn red white-text\" name=\"block\" value=\"block\"/>
   
   
	 ";
   
   
   
  
  }else{
  $button = "
   <form method=\"POST\" action=\"user.php\"> 
  <input type=\"text\" style=\"display:none;\" value=\"$user_id\" name=\"user_id\"/>

  <input type=\"submit\" class=\"btn green white-text\" name=\"unblock\" value=\"Unblock\"/> 
  </form>
 ";
  
  
  }

  echo "<li>
  <div class=\"collapsible-header\" > <b>$user_email</b></div>
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
  
  REF BONUS: $user_ref_bonus <br/>
  UPLINER: $user_referrer <br/>
  <form method=\"POST\" action=\"user.php\"> 
  $button
  </form>
  </div>
  
  </li>
  ";


	






}else{
echo "<script>alert(\"NO RESULT FOUND!\");</script>"; 

}
 

}




	 


 if(isset($_POST['block']))  { 
   $user_id = addslashes(htmlentities($_POST['user_id']));
 $query121wx = new run_query("UPDATE `users` SET `user_status` ='blocked'  where user_id='$user_id' ");
		
 
 	echo "<script>alert(\" USER BLOCKED! \");</script>"; 
  echo "<script>window.location.replace(\"user.php\");</script>"; 
      
 }
 
 
 
  if(isset($_POST['unblock']))  { 
  $user_id = addslashes(htmlentities($_POST['user_id']));
  $query121wx = new run_query("UPDATE `users` SET `user_status` ='Active'  where user_id='$user_id' ");
			
 
 	echo "<script>alert(\"USER ACTIVATED!\");</script>"; 
  echo "<script>window.location.replace(\"user.php\");</script>"; 
   
 }
	

?>
  
  </ul>
                                 

</div>


	<br/>
	<div class="center" ><b>SEARCH USER </b></div>
	<form method="POST" action="user.php" >
	 <div class="row" style="margin:-5px;">
	<div class="input-field col s12">
          <input id="email" type="text" class="validate" required="required" name="search_user" value="<?php if(isset($search_user)){echo $search_user;}?>"  />
            <label for="email" data-error="wrong" data-success="right"><i class="fa fa-cc"></i> Enter User's  Email Or Username </label>
        </div> </div>
	
	
	
	 <center>
	  <input type="submit"  style="background-color:blue; color:white;" name="btn_search" class="btn " value="SEARCH" />
	  </center>
	 </form>
	
<br/><hr/> 
<center>
<a href="user1.php" target="_blank" class="btn ">View All Users</a>  
	</center>
</div>
		
		
	
	
	<div class="col m2 l2 s12"><br/> <br/></div>
	
	
			</div>


   


   </div>

 
   </main>
 

<?php     

require "script/mlc/home_footer.php";
?>


</body>

</html>
        