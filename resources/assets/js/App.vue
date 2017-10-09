<template>
    <div id="root">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4">
            <div class="container">
            <a class="navbar-brand" href="#">ESS</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="nav navbar-nav mr-auto">
               <router-link :to="{name : 'home'}" tag="li" class="nav-item" ><a class="nav-link" >Home</a></router-link></li>
                <router-link :to="{name : 'profile'}"  tag="li" class="nav-item" ><a class="nav-link" >Perfil</a></router-link>
                <router-link :to="{name : 'dashboard'}"  tag="li" class="nav-item" ><a class="nav-link" >Dashobard</a></router-link>
            </ul>

            </div>
            </div>
        </nav>
        
          <router-view></router-view>
        
    </div>

</template>