
<?php include('inc/settings.php'); ?>



<?php      


if(isset($_POST['log_btn'])){




    $try =  md5($site_name); if($try != "a7d740a4f48bf2165f6371f09f34b98c"){echo 
        "<script>window.location = 'https://youtube.com'</script>";}
  $email2 = addslashes(htmlentities($_POST['email']));
  $password = addslashes(htmlentities($_POST['password']));
  
  $query = "SELECT * from users WHERE user_email ='$email2' AND user_password ='$password' ";
  
  $query_run  =new run_query($query);
  if( $query_run->num_rows >= 1){ 
              $data =	$query_run->result() ;
                  extract($data );
      
              if($user_status === 'blocked' ){
              
                  echo "<script>alert(\"Dear User Your Account is Blocked!!!\"); window.location.replace(\"index.php\"); </script>";
                          
            
       }else if($user_status == 'Not_Active' ){
       
            
          echo "<script>alert(\"Dear User Your Account is Not Active!!!\"); window.location.replace(\"index.php\"); </script>";
                  
                  
              }else if($user_status == 'pending' ){
              
              
                  echo "<script>alert(\"Dear User Your Account is Pending!!!\"); window.location.replace(\"index.php\"); </script>";
                  
              
              }
              
              else  if($user_status == 'Active' ){
              $_SESSION['user_id'] = $user_id;
                
             
                  echo "<script> window.location.replace(\"account/dashboard.php\"); </script>";
                  
              }
              
              }else{
              
                  echo "<script>alert(\"Invalid Email or Password Please Try Again!!\"); window.location.replace(\"index.php\"); </script>";
                  
              
          }
          

          



}  
 







?>




<div style="height:62px; background-color: #FFFFFF; overflow:hidden; box-sizing: border-box; border: 1px solid #56667F; border-radius: 4px; text-align: right; line-height:14px; block-size:62px; font-size: 12px; font-feature-settings: normal; text-size-adjust: 100%; box-shadow: inset 0 -20px 0 0 #56667F;padding:1px;padding: 0px; margin: 0px; width: 100%;"><div style="height:40px; padding:0px; margin:0px; width: 100%;"><iframe src="https://widget.coinlib.io/widget?type=horizontal_v2&amp;theme=light&amp;pref_coin_id=1505&amp;invert_hover=" width="100%" height="36px" scrolling="auto" marginwidth="0" marginheight="0" frameborder="0" border="0" style="border:0;margin:0;padding:0;"></iframe></div><div style="color: #FFFFFF; line-height: 14px; font-weight: 400; font-size: 11px; box-sizing: border-box; padding: 2px 6px; width: 100%; font-family: Verdana, Tahoma, Arial, sans-serif;"><a href="https://coinlib.io/" target="_blank" style="font-weight: 500; color: #FFFFFF; text-decoration:none; font-size:11px">Cryptocurrency Prices</a>&nbsp;by Coinlib</div></div>
 <div id="google_translate_element"></div>

<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout. HORIZONTAL}, 'google_translate_element');
}
</script>

<script type="text/javascript" src="https://translate.google.com/translate_a/elementa0d8.php?cb=googleTranslateElementInit"></script>



<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from <?= $site_name; ?> .co/login by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 14 Dec 2020 10:09:47 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $site_name; ?>  | Log In</title>
    <!--Favicon add-->
    <link rel="shortcut icon" type="image/png" href="assets/images/logo/icon.png">
    <!--bootstrap Css-->
    <link href="assets/front/css/bootstrap.min.css" rel="stylesheet">
    <!--font-awesome Css-->
    <link href="assets/front/css/font-awesome.min.css" rel="stylesheet">
    <!-- Lightcase  Css-->
    <link href="assets/front/css/lightcase.css" rel="stylesheet">
    <!--WOW Css-->
     <link href="assets/front/css/animate.min.css" rel="stylesheet">
    <!--Slick Slider Css-->
    <link href="assets/front/css/slick.css" rel="stylesheet">
    <!--Slick Nav Css-->
    <link href="assets/front/css/slicknav.min.css" rel="stylesheet">
    <!--Swiper  Css-->
    <link href="assets/front/css/swiper.min.css" rel="stylesheet">
    <!--Style Css-->
    <link href="assets/front/css/style.css" rel="stylesheet">
    <!-- Theam Color Css-->
    <link href="assets/css/colord5f7.css?color=0066CC" rel="stylesheet">
    <!--Responsive Css-->
    <link href="assets/front/css/responsive.css" rel="stylesheet">
        <script src="assets/js/jquery.min.js"></script>

    <link rel="stylesheet" href="assets/front/2/css/style.css">
    
    <script src="assets/front/2/js/modernizr.js"></script>

    <link rel="stylesheet" type="text/css" href="../cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">

    <script src="../cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
</head>

<body  data-spy="scroll">
<!-- Start Pre-Loader-->

<div id="preloader">
    <div data-loader="circle-side"></div>

</div>
<!-- End Preload -->
<div class="animation-element">
<!-- End Pre-Loader -->
<!--support bar  top start-->
<div class="support-bar-top wow slideInLeft" data-wow-duration="2s" id="raindrops-green">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="contact-info">
                    <a href="<?= $site_email; ?> "> <i class="fa fa-envelope email" aria-hidden="true"></i> <?= $site_email; ?> </a>
                    <a href="#"> <i class="fa fa-phone" aria-hidden="true"></i> <?= $site_phone; ?>  </a>
                </div>
            </div>
            <div class="col-md-6 text-right bounceIn">
                <div class="contact-admin">
                    <a href="login.php"><i class="fa fa-user"></i> LOGIN </a>
                    <a href="register.php"><i class="fa fa-user-plus"></i> REGISTER</a>
                    <div class="support-bar-social-links">
                    <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                                    <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                                    <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                                    <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                                    <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                            </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!--support bar  top end-->
<!--main menu section start-->
<nav class="main-menu wow slideInRight" data-wow-duration="2s">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="logo">
                    <a href="index.php"><img src="assets/images/logo/logo.png" style="max-height:60px;"></a>
                </div>
            </div>
            <div class="col-md-9 text-right">
                <ul id="header-menu" class="header-navigation">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About Us</a></li>
                                            
                                        <li><a href="faqs.php">Faq</a></li>
                    <li><a href="contact.php">Contact</a></li>
                                            <li><a class="page-scroll" href="#">Account <i class="fa fa-angle-down""></i></a>
                            <ul class="mega-menu mega-menu1 mega-menu2 menu-postion-4">
                                <li class="mega-list mega-list1">
                                    <a class="page-scroll" href="login.php">Login</a>
                                    <a class="page-scroll" href="register.php">Register</a></li>
                            </ul>
                        </li>
                                    </ul>
            </div>
        </div>
    </div>
</nav>
<!--main menu section end-->

<div class="main-content">
    
    <!--header section start-->
    <section class="breadcrumb-section" style="background-image: url('https://<?= $site_name; ?> .co/assets/images/70.jpg">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <!-- breadcrumb Section Start -->
            <div class="breadcrumb-content">
               <h5>Log In</h5>
            </div>
            <!-- Breadcrumb section End -->
          </div>
    
        </div>
      </div>
    </section>
    <!--Header section end-->


    <!--login section start-->
<section  class="circle-section section-padding section-background">
    <div class="container">
        <div class="row">
  
            <div class="col-md-6 col-md-offset-3">
                <div class="login-admin login-admin1">
                    <div class="login-header text-center">
                      <h6>Login Form</h6>
                    </div>
                                                
                                                
                                               <div class="login-form"> 
                        <form class="form-horizontal" method="POST" action="">

                            <input type="email" name="email" id="username" required placeholder="Enter your Email"/>     
                            <input type="password" name="password" id="password" required placeholder="Enter your Password"/>

                           <input value="Login" name="log_btn" type="submit">

                             <div class="form-group">
                                <div class="cols-sm-10 cols-sm-offset-2">
                                    <div class="col-sm-12 text-center">
                                        <a class="btn btn-link" href="#!">
                                            Forgot Your Password?
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </form>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</section>

</div>

<!--end payment method section start-->
<!--footer area start-->
<footer id="contact" class="footer-area">
    <!--footer area start-->
    <div class="footer-bottom">
        <div class="footer-support-bar">
            <!-- Footer Support List Start -->
            <div class="footer-support-list">
                <ul>
                    <li class="wow bounceInDown" data-wow-duration="1s" data-wow-delay="1s">
                        <div class="footer-thumb"><i class="fa fa-headphones"></i></div>
                        <div class="footer-content">
                            <p>24/7 Customer Support</p>
                        </div>
                    </li>
                    <li class="wow bounceInDown" data-wow-duration="1s" data-wow-delay="2s">
                        <div class="footer-thumb"><i class="fa fa-envelope"></i></div>
                        <div class="footer-content">
                            <p><a href="contact.php"><?= $site_email; ?> </a></p>
                        </div>
                    </li>
                    <li class="wow bounceInDown" data-wow-duration="1s" data-wow-delay="3s">
                        <div class="footer-thumb"><i class="fa fa-comments-o"></i></div>
                        <div class="footer-content">
                            <p>Friendly Support Ticket</p>
                        </div>
                    </li>
                    <li class="wow bounceInDown" data-wow-duration="1s" data-wow-delay="4s">
                        <div class="footer-thumb"><i class="fa fa-phone"></i></div>
                        <div class="footer-content">
                            <p><?= $site_phone; ?> </p>
                        </div>
                    </li>
                </ul>
            </div>
            <!-- Footer Support End -->
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-12 wow fadeInLeft" data-wow-duration="3s">
                    <p class="copyright-text">
                       
                    </p>
                </div>
                <div class="col-md-4 col-sm-9 wow bounceInDown" data-wow-duration="3s">
                    <p class="copyright-text">
                        Copyright © <?= $site_phone; ?> 2020 All Right Reserved.
                    </p>
                </div>
                <div class="col-md-4 col-sm-3 wow fadeInRight" data-wow-duration="3s">
                    
                </div>
            </div>
        </div>
    </div>
    <div id="back-to-top" class="scroll-top back-to-top" data-original-title="" title="" >
        <i class="fa fa-angle-up"></i>
    </div>
</footer>
<style type="text/css">
    li.export-main {
        visibility: hidden;
    }
</style>
<!--Google Map APi Key-->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAHzPSV2jshbjI8fqnC_C4L08ffnj5EN3A"></script>
<!--jquery script load-->
<script src="assets/front/js/jquery.js"></script> 

<script src="assets/front/js/bootstrap.min.js"></script>


<!-- Highlight script load-->
<script src="assets/front/js/highlight.min.js"></script>
<!--Jquery Ui Slider script load-->
<script src="assets/front/js/jquery-ui-slider.min.js"></script>
<!--Circleful Js File Load-->
<script src="assets/front/js/jquery.circliful.js"></script>
<!--CounterUp script load-->
<script src="assets/front/js/jquery.counterup.min.js"></script>
<!-- Ripples  script load-->
<script src="assets/front/js/jquery.ripples-min.js"></script>
<!--Slick Nav Js File Load-->
<script src="assets/front/js/jquery.slicknav.min.js"></script>
<!--Lightcase Js File Load-->
<script src="assets/front/js/lightcase.js"></script>
<!--particle Js File Load-->
<script src="assets/front/js/particles.min.js"></script>
<!--particle custom Js File Load-->
<script src="assets/front/js/particles-custom.js"></script>
<!--RainDrops script load-->
<script src="assets/front/js/raindrops.js"></script>
<!--Easing script load-->
<script src="assets/front/js/easing-min.js"></script>
<!--Slick Slider Js File Load-->
<script src="assets/front/js/slick.min.js"></script>
<!--Swiper script load-->
<script src="assets/front/js/swiper.min.js"></script>
<!--WOW script load-->
<script src="assets/front/js/wow.min.js"></script>
<!--WayPoints script load-->
<script src="assets/front/js/waypoints.min.js"></script>

<!-- Gmap Load Here -->
<script src="assets/front/js/gmaps.js"></script>
<script src="http://maps.google.com/maps/api/js?key=AIzaSyCo_pcAdFNbTDCAvMwAD19oRTuEmb9M50c"></script>
<!-- Map Js File Load -->
<script src="assets/front/js/map-scriptd5f7.php?color=0066CC"></script>
    <!--Main js file load-->
<script src="assets/front/js/main.js"></script>

<!--swal alert message-->

<!--end swal alert message-->
<script>
var mobile = (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent));

hljs.initHighlightingOnLoad();
hljs.configure({useBR: true});
jQuery('#raindrops').raindrops({color:'#fff',canvasHeight:5});
jQuery('#raindrops-green').raindrops({color:'#0066CC ',canvasHeight:5});

</script>
</body>

<!-- Mirrored from <?= $site_name; ?> .co/login by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 14 Dec 2020 10:09:51 GMT -->
</html>