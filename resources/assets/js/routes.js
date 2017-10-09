import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)


let routes = [
    { path: '/ess/public/dashboard/news', redirect: { name: 'dashboard-news' }},
    { path: '/ess/public/dashboard/users', redirect: { name: 'dashboard-users' }},

    {
        path: '/ess/public/',
        name: 'home',
        component: require('./components/Example')

    },
    {
        path: '/ess/public/profile',
        name: 'profile',
        component: require('./views/user/index'),
       

    },
    {
        path: '/ess/public/dashboard',
        name: 'dashboard',
        component: require('./views/dashboard/index'),
        props:{'url_dashboard': {'url': 'dashboard'}}

    },
    {
        path: '/ess/public/dashboard/news/create',
        name: 'dashboard-news',
        component: require('./views/dashboard/create_new'),
        props:{'url_dashboard': {'url': 'news'}}

    },
    {
        path: '/ess/public/dashboard/users/create',
        name: 'dashboard-users',
        component: require('./views/dashboard/create_user'),
        props:{'url_dashboard': {'url': 'users'}}

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