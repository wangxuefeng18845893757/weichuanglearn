<template>
    <div class="com-top" :style="{background:$store.state.bgColor}">
        <span class="com-btn">
           <router-link to="/">首页</router-link>
        </span>
        <h2>{{$store.state.title}}</h2>
        
    </div>
</template>

<script>
    export default {
        
    }
</script>

<style scoped>
    .com-top{
        height: 1rem;
        width: 100%;
 
        position: fixed;
        top: 0;
        left: 0; 
    }
    .com-btn{
        
        position: absolute;
        left: 0.2rem;
        top: 50%;
        transform: translateY(-50%);
        font-size: 0.28rem;
    }
    .com-btn a{
        color: #ffffff;
        outline: none;
    }
    .com-top h2{
        color: #ffffff;
        line-height: 1rem;
        text-align: center;
        font-size: 0.6rem;
    }
   

</style>