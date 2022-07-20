<template>
    <header class="">
        <div class="container">
            <nav>
                <ul>
                    <li>
                        <router-link :to="{ name: 'home'}">Home</router-link>
                    </li>
                    <li>
                        <router-link :to="{ name: 'blog'}">Blog</router-link>
                    </li>
                    <li>
                        <router-link :to="{ name: 'about'}">About</router-link>
                    </li>
                    <li>
                        <router-link :to="{ name: 'contatti'}">Contatti</router-link>
                    </li>
                    
                </ul>
            </nav>
        </div>
    </header>
</template>

<script>
export default {
    name: 'HeaderComp'
}
</script>

<style lang="scss" scoped>
    header{
        background-color: #f79845;
        padding: 5px;
        text-align: center;
        ul{
            list-style: none;
            li{
                display: inline-block;
                a{
                    color: white;
                    text-decoration: none;
                    margin: 0 12px;
                    font-size: 1.2rem;
                    &:hover{
                        text-decoration: underline;
                    }
                    &.active{
                        color: green;
                        font-weight: bold;
                    }
                }
            } 
        }
    }
</style>