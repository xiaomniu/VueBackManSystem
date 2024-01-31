<template>
  <div id="app">
    <div class="link">
      <router-link to="/home">首页</router-link>
      <router-link to="/search">搜索页</router-link>
    </div>
    <router-view></router-view>
  </div>
</template>

<script>
export default {
  name: 'TableCase',
  data(){
    return {
    }
  },
  components:{
  },
  methods:{
  }
}
</script>

<!-- <style> -->
<style scoped>
.link{
  height: 50px;
  line-height: 50px;
  background-color: #495150;
  display: flex;
  margin: -8px -8px 0 -8px;
  margin-bottom: 50px;
}
.link a{
  display: block;
  text-decoration: none;
  background-color: #ad2a26;
}
</style>
