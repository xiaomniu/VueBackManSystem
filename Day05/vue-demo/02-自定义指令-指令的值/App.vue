<template>
  <div id="app">
    <h1 v-color="color1" >指令的值1 测试</h1>
    <h1 v-color="color2" >指令的值2 测试</h1>
  </div>
</template>

<script>
export default {
  name: 'App',
  data(){
    return {
      color1 : 'red',
      color2 : 'orange'
    }
  },
  components: {
    
  },
  mounted(){
  },
  // 局部注册指令
  directives:{
    // 指令名：配置对象
    color:{
      // 参数1：指令绑定的元素对象
      // 参数2：指令 传入的 值
      inserted(el, binding){
        // 在 el 元素 被插入到 Dom时 会执行
        console.log(el, binding)
        el.style.color = binding.value
      },
      update(el, binding){
        // 在指令值 更新的时候 会 自动执行。 v-color 所有被用过的标签 都会执行一次
        console.log(el, binding)
        el.style.color = binding.value
      }
    }
  }
}
</script>

<style>
</style>
