window.Vue = require('vue');

import Vue from 'vue';
import App from './layouts/App.vue';
import VueRouter from 'vue-router';
import VueAxios from 'vue-axios';
import axios from 'axios';
import { Plugin, Fragment } from 'vue-fragment';
import Vue2Filters from 'vue2-filters';
import VueLoadImage from 'vue-load-image'

Vue.component('pagination', require('laravel-vue-pagination'));
Vue.component('fragment', require('vue-fragment'));

Vue.use(VueRouter);
Vue.use(VueAxios, axios);
Vue.use(Plugin)
Vue.use(Fragment)
Vue.use(Vue2Filters)

import AllJurnals from './views/AllJurnals.vue';
import Input from './views/Input.vue';
import LPK from './views/LPK.vue';
import Aktivitas from './views/Aktivitas.vue';
import ArusKas from './views/ArusKas.vue';
import LPDana from './views/PerubahanDana.vue';
import PAK from './views/PerubahanAsetKelolaan.vue';

const routes = [
    {
        name: 'Home',
        path: '/'
    },
    {
        name: 'Jurnal',
        path: '/jurnal',
        component: AllJurnals
    },
    {
        name: 'Input',
        path: '/input',
        component: Input
    },
    {
        name: 'LPK',
        path: '/LPK',
        component: LPK
    },
    {
        name: 'Aktivitas',
        path: '/Aktivitas',
        component: Aktivitas
    },
    {
        name: 'Arus Kas',
        path: '/arusKas',
        component: ArusKas
    },
    {
        name: 'LPD',
        path: '/LPDana',
        component: LPDana
    },
    {
        name: 'PAK',
        path: '/PAK',
        component: PAK
    }
];

const router = new VueRouter({
    routes
})

const app = new Vue({
    router,
    render: h => h(App)
}).$mount('#app')