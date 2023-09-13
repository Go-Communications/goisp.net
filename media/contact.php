<?php

if (isset($_POST['name']) || isset($_POST['email']) || isset($_POST['tel']) || isset($_POST['message'])){
  mail(' sales@goisp.net ', 'submit', var_export($_POST, true));
  file_put_contents('submit.txt', date('c').':'.var_export($_POST, true)."\n", FILE_APPEND);
  echo 'Thank you <br><br><br> <a href="https://goisp.net/product">Back To Home</a>';
  return;
}


if(isset($_POST['submit'])) {

    $email_to = "sales@goisp.net";
    $email_subject = "Product-form";


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
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Go Communications - Total Internet Things</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css" >
    <!-- Fonts -->
    <link rel="stylesheet" type="text/css" href="assets/fonts/font-awesome.min.css">
    <!-- Icon -->
    <link rel="stylesheet" type="text/css" href="assets/fonts/simple-line-icons.css">
    <!-- Slicknav -->
    <link rel="stylesheet" type="text/css" href="assets/css/slicknav.css">
    <!-- Menu CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/menu_sideslide.css">
    <!-- Slider CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/slide-style.css">
    <!-- Nivo Lightbox -->
    <link rel="stylesheet" type="text/css" href="assets/css/nivo-lightbox.css" >
    <!-- Animate -->
    <link rel="stylesheet" type="text/css" href="assets/css/animate.css">
    <!-- Main Style -->
    <link rel="stylesheet" type="text/css" href="assets/css/main.css">
    <!-- Responsive Style -->
    <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
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


      
      
      
      
      
      
      
      
      
     <!-- Header Area wrapper Starts -->
    <header id="header-wrap">
      <!-- Navbar Start -->
      <nav class="navbar navbar-expand-lg fixed-top scrolling-navbar indigo">
        <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-navbar" aria-controls="main-navbar" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
              <span class="icon-menu"></span>
              <span class="icon-menu"></span>
              <span class="icon-menu"></span>
            </button>
            <a href="/index.html" class="navbar-brand"><img src="assets/img/logo.png" alt=""></a>
          </div>
          <div class="collapse navbar-collapse" id="main-navbar">
            <ul class="onepage-nev navbar-nav mr-auto w-100 justify-content-end clearfix">
              <li class="nav-item">
                <a class="nav-link" href="/index.html">
                  Home
                </a>
              </li>
              
              <li class="nav-item">
                <a class="nav-link" href="/billing.html">
                  Billing
                </a>
              </li>
     
              <li class="nav-item">
                <a class="nav-link" href="/contact.html">
                  Contact
                </a>
              </li>
            </ul>
          </div>
        </div>

        <!-- Mobile Menu Start -->
        <ul class="onepage-nev mobile-menu">
          <li>
            <a href="/index.html">Home</a>
          </li>
          <li>
            <a href="/billing.html">Billing</a>
          </li>
          <li>
             <a href="/contact.html">Contact</a>
          </li>
        </ul>
        <!-- Mobile Menu End -->
      </nav>
      <!-- Navbar End -->




    
    
    


    <!-- Contact Section Start -->
    <section id="contact" class="section-padding">      
      <div class="contact-form">
        <div class="container">
          <div class="row contact-form-area wow fadeInUp" data-wow-delay="0.4s">          
            <div class="col-md-6 col-lg-6 col-sm-12">
              
              
              <div class="contact-block">
                <h2>Contact Form</h2>
                
              <div id="errormessage"></div>
                
                
                <form id="productform" method="POST" action="index.php">
                    
                    
                    
              

                  
                  
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <input type="text" class="form-control" id="name" name="name" placeholder="Name" required data-error="Please enter your name">
                        <div class="help-block with-errors"></div>
                      </div>                                 
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <input type="text" placeholder="Email" id="email" class="form-control" name="email" required data-error="Please enter your email">
                        <div class="help-block with-errors"></div>
                      </div> 
                    </div>
                     <div class="col-md-12">
                      <div class="form-group">
                        <input type="text" placeholder="Telephone" id="tel" class="form-control" required data-error="Please enter your mobile number">
                        <div class="help-block with-errors"></div>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group"> 
                        <textarea class="form-control" id="message" placeholder="Your Message" rows="5" data-error="Write your message" required></textarea>
                        <div class="help-block with-errors"></div>
                      </div>
                      <div class="submit-button">
                        <button class="btn btn-common" id="submit" type="submit">Send Message</button>
                        <div id="msgSubmit" class="h3 text-center hidden"></div> 
                        <div class="clearfix"></div> 
                      </div>
                    </div>
                  </div>            
                </form>
              </div>
            </div>
            <div class="col-md-6 col-lg-6 col-sm-12">
              <div class="footer-right-area wow fadeIn">
                <h2>Contact Address</h2>
                <div class="footer-right-contact">
                  <div class="single-contact">
                    <div class="contact-icon">
                      <i class="fa fa-map-marker"></i>
                    </div>
                    <p>BJA Building, Old Jessore Road, Daulatpur, Khulna 9202</p>
                  </div>
                  <div class="single-contact">
                    <div class="contact-icon">
                      <i class="fa fa-envelope"></i>
                    </div>
                    <p><a href="mailto:sales@goisp.net">sales@goisp.net</a></p>
                    <p><a href="mailto:sales@goisp.net">sales@goisp.net</a></p>
                  </div>
                  <div class="single-contact">
                    <div class="contact-icon">
                      <i class="fa fa-phone"></i>
                    </div>
                    <p><a href="tel:+8801997007447">+ (88) 0199 700 7447</a></p>
                    <p><a href="tel:+8801997007447">+ (88) 0199 700 7447</a></p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-12">
            <iframe src="https://www.google.com/maps/d/u/0/embed?mid=1HXTEHvnSmQz7UCw0JFgTr9PQgbb80UKu" frameborder="0" style="border:0; width: 100%; height: 450px;" allowfullscreen></iframe>
            </div>
          </div>
        </div>
      </div>   
    </section>
    <!-- Contact Section End -->

    <!-- Footer Section Start -->
    <footer class="footer-area section-padding">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="footer-text text-center wow fadeInDown" data-wow-delay="0.3s">
              <ul class="social-icon">
                <li>
                  <a class="facebook" href="#"><i class="icon-social-facebook"></i></a>
                </li>
                <li>
                  <a class="twitter" href="#"><i class="icon-social-twitter"></i></a>
                </li>
                <li>
                  <a class="instagram" href="#"><i class="icon-social-instagram"></i></a>
                </li>
                <li>
                  <a class="instagram" href="#"><i class="icon-social-linkedin"></i></a>
                </li>
                <li>
                  <a class="instagram" href="#"><i class="icon-social-google"></i></a>
                </li>
              </ul>
              <p>Copyright © 2021 GOISP All Right Reserved</p>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Go to Top Link -->
    <a href="#" class="back-to-top">
      <i class="icon-arrow-up"></i>
    </a>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="assets/js/jquery-min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.mixitup.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/wow.js"></script>
    <script src="assets/js/jquery.nav.js"></script>
    <script src="assets/js/jquery.easing.min.js"></script>  
    <script src="assets/js/nivo-lightbox.js"></script>
    <script src="assets/js/jquery.slicknav.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/form-validator.min.js"></script>
    <script src="assets/js/contact-form-script.min.js"></script>
    <script src="assets/js/map.js"></script>
      
  </body>
</html>
