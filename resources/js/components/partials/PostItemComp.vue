<template>
  <div class="card">
    <h3>{{item.title}}</h3>
    <p>{{item.content}}</p>
  </div>
</template>

<script>
export default {
    name: 'PostItemComp',
    props: {
        item: Object
    }
}
</script>

<style lang="scss" scoped>
    .card{
        margin: 10px auto;
        padding: 10px;
        border-radius: 15px;
        width: 48%;
        text-align: center;

        p{
            margin-top: 10px;
        }
    }
</style>
