<template>
  <div class="app">
    <button @click="openDialog">退出按钮</button>
    <!-- <BaseDialog @close="isShow=$event" :visible="isShow"></BaseDialog> -->
    <!-- 
      visible.sync 相当于 :visible="isShow" @update:visible="isShow=$event"
      .sync 做了两件事：
        1. 将数据传递给子组件的 变量（这里变量名就是 visible
        2. 监听一个事件，事件名为 update:变量名（这里 的事件名就是  update:visible

      v-model 也做了两件事
        1. 将数据传递给了 子组件，变量名为  value
        2. 监听一个事件，事件名为 input                                          

     -->
    <BaseDialog :visible.sync="isShow"></BaseDialog>
    
  </div>
</template>

<script>
import BaseDialog from './components/BaseDialog.vue'

export default {
  name:'App',
  data(){
    return {
      isShow : false,
    }
  },
  components:{
    BaseDialog
  },
  methods:{
    openDialog(){
      this.isShow = true;
    }
  }
}
</script>

<style>
</style>
