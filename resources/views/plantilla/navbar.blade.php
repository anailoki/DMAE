<div class="container">
          <div class="menu-wrap d-flex align-items-center">
            <span class="d-inline-block d-lg-none"><a href="#" class="text-black site-menu-toggle js-menu-toggle py-5"><span class="icon-menu h3 text-black"></span></a></span>

              

              <nav class="site-navigation text-left mr-auto d-none d-lg-block" role="navigation">
                <ul class="site-menu main-menu js-clone-nav mr-auto ">
                  <li @click="menu=0" :class="{ active: menu==0 }"><a href="#" class="nav-link">Inicio</a></li>
                  <li @click="menu=1" :class="{ active: menu==1 }"><a href="#" class="nav-link">Nuestro Proyecto</a></li>
                  <li @click="menu=2" :class="{ active: menu==2 }"><a href="#" class="nav-link">Programa</a></li>
                  <li @click="menu=3" :class="{ active: menu==3 }"><a href="#" class="nav-link">Líderes</a></li>
                  <li @click="menu=4" :class="{ active: menu==4 }"><a href="#" class="nav-link">Registro</a></li>
                </ul>
              </nav>

              <div class="top-social ml-auto">
                  
                <a href="#"><img src="images/alemania.png" alt="Image" class="img-fluid flags-icon mx-auto"></a>
                <a href="#"><img src="images/mexico.png" alt="Image" class="img-fluid flags-icon mx-auto"></span></a>
                <!-- <a href="#"><span class="icon-facebook"></span></a>
                <a href="#"><span class="icon-twitter"></span></a>
                <a href="#"><span class="icon-linkedin"></span></a> -->
              </div>
          </div>
</div>
