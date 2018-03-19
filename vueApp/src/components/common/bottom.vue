<template>
    <div class="com-bottom" :style="{background:$store.state.bgColor}">
        <ul>
            <li><router-link to="/">电影</router-link></l>
            <li><router-link to="/MusicList">音乐</router-link></li>
            <li><router-link to="/BookList">书籍</router-link></li>
            <li><router-link to="/PhotoList">图片</router-link></li>
        </ul>
    </div>
</template>

<script>
    export default {
     
    }
</script>

<style scoped>
     .com-bottom{
        height: 1rem;
        width: 100%;
        position: fixed;
        bottom: 0;
        left: 0; 
    }
    .com-bottom ul{
        display: flex;
    }
     .com-bottom li{
      
        text-align: center;
        flex-grow: 1;
        line-height: 1rem;
    }
     .com-bottom li a{
         color: #ccc;
         outline: none;
         font-size: 0.28rem;
     }
     .com-bottom li a.router-link-exact-active{
         color: #ffffff;
     }



</style>