import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)


let routes = [

    {
        path: '/ess/public/',
        name: 'home',
        component: require('./components/Example')

    },
    {
        path: '/ess/public/profile',
        name: 'profile',
        component: require('./views/user/index')

    },
    {
        path: '/ess/public/dashboard',
        name: 'dashboard',
        component: require('./views/dashboard/index')

    },
    {
        path: '/ess/public/login',
        name: 'login',
        component: require('./views/auth/login')

    }



];

export default new VueRouter({
    
    mode: 'history',
    root: '/ess/public/',
    routes

});