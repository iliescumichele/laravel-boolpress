<template>
    <header class="">
        <div class="container">
            <nav>
                <ul>
                    <li>
                        <a class="active" href="">Home</a>
                    </li>
                    <li>
                        <a href="">Blog</a>
                    </li>
                    <li>
                        <a href="">Chi siamo</a>
                    </li>
                    <li>
                        <a href="">Contatti</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
</template>

<script>
export default {
    name: 'Header'
}
</script>

<style lang="scss" scoped>
    header{
        background-color: #f79845;
        padding: 12px;
        text-align: center;
        ul{
            list-style: none;
            li{
                display: inline-block;
                a{
                    color: white;
                    text-decoration: none;
                    margin: 0 12px;
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