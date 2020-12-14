<?php

include('../frm/set.php');
 
$active= "dash";

 
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

   <title> <?php echo $site_name; ?> | ADMIN TESTIMONY </title>

	
	</head>

<body >
	<?php     
require "header_admin.php";









?>
 
   <main>
   <div class="container">
<br/>
     <div class="row -text" >
	
	<h1 class="">Testimonies  </h1><hr/>
		<div class="col m12 l12 s12" >
		
<div style="font-size:17px; height:800px; overflow:scroll" >		
<div><b>USER'S Testimonies</b></div>
	 <ul class="collapsible popout" data-collapsible="accordion">
      
  <?php	

 
$no = 1;
 $testimony2 = new run_query( "select * from testimony where test_status !='REJECT' and test_status !='ACCEPT'  " );
 while ($testimony_data =	$testimony2->result() ){
	extract($testimony_data);
	
	

   

echo "<li>
      <div class=\"collapsible-header\" >$no &nbsp; <b>$test_user_email</b></div>
     <div class=\"collapsible-body  \" style=\"font-size:12px;\"> 
	NAME: $test_user_name <br/>
	EMAIL: $test_user_email <br/>
	TESTIMONY: <hr/>$testimony <hr/><br/>
	REG DATE: $test_date  <hr/>
	
  <form method=\"POST\" action=\"text.php\"> 
   <input type=\"submit\" class=\"btn red white-text\" name=\"acc$test_id\" value=\"ACCEPT\"/>
   <input type=\"submit\" class=\"btn red white-text\" name=\"dec$test_id\" value=\"DECLINE\"/>
   
 </form> 
   
	</div>
    
	</li>
    ";




 if(isset($_POST['acc'.$test_id]))  { 
 $query121wx =  new run_query(  "UPDATE `testimony` SET `test_status` ='ACCEPT'  where test_id='$test_id' ");
		
 	echo "<script>alert(\" TESTIMONY ACCEPTED! \");</script>"; 
  echo "<script>window.location.replace(\"text.php\");</script>"; 
      
 }
 
 
 
  if(isset($_POST['dec'.$test_id]))  { 
  $query121wxss =  new run_query( "UPDATE `testimony` SET `test_status` ='REJECT'  where test_id='$test_id' ");
			
 
 	echo "<script>alert(\"TESTIMONY DECLINE!\");</script>"; 
  echo "<script>window.location.replace(\"text.php\");</script>"; 
   
 }
	
	
	$no ++;




}
?>
  
  </ul>
                                 



</div>
		
		
		</div>
		
	
	
			</div>


   


   </div>

 
   </main>
 

  
<?php   
require "script/mlc/script_foot.php";
?>



</body>

</html>
        