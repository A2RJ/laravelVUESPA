window.Vue = require('vue')

import Vue from 'vue'
import App from './layouts/App.vue'
import VueRouter from 'vue-router'
import VueAxios from 'vue-axios'
import axios from 'axios'
import { Plugin, Fragment } from 'vue-fragment'
import Vue2Filters from 'vue2-filters'
import VueCurrencyFilter from 'vue-currency-filter'
import VueSweetalert2 from 'vue-sweetalert2';
// import VueHtml2pdf from 'vue-html2pdf'
import vueCurrencyDirective from 'vue-currency-directive';
import VueChart from 'vue-chart-js'
import dots from 'three-dots'
// import BootstrapIcons from 'bootstrap-icons'

const options = {
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
Vue.directive('currency', vueCurrencyDirective);
Vue.use(VueSweetalert2, options);
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

import Input from './views/Input.vue';

import Jurnals from './views/Jurnals.vue';
import LPK from './views/LPK.vue';
import ArusKas from './views/ArusKas.vue';
import LPDana from './views/PerubahanDana.vue';
import PAK from './views/PerubahanAsetKelolaan.vue';

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
        component: Jurnals
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
    // Report
    {
        name: 'Report Jurnal',
        path: '/Jurnal/:Report',
        component: Jurnals
    },
    {
        name: 'Report LPK',
        path: '/ReportLPK/:Report',
        component: LPK
    },
    {
        name: 'Report ArusKas',
        path: '/ReportArusKas/:Report',
        component: ArusKas
    },
    {
        name: 'Report PAK',
        path: '/ReportPAK/:Report',
        component: PAK
    },
    {
        name: 'Report LPDana',
        path: '/ReportLPDana/:Report',
        component: LPDana
    },
];

const router = new VueRouter({
    routes
})

const app = new Vue({
    router,
    render: h => h(App)
}).$mount('#app')