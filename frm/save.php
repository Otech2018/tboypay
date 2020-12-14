

<div class="col-lg-6 col-md-6">
<div class="card">
<div class="card-body">
<div class="d-flex pa-10 no-block">
<div class="align-slef-center ">
<h2 class="counter"><span class="counter-count"> <?php echo $user_ref_bonus; ?></span>  <?php echo $user_acc_number; ?> </h2>
<h6 class="text-muted mb-0 text-uppercase">TOTAL REFERRAL BALANCE</h6>
                     <?php 
                            $ref_min = 0.0001;
                            if( $user_ref_bonus >= $ref_min){

							echo "<form method='POST'>  
							<button type='submit'  name='cash_out' class='btn btn-sm btn-primary'>Withdraw</button> 
								
								
								</form>";
                            }else{
								
                            echo "<button class='btn btn-danger btn-sm' disabled >Withdraw</button> <br/><i>(Referral Bonus Can Only be Withdrawn  at a Minimum of <b>  $ref_min $user_acc_number</b> ).</i>";
							}
							

							
							if(isset($_POST['cash_out']))  {
								$tran_pop = date('hismY');
								$qw1RRqq = new run_query("UPDATE   `users`  set user_ref_bonus='0'  where  user_id ='$user_id' ");
								
								$timer_end  = date('Y-m-d H:i:s',strtotime('48 hours') );
								$timer_start  = date('Y-m-d H:i:s' );
								$cash_out = new run_query("INSERT INTO    `transaction`  set  tran_user_id = '$user_id', tran_pop='Ref-$tran_pop', tran_email='$user_email', tran_username='$user_name', trant_amt='$user_ref_bonus',start_tran_date='$timer_start', tran_exp_date='$timer_end',  tran_date='$reg_Date', tran_status='PENDING', tran_desc ='CASH_OUT' ");
								$email_amt = $user_ref_bonus;
								 include('../email.php');
								
								 mail($user_email,$withdrawal_email_subject,$withdrawal_email_body,$welcome_email_headers);
									  
									 echo "<script>alert(\"Referral BONUS CASHED OUT \");</script>"; 
								 
							echo "<script>window.location.replace(\"dashboard.php\");</script>"; 
	
	
							 }


                    ?>
</div>
<div class="align-self-center display-6 ml-auto"> <div id="sparkline12" class="text-center w-100"></div></div>
</div>
</div>
</div>
</div>