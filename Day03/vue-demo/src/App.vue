<template>
  <div class="app">
    <!-- 使用组件：把注册好的组件当作标签来使用 -->
    <!-- <HmHeader></HmHeader> -->11111
    <hm-header>33333</hm-header>44444
    <hm-main>77777</hm-main>12222222
    <hm-footer></hm-footer>55555
  </div>
</template>
<script>
/**
 * 局部注册 / 全局注册
 * 组件的注册流程：
 *  1. 引入组件
 *  2. 注册组件
 *  3. 使用组件
*/

// 引入组件
import HmHeader from './components/hm-header.vue'
import HmFooter from './components/HmFooter.vue'
import HmMain from './components/HmMain.vue'
export default{
// 注册组件
components:{
  HmHeader:HmHeader,
  HmFooter,
  HmMain
}
}
</script>

<style>
.app{
  width: 350px;
  height: 500px;
  background-color: #87ceeb;
  display: flex;
  flex-direction: column;
  justify-content: space-around;

}
</style>