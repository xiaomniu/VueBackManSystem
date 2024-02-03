<template>
    <div class="h5-wrapper">
        <div class="content">
            <!-- 二级路由，用于切换 列表 收藏 喜欢 我的  四个页面 -->
            <router-view></router-view>
            <!-- 内容部分 -->
        </div>
        <div>
            <router-link to="/article" >面经</router-link>
            <router-link to="/collect" >收藏</router-link>
            <router-link to="/like" >喜欢</router-link>
            <router-link to="/user" >我的</router-link>
        </div>
    </div>
</template>

<script>
export default{
    name: 'layout-page',
    activated(){
      console.log('layout-page active')
    },
    deactivated(){
      console.log('layout-page dective')
    }
}
</script>


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
      --webkit-tap-highlight-color: transparent;
      &.router-link-active{
        color : #fa0;
      }
    }
  }
}
</style>
