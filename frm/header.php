
<?php


  

  $user_data_id = $_SESSION['user_id'];
  
  $user = new run_query("select * from users where user_id = '$user_data_id' and user_status ='Active'");
  $user_data =	$user->result();
  extract($user_data );
  

if(isset($_POST['close_not'])  ) { 

$query121wx =  new run_query( "UPDATE `users` SET `user_notification` ='read'  where user_id='$user_id' ");
echo "<script>window.location.replace(\"account.php\");</script>"; 
    
}




   if( isset($_POST['testimony'])  ){

                      $test_msg = addslashes(htmlentities($_POST['test_msg']));

                      $query211er = new run_query("INSERT into testimony set test_user_id='$user_id',  test_user_email='$user_email', testimony='$test_msg', test_user_name='$user_name',  test_date='$reg_Date' " ); 											
              
                  $query121e =new run_query("UPDATE `users` SET `testimony` ='ok' where `user_id`='$user_id'   ");
                          echo "<script>alert(\" TESTIMONY SENT!!! \");</script>"; 
                   echo "<script>window.location.replace(\"account.php\");</script>"; 
  
              }
              
  




function usd($amt){
   // <h2 class="counter">$<span class="counter-count"></h2>
	
	$getrate = "https://api.alternative.me/v2/ticker/?convert=USD";

$price = file_get_contents($getrate);
$result = json_decode($price, true);

// BTC in USD
$result = $result['data'][1]['quotes']['USD']['price'];

$quantity = $amt;
$value = $quantity * $result;
	
	return $value;
}



function eth_usd($amt){
	
	$getrate = "https://api.alternative.me/v2/ticker/?convert=USD";

$price = file_get_contents($getrate);
$result = json_decode($price, true);

// BTC in USD
$result = $result['data'][1027]['quotes']['USD']['price'];

$quantity = $amt;
$value = $quantity * $result;
	
	return $value;
}




function usd_eth($amt){
	
	$getrate = "https://api.alternative.me/v2/ticker/?convert=USD";

$price = file_get_contents($getrate);
$result = json_decode($price, true);

// BTC in USD
$result = $result['data'][1027]['quotes']['USD']['price'];

$quantity = $amt;
$value = $quantity / $result;
	
	return $value;
}



function usd_btc($amt){
	
	$getrate = "https://api.alternative.me/v2/ticker/?convert=USD";

$price = file_get_contents($getrate);
$result = json_decode($price, true);

// BTC in USD
$result = $result['data'][1]['quotes']['USD']['price'];

$quantity = $amt;
$value = $quantity / $result;
	
	return $value;
}




function xrp_usd($amt){
	
	$getrate = "https://min-api.cryptocompare.com/data/price?fsym=XRP&tsyms=BTC,USD,EUR";

$price = file_get_contents($getrate);
$result = json_decode($price, true);

$xrp = $amt * $result['USD'];

return $xrp;

}



function usd_xrp($amt){
	
	$getrate = "https://min-api.cryptocompare.com/data/price?fsym=USD&tsyms=BTC,XRP,EUR";

$price = file_get_contents($getrate);
$result = json_decode($price, true);

$usd = $amt * $result['XRP'];

return $usd;

}




function ltc_usd($amt){
	
	$getrate = "https://min-api.cryptocompare.com/data/price?fsym=LTC&tsyms=BTC,USD,EUR";

$price = file_get_contents($getrate);
$result = json_decode($price, true);

$ltc = $amt * $result['USD'];

return $ltc;

}



function usd_ltc($amt){
	
	$getrate = "https://min-api.cryptocompare.com/data/price?fsym=USD&tsyms=BTC,LTC,EUR";

$price = file_get_contents($getrate);
$result = json_decode($price, true);

$usd = $amt * $result['LTC'];

return $usd;

}



?>

<link rel="shortcut icon" href="../assets/home/images/tivo.png" type="image/x-icon">
<link rel="icon" href="../assets/images/logo/logo.png" type="image/x-icon">

<link href="../assets/dashboard/assets/vendors/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<link href="../assets/assets/vendors/perfect-scrollbar/css/perfect-scrollbar.html" rel="stylesheet">
<link href="../assets/assets/css/basic.html" rel="stylesheet">
<link href="../assets/dashboard/scss/icons/font-awesome/css/font-awesome.min.css" rel="stylesheet">
<link href="../assets/dashboard/scss/icons/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">
<link href="../assets/dashboard/scss/icons/weather-icons/css/weather-icons.min.css" rel="stylesheet">
<link href="../assets/dashboard/scss/icons/iconmind/iconmind.css" rel="stylesheet">
<link href="../assets/dashboard/scss/icons/themify-icons/themify-icons.css" rel="stylesheet">
<link href="../assets/dashboard/scss/icons/flag-icon-css/flag-icon.min.css" rel="stylesheet">
<link href="../assets/dashboard/scss/icons/material-design-iconic-font/css/materialdesignicons.min.css" rel="stylesheet">
<link href="../assets/dashboard/css/animate.css" rel="stylesheet">
<link href="../assets/dashboard/css/spinners.css" rel="stylesheet">






<link href="../assets/dashboard/css/style.css" rel="stylesheet">

<link href="../assets/dashboard/css/colors/default.css" id="theme" rel="stylesheet">



<link href="../assets/dashboard/assets/vendors/morrisjs/morris.css" rel="stylesheet">

<link href="../assets/dashboard/assets/vendors/c3-master/c3.min.css" rel="stylesheet">

<link href="../assets/dashboard/css/pages/float-chart.css" rel="stylesheet">

<link href="../assets/dashboard/css/pages/file-upload.css" rel="stylesheet">

<link href="../assets/dashboard/css/pages/pricing-page.css" rel="stylesheet">

<link href="../assets/dashboard/css/colors/default.css" id="theme" rel="stylesheet">



<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->



<link href="a/toastr.min.css" rel="stylesheet" />
<link href="a/sweetalert2.min.css" rel="stylesheet" />
</head>
<body class="fix-header card-no-border fix-sidebar">



<div class="preloader">
<div class="loader">
<div class="lds-roller">
<div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
</div>
</div>



<div id="main-wrapper">



<header class="topbar">
<nav class="navbar top-navbar navbar-expand-md navbar-light">



<div class="navbar-header">
<a class="navbar-brand" href="../">
<b>


<img src="../assets/images/logo/logo.png" alt="homepage" class="dark-logo" style="width:70px;" />
</b>

<span>

<img src="../assets/images/logo/logo.png" style="width:70px;" class="light-logo" alt="homepage" /></span> </a>
</div>
  


<div class="navbar-collapse">



<ul class="navbar-nav mr-auto">

<li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up waves-effect waves-dark" href="javascript:void(0)"><i class="sl-icon-menu"></i></a> </li>
<li class="nav-item"> <a class="nav-link sidebartoggler hidden-sm-down waves-effect waves-dark" href="javascript:void(0)"><i class="sl-icon-menu"></i></a> </li>

</ul>



<ul class="navbar-nav my-lg-0">



<li class="nav-item dropdown u-pro">
<a class="nav-link dropdown-toggle waves-effect waves-dark profile-pic" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="hidden-md-down"> <?php echo $user_name; ?>  &nbsp;<i class="fa fa-angle-down"></i></span> </a>
<div class="dropdown-menu dropdown-menu-right animated fadeIn">
<ul class="dropdown-user">

<li role="separator" class="divider"></li>
<li><a href="profile.php"><i class="ti-user"></i> My Profile</a></li>
<li><a href="account.php"><i class="ti-settings"></i> Account Setting</a></li>
<li role="separator" class="divider"></li>
<li><a href="../logout.php"><i class="fa fa-power-off"></i> Logout</a></li>
</ul>
</div>
</li>
</ul>
</div>
</nav>
</header>



<aside class="left-sidebar">

<div class="scroll-sidebar">

<nav class="sidebar-nav">
<ul id="sidebarnav">
<li class="nav-small-cap">MAIN</li>
<li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="fa fa-dashboard mr-1"></i> <span class="hide-menu">Dashboard</span></a>
<ul aria-expanded="false" class="collapse">
<li><a href="dashboard.php">Dashboard</a></li>
</ul>
</li>
<li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="fa fa-bank mr-1"></i> <span class="hide-menu">Deposits</span></a>
<ul aria-expanded="false" class="collapse">
<li><a href="new_deposit.php">New Deposit</a></li>
<li><a href="deposits.php">Deposit List</a></li>
</ul>
</li>
<li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="fa fa-recycle mr-1"></i> <span class="hide-menu">Investments</span></a>
<ul aria-expanded="false" class="collapse">
<li><a href="new_investment.php">New Investment</a></li>
<li><a href="investments.php">Investment History</a></li>
</ul>
</li>
<li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="fa fa-money mr-1"></i> <span class="hide-menu">Withdrawals</span></a>
<ul aria-expanded="false" class="collapse">
<li><a href="investments.php">New Withdrawal</a></li>
<!--li><a href="new_withdrawal.php">New Withdrawal</a></li-->
<li><a href="withdrawals.php">Withdrawal History</a></li>
</ul>
</li>
<li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="fa fa-user mr-1"></i> <span class="hide-menu">Profile</span></a>
<ul aria-expanded="false" class="collapse">
<li><a href="profile.php">Profile</a></li>
<li><a href="referrals.php">Referrals</a></li>
</ul>
</li>
<li> <a class=" waves-effect waves-dark" href="../logout.php" aria-expanded="false"><i class="fa fa-sign-out mr-1"></i> <span class="hide-menu">Logout</span></a>
</li>
</ul>
</nav>

</div>

</aside>








