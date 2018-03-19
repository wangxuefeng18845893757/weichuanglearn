<template>
  <div id="app">
    <top></top>
    <div class="content">
       <router-view/>
    </div>
   
    <bottom></bottom>
  </div>
</template>

<script>
  import rem from '@/assets/js/rem.js'
  import reset from '@/assets/css/reset.css'
  import top from '@/components/common/top'
  import bottom from '@/components/common/bottom'
  import store from '@/vuex/store'
  export default {
    name: 'App',

    components:{
      top,
      bottom
    },
    store
  }
</script>
  
<style>
  .content{
    margin: 1rem 0;
  }
</style>
