
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
            Terms & Condition Section
            ============================-->
            
            <section id="about">
                
                <div class="container">
                
                    <p>
                        <strong>GOISP</strong> is connecting people with the internet by fiber cables expanding from Khulna Bangladesh. We offer optic fiber backbone connectivity direct to your office and home, wireless zone installation in railway station, bus station, and city mall area or inside your large wearhouse. 
                    </p>
                    <br><br>
                    
                    
                   <div class="terms-right">
                    <div id="Privacy_Policy">
                        <h2 class="blue-text">
                            Terms and Conditions <br></h2>
                            <p><span style="margin-bottom: 16px; display: inline-block">IMPORTANT: PLEASE READ THIS LICENSE CAREFULLY BEFORE USING THIS APPLICATION.</span></p>
                        
                    </div>

                    <div id="LICENSED">

                        <h2> 1. LICENSED</h2>

                        <p>
                            By connecting, or using the packet data, and/or using <span>goISP</span> ("Broadband Internet") containing this Service, you agree that this Terms and Conditions Agreement or End User License Agreement (EULA) is a legally binding and valid contract and agree to be bound by it. You agree to abide by the intellectual property laws and all of the terms and conditions of this Agreement.
                        </p>
                        <p>
                            Unless you have a different license agreement signed by Cogent Broadband, your use of <span>goISP</span> indicates your acceptance of this license agreement and warranty.
                        </p>
                        <p>
                            Subject to the terms of this Agreement, Cogent Broadband grants to you a limited, non-exclusive, non-transferable license, without right to sub-license, to use <span>goISP</span> in accordance with this Agreement and any other written agreement with Cogent Broadband. Cogent Broadband does not transfer the title of <span>goISP</span> to you; the license granted to you is not a sale. This agreement is a binding legal agreement between Cogent Broadband and the users of <span>goISP</span>.
                        </p>
                        <p>
                            If you do not agree to be bound by this agreement, stop using internet service / packet data from <span>goISP</span> at your place now and, if applicable, promptly return to Cogent Broadband any copies of <span>goISP</span> and related tools, accessories and devices in your premises.
                        </p>
                    </div>
                    <div id="DISTRIBUTION">

                        <h2>2. DISTRIBUTION</h2>


                        <p>
                            <span>goISP</span> and the license herein granted shall not be copied, shared, distributed, sold, offered for sale, transferred or sub-licensed in whole or in part. For information about redistribution of <span>goISP</span> contact Cogent Broadband
                        </p>
                    </div>
                    <div id="USER_AGREEMENT">
                        <h2>3. USER AGREEMENT</h2>
                    </div>
                    <div id="Use">
                        <h3>3.1 Use</h3>

                        <p> Your permission to use <span>goISP</span> is limited to you. You shall not allow others to use, distribute, sale, share or evaluate services of <span>goISP</span>.</p>

                    </div>
                    <div id="Use_Restrictions">
                        <h3> 3.2 Use Restrictions</h3>
                        <p>
                            You shall use <span>goISP</span> in compliance with all applicable laws by BTCL and not for any unlawful purpose. Without limiting the foregoing, use, display or access of <span>goISP</span> together with material that is pornographic, racist, vulgar, obscene, defamatory, libelous, abusive, promoting hatred, discriminating or displaying prejudice based on religion, ethnic heritage, race, sexual orientation or age is strictly prohibited.
                        </p>
                        <p>
                            The assignment, sublicense, networking, sale, or distribution of copies of <span>goISP</span> is strictly forbidden without the prior written consent of Cogent Broadband It is a violation of this agreement to assign, sell, share, distribute, rent, lease, borrow, network or transfer the use of <span>goISP</span>. If any person other than yourself uses <span>goISP</span> registered in your name, regardless of whether it is at the same time or different times, then this agreement is being violated and you are responsible for that violation.
                        </p>
                    </div>
                    <div id="Copyright_Restriction">
                        <h3>3.3 Copyright Restriction</h3>
                        <p>
                            This Application contains copyrighted material, trade secrets and other proprietary material. You shall not, and shall not attempt to, modify, reverse engineer, disassemble or decompile <span>goISP</span>. Nor can you create any derivative works or other works that are based upon or derived from <span>goISP</span> in whole or in part.
                        </p>
                        <p>
                            <span>goISP's</span> name, logo and graphics file that represents <span>goISP</span> shall not be used in any way to promote products developed with <span>goISP</span>. Cogent Broadband retains sole and exclusive ownership of all rights, title and interests in and to <span>goISP</span> and all Intellectual Property rights relating thereto.
                        </p>
                        <p>
                            Copyright law and international copyright treaty provisions protect all parts of <span>goISP</span>, products and services. No program, code, part, image, audio/video sample, or text may be copied or used in any way by the user. All rights not expressly granted hereunder are reserved for Cogent Broadband
                        </p>
                    </div>
                    <div id="Limitation_of_Responsibility">
                        <h3>3.4 Limitation of Responsibility</h3>
                        <p>
                            You will indemnify, hold harmless, and defend Cogent Broadband, its employees, agents and distributors against any and all claims, proceedings, demand and costs resulting from or in any way connected with your use of Cogent Broadband's internet services.
                        </p>
                        <p>
                            In no event (including, without limitation, in the event of negligence) will Cogent Broadband, its employees, agents or distributors be liable for any consequential, incidental, indirect, special or punitive damages whatsoever (including, without limitation, damages for loss of profits, loss of use, business interruption, loss of information or data, or pecuniary loss), in connection with or arising out of or related to this Agreement, <span>goISP</span> or the use or inability to use <span>goISP</span> or the furnishing, performance or use of any other matters hereunder whether based upon contract, tort or any other theory including negligence.
                        </p>
                    </div>
                    <div id="Warranties">
                        <h3>3.5 Warranties</h3>
                        <p>
                            Except as expressly stated in writing, Cogent Broadband makes no representation or warranties in respect of this Application and expressly excludes all other warranties, expressed or implied, oral or written, including, without limitation, any implied warranties for a particular purpose.
                        </p>
                    </div>
                    <div id="Governing_Law">
                        <h3>3.6 Governing Law</h3>
                        <p>
                            This Agreement shall be governed by the local laws applicable therein. You hereby irrevocably attorney and submit to the non-exclusive jurisdiction of the local courts therefrom. If any provision shall be considered unlawful, void or otherwise unenforceable, then that provision shall be deemed severable from this License and not affect the validity and enforceability of any other provisions.
                        </p>
                    </div>
                    <div id="Termination">
                        <h3>3.7 Termination</h3>
                        <p>
                            Any failure to comply with the terms and conditions of this Agreement will result in automatic and immediate termination of this license. Upon termination of this license granted herein for any reason, you agree to immediately cease use of <span>goISP</span> and disconnect all sevices of <span>goISP</span> supplied under this Agreement. 
                        </p>
                    </div>
                    <div id="ISCLAIMER_OF_WARRANTY">
                        <h2>4. DISCLAIMER OF WARRANTY</h2>
                        <p>
                            THIS APPLICATION AND THE ACCOMPANYING FILES ARE "AS IS" AND WITHOUT WARRANTIES AS TO PERFORMANCE ANY OTHER WARRANTIES WHETHER EXPRESSED OR IMPLIED. THIS DISCLAIMER CONCERNS ALL FILES GENERATED AND EDITED BY <span>goISP</span> AS WELL.
                        </p>
                    </div>
                    <div id="CONSENT_OF_USE_OF_DATA">
                        <h2>5. CONSENT OF USE OF DATA</h2>
                        <p>
                            You agree that Cogent Broadband may collect and use information gathered in any manner as part of the product support services provided to you, if any, related to <span>goISP</span>. Cogent Broadband may also use this information to provide notices to you which may be of use or interest to you.
                        </p>
                    </div>
                </div>

                </div>
            
            </section>
            
        
        </div>

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
