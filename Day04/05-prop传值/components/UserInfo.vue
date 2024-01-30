<template>
    <div class="userinfo">
        <h3>我是个人信息组件</h3>
        <div>姓名：{{ username }}</div>
        <div>年龄：{{ age }}</div>
        <div>是否单身：{{ isSingle?'是':'否' }}</div>
        <div>座驾：{{ car.brand }}</div>
        <div>兴趣爱好：{{ hobby.join('、') }}</div>
    </div>
</template>

<script>
export default{
    name:'Son-',
    // prop 可以接收 任意类型、任意数量 的数据
    props:['username','age', 'isSingle', 'car', 'hobby'],
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
<style>
.userinfo{
    width: 300px;
    border: 3px solid #000;
    padding: 20px;
}
.userinfo > div{
    margin: 20px 10px;
}
</style>