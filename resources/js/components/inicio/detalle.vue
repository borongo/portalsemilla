<template>
    <div class="bg3 tam2">
        <a href="/home">
            <div class="retorno"></div>
        </a>
        <div class="container-fluid contenedor">

            <div class="border border-0 d-flex justify-content-between sup margen-title-avatar">

                <div class="d-flex flex-row bd-highlight  "
                     style="width: 8rem; border-radius: 2em;position: relative; left: 0; top: 0;">
                    <a href="?pagina=avatar"><img :src="this.ParseUser.img_avatar" class=" rounded-circle d-block ml-2"
                                                  style="height: 221px; width: 221px;"></a>
                    <a href="?pagina=avatar"> <img class="encima rounded-circle" src="../../../img/icon/edit.png"> </a>


                    <div class=" align-items-center sep-name ">

                        <div class="justify-content-between" style="display: flex">

                            <div class="name mb-1 JuanK_"></div>

                            <a href="#" class="name"><img src="../../../img/icon/cam.png" alt="" width="42px"
                                                          height="42px" style="margi"></a>
                        </div>

                        <div class="progress sep">

                            <div class="progress-bar bg-danger " role="progressbar"
                                 :style="'width:'+this.ParseUser.avance+ '%'" aria-valuenow="100"  aria-valuemin="0"  aria-valuemax="50"></div>
                        </div>
                        <p class="text-center text-dark porcent">{{this.ParseUser.avance+'%'}}</p>

                    </div>
                </div>

                <div class="container-fluid med-prin d-flex flex-column  justify-content-center">

                    <div class="d-flex justify-content-center">
                      <!-- <img class="" src="../../../img/icon/cofre1.png" style=" width:44px; height:55px">
                        <img class="" src="../../../img/icon/cofre1.png" width="44px" height="55px">
                        <img class="" src="../../../img/icon/cofre2.png" width="44px" height="55px">
                        <img src="../../../img/icon/medallas_vacia.png" style="width:44px; height:55px">
                         -->
                          <img src="../../../img/icon/medallas_vacia.png" width="44px" height="55px">
                          <img src="../../../img/icon/medallas_vacia.png" width="44px" height="55px">
                      </div>

                      <div class="d-flex justify-content-center ">
                          <img class="" src="../../../img/icon/medallas_vacia.png" width="44px" height="55px">
                          <img class="" src="../../../img/icon/medallas_vacia.png" width="44px" height="55px">
                          <img class="" src="../../../img/icon/medallas_vacia.png" width="44px" height="55px">
                          <img class="" src="../../../img/icon/medallas_vacia.png" width="44px" height="55px">
                         <!-- <img class="" src="../../../img/icon/medallas.png" width="44px" height="55px">-->


                      </div>
                  </div>


              </div>


              <!--cofres
                  -->
            <div class="container text-center border shadow content-central-avatar-cofres " style="margin-left: 182px">
                <p class="Cofres" style="margin-top: 28px;">Cofres</p>

            </div>

            <div class="container text-center border shadow cont-cofre1  ">


                <div class="d-flex flex-row bd-highlight  "
                     style="width: 8rem; border-radius: 2em;position: relative; left: 0; top: 0;">
                    <img class="encima-cofre1 rounded-circle" src="../../../img/icon/estrella_check.png">
                </div>

                <p class="mt-4 ml-4 Cofre_1" style="margin-righ:-40px;text-align: initial !important;">Cofre 1</p>

                <div class="d-flex justify-content-start cofre1-iconos">
                    <div class="d-flex flex-column bd-highlight mb-3" v-for="avance in this.ParseUser.avances">
                        <a href="?pagina=videos">
                            <div class="p-2 bd-highlight  sep-icons-cofre1 "><img class="rounded-circle "
                                                                                  src="../../../img/icon/cam2.png"
                                                                                  alt="" width="74px" height="74px">
                            </div>
                        </a>
                        <a href="?pagina=videos">
                            <div class="p-2 bd-highlight  sep-icons-cofre1 "><img class="rounded-circle "
                                                                                  src="../../../img/icon/cam.png"
                                                                                  alt="" width="74px" height="74px">
                            </div>
                        </a><!--  if -->


                        <a href="?pagina=videos">
                            <div class="p-2 bd-highlight  sep-icons-cofre1 name-muro">Videos</div>
                        </a>
                        <div class="p-2 bd-highlight  sep-icons-cofre1 text-white circulo-video">1</div>
                        <!--  clase punteados or  "text-white circulo-video" -->
                        <div class="p-2 bd-highlight  sep-icons-cofre1 punteados">1</div>
                        <!--  clase punteados or  "text-white circulo-video" -->
                        <div class="p-2 bd-highlight  sep-icons-cofre1 text-white circulo-video">2</div>
                        <!--  clase punteados or  "text-white circulo-video" -->
                        <div class="p-2 bd-highlight  sep-icons-cofre1 punteados">2</div>
                        <!--  clase punteados or  "text-white circulo-video" -->
                        <div class="p-2 bd-highlight  sep-icons-cofre1 text-white circulo-video">3</div>
                        <!--  clase punteados or  "text-white circulo-video" -->
                        <div class="p-2 bd-highlight  sep-icons-cofre1 punteados">3</div>
                        <!--  clase punteados or  "text-white circulo-video" -->


                    </div>
                    <div class="d-flex flex-column bd-highlight mb-3 ">
                        <a href="?pagina=desafio">
                            <div class="p-2 bd-highlight  sep-icons-cofre1"><img class="rounded-circle "
                                                                                 src="../../../img/icon/rompe2.png"
                                                                                 alt="" width="74px" height="74px">
                            </div>
                        </a>
                        <a href="?pagina=desafio">
                            <div class="p-2 bd-highlight  sep-icons-cofre1"><img class="rounded-circle "
                                                                                 src="../../../img/icon/rompe.png"
                                                                                 alt="" width="74px" height="74px">
                            </div>
                        </a><!--  if -->

                        <a href="?pagina=desafio">
                            <div class="p-2 bd-highlight  sep-icons-cofre1 name-muro">Desafios</div>
                        </a>
                        <div class="p-2 bd-highlight  sep-icons-cofre1 text-white circulo-video">1</div>
                        <!--  clase punteados or  "text-white circulo-video" -->
                        <div class="p-2 bd-highlight  sep-icons-cofre1 punteados">1</div>
                        <!--  clase punteados or  "text-white circulo-video" -->
                        <div class="p-2 bd-highlight  sep-icons-cofre1 text-white circulo-video">2</div>
                        <!--  clase punteados or  "text-white circulo-video" -->
                        <div class="p-2 bd-highlight  sep-icons-cofre1 punteados">2</div>
                        <!--  clase punteados or  "text-white circulo-video" -->
                        <div class="p-2 bd-highlight  sep-icons-cofre1 text-white circulo-video">3</div>
                        <!--  clase punteados or  "text-white circulo-video" -->
                        <div class="p-2 bd-highlight  sep-icons-cofre1 punteados">3</div>
                        <!--  clase punteados or  "text-white circulo-video" -->
                    </div>
                    <div class="d-flex flex-column bd-highlight mb-3 ">
                        <div class="p-2 bd-highlight  sep-icons-cofre1"><img class="rounded-circle "
                                                                             src="../../../img/icon/cup2.png" alt=""
                                                                             width="74px" height="74px"></div>
                        <div class="p-2 bd-highlight  sep-icons-cofre1"><img class="rounded-circle "
                                                                             src="../../../img/icon/cup.png" alt=""
                                                                             width="74px" height="74px"></div>
                        <div class="p-2 bd-highlight  sep-icons-cofre1 name-muro">Juegos</div>
                        <div class="p-2 bd-highlight  sep-icons-cofre1 text-white circulo-video">1</div>
                        <!--  clase punteados or  "text-white circulo-video" -->
                        <div class="p-2 bd-highlight  sep-icons-cofre1 punteados">1</div>
                        <!--  clase punteados or  "text-white circulo-video" -->
                        <div class="p-2 bd-highlight  sep-icons-cofre1 text-white circulo-video">2</div>
                        <!--  clase punteados or  "text-white circulo-video" -->
                        <div class="p-2 bd-highlight  sep-icons-cofre1 punteados">2</div>
                        <!--  clase punteados or  "text-white circulo-video" -->
                        <div class="p-2 bd-highlight  sep-icons-cofre1 text-white circulo-video">3</div>
                        <!--  clase punteados or  "text-white circulo-video" -->
                        <div class="p-2 bd-highlight  sep-icons-cofre1 punteados">3</div>
                        <!--  clase punteados or  "text-white circulo-video" -->

                    </div>
                    <div class="d-flex flex-column bd-highlight mb-3 ">
                        <a href="?pagina=blog&id_user=1">
                            <div class="p-2 bd-highlight  sep-icons-cofre1"><img class="rounded-circle "
                                                                                 src="../../../img/icon/blog.png" alt=""
                                                                                 width="74px" height="74px"></div>
                        </a><!--  if -->
                        <a href="?pagina=blog&id_user=1">
                            <div class="p-2 bd-highlight  sep-icons-cofre1"><img class="rounded-circle "
                                                                                 src="../../../img/icon/blog2.png"
                                                                                 alt="" width="74px" height="74px">
                            </div>
                        </a>
                        <a href="?pagina=blog&id_user=1">
                            <div class="p-2 bd-highlight sep-icons-cofre1 name-muro">Blogs</div>
                        </a>
                        <div class="p-2 bd-highlight  sep-icons-cofre1 text-white circulo-video">1</div>
                        <!--  clase punteados or  "text-white circulo-video" -->
                        <div class="p-2 bd-highlight  sep-icons-cofre1 punteados">1</div>
                        <!--  clase punteados or  "text-white circulo-video" -->
                        <div class="p-2 bd-highlight  sep-icons-cofre1 text-white circulo-video">2</div>
                        <!--  clase punteados or  "text-white circulo-video" -->
                        <div class="p-2 bd-highlight  sep-icons-cofre1 punteados">2</div>
                        <!--  clase punteados or  "text-white circulo-video" -->
                        <div class="p-2 bd-highlight  sep-icons-cofre1 text-white circulo-video">3</div>
                        <!--  clase punteados or  "text-white circulo-video" -->
                        <div class="p-2 bd-highlight  sep-icons-cofre1 punteados">3</div>
                        <!--  clase punteados or  "text-white circulo-video" -->

                    </div>

                </div>


            </div>

            <div class="container text-center border shadow cont-cofre2  ">

                <div class="d-flex flex-row bd-highlight  "
                     style="width: 8rem; border-radius: 2em;position: relative; left: 0; top: 0;">
                    <!--  <img class="encima-cofre1 rounded-circle" src="../../../img/icon/estrella_check.png">-->
                </div>


                <p class="mt-4 ml-4 Cofre_1" style="margin-righ:-40px;text-align: initial !important;">Cofre 2</p>

                <div class="d-flex justify-content-start cofre1-iconos">
                    <div class="d-flex flex-column bd-highlight mb-3 ">
                        <a href="?pagina=videos">
                            <div class="p-2 bd-highlight  sep-icons-cofre1 "><img class="rounded-circle "
                                                                                  src="../../../img/icon/cam2.png"
                                                                                  alt="" width="74px" height="74px">
                            </div>
                        </a>
                        <a href="?pagina=videos">
                            <div class="p-2 bd-highlight  sep-icons-cofre1 "><img class="rounded-circle "
                                                                                  src="../../../img/icon/cam.png"
                                                                                  alt="" width="74px" height="74px">
                            </div>
                        </a><!--  if -->


                        <a href="?pagina=videos">
                            <div class="p-2 bd-highlight  sep-icons-cofre1 name-muro">Videos</div>
                        </a>
                        <div class="p-2 bd-highlight  sep-icons-cofre1 text-white circulo-video">1</div>
                        <!--  clase punteados or  "text-white circulo-video" -->
                        <div class="p-2 bd-highlight  sep-icons-cofre1 punteados">1</div>
                        <!--  clase punteados or  "text-white circulo-video" -->
                        <div class="p-2 bd-highlight  sep-icons-cofre1 text-white circulo-video">2</div>
                        <!--  clase punteados or  "text-white circulo-video" -->
                        <div class="p-2 bd-highlight  sep-icons-cofre1 punteados">2</div>
                        <!--  clase punteados or  "text-white circulo-video" -->
                        <div class="p-2 bd-highlight  sep-icons-cofre1 text-white circulo-video">3</div>
                        <!--  clase punteados or  "text-white circulo-video" -->
                        <div class="p-2 bd-highlight  sep-icons-cofre1 punteados">3</div>
                        <!--  clase punteados or  "text-white circulo-video" -->


                    </div>
                    <div class="d-flex flex-column bd-highlight mb-3 ">
                        <a href="?pagina=desafio">
                            <div class="p-2 bd-highlight  sep-icons-cofre1"><img class="rounded-circle "
                                                                                 src="../../../img/icon/rompe2.png"
                                                                                 alt="" width="74px" height="74px">
                            </div>
                        </a>
                        <a href="?pagina=desafio">
                            <div class="p-2 bd-highlight  sep-icons-cofre1"><img class="rounded-circle "
                                                                                 src="../../../img/icon/rompe.png"
                                                                                 alt="" width="74px" height="74px">
                            </div>
                        </a><!--  if -->

                        <a href="?pagina=desafio">
                            <div class="p-2 bd-highlight  sep-icons-cofre1 name-muro">Desafios</div>
                        </a>
                        <div class="p-2 bd-highlight  sep-icons-cofre1 text-white circulo-video">1</div>
                        <!--  clase punteados or  "text-white circulo-video" -->
                        <div class="p-2 bd-highlight  sep-icons-cofre1 punteados">1</div>
                        <!--  clase punteados or  "text-white circulo-video" -->
                        <div class="p-2 bd-highlight  sep-icons-cofre1 text-white circulo-video">2</div>
                        <!--  clase punteados or  "text-white circulo-video" -->
                        <div class="p-2 bd-highlight  sep-icons-cofre1 punteados">2</div>
                        <!--  clase punteados or  "text-white circulo-video" -->
                        <div class="p-2 bd-highlight  sep-icons-cofre1 text-white circulo-video">3</div>
                        <!--  clase punteados or  "text-white circulo-video" -->
                        <div class="p-2 bd-highlight  sep-icons-cofre1 punteados">3</div>
                        <!--  clase punteados or  "text-white circulo-video" -->
                    </div>
                    <div class="d-flex flex-column bd-highlight mb-3 ">
                        <div class="p-2 bd-highlight  sep-icons-cofre1"><img class="rounded-circle "
                                                                             src="../../../img/icon/cup2.png" alt=""
                                                                             width="74px" height="74px"></div>
                        <div class="p-2 bd-highlight  sep-icons-cofre1"><img class="rounded-circle "
                                                                             src="../../../img/icon/cup.png" alt=""
                                                                             width="74px" height="74px"></div>
                        <div class="p-2 bd-highlight  sep-icons-cofre1 name-muro">Juegos</div>
                        <div class="p-2 bd-highlight  sep-icons-cofre1 text-white circulo-video">1</div>
                        <!--  clase punteados or  "text-white circulo-video" -->
                        <div class="p-2 bd-highlight  sep-icons-cofre1 punteados">1</div>
                        <!--  clase punteados or  "text-white circulo-video" -->
                        <div class="p-2 bd-highlight  sep-icons-cofre1 text-white circulo-video">2</div>
                        <!--  clase punteados or  "text-white circulo-video" -->
                        <div class="p-2 bd-highlight  sep-icons-cofre1 punteados">2</div>
                        <!--  clase punteados or  "text-white circulo-video" -->
                        <div class="p-2 bd-highlight  sep-icons-cofre1 text-white circulo-video">3</div>
                        <!--  clase punteados or  "text-white circulo-video" -->
                        <div class="p-2 bd-highlight  sep-icons-cofre1 punteados">3</div>
                        <!--  clase punteados or  "text-white circulo-video" -->

                    </div>
                    <div class="d-flex flex-column bd-highlight mb-3 ">
                        <a href="?pagina=blog&id_user=1">
                            <div class="p-2 bd-highlight  sep-icons-cofre1"><img class="rounded-circle "
                                                                                 src="../../../img/icon/blog.png" alt=""
                                                                                 width="74px" height="74px"></div>
                        </a><!--  if -->
                        <a href="?pagina=blog&id_user=1">
                            <div class="p-2 bd-highlight  sep-icons-cofre1"><img class="rounded-circle "
                                                                                 src="../../../img/icon/blog2.png"
                                                                                 alt="" width="74px" height="74px">
                            </div>
                        </a>
                        <a href="?pagina=blog&id_user=1">
                            <div class="p-2 bd-highlight sep-icons-cofre1 name-muro">Blogs</div>
                        </a>
                        <div class="p-2 bd-highlight  sep-icons-cofre1 text-white circulo-video">1</div>
                        <!--  clase punteados or  "text-white circulo-video" -->
                        <div class="p-2 bd-highlight  sep-icons-cofre1 punteados">1</div>
                        <!--  clase punteados or  "text-white circulo-video" -->
                        <div class="p-2 bd-highlight  sep-icons-cofre1 text-white circulo-video">2</div>
                        <!--  clase punteados or  "text-white circulo-video" -->
                        <div class="p-2 bd-highlight  sep-icons-cofre1 punteados">2</div>
                        <!--  clase punteados or  "text-white circulo-video" -->
                        <div class="p-2 bd-highlight  sep-icons-cofre1 text-white circulo-video">3</div>
                        <!--  clase punteados or  "text-white circulo-video" -->
                        <div class="p-2 bd-highlight  sep-icons-cofre1 punteados">3</div>
                        <!--  clase punteados or  "text-white circulo-video" -->

                    </div>

                </div>


            </div>
            <div class="container text-center border shadow cont-cofre3  ">

                <div class="d-flex flex-row bd-highlight  "
                     style="width: 8rem; border-radius: 2em;position: relative; left: 0; top: 0;">
                    <img class="encima-cofre1 rounded-circle" src="../../../img/icon/estrella_check.png">
                </div>

                <p class="mt-4 ml-4 Cofre_1" style="margin-righ:-40px;text-align: initial !important;">Cofre 3</p>

                <div class="d-flex justify-content-start cofre1-iconos">
                    <div class="d-flex flex-column bd-highlight mb-3 ">
                        <a href="?pagina=videos">
                            <div class="p-2 bd-highlight  sep-icons-cofre1 "><img class="rounded-circle "
                                                                                  src="../../../img/icon/cam2.png"
                                                                                  alt="" width="74px" height="74px">
                            </div>
                        </a>
                        <a href="?pagina=videos">
                            <div class="p-2 bd-highlight  sep-icons-cofre1 "><img class="rounded-circle "
                                                                                  src="../../../img/icon/cam.png"
                                                                                  alt="" width="74px" height="74px">
                            </div>
                        </a><!--  if -->


                        <a href="?pagina=videos">
                            <div class="p-2 bd-highlight  sep-icons-cofre1 name-muro">Videos</div>
                        </a>
                        <div class="p-2 bd-highlight  sep-icons-cofre1 text-white circulo-video">1</div>
                        <!--  clase punteados or  "text-white circulo-video" -->
                        <div class="p-2 bd-highlight  sep-icons-cofre1 punteados">1</div>
                        <!--  clase punteados or  "text-white circulo-video" -->
                        <div class="p-2 bd-highlight  sep-icons-cofre1 text-white circulo-video">2</div>
                        <!--  clase punteados or  "text-white circulo-video" -->
                        <div class="p-2 bd-highlight  sep-icons-cofre1 punteados">2</div>
                        <!--  clase punteados or  "text-white circulo-video" -->
                        <div class="p-2 bd-highlight  sep-icons-cofre1 text-white circulo-video">3</div>
                        <!--  clase punteados or  "text-white circulo-video" -->
                        <div class="p-2 bd-highlight  sep-icons-cofre1 punteados">3</div>
                        <!--  clase punteados or  "text-white circulo-video" -->


                    </div>
                    <div class="d-flex flex-column bd-highlight mb-3 ">
                        <a href="?pagina=desafio">
                            <div class="p-2 bd-highlight  sep-icons-cofre1"><img class="rounded-circle "
                                                                                 src="../../../img/icon/rompe2.png"
                                                                                 alt="" width="74px" height="74px">
                            </div>
                        </a>
                        <a href="?pagina=desafio">
                            <div class="p-2 bd-highlight  sep-icons-cofre1"><img class="rounded-circle "
                                                                                 src="../../../img/icon/rompe.png"
                                                                                 alt="" width="74px" height="74px">
                            </div>
                        </a><!--  if -->

                        <a href="?pagina=desafio">
                            <div class="p-2 bd-highlight  sep-icons-cofre1 name-muro">Desafios</div>
                        </a>
                        <div class="p-2 bd-highlight  sep-icons-cofre1 text-white circulo-video">1</div>
                        <!--  clase punteados or  "text-white circulo-video" -->
                        <div class="p-2 bd-highlight  sep-icons-cofre1 punteados">1</div>
                        <!--  clase punteados or  "text-white circulo-video" -->
                        <div class="p-2 bd-highlight  sep-icons-cofre1 text-white circulo-video">2</div>
                        <!--  clase punteados or  "text-white circulo-video" -->
                        <div class="p-2 bd-highlight  sep-icons-cofre1 punteados">2</div>
                        <!--  clase punteados or  "text-white circulo-video" -->
                        <div class="p-2 bd-highlight  sep-icons-cofre1 text-white circulo-video">3</div>
                        <!--  clase punteados or  "text-white circulo-video" -->
                        <div class="p-2 bd-highlight  sep-icons-cofre1 punteados">3</div>
                        <!--  clase punteados or  "text-white circulo-video" -->
                    </div>
                    <div class="d-flex flex-column bd-highlight mb-3 ">
                        <div class="p-2 bd-highlight  sep-icons-cofre1"><img class="rounded-circle "
                                                                             src="../../../img/icon/cup2.png" alt=""
                                                                             width="74px" height="74px"></div>
                        <div class="p-2 bd-highlight  sep-icons-cofre1"><img class="rounded-circle "
                                                                             src="../../../img/icon/cup.png" alt=""
                                                                             width="74px" height="74px"></div>
                        <div class="p-2 bd-highlight  sep-icons-cofre1 name-muro">Juegos</div>
                        <div class="p-2 bd-highlight  sep-icons-cofre1 text-white circulo-video">1</div>
                        <!--  clase punteados or  "text-white circulo-video" -->
                        <div class="p-2 bd-highlight  sep-icons-cofre1 punteados">1</div>
                        <!--  clase punteados or  "text-white circulo-video" -->
                        <div class="p-2 bd-highlight  sep-icons-cofre1 text-white circulo-video">2</div>
                        <!--  clase punteados or  "text-white circulo-video" -->
                        <div class="p-2 bd-highlight  sep-icons-cofre1 punteados">2</div>
                        <!--  clase punteados or  "text-white circulo-video" -->
                        <div class="p-2 bd-highlight  sep-icons-cofre1 text-white circulo-video">3</div>
                        <!--  clase punteados or  "text-white circulo-video" -->
                        <div class="p-2 bd-highlight  sep-icons-cofre1 punteados">3</div>
                        <!--  clase punteados or  "text-white circulo-video" -->

                    </div>
                    <div class="d-flex flex-column bd-highlight mb-3 ">
                        <a href="?pagina=blog&id_user=1">
                            <div class="p-2 bd-highlight  sep-icons-cofre1"><img class="rounded-circle "
                                                                                 src="../../../img/icon/blog.png" alt=""
                                                                                 width="74px" height="74px"></div>
                        </a><!--  if -->
                        <a href="?pagina=blog&id_user=1">
                            <div class="p-2 bd-highlight  sep-icons-cofre1"><img class="rounded-circle "
                                                                                 src="../../../img/icon/blog2.png"
                                                                                 alt="" width="74px" height="74px">
                            </div>
                        </a>
                        <a href="?pagina=blog&id_user=1">
                            <div class="p-2 bd-highlight sep-icons-cofre1 name-muro">Blogs</div>
                        </a>
                        <div class="p-2 bd-highlight  sep-icons-cofre1 text-white circulo-video">1</div>
                        <!--  clase punteados or  "text-white circulo-video" -->
                        <div class="p-2 bd-highlight  sep-icons-cofre1 punteados">1</div>
                        <!--  clase punteados or  "text-white circulo-video" -->
                        <div class="p-2 bd-highlight  sep-icons-cofre1 text-white circulo-video">2</div>
                        <!--  clase punteados or  "text-white circulo-video" -->
                        <div class="p-2 bd-highlight  sep-icons-cofre1 punteados">2</div>
                        <!--  clase punteados or  "text-white circulo-video" -->
                        <div class="p-2 bd-highlight  sep-icons-cofre1 text-white circulo-video">3</div>
                        <!--  clase punteados or  "text-white circulo-video" -->
                        <div class="p-2 bd-highlight  sep-icons-cofre1 punteados">3</div>
                        <!--  clase punteados or  "text-white circulo-video" -->

                    </div>


                </div>

                <div class="container border shadow content-central-avatar-cofres d-flex justify-content-between "
                     style="">
                    <p class="text-left" style="margin-top: 28px ;margin-rigth :50px;">fecha hoy</p>
                    <p class=" text-left" style="margin-top: 28px ;margin-rigth:28px">Historial </p>
                    <p></p>

                </div>


                <div class=" container d-flex justify-content-between content-historial">

                    <div class="container  text-center  shadow historial1 ">

                        <div class="d-flex justify-content-end " style="padding-top:30px">
                            <nav aria-label=" ... " class="constado d-flex">
                                <ul class="pagination ">
                                    <li class="page-item">
                                    <li class="page-item ">
                                        <a class="page-link card-us border-0 text-white">1 de 1</a>
                                    </li>
                                    <a class="page-link card-us border-0 text-white rounded-circle" href="# "
                                       tabindex="-1 ">
                                        <</a>
                                    </li>

                                    <li class="page-item ">
                                        <a class="page-link card-us border-0 text-white rounded-circle" href="# ">></a>
                                    </li>
                                </ul>
                            </nav>
                        </div>


                        foreach


                        <div class="d-flex justify-content-start " style="padding-top:30px">
                            <p class="circulo-blog"></p>
                            <p class="text-white"><b>Nickname</b> a públicado en <b>Desafios</b></p>
                        </div>

                        <div class="d-flex justify-content-start " style="padding-top:30px">

                            <img src="../../../img/img.png" class=" rounded-circle d-block"
                                 style="height: 159px; width: 159px;margin-left:35px">

                            <div>
                                <p class="historial-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                    do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum
                                    suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel
                                    facilisis. </p>
                                <a class="historial-link" href="link a publicacion insta">Publicacion</a>
                            </div>

                        </div>

                        <div class="d-flex justify-content-end">

                            <p class="fecha-public">fecha de hoy</p>
                        </div>
                        <div class="divisor"></div>

                        endforeach

                    </div>


                    <div class="container text-center border shadow historial2 ">

                        <div class="d-flex justify-content-end " style="padding-top:30px">
                            <nav aria-label=" ... " class="constado d-flex">
                                <ul class="pagination ">
                                    <li class="page-item">
                                    <li class="page-item ">
                                        <a class="page-link card-us border-0 rounded-circle text-white">1 de 1</a>
                                    </li>
                                    <a class="page-link card-us border-0 rounded-circle text-white" href="# "
                                       tabindex="-1 ">
                                        <</a>
                                    </li>

                                    <li class="page-item ">
                                        <a class="page-link card-us border-0 text-white rounded-circle" href="# ">></a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        foreach
                        <div class="d-flex justify-content-start " style="padding-top:30px">
                            <p class="circulo-blog"></p>
                            <p class="text-white"><b>Nickname</b> a públicado en <b>Blogs</b></p>
                        </div>

                        <div class="d-flex justify-content-start " style="padding-top:30px">

                            <img src="../../../img/img.png" class=" rounded-circle d-block"
                                 style="height: 159px; width: 159px;margin-left:35px">

                            <div>
                                <p class="historial-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                    do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum
                                    suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel
                                    facilisis. </p>
                                <a class="historial-link" href="link a post por id">Publicacion</a>
                            </div>

                        </div>

                        <div class="d-flex justify-content-end">

                            <p class="fecha-public"> fecha publicacion</p>
                        </div>
                        <div class="divisor2"></div>

                        endforeach


                    </div>

                </div>
            </div>
                </div>
        <div v-for="avance in this.ParseAvance" >
            {{avance}}
            <div v-if="avance.realizado" ></div>
            <div v-if="avance.n_cofre===1">
                asdasdfdf
            </div>
            <div v-else>
                aaaa
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "detalle",
        props:['user','avance'],
        data(){
            return {
                ParseUser:undefined,
                ParseAvance:undefined
            }
        },created() {
            this.ParseUser=JSON.parse(this.user);
            this.ParseAvance=JSON.parse(this.avance);
            console.log(this.ParseUser);
            console.log(this.ParseAvance);
        },methods:{

        }
    }
</script>

<style scoped>

</style>
