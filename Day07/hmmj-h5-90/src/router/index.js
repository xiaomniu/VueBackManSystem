import Vue from 'vue'
import VueRouter from 'vue-router'
import { Toast } from 'vant'
import { getToken } from '@/utils/storage'

// 异步路由组件加载
const Register = () => import('@/views/Register.vue')
const Layout = () => import('@/views/Layout.vue')
const Login = () => import('@/views/Login.vue')
// const Detail = () => import('@/views/Detail.vue')
// const Article = () => import('@/views/Article.vue')
// const Collect = () => import('@/views/Collect.vue')
// const Like = () => import('@/views/Like.vue')
// const User = () => import('@/views/User.vue')

// import Register from '@/views/Register.vue'
// import Layout from '@/views/Layout.vue'
// import Login from '@/views/Login.vue'
// import Detail from '@/views/Detail.vue'

// import Article from '@/views/Article.vue'
// import Collect from '@/views/Collect.vue'
// import Like from '@/views/Like.vue'
// import User from '@/views/User.vue'

Vue.use(VueRouter)

const routes = [
  {path:'/', redirect:'/article'},
  {path:'/register', component:Register},
  {path:'/login', component:Login},
  {path:'/detail/:id', component: () => import('@/views/Detail.vue')},
  {
    path:'/',
    component:Layout,
    children:[
      {path:'/article', component:() => import('@/views/Article.vue')},
      {path:'/collect', component:() => import('@/views/Collect.vue')},
      {path:'/like', component:() => import('@/views/Like.vue')},
      {path:'/user', component:() => import('@/views/User.vue')},
    ]
  },
]

const router = new VueRouter({
  routes
})

const whiteList = ['/login', '/register', '/404']
// 导航守卫 => 全局前置守卫
router.beforeEach((to, from, next)=>{
  //执行时机：每次 页面跳转 都会 触发 这个 回调函数
  // 只要注册了全局 前置守卫， 路由会立即瘫痪，必须 调用 next() 方法 来放行
  // 参数1：to 到哪里去
  // 参数2：from 从哪里来
  // 参数3：next 函数，决定是否放行，next() 表示放行，next('路径') 表示前置跳转到指定路由，next(false) 表示不放行
  console.log(to, from)
  const token = getToken()
  if (token) {
    next()
  }
  else{
    // 以后白名单 越来越多，一个个判断的写法，会导致 写起来很麻烦
    // if(to.path === '/login' || to.path === '/register'){
    if (whiteList.includes(to.path)) {
      next()
    }
    else{
      Toast.fail('您还未登录，请登录')
      next('/login')
    }
  }
})

export default router
