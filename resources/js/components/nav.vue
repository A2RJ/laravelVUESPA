<template>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <router-link to="/" class="nav-link" v-on:click="show = !show">Home <span class="sr-only">(current)</span></router-link>
                </li>
                <li class="nav-item">
                    <router-link to="/Jurnal" class="nav-item nav-link">Jurnal</router-link>
                </li>
                <li class="nav-item">
                    <router-link to="/LPK" class="nav-link">LPK</router-link>
                </li>
                <li class="nav-item">
                    <router-link to="/Aktivitas" class="nav-link">Aktivitas</router-link>
                </li>
                <li class="nav-item">
                    <router-link to="/ArusKas" class="nav-link">Arus Kas</router-link>
                </li>
            </ul>
        </div>
    </div>
</nav> 
</template>

<script>
export default {
    data: function() {
        return {
            show: true
        }
    }
}
</script>
.fade-enter-active, .fade-leave-active {
  transition: opacity .5s;
}
.fade-enter, .fade-leave-to /* .fade-leave-active below version 2.1.8 */ {
  opacity: 0;
}
<style>

</style>