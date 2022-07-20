<template>
    <div>

        <HeaderComp />

        <div class="container">
            <h1>HOME VUE</h1>

            <ul>
                <li
                    v-for="post in posts"
                    :key="post.id"
                >

                    <h3>{{ post.title }}</h3>
                    <p>{{ post.content }}</p>

                </li>
            </ul>
        </div>

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
        return{
            apiUrl: '/api/posts',
            posts: null
        }  
    },

    methods: {
        getApi(){
            axios.get(this.apiUrl)
            .then(response => {

                this.posts = response.data;
                console.log(this.posts);
            })
        }
    },

    mounted() {
        this.getApi();
    }
}
</script>

<style>

</style>