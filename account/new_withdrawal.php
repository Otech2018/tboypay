
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
<title>New Withdrawal Request -- <?= $site_name; ?></title>

<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">


<?php

include('../frm/header.php');


?>




<div class="page-wrapper">



<div class="container-fluid">



<div class="row page-titles">
<div class="col-md-5 align-self-center"><br><br>
<h3 class="text-themecolor text-uppercase">New Withdrawal Request</h3>
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
<li class="breadcrumb-item active">New Withdrawal Request</li>
</ol>
</div>
</div>







<div class="row">
<div class="col-lg-12">
<div class="card">
<div class="card-header bg-info">
<h4 class="mb-0 text-white">Withdrawal Form</h4>
</div>
<div class="card-body">
<form action="new_withdrawal/authenticate" method="post" accept-charset="utf-8">


<div class="form-body">
<h3 class="card-title">Withdrawal Info</h3>
<hr>
<div class="row pt-20">
<div class="col-md-12">
<div class="form-group">
<label class="control-label">Name</label>
<input type="text" id="firstName" class="form-control form-control-lg" value="" disabled>
</div>
</div>
</div>
<div class="row pt-20">
<div class="col-md-12">
<div class="form-group">
<label class="control-label">Pending Withdrawals ($)</label>
<input type="text" id="firstName" class="form-control form-control-lg" value="0.00" disabled>
</div>
</div>
</div>
<div class="row pt-20">
<div class="col-md-12">
<div class="form-group">
<label class="control-label">Amount</label>
<input type="number" id="firstName" class="form-control form-control-lg" placeholder="Amount To Withdraw" name="amount">
</div>
</div>
</div>
<div class="row pt-20">
<div class="col-md-12">
<div class="form-group">
<label class="control-label">Withdraw From</label>
<select class="form-control form-control-lg" name="withdraw_from">
<option value="">Select Where to Withdraw From</option>
<option value="1">Investment</option>
<option value="2">Referral Balance</option>
</select>
</div>
</div>
</div>
<div class="row pt-20" style="display: none;" id="investment">
<div class="col-md-12">
<div class="form-group">
<label class="control-label">Investment</label>
<select class="form-control form-control-lg" name="investment">
<option value="">Select Investment to Withdraw from</option>
</select>
</div>
</div>
</div>
<div class="row pt-20" style="display: none;" id="investment_from">
<div class="col-md-12">
<div class="form-group">
<label class="control-label">Withdrawal Subtype</label>
<select class="form-control form-control-lg" name="withdraw_subfrom">
<option value="">Select Withdrawal Subtype</option>
<option value="1">Profit</option>
<option value="2">Complete Investment</option>
 </select>
<small>If an Investment is selected, the subtype depicts which form that would be taken. You either withdraw from Profit or total.</small>
</div>
</div>
</div>
<div class="row pt-20">
<div class="col-md-12">
<div class="form-group">
<label class="control-label">Withdrawal Account</label>
<select class="form-control form-control-lg" name="withdrawal_account">
<option>Select Account to Withdraw to</option>
<option value="Btc">Bitcoin</option>
<option value="Eth">Ethereum</option>
</select>
</div>
</div>
</div>
<div class="form-actions text-center">
<button type="reset" class="btn btn-inverse">Cancel</button>
<button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Withdraw</button>
</div>
</form> </div>
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