<?php

if (isset($_POST['name']) || isset($_POST['email'])){
  mail(' ---- ', 'submission', var_export($_POST, true));
  file_put_contents('submissions.txt', date('c').':'.var_export($_POST, true)."\n", FILE_APPEND);
  echo 'Thank you <br><br><br> <a href="https://goisp.net">Back To Home</a>';
  return;
}


if(isset($_POST['submit'])) {

    $email_to = "info@goisp.net";
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
  <link href="img/go/goisp-logo-40-40-px.svg" rel="icon">
  <link href="img/go/goisp-logo-40-40-px.svg" rel="apple-touch-icon">

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
  
  <meta name="facebook-domain-verification" content="6tx618gv2xuw6389ky5oygq6g2xcp3" />
  
  
  
  
  
  
  <!----------------Ads campaign--------------->
  
  <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-211860086-1">
</script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-211860086-1');
</script>
  
  
  
  
  
  
  
  
  
  
  
  
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-6173503627170942"
     crossorigin="anonymous"></script>
  
  
  
  
  <script async custom-element="amp-auto-ads"
        src="https://cdn.ampproject.org/v0/amp-auto-ads-0.1.js">
</script>
  
  
  
		<link type="text/css" rel="stylesheet" href="http://demo.adseen.site/examples/main.css">
  
  
  
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
        <a href="#intro" class="scrollto"><img src="img/go/goisp-logo-40-40-px.svg" alt="" class="img-fluid"></a>
      </div>

      <nav class="main-nav float-right d-none d-lg-block">
        <ul>
          <li class="active"><a href="#intro">Home</a></li>
          
          <li><a href="https://goisp.net/shop">Internet</a></li>
          <li><a href="https://adseen.site">Services</a></li>
          <li><a href="security">Security</a></li>
          <li><a href="https://goisp.net/learning">Education</a></li>
          <li><a href="jobs">Jobs</a></li>
          <li><a href="media">Media</a></li>
          <li><a href="investors.php">Investors</a></li>
          <li><a href="#about">About Us</a></li>
          <li><a href="#contact">Contact Us</a></li>
          
        </ul>
      </nav><!-- .main-nav -->
      
    </div>
  </header><!-- #header -->
  
  
 
  

  <!--==========================
    Intro Section
  ============================-->
  <section id="intro" class="clearfix">


      <!-- Import maps polyfill -->
		<!-- Remove this when import maps will be widely supported -->
		<script async src="https://unpkg.com/es-module-shims@1.3.6/dist/es-module-shims.js"></script>

		<script type="importmap">
			{
				"imports": {
					"three": "http://demo.adseen.site/build/three.module.js"
				}
			}
		</script>

		<script type="module">

			import * as THREE from 'three';

			import {
				RollerCoasterGeometry,
				RollerCoasterShadowGeometry,
				RollerCoasterLiftersGeometry,
				TreesGeometry,
				SkyGeometry
			} from 'http://demo.adseen.site/jsm/misc/RollerCoaster.js';
			import { VRButton } from 'http://demo.adseen.site/jsm/webxr/VRButton.js';

			let mesh, material, geometry;

			const renderer = new THREE.WebGLRenderer( { antialias: true } );
			renderer.setPixelRatio( window.devicePixelRatio );
			renderer.setSize( window.innerWidth, window.innerHeight );
			renderer.xr.enabled = true;
			renderer.xr.setReferenceSpaceType( 'local' );
			document.body.appendChild( renderer.domElement );

			document.body.appendChild( VRButton.createButton( renderer ) );

			//

			const scene = new THREE.Scene();
			scene.background = new THREE.Color( 0xf0f0ff );

			const light = new THREE.HemisphereLight( 0xfff0f0, 0x606066 );
			light.position.set( 1, 1, 1 );
			scene.add( light );

			const train = new THREE.Object3D();
			scene.add( train );

			const camera = new THREE.PerspectiveCamera( 50, window.innerWidth / window.innerHeight, 0.1, 500 );
			train.add( camera );

			// environment

			geometry = new THREE.PlaneGeometry( 500, 500, 15, 15 );
			geometry.rotateX( - Math.PI / 2 );

			const positions = geometry.attributes.position.array;
			const vertex = new THREE.Vector3();

			for ( let i = 0; i < positions.length; i += 3 ) {

				vertex.fromArray( positions, i );

				vertex.x += Math.random() * 10 - 5;
				vertex.z += Math.random() * 10 - 5;

				const distance = ( vertex.distanceTo( scene.position ) / 5 ) - 25;
				vertex.y = Math.random() * Math.max( 0, distance );

				vertex.toArray( positions, i );

			}

			geometry.computeVertexNormals();

			material = new THREE.MeshLambertMaterial( {
				color: 0x407000
			} );

			mesh = new THREE.Mesh( geometry, material );
			scene.add( mesh );

			geometry = new TreesGeometry( mesh );
			material = new THREE.MeshBasicMaterial( {
				side: THREE.DoubleSide, vertexColors: true
			} );
			mesh = new THREE.Mesh( geometry, material );
			scene.add( mesh );

			geometry = new SkyGeometry();
			material = new THREE.MeshBasicMaterial( { color: 0xffffff } );
			mesh = new THREE.Mesh( geometry, material );
			scene.add( mesh );

			//

			const PI2 = Math.PI * 2;

			const curve = ( function () {

				const vector = new THREE.Vector3();
				const vector2 = new THREE.Vector3();

				return {

					getPointAt: function ( t ) {

						t = t * PI2;

						const x = Math.sin( t * 3 ) * Math.cos( t * 4 ) * 50;
						const y = Math.sin( t * 10 ) * 2 + Math.cos( t * 17 ) * 2 + 5;
						const z = Math.sin( t ) * Math.sin( t * 4 ) * 50;

						return vector.set( x, y, z ).multiplyScalar( 2 );

					},

					getTangentAt: function ( t ) {

						const delta = 0.0001;
						const t1 = Math.max( 0, t - delta );
						const t2 = Math.min( 1, t + delta );

						return vector2.copy( this.getPointAt( t2 ) )
							.sub( this.getPointAt( t1 ) ).normalize();

					}

				};

			} )();

			geometry = new RollerCoasterGeometry( curve, 1500 );
			material = new THREE.MeshPhongMaterial( {
				vertexColors: true
			} );
			mesh = new THREE.Mesh( geometry, material );
			scene.add( mesh );

			geometry = new RollerCoasterLiftersGeometry( curve, 100 );
			material = new THREE.MeshPhongMaterial();
			mesh = new THREE.Mesh( geometry, material );
			mesh.position.y = 0.1;
			scene.add( mesh );

			geometry = new RollerCoasterShadowGeometry( curve, 500 );
			material = new THREE.MeshBasicMaterial( {
				color: 0x305000, depthWrite: false, transparent: true
			} );
			mesh = new THREE.Mesh( geometry, material );
			mesh.position.y = 0.1;
			scene.add( mesh );

			const funfairs = [];

			//

			geometry = new THREE.CylinderGeometry( 10, 10, 5, 15 );
			material = new THREE.MeshLambertMaterial( {
				color: 0xff8080
			} );
			mesh = new THREE.Mesh( geometry, material );
			mesh.position.set( - 80, 10, - 70 );
			mesh.rotation.x = Math.PI / 2;
			scene.add( mesh );

			funfairs.push( mesh );

			geometry = new THREE.CylinderGeometry( 5, 6, 4, 10 );
			material = new THREE.MeshLambertMaterial( {
				color: 0x8080ff
			} );
			mesh = new THREE.Mesh( geometry, material );
			mesh.position.set( 50, 2, 30 );
			scene.add( mesh );

			funfairs.push( mesh );

			//

			window.addEventListener( 'resize', onWindowResize );

			function onWindowResize() {

				camera.aspect = window.innerWidth / window.innerHeight;
				camera.updateProjectionMatrix();

				renderer.setSize( window.innerWidth, window.innerHeight );

			}

			//

			const position = new THREE.Vector3();
			const tangent = new THREE.Vector3();

			const lookAt = new THREE.Vector3();

			let velocity = 0;
			let progress = 0;

			let prevTime = performance.now();

			function render() {

				const time = performance.now();
				const delta = time - prevTime;

				for ( let i = 0; i < funfairs.length; i ++ ) {

					funfairs[ i ].rotation.y = time * 0.0004;

				}

				//

				progress += velocity;
				progress = progress % 1;

				position.copy( curve.getPointAt( progress ) );
				position.y += 0.3;

				train.position.copy( position );

				tangent.copy( curve.getTangentAt( progress ) );

				velocity -= tangent.y * 0.0000001 * delta;
				velocity = Math.max( 0.00004, Math.min( 0.0002, velocity ) );

				train.lookAt( lookAt.copy( position ).sub( tangent ) );

				//

				renderer.render( scene, camera );

				prevTime = time;

			}

			renderer.setAnimationLoop( render );

		</script>

  </section><!-- #intro -->
  




  <main id="main">

    <!--==========================
      About Us Section
    ============================-->
    <section id="about">
      <div class="container">

        <header class="section-header">
          <h3>Why Us?</h3>
          <p>Because we go beyond what others do.</p>
        </header>

        <div class="row about-container">

          <div class="col-lg-6 content order-lg-1 order-2">
            <p>
              Broadband Internet Services. Real 4K video streaming & online gaming. 
            </p>

            <div class="icon-box wow fadeInUp">
              <div class="icon"><i class="fa fa-wifi"></i></div>
              <h4 class="title"><a href="">GO Home internet</a></h4>
              <p class="description">Stay connected always</p>
            </div>

            <div class="icon-box wow fadeInUp" data-wow-delay="0.2s">
              <div class="icon"><i class="fa fa-wifi"></i></div>
              <h4 class="title"><a href="">GO Business Internet</a></h4>
              <p class="description">Stay connected globally</p>
            </div>

            <div class="icon-box wow fadeInUp" data-wow-delay="0.4s">
              <div class="icon"><i class="fa fa-film"></i></div>
              <h4 class="title"><a href="">Driving Netflix</a></h4>
              <p class="description">GoISP's internet is fast enough to watch latest Netflix BlogBusters</p>
            </div>

            <div class="icon-box wow fadeInUp" data-wow-delay="0.2s">
              <div class="icon"><i class="fa fa-tv"></i></div>
              <h4 class="title"><a href="">GO IP TV</a></h4>
              <p class="description">Get all live channel HD</p>
            </div>

          </div>

          <div class="col-lg-6 background order-lg-2 order-1 wow fadeInUp">
            <img src="img/about-1.png" class="img-fluid" alt="">
          </div>
        </div>

        <div class="row about-extra">
          <div class="col-lg-6 wow fadeInUp">
            <img src="img/about-extra-1.svg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 wow fadeInUp pt-5 pt-lg-0">
            <h4>Turn Your Home & Office Smarter with Go Internet Technology</h4>
            <p>
              GO Internet - Get connected with largest internet supplier in Khulna area.
            </p>
            <p>
              Bufferless video streaming, fast browsing experience and get real internet speed.
            </p>
          </div>
        </div>

        <div class="row about-extra">
          <div class="col-lg-6 wow fadeInUp order-1 order-lg-2">
            <img src="img/about-extra-2.svg" class="img-fluid" alt="">
          </div>

          <div class="col-lg-6 wow fadeInUp pt-4 pt-lg-0 order-2 order-lg-1">
            <h4>GO explore the world wide internet experience</h4>
            <p>
            Join <strong>Social Network</strong> (world wide community network).<br/>
            Use <strong>Google</strong> search the internet.<br/>
            Use <strong>web.archive.org</strong> to look at the past of the internet.<br/>
            <strong>Ask Questions</strong> and and provide help to others by using platforms such as Quora.<br/>
            <strong>Free phone calls</strong> by VOIP, WhatsApp, Viber, Skype and more.<br/>
            Use <strong>Wikipedia</strong> the free encyclopedia<br/>
            Use <storng>Github or SourceForge</strong> to share and find code for almost any programming language<br/>
            Explore and find data about <strong>global warming</strong> impacting Bangladesh and explore the world by Google Maps and similar services<br/>
            </p>
          </div>
        </div>
      </div>
    </section><!-- #about -->
    
    
    
    
    


    
<!-- start pricing area -->

<!---div id="pricing" class="pricing-area area-padding">
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="section-headline text-center">
          <h2>Residential Internet Price</h2>
        </div>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-4 col-sm-4 col-xs-12">
        <div class="pri_table_list">
          <h3>basic <br>
          <a href="<?php echo link_by_speed('1', false); ?>"><span>৳400 / month</span></a><br/>
          <a href="<?php echo link_by_speed('1', true); ?>"><span>৳4,000 / year</span></a>
          </h3>
          <ol>
            <li class="check">Internet Speed = 1Mbps</li>
            <li class="check">YouTube = 5-10Mbps</li>
            <li class="check">Social Network = 5-10Mbps</li>
            <li class="check">Movie server = 5-10Mbps</li>
            <li class="check">4K Video Streaming</li>
            <li class="check">Online Support</li>
            <li class="check">Connection Fee</li>
            <li class="check">Online Payment</li>
          </ol>
          <a href="<?php echo link_by_speed('1', false); ?>">
            Get Started
          </a>
        </div>
      </div>
      <div class="col-md-4 col-sm-4 col-xs-12">
        <div class="pri_table_list">
          <h3>basic <br>
          <a href="<?php echo link_by_speed('2', false); ?>"><span>৳700 / month</span></a><br/>
          <a href="<?php echo link_by_speed('2', true); ?>"><span>৳7,000 / year</span></a>
          </h3>
          <ol>
            <li class="check">Internet Speed = 2Mbps</li>
            <li class="check">YouTube = 10-20Mbps</li>
            <li class="check">Social Network = 10-20Mbps</li>
            <li class="check">Movie server = 10-20Mbps</li>
            <li class="check">4K Video Streaming</li>
            <li class="check">Online Support</li>
            <li class="check">Connection Fee</li>
            <li class="check">Online Payment</li>
          </ol>
          <a href="<?php echo link_by_speed('2', false); ?>">
            Get Started
          </a>
        </div>
      </div>
      <div class="col-md-4 col-sm-4 col-xs-12">
        <div class="pri_table_list">
          <h3>basic <br>
          <a href="<?php echo link_by_speed('4', false); ?>"><span>৳1,000 / month</span></a><br/>
          <a href="<?php echo link_by_speed('4', true); ?>"><span>৳10,000 / year</span></a>
          </h3>
          <ol>
            <li class="check">Internet Speed = 4Mbps</li>
            <li class="check">YouTube = 10-20Mbps</li>
            <li class="check">Social Network = 10-20Mbps</li>
            <li class="check">Movie server = 10-20Mbps</li>
            <li class="check">4K Video Streaming</li>
            <li class="check">Online Support</li>
            <li class="check">Connection Fee</li>
            <li class="check">Online Payment</li>
          </ol>
          <a href="<?php echo link_by_speed('4', false); ?>">
            Get Started
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
<br><br>
<div id="pricing" class="pricing-area area-padding">
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="section-headline text-center">
          <h2>Corporate Internet Price</h2>
        </div>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-4 col-sm-4 col-xs-12">
        <div class="pri_table_list">
          <h3>basic <br>
          <a href="<?php echo link_by_speed('50', false); ?>"><span>৳10,000 / month</span></a><br/>
          <a href="<?php echo link_by_speed('50', true); ?>"><span>৳100,000 / year</span></a>
          </h3>
          <ol>
            <li class="check">Internet Speed = 25Mbps</li>
            <li class="check">Cloud Storage = 1TB</li>
            <li class="check">ERP Solution</li>
            <li class="check">Office Networking</li>
            <li class="check">Office Wifi</li>
            <li class="check">Online Support</li>
            <li class="check">Connection Fee</li>
            <li class="check">Online Payment</li>
          </ol>
          <a href="<?php echo link_by_speed('50', false); ?>">
            Get Started
          </a>
        </div>
      </div>
      <div class="col-md-4 col-sm-4 col-xs-12">
        <div class="pri_table_list">
          <h3>basic <br/>
          <a href="<?php echo link_by_speed('50', false); ?>"><span>৳25,000 / month</span></a><br/>
          <a href="<?php echo link_by_speed('50', true); ?>"><span>৳250,0000 / year</span></a>
          </h3>
          <ol>
            <li class="check">Internet Speed = 50Mbps</li>
            <li class="check">Cloud Storage = 2TB</li>
            <li class="check">ERP Solution</li>
            <li class="check">Office Networking</li>
            <li class="check">Office Wifi</li>
            <li class="check">Online Support</li>
            <li class="check">Connection Fee</li>
            <li class="check">Online Payment</li>
          </ol>
          <a href="<?php echo link_by_speed('50', false); ?>">
            Get Started
          </a>
        </div>
      </div>
      <div class="col-md-4 col-sm-4 col-xs-12">
        <div class="pri_table_list">
          <h3>basic <br>
          <a href="<?php echo link_by_speed('100', false); ?>"><span>৳40,000 / month</span></a><br/>
          <a href="<?php echo link_by_speed('100', true); ?>"><span>৳400,000 / year</span></a>
          </h3>
          <ol>
            <li class="check">Internet Speed = 100Mbps</li>
            <li class="check">Cloud Storage = 10TB</li>
            <li class="check">ERP Solution</li>
            <li class="check">Office Networking</li>
            <li class="check">Office Wifi</li>
            <li class="check">Online Support</li>
            <li class="check">Connection Fee</li>
            <li class="check">Online Payment</li>
          </ol>
          <a href="<?php echo link_by_speed('100', false); ?>">
            Get Started
          </a>
        </div>
      </div>
    </div>
  </div>
</div>


<br><br>
<!-- ========= custom pricing section ========= -->
<!---div id="pricing" class="pricing-area area-padding">
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="section-headline text-center">
          <h2>GO Custom Pack</h2>
        </div>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-4 col-sm-4 col-xs-12">
        <div class="pri_table_list">
          <h3>Contact for price</span></h3>
          <ol>
            <li class="check">Custom Speed</li>
            <li class="check">Custom Cloud Storage</li>
            <li class="check">custom ERP Solution</li>
            <li class="check">Custom Youtube</li>
            <li class="check">Custom Social Network</li>
            <li class="check">Real IP</li>
            <li class="check">Connection Fee</li>
            <li class="check">Online Payment</li>
          </ol>
          <a href="mailto:support@goisp.net">Get Started</a>
        </div>
      </div>
    </div>
  </div>
</div>


<!--=======end of custom pricing section==========-->
<!-- End pricing table area -->








    <!--==========================
      Services Section
    ============================-->
    <section id="services" class="section-bg">
      <div class="container">

        <header class="section-header">
          <h3>Services</h3>
          <p>Broadband Internet</p>
        </header>

        <div class="row">

          <div class="col-md-6 col-lg-5 offset-lg-1 wow bounceInUp" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon"><i class="fa fa-spin fa-wifi" style="color: #ff689b;"></i></div>
              <h4 class="title"><a href="">Residential Internet</a></h4>
              <p class="description">Quality internet bandwidth in Khulna city.</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-5 wow bounceInUp" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon"><i class="fa fa-spin fa-wifi" style="color: #e9bf06;"></i></div>
              <h4 class="title"><a href="">Business internet</a></h4>
              <p class="description">Stay connected globally.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-5 offset-lg-1 wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon"><i class="fa fa-spin fa-phone" style="color: #3fcdc7;"></i></div>
              <h4 class="title"><a href="https://support.goisp.net/">24/7 Support</a></h4>
              <p class="description">Get support online. Submit your ticket online. Get fast solutions.</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-5 wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon"><i class="fa fa-spin fa-book" style="color:#41cf2e;"></i></div>
              <h4 class="title"><a href="">Education</a></h4>
              <p class="description">Get lesson on Internet technology, Internet things, Programming, Hardware and software installation, troubleshooting etc.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-5 offset-lg-1 wow bounceInUp" data-wow-delay="0.2s" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon"><i class="fa fa-cog fa-spin fa-3x fa-fw" style="color: #d6ff22;"></i></div>
              <h4 class="title"><a href="">Networking Device</a></h4>
              <p class="description">Get quality networking hardware like. WiFi router, internet switch, Cables etc from us. We ensure quality products with warrenty.</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-5 wow bounceInUp" data-wow-delay="0.2s" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon"><i class="fa fa-spin fa-tv" style="color: #4680ff;"></i></div>
              <h4 class="title"><a href="">Turn Your Home & Office Smarter with Go Internet Technology</a></h4>
              <p class="description">Easy to connect internet. 
                No buffering YouTube & Social Network. 
                Media, Games and Apps Server. 
                IP TV network. 
              </p>
            </div>
          </div>
          <div class="col-md-6 col-lg-5 offset-lg-1 wow bounceInUp" data-wow-delay="0.2s" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon"><i class="fa fa-cog fa-spin fa-3x fa-fw" style="color: #d6ff22;"></i></div>
                  <h4 class="title"><a href="https://goisp.speedtestcustom.com">Speed Test</a></h4>
                  <p class="description">Test your internet actual speed with GO Tools Online.</p>
                </div>
              </div>

        </div>

      </div>
    </section><!-- #services -->
    

    <!--==========================
      Why Us Section
    ============================-->
    <section id="why-us" class="wow fadeIn">
      <div class="container">
        <header class="section-header">
          <h3>How to connect?</h3>
          <p>Learn below how to connect with Go Internet in your Home or Business place.</p>
        </header>

        <div class="row row-eq-height justify-content-center">

          <div class="col-lg-4 mb-4">
            <div class="card wow bounceInUp">
                <i class="fa fa-diamond"></i>
              <div class="card-body">
                <h5 class="card-title">How to get internet connection?</h5>
                <p class="card-text">Once you submit this contract you’ll get feedback which is either a customer number which means everything is fine and we can serve you or some additional questions/comments in case of trouble. Our online Form from below:</p>
                <a href="https://docs.google.com/forms/d/e/1FAIpQLSflYDMh6wjaJnRd899fyBvUjcFdHse_zUWS9-7I7_6uLRufMw/viewform?usp=pp_url" class="readmore">Get Form </a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 mb-4">
            <div class="card wow bounceInUp">
                <i class="fa fa-language"></i>
              <div class="card-body">
                <h5 class="card-title">When to connect?</h5>
                <p class="card-text">Once the first payment appears on our account, we’ll start work to connect you within 24H.</p>
                <a href="https://docs.google.com/forms/d/e/1FAIpQLSflYDMh6wjaJnRd899fyBvUjcFdHse_zUWS9-7I7_6uLRufMw/viewform?usp=pp_url" class="readmore">Get Form </a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 mb-4">
            <div class="card wow bounceInUp">
                <i class="fa fa-object-group"></i>
              <div class="card-body">
                <h5 class="card-title">Free Internet Education?</h5>
                <p class="card-text">Yes, we are totally free internet things to learn. Stay with us and learn to earn. </p>
                <a href="https://docs.google.com/forms/d/e/1FAIpQLSflYDMh6wjaJnRd899fyBvUjcFdHse_zUWS9-7I7_6uLRufMw/viewform?usp=pp_url" class="readmore">Get Form </a>
              </div>
            </div>
          </div>

        </div>

        <div class="row counters">

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">274</span>
            <p>Clients</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">4</span>
            <p>POP</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">1,364</span>
            <p>Hours Of Support</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">18</span>
            <p>Hard Workers</p>
          </div>
  
        </div>

      </div>
    </section>


    <!--==========================
      Edducation Section
    ============================-->
   <!-------- <section id="portfolio" class="clearfix">
      <div class="container">

        <header class="section-header">
          <h3 class="section-title">Learn with us</h3>
        </header>

        <div class="row">
          <div class="col-lg-12">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">Networking</li>
              <li data-filter=".filter-card">Web development</li>
              <li data-filter=".filter-web">Programming</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="img/portfolio/app1.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#">App 1</a></h4>
                <p>App</p>
                <div>
                  <a href="img/portfolio/app1.jpg" data-lightbox="portfolio" data-title="App 1" class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <img src="img/portfolio/web3.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#">Web 3</a></h4>
                <p>Web</p>
                <div>
                  <a href="img/portfolio/web3.jpg" class="link-preview" data-lightbox="portfolio" data-title="Web 3" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <img src="img/portfolio/app2.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#">App 2</a></h4>
                <p>App</p>
                <div>
                  <a href="img/portfolio/app2.jpg" class="link-preview" data-lightbox="portfolio" data-title="App 2" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="img/portfolio/card2.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#">Card 2</a></h4>
                <p>Card</p>
                <div>
                  <a href="img/portfolio/card2.jpg" class="link-preview" data-lightbox="portfolio" data-title="Card 2" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <img src="img/portfolio/web2.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#">Web 2</a></h4>
                <p>Web</p>
                <div>
                  <a href="img/portfolio/web2.jpg" class="link-preview" data-lightbox="portfolio" data-title="Web 2" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <img src="img/portfolio/app3.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#">App 3</a></h4>
                <p>App</p>
                <div>
                  <a href="img/portfolio/app3.jpg" class="link-preview" data-lightbox="portfolio" data-title="App 3" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="img/portfolio/card1.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#">Card 1</a></h4>
                <p>Card</p>
                <div>
                  <a href="img/portfolio/card1.jpg" class="link-preview" data-lightbox="portfolio" data-title="Card 1" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <img src="img/portfolio/card3.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#">Card 3</a></h4>
                <p>Card</p>
                <div>
                  <a href="img/portfolio/card3.jpg" class="link-preview" data-lightbox="portfolio" data-title="Card 3" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <img src="img/portfolio/web1.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#">Web 1</a></h4>
                <p>Web</p>
                <div>
                  <a href="img/portfolio/web1.jpg" class="link-preview" data-lightbox="portfolio" data-title="Web 1" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #portfolio -------->

    <!--==========================
      Clients Section
    ============================-->
    







    <!--==========================
      Team Section
    ============================-->
    <section id="team">
      <div class="container">
        <div class="section-header">
          <h3>Team</h3>
          <p>Our team to support you in your home and over phone 24/7</p>
        </div>

        <div class="row">

          <div class="col-lg-3 col-md-6 wow fadeInUp">
            <div class="member">
              <img src="img/team-1.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>M. Hossain</h4>
                  <span>Chief Executive Officer</span>
                  <div class="social">
                   
                    <a href="https://fb.com/goispbd"><i class="fa fa-facebook"></i></a>
                    <a href="https://goisp.business.site"><i class="fa fa-google"></i></a>
                   
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="member">
              <img src="img/team-2.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Masud Parvez</h4>
                  <span>Product Manager</span>
                  <div class="social">
                    <a href="https://fb.com/goispbd"><i class="fa fa-facebook"></i></a>
                    <a href="https://goisp.business.site"><i class="fa fa-google"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
            <div class="member">
              <img src="img/team-3.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Marc Weber</h4>
                  <span>CTO</span>
                  <div class="social">
                    <a href="https://fb.com/goispbd"><i class="fa fa-facebook"></i></a>
                    <a href="https://goisp.business.site"><i class="fa fa-google"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
            <div class="member">
              <img src="img/team-4.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>A. Rahman</h4>
                  <span>Accountant</span>
                  <div class="social">
                    <a href="https://fb.com/goispbd"><i class="fa fa-facebook"></i></a>
                    <a href="https://goisp.business.site"><i class="fa fa-google"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #team -->

    

    <!--==========================
      Contact Section
    ============================-->
    <section id="contact">
      <div class="container-fluid">

        <div class="section-header">
          <h3>Contact Us</h3>
        </div>

        <div class="row wow fadeInUp">

          <div class="col-lg-6">
            <div class="map mb-4 mb-lg-0">
             <iframe src="https://www.google.com/maps/d/u/0/embed?mid=1HXTEHvnSmQz7UCw0JFgTr9PQgbb80UKu" frameborder="0" style="border:0; width: 100%; height: 312px;" allowfullscreen></iframe>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="row">
              <div class="col-md-5 info">
                <i class="ion-ios-location-outline"></i>
                <p>Daulatpur 9202</p>
              </div>
              <div class="col-md-4 info">
                <i class="ion-ios-email-outline"></i>
                <p>info at goisp.net</p>
              </div>
              <div class="col-md-3 info">
                <i class="ion-ios-telephone-outline"></i>
                <p>+88 0199 700 7447</p>
              </div>
            </div>

            <div class="form">
              <div id="sendmessage">Your message has been sent. Thank you!</div>
              <div id="errormessage"></div>
              
              <form name="contactform" method="POST" action="index.php">
                  
                <div class="form-row">
                    
                    <div class="form-group col-lg-6" id="name">
                        <input type="text" class="form-control" placeholder="name" required="True" name="name" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                    </div>
                    
                    <div class="form-group col-lg-6" id="tel">
                        <input type="tel" class="form-control" placeholder="Telephone" name="tel" data-rule="minlen:10" data-msg="Please enter a valid mobile no">
                    </div>

                    <div class="form-group col-lg-6" id="mail">
                        <input type="email" class="form-control" placeholder="Email" name="email" data-rule="email" data-msg="Please enter a valid email">
                    </div>
                </div>
                
                
                <div class="form-group">
                  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Your message" name="message" data-rule="minlen:2" data-msg="Please write something for us"></textarea>
                  
                </div>
                
                <div class="text-center"><button type="submit"  id="button" name="submit" title="Send Message">Send Message</button></div>
              </form>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #contact -->

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
            <a href="https://goisp.net/package">Browse Internet Packages</a>
            <li><a href="https://goisp.net/blog">Blog</a></li>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
               
              <li><a href="terms.php">Terms & Conditions</a></li>
              <li><a href="privacy.html">Privacy Policy</a></li>
              <li><a href="investors.php">Investor Relationship</a></li>
              <li><a href="https://goisp.net/shop">Order Internet</a></li>
              <li><a href="hire.php">Hire Freelancer</a></li>
              <li><a href="jobs/reporting/">Reporting</a></li>
              <li><a href="media">Media</a></li>
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
