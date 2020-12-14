<?php
 
if( !AdminLoggedin() ){

	echo "<script>	window.location.replace(\"index.php\"); </script>";
}

 $Admin_data_id = $_SESSION['Admin_id'];
	
	 $admin = new run_query( "select * from admin where admin_id = '$Admin_data_id' " );
$Admin_data =	$admin->result();
	extract($Admin_data );
	
	



	

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



 
?>	

<nav>
    <div class="nav-wrapper ">
      <a href="../index.php"  class="brand-logo dip_font"><?php echo $site_name; ?></a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
		
	   <li><a href="tra1.php" class="dip_font white-text">Transaction</a></li>
		
	         <li><a href="user.php" class="dip_font white-text">Users </a></li>
		 <li><a href="text.php" class="dip_font white-text">Testimony </a></li>
		<li><a href="../logout.php" class="dip_font white-text ">Log Out</a></li>
 
      </ul>
    </div>
  </nav>
        