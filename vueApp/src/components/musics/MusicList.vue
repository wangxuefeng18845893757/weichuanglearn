<template>
    <div>
      
        <ul class="musiclist">
            <li v-for="(obj,index) in musicList" :key="index">
                <router-link :to="'/MusicDetail/'+obj.id">
                    <img :src="obj.bg" alt="">
                </router-link>
                
            </li>
        </ul>
      
    </div>
</template>

<script>
    import axios from 'axios';
    export default {
        data() {
            return {
                musicList: []
            }
        },
        mounted:function(){
            this.$store.commit('change',{bgColor:'rgb(0, 150, 136)',title:'Music'});
            axios.get('/static/data/musiclist.json').then(res=>{
                this.musicList=res.data.albums;
            })
        }
    }
</script>

<style scoped>
    .musiclist li{
        width: 50%;
        float: left;
    }
    .musiclist li img{
        width: 100%;
    }
</style>