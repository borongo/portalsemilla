<template>
    <form method="post">
        <input id="1" name="idpost" type="hidden" value="">
        <div class="container container-fluid  d-flex flex-column comentario_blog  ">
            <div class="p-2 bd-highlight comentarioint1 ">

                <div class="input-group mb-3 mt-3">
                    <input type="text" class="form-control" name="comentario" required>

                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary" style="width: 100%" type="submit">Comentar
                        </button>
                    </div>
                </div>
            </div>
        </div>

    </form>

</template>

<script>

    export default {
        name: "comment",


    }
</script>

<style scoped>

</style>
