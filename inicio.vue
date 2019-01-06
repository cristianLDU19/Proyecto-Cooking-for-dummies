<template>
    <nb-container :style="{ backgroundColor: '#fff' }">

        <nb-header>
            <nb-left>
                <nb-button transparent>
                    <nb-icon name="arrow-back" :style="{ color: 'orange'}" />
                </nb-button>
            </nb-left>
            <nb-segment style="border-color: white">
                <nb-button transparent warning
                        :active="seg === 1 ? true : false"
                        first
                        :onPress="cambiarRecetas"
                >
                    <nb-text>RECETAS</nb-text>
                </nb-button>
                <nb-button transparent warning
                        last
                        :active="seg === 2 ? true : false"
                        :onPress="cambiarJuegos"
                >
                    <nb-text>JUEGOS</nb-text>
                </nb-button>
            </nb-segment>
            <nb-right >
                <nb-button class="cabezera-derecha">
                    <nb-thumbnail small :source="logotipo" />
                </nb-button>
            </nb-right>
        </nb-header>

            <view v-if="seg==1">
                <scroll-view>
                    <nb-content padder>
                        <nb-card class="margen" v-for="receta in rece">
                            <nb-card-item header class="cabeza">
                                <nb-text>{{receta.nombre}}</nb-text>
                            </nb-card-item>

                            <nb-card-item cardBody button :onPress="handleBodyClick">
                                <image :source="{uri: receta.foto}" class="card-item-image" />
                            </nb-card-item>
                        </nb-card>
                    </nb-content>
                </scroll-view>
            </view>
            <view v-if="seg==2">
                <nb-card class="mb-15">
                    <nb-card-item header class="cabeza">
                        <nb-text>CARRERAS DEL CHEF</nb-text>
                    </nb-card-item>

                    <nb-card-item cardBody button :onPress="handleBodyClick">
                        <image :source="{uri: 'https://firebasestorage.googleapis.com/v0/b/sistemacalificaciones-78da3.appspot.com/o/carreraChefs.png?alt=media&token=8e54e8a8-82b1-450a-872e-618e2c179f17'}" class="card-item-image" />
                    </nb-card-item>
                </nb-card>
                <nb-card class="mb-15">
                    <nb-card-item header class="cabeza">
                        <nb-text>TRIVIA DE COMMIDA</nb-text>
                    </nb-card-item>

                    <nb-card-item cardBody button :onPress="() => this.props.navigation.navigate('Recetas')">
                        <image :source="{uri: 'https://firebasestorage.googleapis.com/v0/b/sistemacalificaciones-78da3.appspot.com/o/trivia.png?alt=media&token=f22c70e1-2125-48a5-bb90-4a71f2579124'}" class="card-item-image" />
                    </nb-card-item>
                </nb-card>
            </view>

    </nb-container>
</template>


<script>
    import axios from 'axios';
    import RecetasCard from "./recetas-card";
    import logo from "../../assets/usuario.png"
    import ModalidadesCard from "./modalidades-card";
    export default {
        components: {ModalidadesCard, RecetasCard},
        props: {
            navigation: {
                type: Object
            }
        },
        data: function() {
            return {
                logotipo: logo,
                seg: 1,
                rece : [{"id":1,"nombre":"Hamburguesaaaa","foto":"https://firebasestorage.googleapis.com/v0/b/sistemacalificaciones-78da3.appspot.com/o/hamburguesa.jpg?alt=media&token=c7411209-51b7-4bcb-b7e3-8bf5f4cb8173","modalidad":"comidas casuales","costo":4,"slug":"hamburguesa"},
                    {"id":2,"nombre":"Pie de Limon","foto":"https:\/\/firebasestorage.googleapis.com\/v0\/b\/sistemacalificaciones-78da3.appspot.com\/o\/i6576-mousse-maracuya.jpg?alt=media&token=cb94955a-bf4d-437d-9242-950a4309c9c1","modalidad":"comidas casuales","costo":8,"slug":"pie_de_limon"},
                    {"id":3,"nombre":"PIZZA","foto":"https://firebasestorage.googleapis.com/v0/b/sistemacalificaciones-78da3.appspot.com/o/hamburguesa.jpg?alt=media&token=c7411209-51b7-4bcb-b7e3-8bf5f4cb8173","modalidad":"comidas casuales","costo":4,"slug":"hamburguesa"},
                    {"id":4,"nombre":"LASAGGNA","foto":"https:\/\/firebasestorage.googleapis.com\/v0\/b\/sistemacalificaciones-78da3.appspot.com\/o\/i6576-mousse-maracuya.jpg?alt=media&token=cb94955a-bf4d-437d-9242-950a4309c9c1","modalidad":"comidas casuales","costo":8,"slug":"pie_de_limon"}
                ]
            };
        },


        created: function() {
            //this.getRecetas();
        },

        methods:
            {
                /*getRecetas: function() {
                    var urlRecetas = 'http://127.0.0.1:8000/recetas';
                    axios.get(urlRecetas).then(response => {this.rece = response.data});
                },*/
                handleBodyClick: function() {
                    this.navigation.navigate("Juegos");
                },

                cambiarRecetas: function() {
                    this.seg = 1;
                },
                cambiarJuegos: function() {
                    this.seg = 2;
                }
            }





    };
</script>


<style>
    .cabezera-derecha {
        background-color: orange;
    }
    .card-item-image {
        flex: 1;
        height: 200px;
    }
    .cabeza{
        padding: 10px;
        background-color: goldenrod;
       border-color: black;
    }
    .margen {
        margin: 30;
    }

</style>
