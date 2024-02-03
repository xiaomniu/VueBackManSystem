import Vue from 'vue'

// 1. 下载 包：npm i vue-router@3.6.5

// 2. 引入 VueRouter
import VueRouter from 'vue-router'

// 引入组件对象
import Layout from '../views/Layout.vue'
//    @ 表示 src文件夹的 绝对路径
import ArticleDetail from '@/views/ArticleDetail.vue'

import Article from '@/views/Article.vue'
import Collect from '@/views/Collect.vue'
import Like from '@/views/Like.vue'
import User from '@/views/User.vue'

import NotFound from '@/views/NotFound.vue'

// 3. 安装注册 Vue.use(Vue插件)
//        注册路由的全局组件：router-link   和    router-view
Vue.use(VueRouter)
// 4. 创建路由对象
const router = new VueRouter({
  // history: 链接没有 # ，但需要后端支持（后端支持配置方法：https://v3.router.vuejs.org/zh/guide/essentials/history-mode.html）
  // mode : 'history',
  // 配置规则：配置  路径  和  组件  的映射关系
  // 一个对象 代表 一条 规则：{ path : 路径, component : 组件}
  routes:[
    // redirect：表示 重定向 到指定的路径
    // {path : '/', redirect : '/home'},
    {
      path : '/',
      component : Layout,
      children:[
        {path:'/article', component:Article},
        {path:'/collect', component:Collect},
        {path:'/like', component:Like},
        {path:'/user', component:User}
      ]
    },
    // {path : '/detail', component : ArticleDetail},
    {path : '/detail/:id', component : ArticleDetail},
    // “ ? ” 表示可选参数，传不传参数都可以匹配到 这条路由 规则
    // {name : 'search_n', path : '/search/:words?', component : Search},
    // 路由配置末尾添加 * 来设置 404 页面组件
    {path : '*', component : NotFound}
  ]
})
/**
 * 路由的使用步骤
 * 1. 下载 vue-router@3.6.5
 * 2. 引入
 * 3. 安装注册 Vue.use(Vue插件)
 * 4. 创建路由对象
 * 5. 注入到 new Vue中，建立关联
 * 
 * 两个核心步骤
 * 1. 创建组件（views目录），配规则
 * 2. 准备导航连接，配置路由出口（匹配的组件展示的位置）
 */

export default router