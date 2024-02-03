<template>
    <div class="article-page" >
        <!-- <div @click="$router.push(`/detail?id=${item.id}`)"  -->
        <div @click="$router.push(`/detail/${item.id}`)" 
            class="article-item"  v-for="item in list" :key="item.id">
            <div class="head">
                <img :src="item.creatorAvatar" alt="">
                <div class="con">
                    <p class="title">{{item.stem}}</p>
                    <p class="other">{{ item.creatorName }} | {{ item.createdAt }}</p>
                </div>
            </div>
            <div class="body">
                {{ item.content }}
            </div>
            <div class="foot">点赞 {{ item.likeCount }} | 浏览 {{ item.views }}</div>
        </div>
    </div>
</template>

<!-- 
    接口信息
    请求地址：https://mock.boxuegu.com/mock/3083/articles
    请求方式：get
 -->

<script>
import axios from 'axios'
export default{
    name:'article-page',
    data(){
        return {
            list : []
        }
    },
    async created(){
        const res = await axios.get('https://mock.boxuegu.com/mock/3083/articles')
        console.log(res.data.result.rows)
        this.list = res.data.result.rows
    },
    activated(){
      console.log('article-page active')
    },
    deactivated(){
      console.log('article-page dective')
    }
}
</script>

<style>
</style>