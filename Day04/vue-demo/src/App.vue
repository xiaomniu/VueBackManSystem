<!-- 43800 爆仓 -->
<template>
  <div class="app">
    <div v-if="isShowEdit">
      <input type="text" v-model="editValue" ref="inp">
      <button>确认</button>
    </div>
    <div v-else>
      <span>{{ title }}</span>
      <button @click="editFn">编辑</button>
    </div>
  </div>
</template>

<script>

export default {
  name:'App',
  data(){
    return {
      title : '大标题',
      isShowEdit : false,
      editValue : ''
    }
  },
  components:{
    
  },
  methods:{
    editFn(){
      // 1. 显示文本框
      this.isShowEdit = true;

      // 在 Vue 中，数据变化 视图不会立即更新，视图的更新是 异步任务
      // Dom 更新是异步的，是为了性能优化
      //   this.$refs.inp  需要在 Dom渲染更新完后，才能正常获取使用
      //   为了  能在  异步渲染更新完成后，去操作 Dom元素，可以使用 this.$nextTick()

      // 2. 让文本框聚焦
      // this.$refs.inp.focus()
      // setTimeout(()=>{
      //   this.$refs.inp.focus()
      // })
      this.$nextTick(()=>{
        this.$refs.inp.focus()
      })
    }
  }
}
</script>

<style>
.base-char-box{
  width: 300px;
  height: 200px;
}
</style>
