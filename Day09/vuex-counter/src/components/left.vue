<template>
  <div class="left-container">
    <h3>Left 组件</h3>
    <hr>
    <p>姓名：{{ $store.state.user.userInfo.name }}</p>
    <p>姓名：{{ userInfo.name }}</p>
    <p>大写姓名：{{ $store.getters['user/upperName'] }}</p>
    <button @click="changeUser" class="btn btn-primary"> + 1 </button>
    <button @click="$store.dispatch('user/updateUserAsync', {name:'bbbb', age:66})" class="btn btn-primary"> 2s 后改名 </button>
  </div>
</template>

<script>

export default {
  name: 'MyLeft',
  methods:{
    changeUser(){
      // 调用 mutation 的函数
      // 直接调用会导致所有模块的同名 mutations 都执行，先执行 全局的，然后再根据 modules中的定义顺序依次 调用 所有 同名的 函数
      // 原因：默认情况下，所有子模块的 mutation 都会挂载到 全局
      // 解决方案：开启  命名空间，可以理解为给每个子模块 起个名字，作为独立的空间 进行隔离，子模块中添加一个属性：namespaced:true 即可
      // 开启 命名空间后，调用子模块的 mutations 函数时，需要加上 模块名字，如 this.$store.commit('模块名/函数名')
      this.$store.commit('user/updateUser',{
        name:'asdfs',
        age:22
      })
    }
  },
  computed:{
    userInfo(){
      return this.$store.state.user.userInfo
    }
  }
}
</script>

<style>
</style>
