
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
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
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
        
        
        
        
        
        
                    
                    <!-- DO NOT MODIFY -->
            <!-- Quora Pixel Code (JS Helper) -->
            <script>
            !function(q,e,v,n,t,s){if(q.qp) return; n=q.qp=function(){n.qp?n.qp.apply(n,arguments):n.queue.push(arguments);}; n.queue=[];t=document.createElement(e);t.async=!0;t.src=v; s=document.getElementsByTagName(e)[0]; s.parentNode.insertBefore(t,s);}(window, 'script', 'https://a.quora.com/qevents.js');
            qp('init', '7617f0f374b04b59b45939fbbfebc80e');
            qp('track', 'ViewContent');
            </script>
            <noscript><img height="1" width="1" style="display:none" src="https://q.quora.com/_/ad/7617f0f374b04b59b45939fbbfebc80e/pixel?tag=ViewContent&noscript=1"/></noscript>
            <!-- End of Quora Pixel Code -->
            
            
            <script>qp('track', 'CompleteRegistration');</script>
                    
                    
                    
                    
        
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
                    <li class="active"><a href="https://goisp.net">Back 2 Home</a></li>
                    
                    </ul>
                </nav><!-- .main-nav -->
            </div>
        </header><!-- #header -->
        
        
       
    <main id="main">
        <br><br>
        <div>
        
            <!--==========================
            Investment notice Section
            ============================-->
            
            <section id="about">
                <div class="container">
                    <strong>GOISP</strong> is connecting people with the internet by fiber cables expanding from Khulna Bangladesh. We offer optic fiber backbone connectivity direct to your office and home, wireless zone installation in railway station, bus station, and city mall area or inside your large wearhouse. 
                    <br><br>
                    
                    <h4><strong>Investment Notice</strong></h4>
                    
                    <p>
                        Get a chance to make profit based on your small investment within shortest period with GOISP. We are growing faster and it's an opportunity for you to be a stakeholder of GOISP
                        

                        <p>We appreciate your interest to join with us and be a part of GOISP. You can fill up <a href="https://docs.google.com/forms/d/1da13EzgwGe3ooKwdqpi05sDf6srQsOLPf-J9kr9W3Lg/edit?usp=sharing"> Subscription form</a> to share your interests and submit to notify us. We will contact with you within 24 hour. </p>
                    </p>
                </div>
            </section>
        </div>
        


    


    <section id="why-us" class="wow fadeIn">
      <div class="container">
        

        <div class="row counters">

          
          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">20</span> <span>% </span>
            <p>Growth in a year</p>
            <p><button><a href="https://docs.google.com/forms/d/1da13EzgwGe3ooKwdqpi05sDf6srQsOLPf-J9kr9W3Lg/edit?usp=sharing">Subscribe now</a></button></p>
          </div>
          
          
          
  
        </div>

      </div>
    </section>

    <br><br>
    
    <!--=================
    Terms of investment
    ==================-->
     <section>
      <div class="container">
        <header>
          <h2>Terms of investment</h2>
          </header>
          
          <p>
            <b>Terms:</b>
            <br>
            
                1. Profit: 20% / year
                <br>
                2. Duration: 1 year or longer
                <br>
                3. Amount: 100 USD to 100K USD - Maybe 100 Millions possible
                <br>
            </p>
          
            
            <p>
                <b>Example: </b>
                <br>
                - If you invest 10000 USD into GOISP you'll get returned 12000 USD after a year.
                <br>
                - If you invest 100 USD into GOISP you'll get returned 120 USD after a year.
                <br>
                - If you invest 100000 USD into GOISP you'll get returned 120000 USD after a year.
            </p>
            
            
            <p>
                <b>How To Invest</b>
                <br>
                
                Fill out our form <a href="https://docs.google.com/forms/d/1da13EzgwGe3ooKwdqpi05sDf6srQsOLPf-J9kr9W3Lg/edit?usp=sharing">Click To Fill Up Google Form</a>
                <br>
                We'll get in touch and talk about best way to pay your investment.
            </p>
            
            
            <p>

              <b>Why you invest to GOISP?</b>
              <br>
              
              ISP business in Bangladesh is still a growing market. Everybody wants internet. People want stable fast internet. We have proven internet Speed connectivity and infrastructure installed.
              
              </p>
              
              
              
              <p>

              <b>Our plan: First stage:</b>
              <br>
              
              We are running our broadband internet networking operation in khulna city, southern divisional capital city of Bangladesh. Khulna have more than 500,000 permanent living citizens in town. Additionally, here have 50,000 business organization all over khulna city. We need investment 100,000 USD to connect around 10,000 customers all over khulna city. GOISP will generate target revenue within six months after investment. And, we offer you sharp 20% profit share within after a year.
              
              </p>
              
              
              <p>

              <b>Our plan: Second stage:</b>
              <br>
              
              Bangladesh is a over population county. We have 200 Millions people living place within 157,570 Square Kilometers area. This is a huge population density. Broadband Internet benefits are, if you can get customers living places are adjacent with one another, that will be the most remarkable terms to save installation cost. Because you need low investment cost of fiber optics and POE switches. In stage second, we will scale all over Bangladesh to provide internet service more than 100,000 customers. We need minimum investment of 10 Millions USD to scale all over Bangladesh. We believe, we can do it together to enlight our future. 
            
              </p>
              
          </div>
          </section>
    

    <!--==========================
      Why Us Section
    ============================-->
    <section>
      <div class="container">
        <header>
          <h2>How To Verify 'GOISP'</h2>
          </header>
          
          <!----Why you invest to GOISP?</b></p--->
          <!----p>ISP business in Bangladesh is still a growing market. Everybody wants internet.
          <br>
          People want stable fast internet. We have proven internet Speed connectivity and infrastructure installed..
          <br><br><br>
          
          
          <strong>First stage:</strong>
            <br>
            We are running our broadband internet networking operation in Khulna city, southern divisional capital city of Bangladesh. Khulna have more than 500,000 permanent living citizens in town. Additionally, here have 50,000 business organization all over Khulna city. We need investment 100,000 USD to connect around 10,000 customers all over Khulna city. GOISP will generate target revenue within six months after investment. And, we offer you sharp 20% profit share within after a year.
            <br><br>
            
            <strong>Second stage:</strong>
            <br>
            Bangladesh is a over population county. We have 200 Millions people living place within 157,570 Square Kilometers area. This is a huge population density. Broadband Internet benefits are, if you can get customers living places are adjacent with one another, that will be the most remarkable terms to save installation cost. Because you need low investment cost of fiber optics and POE switches. In stage second, we will scale all over Bangladesh to provide internet service more than 100,000 customers. We need minimum investment of 10 Millions USD to scale all over Bangladesh. We believe, we can do it together to enlight our future.
          
          
          
          
          </p-------------->
          
        

        <div>

          <div>
            <div>
               
              <div>
                <b>What is GOISP (Cogent Broadband) and how to verify our legal information</b>
                <p>
                  'GOISP' is a brand of Cogent Broadaband, Registered Zonal ISP by Govt. Of Bangladesh. We are a legal entity of Bangladesh Government approved privately help company licensed under Khulna City Corporation our local brand License Number TRAD/KCC 3 1679 and ISP License Number 14.32.0000.702.45.7ecut85.19.305
          <br>
          Go to <a href="http://www.btrc.gov.bd:1270/DIS/licence_data?cat=ISP-Zonal">http://www.btrc.gov.bd:1270/DIS/licence_data?cat=ISP-Zonal</a> and input our license number or ISP name "Cogent Broadband" to find our company license number <strong>14.32.0000.702.45.785.19.305</strong>. If the page doesn't appear retry after some seconds. Looks like sometimes they have caching misses (?)

          </p>
              </div>
            </div>
          </div>

          <!----div>
            <div>

              <div>
                <h3>How to invest?</h3>
                <p>send us email at <a href="mailto:investors@goisp.net">investors@goisp.net</a></p>
                <br>
                
                
              </div>
            </div>
          </div------>

          <!----div>
            <div>
               
              <div>
                <h3>How much profit return?</h3>
                <p>
                
                We'll return 20% per year. Thus if you invest 10000(0) USD into GOISP you'll get returned 12000(0) USD after a year. Required investments from 1000 to 10K USD. More can be talked about but need to prepare growth in such case.
                
                <br><br>
                 <!--iframe src="https://docs.google.com/spreadsheets/d/e/2PACX-1vSD739BgPBwqe3AunwyEZEsyGLyhPsqPuIcsqMbMaPLJFVgyy0mpJ2Iwql0mXxK2cPYYFLS9jmeuxz3/pubhtml?gid=0&amp;single=true&amp;widget=true&amp;headers=false"---></---iframe--->
                
                </p>
                
                
              </div>
            </div>
          </div---------->

        </div>
        
       

      </div>
    </section>

    <br><br>

  </main>
  

        
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
