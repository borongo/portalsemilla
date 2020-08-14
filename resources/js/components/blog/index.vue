<template>

    <div class="bg4 tam3 container-fluid">

    <a href="index.php?pagina=inicio&npag=1">
        <div class="retornoblog"></div>
    </a>


    <div class="container-fluid contenedor-vid" style="margin-top :400px">


        <div class="d-flex justify-content-center">

            <div class="card justify-content-center border-0 card-us " style="width: 6rem; border-radius: 2em ">
                <a href="?pagina=videos">
                    <h6 class="text-center Nick_Name videos-title-menu " style="color: rgb(206, 206, 206);">Videos</h6>
                </a>
                <div class="progress ml-2 mr-2  menu_progress  ">
                    <div class="progress-bar " role="progressbar "
                         style="width:4%; background-color: rgb(206, 206, 206);" aria-valuenow="100 " aria-valuemin="0 "
                         aria-valuemax="100 "></div>
                </div>
                <p class="text-centert porcentaje-tv" style="color: rgb(206, 206, 206);">10% </p>
            </div>

            <div class="card justify-content-center border-0 card-us "
                 style="width: 6rem; border-radius: 2em ; margin-left:130px;">
                <a href="?pagina=desafio">
                    <h6 class="text-center Nick_Name" style="color: rgb(206, 206, 206);">Desafios</h6>
                </a>
                <div class="progress ml-2 mr-2  menu_progress  ">
                    <div class="progress-bar" role="progressbar "
                         style="width:10%;background-color: rgb(206, 206, 206);" aria-valuenow="100 " aria-valuemin="0 "
                         aria-valuemax="100 "></div>
                </div>
                <p class="text-centert porcentaje-tv" style="color: rgb(206, 206, 206);">5% </p>
            </div>

            <div class="card justify-content-center border-0 card-us "
                 style="width: 6rem; border-radius: 2em ; margin-left:130px;">
                <h6 class="text-center Nick_Name" style="color: rgb(206, 206, 206);">Juegos</h6>
                <div class="progress ml-2 mr-2  menu_progress  ">
                    <div class="progress-bar  " role="progressbar "
                         style="width:3%;background-color: rgb(206, 206, 206);" aria-valuenow="100 " aria-valuemin="0 "
                         aria-valuemax="100 "></div>
                </div>
                <p class="text-centert porcentaje-tv" style="color: rgb(206, 206, 206);">1% </p>
            </div>

            <div class="card justify-content-center border-0 card-us "
                 style="width: 6rem; border-radius: 2em ; margin-left:130px;">
                <a href="?pagina=blog">
                    <h6 class="text-center Nick_Name" style="color: rgb(19, 117, 187);">Blog</h6>
                </a>
                <div class="progress ml-2 mr-2  menu_progress  ">
                    <div class="progress-bar  " role="progressbar "
                         style="width:3%;background-color: rgb(19, 117, 187);" aria-valuenow="100 " aria-valuemin="0 "
                         aria-valuemax="100 "></div>
                </div>
                <p class="text-centert porcentaje-tv">
                    30%
                </p>
            </div>
        </div>
    </div>
    <div class="container text-center border cont-blog11  ">
        <p class="mt-4 ml-4 Cofre_1" style="text-align: initial !important;"></p>
        <div class="d-flex flex-column justify-content-start video-inter">
            <div class="d-flex  bd-highlight mt-5  Actividad-titulo">
                <p>Actividad</p>
            </div>
            <div class="d-flex flex-column  Actividad-titulo-text">
                <p>Con el objetivo de ofrecer una experiencia lo más fiel posible a la realidad, ‘Dirt Rally 2.0’ aboga
                    por los daños reales en los vehículos, así como unas físicas tremendamente exigentes. Una curva mal
                    dada y veremos consecuencias en
                    la chapa, las ruedas o el motor. Un mal volantazo y veremos cómo nuestro automóvil queda totalmente
                    inservible. Y sí, es posible recibir daños letales si lo habilitamos en opciones.</p>
            </div>
        </div>
    </div>
    <form method="post">
        <div class="form-group container justify-content-start d-flex flex-row border cont-blog-pub shadow">
            <input class="ml-2 mt-1 mb-1 border-0" style="width:1155px" type="text" name="posteo">
            <div class="publish-button" :click="hola">
                <button class="btn circulo-des-boton-blog Publicarblog" type="submit" value="">Publicar</button>

            </div>
        </div>


        <input id="usr" name="usr" type="hidden" v-bind="posts.messa">
    </form>
    <!---  inicio post -->
   <publication ></publication>

    </div>

</template>
<script>
    import publication from "./publication"
    export default {
        name: "index",
        props:['posts'],
        components:{
            publication
        },
        methods:{
            hola(){

            }
        }

    }
</script>

<style scoped>

</style>
