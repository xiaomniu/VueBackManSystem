<template>
    <div class="detail-page">
        <van-nav-bar left-text="返回" @click-left="$router.back()" fixed title="面经详情"></van-nav-bar>
        <header class="header">
            <h1>{{ article.stem }}</h1>
            <p>
                {{ article.createdAt }} | {{ article.views }} 浏览量 | {{ article.likeCount }} 点赞数
            </p>
            <p>
                <img :src="article.avatar" alt="">
                <span>{{ article.creator }}</span>
            </p>
        </header>
        <main class="body" v-html="article.content"></main>
        <div class="opt">
            <van-icon @click="hLike" :class="{active:article.likeFlag}" name="like-o"></van-icon>
            <van-icon @click="hCollect" :class="{active:article.collectFlag}" name="star-o"></van-icon>
        </div>
    </div>
</template>

<script>
import {getArticleDetails, updateCollect, updateLike} from '@/api/article'
export default{
    name : 'DetailPage',
    data () {
        return {
            article : {}
        }
    },
    created(){
        console.log(this.$route.params.id)
        this.getDetail()
    },
    methods:{
        async getDetail(){
            const res = await getArticleDetails(this.$route.params.id)
            this.article = res.data.data
        },
        async hLike(){
            console.log('hLike')
            await updateLike(this.$route.params.id)
            this.$toast.success(this.article.likeFlag ? '取消成功' : '点赞成功')
            this.getDetail()
        },
        async hCollect(){
            console.log('hCollect')
            await updateCollect(this.$route.params.id)
            this.$toast.success(this.article.likeFlag ? '取消成功' : '收藏成功')
            this.getDetail()
        }
    }
}
</script>

<style lang="less" scoped>
.detail-page{
    margin-top: 44px;
    overflow: hidden;
    background: #f5f5f5;
}
// .detail-item{
//     margin-bottom: 10px;
//     background: #fff;
//     padding: 10px 15px;
//     .head{
//         display: flex;
//     }
// }
</style>