<?php

function btc_usd($amt){
	
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


?>