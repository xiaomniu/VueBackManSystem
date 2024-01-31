<template>
    <div>
        <p>搜索关键字：{{$route.params.words}}</p>
        <p>搜索结果：</p>
        <ul>
            <li> ...... </li>
            <li> ...... </li>
            <li> ...... </li>
            <li> ...... </li>
            <li> ...... </li>
        </ul>
    </div>
</template>
<script>
export default{
    name:'search-vue',
    created(){
        // 在 created() 函数中，使用传入的 words 值 进行 发送搜索请求
        // console.log('查询式传参：', this.$route.query.words)
        console.log('动态式传参：', this.$route.params.words)
    }
}
</script>
<style></style>

