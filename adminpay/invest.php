<?php

 include('../inc/settings.php'); 
 
$active= "dash";

if( isset($_GET['user']) ){
$user_id = addslashes(htmlentities($_GET['user']));
}else{
echo "<script>window.location.replace(\"user.php\"); </script>";
}
 
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

   <title> <?php echo $site_name; ?> | User Investments </title>

	
	</head>

<body >
	<?php     
require "header_admin.php";









?>
 
   <main>
   <div class="container">
<br/>
     <div class="row -text" >
	
	<h1 class="">USER'S INVESTMENTS  </h1><hr/>
		<div class="col m12 l12 s12" >
		
<div style="font-size:17px; height:800px; overflow:scroll" >		


<table class="table striped bordered" style="width:1200px;">
<thead>
<tr>
<td>S/N</td>
<th>Action</th>
<th>Investment Ref</th>
<th>Amount</th>
<th>Expected Profit($)</th>
<th>Status</th>
<th>Start Date</th>
<th>Expiry Date</th>

</tr>


</thead>
<tbody>


<?php 
								$deposite_tran = new run_query("select * from transaction where tran_user_id = '$user_id' and tran_desc ='INVESTMENT'  order by tran_id desc  ");
								$no = 1;
							while(	$deposite_tran_data =	$deposite_tran->result() ){
							
								extract($deposite_tran_data );
								
								$t1 = strtotime($start_tran_date);
								$t2 = strtotime($reg_Date);
								$diff = $t2 -$t1;
								$days_online_d =  $diff  /86400;
								$duration = round($days_online_d);
								$tran_current_bal_u  = ($duration *  $tran_daily_growth    ) - $tran_withdraw_amt;
								
								$tran_current_bal_u =  number_format( $tran_current_bal_u,4);
								if($duration >=7){
								$tran_current_bal_u  = ( 7 *  $tran_daily_growth  ) - $tran_withdraw_amt;
								}
								$btn ="<br/> <form method='POST'>  
									<input  style='width:100px;' type='number' name='coin$tran_id' required value='' /> 
									
									<button type='submit'  name='cash_out$tran_id' class='btn btn-sm green' >ADD</button> 
								</form>";
								

								if($tran_status =='ACTIVE'){
									$tran_status ="In Progress";
								}
								
								if($duration >= 7){
								$tran_current_bal_u  = ( 7 *  $tran_daily_growth  ) - $tran_withdraw_amt;
								$tran_status ="Expired";
								$duration ="Expired";
								}
								echo"
								
							<tr>
								<td>$no</td>
								<th>$btn  </th>
								<th>$tran_invoice</th>
								<th>$$trant_amt</th>
								<th>$$tran_roi</th>
								<th style='color:red;'><i class='fa fa-spinner'></i> $tran_status </th>
								<th>$start_tran_date  </th>
								<th>$tran_exp_date  </th>
								</tr>	
								
								";
								$no++;
								
								
									if(isset($_POST['cash_out'.$tran_id]))  {
										$coin = addslashes(htmlentities($_POST['coin'.$tran_id]));
    
							$qw1RRqq = new run_query("UPDATE   `transaction`  set  trant_amt=trant_amt+$coin where  tran_id ='$tran_id' ");
							
							
								

								
									  
								 echo "<script>alert(\"TRANSACTION SET SUCCESSFULL!!! \");</script>"; 
							 
						echo "<script>window.location.replace(\"invest.php?user=$user_id\");</script>"; 


						 }
						 
						 
							}
							
							?>


</tbody>

</table>

                                 



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
        