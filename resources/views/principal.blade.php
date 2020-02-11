<!doctype html>
<html lang="en">

  <head>
    <title>DMAE &mdash;</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=DM+Sans:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/animate.css">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="css/style.css">

  </head>

  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
    <div id="app">
    
    <div class="site-wrap" id="home-section">

      <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
          <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
          </div>
        </div>
        <div class="site-mobile-menu-body"></div>
      </div>

      <header class="site-navbar site-navbar-target" role="banner">

        <div class="container mb-3">
          <div class="d-flex align-items-center">
            <div class="site-logo mr-auto">
              <a href="/">DMAE<span class="text-primary">.</span></a>
            </div>
            <div class="site-quick-contact d-none d-lg-flex ml-auto ">
              <div class="d-flex site-info align-items-center mr-5">
                <span class="block-icon mr-3"><span class="icon-map-marker"></span></span>
                <span>Blvd. Luis Encinas y Rosales S/N,Col. Centro<br> Hermosillo, Sonora, México</span>
              </div>
              <div class="d-flex site-info align-items-center">
                <span class="block-icon mr-3"><span class="icon-clock-o"></span></span>
                <span>Martes 18 - Martes 25 de Febrero <br> 9:00AM - 2:00PM </span>
              </div> 
            </div>
          </div>
        </div>

        <!-- MENU -->
        @include('plantilla.navbar')
        <!-- END MENU -->
       

      </header>

        <!-- CONTENTS -->
        @yield('content')
        <!-- END CONTENTS -->
    </div>

        
    
    <button onclick="topFunction()" id="myBtnGoTop" title="Go to top" style="display: block;">
        <span class="icon-arrow-up"></span>
    </button>
    </div>
    
    <!-- MENU -->
    @include('plantilla.footernav')
    <!-- END MENU -->
    </div>

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/jquery-migrate-3.0.0.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/jquery.fancybox.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/bootstrap-datepicker.min.js"></script>
    <script src="js/sweetalert2.all.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/app.js"></script>
    <script src="js/main.js"></script>

    <script>

  function load(url) {
      // display loading image here...
      document.getElementById('loadingImg').visible = true;
      // request your data...
      var req = new XMLHttpRequest();
      req.open("POST", url, true);

      req.onreadystatechange = function () {
          if (req.readyState == 4 && req.status == 200) {
              // content is loaded...hide the gif and display the content...
              if (req.responseText) {
                  document.getElementById('content').innerHTML = req.responseText;
                  document.getElementById('loadingImg').visible = false;
              }
          }
      };
      request.send(vars);
  }
        //Get the button
        var mybuttonGoTop = document.getElementById("myBtnGoTop");
        const element =  document.querySelector('.my-animatedActive');
        
        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function() {scrollFunction()};
        
        function scrollFunction() {
          if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
            mybuttonGoTop.style.display = "block";
          } else {
            mybuttonGoTop.style.display = "none";
          }
        }
        

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
          window.scrollTo({top: 0, behavior: 'smooth'});
          // document.body.scrollTop = 0;
          // document.documentElement.scrollTop = 0;
          // element.classList.add('animated', 'animatedActive');
        }

        $(window).on("load",function(){
          $(".loader-wrapper").fadeOut("slow");
        });
        </script>

  </body>

</html>

