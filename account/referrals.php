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
<title>Referral -- <?= $site_name; ?></title>


<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<?php

include('../frm/header.php');


?>




<div class="page-wrapper">



<div class="container-fluid">



<div class="row page-titles">
<div class="col-md-5 align-self-center"><br><br>
<h3 class="text-themecolor text-uppercase">Referrals</h3>
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
<li class="breadcrumb-item active">Referrals</li>
</ol>
</div>
</div>






<div class="row counter ">

<div class="col-lg-6 col-md-7 mx-auto">
<div class="card">
<div class="card-body">
<div class="d-flex pa-10 no-block">
<div class="align-slef-center ">
<h2 class="counter" >$<span class="counter-count"> <?php echo $user_ref_bonus; ?></span>  
<h6 class="text-muted mb-0 text-uppercase" >TOTAL REFERRAL BALANCE</h6>
<br/><br/>
<?php 
                            $ref_min = 10;
                            if( $user_ref_bonus >= $ref_min){

							echo "<form method='POST'>  
							<button type='submit'  name='cash_out' class='btn btn-sm btn-primary'>Withdraw</button> 
								<br/>Choose Account To withdraw To <br/>
								<input type='radio' name='coin' required value='BTC' /> BTC <br/>
								<input type='radio' name='coin' required value='ETH' /> ETH
								
								</form>";
                            }else{
								
                            echo "<button class='btn btn-danger btn-sm' disabled >Withdraw</button> <br/><i>(Referral Bonus Can Only be Withdrawn  at a Minimum of <b>  $ $ref_min </b> ).</i>";
							}
							

							
							if(isset($_POST['cash_out']))  {
								$tran_pop = date('hismY');
								$coin = addslashes(htmlentities($_POST['coin']));
    
								$qw1RRqq = new run_query("UPDATE   `users`  set user_ref_bonus='0'  where  user_id ='$user_id' ");
								
								$timer_end  = date('Y-m-d H:i:s',strtotime('48 hours') );
								$timer_start  = date('Y-m-d H:i:s' );
								$cash_out = new run_query("INSERT INTO    `transaction`  set  tran_user_id = '$user_id', coin='$coin', 
								tran_invoice='Ref-$tran_pop', tran_email='$user_email', tran_username='$user_name', 
								trant_amt='$user_ref_bonus',start_tran_date='$timer_start', tran_exp_date='$timer_end',
								  tran_date='$reg_Date', tran_status='PENDING', tran_desc ='CASH_OUT' ");
								$email_amt = $user_ref_bonus;


								$site_email_send = "info@KretoInvestment.com";		
								$welcome_email_subject = "Withdrawal of Referral  Bonus - $ $user_ref_bonus | KretoInvestment";
								$welcome_email_headers .= "Content-type:text/html;charset=UTF-8 \r\n";
								$welcome_email_headers .= "From: $site_name";	
								
								
								 $welcome_email_body = "
								
									<html>
									<head>
										<title> Hello $user_name, </title>
									</head>
									<body>
									 <b>Hello, $user_name<b> <br/> Hope we meet you well.
									<h2> You Have Requested for the withdrwal of your Referral Bonus of $ $user_ref_bonus  </h2>
									Please Relax as we Processed this Transaction <br/>
									
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
									  
									  
									 echo "<script>alert(\"Referral BONUS CASHED OUT \");</script>"; 
								 
							echo "<script>window.location.replace(\"dashboard.php\");</script>"; 
	
	
							 }


                    ?>





<center>


</div>
<div class="align-self-center display-6 ml-auto"> <div id="sparkline12" class="text-center w-100"></div></div>
</div>
</div>
</div>
</div>

</div>




<div class="row">
<div class="col-12">
<div class="card">
<div class="card-body">
<h4 class="card-title text-uppercase text-center">Referral Link</h4>
<h6 class="card-subtitle"></h6>
<div class="col-lg-12">
<div class="input-group mb-3">
<input type="text" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon1" value="https://kretoinvestment.com/register.php?ref=<?php echo $user_name;?>" readonly id="clipboard_input">
<div class="input-group-append">
<button class="btn btn-primary" data-clipboard="true" data-clipboard-target="#clipboard_input" type="button"><i class="fa fa-clipboard"></i> Copy</button>
</div>
</div>
</div>
</div>
</div>
</div>
</div>








<div class="row">
<div class="col-12">
<div class="card">
<div class="card-body">
<h4 class="card-title">Referrals</h4>
<h6 class="card-subtitle"></h6>
 <div class="table-responsive mt-40">
<table id="example23" class="display nowrap table table-hover table-striped table-bordered">
<thead>
<tr>
<td>S/N</td>
<th>Name</th>
<th>Email</th>
<th>UserName</th>
</tr>
</thead>
<tbody>

<?php


if(!empty($user_name)){   //check and credit referrer email starts
			$query_ref ="SELECT * from user_ref  WHERE gen1_email='$user_name'  " ;
			$query_run_ref  =new run_query($query_ref);
	if($query_run_ref->num_rows >=1){
		$no = 1;
	while ($tryu = $query_run_ref->result() ){
extract($tryu);
	
	$query_ref1 ="SELECT * from users  WHERE user_name='$user_ref_email'  " ;
			$query_run_ref1  =new run_query($query_ref1);
	$all_ref1 =  $query_run_ref1->num_rows;
$query_run_ref_data1 =	$query_run_ref1->result();
				extract($query_run_ref_data1);
				
				echo "
				
				<td>$no</td>
				<th>$fullname</th>
				<th>$user_email</th>
				<th>$user_name</th>
				</tr>
				
				
				";
				$no++;
}


}

}


?>





</tbody>
<tfoot>
<tr>
<td>S/N</td>
<th>Name</th>
<th>Email</th>
<th>UserName</th>
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