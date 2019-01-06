<template>
    <nb-container :style="{ backgroundColor: '#FFA500'}">
    <view :style="{ flex:1,justifyContent: 'center',alignItems: 'center'}">
        <text class="titulo">GENIAL!!!</text>
        <text class="mensaje1">HAS GANADO</text>
        <text class="mensaje2">!10 PUNTOS¡</text>

        <image :source="{uri: 'https://firebasestorage.googleapis.com/v0/b/sistemacalificaciones-78da3.appspot.com/o/puntos.JPG?alt=media&token=c667bbfa-bca0-4e53-8154-d3b9b13d5d23'}" class="card-item-image" />

        <nb-button rounded class="boton" :onPress="irPreguntas">
            <nb-text>SIGUIENTE</nb-text>
        </nb-button>
    </view>
    </nb-container>
</template>

<script>
    export default {
        props: {
            navigation: {
                type: Object
            }
        },
        name: "resultado-preguntas",
        methods:
        {
            irPreguntas: function()
            {
                this.navigation.navigate("Juegos");
            }
        }

    }
</script>

<style>
    .card-item-image {
        height: 75;
        width: 75;
        margin-top: 20;
        margin-bottom: 20;
        borderRadius: 15;
        align-self: center;
    }
.titulo
{
    color: orangered;
    fontWeight: bold;
    fontSize: 30;
    margin-top: 20;
    margin-bottom: 20;
    textAlign: center;
}
.mensaje1
{
    color: white;
    fontWeight: bold;
    fontSize: 20;
    textAlign: center;
}
.mensaje2
{
    color: white;
    fontWeight: bold;
    fontSize: 30;
    textAlign: center;
}
.boton
{
    background-color: orangered;
    align-self: center;
    margin-top: 20;
}

</style>