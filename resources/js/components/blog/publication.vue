<template>
    <div class="container justify-content-start flex-column d-flex flex-row border cont-blog1-dest ">

        <div class="d-flex flex-row bd-highlight  "
             style="width: 8rem; border-radius: 2em;position: relative; left: 0; top: 0;">
            <img class="encima-video1 rounded-circle" src="../../../img/icon/estrella_check.png">
        </div>
        <div class="mt-4 d-flex justify-content-between">
            <div class="megusta-blog ml-5 pl-4">
               {{postEdit.likes}} de Me gusta
            </div>
            <div class="d-flex justify-content-end mr-5 pr-5">
                <div name="pin-post" class="pin" v-on:click="togglePin(postEdit)" >
                    <img v-if="postEdit.pin_user" class="mr-4" src="../../../img/icon/pin_lleno.png" style="width: 30px;height: 70%;">
                    <img v-else class="mr-4" src="../../../img/icon/pin_vacio.png" style="width: 30px;height: 70%;">
                </div>


                <img class="mr-4" src="../../../img/icon/globo_vacio.png" alt="" style="width: 30px;height: 70%;">
                <div class="like" v-on:click="toggleLike(postEdit)">
                    <img v-if="postEdit.like_user" src="../../../img/icon/corazon_lleno.png">
                    <img v-else src="../../../img/icon/corazon_vacio.png">
                </div>

                <img v-on:click="toggleEditPost" class="mr-4" src="../../../img/icon/editar.png" alt="" style="width: 40px" name="btn-edit-post"
                     id="">
            </div>
        </div>
        <div class="mb-3 desaconte-blog">
            <p class="tt-video">{{postEdit.title}}</p><br>
            <p class="ttt-video-desa">
            <div id="1" name="post-content-edit" v-if="!this.editPost">
               {{postEdit.body}}

            </div>
            <div id="1" name="post-content-edit" v-else >
                <input type="text" class="form-control" v-model="postNewContent">
                <button v-show="editable"  v-on:click="updatePost" class="btn btn-success"  value="">Guardar</button>
            </div>

            </p>
        </div>
        <input id="1" name="mensaje" type="hidden">


        <comment v-bind:comments="postEdit.comments" v-bind:postid="postEdit.id"/>



    </div>
</template>

<script>
    import comment from "./comment"
    import axios from "axios";
    export default {
        name: "publication",
        props:['post'],
        components:{
            comment,
        },
        data(){
            return{
                postEdit:undefined,
                editPost:false,
                postNewContent:"",
                editable:true,
            }
        },
        created() {
         this.postEdit=this.post;
        },
        methods:{
            toggleLike(post){
                if(post.like_user===0){
                    axios.post('/like',post).then(res =>{

                        this.postEdit=res.data;

                    });
                }else{
                    console.log(post);
                    axios.patch('/like',post).then(res =>{
                        this.postEdit=res.data;

                    });
                }
            },
          async togglePin(post){
                if(post.pin_user===0){
                   await axios.post('/pin',post).then(res =>{
                        this.postEdit=res.data;
                        window.location.reload();
                    });
                }else{
                   await axios.patch('/pin',post).then(res =>{
                        this.postEdit=res.data;
                    });
                }
            },
            async updatePost(){
                this.editable=!this.editable;
                let update=this.postEdit;
                update.body=this.postNewContent;
                axios.put("/posts/"+this.post.id,update).then(res =>{
                    this.postEdit=res.data;
                    this.toggleEditPost();
                });
            },
            toggleEditPost(){
                this.editable=true;
                this.postNewContent=this.postEdit.body;
                this.editPost=!this.editPost;
            }
        }
    }
</script>

<style scoped>

</style>
