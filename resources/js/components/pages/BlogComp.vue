<template>
<!-- main div -->
<div class="container">

    <div class="box-loader" v-if="!posts">
        <LoaderComp/>
    </div>

    <!-- elenco posts -->
    <div class="post-container" v-else>
        <h1 class="text-center position-relative">Blog</h1>

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
            >&lt;&lt;</button>

            <button
                v-for="i in pagination.last"
                :key="i"
                @click="getApi(i)"
                :disabled="pagination.current === i"
            >{{i}}</button>

            <button @click="getApi( pagination.current +1 )"
                :disabled = "pagination.current === pagination.last"
            >&gt;&gt;</button>
        </div>
    </div>
    <!-- /elenco posts -->

    <SideBarComp
        :categories = "categories"
        :tags = "tags"
    />


</div>
<!-- /main div -->

</template>

<script>
// import Axios from 'axios';
import PostItemComp from '../partials/PostItemComp.vue';
import LoaderComp from '../partials/LoaderComp.vue';
import SideBarComp from '../partials/SideBarComp.vue'
import {apiUrl} from '../../data/config';

export default {
    name: "BlogComp",
    components: {
        PostItemComp,
        LoaderComp,
        SideBarComp
    },

    data() {
        return {
            apiUrl,
            posts: null,
            pagination: {
                current: null,
                last: null
            },
            categories: [],
            tags: []
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
                this.posts = response.data.posts.data;
                this.pagination = {
                    current: response.data.posts.current_page,
                    last: response.data.posts.last_page
                }
                this.categories = response.data.categories;
                this.tags = response.data.tags;
            });
        }
    }
}
</script>

<style lang="scss" scoped>

    .container{
        display: flex;

        .box-loader{
            position: absolute;
            left: 50%;
            top: 50%;
            margin-top: 200px;
            transform: translate(-50%, -50%);
        }
    }
    .post-container{
        flex-basis: 85%;

        h1{
            text-decoration: underline;
            text-underline-offset: 10px;

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
    }

</style>>
