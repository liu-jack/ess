<template>
    <div class="container-fluid">
            <Navbar :url_window="url_dashboard"></Navbar>
            <h1>Crear Noticia</h1>
         
            
    </div>
</template>

<script>
import Navbar from '../../components/navbar/Navbar.vue'
    export default {
      name: 'DashoardIndex',
        data() {
            return {
              
            }
        },
        props:{

            url_dashboard:{} ,

        },
        computed:{
            

        },
        watch:{

           url_dashboard: function(url)
           {
               console.log(url);

           } 
        },
        components: {
            Navbar
        },
          mounted() {
            console.log(this.url_dashboard);
        }
       
    }
</script>
