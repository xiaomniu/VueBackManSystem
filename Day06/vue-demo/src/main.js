import Vue from 'vue'
import App from './App.vue'

// 默认会去 查找 文件夹下的 index.js
import router from "./router"

Vue.config.productionTip = false;

// 全局注册指令
// v-model v-if v-for：model if for 才是 指令名
// Vue.directive('指令名', '配置对象')
// 这里准备 自定义 v-focus
Vue.directive('focus', {
  /**
   * 这个方法会在  当前指令 绑定的元素  被插入到 Dom 上时自动执行
   * 1. 指令一定会用在标签上，所以必然会有绑定的标签
   * 2. 绑定的标签元素被渲染到 Dom 时会自动触发这个函数的执行
   * 这个函数也是回调函数
   * 参数1：被绑定的元素对象，Dom对象
   */
  inserted(el){
    console.log(el, '全局注册指令', ': 被渲染到页面了')
    el.focus()
  }
})

new Vue({
  render: h => h(App),
  //5. 注入到 new Vue中，建立关联
  router : router
}).$mount('#app')
