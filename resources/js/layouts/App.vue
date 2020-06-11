<template>
    <Fragment>
        <Nav />
        <router-view></router-view>
    </Fragment>
</template>

<script>
import Nav from "../components/nav.vue";
import { Fragment } from "vue-fragment";
    export default {
        name: 'app',
        components: {
            Nav,
            Fragment
        }
    }
</script>