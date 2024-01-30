<template>
  <div class="app">
    <BaseCount @change="handleChange" :count="count"></BaseCount>
  </div>
</template>

<script>
import BaseCount from './components/BaseCount.vue'

export default {
  name:'App',
  data(){
    return {
      count : 175,
    }
  },
  components:{
    BaseCount
  },
  methods:{
    handleChange(val){
      this.count = val
    }
  }
}
</script>

<style>
</style>
