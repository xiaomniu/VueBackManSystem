<template>
  <div class="h5-wrapper">
    <!-- 以及路由的出口  用于切换  面经  和  详情 两个页面 -->
    <!-- 
      组件缓存：在 切换组件的 router-view 出包裹一个 标签：<keep-alive></keep-alive>
      所有在 keep-alive 组件内切换的组件，都会被缓存起来，不会销毁

      组件缓存虽好，单不是素有组件都需要缓存的，以我们现在的案例为例：Layout组件需要缓存，ArticleDetail组件不需要缓存
      所以，vue提供选择缓存组件的属性：
        inlucde（包含）：填写组件名数组，如果设置该属性，则表示只缓存设置的组件
        exclude（排除）：填写组件名数据，如果设置该属性，则表示只派出设置的组件
     -->
    <keep-alive :include="['layout-page']">
      <router-view></router-view>
    </keep-alive>
  </div>
</template>

<script>
export default {
  name: 'h5-wrapper',
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
</style>
<style lang="less" scoped>
.h5-wrapper{
  .content{
    margin-bottom: 51px;
  }
  .tabbar{
    position: fixed;
    left: 0;
    bottom: 0;
    width: 100%;
    height: 50px;
    line-height: 50px;
    text-align: center;
    display: flex;
    background: #fff;
    border-top: 1px solid #e4e4e4;
    a{
      flex: 1;
      text-decoration: none;
      font-size: 14px;
      color: #333;
      -webkit-tap-highlight-color: transparent;
    }
  }
}
</style>
