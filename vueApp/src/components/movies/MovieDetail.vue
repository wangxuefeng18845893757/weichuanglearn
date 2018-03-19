<template>
    <div>
        <div class="detail-box1">
            <div class="detail-img">
                <img :src="detail.img" alt="">
            </div>
            <div class="detail-info">
                <h2>{{detail.nm}}</h2>
                <p>{{detail.sc}}分</p>
                <p>{{detail.cat}}</p>
                <p>{{detail.src}}/{{detail.pn}}</p>
                <p>{{detail.rt}}</p>
            </div>
        </div>
        <div class="detail-box2">
            <h1>主演</h1>
            <p>{{detail.star}}</p>
        </div>
         <div class="detail-box2">
            <h1>简介</h1>
            <div v-html="detail.dra"></div>
        </div>
    </div>
</template>

<script>
    import axios from 'axios'
    export default {
        data() {
            return {
                detail: {}
            }
        },
        mounted:function(){
            this.$store.commit('change',{bgColor:'rgb(33, 150, 243)',title:'Movie'});
            axios.get(API_INTERFACE+'http://m.maoyan.com/movie/'+this.$route.params.id+'.json').then((res)=>{
                this.detail = res.data.data.MovieDetailModel
                console.log(this.detail)
            })
        }
    }
</script>

<style scoped>
    .detail-box1{
        display: flex;
        margin: 0 0.2rem;
        border-bottom: 1px solid #ccc;
    }
    .detail-img{
        flex-grow: 1;
        width: 0;
        margin-right: 0.2rem;
    }
    .detail-info{
        flex-grow: 2;
        width: 0;
    }
    .detail-info h2{
        text-align: center;
        font-size: 0.4rem;
        font-weight: 600;
    }
    .detail-info p{
        font-size: 0.28rem;
    }
    .detail-box2{
        margin: 0 0.2rem;
        border-bottom: 1px solid #ccc;
    }
    .detail-box2 h1{
        text-align: center;
        font-size: 0.4rem;
        font-weight: 600;
    }
    .detail-box2 p{
        font-size: 0.28rem;
    }
</style>