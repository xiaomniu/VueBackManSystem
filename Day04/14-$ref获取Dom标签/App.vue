<!-- 43800 爆仓 -->
<template>
  <div class="app">
    <div class="base-char-box">
      这是一个捣乱的盒子
    </div>
    <BaseChart></BaseChart>
  </div>
</template>

<script>
import BaseChart from './components/BaseChart.vue'

export default {
  name:'App',
  data(){
    return {
      isShow : false,
    }
  },
  components:{
    BaseChart
  },
  methods:{
  }
}
</script>

<style>
.base-char-box{
  width: 300px;
  height: 200px;
}
</style>
