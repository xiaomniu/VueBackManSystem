import Vue from 'vue'
import App from './App.vue'
import router from './router'
import '@/utils/vant-ui'
import ArticleItem from '@/components/ArticleItem.vue'
Vue.component('ArticleItem', ArticleItem)

Vue.config.productionTip = false
/**
 * 目标：保存文件自动解决 ESLint 的错误：
 * 1. 安装 VSCode 插件：ESLint
 * 2. 打开 VSCode 设置，添加以下配置到设置中
 *  "editor.codeActionsOnSave":{
 *    "source.fixAll":true
 *  }
 * // 保存自动格式化，一定要关掉
 *  "editor.formatOnSave: false"
 */
new Vue({
  router,
  render: h => h(App)
}).$mount('#app')
