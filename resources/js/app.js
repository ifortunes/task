require('./bootstrap');

import Alpine from 'alpinejs';

import Vue from 'vue';
import store from './store/store'
import VueRouter from 'vue-router'
import router from './plugins/router'

Vue.use(VueRouter)

Vue.component('app', require('./components/layouts/App.vue').default);

const app = new Vue({
    el: '#app',
    store,
    router
});

window.Alpine = Alpine;

Alpine.start();
