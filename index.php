
<?php include('inc/settings.php'); ?>


<!DOCTYPE html>

<html lang="en">
    <div style="height:62px; background-color: #FFFFFF; overflow:hidden; box-sizing: border-box; border: 1px solid #56667F; border-radius: 4px; text-align: right; line-height:14px; block-size:62px; font-size: 12px; font-feature-settings: normal; text-size-adjust: 100%; box-shadow: inset 0 -20px 0 0 #56667F;padding:1px;padding: 0px; margin: 0px; width: 100%;"><div style="height:40px; padding:0px; margin:0px; width: 100%;"><iframe src="https://widget.coinlib.io/widget?type=horizontal_v2&amp;theme=light&amp;pref_coin_id=1505&amp;invert_hover=" width="100%" height="36px" scrolling="auto" marginwidth="0" marginheight="0" frameborder="0" border="0" style="border:0;margin:0;padding:0;"></iframe></div><div style="color: #FFFFFF; line-height: 14px; font-weight: 400; font-size: 11px; box-sizing: border-box; padding: 2px 6px; width: 100%; font-family: Verdana, Tahoma, Arial, sans-serif;"><a href="https://coinlib.io/" target="_blank" style="font-weight: 500; color: #FFFFFF; text-decoration:none; font-size:11px">Cryptocurrency Prices</a>&nbsp;by Coinlib</div></div>
    

<!-- Mirrored from <?= $site_phone; ?>.guru/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 11 Jun 2020 08:38:04 GMT -->
<!-- Added by HTTrack -->
<!-- Mirrored from <?= $site_name; ?> .co/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 14 Dec 2020 10:01:32 GMT -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title><?= $site_name; ?> | Home </title>
        <link rel="stylesheet" href="theme/demo/assets/common/font-awesome/css/font-awesome.min.css" />
    <link rel="icon" href="assets/images/logo/icon.png">
    <link rel="stylesheet" href="maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href='theme/demo67/assets/common/css/animate.css' rel='stylesheet' type='text/css'>
    <link href="http://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800|Staatliches" rel="stylesheet">
    <link href='theme/demo67/assets/common/css/custom.css' rel='stylesheet' type='text/css'>
    <link href='theme/demo67/assets/common/css/hover.css' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <script src="ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.php"></script>
    <script src="maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="theme/demo67/assets/common/js/wow.js"></script>
    <script src="theme/demo67/assets/common/js/wow.min.js"></script>
    <script type="text/javascript" src="cdn.ywxi.net/js/1.js" async></script>
	
    <script src="http://icon-box.live/sprite/latest/"></script>
    <script type="text/javascript">
        var tday=new Array("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday");
        var tmonth=new Array("January","February","March","April","May","June","July","August","September","October","November","December");
        
        function GetClock(){
        var tzOffset = 0;
        
        var d=new Date();
        var dx=d.toGMTString();
        dx=dx.substr(0,dx.length -3);
        d.setTime(Date.parse(dx))
        d.setHours(d.getHours()+tzOffset);
        var nday=d.getDay(),nmonth=d.getMonth(),ndate=d.getDate();
        var nhour=d.getHours(),nmin=d.getMinutes(),ap;
        if(nhour==0){ap=" AM";nhour=12;}
        else if(nhour<12){ap=" AM";}
        else if(nhour==12){ap=" PM";}
        else if(nhour>12){ap=" PM";nhour-=12;}
        
        if(nmin<=9) nmin="0"+nmin;
        
        document.getElementById('clockbox').innerHTML=""+tday[nday]+", "+tmonth[nmonth]+" "+ndate+" "+nhour+":"+nmin+ap+"";
        }
        
        window.onload=function(){
        GetClock();
        setInterval(GetClock,1000);
        }
    </script>
    <script type="text/javascript">
        jQuery.ajax({
          url: "https://min-api.cryptocompare.com/data/pricemulti",
          data: "fsyms=BTC,ETH,DASH,LTC&tsyms=USD",
          dataType : 'json',
        }).done(function(data) {
           jQuery(".dashCoin").php('$' + data.DASH.USD);
           jQuery(".ethCoin").php('$' + data.ETH.USD);
           jQuery(".bitCoin").php('$' + data.BTC.USD);
           jQuery(".liteCoin").php('$' + data.LTC.USD);
        }).fail(function() {
            console.log("API error");
        });
    </script>
</head>
<body>
<div class="wrapper">
    <div class="graphcs">
        <div class="bannerwrap">
            <div class="particles">
                <div class="bannerwrap2">
                    <div class="animate1"></div>
                    <div class="animate2"></div>
                    <div class="animate3"></div>
                    <div class="animate4"></div>
                    <div class="topaction">
                        <div class="content">
                            <div class="left fadeInDown wow" style="position: relative;">
                                <div class="values">
                                    <span class="icon">
                                        <img src="theme/demo67/assets/common/images/headerbtc.png" alt="" />
                                    </span> <strong class="bitCoin"></strong>
                                </div>
                                <div class="values">
                                    <span class="icon">
                                        <img src="theme/demo67/assets/common/images/headerlte.png" alt="" />
                                    </span> <strong class="liteCoin"></strong>
                                </div>
                                <div class="values">
                                    <span class="icon">
                                        <img src="theme/demo67/assets/common/images/headereth.png" alt="" />
                                    </span> <strong class="ethCoin"></strong>
                                </div>
                                
                                
                                
                                <link rel="stylesheet" type="text/css" href="theme/demo67/assets/lang/flags.css">
                                <div style="position: absolute;top: -3px; right: 10%;" class="language_flags">
                                <!-- GTranslate: https://gtranslate.io/ -->

<style type="text/css">

a.gflag {vertical-align:middle;font-size:32px;padding:1px 0;background-repeat:no-repeat;background-image:url(gtranslate.net/flags/32.png);}
a.gflag img {border:0;}
a.gflag:hover {background-image:url(gtranslate.net/flags/32a.png);}
#goog-gt-tt {display:none !important;}
.goog-te-banner-frame {display:none !important;}
.goog-te-menu-value:hover {text-decoration:none !important;}
body {top:0 !important;}
#google_translate_element2 {display:none!important;}

</style>

<div id="google_translate_element2"></div>
<script type="text/javascript">
function googleTranslateElementInit2() {new google.translate.TranslateElement({pageLanguage: 'en',autoDisplay: false}, 'google_translate_element2');}
</script><script type="text/javascript" src="translate.google.com/translate_a/element78767876.php?cb=googleTranslateElementInit2"></script>


<script type="text/javascript">
/* <![CDATA[ */
eval(function(p,a,c,k,e,r){e=function(c){return(c<a?'':e(parseInt(c/a)))+((c=c%a)>35?String.fromCharCode(c+29):c.toString(36))};if(!''.replace(/^/,String)){while(c--)r[e(c)]=k[c]||e(c);k=[function(e){return r[e]}];e=function(){return'\\w+'};c=1};while(c--)if(k[c])p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c]);return p}('6 7(a,b){n{4(2.9){3 c=2.9("o");c.p(b,f,f);a.q(c)}g{3 c=2.r();a.s(\'t\'+b,c)}}u(e){}}6 h(a){4(a.8)a=a.8;4(a==\'\')v;3 b=a.w(\'|\')[1];3 c;3 d=2.x(\'y\');z(3 i=0;i<d.5;i++)4(d[i].A==\'B-C-D\')c=d[i];4(2.j(\'k\')==E||2.j(\'k\').l.5==0||c.5==0||c.l.5==0){F(6(){h(a)},G)}g{c.8=b;7(c,\'m\');7(c,\'m\')}}',43,43,'||document|var|if|length|function|GTranslateFireEvent|value|createEvent||||||true|else|doGTranslate||getElementById|google_translate_element2|innerHTML|change|try|HTMLEvents|initEvent|dispatchEvent|createEventObject|fireEvent|on|catch|return|split|getElementsByTagName|select|for|className|goog|te|combo|null|setTimeout|500'.split('|'),0,{}))
/* ]]> */
</script>
                                	</div>                          
                                	
                                	
                                	
                                	</div>
                            <div class="right fadeInDown wow">
                                <div class="servertime">
                                    <span class="icon">
                                        <img src="theme/demo67/assets/common/images/headerclock.png" alt="" />
                                    </span>SERVER TIME: <strong id="clockbox"></strong>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="navwrap fadeInDown wow">
                        <div class="content">
                            <div class="logo">
                                <a href="index.php"><img src="assets/images/logo/logo.png" alt="" /></a>
                            </div>
                            <div class="menu">
                                <ul>
                                 <li> <a href="#"> HOME </a> </li>
                                    <li> <a href="about.php"> ABOUT US </a> </li>
                                    

                                    
                                    <li> <a href="faqs.php"> FAQ </a> </li>
                                    <li> <a href="contact.php"> CONTACT </a> </li>
                                                                           
                                                                            <li class = "login"> <a href="login.php"> Login </a> </li>
                                        <li class = "signup"> <a href="register.php"> Registration </a> </li>                      
                                       
                                        
                                                                    </ul>
                            </div>
                        </div>
                    </div>
                    <div class="banner">
                        <div class="content">
                            <div class="left fadeInDown wow"><br>
                            <br>
                            <br>
                            <br>
                              <h1><?= $site_name; ?>   <span>CREATING YOUR FUTURE </span>NOW </h1>
                                <p> <?= $site_name; ?>  is a modern Bitcoin Investment system that works with advanced automated artificial Investment robots for crypto portfolio, which turned out to be one of the best Crypto Investment System for anyone looking for Bitcoin Investment in cryptocurrency. </p>
                                                                 
                                                                 
                                                                    <a href="login.php"> Login </a>
                                    <a href="register.php"> Sign Up </a>
                                                                          
                                    
                                    
                                   
                                    
                                    
                                                                <div class="bottom-banner">
                                                                                                        </div>
                            </div>
                            <div class="right"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="investmentwrap">
            <div class="content">
               <h2 class = "bounceInDown wow"> <span> CRYPTO </span> SOLUTION </h2>
                <p class = "bounceInDown wow"> <?= $site_name; ?>  offers you the most reliable and new investment system to choose not only for calculations, but also for the opportunity to get the most unusual profit. </p>
                <div class = "planboxwrap">
                                       
                                       
                                        <div class = "planbox">
                        <div class = "planhead"> COINS STAR </div>
                        <div class = "planpercentage">
                            <div class = "top">
                                20 <span>% </span>
                            </div>
                            <div class = "bottom">
                              Duration: 24 Hours </div>
                        </div>
                        <div class="planinfos">
                            <ul>
                          <li> Capital: <span> Return </span> </li>
                                <li> Minimum: <span> 100 $ </span> </li>
                                <li> Maximum: <span> $ 999 </span> </li>
                            </ul>
                        </div>
                        <div class = "planaction">
                        
                            <a href="login.php"> Invest </a>
                                                          
                        </div>
                        <div class = "plancurve one"> &nbsp; </div>
                    </div>
                                       
                                       
                                       
                    <div class = "planbox">
                        <div class = "planhead"> COINS ENTERPRISE </div>
                        <div class = "planpercentage">
                            <div class = "top">
                                50 <span>% </span>
                            </div>
                            <div class = "bottom">
                                Duration: 7 Days </div>
                        </div>
                        <div class="planinfos">
                            <ul>
                               <li> Capital: <span> Return </span> </li>
                                <li> Minimum: <span> $ 1,000 </span> </li>
                                <li> Maximum: <span> $ 49,999 </span> </li>
                            </ul>
                        </div>
                        <div class = "planaction">
                          
                            <a href="login.php"> Invest </a>
                                                      </div>
                        <div class = "plancurve two"> &nbsp; </div>
                    </div>
                    
                                 
                                        <div class = "planbox">
                        <div class = "planhead"> COINS ENTERPRISE </div>
                        <div class = "planpercentage">
                            <div class = "top">
                                50 <span>% </span>
                            </div>
                            <div class = "bottom">
                                Duration: 7 Days </div>
                        </div>
                        <div class="planinfos">
                            <ul>
                               <li> Capital: <span> Return </span> </li>
                                <li> Minimum: <span> $ 1,000 </span> </li>
                                <li> Maximum: <span> $ 49,999 </span> </li>
                            </ul>
                        </div>
                        <div class = "planaction">
                          
                            <a href="login.php"> Invest </a>
                                                      </div>
                        <div class = "plancurve two"> &nbsp; </div>
                    </div>
                                      
                                      
                                      
                                      
                                        <div class = "planbox">
                        <div class = "planhead"> COINS VIP </div>
                        <div class = "planpercentage">
                            <div class = "top">
                                100<span>% </span>
                            </div>
                            <div class = "bottom">
                                Duration: 30 Days </div>
                        </div>
                        <div class = "planinfos">
                            <ul>
                                <li> Capital: <span> Return </span> </li>
                                <li> Minimum: <span> $ 50,000 </span> </li>
                                <li> Maximum: <span> $ Unlimited </span> </li>
                            </ul>
                        </div>
                        <div class="planaction">
                        <a href="login.php"> Invest </a>
                                                      </div>
                        <div class="plancurve three">&nbsp;</div>
                    </div>
                                    </div>
            </div>
        </div>
    </div>
    <style>
        .icon.currency::before {
            background: #0668b2;
            border-radius: 50%;
            content: '$';
            display: block;
            font-size: 20px;
            margin-top: 11px;
            margin-right: auto;
            margin-left: auto;
            line-height: 1.6;
            height: 32px;
            width: 32px;
        }
    </style>
    <div class="graphcs2">
        <div class="calculatorwrap">
            <div class="content">
                <!-- <div class="calculatorbox fadeInDown wow">
                    <div class="left">
                        <h4>Profit calculator</h4>
                    </div>
                    <div class="right">
                        <div class="enteramount">
                            <label>Plan:</label>
                            <div class="putfigure">
                                <select name="plan" id="plane" style="height: 54px;padding: 0 65px 0 15px;">
                                                                            <option value = "1"> 20% IN 1 DAY </option>
                                                                            <option value = "2"> 50% FOR 7 DAYS </option>
                                                                            <option value = "3"> 100% FOR 30 DAYS </option>
                                                                    </select>
                            </div>
                        </div>
                        <div class = "enteramount">
                            <label> Deposit amount: </label>
                            <div class = "putfigure">
                                <input class = "deposit" type = text value = "1" id = "amount" name = "amount" />
                                <span class = "icon currency">
                                </span>
                            </div>
                        </div>
                        <div class = "calculatorresults">
                            <span class = "icons">
                                <img src = "theme/%20demo67/%20assets/%20common/%20images/%20calculatortick.php" alt = "" />
                            </span>
                            <p> Profit: </p>
                            <h4 id="totals"></h4>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    <script>
      const plans = JSON.parse('[{"id":"1","description":"20% \u0437\u0430 24 \u0447\u0430\u0441\u0430","percent":"120.000","count":"1","seconds":"86400","img":"","min":"100.00000000","max":"999.00000000","return":"0","start_data":"0","end_data":"0","status":"1","delete":"1"},{"id":"2","description":"50% \u0437\u0430 24 \u0447\u0430\u0441\u0430","percent":"150.000","count":"1","seconds":"86400","img":"","min":"1000.0000000","max":"49999.00000000","return":"0","start_data":"0","end_data":"0","status":"1","delete":"1"},{"id":"3","description":"100% \u0437\u0430 48 \u0447\u0430\u0441\u043e\u0432","percent":"200.000","count":"1","seconds":"172800","img":"","min":"50000.00000000","max":"10000000000.00000000","return":"0","start_data":"0","end_data":"0","status":"1","delete":"1"}]');

      function calc(amount) {
        let plan_id = Number($('#plane').val());
        let percent = 0;
        let count = 0;
        let seconds = 0;
        let plan_return = 0;
        let date = new Date();
        let check = false;
        if (plans) {
          plans.forEach(function (plan) {
            if (amount >= Number(plan['min']) && amount <= Number(plan['max']) && plan_id === Number(plan['id'])) {
              count = Number(plan['count']);
              percent = Number(plan['percent']);
              seconds = Number(plan['seconds']);
              plan_return = Number(plan['return']);
              date.setSeconds(date.getSeconds() + seconds * (count === 0 ? 1 : count));
              check = true;
            }
          });
        }
        if (check) {
          const total = (amount / 100 * percent) * (count === 0 ? 1 : count) + Number(plan_return === 1 ? amount : 0);
          $('#totals').php(total.toFixed(2) + ' USD');
            
        } else {
          $('#totals').php('----');
        }
      }

      $("#amount").on("change keyup", function () {
        calc($(this).val());
      });
      $("#plane").on("change keyup", function () {
        change_amount($(this).val());
        calc($("#amount").val());
      });
      $(document).ready(function () {
        calc($("#amount").val());
      });
      function change_amount(plan_id) {
        let row = plans.filter((item) => Number(item.id) === Number(plan_id))[0];
        let min = Number(row.min);
        let max = Number(row.max);
        $('#amount').val(min);
      }
    </script>
      </div>
      
                    <div class="chooserleft">
                    <div class="videobox zoomIn animated wow" data-wow-duration="2s">
                     <iframe width="490" height="310" src="https://www.youtube.com/embed/Um63OQz3bjo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    
                    
                    
                   
                    
        <div class="aboutwrap">
            <div class="content">
            <div class="aboutthumb zoomIn wow"><img src="theme/demo67/assets/common/images/aboutthumb.png" /></div>
            
            <div class="abutinfos fadeInDown wow">
            <h1><strong><?= $site_name; ?> </strong></h1>
            <p> <?= $site_name; ?>  is a global Bitcoin-Investment solution for all crypto enthusiasts who are looking for a reliable, secure and reliable platform. <?= $site_name; ?>  works for a British company known as <?= $site_name; ?>  Limited with company number # 10558170. </p>
            <p> <?= $site_name; ?>  provides our customers with the opportunity to grow their investment in a secure environment without the need to learn investment skill. we are very pleased with the management of safe, profitable conditions in which our customers benefit from minimal fuss and optimal convenience. The <?= $site_name; ?>  Expert team is authorized to provide simple, automated and user-friendly regularity for investment and growth in the rapidly growing cryptocurrency market. </p>
            <a href="about.php"> more </a> </div>
            </div>
           
                    <div class="banner">
                        <div class="content">
                            <div class="left fadeInDown wow"><br>
                            
                              <h1><?= $site_name; ?>  IS POWERED BY  <span>Bitcoin INNOVATIVE NEXT GENERATION </span> CRYPTOCURRENCY</h1>
            
        </div>
        <div class="particles2">
            <img src="theme/demo67/assets/common/images/aboutbg.png" alt="" />
        </div>
    </div>
    <div class="referralwrap">
        <div class="content">
            <div class="left fadeInDown wow">
               <h4> <span> Tiered </span> REFERENCE PROGRAM </h4>
                <p> Bitcoin investment with the most premium level referral commissions program by contacting your friends, relatives, colleagues, and your network circles. </p>
                <a href="login.php"> Participate </a>
            </div>
            <div class="right">
                                   <div class="right">
                                    <div class="refbox one zoomIn wow">
                        <h3>10<span>%</span></h3>
                        
                    </div>
                               
                    </div>
                                   
                        
                    </div>
                    
                    
                            </div>
        </div>
    </div>
    <div class="registeredwrap">
        <div class="content">
            <div class="registeredbox">
                <div class="left">
                        
                        
                        
                      
                
                
                              <a target="_blank" href="https://t.me/<?= $site_name; ?> "><i class="fa fa-telegram" style="font-size:48px;color:blue"></i>
                                   
                                   
                                   
                                    </div>
                                    
                <div class="right">
                    <div class="">
                        <img src="#" alt="" />
                    </div>
                    <div class="certificateaction">
                        <a href="login.php" target="_blank" class="viewcompinfo">Get Started</a> 
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="security">
        <div class="content">
            <h2 class="bounceInDown wow">
                <span>safety</span> <?= $site_name; ?>             </h2>
            <center>
                <div class="securitybox one flipInX wow">
                    <img src="theme/demo67/assets/common/images/geotrust.png" alt="" />
                </div>
                <div class="securitybox two flipInX wow">
                    <img src="theme/demo67/assets/common/images/trustguard.png" alt="" />
                </div>
                <div class="securitybox three flipInX wow">
                    <img src="theme/demo67/assets/common/images/sitelock.png" alt="" />
                </div>
                <div class="securitybox five flipInX wow">
                    <img src="theme/demo67/assets/common/images/mcafree.png" alt="" />
                </div>
            </center>
        </div>
    </div>
    <div class="offerwrap">
        <div class="content">
           <h2 class = "bounceInDown wow"> WHAT <span> WE OFFER </span> FOR <br /> OUR INVESTORS? </h2>
            <div class = "offerbox bounceInUp wow">
                <span class = "icon">
                    <img src = "theme/%20demo67/%20assets/%20common/%20images/%20offericon1.php" alt = "" />
                </span>
                <h3> Uniform profitable maturity </h3>
                <p> <?= $site_name; ?>  is a competent and strong team that offers consistent growth in your investment on an ongoing and cyclical basis. </p>
            </div>
            <div class="offerbox bounceInUp wow">
                <span class="icon">
                    <img src="theme/demo67/assets/common/images/offericon2.png" alt="" />
                </span>
              <h3> Instant Payouts </h3>
                <p> All your requests are processed instantly as soon as they are requested. There are no maximum limits. The minimum withdrawal amount is from 50 $. </p>
            </div>
            <div class = "offerbox bounceInUp wow">
                <span class = "icon">
                    <img src = "theme/%20demo67/%20assets/%20common/%20images/%20offericon3.php" alt = "" />
                </span>
                <h3> Professional Support </h3>
                <p> We provide round-the-clock customer support via email and telegram chat. Our support representatives are available 24 hours to find out questions of any complexity. </p>
            </div>
            
        </div>
    </div>
    <div class="achivementwrap">
        <div class="content">
            <h2 class="bounceInDown wow"> GOALS TO REACH IN <span>2020</span> </h2>
            <div class = "statwrap">
                <div class = "statbox one flipInY wow">
                    <span class = "icon">
                        <img src = "theme/%20demo67/%20assets/%20common/%20images/%20staticon1.php" alt = "" />
                    </span>
                    <div class = "infos">
                        <h4> 1 MILLION</h4>
                        <p> INVESTORS </p>
                    </div>
                </div>
                <div class="statbox two flipInX wow">
                    <span class="icon">
                        <img src="theme/demo67/assets/common/images/staticon2.png" alt="" />
                    </span>
                    <div class="infos">
                        <h4>3 MILLION <i class="fa fa-user"></i></h4>
                       <p> PLATFORM USERS </p>
                    </div>
                </div>
                <div class = "statbox three flipInX wow">
                    <span class = "icon">
                        <img src = "theme/%20demo67/%20assets/%20common/%20images/%20staticon3.php" alt = "" />
                    </span>
                    <div class = "infos">
                        <h4> 80 <i class = "fa fa-flag"> </i> </h4>
                        <p> COUNTRIES </p>
                    </div>
                </div>
                <div class = "statbox four flipInX wow">
                    <span class = "icon">
                        <img src = "theme/%20demo67/%20assets/%20common/%20images/%20staticon4.php" alt = "" />
                    </span>
                    <div class = "infos">
                        <h4> 1K </h4>
                        <p> ONLINE INVESTMENT WEBINAR </p>
                    </div>
                </div>
            </div>
        
                </div>
            <div class = "achivementbox">
                <div class = "left">
                    <h4 class = "fadeInDown wow"> TOP <strong> 10 INVESTORS </strong> </h4>
                                          
                                           
                                          
                                          
                                            <ul class="fadeInDown wow">
                            <li style="width:105px;">zobher972</li>
                            <li>
                                 
                                    <i class="fa fa-bitcoin" style="font-size:30px;color:yellow"></i>
                                
                            </li>
                            <li>470,850.00 <i class="fa fa-usd"></i></li>
                        </ul>
                                  
                                          
                                          
                                            <ul class="fadeInDown wow">
                            <li style="width:105px;">zkn69flo</li>
                            <li>
                               <i class="fa fa-bitcoin" style="font-size:30px;color:yellow"></i>
                                
                            </li>
                            <li>420,500.00 <i class="fa fa-usd"></i></li>
                        </ul>
                                  
                                          
                                          
                                            <ul class="fadeInDown wow">
                            <li style="width:105px;">GtaUzb</li>
                            <li>
                               <i class="fa fa-bitcoin" style="font-size:30px;color:yellow"></i>
                                
                            </li>
                            <li>398,450.00 <i class="fa fa-usd"></i></li>
                        </ul>
                                  
                                          
                                          
                                            <ul class="fadeInDown wow">
                            <li style="width:105px;">balisier</li>
                            <li>
                               <i class="fa fa-bitcoin" style="font-size:30px;color:yellow"></i>
                                
                            </li>
                            <li>380,400.00 <i class="fa fa-usd"></i></li>
                        </ul>
                                  
                                          
                                          
                                            <ul class="fadeInDown wow">
                            <li style="width:105px;">Springs01</li>
                            <li>
                               <i class="fa fa-bitcoin" style="font-size:30px;color:yellow"></i>
                                
                            </li>
                            <li>365,800.00 <i class="fa fa-usd"></i></li>
                        </ul>
                                  
                                          
                                          
                                            <ul class="fadeInDown wow">
                            <li style="width:105px;">Ivanna</li>
                            <li>
                               <i class="fa fa-bitcoin" style="font-size:30px;color:yellow"></i>
                                
                            </li>
                            <li>350,000.00 <i class="fa fa-usd"></i></li>
                        </ul>
                                  
                                          
                                          
                                            <ul class="fadeInDown wow">
                            <li style="width:105px;">Gulom92</li>
                            <li>
                               <i class="fa fa-bitcoin" style="font-size:30px;color:yellow"></i>
                                
                            </li>
                            <li>305,200.00 <i class="fa fa-usd"></i></li>
                        </ul>
                                  
                                          
                                          
                                            <ul class="fadeInDown wow">
                            <li style="width:105px;">Axmadjon</li>
                            <li>
                               <i class="fa fa-bitcoin" style="font-size:30px;color:yellow"></i>
                                
                            </li>
                            <li>216,500.00 <i class="fa fa-usd"></i></li>
                        </ul>
                                  
                                          
                                          
                                            <ul class="fadeInDown wow">
                            <li style="width:105px;">Slavutich</li>
                            <li>
                               <i class="fa fa-bitcoin" style="font-size:30px;color:yellow"></i>
                                
                            </li>
                            <li>155,000.00<i class="fa fa-usd"></i></li>
                        </ul>
                                  
                                          
                                          
                                            <ul class="fadeInDown wow">
                            <li style="width:105px;">Centrius</li>
                            <li>
                              <i class="fa fa-bitcoin" style="font-size:30px;color:yellow"></i>
                                
                            </li>
                            <li>96,500.00 <i class="fa fa-usd"></i></li>
                        </ul>
                                    
                                 
                                     
                                           
                                    </div>
                <div class="right">
                    <h4 class="fadeInDown wow">T0P <strong> 10 Withdrawal</strong></h4>
                                         
                                         
                                          
                                         
                                         
                                            <ul class="fadeInDown wow">
                            <li style="width:105px;">Juliya86</li>
                            <li>
                               <i class="fa fa-bitcoin" style="font-size:30px;color:yellow"></i>
                                
                            </li>
                            <li>530,000.00 <i class="fa fa-usd"></i></li>
                        </ul>
                                         
                                         
                                         
                                            <ul class="fadeInDown wow">
                            <li style="width:105px;">margaritak</li>
                            <li>
                               <i class="fa fa-bitcoin" style="font-size:30px;color:yellow"></i>
                                
                            </li>
                            <li>500,500.00 <i class="fa fa-usd"></i></li>
                        </ul>
                                         
                                         
                                         
                                            <ul class="fadeInDown wow">
                            <li style="width:105px;">Jonik</li>
                            <li>
                                <i class="fa fa-bitcoin" style="font-size:30px;color:yellow"></i>
                                
                            </li>
                            <li>460,000.00<i class="fa fa-usd"></i></li>
                        </ul>
                                         
                                         
                                         
                                            <ul class="fadeInDown wow">
                            <li style="width:105px;">Lara2016</li>
                            <li>
                               <i class="fa fa-bitcoin" style="font-size:30px;color:yellow"></i>
                                
                            </li>
                            <li>399,000.00 <i class="fa fa-usd"></i></li>
                        </ul>
                                         
                                         
                                         
                                            <ul class="fadeInDown wow">
                            <li style="width:105px;">Skryabin</li>
                            <li>
                                <i class="fa fa-bitcoin" style="font-size:30px;color:yellow"></i>
                                
                            </li>
                            <li>354,600.00 <i class="fa fa-usd"></i></li>
                        </ul>
                                         
                                         
                                         
                                            <ul class="fadeInDown wow">
                            <li style="width:105px;">reyka</li>
                            <li>
                                <i class="fa fa-bitcoin" style="font-size:30px;color:yellow"></i>
                                
                            </li>
                            <li>300,000.00 <i class="fa fa-usd"></i></li>
                        </ul>
                                         
                                         
                                         
                                            <ul class="fadeInDown wow">
                            <li style="width:105px;">koshka7</li>
                            <li>
                               <i class="fa fa-bitcoin" style="font-size:30px;color:yellow"></i>
                                
                            </li>
                            <li>295,350.00 <i class="fa fa-usd"></i></li>
                        </ul>
                                         
                                         
                                         
                                            <ul class="fadeInDown wow">
                            <li style="width:105px;">Dred</li>
                            <li>
                               <i class="fa fa-bitcoin" style="font-size:30px;color:yellow"></i>
                                
                            </li>
                            <li>205,700.00 <i class="fa fa-usd"></i></li>
                        </ul>
                                         
                                         
                                         
                                            <ul class="fadeInDown wow">
                            <li style="width:105px;">SVTaiana</li>
                            <li>
                              <i class="fa fa-bitcoin" style="font-size:30px;color:yellow"></i>
                                
                            </li>
                            <li>160,950.00 <i class="fa fa-usd"></i></li>
                        </ul>
                                         
                                         
                                         
                                            <ul class="fadeInDown wow">
                            <li style="width:105px;">timurmonitoring</li>
                            <li>
                                <i class="fa fa-bitcoin" style="font-size:30px;color:yellow"></i>
                                
                            </li>
                            <li>92,000.00 <i class="fa fa-usd"></i></li>
                        </ul>
                                                                        
                                           
                                           
                           
                                      
            </div>
       <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5f74dd97f0e7167d001521f4/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
        </div>
        
    </div>
    <div class="footerpaymentwrap">
        <div class="content">
        	
        	                         
            <div id="google_translate_element"></div>

<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout. HORIZONTAL}, 'google_translate_element');
}
</script>

<script type="text/javascript" src="https://translate.google.com/translate_a/elementa0d8.php?cb=googleTranslateElementInit"></script>       
                
    </div>
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Company certificate</h4>
                </div>
                <div class="modal-body">
                    <p><img src="theme/demo67/assets/common/images/certificateth.jpg" alt="" /></p>
                </div>
                <div class="modal-footer"> </div>
            </div>
            
        </div>
    </div>
    
<div class="footerwrap">
        <div class="content">
            <div class="copyright">
                <p>
                    <a href="index.php">
                        <img src="../www.<?= $site_name; ?> .com/assets/images/logo/logo.png" alt="" />
                    </a>
                </p>
                <p>&copy; 2020 <?= $site_name; ?>  ALL RIGHTS RESERVED.</p>
            </div>
            <div class="footerlistings">
                <ul>
                    <li> <a href="#"> HOME </a> </li>
                    <li> <a href="about.php"> ABOUT US </a> </li>
                    
                    <li> <a href="contact.php"> CONTACT </a> </li>
                </ul>
            </div>
            <div class = "footerlistings">
                <ul>
                    
                    <li> <a href="faqs.php"> FAQ </a> </li>
                    
                    
                </ul>
            </div>
            <div class="footeradress">
                             
                             
          <p class="email"><?= $site_email; ?> m</p>
                          
                          
                          
                          
                            </div>
        </div>
    </div>
</div>
<div style="position:fixed;left:5px; bottom:3px;z-index: 99;">
    </div>
</body>

<!-- Mirrored from <?= $site_name; ?> .guru/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 11 Jun 2020 08:38:40 GMT -->

<!-- Mirrored from <?= $site_name; ?> .co/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 14 Dec 2020 10:05:12 GMT -->
</html>