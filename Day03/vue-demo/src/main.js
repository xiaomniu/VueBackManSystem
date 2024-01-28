// 1. 引入 Vue 构造函数
// 'vue' 写名字的方式  是在 node_modules 目录中找 Vue 的构造函数
// './aaa/vue' 写路径的方式  是在 指定的 文件中 找 Vue 的构造函数
import Vue from 'vue'

// 2. 引入 App.vue 组件文件
import App from './App.vue'

// 3. 设置 生产环境时的 提示，false 时 不显示
Vue.config.productionTip = false

// 4. 创建  Vue 实例对象
new Vue({
  // 5. 根据 App 组件来 创建 DOM 元素 并 挂载到指定容器中
  render: h => h(App), // 调用 h 函数 来根据 传入的 App.vue 组件 创建元素对象，并渲染 到指定容器中
}).$mount('#app')


// .$mount('#app') 完全等价 el:'#app'


// const app = new Vue({
//   el:'#app',
//   render(createElement){
//     return createElement(App)
//   }
// })