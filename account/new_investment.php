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
<title>New Investment -- Kreto Investments</title>

<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    
<?php

include('../frm/header.php');

if( isset($_POST['invest_btn'])){

    $package = addslashes(htmlentities($_POST['package']));
    $fund_amt = addslashes(htmlentities($_POST['amount']));
    

    if( $package=='1'){
        $min_amt = 200;
        $max_amt =4999;
        $roi = ($fund_amt  * 0.315 ) + $fund_amt; 
		$package ="SILVER";
		$coin ="4.5%";

    }else if( $package=='2'){
        $min_amt = 5000;
        $max_amt =9999;
        $roi = ($fund_amt  * 0.406 ) + $fund_amt; 
        $package ="GOLD";
		$coin ="5.8%";
        
    }else{
        $min_amt = 10000;
        $max_amt =9999999999999999999999999999;
        $roi = ($fund_amt  * 0.525 ) + $fund_amt; 
        $package ="PLATINUM";
		$coin ="7.5%";
        
    }
    
	


    if( is_numeric($fund_amt) ){

        if( $fund_amt < $min_amt ||  $fund_amt > $max_amt  ){
            echo "<script>alert(\"Invalid Amount, Please Make Sure the 
            Amount Entered is Inline With the Package You Choose!!!\"); 
            window.location.replace(\"../account/new_investment.php\"); </script>";

        }else{

           
           if( $fund_amt <= $bal){
                
                $tran_pop = $package;
                $daily_p = $roi / 7;
                $tran_invoice = "INV-".date('hismY');
                $daily_p = number_format( $daily_p,4);

                $qw = "INSERT into transaction set tran_user_id='$user_id',  tran_email='$user_email',
                 tran_username='$user_name', tran_desc='INVESTMENT', trant_amt='$fund_amt', 
                 tran_status='ACTIVE', tran_date='$reg_Date', start_tran_date='$reg_Date', 
                 tran_exp_date='$deposite_exp_date', tran_roi='$roi',
                 tran_daily_growth='$daily_p',tran_invoice='$tran_invoice',tran_dep_name='$package',
                 tran_withdraw_amt='0', coin='$coin' "; 

                $deposite_user =new run_query("Update users set bal=bal-$fund_amt where user_id='$user_id' ");
                $deposite_run =new run_query($qw);
                //referral Bonus
								 $gen_1 = $fund_amt * 0.1;
								 if( $user_referrer !='' ){
							$ref_bon_query  = new run_query("SELECT * FROM user_ref where user_ref_email='$user_name'  ");
							
								$ref_bon_query_dta =	$ref_bon_query->result();
							
								extract($ref_bon_query_dta );
								
							$gen1_query  = new run_query(" update `users` SET user_ref_bonus = user_ref_bonus + $gen_1 WHERE user_name='$gen1_email' ");

    $site_email_send = "info@KretoInvestment.com";		
    $welcome_email_subject = "New Investment of $ $fund_amt | KretoInvestment";
    $welcome_email_headers .= "Content-type:text/html;charset=UTF-8 \r\n";
    $welcome_email_headers .= "From: $site_name";	
    
    
     $welcome_email_body = "
    
        <html>
        <head>
            <title> Hello $user_name, </title>
        </head>
        <body>
         <b>Hello, $user_name<b> <br/> Hope we meet you well.
        <h2> New Investment of $ $fund_amt  </h2>
        We have Recieve your New Investment with the following  Details <br/>
        <b> TRANSACTION ID: $tran_invoice <br/>
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
            
							
                                }	
                                echo "<script>alert(\"Investment Started Successfully!!!\"); window.location.replace(\"../account/new_investment.php\"); </script>";
        

            }else{
                echo "<script>alert(\"Insuficient Amount, You do not have enough money for this Investment!!!\"); window.location.replace(\"../account/new_investment.php\"); </script>";

            }
                                                 
        }


    }else{
        echo "<script>alert(\"Invalid Amount, Please Use Only Numbers !!!\"); window.location.replace(\"../account/new_investment.php\"); </script>";
    }
    

}


?>







<div class="page-wrapper">



<div class="container-fluid">




<div class="row page-titles">
<div class="col-md-5 align-self-center"><br><br>
<h3 class="text-themecolor text-uppercase">New Investment</h3>
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
<li class="breadcrumb-item active">New Investment</li>
</ol>
</div>
</div>




<form action="" method="post" accept-charset="utf-8">



<div class="row">
<div class="col-12 mt-30 text-center">
<h4 class="mb-0">INVESTMENT PACKAGES</h4>
<br><br>
</div>
<div class="col-md-6">
<div class="card card-inverse card-danger">
<div class="card-header">
<h4 class="mb-0 text-dark text-center">Silver Plan</h4></div>
<div class="card-body">
<div class="table-responsive">
<table class="table">
<thead>
<tr>
 <th></th>
<th>Roi</th>
<th>Minimum Investment</th>
<th>Maximum Investment</th>
<th>Return Type</th>
<th>Duration</th>
</tr>
</thead>
<tbody>
<tr>
<td>
<div class="form-group">
<input type="radio" name="package" required class="form-control-input" value="1">
<label class="custom-control-label" for="customRadio5"></label>
</div>
</td>
<td>4.5%</td>
<td>$200.00</td>
<td>$4,999.00</td>
<td>Daily</td>
<td><span class="label label-danger">7 Days</span> </td>
</tr>
</tbody>
</table>
</div>
</div>
</div>
</div>





<div class="col-md-6">
<div class="card card-inverse card-danger">
<div class="card-header">
<h4 class="mb-0 text-dark text-center">Gold Plan</h4></div>
<div class="card-body">
<div class="table-responsive">
<table class="table">
<thead>
<tr>
<th></th>
<th>Roi</th>
<th>Minimum Investment</th>
<th>Maximum Investment</th>
<th>Return Type</th>
<th>Duration</th>
</tr>
</thead>
<tbody>
<tr>
<td>
<div class="form-group">
<input type="radio" name="package" required class="form-control-input" value="2">
<label class="custom-control-label" for="customRadio5"></label>
</div>
</td>
<td>5.8%</td>
<td>$5,000.00</td>
<td>$9,999.00</td>
<td>Daily</td>
<td><span class="label label-danger">7 Days</span> </td>
</tr>
</tbody>
 </table>
</div>
</div>
</div>
</div>




<div class="col-md-6">
<div class="card card-inverse card-danger">
<div class="card-header">
<h4 class="mb-0 text-dark text-center">Platinum Plan</h4></div>
<div class="card-body">
<div class="table-responsive">
<table class="table">
<thead>
<tr>
<th></th>
<th>Roi</th>
<th>Minimum Investment</th>
<th>Maximum Investment</th>
<th>Return Type</th>
<th>Duration</th>
</tr>
</thead>
<tbody>
<tr>
<td>
<div class="form-group">
<input type="radio" name="package" required class="form-control-input" value="3">
<label class="custom-control-label" for="customRadio5"></label>
</div>
</td>
<td>7.5%</td>
<td>$10,000.00</td>
<td>Infinity</td>
<td>Daily</td>
<td><span class="label label-danger">7 Days</span> </td>
</tr>
</tbody>
</table>
</div>
</div>
</div>
</div>
</div>

<div class="row">
<div class="col-12 mt-30">

<div class="card">
<div class="card-body">
<div class="form-group">
<label class="control-label">Amount</label>
<input type="number" id="firstName" name="amount" required class="form-control" placeholder="Amount to Invest">
</div>
<div class="form-actions text-center">
<button type="submit" class="btn btn-success" name="invest_btn" ><i class="fa fa-check-circle"></i> Process</button>
</div>
</div>
</div>

</div>
</div>

</form> 


</div>









<footer class="footer">
© 2020 Kreto Investments </footer>



</div>



</div>





<?php

include('../frm/footer.php');


?>



</body>
</html>