<template>
  <div class="card">
    <h3>{{ item.title }}</h3>
    <p>{{ shortContent }}</p>
    <i class="date">{{ formatDate }}</i>

    <!-- <button> -->
        <router-link :to="{ name: 'detail', params: {slug: item.slug} }"
            class="link-item"
            >Vedi di pi&uacute;
        </router-link>
    <!-- </button> -->
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

        .link-item{
            position: absolute;
            bottom: 5px;
            right: 10px;
            //border: 1px solid black;
            border-radius: 15px;
            padding: 8px;
            background-color: rgb(229, 229, 229);
            text-decoration: none;
            color: rgb(0, 128, 255);
            box-shadow: 1px 1px 2px rgb(108, 108, 108);

            &:hover{
                transform: scale(1.02);
                box-shadow: 2px 2px 10px rgb(108, 108, 108);
            }
        }
    }
</style>
