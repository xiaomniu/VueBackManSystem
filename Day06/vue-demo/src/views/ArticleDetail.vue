<template>
    <div class="article-detail-page" v-if="article.id">
        <nav class="nav"><span @click="$router.back()" class="back">&lt;</span>面经详情</nav>
        <header class="header">
            <h1>{{ article.stem }}</h1>
            <p>{{ article.createdAt }} | {{ article.views }} 浏览量 | {{ article.likeCount }} 点赞数</p>
            <p>
                <img :src="article.creatorAvatar" alt="">
                <span>{{ article.creatorName }}</span>
            </p>
        </header>
        <main class="body">
            {{ article.content }}
        </main>
    </div>
</template>

<!-- 
    接口信息
    请求地址：https://mock.boxuegu.com/mock/3083/articles/:id
    请求方式：get
 -->
<script>
import axios from 'axios'
export default{
    name:'article-detail-page',
    data(){
        return {
            article:{}
        }
    },
    async created(){
        // console.log('id', this.$route.query.id)
        console.log('id', this.$route.params.id)
        const res = await axios.get(`https://mock.boxuegu.com/mock/3083/articles/${this.$route.params.id}`)
        console.log(res)
        this.article = res.data.result
    }
}
</script>

<style lang="less" scoped>
.article-page{
    background: #f5f5f5;
}
.article-item{
    margin-bottom: 10px;
    background: #fff;
    padding: 10px 15px;
    .head{
        display: flex;
    }
}
</style>