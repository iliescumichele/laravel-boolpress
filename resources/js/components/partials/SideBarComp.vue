<template>
    <div class="sidebar">
        <div class="lista">
            <h3>Categorie</h3>
            <ul>
                <li
                    v-for="category in categories"
                    :key=" `cat${category.id}` "
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
                    >
                    {{tag.name}}
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
            }
        }
    }
</style>
