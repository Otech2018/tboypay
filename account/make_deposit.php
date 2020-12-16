<?php

 include('../inc/settings.php'); 


if( !loggedin() ){

    echo "<script> window.location.replace('../login.php'); </script>";
  }

?>

<!DOCTYPE html>
<html>


<head>
<meta charset="utf-8">
<meta name="description" content="<?= $site_name; ?> is an investment company located at <?= $site_address; ?>. It was incorporated on the 17th of August, 2017, which aims to reach out to Everyone, offering a guarnteed return on every investment which cuts across all social classes so that no one is left behind. <?= $site_name; ?> is an investment platform where returns are gotten as early as 14 days with a guaranteed return; People help People. We engage in real estate investment and development 30 years of experience in cunstruction services, crypto currency investment, architecture, manufacturing , structural engineering and Forex trading">
<meta name="keywords" content="consulting, accountant, advisor, audit, beaver builder, broker, business, clean, company, consulting, corporate, finance, financial, insurance, trader">

<meta name="author" content="<?= $site_name; ?>">
<title>New Deposit -- <?= $site_name; ?></title>

<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    
<?php

include('../frm/header.php');

if( isset($_POST['dep_btn_m']) ){



            $fund_amt = addslashes(htmlentities($_POST['fund_amt']));
            $dep_name = addslashes(htmlentities($_POST['dep_name']));
            $coin_fund = addslashes(htmlentities($_POST['coin_fund']));
            
                 
                if( is_numeric($fund_amt) ){
                    
                    if ($fund_amt >= 200   ){
                    
                            
                     
                
                        $tran_pop = "TRA-".date('hymis');

                        $tran_id = "INV-".date('hismY');
                       if( $coin_fund == 'BTC'){
                            $coin_amt = number_format( usd_btc($fund_amt),4);
                            $wal_add = "1KbAVJQGA57oa6ar2oJftPbqgeQbBEfwyE" ;

                        }else{
                             $coin_amt = number_format( usd_eth($fund_amt),4);
                              $wal_add = "0x822a351c8ef2aecb811ae6f78d59f6ff627b1506" ;
                        }


                                        
                    }else{
                        echo "<script>alert(\"Invalid Amount, Make Sure the Amount Entered is Upto the Minimum Amount!!!\"); window.location.replace(\"new_deposit.php\"); </script>";

                    } 
                    
                    
                }else{
                    echo "<script>alert(\"Invalid Amount, Please Use Only Numbers !!!\"); window.location.replace(\"new_deposit.php\"); </script>";

                        } 


}






if( isset($_POST['check']) ){



    $coin_amt = addslashes(htmlentities($_POST['coin_amt']));
    $coin_fund = addslashes(htmlentities($_POST['coin_fund']));
    $hash_id = addslashes(htmlentities($_POST['hash_id']));
    $tran_pop = addslashes(htmlentities($_POST['tran_pop']));
    $tran_id = addslashes(htmlentities($_POST['tran_id']));
    $fund_amt = addslashes(htmlentities($_POST['fund_amt']));

    
     
    $qw = "INSERT into transaction set tran_user_id='$user_id',  tran_email='$user_email',
     tran_username='$user_name', tran_desc='DEPOSIT', trant_amt='$fund_amt', coin_amt='$coin_amt',
      tran_status='PENDING', tran_date='$reg_Date', tran_invoice='$tran_id',
      trans_id='$tran_pop', coin='$coin_fund',hash_id='$hash_id' "; 
    $deposite_run =new run_query($qw);


    $site_email_send = "info@KretoInvestment.com";		
    $welcome_email_subject = "New Deposit of $ $fund_amt ($coin_amt $coin_fund ) | KretoInvestment";
    $welcome_email_headers .= "Content-type:text/html;charset=UTF-8 \r\n";
    $welcome_email_headers .= "From: $site_name";	
    
    
     $welcome_email_body = "
    
        <html>
        <head>
            <title> Hello $user_name, </title>
        </head>
        <body>
         <b>Hello, $user_name<b> <br/> Hope we meet you well.
        <h2> New Deposit of $ $fund_amt ($coin_amt $coin_fund ) </h2>
        We have Recieve your Deposite Details <br/>
        <b> TRANSACTION ID: $tran_pop <br/>
        INVOICE ID : $tran_id <br/>
        TRANSACTION HASH ID: $hash_id <br/>
        <i>Our Staff will verify the Deposit as soon as possible. </i></b><br/>
        We are Happy to have on board!!! <br/><br/>
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
                                                                                            
            
    echo "<script>alert(\"Success!!! Please Wait For Confirmation\"); window.location.replace(\"../account/new_deposit.php\"); </script>";

}

?>



<div class="page-wrapper">



<div class="container-fluid">



<div class="row page-titles">
<div class="col-md-5 align-self-center"><br><br>
<h3 class="text-themecolor text-uppercase">Payment Page</h3>
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="https://www.kretoinvestment.com/account/index.php">Home</a></li>
<li class="breadcrumb-item active">Payment Page</li>
</ol>
</div>
</div>






<div class="row">
<div class="col-md-12">
<div class="card card-body text-dark printableArea">
<div class="row">
<div class="col-md-12 pa-3">
<div class="pull-left">
<h3 class="text-center">
<img src="../assets/home/images/tivo.png" alt="" title="" style="width:100px;">
</h3>
</div>
<div class="pull-right text-right">
<address>
<div class="font-bold">
Invoice: <b><?php echo $tran_id; ?></b>
</div>
<p class="mt-20 mb-0"><b class="text-muted font-bold text-dark">Time Initiated :</b> <?php echo date('d F Y, H:i:s'); ?></p>
<p><b class="text-muted font-bold text-dark">Date Due :</b> <?php echo date('d F Y, H:i:s',strtotime('1 hour')); ?></p>
<p>
<p><b class="text-muted font-bold text-dark">Status:</b> <span class="badge badge-primary">Payment Pending</span></p>
</p>
</address>
</div>
</div>
<div class="row col-md-12 pt-40">
<div class="col">
<address>
<div class="text-uppercase font-16 font-bold mb-10">Payable To:</div>
<div class="font-medium m-b-10"><?= $site_name; ?></div>
<p class="mb-10">Aberdeen</p>
<p class="mb-10"><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="472e29212807332e31282e29312234332a2229336924282a">[email&#160;protected]</a></p>
</address>
</div>
<div class="col">
<address>
<div class="text-uppercase font-16 font-bold mb-10">Bill To:</div>
<div class="font-medium mb-10"><?php echo $user_name; ?></div>
<p class="mb-10"></p>
<p class="mb-10"><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="274b4e464a464b415542434f46504c4e49544849161467404a464e4b0944484a">[email&#160;protected]</a></p>
</address>
</div>
</div>
<div class="col-md-12">
<div class="table-responsive mt-40">
<table class="table  color-table mb-0 invoice-table">
<thead>
<tr>
<th class="font-bold" style="width:291px">Service</th>
<th class="font-bold" style="width:183px">Amount</th>
<th class="font-bold" style="width:155px">Transaction Id</th>
<th class="font-bold" style="width:155px">Wallet Address</th>
<th class="font-bold" style="width:92px">Barcode</th>
</tr>
</thead>
<tbody>
<tr>
<td>Account Funding</td>
<td><b><?php echo $coin_amt.' '.$coin_fund; ?></b></td>
<td><?php echo $tran_pop; ?></td>
<td><?php echo $wal_add; ?></td>
<td><img src="https://www.coinpayments.net/qrgen.php?id=CPEK4VIJLOS0FOAKHC3WKFHHTY&amp;key=41394f9cde4331ba15f08f3d05ba8ac3" style="width:100px;"></td>
</tr>
<tr>
<td class="invoice-bottom-top" rowspan="4" colspan="4">Note:<br>
<span class="text-muted">Please pay the total amount of <b><?php echo $coin_amt.' '.$coin_fund; ?></b> to the Wallet
above before the Due time else your deposit will be void. Also ensure that you Upload yout Transaction <b>HASH ID </b> of your Deposit. Click the button below to continue.</span></td>
</tr>
</tbody>
</table>
</div>
</div>
<div class="col-md-12">
<hr>
<div class="text-right">

<form method="POST" action="">
<input type="text" class="form-control form-control-lg" required placeholder="Transaction HASH ID" name="hash_id">
<input type="hidden" value="<?php echo $coin_amt; ?>" name="coin_amt">
<input type="hidden" value="<?php echo $coin_fund; ?>" name="coin_fund">
<input type="hidden" value="<?php echo $tran_pop; ?>" name="tran_pop">
<input type="hidden" value="<?php echo $tran_id; ?>" name="tran_id">
<input type="hidden" value="<?php echo $fund_amt; ?>" name="fund_amt">


<br/><br/>
    <button class="btn btn-primary" type="submit" name="check">
        <i class="fa fa-money"></i> Send payment Details
    </button>


</form>

<button id="print" class="btn btn-default btn-outline" type="button"> <span><i class="fa fa-print"></i> Print</span> </button>
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