<template>
    <div>
        <swipe class="my-swipe">
            <swipe-item class="slide1">
              
            </swipe-item>
            <swipe-item class="slide2">
               
            </swipe-item>
            <swipe-item class="slide3">
              
            </swipe-item>
        </swipe>
        <div class='book-list'>
            <ul>
                <li v-for="(obj,index) in book" :key="index" @click="bookdetail(obj.id)">
                    <div class="book-img">
                        <img :src="obj.image" alt="">
                    </div>
                    <div class="book-info">
                        <h2>{{obj.subtitle}}</h2>
                        <p>{{obj.author}}</p>
                        <!-- <p>{{obj.publisher}}</p>
                        <p>{{obj.pubdate}}</p>
                        <p>{{obj.price}}</p> -->
                    </div>
                   
                </li>
            </ul>
        </div>
    </div>
</template>

<script>
    import axios from 'axios';
    import vueswipe from 'vue-swipe/dist/vue-swipe.css';
    import { Swipe, SwipeItem } from 'vue-swipe';
    export default {
        data() {
            return {
                book: []
            }
        },
        components:{
            Swipe,
            SwipeItem
        },
        methods:{
            bookdetail(id){
                this.$router.push('/BookDetail/'+id)
            }
        },
        mounted:function(){
            this.$store.commit('change',{bgColor:'#b89f7a',title:'Book'});
            axios.get(API_INTERFACE+'https://api.douban.com/v2/book/search?q=python&fields=all').then((res)=>{
               
                this.book = res.data.books;
               
            })
        }
    }
</script>

<style scoped>
.my-swipe {
    height:4rem;
}
.slide1{
    background: url('../../assets/image/book1.jpg') 0 0 no-repeat;
    background-size: cover;
}
.slide2{
    background: url('../../assets/image/book2.jpg') 0 0 no-repeat;
    background-size: cover;
}
.slide3{
    background: url('../../assets/image/book3.jpg') 0 0 no-repeat;
    background-size: cover;
}
.book-list li{
    display: flex;
    padding: 0.2rem;
}
.book-img{
    flex-grow: 1;
    width: 0;
    margin-right: 0.2rem;
}
.book-info{
    flex-grow: 2;
    width: 0;
}
.book-info h2{
    font-size: 0.4rem;
    font-weight: 600;
}
.book-info p{
    font-size: 0.28rem;
}
</style>