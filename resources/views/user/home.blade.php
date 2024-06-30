<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Website Title -->
    <title>John Doe - Professional web designer and photographer</title>
    <!-- Bootstrap -->
    <link href="{{asset('/home/assets/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
	<!-- Font-Awesome -->
    <link href="{{asset('/home/assets/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
	<!-- Lightbox -->
	<link href="{{asset('/home/assets/lightbox/css/lightbox.css')}}" rel="stylesheet">
    <!-- Text Rotator-->
	<link href="{{asset('/home/assets/textrotator/simpletextrotator.css')}}" rel="stylesheet">
	<!-- FlexSlider -->
    <link href="{{asset('/home/assets/flexslider/flexslider.css')}}" rel="stylesheet">
	<!-- Theme Style -->
    <link href="{{asset('/home/css/style.css')}}" rel="stylesheet">
	<!-- Animations -->
    <link href="{{asset('/home/css/animate.css')}}" rel="stylesheet">
	<!-- Custom Favicon -->
	<link href="img/favicon.ico" rel="shortcut icon" type="image/x-icon" />

  </head>
    <body id="top">

      <!-- ****************************** Preloader ************************** -->
      <div id="preloader"></div>


	  	<!-- ==========================
        HEADER SECTION
        =========================== -->
        <header id="home">
		    <!-- creative menu -->
            <div class="container-fluid">
              <div class="row">
                <div class="menu-wrap">
				<nav class="menu">
				    <!-- Menu Links -->
					<div class="icon-list">
						<a href="{{route('login.users')}}"><i class="fa fa-fw fa-home"></i><span>Connection</span></a>
					</div>
				</nav>
			    </div>
			    <button class="menu-button" id="open-button"></button><!-- menu button -->
              </div><!--/row-->
            </div><!--/container-->
		  <!-- Header Image -->
          <section class="hero" id="hero">
            <div class="container">
			  <!-- Slider Button (don't edit!)-->
              <div class="row"> 
                <div class="col-md-12 text-right navicon">
                  <a id="nav-toggle" class="nav_slide_button" href="#"><span></span></a>
                </div>
              </div>
			  <!-- HEADER HEADLINE -->
              <div class="row">
                <div class="col-md-8 col-md-offset-1 inner">
                  <h1 class="animated fadeInDown">
                    Un peule<span style="color:#E04343;"></span>un but<br/>
                    <span>une<span style="color:#FFE800">fo</span>is</span>
                  </h1><!-- Title -->
                  <h3 class="animated fadeInUp delay-05s"><span class="rotate">Web Designer,Photographer,3d Artist</span></h3><!-- Text Rotator -->
                </div>
              </div>
			  <!-- Learn More Button -->
              <div class="row">
                <div class="col-md-6 col-md-offset-3 text-center">
                  <a href="#about" class="scrollto wow fadeInUp delay-5s ">
			            <p>SEE MORE</p>
			            <p class="scrollto--arrow"><img src="" alt="scroll down arrow"></p>
			        </a>
                </div>
              </div>
            </div>
          </section>
		  <!-- Header Image End -->
        </header>
		<!-- ==========================
        HEADER SECTION END
        =========================== -->




		<!-- ==========================
        ABOUT SECTION
        =========================== -->
        <section class="intro text-center section-padding color-bg" id="about">
          <div class="container">
		    <!-- WELCOME TEXT -->
            <div class="row">
              <div class="col-md-8 col-md-offset-2 wp1">
				<!-- about / welcome text -->
                <p>Bienvenue à la célébration de l'amour entre nos mariés ! Au Sénégal, chaque union est un moment magique, comparable à la beauté d'un <a href="#">coucher de soleil</a> ou d'une cascade. C'est un instant où le monde entier semble s'arrêter pour admirer la pureté de l'amour. Nous espérons que vous trouverez ici la même sérénité et joie que ces moments naturels nous offrent, et que vous pourrez partager avec nous la joie et la tranquillité de ce jour spécial.</p>
                </div>
            </div>
          </div>
        </section>




<!-- ==========================
        SERVICE SECTION
        =========================== -->
        <section class="features text-center section-padding" id="service">
          <div class="container">
        <!-- Headline -->
            <div class="row">
              <div class="col-md-12">
                <h1 class="arrow">I do amazing things for clients</h1>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
          <div class="services">
          <!-- Service Box 1 -->
                  <div class="col-md-4 wp2 item">
                    <div class="icon">
                      <i class="fa fa-camera"></i><!-- Icon -->
                    </div>
                    <h2>Photographer</h2><!-- Title -->
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a lorem quis neque interdum consequat ut sed sem. Duis quis tempor nunc. Interdum et malesuada fames ac ante ipsum
                    primis in faucibus.</p><!-- Description -->
                  </div>
          <!-- Service Box 2 -->
                  <div class="col-md-4 wp2 item delay-05s">
                    <div class="icon">
                      <i class="fa fa-desktop"></i><!-- Icon -->
                    </div>
                    <h2>Web Designer</h2><!-- Title -->
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a lorem quis neque interdum consequat ut sed sem. Duis quis tempor nunc. Interdum et malesuada fames ac ante ipsum
                    primis in faucibus.</p><!-- Description -->
                  </div>
          <!-- Service Box 3 -->

          </div>
                  <div class="clearfix"></div>
              </div>
            </div>
          </div>
        </section>





		<div class="container-fluid">
		    <!-- About 1 -->
			<div class="row color-bg">
				<div class="col-md-6 nopadding features-intro-img">
					<div class="about-image" style="background-image:url(/admins/login/images/sene.jpg)"></div><!-- about image 1 -->
				</div>
				<div class="col-md-6 about-text">
					<h6>High quality webdesign</h6><!-- headline-->
					<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat.</p><br><!-- About Text 1 -->
				</div>
			</div>
			<!-- About 2 -->

			<!-- About 3 -->

		</div>
		<!-- ==========================
        ABOUT SECTION END
        =========================== -->




		<!-- ==========================
        PORTFOLIO SECTION
    =========================== -->


        <div class="container">
          <div class="row row-offset-0">

          <!-- PORTFOLIO ITEM 1 -->
          <div class="col-md-3 col-sm-6">
              <div class="overlay-effect effects clearfix">
                  <div class="img">
                      <a href="img/portfolio/portfolio-01-large.jpg" data-lightbox="roadtrip" title="Project One - Lorem Ipsum"><img class="grayscale" src="img/portfolio/portfolio-01-thumbnail.jpg" alt="Portfolio Item"></a>
                  </div>
              </div>
          </div>
  	    <!-- PORTFOLIO ITEM END -->

  	    <!-- PORTFOLIO ITEM 2 -->
          <div class="col-md-3 col-sm-6">
              <div class="overlay-effect effects clearfix">
                  <div class="img">
                      <a href="img/portfolio/portfolio-02-large.jpg" data-lightbox="roadtrip" title="Project Two - Lorem Ipsum"><img class="grayscale" src="img/portfolio/portfolio-02-thumbnail.jpg" alt="Portfolio Item"></a>
                  </div>
              </div>
          </div>
  	    <!-- PORTFOLIO ITEM END -->

  		<!-- PORTFOLIO ITEM 3 -->
          <div class="col-md-3 col-sm-6">
              <div class="overlay-effect effects clearfix">
                  <div class="img">
                      <a href="img/portfolio/portfolio-03-large.jpg" data-lightbox="roadtrip" title="Project Three - Lorem Ipsum"><img class="grayscale" src="img/portfolio/portfolio-03-thumbnail.jpg" alt="Portfolio Item"></a>
                  </div>
              </div>
          </div>
  	    <!-- PORTFOLIO ITEM END -->

  		<!-- PORTFOLIO ITEM 4 -->
          <div class="col-md-3 col-sm-6 ">
              <div class="overlay-effect effects clearfix">
                  <div class="img">
                      <a href="img/portfolio/portfolio-04-large.jpg" data-lightbox="roadtrip" title="Project Four - Lorem Ipsum"><img class="grayscale" src="img/portfolio/portfolio-04-thumbnail.jpg" alt="Portfolio Item"></a>
                  </div>
              </div>
          </div>
  	    <!-- PORTFOLIO ITEM END -->

          <!-- PORTFOLIO ITEM 5 -->
          <div class="col-md-3 col-sm-6 ">
              <div class="overlay-effect effects clearfix">
                  <div class="img">
                      <a href="img/portfolio/portfolio-05-large.jpg" data-lightbox="roadtrip" title="Project Five - Lorem Ipsum"><img class="grayscale" src="img/portfolio/portfolio-05-thumbnail.jpg" alt="Portfolio Item"></a>
                  </div>
              </div>
          </div>
  	    <!-- PORTFOLIO ITEM END -->

  	    <!-- PORTFOLIO ITEM 6 -->
          <div class="col-md-3 col-sm-6">
              <div class="overlay-effect effects clearfix">
                  <div class="img">
                      <a href="img/portfolio/portfolio-06-large.jpg" data-lightbox="roadtrip" title="Project Six - Lorem Ipsum"><img class="grayscale" src="img/portfolio/portfolio-06-thumbnail.jpg" alt="Portfolio Item"></a>
                  </div>
              </div>
          </div>
  	    <!-- PORTFOLIO ITEM END -->

  		<!-- PORTFOLIO ITEM 7 -->
          <div class="col-md-3 col-sm-6">
              <div class="overlay-effect effects clearfix">
                  <div class="img">
                      <a href="img/portfolio/portfolio-07-large.jpg" data-lightbox="roadtrip" title="Project Seven - Lorem Ipsum"><img class="grayscale" src="img/portfolio/portfolio-07-thumbnail.jpg" alt="Portfolio Item"></a>
                  </div>
              </div>
          </div>
  	    <!-- PORTFOLIO ITEM END -->

  		<!-- PORTFOLIO ITEM 8 -->
          <div class="col-md-3 col-sm-6">
              <div class="overlay-effect effects clearfix">
                  <div class="img">
                      <a href="img/portfolio/portfolio-08-large.jpg" data-lightbox="roadtrip" title="Project Eight - Lorem Ipsum"><img class="grayscale" src="img/portfolio/portfolio-08-thumbnail.jpg" alt="Portfolio Item"></a>
                  </div>
              </div>
          </div>
  	    <!-- PORTFOLIO ITEM END -->
        </div><!--/row-->
      </div><!--/.container-->
		<!-- ==========================
        PORTFOLIO SECTION END
        =========================== -->




		<!-- ==========================
        CUSTOM SPACER
        =========================== -->

		<!-- ==========================
        CUSTOM SPACER END
        =========================== -->



    <!-- ==========================
        BLOG SECTION
        =========================== -->
    <section class="text-center section-padding" id="blog">
          <div class="container">
        <!-- Headline -->
        <div class="row">

            </div><br><br>

      <!-- Blog Slider -->
            <div class="row">

            </div>
          </div>
        </section>
    <!-- ==========================
        BLOG SECTION END
        =========================== -->



		<!-- ==========================
        CLIENT SECTION
        =========================== -->
		<div class="container-fluid">
			<div class="row color-bg">
				<!-- Left Image -->
				<div class="col-md-6 nopadding features-intro-img wow fadeInLeft">
					<div class="about-image" style="background-image:url(/home/img/lion.jpg)"></div>
				</div>
				<!-- Clients / Testimonials -->
				<div class="col-md-6 nopadding about-text">
				<h6>What our clients said</h6>
					<div id="clientSlider">
					   <ul class="slides">
					       <li><p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. <br>	<small>- Pete Rock, A New Tomorrow</small></p></li>
						   <li><p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. <br>	<small>- Michael Snowden, Creativeland CEO</small></p></li>
						  <li><p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. <br>	<small>- Tom Davis, GreenWonder</small></p>	</li>
					   </ul>
					</div>
				</div>
			</div>
		</div>
		<!-- ==========================
        CLIENTS SECTION END
        =========================== -->





		<!-- ==========================
        NEWSLETTER SECTION
        =========================== -->
        <section>
		<div class="container-fluid">
				<div class="row color-bg">
				    <div class="col-md-6 nopadding subscribe text-center">

					</div>
					<div class="col-md-6 nopadding features-intro-img">
						 <div class="about-image" style="background-image:url(/home/img/lion.png)"></div><!-- Right Image -->
					</div>
				</div>
			</div>
        </section>
		<!-- ==========================
        NEWSLETTER SECTION END
        =========================== -->



		<!-- ==========================
        CONTACT SECTION
        =========================== -->
        <section class="text-center section-padding contact-wrap" id="contact">
		  <!-- To Top Button -->
          <a href="#top" class="up-btn"><i class="fa fa-chevron-up"></i></a>
          <div class="container">
		    <!-- Headline -->
            <div class="row">
              <div class="col-md-12">
                <h1 class="arrow">Drop <span>me</span> a line</h1>
              </div>
            </div>
            <div class="row contact-details">
			  <!-- Adress Box -->
              <div class="col-md-4">
                <div class="dark-box box-hover">
                  <h2><i class="fa fa-map-marker"></i><span>Address</span></h2>
                  <p>23 Ipsum street, New York</p>
                </div>
              </div>
			  <!-- Phone Number Box -->
              <div class="col-md-4">
                <div class="dark-box box-hover">
                  <h2><i class="fa fa-mobile"></i><span>Phone</span></h2>
                  <p>+12 345 6789</p>
                </div>
              </div>
			  <!-- E-Mail Box -->
              <div class="col-md-4">
                <div class="dark-box box-hover">
                  <h2><i class="fa fa-paper-plane"></i><span>Email</span></h2>
                  <p><a href="#">info@themewagon.com</a></p>
                </div>
              </div>
            </div>
			<div class="row">
			  <!-- Google Maps (Change your Settings below) -->
			  <div class="col-md-6">
			    <div id="googlemaps"></div>
			  </div>
			  <!-- Contact Form -->

			</div>
			<br>
			<!-- Social Buttons - use font-awesome, past in what you want -->
            <div class="row">
              <div class="col-md-12">
                <ul class="social-buttons">
                  <li><a href="#" class="social-btn"><i class="fa fa-dribbble"></i></a></li><!-- dribble -->
                  <li><a href="#" class="social-btn"><i class="fa fa-twitter"></i></a></li><!-- twitter -->
                  <li><a href="#" class="social-btn"><i class="fa fa-facebook"></i></a></li><!-- facebook -->
				  <li><a href="#" class="social-btn"><i class="fa fa-deviantart"></i></a></li><!-- deviantart -->
				  <li><a href="#" class="social-btn"><i class="fa fa-youtube"></i></a></li><!-- youtube -->
                </ul>
              </div>
            </div>
          </div>
        </section>
		<!-- ==========================
        CONTACT SECTION END
        =========================== -->



		<!-- ==========================
        FOOTER SECTION
        =========================== -->
        <footer>
          <div class="container">
            <div class="row">
              <div class="col-md-12 text-center">
                <p>All Rights Reserved. &copy; 2015 <a href="http://www.themewagon.com">ThemeWagon</a>
              </div>
            </div>
          </div>
        </footer>
		<!-- ==========================
        FOOTER SECTION END
        =========================== -->


    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- SmoothScroll -->
    <script type="text/javascript" src="/home/assets/smoothscroll/smoothscroll.js"></script>
    <!-- Bootstrap -->
    <script src="{{asset('/home/assets/bootstrap/js/bootstrap.min.js')}}"></script>
	<!-- Waypoints -->
	<script src="{{asset('/home/js/waypoints.min.js')}}"></script>
    <!-- classie.js -->
	<script src="{{asset('/home/js/classie.js')}}"></script>
    <!-- FlexSlider -->
    <script src="{{asset('/home/assets/flexslider/jquery.flexslider.js')}}"></script>
	<!-- Modernizr -->
    <script src="{{asset('/home/js/modernizr.js')}}"></script>
	<!-- Text Rotator -->
	<script src="{{asset('/home/assets/textrotator/jquery.simple-text-rotator.js')}}"></script>
	<!-- Lightbox.js -->
    <script src="{{asset('/home/assets/lightbox/js/lightbox.min.js')}}"></script>
    <!-- Google Maps -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDeKBBPJTG3v5w3cNPAgM6ZsJiPyL1mP_o&amp;sensor=false"></script>
	<!-- Theme JavaScript Core -->
	<script src="/home/js/main.js"></script>
	<script src="/home/js/script.js"></script>

	<!-- GOOGLE MAPS DATA -->
    <script type="text/javascript">
    // When the window has finished loading create our google map below
        google.maps.event.addDomListener(window, 'load', init);

        function init() {
            // Basic options for a simple Google Map
            // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
            var mapOptions = {
                // How zoomed in you want the map to start at (always required)
                zoom: 15,

                scrollwheel: false,

                // The latitude and longitude to center the map (always required)
                center: new google.maps.LatLng(40.68961985411178, -74.01618003845215), // New York

                // How you would like to style the map.
                // This is where you would paste any style found on Snazzy Maps.
                styles: [	{		featureType:'water',		stylers:[{color:'#F2F2F2'},{visibility:'on'}]	},{		featureType:'landscape',		stylers:[{color:'#FFFFFF'}]	},{		featureType:'road',		stylers:[{saturation:-100},{lightness:45}]	},{		featureType:'road.highway',		stylers:[{visibility:'simplified'}]	},{		featureType:'road.arterial',		elementType:'labels.icon',		stylers:[{visibility:'off'}]	},{		featureType:'administrative',		elementType:'labels.text.fill',		stylers:[{color:'#ADADAD'}]	},{		featureType:'transit',		stylers:[{visibility:'off'}]	},{		featureType:'poi',		stylers:[{visibility:'off'}]	}]
            };

            // Get the HTML DOM element that will contain your map
            // We are using a div with id="map" seen below in the <body>
            var mapElement = document.getElementById('googlemaps');

            // Create the Google Map using out element and options defined above
            var map = new google.maps.Map(mapElement, mapOptions);
        }

    </script>

	<!-- TEXT ROTATOR SETTINGS -->
    <script type="text/javascript">
    $(".rotate").textrotator({
      animation: "fade", // You can pick the way it animates when rotating through words. Options are dissolve (default), fade, flip, flipUp, flipCube, flipCubeUp and spin.
      separator: ",", // If you don't want commas to be the separator, you can define a new separator (|, &, * etc.) by yourself using this field.
      speed: 2000 // How many milliseconds until the next word show.
    });
    </script>

    </body>
</html>
