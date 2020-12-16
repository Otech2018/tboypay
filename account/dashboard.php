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
<meta name="keywords" content="consulting, accountant, advisor, audit, beaver builder, broker, business, clean, company, consulting, corporate, finance, financial, insurance, trader">
<meta name="author" content="<?= $site_name; ?>">
<title>Dashboard -- <?= $site_name; ?></title>

<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<?php

include('../frm/header.php');



$total_cashout = new run_query("select sum(trant_amt) as total_cash_out from transaction where  tran_desc ='CASH_OUT'   and tran_user_id='$user_id'  ");
								$total_cashout_data =	$total_cashout->result();
							extract($total_cashout_data );
				$all_cashout = 		$total_cash_out;			
			
			
			
				$total_deposit = new run_query("select sum(trant_amt) as total_deposit_ from transaction where  tran_desc ='DEPOSIT' and tran_status='CONFIRMED' and tran_user_id='$user_id'  ");
								$total_deposit_data =	$total_deposit->result();
							extract($total_deposit_data );
			$all_deposit = 		$total_deposit_ ;	



			$pending_invest = new run_query("select sum(trant_amt) as pending_invest from transaction where  tran_desc ='INVESTMENT' and tran_status='ACTIVE' and tran_user_id='$user_id'  ");
								$pending_invest_d =	$pending_invest->result();
							extract($pending_invest_d );
			$pending_invest_da = 		$pending_invest ;


			$co_invest = new run_query("select sum(trant_amt) as co_invest from transaction where  tran_desc ='INVESTMENT'  and tran_user_id='$user_id'  ");
								$co_invest_c =	$co_invest->result();
							extract($co_invest_c );
			$comp_invest_da = 		$co_invest ;

			


?>






 


<div class="page-wrapper">



<div class="container-fluid">



<div class="row page-titles">
<div class="col-md-5 align-self-center"><br><br>
<h3 class="text-themecolor text-uppercase">Dashboard</h3>
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
<li class="breadcrumb-item active">Dashboard</li>
</ol>
</div>
</div>






<div class="row counter">

<div class="col-lg-3 col-md-3">
<div class="card">
<div class="card-body">
<div class="d-flex pa-10 no-block">
<div class="align-slef-center ">
<h2 class="counter"> $ <span class="counter-count"> <?php echo $bal; ?></span>   </h2>
<h6 class="text-muted mb-0 text-uppercase">ACCOUNT BALANCE</h6>
</div>
<div class="align-self-center display-6 ml-auto"> <div id="sparkline12" class="text-center w-100"></div></div>
</div>
</div>
</div>
</div>


<div class="col-lg-3 col-md-3">
<div class="card">
<div class="card-body">
<div class="d-flex pa-10 no-block">
<div class="align-slef-center ">
<h2 class="counter">$<span class="counter-count">0</span></h2>
<h6 class="text-muted mb-0 text-uppercase">TOTAL PROFIT</h6>
</div>
<div class="align-self-center display-6 ml-auto"> <div id="sparkline12" class="text-center w-100"></div></div>
</div>
</div>
</div>
</div>



<div class="col-lg-3 col-md-3">
<div class="card">
<div class="card-body">
<div class="d-flex pa-10 no-block">
<div class="align-slef-center ">
<h2 class="counter">$<span class="counter-count"><?php echo $all_cashout; ?></span></h2>
<h6 class="text-muted mb-0 text-uppercase">TOTAL WITHDRAWALS</h6>
</div>
<div class="align-self-center display-6 ml-auto"> <div id="sparkline12" class="text-center w-100"></div></div>
</div>
</div>
</div>
</div>





<div class="col-lg-3 col-md-3">
<div class="card">
<div class="card-body">
<div class="d-flex pa-10 no-block">
<div class="align-slef-center ">
<h2 class="counter">$<span class="counter-count"> <?php echo $user_ref_bonus; ?></span>  </h2>
<h6 class="text-muted mb-0 text-uppercase">TOTAL REFERRAL BALANCE</h6>
</div>
<div class="align-self-center display-6 ml-auto"> <div id="sparkline12" class="text-center w-100"></div></div>
</div>
</div>
</div>
</div>




<div class="col-lg-3 col-md-3">
<div class="card">
<div class="card-body">
<div class="d-flex pa-10 no-block">
<div class="align-slef-center ">
<h2 class="counter">$<span class="counter-count"> <?php echo $comp_invest_da; ?></span> </h2>
<h6 class="text-muted mb-0 text-uppercase">COMPLETED INVESTMENT</h6>
</div>
<div class="align-self-center display-6 ml-auto"> <div id="sparkline12" class="text-center w-100"></div></div>
</div>
</div>
</div>
</div>


<div class="col-lg-3 col-md-3">
<div class="card">
<div class="card-body">
<div class="d-flex pa-10 no-block">
<div class="align-slef-center ">
<h2 class="counter">$<span class="counter-count">0</h2>
<h6 class="text-muted mb-0 text-uppercase">PENDING WITHDRAWALS</h6>
</div>
<div class="align-self-center display-6 ml-auto"> <div id="sparkline12" class="text-center w-100"></div></div>
</div>
</div>
</div>
</div>  



<div class="col-lg-3 col-md-3">
<div class="card">
<div class="card-body">
<div class="d-flex pa-10 no-block">
<div class="align-slef-center ">
<h2 class="counter">$<span class="counter-count"><?php echo $all_cashout; ?></span></h2>
<h6 class="text-muted mb-0 text-uppercase">COMPLETED WITHDRAWALS</h6>
</div>
<div class="align-self-center display-6 ml-auto"> <div id="sparkline12" class="text-center w-100"></div></div>
</div>
</div>
</div>
</div>

<div class="col-lg-3 col-md-3">
<div class="card">
<div class="card-body">
<div class="d-flex pa-10 no-block">
<div class="align-slef-center ">
<h2 class="counter">$<span class="counter-count">0</span></h2>
<h6 class="text-muted mb-0 text-uppercase">PENDING Withdrawals </h6>
</div>
<div class="align-self-center display-6 ml-auto"> <div id="sparkline12" class="text-center w-100"></div></div>
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