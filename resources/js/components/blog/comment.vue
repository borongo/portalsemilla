<template>
    <div>
        <input id="1" name="idpost" type="hidden" value="">
        <div class="container container-fluid  d-flex flex-column comentario_blog">
            <div class="p-2 bd-highlight comentarioint1 " v-for="comment in commentsEditable">
                {{comment.comment}}<div class="font-weight-bold" v-if="comment.edited">(Editado)</div>
            </div>
            <div class="input-group mb-3 mt-3">
                <input type="text" class="form-control" name="comentario" required  v-model="newComment" @keypress.enter="comment">
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" v-on:click="comment" style="width: 100%" type="submit">Comentar</button>
                </div>
            </div>
        </div>
    </div>

</template>

<script>
    import axios from "axios";
    export default {
        name: "comment",
        props:['comments','postid'],
        data(){
            return{
                commentsEditable:undefined,
                newComment:""
            }
        },
        created() {
            this.commentsEditable=this.comments;
        },
        methods:{
           async comment(){
               await axios.post('/comments',{comment:this.newComment,id_post:this.postid})
                    .then(res=>{
                        this.commentsEditable.push(res.data);
                        this.newComment="";
                    })
            }
        }

    }
</script>

<style scoped>

</style>
