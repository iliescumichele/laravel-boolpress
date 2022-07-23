<template>
<div class="container">
    <h1>PIU INFO DELL'ITEM DA COMPPLETARE IN "PostDetailComp "</h1>
</div>
</template>

<script>
import {apiUrl} from '../../data/config';

export default {
    name: 'PostDetailComp',
    data(){
        return{
            apiUrl,
            post: null,
        }
    },

    mounted(){
        this.getApi()
    },

    methods: {
        getApi(){
            axios.get( this.apiUrl + '/' + this.$route.params.slug)
            .then( response => {
                console.log(response.data);
            })
        }
    }
}
</script>

<style>

</style>
