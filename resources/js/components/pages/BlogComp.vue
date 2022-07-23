<template>
<div class="container">
    <h1 class="text-center position-relative">Blog</h1>

    <div class="box-loader" v-if="!posts">
        <LoaderComp/>
    </div>

    <div v-else>
        <div class="cards">

            <PostItemComp
                v-for="post in posts"
                :key="post.id"
                :item="post"
            />

        </div>

        <div class="buttons-pagination">
            <button @click="getApi( pagination.current -1 )"
                :disabled = "pagination.current === 1"
            ><-</button>

            <button
                v-for="i in pagination.last"
                :key="i"
                @click="getApi(i)"
                :disabled="pagination.current === i"
            >{{i}}</button>

            <button @click="getApi( pagination.current +1 )"
                :disabled = "pagination.current === pagination.last"
            >-></button>
        </div>
    </div>
</div>
</template>

<script>
// import Axios from 'axios';
import PostItemComp from '../partials/PostItemComp.vue';
import LoaderComp from '../partials/LoaderComp.vue';
import {apiUrl} from '../../data/config';

export default {
    name: "BlogComp",
    components: {
        PostItemComp
    },

    data() {
        return {
            apiUrl,
            posts: null,
            pagination: {
                current: null,
                last: null
            }
        };
    },

    mounted() {
        this.getApi(1);
    },

    methods: {
        getApi(page) {
            this.posts = null;

            axios.get(this.apiUrl + "?page=" + page)
                .then(response => {
                this.posts = response.data.data;
                this.pagination = {
                    current: response.data.current_page,
                    last: response.data.last_page
                }
            });
        }
    },
    components: { PostItemComp, LoaderComp }
}
</script>

<style lang="scss" scoped>
    .box-loader{
        position: absolute;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
        padding: 10px;
    }

    .cards{
        display: flex;
        flex-wrap: wrap;
        margin: 25px auto;
    }

    .buttons-pagination{
        button{
            padding: 8px;
            border-radius: 10px;
            background-color: rgb(206, 232, 253);
        }
    }
</style>>
