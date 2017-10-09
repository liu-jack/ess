<template>


                             <nav class="navbar navbar-expand-lg navbar-light " style="background-color:#fff;">
                                
                                <router-link to="/ess/public/dashboard"  tag="a" class="navbar-brand" >Administrador</router-link>
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                <div class="collapse navbar-collapse" id="navbarText">
                                    <ul class="navbar-nav mr-auto">
                                         <router-link to="/ess/public/dashboard" tag="li" class="nav-item" ><a class="nav-link" v-bind:class="{'active': dashboard_active}" >Dashboard</a></router-link></li>
                                        
                                        
                                         <li class="nav-item dropdown" v-bind:class="{'active': users_active}">
                                         
                                              <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Usuario
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                            
                                            <router-link to="/ess/public/dashboard/users/create"  tag="a" class="dropdown-item" >Crear Usuario</router-link>
                                            </div>
                                        </li>


                                        <li class="nav-item dropdown" v-bind:class="{'active': news_active}">
                                         
                                              <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Noticias
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                            
                                            <router-link to="/ess/public/dashboard/news/create"  tag="a" class="dropdown-item" >Crear Noticia</router-link>
                                            </div>
                                        </li>
                                    
                                  
                                    </ul>
                                    <span class="navbar-text">
                                    Navbar text with an inline element
                                    </span>
                                </div>
                             </nav>
                    
</template>

<script>
    export default {
      data(){
       return {
          users_active: false,
          news_active: false,
          dashboard_active: false,
       }
       },
         props:{
           url_window:{},
      },
       watch:{
             url_window: function(view)
             {
              
               switch (view.url) {
                   case 'users':
                    this.users_active = true; 
                       break;
                   case 'news':
                    this.news_active = true;
                       break;    
                    case 'dashboard':
                     this.dashboard_active = true;
                       break;             
                   default:
                    this.users_active = true; 
                       break;
               }  
             }          
       },
       methods:{},
        mounted() {
            
            switch (this.url_window.url) {
                   case 'users':
                    this.users_active = true; 
                       break;
                   case 'news':
                    this.news_active = true;
                       break; 
                   case 'dashboard':
                    this.dashboard_active = true;
                       break;              
                   default:
                    this.users_active = true; 
                       break;
        }
    }
}
</script>
