<!doctype html>
<html lang="en">

  <head>
    <title>DMAE &mdash; Website Template by Colorlib</title>
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
              <a href="index.html">DMAE<span class="text-primary">.</span></a>
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
        <!-- <i class="qode_icon_font_awesome fa fa-arrow-up "></i> -->
        <span class="icon-arrow-up"></span>
    </button>
    </div>
    

    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <h2 class="footer-heading mb-3">Simposio</h2>
                <p class="mb-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>

                <h2 class="footer-heading mb-4">Instituciones</h2>
                <!-- <form action="#" class="d-flex" class="subscribe">
                  <input type="text" class="form-control mr-3" placeholder="Email">
                  <input type="submit" value="Send" class="btn btn-primary">
                </form> -->
                <div class="row">
                    <div class="col-md-4">
                        <img src="images/kiel.png" alt="Image" class=" img-fluid mx-auto margin-dipa ">
                    </div>
                    <div class="col-md-4">
                        <img src="images/logounison.png" alt="Image" class="img-fluid mx-auto d-block logoU">
                    </div>
                    <div class="col-md-4">
                        <img src="images/dfg.png" alt="Image" class=" img-fluid mx-auto margin-dipa ">
                    </div>
                </div>
                <div class="row">
                    
                </div>
               
          </div>
          <div class="col-lg-4 mt-4 ml-auto">
            <div class="row">
              <div class="col-lg-14 ml-auto">
                <h2 class="footer-heading mb-4">Navegacion</h2>
                <ul class="list-unstyled">
                  <li @click="menu=1"><a href="#">Nuestro Proyecto</a></li>
                  <li @click="menu=2"><a href="#">Programa</a></li>
                  <li @click="menu=3"><a href="#">Líderes</a></li>
                  <li @click="menu=4"><a href="#">Registro</a></li>
                  <!-- <li><a href="#">Contact Us</a></li> -->
                </ul>
              </div>
              
            </div>
          </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <div class="border-top pt-5">
              <p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made by <a href="" target="_blank" >Ing. Ana Lidia Iloki Lewis</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
            </div>
          </div>

        </div>
      </div>

    </footer>

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
    <script src="js/aos.js"></script>
    <script src="js/app.js"></script>

    <script src="js/main.js"></script>

    <script>
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
          document.body.scrollTop = 0;
          document.documentElement.scrollTop = 0;
          // element.classList.add('animated', 'animatedActive');
        }
        </script>

  </body>

</html>

