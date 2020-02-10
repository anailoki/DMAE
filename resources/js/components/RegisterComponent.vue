<template>
  <div>
    <div class="ftco-blocks-cover-1">
      <div class="site-section-cover overlay" data-stellar-background-ratio="0.5" style="background-image: url('images/eye.jpg')">
        <div class="container">
          <div class="row align-items-center justify-content-center text-right">
            <div class="col-md-6 mt-5 pt-5">
            </div>
            <div class="col-md-6 mt-5 pt-5">
                <h1 class="mb-3">Registrate</h1>
                <h4 class="text-white">Solo tienes que completar la información que se encuentra a continuación.</h4>
                <p class="mt-5"><a href="#register" class="btn btn-primary">¡Registrarme!</a></p>

              </div>
          </div>
        </div>
      </div>
    </div>

 <div class="site-section bg-light" id="contact-section">
      <div class="container">
        <div class="row justify-content-center text-center">
          <div id="register" class="col-7 text-center mb-5">
              <h1 class="section-heading text-center">Información de Registro</h1>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-8 mb-5" >
            <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">

              <div class="form-group row">
                <div class="col-md-6 mb-4 mb-lg-0">
                  <label class="col-md-3 form-control-label" for="text-input">Nombre</label>
                  <input  v-bind:class = "(evaluated) ? (errorName) ? 'is-invalid' : 'is-valid' : ''"  type="text" v-model="name"  class="form-control " placeholder=" Ingrese Nombre">
                  <div v-show="errorName" class="invalid-feedback">
                    Por favor ingrese un nombre.
                  </div>
                </div>
                <div class="col-md-6">
                  <label class="col-md-3 form-control-label" for="text-input">Apellidos</label>
                  <input v-bind:class = "(evaluated) ? (errorLastName) ? 'is-invalid' : 'is-valid' : ''"  type="text" v-model="last_name" class="form-control" placeholder="Ingrese Apellidos">
                  <div v-show="errorLastName" class="invalid-feedback">
                    Por favor ingrese los apellidos.
                  </div>
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-6 form-control-label" for="text-input">
                  <label class="col-md-6 form-control-label" for="text-input">Correo Electrónico</label>
                  <input v-bind:class = "(evaluated) ? (errorEmail) ? 'is-invalid' : 'is-valid' : ''" type="text"  v-model="email" class="form-control" placeholder="Ingrese Correo Electronico" required>
                  <div v-show="errorEmail" class="invalid-feedback">
                    Por favor ingrese su correo.
                  </div>
                </div>
                <div class="col-md-6">
                    <label class="col-md-3 form-control-label" for="text-input">Institucion</label>
                    <input v-bind:class = "(evaluated) ? (errorInstituton) ? 'is-invalid' : 'is-valid' : ''" type="text" v-model="institution" class="form-control" placeholder="Ingrese Institución">
                    <div v-show="errorInstituton" class="invalid-feedback">
                      Por favor ingrese la institución.
                    </div>
                  </div>
              </div>

              <div class="form-group row">
                  <div class="col-md-6">
                    <label class="col-md-3 form-control-label" for="exampleFormControlSelect1">Ocupación</label>
                    <select v-bind:class = "(evaluated) ? (errorOccupation) ? 'is-invalid' : 'is-valid' : ''" v-model="occupation" class="form-control" id="exampleFormControlSelect1">
                      <option disabled value="">Seleccione una Ocupación</option>
                      <option value="profesional">Profesional</option>
                      <option value="estudiante">Estudiante</option>
                      <option value="otros">Otros</option>
                      <div v-show="errorOccupation" class="invalid-feedback">
                        Por favor ingrese la institución.
                      </div>
                    </select>
                  </div>
                  <div class="col-md-6" v-show="occupation=='estudiante'">
                      <label class="col-md-3 form-control-label" for="text-input">Carrera</label>
                      <input type="text" v-model="career" class="form-control" placeholder="Ingrese Carrera">
                  </div>
              </div>
              
              <div class="form-group row">
                <div class="col-md-6 btn-register">
                  <button type="button" class="btn btn-primary  btn-block btn-primary text-white py-3 px-5" @click="registrarCategoria()">Registrarme</button>
                </div>
              </div>
              
              <!-- <div v-show="errorUser" class="form-group row div-error">
                  <div class="text-center alert alert-danger ">
                      <div v-for="error in errorShowMsjUser" :key="error" v-text="error" class="" role="alert" >
  
                      </div>
                  </div>
              </div> -->
            </form>

          </div>

          <div class="col-lg-4 ml-auto">
            <div class="bg-white p-3 p-md-5">
              <h3 class="text-black mb-4">Información de Contacto</h3>
              <ul class="list-unstyled footer-link">
                <li class="d-block mb-3">
                  <span class="d-block text-black">Direccion:</span>
                  <span>Blvd. Luis Encinas y Rosales S/N,Col. Centro</span></li>
                <li class="d-block mb-3"><span class="d-block text-black">Teléfono:</span><span>(662) 259.2208</span></li>
                <li class="d-block mb-3"><span class="d-block text-black">Email:</span><span>simposioDMAE@gmail.com</span></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>

   
  </div>
</template>

<script>
    export default {
        data(){
          return{
            name: '',
            last_name: '',
            email: '',
            occupation: '',
            career: '',
            institution: '',
            errorUser: 0,
            errorName:0,    
            errorLastName:0,
            errorEmail:0,
            errorInstituton:0,
            errorOccupation:0,
            evaluated:0,
            errorShowMsjUser: [],
          }
        },
        methods : {

          registrarCategoria(){
            console.log('registrare');
            this.evaluated=0;

            if (this.validationUser()){
                return;
            }
            let me = this;

            axios.post('/users',{
                'name': this.name,
                'last_name': this.last_name,
                'email': this.email,
                'institution': this.institution,
                'occupation': this.occupation,
                'carrer': this.career,

            }).then(function (response) {
              swal(
              'Registrado!',
              'El registro ha sido con éxito.',
              'success'
              )
              me.cleanFields();

            }).catch(function (error) {
                console.log(error);
                if (error.response.status == 422){
                  console.log(error.response.data.errors)
                  swal(
                  'Error!',
                  'Email ya ha sido utilizado',
                  'error'
                  )
                }else{
                  swal(
                  'Error!',
                  'Intentelo de nuevo',
                  'error'
                  )
                  this.cleanFields();

                }
                
            });
          },

          validationUser(){
            this.errorUser=0;
            this.errorName=0;
            this.errorLastName=0;
            this.errorEmail=0;
            this.errorInstituton=0;
            this.errorOccupation=0;
            this.evaluated=1;
            // this.errorShowMsjUser =[];

            if (!this.name) {
              this.errorName = 1;
              this.errorUser=1;

            }

            if (!this.last_name) {
              this.errorLastName = 1;
              this.errorUser=1;
            
            }

            if (!this.email){
              this.errorEmail = 1;
              this.errorUser=1;
            
            } 

            if (!this.institution){
              this.errorInstituton = 1;
              this.errorUser=1;

            } 

            if (this.occupation==''){
              this.errorOccupation = 1;
              this.errorUser=1;

            } 
            // if (this.errorShowMsjUser.length) this.errorUser = 1;

            return this.errorUser;

          },

          cleanFields(){
            this.name = '';
            this.last_name= '';
            this.email= '';
            this.occupation= '';
            this.institution= '';
            this.carrer= '';
            this.evaluated=0;
          }
          
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>