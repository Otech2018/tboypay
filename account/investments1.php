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
<th>Action</th>
<th>Investment Ref</th>
<th>Amount</th>
<th>Daily Growth</th>
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
									<input  style='width:100px;' type='number' name='coin$tran_id' required value='' /> <br/>
									
									<button type='submit'  name='cash_out$tran_id' class='btn btn-sm btn-success' >ADD</button> 
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
								<th>$coin</th>
								<th>$$tran_roi</th>
								<th><span class='badge badge-primary'><i class='fa fa-spinner'></i> $tran_status</span> </th>
								<th>$start_tran_date  </th>
								<th>$tran_exp_date  </th>
								</tr>	
								
								";
								$no++;
								
								
									if(isset($_POST['cash_out'.$tran_id]))  {
										$coin = addslashes(htmlentities($_POST['coin'.$tran_id]));
    
							$qw1RRqq = new run_query("UPDATE   `transaction`  set  tran_withdraw_amt=tran_withdraw_amt+$tran_current_bal_u  where  tran_id ='$tran_id' ");
							
							$timer_end  = date('Y-m-d H:i:s',strtotime('48 hours') );
							$timer_start  = date('Y-m-d H:i:s' );
							$tran_invoice  = "WIT-".date('iYdmhs' );
							$cash_out = new run_query("INSERT INTO    `transaction`  set coin='$coin',  tran_user_id = '$user_id', tran_invoice='$tran_invoice',
							tran_email='$user_email', tran_username='$user_name', trant_amt='$tran_current_bal_u',start_tran_date='$timer_start', tran_exp_date='$timer_end',  tran_date='$reg_Date', tran_status='PENDING', tran_desc ='CASH_OUT' ");
							
								$email_amt = $trant_amt;
							 
								

								
									  
								 echo "<script>alert(\"TRANSACTION SET SUCCESSFULL!!! \");</script>"; 
							 
						echo "<script>window.location.replace(\"dashboard.php\");</script>"; 


						 }
						 
						 
							}
							
							?>


</tbody>
<tfoot>
<tr>
<td>S/N</td>
<th>Action</th>
<th>Investment Ref</th>
<th>Amount</th>
<th>Daily Growth</th>
<th>Expected Profit($)</th>
<th>Status</th>
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