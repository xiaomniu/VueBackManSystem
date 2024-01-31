

<template>
    <div class="home">
        <div class="logo-box"></div>
        <div class="search-box">
            <input type="text">
            <button @click="toSearch">搜索一下</button>
        </div>
        <div class="hot-link">
            热门搜索：
            <!-- 
                query 传参：查询字符串传参
                1. 传递：路径 ? 参数名1 = 参数值1 & 参数名2 = 参数值2
                2. 目标组件中接收参数：$route.query.参数名

                动态路由传参:动态路由参数
                1. 在 router/index.js 配置动态路由参数。/search/:参数名
                2. 传递：/search/参数值
                3. 目标组件中接收参数：$route.params.参数名
             -->
            <router-link to="/search/哈哈111">哈哈111</router-link>
            <router-link to="/search/喜喜222">喜喜222</router-link>
            <router-link to="/search/哟哟333">哟哟333</router-link>
        </div>
    </div>
</template>
<script>
export default{
    name:'home_vue',
    methods:{
        toSearch(){
            // 编程式导航：使用 js 代码 进行跳转
            // 跳转方式：1. 使用 path（路径）  2. 使用 name （路由名称）
            // 1. 使用 path （路径）
            // this.$router.push('路径')            简单写法
            // this.$router.push({path:'路径'})     完整写法
            // this.$router.push('/search')

            // 2. 使用 name （路由名称）
            // 先去 index.js 中配置 路由的 name
            // this.$router.push({ name:'路由名' })
            this.$router.push({
                name:'search_n'
            })

            console.log('toSearch')
        }
    }
}
</script>
<style>
.logo-box{
    height: 150px;
    background: url('@/logo.png') no-repeat center;
}
/* .search-box{
} */
</style>

