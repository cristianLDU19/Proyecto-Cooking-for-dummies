<template>
    <nb-container :style="{ backgroundColor: '#fff' }">
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
    </nb-container>
</template>

<script>
    export default {
        props: {
            navigation: {
                type: Object
            }
        },
        data: function() {
            return {
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
                    alert("This is Card Body");
                },
            }
    };
</script>

<style scoped>
    .card-item-image {
        flex: 1;
        height: 200;
    }
    .cabeza{
        padding: 10;
        background-color: goldenrod;
        border-color: black;
    }
    .margen {
        margin-left: 5;
        margin-bottom: 15;
        margin-top: 5;
        margin-right: 5;
    }
</style>