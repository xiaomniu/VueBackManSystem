<template>
  <div id="main">
    <div class="box" v-loading="isLoading">
      <ul>
        <li v-for="item in list" :key="item.id" class="news">
          <div class="left">
            <div class="title">{{ item.title }}</div>
            <div class="info">
              <span>{{ item.source }}</span>
              <span>{{ item.time }}</span>
            </div>
          </div>
          <div class="right">
            <img :src="item.img" alt="">
          </div>
        </li>
      </ul>
    </div>
  </div>
</template>

<script>
// 安装 axios => npm i axios
import axios from 'axios'

// 接口地址：http://hmajax.itheima.net/api/news
// 请求方式：get

export default {
  name: 'App',
  data(){
    return {
      list : [],
      isLoading : true
    }
  },
  directives:{
    loading:{
      inserted(el, binding){
        console.log(el, binding)
        if(binding.value == true)
          el.classList.add('loading')
        else
          el.classList.remove('loading')
        // this.isLoading = binding.value
      },
      update(el, binding){
        binding.value ? el.classList.add('loading') : el.classList.remove('loading')
      }
    }
  },
  async created() {
    // 1. 发送请求获取数据
    const res = await axios.get('http://hmajax.itheima.net/api/news')
    setTimeout(() => {
      // 2. 更新到 list 中，用于页面渲染 v-for
      this.list = res.data.data
      this.isLoading = false
    }, 2000);
  },
}
</script>

<style>
.loading::before{
  content: '';
  position: absolute;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  background: #fff url('./loading.gif') no-repeat center;
}
.box2{
  width: 400px;
  height: 400px;
  border: 2px solid #000;
  position: relative;
}
.box{
  width: 800px;
  min-height: 500px;
  border: 3px solid orange;
  border-radius: 5px;
  position: relative;
}
</style>
