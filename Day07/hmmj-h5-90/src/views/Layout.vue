<template>
    <div class="layout-page">
        <!-- <div>首页架子 - 内容区域</div> -->
        <router-view></router-view>
        <!-- <div>底部tabbar - 区域</div> -->
        <van-tabbar route>
            <!-- replace：点击跳转后不记录历史，按 返回键 直接退出 -->
            <van-tabbar-item replace to="/article" icon="notes-o">面经</van-tabbar-item>
            <van-tabbar-item replace to="/collect" icon="star-o">收藏</van-tabbar-item>
            <van-tabbar-item replace to="/like" icon="like-o">喜欢</van-tabbar-item>
            <van-tabbar-item replace to="/user" icon="user-o">我的</van-tabbar-item>
        </van-tabbar>
    </div>
</template>

<script>
export default{
    name : 'LayoutPage',
    data () {
        return {
        }
    },
}
</script>

<style lang="less" scoped>
</style>