<?php

  include('../inc/settings.php'); 
$active= "login";




$msg ='';
if(isset($_POST['email']) && isset($_POST['password']) ){
$email = addslashes(htmlentities($_POST['email']));
$password = addslashes(htmlentities($_POST['password']));

// $query = "SELECT * from admin WHERE admin_email ='".$email."' AND admin_password ='".$password."'  AND admin_type ='Admin' ";
	$query = "SELECT * from admin WHERE admin_email ='$email' AND admin_password ='$password' ";


$query_run  =new run_query($query);
if( $query_run->num_rows >= 1){ 
	 		$data =	$query_run->result() ;
				extract($data );
				
              $_SESSION['Admin_id'] =$admin_id;
			    echo "<script>alert('Login Successfully');</script>";
          
            echo "<script>window.location.replace(\"user.php\");</script>"; 
             }else{
           echo "<script>alert('Incorrect Username Or Password');</script>";
                     
        }
		

}
?>
 
<!doctype html>

<html>
	<head>

<?php     
require "script/mlc/script_head.php";
?>


<!-------
	<meta name="viewport" content="width=1024">
   

   <meta name="viewport" content="width=device-width, initial-scale=1">
	
	--->
	
	 <meta name="viewport" content="width=device-width, initial-scale=1">
	
    <meta name="description" content="BEST INVESTMENT IN NIGERIA,  MAKE MONEY ONLINE, ">

    <meta name="keywords" content=" GRATIFY AID  ">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-tap-highlight" content="no">
    
  <meta http-equiv="pragma" content="no-cache" />

   <title> <?php echo $site_name; ?> | ADMIN LOGIN </title>
<style>








</style>
	
	</head>

<body >

    
  
 
 
 
 
 
<br/><br/><br/><br/><br/><br/>
 
   <main>
   <div class="container">
<br/>
     <div class="row">
	
	
		<div class="col m2 l2 s0"></div>
		<div class="col m8 l8 s12">
		<form method="POST" action="index.php">
		 <div class="card z-depth-4 -text">
            <div class="card-content">
              <h2 align="center" style="color:#ff5722;">
			  <img class="animated pulse " src="../assets/images/logo/logo.png"  alt=" icon" width="150px"  />
			  <br/><b>	ADMIN LOG IN </b></h2>
            <div class="row" style="margin:-5px;">
        <div class="input-field col s12">
          <input id="email" type="email" class="validate" required="required" name="email"  value="<?php if(isset($email2)){echo $email2;}?>" />
            <label for="email" data-error="wrong" data-success="right"><i class="fa fa-envelope"></i> Email </label>
        </div>
      </div>




			<div class="row" style="margin:-5px;">
        <div class="input-field col s12">
          <input id="email" type="password" class="validate" required="required" name="password"  />
            <label for="email" data-error="wrong" data-success="right"><i class="fa fa-lock"></i> Password </label>
        </div>
      </div>
	  <center>
	  <p class="red-text center"> <?php echo $msg; ?></p>
	  <button type="submit" class="btn" style="background-color:#ff5722;" name="btn_login" >
	  <b>Sign In <i class="fa fa-sign-in"></i> </b></button>
	    </center>
	  </div>
            <div  sytle="font-size:15px;">
            </div> <br/>
          </div>
		</form>
		</div>
		<div class="col m2 l2 s0"></div>


	   
			</div>


   


   </div>


	
	
	
	
	
	
	
	
	
	
	
	
   
   </main>
 
<br/><br/><br/>


<?php     

require "script/mlc/script_foot.php";
?>


</body>

</html>
 