<template>
    <div class="movielist">
        <ul>
            <li v-for='(obj,index) in movies' :key="index" @click="fn(obj.id)">
                <div class="img-box">
                    <img :src="obj.img" alt="">
                </div>
                <div class="info-box">
                    <h2>{{obj.nm}}</h2>
                    <p>{{obj.ver}}</p>
                    <p>{{obj.star}}</p>
                    <p>{{obj.showInfo}}</p>
                </div>
            </li>        
        </ul>
        <div class="loading" v-show='isLoad'>
            <img src="@/assets/image/loading.gif" alt="">
        </div>
        <div class="dataEnd" v-show="isEnd">
            已经是全部资源了......
        </div>
      
    </div>
</template>

<script>
    import axios from 'axios';
   
    export default {
        data() {
            return {
                movies: [],
                isLoad:true,//控制图片加载
                isEnd:false,//控制数据加载
                flag:true//控制请求次数限制
            }
        },
        methods:{
            
                load(){
                    if(this.flag){
                            this.flag=false;
                            axios.get(API_INTERFACE+'http://m.maoyan.com/movie/list.json?type=hot&offset='+this.movies.length+'&limit=10').then((res)=>{
                            if(res.data.data.movies.length<10){
                                this.isEnd=true;
                            }
                           
                            this.movies = [...this.movies,...res.data.data.movies];
                        //    console.log(this.movies)
                            this.isLoad=false;
                            this.flag=true;
                            })
                    } 
               },
               fn(id){
                    this.$router.push('/MovieDetail/'+id)
               }
            
            
        },
        mounted:function(){
             this.$store.commit('change',{bgColor:'rgb(33, 150, 243)',title:'Movie'});
             this.load();
             window.onscroll=()=>{
                var clientHight = document.documentElement.clientHeight;
                var scrollTop = document.documentElement.scrollTop;
                var scrollHight = document.documentElement.scrollHeight;
                if(clientHight+scrollTop==scrollHight && !this.isEnd){
                    
                    this.load();
                    this.isLoad=true;
                }
                
           }
        },
       
    }
</script>

<style scoped>
    .movielist li{
        display: flex;
        padding: 0.2rem;
        border: 1px solid #ccc;
    }
    .img-box{
        flex-grow: 1;
        width: 0;
        margin-right: 0.2rem;
    }
    .info-box{
        flex-grow: 2;
        width: 0;
    }
    .info-box h2{
         font-size: 0.3rem;
         font-weight: 600;
         margin-bottom: 0.2rem
     }
    .info-box p{
        font-size: 0.25rem;
        margin-bottom: 0.2rem

    }
    .loading{
        text-align: center;

    }
    .dataEnd{
        text-align: center;
        font-size: 0.28rem;
        color:rgba(0,0,0,0.5);
    }
</style>