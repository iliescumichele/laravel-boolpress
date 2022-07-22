<template>
  <div class="card">
    <h3>{{ item.title }}</h3>
    <p>{{ shortContent }}</p>
    <i class="date">{{ formatDate }}</i>
  </div>
</template>

<script>
export default {
    name: 'PostItemComp',
    props: {
        item: Object
    },

    computed: {
        shortContent() {
            return this.item.content.substr(0, 50) + " ...";
        },

        formatDate(){
            const date = new Date( this.item.updated_at );;
            let day = date.getDate();
            let month = date.getMonth() + 1;
            let year = date.getFullYear();

            if( day<10 ) day = '0' + day;
            if( month<10 ) month = '0' + month;

            return `${day}/${month}/${year}`;
        }
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
        min-height: 220px;
        position: relative;

        p{
            margin-top: 10px;
        }

        .date{
            position: absolute;
            bottom: 5px;
            left: 0;
            right: 0;
            margin: auto;
        }
    }
</style>
