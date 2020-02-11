<template>
  <div>
    <div class="ftco-blocks-cover-1">
      <div class="site-section-cover overlay" data-stellar-background-ratio="0.5" style="background-image: url('images/eye.jpg')">
        <div class="container">
          <div class="row align-items-center justify-content-center text-right">
            <div class="col-md-7">
              
              <!-- <button @click="onClick()">DownLoad</button> -->
            </div>
            <div class="col-md-5 mt-5 pt-5">
              <h1 class="mb-3 animated bounceInDown">Programa</h1>
              <h4 class="text-white animated bounceInRight slow">En esta sección podrás conocer mas acerca de lo que el programa trae para ti</h4>
              <p><a href="#programa" class="btn btn-primary animated bounceInRight slow">Conocer más</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="site-section">
      <div id="programa" class="container">
        <div class="row justify-content-center text-center">
          <div id="register" class="col-7 text-center mb-5">
              <h1 class="section-heading text-center">Información del Programa</h1>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-lg-4 mb-4">
            <div class="news-1" style="background-image: url('images/unisonpanoramica.jpg');">
              <div class="text">
                <h3>Ceremonia de Bienvenida</h3>
                <span class="category d-block mb-3">Firmas de Convenios</span>
                <p class="mb-4">México - Alemania, inicio de nuevos proyectos de investigación.</p>
                <a href="#descargarPrograma" class="d-block arrow-wrap"><span class="icon-arrow_forward"></span></a>
              </div>
            </div>

          </div>
          <div class="col-md-6 col-lg-4 mb-4">
            <div class="news-1" style="background-image: url('images/plantas-bio.jpg');">
                <div class="text">
                  <h3>Biodiversidad de Plantas y Terapéutica</h3>
                  <span class="category d-block mb-3">Región Endémica de México</span>
                  <a href="#descargarPrograma" class="d-block arrow-wrap"><span class="icon-arrow_forward"></span></a>
                </div>
              </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4">
            <div class="news-1" style="background-image: url('images/oldman.jpg');">
                <div class="text">
                  <h3>Oftalmología Experimental</h3>
                  <span class="category d-block mb-3">Desarollo de nuevas terapias</span>
                  <a href="#descargarPrograma" class="d-block arrow-wrap"><span class="icon-arrow_forward"></span></a>
                </div>
              </div>

          </div>


          <div class="col-md-6 col-lg-4 mb-4">
            <div class="news-1" style="background-image: url('images/algas.png');">
                <div class="text">
                  <h3>Foro de Discusión</h3>
                  <span class="category d-block mb-3">Biodiversidad de Extractos Naturales</span>
                  <a href="#descargarPrograma" class="d-block arrow-wrap"><span class="icon-arrow_forward"></span></a>
                </div>
              </div>
          </div>

          <div class="col-md-6 col-lg-4 mb-4">
            <div class="news-1" style="background-image: url('images/bucida.jpg');">
                <div class="text">
                  <h3>Conferencia</h3>
                  <span class="category d-block mb-3">Modulación antioxidante y angiogénica</span> 
                  <a href="#descargarPrograma" class="d-block arrow-wrap"><span class="icon-arrow_forward"></span></a> 
                </div>
              </div>
          </div>

          <div class="col-md-6 col-lg-4 mb-4"> 
            <div class="news-1" style="background-image: url('images/visiondmae.jpg');"> 
              <div class="text">
                <h3>Degeneración Macular</h3>
                <span class="category d-block mb-3">Tratamientos</span> 
                <a href="#descargarPrograma" class="d-block arrow-wrap"><span class="icon-arrow_forward"></span></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    

    <div id="descargarPrograma" class="site-section section-3" data-stellar-background-ratio="0.5" style="background-image: url('images/hero_2.jpg');">
      <div class="container">
        <div class="row justify-content-center text-center">
          <div class="col-7 text-center mb-5">
            <p class="lead text-white">Comienza a explorar lo que este simposio tiene para ti</p>
            <h1 class="text-white">Descarga nuestro programa</h1>
            <div class="row">
              <div class="col-6 programa">
                  <button  type="button" class="btn btn-primary" @click="onClick()">Descargar Programa</button>
                </div>
              </div>
          </div>
        </div>
        
      </div>
    </div>

    <div class="site-section counter-wrap">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-4 mb-5">
            <div class="d-flex align-items-center counter">
              <span class="mr-3">
                  <img src="images/politica.png" alt="Image" class="img-fluid mx-auto ">
              </span>
              <div class="text">
                <span class="d-block number">8</span>
                <span class="caption mt-3">Conferencias</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-5">
            <div class="d-flex align-items-center counter">
              <span class="mr-3">
                  <img src="images/trabajo.png" alt="Image" class="img-fluid mx-auto ">
              </span>
              <div class="text">
                <span class="d-block number">4</span>
                <span class="caption">Talleres</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-5">
            <div class="d-flex align-items-center counter">
              <span class="mr-3">
                  <img src="images/adn.png" alt="Image" class="img-fluid mx-auto ">
              </span>
              <div class="text">
                <span class="d-block number">5</span>
                <span class="caption">Visitas</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
</template>

<script>
    export default {
       methods: {
          onClick() {
            console.log('LO DESCARGARE.')

              axios({
                    url: '/programaDMAE.pdf',
                    method: 'GET',
                    responseType: 'blob',
                }).then((response) => {
                      console.log('DESCARGADO')

                     var fileURL = window.URL.createObjectURL(new Blob([response.data]));
                     var fileLink = document.createElement('a');
   
                     fileLink.href = fileURL;
                     fileLink.setAttribute('download', 'programaDMAE.pdf');
                     document.body.appendChild(fileLink);
   
                     fileLink.click();
                });
          }
      },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>