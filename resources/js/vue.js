window.Vue = require('vue')

import Vue from 'vue'
import App from './layouts/App.vue'
import VueRouter from 'vue-router'
import VueAxios from 'vue-axios'
import axios from 'axios'
import { Plugin, Fragment } from 'vue-fragment'
import Vue2Filters from 'vue2-filters'
import VueCurrencyFilter from 'vue-currency-filter'
import VueCurrencyInput from 'vue-currency-input'
// Ini untuk input import vueCurrencyDirective from 'vue-currency-directive';
import VueSweetalert2 from 'vue-sweetalert2';
// import VueHtml2pdf from 'vue-html2pdf'
import VueChart from 'vue-chart-js'
import dots from 'three-dots'
// import BootstrapIcons from 'bootstrap-icons'
const pluginOptions = {
    /* see config reference */
    globalOptions: { currency: 'IDR' }
}
Vue.use(VueCurrencyInput, pluginOptions)
const sweetOption = {
    confirmButtonColor: '#41b882',
    cancelButtonColor: '#ff7674',
};
const options2 = {
    name: 'currency',
    symbol: 'Rp.',
    thousandsSeparator: '.',
    fractionCount: 0,
    fractionSeparator: ',',
    symbolPosition: 'front',
    symbolSpacing: true
}

Vue.component('pagination', require('laravel-vue-pagination'));
Vue.component('fragment', require('vue-fragment'));
// Vue.directive('currency', vueCurrencyDirective);
Vue.use(VueSweetalert2, sweetOption);
Vue.use(VueRouter);
Vue.use(VueAxios, axios);
Vue.use(Plugin)
Vue.use(Fragment)
Vue.use(Vue2Filters)
// Vue.use(VueHtml2pdf)
Vue.use(VueCurrencyFilter, options2)
Vue.use(dots)
Vue.use(VueChart)
// Vue.use(BootstrapIcons)

// View 
import Home from './views/Home';

import Input from './views/jurnal/Input.vue';
import Jurnal from './views/jurnal/Jurnals.vue';
import Zakat from './views/jurnal/Zakat.vue';

import LPK from './views/laporan/LPK.vue';
import ArusKas from './views/laporan/ArusKas.vue';
import LPDana from './views/laporan/PerubahanDana.vue';
import PAK from './views/laporan/PerubahanAsetKelolaan.vue';

import Login from './views/admin/Login.vue'
import Index from './views/admin/index.vue'
import Tambah from './views/admin/tambah.vue'
import Ubah from './views/admin/ubah.vue'

const routes = [
    {
        name: 'Home',
        path: '/',
        component: Home
    },
    {
        name: 'Input',
        path: '/input',
        component: Input
    },
    {
        name: 'Jurnal',
        path: '/Jurnal',
        component: Jurnal
    },
    {
        name: 'Zakat',
        path: '/Zakat',
        component: Zakat
    },
    {
        name: 'LPK',
        path: '/LPK',
        component: LPK
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
    },
    {
        name: 'Login',
        path: '/login',
        component: Login
    },
    {
        name: 'Index',
        path: '/Index',
        component: Index
    },
    {
        name: 'Tambah',
        path: '/Tambah',
        component: Tambah
    },
    {
        name: 'Ubah',
        path: '/Ubah',
        component: Ubah
    }
];

const router = new VueRouter({
    routes
})

const app = new Vue({
    router,
    render: h => h(App)
}).$mount('#app')