<template>
    <div class="base-count">
        <button @click="count--">-</button>
        <span>{{ count }}</span>
        <button @click="count++">+</button>
    </div>
</template>

<script>
export default{
    /**
     * 组件内的 data 必须时一个函数
     */
    // data:{
    // }
    // data:function(){
    // }
    data(){
        console.log('data() 被调用了')
        return {
            count:100
        }
    }
}
</script>
<style scoped>
.base-count{
    margin: 20px;
}
</style>