<template>

    <div>
        <HeaderComp />

        <router-view></router-view>

        <FooterComp />
    </div>

</template>

<script>
import HeaderComp from './components/partials/HeaderComp';
import FooterComp from './components/partials/FooterComp';
export default {
    name: 'App',
    components: {
        HeaderComp,
        FooterComp 
    },

    data() {
        
            
    },

    methods: {
        
    },

    mounted() {

    }
}
</script>

<style>

</style>