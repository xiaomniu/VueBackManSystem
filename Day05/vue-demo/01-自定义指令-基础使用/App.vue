<template>
  <div id="app">
    <h1>自定义指令</h1>
    <!-- 需求：当页面加载 自动聚焦 -->
    <!-- 1. autofocus ：自动聚焦，在 safari 浏览器中有 兼容性问题 -->
    <!-- <input autofocus type="text"> -->
    <!-- 2. 在 mounted() 回调中，获取焦点，页面多的化，工作量很大 -->
    <!-- <input ref="inp" type="text"> -->
    <!-- 3. 封装一个自定义指令，指令中自动帮我们聚焦 -->
    <!-- 自定义指令：将一段 DOM 操作封装到自定义指令中 -->
    <input v-focus ref="inp" type="text">
    <input v-focus_01 ref="inp" type="text">
  </div>
</template>

<script>
export default {
  name: 'App',
  components: {
    
  },
  mounted(){
    this.$refs.inp.focus()
  },
  // 局部注册指令
  directives:{
    // 指令名：配置对象
    focus_01:{
      inserted(el){
        console.log(el, '局部注册指令')
        el.focus()
      }
    }
  }
}
</script>

<style>
</style>
