<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Motor Website Template</title>
  <meta name="description" content="">
<!-- 
Motor Template
http://www.templatemo.com/tm-463-motor
-->
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,700' rel='stylesheet' type='text/css'>
  <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/css/font-awesome.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/css/templatemo-style.css')}}" rel="stylesheet">

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

      </head>
      <body class="about-page">

        <!-- Preloader -->
        <div id="loader-wrapper">
          <div id="loader"></div>
          <div class="loader-section section-left"></div>
          <div class="loader-section section-right"></div>
        </div>
        <!-- End Preloader -->
    
        <section class="templatemo-top-section" style="margin-bottom: 0px">
            @include('layouts.header')
            @yield('header-content')
      </section>

    <!--Main content-->
    <section class="container margin-bottom-50"> 
        @yield('content')

      <!--banner-->
      @include('layouts.banner')
      
    </section> <!-- Main content -->
    
    <!--Footer content-->
    <footer class="tm-footer">
        @include('layouts.footer')
    </footer> <!-- Footer content-->
    
    <!-- JS -->
    <script type="text/javascript" src="{{asset('assets/js/jquery-1.11.2.min.js')}}"></script>      <!-- jQuery -->
    <script type="text/javascript" src="{{asset('assets/js/templatemo-script.js')}}"></script>      <!-- Templatemo Script -->
    <script defer src="{{asset('assets/js/jquery.flexslider-min.js')}}"></script>     <!-- FlexSlider -->
    <script>
      $(window).load(function() {
        $('.flexslider').flexslider({
          animation: "slide",
          slideshow: false,
          prevText: "&#xf104;",
          nextText: "&#xf105;"
        });

        // Remove preloader
        // https://ihatetomatoes.net/create-custom-preloading-screen/
        $('body').addClass('loaded');
      });
    </script>
  </body>
  </html>
