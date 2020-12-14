<?php

//dtatbase connection_aborted


session_start(); 




class connect{

	public  $host = 'localhost';
		
			
	public  $username = 'root';
           
	public  $password = '';
		
			public  $db ='btc_12';	
			

 //     public  $username = 'wisedome_kretoinvestment';
	// public  $password = 'F._ukYXS;uc3';
	// public  $db ='wisedome_kretoinvestment';	
							
		
	}
	

	
		class run_query extends connect{
		
		public function __construct( $query_mlc){
			$this->connect_db = new PDO("mysql:host=$this->host;dbname=$this->db",$this->username,$this->password);

			$this->query_run = $this->connect_db ->query($query_mlc);
			$this->num_rows = $this->query_run->rowCount();
			
			
			}


			public	 function result(){
			$this->result =  $this->query_run ->fetch(PDO::FETCH_BOTH);
			
			return $this->result;
			}
		
	
	}


//site variables
$reg_Date = date('Y-m-d');
$deposite_exp_date = date('Y-m-d',strtotime('7 days') );
$site_name = "KRETO";

$site_email = "info@kretoinvestment.com";

$site_phone = "+13056977177";

$site_rc = "3027032";

$start_date = "DEC 17, 2019";



// $site_lowest_amt = 5000;











//days online

$todays_date = date('Y-m-d H:i:s');


$start_date_c = '2019-12-17 00:00:00';


$t1 = strtotime($start_date_c);

$t2 = strtotime($todays_date);



$diff = $t2 -$t1;


$days_online_d =  $diff  /86400;
 
$days_online = round($days_online_d);



//login function

function loggedin(){
    if(isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])){
        return true;
    }else{
     return false;
    }
}


function AdminLoggedin(){
  if(isset($_SESSION['Admin_id']) && !empty($_SESSION['Admin_id'])){
        return true;
    }else{
     return false;
    }
}



 $settings = new run_query( "select * from  settings " );
$settings_data =	$settings->result();
	extract($settings_data);
	
	

	
	$total_cashout = new run_query("select sum(trant_amt) as total_cash_out from transaction where  tran_desc ='CASH_OUT'  ");
								$total_cashout_data =	$total_cashout->result();
							extract($total_cashout_data );
				$all_cashout = 		$total_cash_out + $total_cashout_manipulation;			
			
			
			
				$total_deposit = new run_query("select sum(trant_amt) as total_deposit_ from transaction where  tran_desc ='DEPOSIT'  ");
								$total_deposit_data =	$total_deposit->result();
							extract($total_deposit_data );
			$all_deposit = 		$total_deposit_ + $total_deposit_manipulation;			





			$min_amt_dep_btc = "700";
			$min_amt_dep_eth = "2000";
			
			

								
								
?>