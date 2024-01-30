<template>
  <div class="app" style="border: 3px solid #000; margin: 10px;">
    我是组件 APP --- {{ myTitle }}
    <Son @changeTitle="change" :title="myTitle"></Son>
  </div>
</template>

<script>
/**
 * 父向子传递数据：
 * 1. 在 App.vue 中，给 子组件 添加自定义属性 “:title="myTitle"”
 * 2. 在 Son.vue 中，使用 props 来接收自定义属性 传递过来的数据
 * 
 * 子向父传数据：
 * 1. 在 Son.vue 中，使用 $emit 传递数据
 * 2. 在 App.vue 中，使用自定义事件来接收数据
 */

import Son from './components/Son.vue'

export default {
  name:'App',
  components:{
    Son
  },
  data(){
    return {
      myTitle:"哈哈哈哈"
    }
  },
  methods:{
    change(val){
      console.log('接收到的数据：', val)
      this.myTitle = val
    }
  }
}
</script>

<style>
</style>
