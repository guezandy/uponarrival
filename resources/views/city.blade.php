<!DOCTYPE html>
<html lang="en">

<head>
    <title>Arriving to: {{$search}}:</title>

    <!-- Meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">

    <!-- 'theme-color' will set background color in Chrome browser on Android 5.0+ -->
    <meta name="theme-color" content="#263238">

    <!-- Favicon - this tools will help you generate favicons for all platform - http://realfavicongenerator.net/ -->
    <link rel="shortcut icon" href="assets/img/favicons/favicon.png">

    <!-- MAIN STYLES -->
    <!-- If you want change theme, you need to remove old one and new one, how for Bootstrap, so for custom theme -->
    <link href="assets/css/bootstrap/theme-b.css" rel="stylesheet" id="bootstrapTheme">
    <!--<link href="assets/css/main-theme/themes/red-b.css" rel="stylesheet" id="mainTheme">-->
    <link href="assets/css/main-theme/theme-m.css" rel="stylesheet" id="mainTheme">
    <!--<link href="assets/css/main-theme/themes/red-m.css" rel="stylesheet" id="mainTheme">-->

    <!-- FONTS -->
    <link href="http://fonts.googleapis.com/css?family=Lato:100,300,400" rel="stylesheet">

    <!-- PLUGINS -->
    <link rel="stylesheet" href="assets/css/plugins/animations.css">
    <link rel="stylesheet" href="assets/css/plugins/animate.css">
    <link rel="stylesheet" href="assets/css/plugins/slider-revolution.css">
    <link rel="stylesheet" href="assets/css/plugins/cubeportfolio.css">
    <link rel="stylesheet" href="assets/css/plugins/owl.carousel.css">
    <link rel="stylesheet" href="assets/css/plugins/font-awesome.css">
    <link rel="stylesheet" href="assets/css/plugins/devicons.css">
</head>

<body>

    <!-- PRELOADER -->
    <div class="preloader-wrap clearfix" id="preloader">
        <div class="hv-center">
            <div class="spinner"></div>
        </div>
    </div>
    <!-- /PRELOADER -->

    <!--===============================
                MAIN WRAP
     ===============================-->
    <div id="page-wrap">
    <!-- Expertise SECTION -->

        <span class="breakPoint" id="s4"></span>
        <div class="section-xlg">
            <div class="container">
                <!--<h2 class="lg-title">{{$search}}</h2>
                <!-- Tab panes -->
                <div style="position:relative">
                  <div class="lg-title-overlay">
                    {{$search}}
                  </div>
                <div>
                <div class="tab-content">
                    <!-- First type of the pricing charts -->
                    <div class="tab-pane active" id="pricesv1">
                        <div class="row">
                          @for ($i = 0; $i < 12; $i++)
                            <div class="col-md-3">
                                <div class="">
                                <!--<div class="panel panel-default prices-v3">-->
                                    <div class="panel-body text-center">
                                        <div class="hover-content">
                                            <div class="visible-part">
                                              <div id="owl-portfolio{!!$i!!}">
                                                <div class="item"><img src="{{$pics[$i][0]}}" alt="assets/img/placeholder.png" onError="this.onerror=null;this.src='assets/img/placeholder.png';"></div>
                                                <div class="item"><img src="{{$pics[$i][1]}}" alt="assets/img/placeholder.png" onError="this.onerror=null;this.src='assets/img/placeholder.png';"></div>
                                              </div>
                                            </div>
                                            <div class="hidden-part">
                                                <h4 class="type">{{$names[$i]}}</h4>
                                                <h4 padding-top: "25px" padding-right: "50px" padding-bottom: "25px" padding-left: "50px"></h4>
                                                <a href="#">
                                                    <h5 class="text-primary details">Additional info</h5>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @if(($i+1)%4 == 0)
                          </div><!--end row -->
                          <div class="row">
                          @endif
                        @endfor
                        </div>
                    </div>
                </div>
                <!--<div class="space-xlg"></div>-->
            </div>
        </div>
        <!-- /Expertise SECTION -->


        <!-- GOOGLE MAPS -->
        <!--<div id="map"></div>--->
        <!-- /GOOGLE MAPS -->

        <!-- FOOTER -->
        <div class="footer">
            <div class="container">
                <!--<div class="space-md"></div>-->
                <div>
                    &copy; 2015 Luna Developer. All rights reserved.
                </div>
            </div>
        </div>
        <!-- /FOOTER -->


        <!--=== BACK TO TOP ===-->
        <a href="#" class="back-to-top">
            <i class="fa fa-angle-up"></i>
        </a>
        <!--===/End BACK TO TOP ===-->
    </div>

    <!--===============================
                /MAIN WRAP
     ===============================-->

    <!-- SCRIPTS -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

    <script src="assets/js/plugins/modernizr-latest.js"></script>
    <script src="assets/js/plugins/picturefill.js"></script>
    <script src="assets/js/plugins/smoothScroll.js"></script>
    <script src="assets/js/plugins/wow.js"></script>
    <script src="assets/js/plugins/classie.js"></script>
    <script src="assets/js/plugins/jquery.nav.js"></script>
    <script src="assets/js/plugins/jquery.stellar.js"></script>
    <script src="assets/js/plugins/jquery.themepunch.tools.js"></script>
    <script src="assets/js/plugins/jquery.themepunch.revolution.js"></script>
    <script src="assets/js/plugins/owl.carousel.js"></script>
    <script src="assets/js/plugins/jquery.knob.js"></script>
    <script src="assets/js/plugins/form.js"></script>
    <script src="assets/js/plugins/dialogFx.js"></script>
    <script src="assets/js/plugins/jquery.cubeportfolio.js"></script>
    <script src="assets/js/plugins/awesome-work.js"></script>
    <script src="assets/js/plugins/jquery.modalEffects.js"></script>
    <script src="assets/js/plugins/cssParser.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
    <script src="assets/js/plugins/snazzy-maps.js"></script>

    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/style-switcher.js"></script>
    <script>
    $(function() {
        //Plugins Init
        Plugins.init();
        Plugins.animations();
        Plugins.wow();
        Plugins.parallaxStellar();
        Plugins.revolutionSlider();
        Plugins.dialogEffects();
        Plugins.onePageNav();
        Plugins.owlCarousel();
        Plugins.knobs(".lbKnob", "#26C6DA");
        Plugins.modalEffects();

        //Custom JS Init
        Custom.init();
        Custom.captchaFix();
        Custom.loadMoreNews();
        Custom.mobileMenuAnimation();
    });
    </script>

    <script>
    $(document).ready(function() {

      $("#owl-portfolio0").owlCarousel({
          autoPlay: 3000, //Set AutoPlay to 3 seconds
          items : 1,
          itemsDesktop : [1199,1],
          itemsDesktopSmall : [979,1]
      });
      $("#owl-portfolio1").owlCarousel({
          autoPlay: 3000, //Set AutoPlay to 3 seconds
          items : 1,
          itemsDesktop : [1199,1],
          itemsDesktopSmall : [979,1]
      });
      $("#owl-portfolio2").owlCarousel({
          autoPlay: 3000, //Set AutoPlay to 3 seconds
          items : 1,
          itemsDesktop : [1199,1],
          itemsDesktopSmall : [979,1]
      });
      $("#owl-portfolio3").owlCarousel({
          autoPlay: 3000, //Set AutoPlay to 3 seconds
          items : 1,
          itemsDesktop : [1199,1],
          itemsDesktopSmall : [979,1]
      });
      $("#owl-portfolio4").owlCarousel({
          autoPlay: 3000, //Set AutoPlay to 3 seconds
          items : 1,
          itemsDesktop : [1199,1],
          itemsDesktopSmall : [979,1]
      });
      $("#owl-portfolio5").owlCarousel({
          autoPlay: 3000, //Set AutoPlay to 3 seconds
          items : 1,
          itemsDesktop : [1199,1],
          itemsDesktopSmall : [979,1]
      });
      $("#owl-portfolio6").owlCarousel({
          autoPlay: 3000, //Set AutoPlay to 3 seconds
          items : 1,
          itemsDesktop : [1199,1],
          itemsDesktopSmall : [979,1]
      });
      $("#owl-portfolio7").owlCarousel({
          autoPlay: 3000, //Set AutoPlay to 3 seconds
          items : 1,
          itemsDesktop : [1199,1],
          itemsDesktopSmall : [979,1]
      });
      $("#owl-portfolio8").owlCarousel({
          autoPlay: 3000, //Set AutoPlay to 3 seconds
          items : 1,
          itemsDesktop : [1199,1],
          itemsDesktopSmall : [979,1]
      });
      $("#owl-portfolio9").owlCarousel({
          autoPlay: 3000, //Set AutoPlay to 3 seconds
          items : 1,
          itemsDesktop : [1199,1],
          itemsDesktopSmall : [979,1]
      });
      $("#owl-portfolio10").owlCarousel({
          autoPlay: 3000, //Set AutoPlay to 3 seconds
          items : 1,
          itemsDesktop : [1199,1],
          itemsDesktopSmall : [979,1]
      });
      $("#owl-portfolio11").owlCarousel({
          autoPlay: 3000, //Set AutoPlay to 3 seconds
          items : 1,
          itemsDesktop : [1199,1],
          itemsDesktopSmall : [979,1]
      });
    });
    </script>

    <!--[if lt IE 9]>
          <script src="http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
    <!-- /SCRIPTS -->
</body>

</html>
