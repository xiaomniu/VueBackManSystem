<template>
  <div class="right-container">
    <h3>Right 组件</h3>
    <hr>
    <p>姓名：{{ $store.state.user.userInfo.name }}</p>
    <p>姓名：{{ userInfo.name }}</p>
    <p>大写姓名：{{ upperName }}</p>
    <button @click="updateUser({name:'aaaa', age:44})" class="btn btn-primary"> - 1 </button>
    <button @click="updateUserAsync({name:'yyy', age:99})" class="btn btn-primary"> 2s 后改名 </button>
  </div>
</template>

<script>
import {mapState,mapMutations,mapGetters,mapActions} from 'vuex'
export default {
  name: 'MyRight',
  methods:{
    ...mapMutations('user', ['updateUser']),
    ...mapActions('user', ['updateUserAsync'])
  },
  computed:{
    // 2. 调用函数并展开结果
    // 如果是 子模块 的数据，则第一个参数是模块名（必须开启命名空间）
    ...mapState('user', ['userInfo']),
    ...mapGetters('user', ['upperName'])
  }
}
</script>

<style>
</style>
