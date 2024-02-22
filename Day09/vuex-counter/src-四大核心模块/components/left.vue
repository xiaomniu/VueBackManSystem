<template>
  <div class="left-container">
    <h3>Left 组件</h3>
    <hr>
    <p>count 值：{{ $store.state.count }}</p>
    <p>count 值：{{ this.title }}</p>
    <button @click="hClick(1)" class="btn btn-primary"> + 1 </button>
    <button @click="hClick(5)" class="btn btn-primary"> + 5 </button>
    <button @click="hClick(10)" class="btn btn-primary"> + 10 </button>
    <button @click="hClickFive" class="btn btn-primary"> + 5 </button>
    <!-- <button @click="$store.commit('setCountAsync', 666)" class="btn btn-primary"> 2s 后改为 666 </button> -->
    <button @click="hClickAsync" class="btn btn-primary"> 2s 后改为 666 </button>
    <hr>
    <p>{{ $store.state.list }}</p>
    <p>{{ $store.getters.filterList }}</p>
  </div>
</template>

<script>
export default {
  name: 'MyLeft',
  methods:{
    hClick(n){
      // 使用 this.$store.commit('函数名')
      this.$store.commit('addCount', n)
    },
    hClickFive(){
      // 使用 this.$store.commit('函数名')
      this.$store.commit('addCountFive')
    },
    hClickAsync(){
      // 调用 actions 的函数 来异步 修改 count
      // dispatch 和 commit 用法一样，区别是 commit 调用的是 mutations 的函数，dispatch 调用的是 aciotns 里的函数
      this.$store.dispatch('setCountAsync', 666)
    },
  },
  // 把 state 中的数据，定义在 组件内 的 计算属性中
  computed:{
      count(){
        return this.$store.state.count
      },
      title(){
        return this.$store.state.title
      },
  },
}
</script>

<style>
</style>
