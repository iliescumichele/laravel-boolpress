<template>
    <div class="container ">
        <div class="post-detail">
            <h1>{{ item.title }}</h1>
            <p>Categoria: <span>{{ item.category.name }}</span></p>

            <div class="content">
                <div class="tags">
                    <span
                        v-for="tag in item.tags"
                        :key="tag.ig"
                        >
                        {{ tag.name }}
                    </span>
                </div>

                <p>{{ item.content }}</p>
            </div>
        </div>
    </div>
</template>

<script>
import {apiUrl} from '../../data/config';

export default {
    name: 'PostDetailComp',
    data(){
        return{
            apiUrl,
            item: {
                title: '',
                content: '',
                category: '',
                tags: []
            }
        }
    },

    mounted(){
        this.getApi()
    },

    methods: {
        getApi(){
            axios.get( this.apiUrl + '/' + this.$route.params.slug)
            .then( response => {
                this.item = response.data
            })
        }
    }
}
</script>

<style lang="scss" scoped>
    .post-detail{
        width: 85%;
        margin: 40px auto;
        background-color: rgb(255, 255, 255);

        h1{
            text-align: center;
            padding: 20px 0;
        }

        p{
            margin-left: 10px;
            padding: 5px;
            span{
                text-decoration: underline;
            }
            //border: 1px solid black;
            //border-radius: 10px;
        }

        .content{
            margin: 10px;

            .tags span{
                padding: 5px;
                border: 1px solid black;
                border-radius: 10px;
                margin-right: 10px;
            }

            p{
                margin: 25px 0;
                padding-bottom: 10px;
                text-align: justify;
            }
        }
    }
</style>
