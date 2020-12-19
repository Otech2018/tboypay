<?php
 include('../inc/settings.php'); 
 

								

												$lend_term_date = date('Y-m-d',strtotime('20 Days') );
												$lend_term_date_cal = date('Y-m-d H:i:s',strtotime('20 Days') );
												$cred_date_cal = date('Y-m-d H:i:s');
												$history_date = date('YmdHis');



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

   <title>  <?php echo $site_name; ?>  | ADMIN TRANSACTION </title>

	
	</head>

<body >
	<?php     
require "header_admin.php";
?>
   
 
<br/><br/><br/>



 <main>
   <div class="container">
<br/>
     <div class="row">
	
	
		<div class="col m12 l12 s12" >
		<h1 align="center">ADMIN ON TRANSACTION </h1>
<div style="font-size:17px;" >		


        <div class="col s12 m5 L5">
          <div class="card " style="color:orange;">
            <div class="card-content">
              <span class="card-title"><i class="fa fa-history"></i> WITHDRAWAL </span>
             


     <ul class="collapsible popout" data-collapsible="accordion">
     
  <?php	


						$cashout_tran = new run_query("select * from transaction where tran_status = 'PENDING' and tran_desc ='CASH_OUT' ");
							$no_c = 1;
							while(	$cashout_tran_data =	$cashout_tran->result() ){
							
								extract($cashout_tran_data );
								
								$timer_start  = date('Y-m-d H:i:s' );
								$t1 = strtotime($timer_start);
								$t2 = strtotime($tran_exp_date);
								$diff = $t2 -$t1;
								$days_online_d =  $diff  /3600;

								
								$timer = round($days_online_d). " (Hrs) ";
								if( $timer <= 0){
								$timer ="PENDING"; 
								}
									$get_user = new run_query("select * from users where user_id='$tran_user_id'  ");
								$get_user_data =	$get_user->result() ;
							
								extract($get_user_data );	
								
								if($coin =='BTC'){
									$wallet = $btc_address;
									$coin_val = number_format( usd_btc($trant_amt),4);
								}else{
									$wallet =  $eth_address;
									$coin_val = number_format(usd_eth($trant_amt),4);
								}

		echo "<li>
							 <div class=\"collapsible-header\"><b>$no_c  $$trant_amt ($coin_val $coin)</b>  </div>
										 
										  
								<div class=\"collapsible-body\" style=\"color:black;\" > 
										<div style=\"font-size:12px;\">
													TIMER: <span style=\"color:red;\" ><b>$timer </b></span><br/>
															STATUS : $tran_status <hr/>
															AMOUNT:  $trant_amt  ($coin_val $coin) <hr/>
														 $coin Wallet Address: $wallet <BR/>
														 EMAIL: $user_email <HR/>
														  REFERRER : $user_referrer <BR/>
													<form method=\"POST\" action=\"tra1.php\" >
						  
															<a class=\"waves-effect waves-light btn green modal-trigger\" href=\"#modal1$tran_id\">Confirm </a>

																<div id=\"modal1$tran_id\" class=\"modal\">
																	<div class=\"modal-content\">
																		<p>Are you sure you Have paid for this transaction?</p>
																	</div>
																	<div class=\"modal-footer\">
																			<a href=\"#!\" class=\"modal-action modal-close waves-effect waves-green btn red\">NO</a>
																			<input type=\"submit\" value=\"YES\"  name=\"credit$tran_id\" class=\"btn green\">
																	</div>
																</div>
				 
													</form>
	
											</div>
											
											<hr/>$tran_date
								</div>
    
					</li>  ";
	
								//CREDITED button starts
						if(isset($_POST['credit'.$tran_id]))
						 {


						 $qw1F = new run_query("UPDATE `transaction` SET `tran_status`='PAID'   where tran_id ='$tran_id'");
						
								  
								  $query121e = new run_query("UPDATE `users` SET `testimony` ='new' where `user_id`='$user_id'   ");
							
								  
								$site_email_send = "$site_email";		
								$welcome_email_subject = "Successfull Payment of - $ $trant_amt | $site_name";
								$welcome_email_headers .= "Content-type:text/html;charset=UTF-8 \r\n";
								$welcome_email_headers .= "From: $site_name";	
								
								
								 $welcome_email_body = "
								
									<html>
									<head>
										<title> Hello $user_name, </title>
									</head>
									<body>
									 <b>Hello, $user_name<b> <br/> Hope we meet you well.
									<h2> We are Happy to let you know that  the withdrwal  of $ $trant_amt you request  </h2>
									Has been payed Successfully. Congratulations!!! <br/>
									
									<hr/>
									For enquiries, <br/>
									Contact us on <br/>
								
									<b>
									$site_email <br/>
								
									$site_phone <br/>
									</b>
									Visit us on <br/>
								
									$site_link<br/><br/><br/>
								
									Regards,  $site_name.
									</body>
									</html>
								
									";
								
									 mail($user_email,$welcome_email_subject,$welcome_email_body,$welcome_email_headers);
									
								  
										echo "<script>alert(\"CONFIRMED SUCCESSFULLY\");</script>";   
								
						echo "<script>window.location.replace(\"tra1.php\");</script>"; 


						 }
							
							//CREDITED button ends
										
										 
							$no_c ++;		  
												
											
				}
				
				
   
   ?>
   
   
  </ul>
    


			 </div>
			 
			

			
          </div>
        </div>
		
	




 <div class="col s12 m1 L1"> <br/><br/></div>




     <div class="col s12 m5 L5">
          <div class="card " style="color:orange;">
            <div class="card-content">
              <span class="card-title"><i class="fa fa-history"></i> PAYMENTS</span>
             


   <ul class="collapsible popout" data-collapsible="accordion">
     
  <?php	

				$queryt = new run_query("select * from transaction where tran_status='PENDING'  and  tran_desc='DEPOSIT'  order by tran_id desc ");
				
	while(	$deposite_tran_data =	$queryt->result() ){
		extract($deposite_tran_data );	

												$querytas = new run_query("select * from users where user_id = '$tran_user_id' ");
														$user_tran_data =	$querytas->result() ;
							
														extract($user_tran_data );


		echo "<li>
							 <div class=\"collapsible-header\"><b>  $ $trant_amt ($coin_amt $coin) </b> </div>
										 
										  
								<div class=\"collapsible-body\" style=\"color:black;\" > 
										<div style=\"font-size:12px;\">
													STATUS: <span style=\"color:red;\" ><b>$tran_status </b></span><br/>
															TRANSACTION ID: $trans_id <hr/>
															INVOICE ID: $tran_invoice <hr/>
															AMOUNT: $ $trant_amt ($coin_amt $coin)<hr/>
															<b>PAYMENT DETAILS</b><br/>
															TRANS HASH ID:   $hash_id  <br/>
														  USERNAME: $user_name <BR/>
														  EMAIL: $user_email <HR/>
														  REFERRER : $user_referrer <BR/>
														 
														 
													<form method=\"POST\" action=\"tra1.php\" >
						  
																  
															  <a class=\"waves-effect waves-light btn green modal-trigger\" href=\"#modal$tran_id\">CONFIRM </a>

																<div id=\"modal$tran_id\" class=\"modal\">
																	<div class=\"modal-content\">
																		<p>Are you sure you want to Confirm this transaction?</p>
																	</div>
																	<div class=\"modal-footer\">
																			<a href=\"#!\" class=\"modal-action modal-close waves-effect waves-green btn blue\">NO</a>
																			<input type=\"submit\" value=\"YES\"  name=\"credit$tran_id\" class=\"btn green\">
																	</div>
																</div>
																
																
															  <br/> <br/><br/>
															<a class=\"waves-effect waves-light btn red modal-trigger\" href=\"#modal1$tran_id\">DELETE</a>

																<div id=\"modal1$tran_id\" class=\"modal\">
																	<div class=\"modal-content\">
																		<p>Are you sure you want to delete this transaction?</p>
																	</div>
																	<div class=\"modal-footer\">
																			<a href=\"#!\" class=\"modal-action modal-close waves-effect waves-green btn blue\">NO</a>
																			<input type=\"submit\" value=\"YES\"  name=\"del$tran_id\" class=\"btn red\">
																	</div>
																</div>
				 
													</form>
	
											</div>
											
											<hr/>$tran_date
								</div>
    
					</li>  ";
	
								//delete button starts
						if(isset($_POST['del'.$tran_id]))  {

							$qw1RRqq = new run_query("UPDATE `transaction` set tran_status='PAYMENT FAILED' where  tran_id ='$tran_id' ");
							
	
							$site_email_send = "$site_email";		
							$welcome_email_subject = "Deposit of $ $trant_amt ($coin_amt $coin ) Approved | $site_name";
							$welcome_email_headers .= "Content-type:text/html;charset=UTF-8 \r\n";
							$welcome_email_headers .= "From: $site_name";	
							
							
							 $welcome_email_body = "
							
								<html>
								<head>
									<title> Hello $user_name, </title>
								</head>
								<body>
								 <b>Hello, $user_name<b> <br/> Hope we meet you well.
								<h2> Your Deposit of $ $trant_amt ($coin_amt $coin ) </h2>
								TRANSACTION ID: $trans_id <hr/>
								INVOICE ID: $tran_invoice <hr/>
								TRANSACTION HASH ID: $hash_id <br/>
								<i>Have Been Decliened we notice that your HASD ID is not
								 authentic and the transaction cannot be verified. </i></b><br/>
									<br/><br/>
								<hr/>
								For enquiries, <br/>
								Contact us on <br/>
							
								<b>
								$site_email <br/>
							
								$site_phone <br/>
								</b>
								Visit us on <br/>
							
								$site_link <br/><br/><br/>
							
								Regards,  $site_name.
								</body>
								</html>
							
								";
							
								 mail($user_email,$welcome_email_subject,$welcome_email_body,$welcome_email_headers);
								  
								 echo "<script>alert(\"TRANSACTION DELETED\");</script>"; 
							 
						echo "<script>window.location.replace(\"tra1.php\");</script>"; 


						 }
							
							//delete button ends
										


										//CREDITED BUTTON ENDS
										if(isset($_POST['credit'.$tran_id]))
										 {

										 	if($tran_invoice =="BROKEER-FEE"){

										 		$update_tran  = new run_query("UPDATE   `transaction` SET   tran_status='ACTIVE_C' where  tran_status='ACTIVE_R' and tran_username='$tran_username' ");


										 				$site_email_send = "$site_email";		
							$welcome_email_subject = "Deposit of $ $trant_amt ($coin_amt $coin ) Approved | $site_name";
							$welcome_email_headers .= "Content-type:text/html;charset=UTF-8 \r\n";
							$welcome_email_headers .= "From: $site_name";	
							
							
							 $welcome_email_body = "
							
								<html>
								<head>
									<title> Hello $user_name, </title>
								</head>
								<body>
								 <b>Hello, $user_name<b> <br/> Hope we meet you well.
								<h2> Your Payment of $ $trant_amt ($coin_amt $coin ) Brokeer fee (12%) </h2>
								<b> TRANSACTION ID: $tran_invoice <br/>
								INVOICE ID : $tran_id <br/>
								TRANSACTION HASH ID: $hash_id <br/>
								<i>Have Been Approved Congratulations!!!. </i></b><br/>
							<br/><br/>
								<hr/>
								For enquiries, <br/>
								Contact us on <br/>
							
								<b>
								$site_email <br/>
							
								$site_phone <br/>
								</b>
								Visit us on <br/>
							
								$site_link <br/><br/><br/>
							
								Regards,  $site_name.
								</body>
								</html>
							
								";
							
								 mail($user_email,$welcome_email_subject,$welcome_email_body,$welcome_email_headers);
								 
														
																
														  
														   	echo "<script>alert(\"CREDITED SUCCESSFULLY FOR BROKEER FEE\");</script>"; 
											 
															echo "<script>window.location.replace(\"tra1.php\");</script>"; 


										 	}else{
											
									$update_tran  = new run_query("UPDATE   `transaction` SET start_tran_date='$reg_Date',tran_exp_date='$deposite_exp_date',  tran_status='CONFIRMED' where  tran_id ='$tran_id' ");
									$update_user  = new run_query("UPDATE   `users` SET bal=bal+$trant_amt where  user_id ='$user_id' ");
							
									$site_email_send = "$site_email";		
							$welcome_email_subject = "Deposit of $ $trant_amt ($coin_amt $coin ) Approved | $site_name";
							$welcome_email_headers .= "Content-type:text/html;charset=UTF-8 \r\n";
							$welcome_email_headers .= "From: $site_name";	
							
							
							 $welcome_email_body = "
							
								<html>
								<head>
									<title> Hello $user_name, </title>
								</head>
								<body>
								 <b>Hello, $user_name<b> <br/> Hope we meet you well.
								<h2> Your Deposit of $ $trant_amt ($coin_amt $coin ) </h2>
								<b> TRANSACTION ID: $tran_invoice <br/>
								INVOICE ID : $tran_id <br/>
								TRANSACTION HASH ID: $hash_id <br/>
								<i>Have Been Approved Congratulations!!!. </i></b><br/>
							<br/><br/>
								<hr/>
								For enquiries, <br/>
								Contact us on <br/>
							
								<b>
								$site_email <br/>
							
								$site_phone <br/>
								</b>
								Visit us on <br/>
							
								$site_link <br/><br/><br/>
							
								Regards,  $site_name.
								</body>
								</html>
							
								";
							
								 mail($user_email,$welcome_email_subject,$welcome_email_body,$welcome_email_headers);
								 
														
																
														  
														   	echo "<script>alert(\"CREDITED SUCCESSFULLY\");</script>"; 
											 
															echo "<script>window.location.replace(\"tra1.php\");</script>"; 

										}

									}
										   
										 //CREDITED BUTTON ENDS
										 
									  
												
									

				}
   
   ?>
   
   
  </ul>
    

			 </div>
			 
			

			 
             
          </div>
        </div>
		
	
</div>
		
		</div>
		
	   
			</div>


   


   </div>

   </main>
 

<?php     

require "script/mlc/home_footer.php";
?>

</body>

</html>
        