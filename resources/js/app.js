require('./bootstrap');
window.Vue = require('vue');

import App from './layouts/App.vue';
import VueRouter from 'vue-router';
import VueAxios from 'vue-axios';
import axios from 'axios';
import {routes} from './routes';

Vue.use(VueRouter);
Vue.use(VueAxios, axios);

const router = new VueRouter({
    mode: 'history',
    routes: routes
});

const app = new Vue({
    el: '#app',
    router: router,
    render: h => h(App),
});

$("#selectAktivitas").click(function(){
    const aktivitas = $("#selectAktivitas").val();
    $("#selectAkun").empty();
    $("#selectAkun").append('<option value="">Pilih Akun</option>');
    $.get( "/api/jurnals/akun/"+aktivitas, function( data ) {
        var i;
        for (i = 0; i < data.length; i++) {
            $('#selectAkun').append($("<option value="+ data[i]['id_akun'] +"></option>").text(data[i]['no_akun'] + " " + data[i]['akun']));
        }
    });
});

$("#selectAktivitas").click(function(){
    const aktivitas = $("#selectAktivitas").val();
    $("#selectWaktu").empty();
    $("#selectWaktu").append('<option value="">Pilih Waktu</option>');
    $.get( "/api/jurnals/waktu/"+aktivitas, function( data ) {
        var i;
        for (i = 0; i < data.length; i++) {
            $('#selectWaktu').append($("<option value="+ data[i]['id'] +"></option>").text(data[i]['jangka_waktu']));
        }
    });
});