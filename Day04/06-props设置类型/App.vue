<template>
  <div class="app">
    <BaseProgress :w="width"></BaseProgress>
  </div>
</template>

<script>
import BaseProgress from './components/BaseProgress.vue'

export default {
  name:'App',
  data(){
    return {
      width : 75,
    }
  },
  components:{
    BaseProgress
  },
}
</script>

<style>
</style>
