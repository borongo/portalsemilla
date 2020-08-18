<template>
    <div class="bg2 tam">
    <div class="container contenedor">


        <div class="border border-0 d-flex justify-content-between sup">

            <div class="d-flex flex-row bd-highlight  " style="width: 8rem; border-radius: 2em;position: relative; left: 0; top: 0;">
                <a href="?pagina=avatar&id_user=1"><img src="imagen usuario" class=" rounded-circle d-block ml-2" style="height: 221px; width: 221px;"></a>
                <a href="?pagina=avatar&id_user=1"> <img class="encima rounded-circle" src="../../../img/icon/blog.png"> </a>


                <div class=" align-items-center sep-name ">


                    <div class="justify-content-between" style="display: flex">


                        <div class="name mb-1"> nombre </div>

                        <a href="#" class="name"><img src="../../../img/icon/cam.png" alt="" width="42px" height="42px" ></a>
                    </div>

                    <div class="progress sep">

                        <div class="progress-bar bg-danger " role="progressbar " style=25% aria-valuenow="100" aria-valuemin="0 " aria-valuemax="50"></div>
                </div>
                <p class="text-center text-dark porcent">25% </p>

            </div>
        </div>

        <div class="container-fluid med-prin d-flex flex-column  justify-content-center">

            <div class="d-flex justify-content-center">
                <img class="" src="../../../img/icon/cofre1.png"  width="44px" height="55px">
                <img class="" src="../../../img/icon/cofre2.png"  width="44px" height="55px">
                <img class="" src="../../../img/icon/cofre3.png"   width="44px" height="55px">
            </div>

            <div class="d-flex justify-content-center ">
                <img class="" src="../../../img/icon/medallas.png"  width="44px" height="55px">
                <img class="" src="../../../img/icon/medallas.png" width="44px" height="55px">
                <img class="" src="../../../img/icon/medallas.png"  width="44px" height="55px">
                <img class="" src="../../../img/icon/medallas.png"  width="44px" height="55px">
            </div>
        </div>


    </div>

    <br><br><br>
    <div class="border border-0 d-flex justify-content-around align-items-center ml-3 " style="border-radius: 2em ">
        <h5 class="ml-4 pl-3 cofrename-inicio Cofre_1"> Cofre 1 </h5>
        <h5 class="pl-2 ml-3 cofrename-inicio Cofre_1"> Cofre 2 </h5>
        <h5 class="pl-3 mr-3 cofrename-inicio Cofre_1"> Cofre 3 </h5>
    </div>
    <div class=" border border-0 d-flex justify-content-around align-items-center sup sep-cont" style="border-radius: 2em ">


        <div class="card d-flex flex-row bd-highlight contenedor-icons">

            <a href="?pagina=videos">  <img class="icons-pos rounded-circle " src="../../../img/icon/cam2.png"  alt="" width="43px" height="43px"></a>
            <a href="?pagina=desafio">   <img class="icons-pos rounded-circle" src="../../../img/icon/rompe2.png"  alt="" width="43px" height="43px"> </a>
            <img class="icons-pos  rounded-circle" src="../../../img/icon/cup2.png"  alt="" width="43px" height="43px">
            <a href="?pagina=blog&id_user=1">   <img class="icons-pos  rounded-circle" src="../../../img/icon/blog2.png"  alt="" width="43px" height="43px"></a>

        </div>

        <div class="card d-flex flex-row bd-highlight contenedor-icons">

            <a href="?pagina=videos">  <img class="icons-pos" src="../../../img/icon/cam.png" alt="" width="43px" height="43px"></a>
            <a href="?pagina=desafio">    <img class="icons-pos " src="../../../img/icon/rompe.png" alt="" width="43px" height="43px"></a>
            <img class="icons-pos" src="../../../img/icon/cup.png" alt="" width="43px" height="43px">
            <a href="?pagina=blog&id_user=1">     <img class="icons-pos" src="../../../img/icon/blog.png" alt="" width="43px" height="43px"></a>

        </div>

        <div class="card d-flex flex-row bd-highlight contenedor-icons">

            <a href="?pagina=videos">    <img class="icons-pos" src="../../../img/icon/cam.png" alt="" width="43px" height="43px"></a>
            <a href="?pagina=desafio">   <img class="icons-pos" src="../../../img/icon/rompe.png" alt="" width="43px" height="43px"></a>
            <img class="icons-pos" src="../../../img/icon/cup.png" alt="" width="43px" height="43px">
            <a href="?pagina=blog&id_user=1">     <img class="icons-pos" src="../../../img/icon/blog.png" alt="" width="43px" height="43px"></a>

        </div>

    </div>



    <!--menu busqueda
        -->
    <div class="container py-3 px-3 pb-3 border shadow content-central ">




        <div class="container-fluid d-flex justify-content-between content-card">
            <div>
                <h5 class="mt-2 usuario-titulo ">
                    <b>USUARIOS</b></h5>
            </div>

            <div>
                <div class="form-group d-flex justify-content-between ">
                    <input type="text" id="formulario" class="form-control border-0 " placeholder="buscar " style="border-radius: 1em 0em 0em 1em; ">
                    <select class="form-control border-0 " style="border-radius: 0em 0em 0em 0em; " name=" " id=" ">
                        <option class="Logro">Desafio 1</option>
                        <option class="Logro">Desafio 2</option>
                        <option class="Logro">Desafio 3</option>
                    </select>
                    <button type="submit " id="boton" class="btn btn-light border-0 " style="border-radius: 0em 1em 1em 0em; "><img src="../../../img/icon/lupa.png" alt=" " height="23px "></button>
                </div>
            </div>

            <div>
                <nav aria-label=" ... ">
                    <ul class="pagination ">
                        <li class="page-item ">
                            <a class="page-link card-us border-0 text-dark rounded-circle" href="" tabindex="-1 ">
                                <</a>
                        </li>

                        <li class="page-item ">
                            <a class="page-link card-us border-0 text-dark rounded-circle">paigna</a>
                        </li>

                        <li class="page-item">
                            <a class="page-link card-us border-0 text-dark rounded-circle" href="">></a>
                        </li>
                    </ul>
                </nav>

            </div>
        </div>


        <div class="mejores d-flex shadow"></div>

    <div class="row row-cols-6 content-card upe" >




        <div class="col card-s  card-columns ">

            <!--card base-->


            <div class="card justify-content-center border-0 card-us " style="width: 6rem; border-radius: 2em ">
                <h6 class="text-center Nick_Name">nombre usuario</h6>
                <a href="?pagina=avatar&id_user="> <img src="img user" class="card-img-top rounded-circle mx-auto d-block Nick_Name_img"></a>
                <div class="d-flex justify-content-center">

                    <img class="" src="../../../img/icon/medallas_vacia.png" alt="" width="44px" height="55px">
                    <img class="" src="../../../img/icon/medallas_vacia.png" alt="" width="44px" height="55px">
                    <img class="" src="../../../img/icon/medallas_vacia.png" alt="" width="44px" height="55px">
                </div>

                <div name="progessssbar">

                    <div class="progress ml-2 mr-2  Nick_Name_progress  ">
                        <div class="progress-bar bg-danger " role="progressbar " style="25%"  aria-valuenow="100 " aria-valuemin="0 " aria-valuemax="100 "></div>
                </div>
                <p class="card-text text-center Nick_Name_porcent">25%</p>
            </div>
        </div>

    </diV>



    <!--   fin 1-->
    </div>




    </diV>



    </div>

    </div>

</template>

<script>
export default {
    mounted() {
        console.log('Component mounted.')
    }
}
</script>
