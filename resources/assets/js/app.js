
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

//window.Vue = require('vue');
import Vue from 'vue';

import VueRouter from 'vue-router'

Vue.use(VueRouter)

import App from './App.vue';

import router from './routes.js';

import store from './store/';


const app = new Vue({
    el: '#root',
    store,
    components: {App},
    template: '<app></app>',
    router
});
