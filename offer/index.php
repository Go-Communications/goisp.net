
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

<!--
 Copyright 2016 Google Inc.
 
 Licensed under the Apache License, Version 2.0 (the "License");
 you may not use this file except in compliance with the License.
 You may obtain a copy of the License at
 
      http://www.apache.org/licenses/LICENSE-2.0
 
 Unless required by applicable law or agreed to in writing, software
 distributed under the License is distributed on an "AS IS" BASIS,
 WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 See the License for the specific language governing permissions and
 limitations under the License.
-->

<!doctype html>
<html ⚡ lang="en">

  <head>
    <meta charset="utf-8" />

    <title>goisp - giga speed internet service in Daulatpur Khulna Bangladesh</title>
    <meta description="goisp is the Internet service provider in Khulna Bangladesh area. goisp internet offers giga internet connectivity with optical fiber internet connectivity at home and office. Goisp internet have ek desh ek rate internet package as per Bangladesh Government policy 5mbps 500tk, 10mbps 800tk and 20mbps 1200k. when you need very fast internet with low interruptions, there is guaranteed service on goisp" />
    <link href="base.css" rel="stylesheet" />

    <link rel="amphtml" href="/index.php">

    <script type="text/javascript" src="base.js"></script>
    
    
        <style amp-custom>    .wrapper{margin:0 auto; max-width: 985px; }</style> 
        
        
        
        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-6173503627170942"
     crossorigin="anonymous"></script>
     
     
     
    <script async custom-element="amp-auto-ads"
        src="https://cdn.ampproject.org/v0/amp-auto-ads-0.1.js">
</script> 
     
     
     
  <style>
  button{ 
            background-color: yellow; 
            color: white; 
            padding: 12px 20px; 
            border: blue; 
            border-radius: 4px; 
            cursor: pointer; 
            float: left;
            font-size: 25;
         }
         
         
         
   div1{
       
            background-color: 0; 
            color: black; 
            padding: 12px 20px; 
            border: none; 
            border-radius: 4px; 
            cursor: pointer; 
            float: center;
   }      
         
         
         </style>
         
            
   <script async custom-element = "amp-lightbox" 
         src = "https://cdn.ampproject.org/v0/amp-lightbox-0.1.js">
      </script>  
     
     
     
     
     

  </head>
  
  
  
  
  <body>
  
  
  
  
  
  <amp-auto-ads type="adsense"
        data-ad-client="ca-pub-6173503627170942">
</amp-auto-ads>
  
  
  
  
  
  
  
  
  
  
      <div class="wrapper">
      
    <header>
      GOISP
    </header>
    
      <h1>Internet service provider</h1>
      
      
      


<article>


<!--iframe id="ytplayer" type="text/html" width="985" height="554.0625"
src="https://www.youtube.com/embed/Wycc2SfK5CQ?autoplay=1&controls=0&loop=1&color=white"
frameborder="0" allowfullscreen>
    </iframe-->
<p>
<img
  src="https://goisp.net/img/go/go-1.png"
  width="900"
  height="675"
  layout="responsive"
>
</img>
                    

</p>


    
    
        
        

                          <p>Goisp is the very simplest fiber optic networking in Daulatpur khulna area. Goisp ensures simple optic core internet backbone with low splitting to minimize db losses near about 10~15 db. On the other hand, goisp to continuously reaeach on latest technology of internet routing to fix Network jots. 
       </p><p> <img
  src="https://goisp.net/img/go/go-2.png"
  width="900"
  height="675"
  layout="responsive"
>
</img>
                                
   </p>                 
                    
                    
                    
                    <p>Our mission to represent future technology of internet with low speed ensures higher browsing accessing with your internet Connectivity. We are working hard to implement this system in our internet infrastructure to minimize our internet consumption and ensure our customers satisfaction top </p>
                    
                    
              <p>      
                    <img
  src="https://goisp.net/img/go/go-3.png"
  width="900"
  height="675"
  layout="responsive"
  alt="featured"
>
</img>
    </p>                
                    
        <!---div1>
                    <p>
                
                <h3>Fill up below form for registration (no service charge for new connection:</h3><br> <button class="btn btn-primary"><a href="https://forms.gle/f3PckPDfV8QqEpcz9">Registration FormTo Get Free</a></button>
            </p>    
        </div1--->            
                    
                    
                    
                    
                    
                    
                    
                    
                    
                  <p>  
                    We know how internet companies offers different attractive offers with zero service charge but this is not for us. Do you know why? Because we are not as usual service provider. Our technical person always doing r&d to implement new technology, our lone are highly secured. We will ensure your data security, no hacking, no data piracy, no option to loose your credit card information thru your internet if you are using goisp internet. We will ensure you no malicious mail, less spam.in your local mailing server, phishing email blockage and more..
    
    
        
   
    
    <br>
   
    

    
  

<div1>
    <h3><a href="https://goisp.net/offer/game.html">Lets Play Tik-Tok-Toe!</a></h3>
</div1>
    
    
    <br><br><br><br>
    
    
     <div>
        <footer>
            <p>Design Rights @<a href="https://goisp.net">Goisp</a> . 2022</p>
        </footer>
    </div>
    </article>
    
</body></html>