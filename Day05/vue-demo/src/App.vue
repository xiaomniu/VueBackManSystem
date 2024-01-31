<template>
  <div>
    <div class="footer-wrap">
      <a href="#/find">发现音乐</a>
      <a href="#/my">我的音乐</a>
      <a href="#/friend">朋友</a>
    </div>
    <div class="top">
      <router-view></router-view>
    </div>
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
<style>
body{
  margin: 0;
  padding: 0;
}
.footer-wrap{
  position:relative;
  left:0;
  top:0;
  display:flex;
  width: 100%;
  text-align: center;
}
</style>
