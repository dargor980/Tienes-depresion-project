<template>
    <div>

        <!--inicio del test-->

        <div class="row justify-content-center my-5" v-if="inicio">
          
            <div class="col-md-6" id="presentacion-cuestionario">
                <div class="container my-2">
                    <p class="bold text-center" style="font-size:20pt;">Cuestionario de Salud de Goldberg</p>
                    <div class="row">
                        <div class="col-md-3">
                            <img src="img/test/Test-03.png" alt="" id="bolsa-cuestionario-inicio">
                        </div>
                        <div class="col-md-9">
                            <p class="regular" style="font-size:12pt">
                                Queremos saber cómo se ha sentido, durante las
                                últimas dos semanas.
                                Responda las preguntas marcando la alternativa
                                que más se asemeje a cómo se siente.
                                Es importante que las quejas o molestias sean
                                recientes, no aquellas que ha tenido en el pasado.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" v-if="inicio">
            <div class="col-md-4"></div>
            <div class="col-md-4 text-center">
                <button type="submit" class="btn" @click="initTest"><p class="boton text-white bold" style="font-size: 18pt;">Iniciar Test</p></button>
            </div>
            <div class="col-md-4 text-right">
                <img src="img/test/fundacion.png" alt="logo fundacion" id="logo-fundacion" >
            </div>
        </div>

        <!--/inicio del test-->

            <!--1° Ronda de preguntas -->
            <form @submit.prevent="">
                <div class="row my-5" v-if="ronda1">
                    
                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-md-3">
                                <img src="img/test/Test-07.png" alt="mujer" id="mujer1">
                            </div>
                            <div class="col-md-9" id="pregunta1">
                                <div class="container ml-2 my-2">
                                    <p class="regular text-center" style="font-size:12pt">1- ¿Recientemente, te has podido  concentrar en lo que haces?</p>
                                    <p class="botonCuestionario text-center ml-3 text-white regular">a- Mejor que de costumbre <input type="radio"  id="1" value="0" v-model="respuesta1"></p>
                                    <p class="botonCuestionario text-center ml-3 text-white regular">b- Igual que de costumbre <input type="radio"  id="2" value="1" v-model="respuesta1"></p>
                                    <p class="botonCuestionario text-center ml-3 text-white regular">c- Menos que de costumbre <input type="radio"   id="3" value="2" v-model="respuesta1"></p>
                                    <p class="botonCuestionario text-center ml-3 text-white regular">d- Mucho Menos que de costumbre <input type="radio" id="4" value="3" v-model="respuesta1"></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-md-3">
                                <img src="img/test/Test-08.png" alt="mujer" id="mujer1">
                            </div>
                            <div class="col-md-9" id="pregunta1">
                                <div class="container ml-2 my-2">
                                    <p class="regular text-center" style="font-size:12pt">2- ¿Recientemente, has perdido mucho sueño por preocupaciones?</p>
                                    <p class="botonCuestionario text-center ml-3 text-white regular">a- No, en absoluto <input type="radio"  value="0" v-model="respuesta2"></p>
                                    <p class="botonCuestionario text-center ml-3 text-white regular">b- No más de lo usual <input type="radio"  value="1" v-model="respuesta2"></p>
                                    <p class="botonCuestionario text-center ml-3 text-white regular">c- Algo más que lo usual <input type="radio" value="2" v-model="respuesta2"></p>
                                    <p class="botonCuestionario text-center ml-3 text-white regular">d- Mucho más que lo usual <input type="radio"  value="3" v-model="respuesta2"></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-md-3">
                                <img src="img/test/Test-19.png" alt="mujer" id="mujer1">
                            </div>
                            <div class="col-md-9" id="pregunta1">
                                <div class="container ml-2 my-2">
                                    <p class="regular text-center" style="font-size:12pt">3- Ultimamente, ¿se ha sentido útil para los demás?</p>
                                    <p class="botonCuestionario text-center ml-3 text-white regular">a- Más que de costumbre <input type="radio"  value="0" v-model="respuesta3"></p>
                                    <p class="botonCuestionario text-center ml-3 text-white regular">b- Igual que de costumbre <input type="radio"  value="1" v-model="respuesta3"></p>
                                    <p class="botonCuestionario text-center ml-3 text-white regular">c- Menos que de costumbre <input type="radio"  value="2" v-model="respuesta3"></p>
                                    <p class="botonCuestionario text-center ml-3 text-white regular">d- Mucho Menos útil <input type="radio" value="3" v-model="respuesta3"></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row" v-if="ronda1">
                    <div class="col-md-4"></div>
                    <div class="col-md-4 text-center">
                        <button type="submit" class="btn" @click="segundaRonda"><p class="boton text-white bold" style="font-size: 18pt;">Siguiente</p></button>
                    </div>
                </div>
            </form>

        <!--/1° Ronda de preguntas -->


        <!--2° Ronda de preguntas -->

         <form @submit.prevent="">
                <div class="row my-5" v-if="ronda2">
                    
                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-md-3">
                                <img src="img/test/Test-09.png" alt="mujer" id="mujer1">
                            </div>
                            <div class="col-md-9" id="pregunta1">
                                <div class="container ml-2 my-2">
                                    <p class="regular text-center" style="font-size:12pt">4- ¿Te sientes capaz de tomar decisiones?</p>
                                    <p class="botonCuestionario text-center ml-3 text-white regular">a- Mas que lo usual <input type="radio" name="respuesta1" value="0" v-model="respuesta1"></p>
                                    <p class="botonCuestionario text-center ml-3 text-white regular">b- Igual que lo usual <input type="radio" name="respuesta1" value="1" v-model="respuesta1"></p>
                                    <p class="botonCuestionario text-center ml-3 text-white regular">c- Menos que lo usual <input type="radio" name="respuesta1" value="2" v-model="respuesta1"></p>
                                    <p class="botonCuestionario text-center ml-3 text-white regular">d- Mucho Menos capaz <input type="radio" name="respuesta1" value="3" v-model="respuesta1"></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-md-3">
                                <img src="img/test/Test-11.png" alt="mujer" id="bolsa-cuestionario-inicio">
                            </div>
                            <div class="col-md-9" id="pregunta1">
                                <div class="container ml-2 my-2">
                                    <p class="regular text-center" style="font-size:12pt">5- ¿Se ha sentido constantemente bajo tensión?</p>
                                    <p class="botonCuestionario text-center ml-3 text-white regular">a- No, en absoluto <input type="radio" name="respuesta2" value="0" v-model="respuesta2"></p>
                                    <p class="botonCuestionario text-center ml-3 text-white regular">b- No más de lo usual <input type="radio" name="respuesta2" value="1" v-model="respuesta2"></p>
                                    <p class="botonCuestionario text-center ml-3 text-white regular">c- Algo más que lo usual <input type="radio" name="respuesta2" value="2" v-model="respuesta2"></p>
                                    <p class="botonCuestionario text-center ml-3 text-white regular">d- Mucho más que de costumbre <input type="radio" name="respuesta2" value="3" v-model="respuesta2"></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-md-3">
                                <img src="img/test/Test-15.png" alt="mujer" id="mujer1">
                            </div>
                            <div class="col-md-9" id="pregunta1">
                                <div class="container ml-2 my-2">
                                    <p class="regular text-center" style="font-size:12pt">6- Ha sentido que no puede superar sus dificultades?</p>
                                    <p class="botonCuestionario text-center ml-3 text-white regular">a- No, en absoluto <input type="radio" name="respuesta3" value="0" v-model="respuesta3"></p>
                                    <p class="botonCuestionario text-center ml-3 text-white regular">b- Igual que lo habitual <input type="radio" name="respuesta3" value="1" v-model="respuesta3"></p>
                                    <p class="botonCuestionario text-center ml-3 text-white regular">c- Más que lo habitual <input type="radio" name="respuesta3" value="2" v-model="respuesta3"></p>
                                    <p class="botonCuestionario text-center ml-3 text-white regular">d- Mucho más que lo habitual <input type="radio" name="respuesta3" value="3" v-model="respuesta3"></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row" v-if="ronda2">
                    <div class="col-md-4"></div>
                    <div class="col-md-4 text-center">
                        <button type="submit" class="btn" @click="terceraRonda"><p class="boton text-white bold" style="font-size: 18pt;">Siguiente</p></button>
                    </div>
                </div>
            </form>



        <!--/2° Ronda de preguntas -->


        <!--3° Ronda de preguntas -->

        <form @submit.prevent="">
                <div class="row my-5" v-if="ronda3">
                    
                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-md-3">
                                <img src="img/test/Test-10.png" alt="mujer" id="bolsa-cuestionario-inicio">
                            </div>
                            <div class="col-md-9" id="pregunta1">
                                <div class="container ml-2 my-2">
                                    <p class="regular text-center" style="font-size:12pt">7- ¿Has podido disfrutar de la vida diaria??</p>
                                    <p class="botonCuestionario text-center ml-3 text-white regular">a- Mas que de costumbre <input type="radio" name="respuesta1" value="0" v-model="respuesta1"></p>
                                    <p class="botonCuestionario text-center ml-3 text-white regular">b- Igual que de costumbre <input type="radio" name="respuesta1" value="1" v-model="respuesta1"></p>
                                    <p class="botonCuestionario text-center ml-3 text-white regular">c- Menos que de costumbre <input type="radio" name="respuesta1" value="2" v-model="respuesta1"></p>
                                    <p class="botonCuestionario text-center ml-3 text-white regular">d- Mucho menos <input type="radio" name="respuesta1" value="3" v-model="respuesta1"></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-md-3">
                                <img src="img/test/Test-17.png" alt="mujer" id="mujer1">
                            </div>
                            <div class="col-md-9" id="pregunta1">
                                <div class="container ml-2 my-2">
                                    <p class="regular text-center" style="font-size:12pt">8- ¿Te has sentido capaz de enfrentar los problemas?</p>
                                    <p class="botonCuestionario text-center ml-3 text-white regular">a- Más que lo habitual <input type="radio" name="respuesta2" value="0" v-model="respuesta2"></p>
                                    <p class="botonCuestionario text-center ml-3 text-white regular">b- Igual que lo habitual <input type="radio" name="respuesta2" value="1" v-model="respuesta2"></p>
                                    <p class="botonCuestionario text-center ml-3 text-white regular">c- Menos capaz que lo habitual <input type="radio" name="respuesta2" value="2" v-model="respuesta2"></p>
                                    <p class="botonCuestionario text-center ml-3 text-white regular">d- Mucho menos capaz <input type="radio" name="respuesta2" value="3" v-model="respuesta2"></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-md-3">
                                <img src="img/test/Test-18.png" alt="mujer" id="mujer1">
                            </div>
                            <div class="col-md-9" id="pregunta1">
                                <div class="container ml-2 my-2">
                                    <p class="regular text-center" style="font-size:12pt">9- ¿Te has sentido triste o deprimido?</p>
                                    <p class="botonCuestionario text-center ml-3 text-white regular">a- No, en absoluto <input type="radio" name="respuesta3" value="0" v-model="respuesta3"></p>
                                    <p class="botonCuestionario text-center ml-3 text-white regular">b- No más que de costumbre <input type="radio" name="respuesta3" value="1" v-model="respuesta3"></p>
                                    <p class="botonCuestionario text-center ml-3 text-white regular">c- Algo más que de costumbre <input type="radio" name="respuesta3" value="2" v-model="respuesta3"></p>
                                    <p class="botonCuestionario text-center ml-3 text-white regular">d- Mucho Más que de costumbre <input type="radio" name="respuesta3" value="3" v-model="respuesta3"></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row" v-if="ronda3">
                    <div class="col-md-4"></div>
                    <div class="col-md-4 text-center">
                        <button type="submit" class="btn" @click="cuartaRonda"><p class="boton text-white bold" style="font-size: 18pt;">Siguiente</p></button>
                    </div>
                </div>
            </form>

        <!--/3° Ronda de preguntas -->

        <!--4° Ronda de preguntas -->
        
         <form @submit.prevent="">
                <div class="row my-5" v-if="ronda4">
                    
                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-md-3">
                                <img src="img/test/Test-21.png" alt="mujer" id="mujer1">
                            </div>
                            <div class="col-md-9" id="pregunta1">
                                <div class="container ml-2 my-2">
                                    <p class="regular text-center" style="font-size:12pt">10- ¿Has perdido confianza en ti mismo?</p>
                                    <p class="botonCuestionario text-center ml-3 text-white regular">a- No, en absoluto <input type="radio" name="respuesta1" value="0" v-model="respuesta1"></p>
                                    <p class="botonCuestionario text-center ml-3 text-white regular">b- No más que de costumbre <input type="radio" name="respuesta1" value="1" v-model="respuesta1"></p>
                                    <p class="botonCuestionario text-center ml-3 text-white regular">c- Algo más que de costumbre <input type="radio" name="respuesta1" value="2" v-model="respuesta1"></p>
                                    <p class="botonCuestionario text-center ml-3 text-white regular">d- Mucho más que de costumbre <input type="radio" name="respuesta1" value="3" v-model="respuesta1"></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-md-3">
                                <img src="img/test/Test-20.png" alt="mujer" id="mujer1">
                            </div>
                            <div class="col-md-9" id="pregunta1">
                                <div class="container ml-2 my-2">
                                    <p class="regular text-center" style="font-size:12pt">11- ¿Te has sentido que no vales nada?</p>
                                    <p class="botonCuestionario text-center ml-3 text-white regular">a- No, en absoluto <input type="radio" name="respuesta2" value="0" v-model="respuesta2"></p>
                                    <p class="botonCuestionario text-center ml-3 text-white regular">b- No más que lo habitual <input type="radio" name="respuesta2" value="1" v-model="respuesta2"></p>
                                    <p class="botonCuestionario text-center ml-3 text-white regular">c- Algo más que lo habitual <input type="radio" name="respuesta2" value="2" v-model="respuesta2"></p>
                                    <p class="botonCuestionario text-center ml-3 text-white regular">d- Mucho más que lo habitual <input type="radio" name="respuesta2" value="3" v-model="respuesta2"></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-md-3">
                                <img src="img/test/Test-16.png" alt="mujer" id="mujer1">
                            </div>
                            <div class="col-md-9" id="pregunta1">
                                <div class="container ml-2 my-2">
                                    <p class="regular text-center" style="font-size:12pt">12- ¿Te has sentido feliz, considerando todas las cosas?</p>
                                    <p class="botonCuestionario text-center ml-3 text-white regular">a-  Mucho Más que de costumbre  <input type="radio" name="respuesta3" value="0" v-model="respuesta3"></p>
                                    <p class="botonCuestionario text-center ml-3 text-white regular">b- Algo más que de costumbre  <input type="radio" name="respuesta3" value="1" v-model="respuesta3"></p>
                                    <p class="botonCuestionario text-center ml-3 text-white regular">c- No más que de costumbre <input type="radio" name="respuesta3" value="2" v-model="respuesta3"></p>
                                    <p class="botonCuestionario text-center ml-3 text-white regular">d- No, en absoluto<input type="radio" name="respuesta3" value="3" v-model="respuesta3"></p>
                                </div> 
                            </div> 
                        </div>
                    </div>
                </div>

                <div class="row" v-if="ronda4">
                    <div class="col-md-4"></div>
                    <div class="col-md-4 text-center">
                        <button type="submit" class="btn" @click="finish"><p class="boton text-white bold" style="font-size: 18pt;">Finalizar</p></button>
                    </div>
                </div>
            </form>

        <!--/4° Ronda de preguntas -->


        <!--finalizando test-->
         <div class="row justify-content-center my-5" v-if="final">
          
            <div class="col-md-6" id="presentacion-cuestionario">
                <div class="container my-3">
                    <p class="bold text-center" style="font-size:20pt;">Cuestionario de Salud de Goldberg</p>
                    <div class="row">
                        <div class="col-md-3">
                            <img src="img/test/Test-03.png" alt="" id="bolsa-cuestionario-inicio">
                        </div>
                        <div class="col-md-9">
                            <p class="regular mb-5" style="font-size:12pt">
                                Sume el puntaje de las 12 preguntas:
                                Si la suma llegar a ser igual o mayor a 5, puede
                                llegar a ser necesaria la consulta con un
                                especialista.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row my-5" v-if="final">
            <div class="col-md-2">
            </div>

            <div class="col-md-8 text-center" id="box-resultado">
                <div class="row">
                    <div class="col-md-3 mt-2">
                        
                            <p class="bold mb-0" style="font-size:20pt;">Resultado</p>
                            <p class="bold mt-2" style="font-size:40pt;">{{puntaje}}</p>
                        
                    </div>
                    <div class="col-md-9" id="diagnostico">
                        <div class="container mb-3">
                            <p class="bold mb-0 mt-2" style="font-size:20pt;">Diagnóstico</p>
                            <p class="regular" style="font-size:12pt" v-if="puntaje>=0 && puntaje <=12">
                                Obtuviste un resultado entre el 00 y 12, lo que significa que, aunque tengas unos
                                pequeños síntomas de depresión leve, pero aun así, recuerda que esto es un test rápido,
                                y si tienes dudas puedes comunicarte con un especialista de la Salud Mental.
                            </p>
                             <p class="regular" style="font-size:12pt" v-if="puntaje>=13 && puntaje <=24">
                                Obtuviste un resultado entre el 13 y 24, lo que significa que puedes tener algunos síntomas
                                de una depresión leve, aún así, recuerda que esto es un test rápido y que lo mejor es que 
                                te comuniques con un especialista de la Salud Mental.
                            </p>
                            <p class="regular" style="font-size:12pt" v-if="puntaje>=25 && puntaje <=36">
                                Obtuviste un resultado entre 25 y 36, esto significa que puedes estar teniendo varios síntomas de
                                una depresión y puede ser una grave, aun así, recuerda que esto es un test rápido y que lo mejor es
                                que te comuniques con un especialista de la Salud Mental.
                            </p>
                            
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-2"></div>
        </div>
        <div class="row" v-if="final">
            <div class="col-md-4"></div>
            <div class="col-md-4 text-center">
                
            </div>
            <div class="col-md-4 text-right">
                <img src="img/test/fundacion.png" alt="logo fundacion" id="logo-fundacion" >
            </div>
        </div>

        <!--/finalizando test-->
    </div>
</template>

<script>
export default {
   data(){
       return{
           puntaje:0,
           inicio:true,
           ronda1: false,
           ronda2: false,
           ronda3: false,
           ronda4: false,
           final:false,


           respuesta1:'',
           respuesta2:'',
           respuesta3:'',


       }
   },

   created(){
       
   },

   methods:{
       initTest(){
           Swal.fire(
               {
                   title:'Iniciando Test',
                   timer:3000,
               }
           );
           Swal.showLoading();
           this.ronda1=true;
           this.inicio=false;   
       },

       respondido(){
           if(this.respuesta1!='' && this.respuesta2!='' && this.respuesta3!='')
           {
               return true;
           }
           return false;
       },

      /* setValues(ask1, ask2, ask3){
           if(this.pregunta1===0 || this.pregunta1===1){
               ask=0;
           }else{
               if(this.pregunta1===2 || this.pregunta1===3){
                   ask=1;
               }
           }

           if(this.pregunta2===0 || this.pregunta2===1){
               ask=0;
           }else{
               if(this.pregunta2===2 || this.pregunta2===3){
                   ask=1;
               }
           }

           if(this.pregunta3===0 || this.pregunta3===1){
               ask=0;
           }else{
               if(this.pregunta3===2 || this.pregunta3===3){
                   ask=1;
               }
           }
       }, */

       segundaRonda(){
           if(this.respondido())
           {
               this.ronda1=false;
               this.ronda2=true;
               this.puntaje= parseInt(this.puntaje)+parseInt(this.respuesta1)+parseInt(this.respuesta2)+parseInt(this.respuesta3);
               this.respuesta1='';
               this.respuesta2='';
               this.respuesta3='';
               return;
           }
           else{
               
               Swal.fire({
                   title: 'Responda todas las preguntas para avanzar',
                   icon: 'warning',
               });
           }
       },

       terceraRonda(){
           if(this.respondido())
           {
               this.ronda2=false;
               this.ronda3=true;
               this.puntaje=parseInt(this.puntaje)+parseInt(this.respuesta1)+parseInt(this.respuesta2)+parseInt(this.respuesta3);
               console.log(this.puntaje);
               this.respuesta1='';
               this.respuesta2='';
               this.respuesta3='';
               return;
           }
           else{
               Swal.fire({
                   title: 'Responda todas las preguntas para avanzar',
                   icon: 'warning',
               });
           }
       },

       cuartaRonda(){
           if(this.respondido()){
               this.ronda3=false;
               this.ronda4=true;
               this.puntaje=parseInt(this.puntaje)+parseInt(this.respuesta1)+parseInt(this.respuesta2)+parseInt(this.respuesta3);
               this.respuesta1='';
               this.respuesta2='';
               this.respuesta3='';
               return;
           }
           else{
               Swal.fire({
                   title: 'Responda todas las preguntas para avanzar',
                   icon: 'warning',
               });
           }
       },

       finish(){
           if(this.respondido()){
                Swal.fire(
                    {
                        title:'Finalizando Test',
                        timer:3000,
                    }
                );
                Swal.showLoading();

               this.ronda4=false; 
               this.puntaje= parseInt(this.puntaje)+ parseInt(this.respuesta1)+parseInt(this.respuesta2)+parseInt(this.respuesta3);
               this.respuesta1='';
               this.respuesta2='';
               this.respuesta3='';
               this.final=true;
               return;
           }
           else{
               Swal.fire({
                   title: 'Responda todas las preguntas para avanzar',
                   icon: 'warning',
               });
               return;
           }
       },
   },
}
</script>