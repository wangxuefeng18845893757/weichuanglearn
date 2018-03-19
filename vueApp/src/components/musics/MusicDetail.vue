<template>
    <div>
        <aplayer autoplay :music="musicData" v-if='flag' theme='#b7daff'>
        </aplayer>
    </div>
</template>

<script>
    import Aplayer from 'vue-aplayer';
    import axios from 'axios';
    export default {
        data() {
            return {
                musicData: [],
                flag:false,
             
            }
        },
        components:{
            Aplayer
        },
        mounted(){
            this.$store.commit('change',{bgColor:'rgb(0, 150, 136)',title:'Music'});
           
            axios.get('/static/data/musicdata.json').then(res=>{
                var arr=res.data.musicData;

                for(var i=0;i<arr.length;i++){
                    var {title,author,src:url,musicImgSrc:pic,lrc}=arr[i];
                    var obj={title,author,url,pic,lrc};
                    this.musicData.push(obj);
                }
                this.flag=true;
            })
        }
    }
</script>

<style scoped>

</style>