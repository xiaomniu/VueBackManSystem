<template>
  <div id="app" class="app-container">
    <h1>App 根组件 --- {{ $store.state.user.userInfo.name }}</h1>
    <div class="count-box">
      <my-left></my-left>
      <my-right></my-right>
    </div>
  </div>
</template>

<script>
import MyLeft from './components/left.vue'
import MyRight from './components/right.vue'

export default {
  name: 'App',
  components: {
    MyLeft,
    MyRight
  },
}
</script>

<style lang="less" scoped>
.app-container {
  padding:20px;
}
.count-box{
  display: flex;
  > div{
    padding:20px;
  }
}
</style>
