<template>
    <div class="container justify-content-start flex-column d-flex flex-row border cont-blog1-dest ">

        <div class="d-flex flex-row bd-highlight  "
             style="width: 8rem; border-radius: 2em;position: relative; left: 0; top: 0;">
            <img class="encima-video1 rounded-circle" src="../../../img/icon/estrella_check.png">
        </div>
        <div class="mt-4 d-flex justify-content-between">
            <div class="megusta-blog ml-5 pl-4">
                1 Chilion de Me gusta
            </div>
            <div class="d-flex justify-content-end mr-5 pr-5">
                <div name="pin-post" class="pin"><img class="mr-4" src="../../../img/icon/pin_lleno.png" alt=""
                                                      style="width: 30px;height: 70%;"></div>
                <div name="pin-post" class="pin"><img class="mr-4" src="../../../img/icon/pin_vacio.png" alt=""
                                                      style="width: 30px;height: 70%;"></div>

                <img class="mr-4" src="../../../img/icon/globo_vacio.png" alt="" style="width: 30px;height: 70%;">
                <div class="like"><img src="../../../img/icon/corazon_lleno.png"></div>
                <div class="like"><img src="../../../img/icon/corazon_vacio.png"></div>
                <img class="mr-4" src="../../../img/icon/editar.png" alt="" style="width: 40px" name="btn-edit-post"
                     id="">
            </div>
        </div>
        <div class="mb-3 desaconte-blog">
            <p class="tt-video">Microsoft Edge</p><br>
            <p class="ttt-video-desa">
            <div id="1" name="post-content-edit">
                Contenido Post
            </div>
            </p>

        </div>
        <input id="1" name="mensaje" type="hidden">
        <comment v-if="comments.show"></comment>

    </div>
</template>

<script>
    import comment from "./comment"
    export default {
        name: "publication",
        components:{
            comment,
        },
        data(){
            return{
                comments:{
                    show:true
                }
            }
        }
    }
</script>

<style scoped>

</style>
