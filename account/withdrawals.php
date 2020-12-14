<?php

 include('../inc/settings.php'); 


if( !loggedin() ){

    echo "<script> window.location.replace(\"../login.html\"); </script>";
  }

?>




<!DOCTYPE html>
<html>


<head>
<meta charset="utf-8">
<meta name="description" content="Kreto Investment is an investment company located at 12 Golden Square, Aberdeen, Aberdeenshire, AB10 1RB, United Kingdom . Our headquarters are located in Calle Diputada Laura Rodríguez, 142, RM, La Reina Riga, Chile. It was incorporated on the 17th of August, 2017, which aims to reach out to Everyone, offering a guarnteed return on every investment which cuts across all social classes so that no one is left behind. Kreto Investments is an investment platform where returns are gotten as early as Seven(7) days with a guaranteed return; People help People. We engage in real estate investment and development 30 years of experience in cunstruction services, crypto currency investment, architecture, manufacturing , structural engineering and Forex trading">
<meta name="keywords" content="consulting, accountant, advisor, audit, beaver builder, broker, business, clean, company, consulting, corporate, finance, financial, insurance, trader">
<meta name="keywords" content="consulting, accountant, advisor, audit, beaver builder, broker, business, clean, company, consulting, corporate, finance, financial, insurance, trader">
<meta name="author" content="Kreto Investments">
<title>Withdrawal History -- Kreto Investments</title>

<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">


<?php

include('../frm/header.php');


?>



<div class="page-wrapper">



<div class="container-fluid">



<div class="row page-titles">
<div class="col-md-5 align-self-center"><br><br>
<h3 class="text-themecolor text-uppercase">Withdrawal History</h3>
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
<li class="breadcrumb-item active">Withdrawal History</li>
</ol>
</div>
</div>






<div class="row">
<div class="col-12">
<div class="card">
<div class="card-body">
<h4 class="card-title">Withdrawal History</h4>
<h6 class="card-subtitle"></h6>
<div class="table-responsive mt-40">
<table id="example23" class="display nowrap table table-hover table-striped table-bordered">
<thead>
<tr>
<td>S/N</td>
<th>Withdrawal Ref</th>
<th>Date Requested</th>
<th>Amount</th>
<th>Status</th>
<th>Timer</th>




</tr>
</thead>
<tbody>

<?php 
							$cashout_tran = new run_query("select * from transaction where tran_user_id = '$user_id' and tran_desc ='CASH_OUT' order by tran_id desc limit 20 ");
								$no_c = 1;
							while(	$cashout_tran_data =	$cashout_tran->result() ){
							
								extract($cashout_tran_data );
								
								$timer_start  = date('Y-m-d H:i:s' );
								$t1 = strtotime($timer_start);
								$t2 = strtotime($tran_exp_date);
								$diff = $t2 -$t1;
								$days_online_d =  $diff  /3600;
								$timer = round($days_online_d) . "(HRS)";
								
								
								if( $timer <= 0){
								$timer ="PENDING";
								} 
								
								
								if( $tran_status=='PAID'){
								
								$timer  = $tran_status ;
								}
								
						echo "
								<tr>
							<td>$no_c </td>
							<td>$tran_invoice </td>
							<td> $tran_date  </td>
							<td> $trant_amt </td>
							<td>  $tran_status  </td>
							<td> $timer   </td>
							</tr>
								
								
								
								";
									$no_c ++;
							
							}
						
							?>
							


</tbody>
<tfoot>
<tr>
    <td>S/N</td>
    <th>Withdrawal Ref</th>
    <th>Date Requested</th>
    <th>Amount</th>
    <th>Status</th>
    <th>Timer</th>
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
© 2020 Kreto Investments  </footer>



</div>



</div>






<?php

include('../frm/footer.php');


?>
</body>
</html>