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

<title>Deposit History -- <?= $site_name; ?></title>

<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<?php

include('../frm/header.php');


?>

<div class="page-wrapper">



<div class="container-fluid">



<div class="row page-titles">
<div class="col-md-5 align-self-center"><br><br>
<h3 class="text-themecolor text-uppercase">Deposit History</h3>
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
<li class="breadcrumb-item active">Deposit History</li>
</ol>
</div>
</div>

 



<div class="row">
<div class="col-12">
<div class="card">
<div class="card-body">
<h4 class="card-title">Deposit History</h4>
<h6 class="card-subtitle"></h6>
<div class="table-responsive mt-40">
<table id="example23" class="display nowrap table table-hover table-striped table-bordered">
<thead>
<tr>
<td>S/N</td>
<th>Deposit Ref</th>
<th>Amount</th>
<th>Coin Equ.</th>
<th>Coin</th>
<th>Status</th>
<th>Action</th>
</tr>
</thead>
<tbody>

<?php 
								$deposite_tran = new run_query("select * from transaction where tran_user_id = '$user_id' and tran_desc ='DEPOSIT'  order by tran_id desc ");
								$no = 1;
							while(	$deposite_tran_data =	$deposite_tran->result() ){
							
								extract($deposite_tran_data );
								
								echo"
							
								

						<tr>
					<td>$no</td>
					<td><a href='#! class='badge badge-sm badge-primary' data-toggle='tooltip' title='View Deposit'>$tran_invoice</a></td>
					<td> $trant_amt</td>
					<td> $coin_amt</td>
					<td> $coin</td>
					<td>
					<span class='badge badge-danger'>$tran_status</span>
					</td>
					<td><a href='#!' class='btn btn-sm btn-primary' data-toggle='tooltip' title='Transaction Hash ID: $hash_id'><i class='fa fa-eye'></i></a></td>
					</tr>
								
								";
								$no++;
                            }	
								
							
							?>
							
							

</tbody>
<tfoot>
<tr>
<td>S/N</td>
<th>Deposit Ref</th>
<th>Amount</th>
<th>Coin Equ.</th>
<th>Coin</th>
<th>Status</th>
<th>Action</th>
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