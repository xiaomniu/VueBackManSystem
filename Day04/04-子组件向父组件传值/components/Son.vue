<template>
    <div class="son">
        我是组件 Son ---{{title}}
        <button  @click="change">修改 title </button>
    </div>
</template>

<script>
export default{
    name:'Son-',
    props:['title'],
    methods:{
        change(){
            //父组件 通过 props 传递过来的数据，子组件无法直接修改
            // this.title = "嘻嘻嘻"
            // 而是 使用 $emit() 进行数据传递
            // this.$emit('自定义事件名', '数据1', '数据2', '数据3' ...)
            this.$emit('changeTitle', '嘻嘻嘻')
        }
    }
}
</script>
<style scoped>
</style>