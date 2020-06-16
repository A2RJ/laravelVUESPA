<template>
    <b-navbar toggleable="lg" type="dark" variant="info">
        <div class="container">
            <b-navbar-brand href="#">NavBar</b-navbar-brand>

            <b-navbar-toggle target="nav-collapse"></b-navbar-toggle>

            <b-collapse id="nav-collapse" is-nav>
            <b-navbar-nav class="ml-auto">
                <b-nav-item><router-link to="/" class="nav-item nav-link">Home</router-link></b-nav-item>
                <b-nav-item><router-link to="/Jurnal" class="nav-item nav-link">Jurnal</router-link></b-nav-item>
                <b-nav-item><router-link to="/Aktivitas" class="nav-link">Aktivitas</router-link></b-nav-item>
                <b-nav-item><router-link to="/ArusKas" class="nav-link">Arus Kas</router-link></b-nav-item>
                <b-nav-item><router-link to="/LPK" class="nav-link">LPK</router-link></b-nav-item>
            </b-navbar-nav>
            </b-collapse>
        </div>
    </b-navbar>
</template>

<script>
export default {
    
}
</script>

<style>

</style>