
<?php

if (isset($_POST['name']) || isset($_POST['email'])){
  mail(' ---- ', 'submission', var_export($_POST, true));
  file_put_contents('submissions.txt', date('c').':'.var_export($_POST, true)."\n", FILE_APPEND);
  echo 'Thank you <br><br><br> <a href="https://goisp.net">Back To Home</a>';
  return;
}


if(isset($_POST['submit'])) {

    $email_to = "----";
    $email_subject = "Contact-form";


    $name = $_POST['name']; 
    $tel = $_POST['tel']; 
    $email = $_POST['email']; 
    $message = $_POST['message']; 

    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }


    $email_message .= "name: ".clean_string($name)."\n";
    $email_message .= "Telephone: ".clean_string($tel)."\n";
    $email_message .= "Message: ".clean_string($message)."\n";

    // create email headers
    $headers = "From: ".$email."\n\n";
    mail($email_to, $email_subject, $email_message, $headers);
    header("Location: index.html");
}


function link_by_speed($speed, $yearly){
  $by_speed = [
    '1' => '1+Mbps+BDT+++400+/+month',
    '2' => '2+Mbps+BDT++600+/+month',
    '4' => '4+Mbps+BDT+1000+/+month',
    '25' => '25+Mbps+BDT+10000+/+month',
    '50' => '50+Mbps+BDT+25000+/+month',
    '100' => '100+Mbps+BDT+40000+/+month'
  ];


  $sp = $by_speed[$speed];
  if ($yearly === true){
    $yearly = '&entry.2109138769=I+want+to+save+16.7%25+by+paying+12+month+in+advance+yearly';
  }
  return "https://docs.google.com/forms/d/e/1FAIpQLSflYDMh6wjaJnRd899fyBvUjcFdHse_zUWS9-7I7_6uLRufMw/viewform?usp=pp_url&entry.588393791=".$sp.$yearly;
          https://docs.google.com/forms/d/e/1FAIpQLSflYDMh6wjaJnRd899fyBvUjcFdHse_zUWS9-7I7_6uLRufMw/viewform?usp=pp_url&entry.588393791=
}

?>
<!DOCTYPE html>
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  
  <title>GO | Internet Service Provider </title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="https://goisp.net/img/go/go-logo-1.png" rel="icon">
  <link href="https://goisp.net/img/go/go-logo-1.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="https://goisp.net/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="https://goisp.net/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="https://goisp.net/lib/animate/animate.min.css" rel="stylesheet">
  <link href="https://goisp.net/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="https://goisp.net/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="https://goisp.net/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="https://goisp.net/css/style.css" rel="stylesheet">

  <!-- Facebook Pixel Code -->
  <script>
   !function(f,b,e,v,n,t,s)
   {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
   n.callMethod.apply(n,arguments):n.queue.push(arguments)};
   if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
   n.queue=[];t=b.createElement(e);t.async=!0;
   t.src=v;s=b.getElementsByTagName(e)[0];
   s.parentNode.insertBefore(t,s)}(window, document,'script',
   'https://connect.facebook.net/en_US/fbevents.js');
   fbq('init', '2750778781679746');
   fbq('track', 'PageView');
  </script>
  <noscript><img height="1" width="1" style="display:none"
   src="https://www.facebook.com/tr?id=2750778781679746&ev=PageView&noscript=1"
  /></noscript>
  <!-- End Facebook Pixel Code -->
    
    
    <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-158648186-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
  
    gtag('config', 'UA-158648186-1');
  </script>
  


  <!-- =======================================================
    Theme Name: goisp
    Theme URL: https://goisp.net
    Author: GoISP.Net
    License: https://goisp.net
  ======================================================= -->
  
  
  <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-NN5R3V2');</script>
<!-- End Google Tag Manager -->
  
  
  
  <script data-ad-client="ca-pub-6173503627170942" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
  
  
  
  <script async custom-element="amp-ad" src="https://cdn.ampproject.org/v0/amp-ad-0.1.js"></script>
  
  <meta property="fb:pages" content="106853014236125" />
  
</head>

<body>
    
    
    <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NN5R3V2"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
    
<!-- Load Facebook SDK for JavaScript -->
      <div id="fb-root"></div>
      <script>
        window.fbAsyncInit = function() {
          FB.init({
            xfbml            : true,
            version          : 'v6.0'
          });
        };

        (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));</script>

      <!-- Your customer chat code -->
      <div class="fb-customerchat"
        attribution=setup_tool
        page_id="106853014236125">
      </div>




  <!--==========================
  Header
  ============================-->

    <header id="header" class="fixed-top">      
    <div class="container">

      <div class="logo float-left">
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <h1 class="text-light"><a href="#header"><span>NewBiz</span></a></h1> -->
        <a href="https://goisp.net" class="scrollto"><img src="https://goisp.net/img/go/go-7.png" alt="" class="img-fluid"></a>
      </div>

      <nav class="main-nav float-right d-none d-lg-block">
        <ul>
          <li class="active"><a href="https://goisp.net">Back 2 Home</a></li>
          
          
          
          <!----<li><a href="#portfolio">Education</a></li>------>
         
         
          
          
        </ul>
      </nav><!-- .main-nav -->
      
    </div>
  </header><!-- #header -->
  







    <!--==========================
      Package Section
    ============================-->
   <section id="portfolio" class="clearfix">
      <div class="container">
          
          <br>
          <br>

        <header class="section-header">
          <h3 class="section-title">Internet Package</h3>
        </header>

        <div class="row">
          <div class="col-lg-12">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-residential">Residential</li>
              <li data-filter=".filter-corporate">Corporate</li>
              <li data-filter=".filter-reseller">Reseller</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container">
            
            
            <!---Residential--->

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="https://goisp.net/package/img/8mbps.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="https://goisp.net/package/8mbps.php">8 Mbps internet package</a></h4>
                <p>Residential</p>
                <div>
                  <a href="https://goisp.net/package/8mbps-750tk.png" data-lightbox="portfolio" data-title="8mbps" class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="https://goisp.net/package/8mbps.php" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>
          
          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="https://goisp.net/package/img/10mbps.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="https://goisp.net/package/10mbps.php">10 Mbps internet package</a></h4>
                <p>Residential</p>
                <div>
                  <a href="https://goisp.net/package/10mbps.png" data-lightbox="portfolio" data-title="10mbps" class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="https://goisp.net/package/10mbps.php" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>
          
          
          
          <!---End of Residential--->
          
          
          
          
          <!---Corporate--->
          

          <div class="col-lg-4 col-md-6 portfolio-item filter-web" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <img src="img/30mbps.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#">30 Mbps package</a></h4>
                <p>Corporate</p>
                <div>
                  <a href="img/30mbps.png" class="link-preview" data-lightbox="portfolio" data-title="corporate" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="30mbps.php" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>
          
          
          
          
          <!---End of Corporate--->
          
          
          
          
          <!---Reseller-->

          <div class="col-lg-4 col-md-6 portfolio-item filter-app" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <img src="img/reseller.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="reseller.php">Custom Package</a></h4>
                <p>Reseller</p>
                <div>
                  <a href="img/reseller.png" class="link-preview" data-lightbox="portfolio" data-title="Reseller" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="reseller.php" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>



        </div>

      </div>
    </section><!-- #portfolio -------->


































  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6 footer-info">
            <h3>GOISP</h3>
            <p>Broadband internet services in Bangladesh.</p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><a href="https://goisp.net/terms.php">Terms & Conditions</a></li>
              <li><a href="https://goisp.net/privacy.html">Privacy Policy</a></li>
              <li><a href="https://goisp.net/investors.php">Investor Relationship</a></li>
              <li><a href="https://goisp.net/https://goisp/shop">Order Internet</a></li>
              <li><a href="https://goisp.net/hire.php">Hire Freelancer</a></li>
              
              <li><a href="mailto:abuse@goisp.net">Complain</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Contact Us</h4>
            <p>Daulatpur Khulna 9202 <br>
              
              Bangladesh <br>
              <strong>Registration ID:</strong> KCC 3 1679<br>
              <strong>ISP Registration No.:</strong>14.32.0000.702.45.785.19.305\Cogent Broadband<br>
              <strong>Phone:</strong> +88 0199 700 7447<br>
              <strong>Email:</strong> info@goisp.net<br>
            </p>

            <div class="social-links">
              <a href="https://fb.com/goispbd"><i class="fa fa-facebook"></i></a>
              <a href="https://goisp.business.site"><i class="fa fa-google"></i></a>
             
            </div>

          </div>

        <!------  <div class="col-lg-3 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
            <p>Subscribe for GO ISP newsletter.</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit"  value="Subscribe">
            </form>
          </div>  ------>

        </div>
      </div>
    </div>
  </div>
    

    
    
    
    

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>GoISP</strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://goisp.net/license/
          Purchase the pro version with working PHP/AJAX contact form: https://goisp.net/theme
        -->
        Designed by <a href="https://goisp.net/">GoMade</a>
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <!-- Uncomment below i you want to use a preloader -->
  <!-- <div id="preloader"></div> -->

  <!-- JavaScript Libraries -->
  <script src="https://goisp.net/lib/jquery/jquery.min.js"></script>
  <script src="https://goisp.net/lib/jquery/jquery-migrate.min.js"></script>
  <script src="https://goisp.net/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="https://goisp.net/lib/easing/easing.min.js"></script>
  <script src="https://goisp.net/lib/mobile-nav/mobile-nav.js"></script>
  <script src="https://goisp.net/lib/wow/wow.min.js"></script>
  <script src="https://goisp.net/lib/waypoints/waypoints.min.js"></script>
  <script src="https://goisp.net/lib/counterup/counterup.min.js"></script>
  <script src="https://goisp.net/lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="https://goisp.net/lib/isotope/isotope.pkgd.min.js"></script>
  <script src="https://goisp.net/lib/lightbox/js/lightbox.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="https://goisp.net/contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="https://goisp.net/js/main.js"></script>
  
  
  

</body>
</html>
