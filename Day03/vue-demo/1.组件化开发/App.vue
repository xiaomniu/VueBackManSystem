<template>
  <!-- templete 里 有且 只能 有一个 根元素，如果非要有 多个子元素 可以 包 在一个 div 里面 -->
  <div id="app" class="father" @click="open">
      大盒子
      <div class="son">小盒子
        <div class="dson">hahh </div>
      </div>
      
  </div>
</template>

<script>
  // 组件 中的 js 默认导出一个对象，整个对象就是 组件对象
  export default {
    // Vue 的核心成员
    methods:{
      open(){
        alert('嘿嘿')
      }
    }
  }
</script>

<style lang="less">
.father{
  width: 400px;
  height: 400px;
  background-color: orange;

  .son{
    width: 200px;
    height: 200px;
    background-color: green;
    
    .dson{
      width: 100px;
      height: 100px;
      background-color: red;
    }
  }
  
}
</style>
