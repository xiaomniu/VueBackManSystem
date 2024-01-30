<template>
  <div class="app">
    <input type="text" v-model="msg1">
    <br>
    <input type="text" :value="msg2" @input="msg2 = $event.target.value">
    <!-- <input type="text" :value="msg2" @input="hInput"> -->
    <br>
  </div>
</template>

<script>
export default {
  name:'App',
  data(){
    return {
      msg1 : '', 
      msg2 : ''
    }
  },
  // methods:{
  //   hInput(e){
  //     this.msg2 = e.target.value;
  //   }
  // }
}
</script>

<style>
</style>
