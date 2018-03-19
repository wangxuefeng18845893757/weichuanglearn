<template>
    <div>
       
            <div class="book-box1">
                <img :src="books.image" alt="">
            </div>
            <div class="book-box2">
                <h2>作者</h2>
                <p>{{books.author}}</p>
            </div>
            
            <div class="book-box3">
                <h2>摘要</h2>
                <p>{{books.summary}}</p>
            </div>
       
    </div>
</template>

<script>
    import axios from 'axios'
    export default {
        data() {
            return {
                books: {}
            }
        },
        mounted:function(){
            this.$store.commit('change',{bgColor:'#b89f7a',title:'Book'});
            axios.get(API_INTERFACE+'https://api.douban.com/v2/book/'+this.$route.params.id).then((res)=>{
               this.books=res.data;
               console.log(this.books)
            })
   
        }
    }
</script>

<style scoped>
    .book-box1{
        text-align: center;
    }
    .book-box2{
        padding: 0 0.2rem;
    }
    .book-box3{
        padding: 0 0.2rem;
    }
    h2{
        font-size: 0.6rem;
    }
    p{
        font-size: 0.28rem;
    }
</style>