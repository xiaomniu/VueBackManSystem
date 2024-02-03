import Vue from 'vue'
import VueRouter from 'vue-router'

import Register from '@/views/Register.vue'
import Layout from '@/views/Layout.vue'
import Login from '@/views/Login.vue'
import Detail from '@/views/Detail.vue'

import Article from '@/views/Article.vue'
import Collect from '@/views/Collect.vue'
import Like from '@/views/Like.vue'
import User from '@/views/User.vue'

Vue.use(VueRouter)

const routes = [
  {path:'/register', component:Register},
  {path:'/login', component:Login},
  {path:'/detail', component:Detail},
  {
    path:'/',
    component:Layout,
    children:[
      {path:'/article', component:Article},
      {path:'/collect', component:Collect},
      {path:'/like', component:Like},
      {path:'/user', component:User},
    ]
  },
]

const router = new VueRouter({
  routes
})

export default router
