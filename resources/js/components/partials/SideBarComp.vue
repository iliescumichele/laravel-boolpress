<template>
    <div class="sidebar">
        <div class="lista">
            <h3>Categorie</h3>
            <ul>
                <li
                    v-for="category in categories"
                    :key=" `cat${category.id}` "
                    @click="$emit('searchPostsByCategory', category.slug)"
                    >
                    {{category.name}}
                </li>
            </ul>
        </div>
        <div class="lista">
            <h3>Tag</h3>
            <ul>
                <li
                    v-for="tag in tags"
                    :key=" `cat${tag.id}` "
                    @click="$emit('searchPostsByTag', tag.slug)"
                    >
                    {{tag.name}}
                </li>
            </ul>
        </div>
        <div class="lista">
            <ul>
                <li class="link-all-posts" @click="$emit('searchAllPosts')">
                    Tutti i posts
                </li>
            </ul>
        </div>
    </div>
</template>

<script>
export default {
    name: 'SideBarComp',
    props: {
        categories: Array,
        tags: Array
    }
}
</script>

<style lang="scss" scoped>
    .sidebar{
        padding-left: 50px;

        .lista{
            margin-bottom: 20px;
            ul{
                list-style: none;
                li{
                    cursor: pointer;
                    &:hover{
                        text-decoration: underline;
                    }
                }

                li.link-all-posts{
                    font-weight: 800;
                    font-size: 1.1rem;
                    margin-top: 15px;
                    &:before{
                        content: "- "
                    }
                    &:after{
                        content: " -"
                    }
                }
            }

        }
    }
</style>
