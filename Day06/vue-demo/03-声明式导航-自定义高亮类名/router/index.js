import Vue from 'vue'

// 1. 下载 包：npm i vue-router@3.6.5

// 2. 引入 VueRouter
import VueRouter from 'vue-router'

// 引入组件对象
import Find from '../views/Find.vue'
//    @ 表示 src文件夹的 绝对路径
import My from '@/views/My.vue'
import Friend from '@/views/Friend.vue'

// 3. 安装注册 Vue.use(Vue插件)
//        注册路由的全局组件：router-link   和    router-view
Vue.use(VueRouter)
// 4. 创建路由对象
const router = new VueRouter({
  // 配置规则：配置  路径  和  组件  的映射关系
  // 一个对象 代表 一条 规则：{ path : 路径, component : 组件}
  routes:[
    {path : '/find', component : Find},
    {path : '/my', component : My},
    {path : '/friend', component : Friend},
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