<template>
    <div>
        {{avatar}}
    </div>
</template>

<script>
    import axios from "axios";
    export default {
        name: "avatar",
        data(){
            return {
                id:102,
                avatar:{}
            }
        },
        methods:{
            getAvatar(){
                axios.get('muro/'+this.id).then(resp=>{
                  this.avatar=resp.data;
                })
            }
        }
    }
</script>

<style scoped>

</style>
