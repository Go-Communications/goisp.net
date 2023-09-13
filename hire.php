
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
  <link href="img/go/go-logo-1.png" rel="icon">
  <link href="img/go/go-logo-1.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

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

  
  <meta property="fb:pages" content="106853014236125" />
  
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-6173503627170942"
     crossorigin="anonymous"></script>
  
  
  
  
  <script async custom-element="amp-auto-ads"
        src="https://cdn.ampproject.org/v0/amp-auto-ads-0.1.js">
</script>
  
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
        <a href="https://goisp.net" class="scrollto"><img src="img/go/go-7.png" alt="" class="img-fluid"></a>
      </div>

      <nav class="main-nav float-right d-none d-lg-block">
        <ul>
          <li class="active"><a href="index.php">Back 2 Home</a></li>
          
          
          <li><a href="hire.php">Hire</a></li>
          <!----<li><a href="#portfolio">Education</a></li>------>
         
         
          
          
        </ul>
      </nav><!-- .main-nav -->
      
    </div>
  </header><!-- #header -->
  
  
 
  


  

  

    <section id="about" class="clearfix">
        <div class="container">
      
      
      
      <!------------- Fiverr GIG-------------------------->
                <iframe src="https://www.fiverr.com/embed_gigs?id=U2FsdGVkX1+ByE0tZbIl8wXBWu9p9doiuiVB+rAAHGl8NkcVjSWilFn2a8ZGa8q7BewyFN8NWKsQxs1sHZ2JipkPQElCLUHTr+SjDUmPrxvP4hdaxAmWNnIJDOGggmOVV/MKCpIsejt12Y3KrfWlmxP9JJyG38/jCPshQAUEFh3i9ja1GOE8yCHfmvDv/MazaY4eYl+dRg8TLpSue8bnK08R8aI+3m4IbnBR6EcBcnVeKZNJ1pAC3d6XGMHg/bsYE2RlakxBh4PcFmIfu4cIIdb5GebA0OB2NJawyTLPb4RXeyBPnHurJ1Zi1yCDWbs5KQ/gNg9KuBDsq0Th8FS+DL7+VGpTHAW1+/5l+7ewvWdpBhdK476A7NRg2dbFBPT7gABTOR2aqHWl/ahqtEwttyh7xvCDyKJ5ASMRjBroKv0Ao9a7nFmOYmyIlBGWRicfANrXh0A+bOw1op/yi2xjFOrgoB6eHU6YS970o8emPw4=&affiliate_id=266489&strip_google_tagmanager=true" loading="lazy" data-with-title="true" class="fiverr_nga_frame" frameborder="0" height="5px" width="100%" onload='var s = document.createElement("script");s.setAttribute("src", "https://npm-assets.fiverrcdn.com/nga/onload_iframe.js");document.body.appendChild(s);' ></iframe> 
                <br>
                <iframe src="https://www.fiverr.com/embed_gigs?id=U2FsdGVkX1/idVBMDUVT1l3oc98FkqUi9Dx9P3oCZdNb0V/juhWynKfBj5Z6lcwqaDxhWZ0TKlAfZybDDPxYtwtiQoSocPlU3Jdg38pOVxQCMOVWF72AG/kAca8gMXLjlfdI4Ht87BtUDuMDSrNnz5KkSRCdaD8ISNJo2vBHTMqBQXh+j4Hr+c5pmWAgIOrZ2/uV1MS91UMPAWmortClTUoXyC5SeovLqz84wOVaAKtpXEBd6kget7JwnhqijPUwDwlxzdpE9MWeTjFA9fyyIZWzfgJSRuO2/MAGmH7+9rsLYcqWCFgPqY8WVgdZElnmhGmORGZC4Ep5SPUpgkSpEd16vA33tQSRGdBylBxs1fTfdCmybIDHZVdUyCP+EwJvvFjGWeVbxtIDRTLZVaaYv5L5XjrtX74IKWZN+rYc5F8ku89Fk8mZmbQpjSNru/sCDSTR2QTj6+sRe6ugzg9GWA==&affiliate_id=266489&strip_google_tagmanager=true" loading="lazy" data-with-title="true" class="fiverr_nga_frame" frameborder="0" height="5px" width="100%" onload='var s = document.createElement("script");s.setAttribute("src", "https://npm-assets.fiverrcdn.com/nga/onload_iframe.js");document.body.appendChild(s);' ></iframe> 
                <br>
                <iframe src="https://www.fiverr.com/embed_gigs?id=U2FsdGVkX18PJkps//vHCUyUP3WRnk6T9QtKvC4BTUepYm2zodJALEgg7mK3zlcT9kifqQ1JhI96EHzn1hgA4em3TjEVH03s57RNEbmJev0Uti1ibTQw2xHCdup/YdOzfFTDcwlVeU3o1DR/UwFOnMpk0Z8NtQlyJszoCxQ9eSxOxa/FV5q7mrxkejO/cuHWtGU4l00h78h/inRfBpbNWqQ95NFx1GB8qzMR8TdfWT8E7JUpQBcBgewPLPYgyHZfMOyQ9MeoHQHGzFvJ9fjRV3y3pdXP+Mdc/thqQ10f4qM1KtGIz8QcdfS8+Hae05i7Op1BwTHEW5B37P2eNDWfNf/WccS5exJ0y2f7Y9m+bJtA+qXrKIVwYnCxRcyQOsGcWcAlLhW9/CU+1LtVXU5Sf4HLxiD8u0/Rd7zLc60xgylRIxKYvawkaH9vzS6lnBy9BpN81HmIZ57D41BX++rFtw==&affiliate_id=266489&strip_google_tagmanager=true" loading="lazy" data-with-title="true" class="fiverr_nga_frame" frameborder="0" height="5px" width="100%" onload='var s = document.createElement("script");s.setAttribute("src", "https://npm-assets.fiverrcdn.com/nga/onload_iframe.js");document.body.appendChild(s);' ></iframe> 
                <br>
                




  </section>
  </div>

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
              <li><a href="terms.php">Terms & Conditions</a></li>
              <li><a href="privacy.html">Privacy Policy</a></li>
              <li><a href="investors.php">Investor Relationship</a></li>
              <li><a href="https://goisp.net/shop">Order Internet</a></li>
              <li><a href="hire.php">Hire Freelancer</a></li>
              
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
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/mobile-nav/mobile-nav.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/isotope/isotope.pkgd.min.js"></script>
  <script src="lib/lightbox/js/lightbox.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>
  
  
  

</body>
</html>
