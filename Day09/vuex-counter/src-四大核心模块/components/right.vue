<template>
  <div class="right-container">
    <h3>Right 组件</h3>
    <hr>
    <p>count 值：{{ $store.state.count }}</p>
    <p>count 值：{{ this.title }}</p>
    <button @click="hClick(1)" class="btn btn-primary"> - 1 </button>
    <button @click="subCount(5)" class="btn btn-primary"> - 5 </button>
    <button @click="subCount(10)" class="btn btn-primary"> - 10 </button>
    <button @click="setCountAsync(999)" class="btn btn-primary"> 2s 后改为 999 </button>
    <hr>
    <p>{{ list }}</p>
    <p>{{ filterList }}</p>
  </div>
</template>

<script>
import {mapState, mapMutations, mapActions, mapGetters} from 'vuex'
// 1. mapState 的返回值是 对象
// 2. mapState 的参数必须要传，只能是数组或对象，一般用数组。数组中 要传入 想映射过来的数据属性字符串
// 理解辅助函数：就是 vuex 帮我们 写好了 计算属性，放到对象中返回给我们了，我们拿到之后只需要将其在 computed 中展开即可使用
const result = mapState(['count', 'test01'])
console.log(result)

// 希望 result 里的 成员 放到 obj里面，使用如下 方式
const obj = {
  name : 'obj',
  ...result   // 调用函数，将函数的返回值给展开
}
console.log(obj)

export default {
  name: 'MyRight',
  methods:{
    ...mapMutations(['subCount']),
    ...mapActions(['setCountAsync']),
    hClick(n){
      // this.$store.commit('subCount', n)
      this.subCount(n)
    },
  },
  computed : {
    ...mapState(['count', 'title', 'list']),
    ...mapGetters(['filterList'])
  },
}
</script>

<style>
</style>
