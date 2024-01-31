<template>
  <div>
    <div class="footer_wrap">
      <router-link to="/find">发现音乐000</router-link>
      <router-link to="/my">我的音乐</router-link>
      <router-link to="/friend">朋友</router-link>
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
.footer_wrap {
  position:relative;
  left:0;
  top:0;
  display:flex;
  width: 100%;
  text-align: center;
  background-color: #333;
  color:#ccc;
}
.footer_wrap a{
  flex: 1;
  text-decoration: none;/* 字体 下划线 */
  padding: 20px 0;
  line-height: 20px;
  background-color: #333;
  color:#ccc;
  border: 1px solid black;
}
.footer_wrap a:hover{
  background-color: #555;
}
/**
  router-link-active：模糊匹配，只要访问路径包含 <a> 标签的 href，就会自动加上这个类名（用的多）
  router-link-exact-active：精确匹配，访问的路径  必须  和  <a> 标签的 href 完全一致，才会加上 这个类名（用的少）
*/
.footer_wrap a.router-link-active{
  background-color: yellow;
}
</style>
