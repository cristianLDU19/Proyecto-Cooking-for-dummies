<template>
    <div class="container" >
        <div class="row justify-content-center" v-for="pregunta in preg">
            <div class="col-md-8" align="center">
                <h5 class="pregunta-titulo">{{pregunta.descripcion}}</h5>

                <img class="foto-pregunta redondeo" :src="pregunta.foto">


                <div class="grupo">

                        <div class="grupo-opciones">
                            <div style="display: inline-block; width: 50%"><input type="radio" v-model="vue.exp" name="respuesta" :value="pregunta.opcion1"  checked> <label>{{pregunta.opcion1}}</label></div>
                            <div style="display: inline-block ; width: 50%"><input type="radio" v-model="vue.exp" name="respuesta" :value="pregunta.opcion2"  > <label>{{pregunta.opcion2}}</label></div>
                        </div>

                        <div class="grupo-opciones">
                            <div style="display: inline-block; width: 50%"><input type="radio" v-model="vue.exp" name="respuesta" :value="pregunta.opcion3"> <label>{{pregunta.opcion3}}</label></div>
                            <div style="display: inline-block ; width: 50%"><input type="radio" v-model="vue.exp" name="respuesta" :value="pregunta.opcion4"> <label>{{pregunta.opcion4}}</label></div>
                        </div>

                </div>

                <h2></h2>
                {{$data}}

                <br/>
                <a href="inicio" id="boton" class="btn redondeo boton">SIGUIENTE</a>


            </div>
        </div>
    </div>
</template>

<script >


    export default {

        data:
            {
                vue:{
                    exp:null
                }
            },

        data(){


            return {
                preg: []

            }
        },
        created: function() {
            this.getPregunta();
        },

        methods: {
            getPregunta: function() {
                var urlPregunta = 'pregunta';
                axios.get(urlPregunta).then(response => {this.preg = response.data});
            }

        }
    }
</script>

<style>



    .boton
    {
        background-color: orangered;
        color: white;
        padding-left: 30px;
        padding-right: 30px;
    }

    .redondeo {
        border-radius: 2rem !important;
    }

    input
    {
        padding-top: 5px;
        background: orangered;
    }
    label
    {
        padding-top: 7px;
        margin-left: 10px;
        margin-right: 10px;
    }
    .pregunta-titulo
    {
        color: orangered;
    }
    .foto-pregunta
    {
        width: 300px;
        height: 300px;
        margin: 20px;
        display: block;
    }
    .grupo-opciones
    {
        margin: 10px;
        height: 50%;
        display: flex;
        align-items: center;
    }

    .grupo
    {
        width: 400px;
        height: 100px;
    }
    .izquierda
    {
        justify-content: left;

    }
    .derecha
    {
        justify-content: right;

    }


</style>