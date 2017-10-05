<template>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 ">
                <div class="panel panel-default">
                    <!--<div class="panel-heading">Administrador</div>-->

                             <nav class="navbar navbar-expand-lg navbar-light " style="background-color:#fff;">
                                <a class="navbar-brand" href="#">Administrador</a>
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                <div class="collapse navbar-collapse" id="navbarText">
                                    <ul class="navbar-nav mr-auto">
                                  
                                        <router-link to="/ess/public/" tag="li" class="nav-item" ><a class="nav-link" >Usuarios</a></router-link></li>
                                        <router-link to="/ess/public/bar"  tag="li" class="nav-item" ><a class="nav-link" >Noticias</a></router-link>
                                              <li class="nav-item dropdown">
                                                <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                 Usuarios
                                                </a>
                                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                                </div>
                                            </li>
                                    </ul>
                                    <span class="navbar-text">
                                    Navbar text with an inline element
                                    </span>
                                </div>
                             </nav>
                    
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import Example from '../../components/Example.vue'
    export default {
      name: 'CustomerIndex',
        data() {
            return {
                
            }
        },
        components: {
            Example
        }
    }
</script>
