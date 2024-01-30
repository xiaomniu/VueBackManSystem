<template>
  <div class="app">
    <BaseProgress :w="width"></BaseProgress>
    <BaseProgress></BaseProgress>
  </div>
</template>

<script>
import BaseProgress from './components/BaseProgress.vue'

export default {
  name:'App',
  data(){
    return {
      width : 175,
    }
  },
  components:{
    BaseProgress
  },
}
</script>

<style>
</style>
