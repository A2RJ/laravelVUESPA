window.Vue = require('vue');

import App from './layouts/App.vue';
import VueRouter from 'vue-router';
import VueAxios from 'vue-axios';
import axios from 'axios';
import {routes} from './routes';
import { Plugin } from 'vue-fragment';
import Vue from 'vue';
import Vuelidate from 'vuelidate';

Vue.use(Vuelidate);
Vue.use(VueRouter);
Vue.use(VueAxios, axios);
Vue.use(Plugin)

const router = new VueRouter({
    mode: 'history',
    routes: routes
});

const app = new Vue({
    el: '#app',
    router: router,
    render: h => h(App),
});