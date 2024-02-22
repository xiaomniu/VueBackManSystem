<template>
  <div id="app" class="app-container">
    <h1>App 根组件 --- {{ $store.state.title }} --- {{ $store.state.count }}</h1>
    <input @input="changeCount" :value="$store.state.count" class="form-control" type="number">
    <hr>
    {{ $store.state.list }}
    <div class="count-box">
      <my-left></my-left>
      <my-right></my-right>
    </div>
  </div>
</template>

<script>
import MyLeft from './components/left.vue'
import MyRight from './components/right.vue'

export default {
  name: 'App',
  components: {
    MyLeft,
    MyRight
  },
  methods:{
    changeCount(e){
      console.log(+e.target.value)
      // console.log(this.$store.state.count)
      this.$store.commit('setCount', +e.target.value)
    }
  },
  created(){
    console.log(this.$router)
    console.log(this.$store)
  }
}
</script>

<style lang="less" scoped>
.app-container {
  padding:20px;
}
.count-box{
  display: flex;
  > div{
    padding:20px;
  }
}
</style>
