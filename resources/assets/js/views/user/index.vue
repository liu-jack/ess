<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Perfil</div>

                    <div class="panel-body">
                        Bienvenido
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props:{
          url_dashboard:{},
      },
      watch: {
       // url_dashboard question changes, this function will run
       info_new: function (new_data) {
        // this.answer = 'Waiting for you to stop typing...'
         //this.getAnswer()
         console.log(new_data);
       }
     },
    }
</script>
