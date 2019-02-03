
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

import VueRouter from 'vue-router';
Vue.use(VueRouter);

import VueAxios from 'vue-axios';
import axios from 'axios';

import App from './App.vue';
Vue.use(VueAxios, axios);

import CountComponent from './components/CountComponent.vue';

// set vue routes
const routes = [
    {
        name: 'male',
        path: '/',
        component: CountComponent
    }
];

const router = new VueRouter({ mode: 'history', routes: routes });
const app = new Vue(Vue.util.extend({ router }, App)).$mount('#app');