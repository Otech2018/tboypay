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
<title>Profile -- <?= $site_name; ?></title>

<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">


<?php

include('../frm/header.php');



if( isset($_POST['update_info'])){

  $name = addslashes(htmlentities($_POST['name']));
   $address = addslashes(htmlentities($_POST['address']));
   $country = addslashes(htmlentities($_POST['country']));
   $btc_address = addslashes(htmlentities($_POST['btc_address']));
   $eth_address = addslashes(htmlentities($_POST['eth_address']));
   $password = addslashes(htmlentities($_POST['password']));
   

   if($password==$user_password){
    $query211 = new run_query("Update users set fullname='$name',  address='$address',  btc_address='$btc_address', eth_address='$eth_address', country='$country' where user_email='$user_email'  " );
    echo "<script>alert(\"Profile Updated Successfully !!! \"); window.location.replace(\"profile.php\"); </script>";
                              
   }else{
    echo "<script>alert(\"Invalid Password!!! \"); window.location.replace(\"profile.php\"); </script>";
        
   }
  

}



if( isset($_POST['password_btn'])){

  $new_password = addslashes(htmlentities($_POST['confirm_password']));
   $old_password = addslashes(htmlentities($_POST['old_password']));
   $new_password = addslashes(htmlentities($_POST['new_password']));
  

   if($old_password==$user_password){
       if($new_password==$new_password){
          $query211 = new run_query("Update users set user_password='$new_password' where user_email='$user_email'  " );
          echo "<script>alert(\"Password Changed Successfully !!! \"); window.location.replace(\"profile.php\"); </script>";
                                    
        }else{
          echo "<script>alert(\"Invalid Password Not Match!! \"); window.location.replace(\"profile.php\"); </script>";
              
        }                 
   }else{
    echo "<script>alert(\"Invalid Password!!! \"); window.location.replace(\"profile.php\"); </script>";
        
   }
  

}


?>




<div class="page-wrapper">



<div class="container-fluid">



<div class="row page-titles">
<div class="col-md-5 align-self-center"><br><br>
<h3 class="text-themecolor text-uppercase">Profile</h3>
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
<li class="breadcrumb-item active">Profile</li>
</ol>
</div>
</div>









<div class="row">

<div class="col-lg-4 col-xlg-3 col-md-5">
<div class="card">
<div class="card-body">
<center class="mt-30">
<h4 class="card-title mt-10"> <?php echo $user_name; ?> </h4>
<h6 class="card-subtitle">Investor</h6>
<div class="row text-center justify-content-md-center">
<div class="col-8"><a href="javascript:void(0)" class="link"><i class="icon-people"></i> <font class="font-medium">$ <?php echo $bal; ?></font></a></div>
</div>
</center>
</div>
<div>
<hr class="mb-20"> </div>
<div class="card-body pt-0 text-center">
<span class="text-muted ma-0 font-30 pl-0"><i class="mdi mdi-email text-success"></i> </span>
<h6 class="font-normal text-grey"><a href="/cdn-cgi/l/email-protection" class="__cf_email__" >[email&#160;protected]</a></h6>
<small class="text-muted pt-15 font-30 pl-0 db"><i class="mdi mdi-map-marker-radius text-danger"></i></small>
<h6 class="font-normal text-grey"></h6>
</div>
</div>
</div>


<div class="col-lg-8 col-xlg-9 col-md-7">
<div class="card">

<ul class="nav nav-tabs profile-tab" role="tablist">
<li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#profile" role="tab">Profile</a> </li>
<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#settings" role="tab">Login Settings</a> </li>
</ul>

<div class="tab-content pa-20">

<div class="tab-pane active" id="profile" role="tabpanel">
<div class="card-body">
<form action="" class="form-horizontal form-material" method="post" accept-charset="utf-8">
<div class="form-group">
<label class="col-md-12">Name</label>
<div class="col-md-12">
<input type="text" placeholder="Johnathan Doe" required class="form-control form-control-line" name="name" value="<?php echo $fullname; ?>">
</div>
</div>
<div class="form-group">
<label for="example-email" class="col-md-12">Email</label>
<div class="col-md-12">
<input type="email" placeholder="johnathan@admin.com" readonly class="form-control form-control-line" name="email" id="example-email" value="<?php echo $user_email; ?>">
</div>
</div>
<div class="form-group">
<label class="col-md-12">Username</label>
<div class="col-md-12">
<input type="text" value="<?php echo $user_name; ?>" class="form-control form-control-line" readonly>
</div>
</div>
<div class="form-group">
<label class="col-md-12">Country</label>
<div class="col-md-12">
<input type="text" value="<?php echo $country; ?>" class="form-control form-control-line" name="country">
</div>
</div>
<div class="form-group">
<label class="col-md-12">Address</label>
<div class="col-md-12">
<input type="text" value="<?php echo $address; ?>" class="form-control form-control-line" name="address">
</div>
</div>
<div class="form-group">
<label for="example-email" class="col-md-12">Bitcoin Wallet</label>
<div class="col-md-12">
<input type="text" placeholder="Bitcoin Wallet" class="form-control form-control-line" name="btc_address" id="example-email" value="<?php echo $btc_address; ?>">
</div>
</div>
<div class="form-group">
<label for="example-email" class="col-md-12">Ethereum Wallet</label>
<div class="col-md-12">
<input type="text" placeholder="Ethereum Wallet" class="form-control form-control-line" name="eth_address" id="example-email" value="<?php echo $eth_address; ?>">
</div>
</div>
<div class="form-group">
<label class="col-md-12">Password</label>
<div class="col-md-12">
<input type="password" name="password" class="form-control form-control-line">
<small>In order to verify this action please enter your password.</small>
</div>
</div>
<div class="form-group">
<div class="col-sm-12">
<button class="btn btn-success" type="submit" name="update_info">Update Profile</button>
</div>
</div>
</form>
</div>
</div>
<div class="tab-pane" id="settings" role="tabpanel">
<div class="card-body">
<form action="" class="form-horizontal form-material" method="post" accept-charset="utf-8">
<div class="form-group">
<label class="col-md-12">Old Password</label>
<div class="col-md-12">
<input type="password" name="old_password" class="form-control form-control-line">
</div>
</div>
<div class="form-group">
<label for="example-email" class="col-md-12">New Password</label>
<div class="col-md-12">
<input type="password" class="form-control form-control-line" name="new_password" id="example-email">
</div>
</div>
<div class="form-group">
<label class="col-md-12">Repeat New Password</label>
<div class="col-md-12">
<input type="password" name="confirm_password" class="form-control form-control-line">
</div>
</div>
<div class="form-group">
<div class="col-sm-12">
<button class="btn btn-success" type="submit" name="password_btn">Update Login Details</button>
</div>
</div>
</form>
</div>
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