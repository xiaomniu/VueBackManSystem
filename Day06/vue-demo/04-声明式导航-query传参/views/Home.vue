

<template>
    <div class="home">
        <div class="logo-box"></div>
        <div class="search-box">
            <input type="text">
            <button>搜索一下</button>
        </div>
        <div class="hot-link">
            热门搜索：
            <!-- 
                query 传参：查询字符串传参
                1. 传递：路径 ? 参数名1 = 参数值1 & 参数名2 = 参数值2
                2. 目标组件中接收参数：$route.query.参数名
             -->
            <router-link to="/search?words=哈哈111">哈哈111</router-link>
            <router-link to="/search?words=喜喜222">喜喜222</router-link>
            <router-link to="/search?words=哟哟333">哟哟333</router-link>
        </div>
    </div>
</template>
<script>
export default{
    name:'home_vue'
}
</script>
<style>
.logo-box{
    height: 150px;
    background: url('@/logo.png') no-repeat center;
}
.search-box{
}
</style>

