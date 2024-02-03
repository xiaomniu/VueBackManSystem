<template>
  <router-view> </router-view>
  <!-- <div id="app">
    <van-nav-bar
      title="标题"
      left-text="返回"
      right-text="按钮"
      left-arrow
      @click-left="onClickLeft"
      @click-right="onClickRight"
    />
    <div class="box"></div>
    <van-button type="primary">主要按钮</van-button>
    <van-button type="info">信息按钮</van-button>
    <van-button type="default">默认按钮</van-button>
    <van-button type="warning">警告按钮</van-button>
    <van-button type="danger">危险按钮</van-button>
    <van-rate v-model="value" />
  </div> -->
</template>

<script>
export default{
  data(){
    return {
      value:4,
    }
  },
  methods:{
    onClickLeft(){ console.log('click left') },
    onClickRight(){ console.log('click right') },
  }
}
</script>

<style lang="less">
// .box{
//   width: 200px;
//   height: 200px;
//   background-color: yellow;
// }
</style>
