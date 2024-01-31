<template>
  <div id="main">
    <MyDialog>
      <template v-slot:header>
        友情提示
      </template>
      <!-- v-slot: 可以简写为 # -->
      <template #body>
        确定要删除吗？
      </template>
      <template #footer>
        <button>取消</button>
        <button>确认</button>
      </template>
    </MyDialog>
    
    <MyDialog>
      <template v-slot:header>
        温馨提示
      </template>
      <!-- v-slot: 可以简写为 # -->
      <template #body>
        确定要退出吗？
      </template>
      <template #footer>
        <button>取消</button>
      </template>
    </MyDialog>
  </div>
</template>

<script>
/**
 * 具名插槽：
 * 当子组件内有多个地方需要自定义结构时，可以添加多个 slot 标签
 * 1. 给每个 slot 标签设置 name 属性
 * 2. 使用插槽时通过 template 标签 结合 v-slot 指令来设置要分发的插槽
 */
import MyDialog from './components/MyDialog.vue'
export default {
  name: 'App',
  data(){
    return {
      list : [],
      isLoading : true
    }
  },
  components:{
    MyDialog
  }
}
</script>

<style>
body{
  background-color: #b3b3b3;
}
</style>
