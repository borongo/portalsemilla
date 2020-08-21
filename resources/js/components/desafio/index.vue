<template>
    <div class="bg4 tam3">
        <a href="index.php?pagina=inicio&npag=1">
            <div class="retornoblog"></div>
        </a>

        <div class="container-fluid contenedor-vid" style="margin-top :400px">
            <div class="d-flex justify-content-center menu-st">

                <div class="card justify-content-center border-0 card-us " style="width: 6rem; border-radius: 2em ">
                    <a href="/videos">
                        <h6 class="text-center Nick_Name videos-title-menu " style="color: rgb(206, 206, 206);">
                            Videos</h6>
                    </a>
                    <div class="progress ml-2 mr-2  menu_progress  ">
                        <div class="progress-bar " role="progressbar "
                             style="width:0%; background-color: rgb(206, 206, 206);" aria-valuenow="100 "
                             aria-valuemin="0 " aria-valuemax="100 "></div>
                    </div>
                    <p class="text-centert porcentaje-tv" style="color: rgb(206, 206, 206);">0% </p>
                </div>

                <div class="card justify-content-center border-0 card-us "
                     style="width: 6rem; border-radius: 2em ; margin-left:130px;">
                    <a href="/desafio">
                        <h6 class="text-center Nick_Name" style="color: rgb(111, 131, 234);">Desafios</h6>
                    </a>
                    <div class="progress ml-2 mr-2  menu_progress  ">
                        <div class="progress-bar" role="progressbar "
                             style="width:23%;background-color: rgb(111, 131, 234);" aria-valuenow="100 "
                             aria-valuemin="0 " aria-valuemax="100 "></div>
                    </div>
                    <p class="text-centert porcentaje-tv">0% </p>
                </div>

                <div class="card justify-content-center border-0 card-us "
                     style="width: 6rem; border-radius: 2em ; margin-left:130px;">
                    <h6 class="text-center Nick_Name" style="color: rgb(206, 206, 206);">Juegos</h6>
                    <div class="progress ml-2 mr-2  menu_progress  ">
                        <div class="progress-bar  " role="progressbar "
                             style="width:4%; background-color: rgb(206, 206, 206);" aria-valuenow="100 "
                             aria-valuemin="0 " aria-valuemax="100 "></div>
                    </div>
                    <p class="text-centert porcentaje-tv" style="color: rgb(206, 206, 206);">0% </p>
                </div>

                <div class="card justify-content-center border-0 card-us "
                     style="width: 6rem; border-radius: 2em ; margin-left:130px;">
                    <a href="/posts">
                        <h6 class="text-center Nick_Name" style="color: rgb(206, 206, 206);">Blog</h6>
                    </a>
                    <div class="progress ml-2 mr-2  menu_progress  ">
                        <div class="progress-bar  " role="progressbar "
                             style="width:6%; background-color: rgb(206, 206, 206);" aria-valuenow="100 "
                             aria-valuemin="0 " aria-valuemax="100 "></div>
                    </div>
                    <p class="text-centert porcentaje-tv" style="color: rgb(206, 206, 206);">% </p>
                </div>
            </div>
        </div>
        <div class="container text-center border cont-desafi  ">

            <p class="mt-4 ml-4 Cofre_1" style="margin-righ:-40px;text-align: initial !important;"></p>
            <div class="d-flex flex-column justify-content-start video-inter">

                <div class="d-flex  bd-highlight mt-5  Actividad-titulo">
                    <p>Actividad</p>
                </div>

                <div class="d-flex flex-column  Actividad-titulo-text">
                    <p>Con el objetivo de ofrecer una experiencia lo más fiel posible a la realidad, ‘Dirt Rally 2.0’
                        aboga por los daños reales en los vehículos, así como unas físicas tremendamente exigentes. Una
                        curva mal dada y veremos consecuencias en la
                        chapa, las ruedas o el motor. Un mal volantazo y veremos cómo nuestro automóvil queda totalmente
                        inservible. Y sí, es posible recibir daños letales si lo habilitamos en opciones.</p>
                </div>

            </div>

        </div>


        <div class="container justify-content-start d-flex flex-row border cont-desa1 ">

            <div class="d-flex flex-row bd-highlight  " style="width: 8rem; border-radius: 2em;position: relative; left: 0; top: 0;">
                <img  class="encima-desafio rounded-circle" src="../../../img/icon/estrella_check.png">
            </diV>
            <div class="mt-4  desaconte ml-5 pl-5 ">
                <p class="tt-video"> Link a Instagram</p><br>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt voluptatem voluptate hic ducimus,
                    recusandae aspernatur illum facilis reprehenderit praesentium assumenda harum ipsa quaerat. Quos
                    sequi tenetur quae accusamus, quidem ipsa.</p>
                <div name="desafio19"><a :href="desafios[0].link_insta" target="_blank"><img src="../../../img/per1.png" alt=""></a></div>
                <input type="text" :id="desafios[0].id" :name="desafios[0].nombre" v-model="desafios[0].link_insta">
            </div>
            <div class="d-flex justify-content-end align-items-end mb-5 mr-5 pr-4 Publicar " style="padding-top:330">
                <button class="circulo-des-boton text-light" v-on:click="validarinsta(desafios[0])">Publicar</button>
            </div>
        </div>

        <div class="container justify-content-start d-flex flex-row border cont-desa1 ">

            <div class="d-flex flex-row bd-highlight  " style="width: 8rem; border-radius: 2em;position: relative; left: 0; top: 0;">
                <img  class="encima-desafio rounded-circle" src="../../../img/icon/estrella_check.png">
            </diV>

            <div class="mt-4  desaconte ml-5 pl-5 ">
                <p class="tt-video"> Link a Instagram</p><br>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt voluptatem voluptate hic ducimus,
                    recusandae aspernatur illum facilis reprehenderit praesentium assumenda harum ipsa quaerat. Quos
                    sequi tenetur quae accusamus, quidem ipsa.</p>

                <div name="desafio19">
                    <a :href="desafios[0].link_insta" target="_blank">  <img src="../../../img/per1.png" alt=""> </a>

                </div>
                <input type="text" :id="desafios[1].id" :name="desafios[1].nombre" v-model="desafios[1].link_insta">

            </div>
            <div class="d-flex justify-content-end align-items-end mb-5 mr-5 pr-4 Publicar " style="padding-top:330">

                <button class="circulo-des-boton text-light" v-on:click="validarinsta(desafios[1])">Publicar</button>
            </div>

        </div>
        <div class="container justify-content-start d-flex flex-row border cont-desa1 ">
            <div class="d-flex flex-row bd-highlight  " style="width: 8rem; border-radius: 2em;position: relative; left: 0; top: 0;">
                <img  class="encima-desafio rounded-circle" src="../../../img/icon/estrella_check.png">
            </diV>
            <div class="mt-4  desaconte ml-5 pl-5 ">
                <p class="tt-video"> Link a Instagram</p><br>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt voluptatem voluptate hic ducimus,
                    recusandae aspernatur illum facilis reprehenderit praesentium assumenda harum ipsa quaerat. Quos
                    sequi tenetur quae accusamus, quidem ipsa.</p>
                <div name="desafio19">
                    <a :href="desafios[2].link_insta" target="_blank">  <img src="../../../img/per1.png" alt=""></a>
                </div>
                <input type="text" :id="desafios[2].id" :name="desafios[2].nombre" v-model="desafios[2].link_insta">
            </div>
            <div class="d-flex justify-content-end align-items-end mb-5 mr-5 pr-4 Publicar " style="padding-top:330">
                <button class="circulo-des-boton text-light" v-on:click="validarinsta(desafios[2])">Publicar</button>
            </div>
        </div>
    </div>
</template>

<script>
    import axios from "axios";

    export default {
        name: "index",
        props: ['insta'],
        data() {
            return {
                desafios: [
                    {
                        id: 19,
                        n_cofre: 1,
                        n_desafio: 1,
                        nombre: "",
                        tipo: "",
                        link_insta: ""
                    },
                    {
                        id: 20,
                        n_cofre: 1,
                        n_desafio: 2,
                        nombre: "",
                        tipo: "",
                        link_insta: ""
                    },
                    {
                        id: 21,
                        n_cofre: 1,
                        n_desafio: 3,
                        nombre: "",
                        tipo: "",
                        link_insta: ""
                    }
                ],
            }
        },
        created() {
            this.getDesafio();
        },
        methods: {
            getDesafio() {
                axios.get("/insdesafio").then(res => {
                    console.log();
                    this.desafios[0].link_insta = res.data[19].link_insta;
                    this.desafios[1].link_insta = res.data[20].link_insta;
                    this.desafios[2].link_insta = res.data[21].link_insta;
                });
            },
            validarinsta(desafio) {
                if(this.validURL(desafio.link_insta)){
                    axios.post("/desafio", {...desafio}).then(res => {

                    }).finally(()=>{
                       location.reload();
                    });
                }else{
                    alert("url invalida");
                }

            },
            validURL(str) {
                var pattern = new RegExp('^(https?:\\/\\/)?' + // protocol
                    '((([a-z\\d]([a-z\\d-]*[a-z\\d])*)\\.)+[a-z]{2,}|' + // domain name
                    '((\\d{1,3}\\.){3}\\d{1,3}))' + // OR ip (v4) address
                    '(\\:\\d+)?(\\/[-a-z\\d%_.~+]*)*' + // port and path
                    '(\\?[;&a-z\\d%_.~+=-]*)?' + // query string
                    '(\\#[-a-z\\d_]*)?$', 'i'); // fragment locator
                return !!pattern.test(str);
            }

        }
    }
</script>

<style scoped>

</style>
