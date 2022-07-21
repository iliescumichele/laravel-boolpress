<template>
<div class="container">
    <h1 class="text-center">Blog</h1>
    <div class="container-fluid cards">

        <PostItemComp
            v-for="post in posts"
            :key="post.id"
            :item="post"
        />

    </div>
</div>
</template>

<script>
// import Axios from 'axios';
import PostItemComp from '../partials/PostItemComp.vue';

export default {
    name: "BlogComp",
    components: {
        PostItemComp
    },

    data() {
        return {
            apiUrl: "/api/posts",
            posts: null
        };
    },
    mounted() {
        this.getApi();
    },
    methods: {
        getApi() {
            axios.get(this.apiUrl)
                .then(response => {
                this.posts = response.data;
                console.log(this.posts);
            });
        }
    },
    components: { PostItemComp }
}
</script>

<style lang="scss" scoped>
    .cards{
        display: flex;
        flex-wrap: wrap;
        margin: 25px auto;
    }
</style>>
