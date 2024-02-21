<template>
    <van-cell class="article-item" @click="$router.push(`/detail/${item.id}`)">
        <template #title>
            <div class="head">
                <img :src="item.avatar" alt="">
                <div class="con">
                    <p class="title van-ellipsis">{{ item.stem }}</p>
                    <p class="other">{{ item.creator }} | {{ item.createdAt }}</p>
                </div>
            </div>
        </template>
        <template #label>
            <div class="body van-multi-ellipsis--12">
                {{ item.content.replace(/<.+?>/g, '') }}
            </div>
            <div class="foot">点赞 {{ item.likeCount }} | 浏览 {{ item.views }}</div>
        </template>
        <!-- <template #title>
            <div class="head">
                <img src="@/assets/logo.png" alt="">
                <div class="con">
                    <p class="title van-ellipsis">宇宙头条校招前端面经</p>
                    <p class="other">不风流怎么倜傥 | 2022-01-20 00-00-00</p>
                </div>
            </div>
        </template>
        <template #label>
            <div class="body van-multi-ellipsis--12">
                萨拉丁飞机拉萨酱豆腐卢卡斯京东方了奥地利解放拉萨酱豆腐拉屎了肯定飞机卢卡斯大家樊辣椒辣
            </div>
            <div class="foot">点赞 22 | 浏览 2342</div>
        </template> -->
    </van-cell>
</template>

<script>
export default{
    props:{
        item:{
            type: Object,
            required: true
        }
    }
}
</script>

<style lang="less" scoped>
.article-item{
    .head{
        display: flex;
        img{
            width: 40px;
            height: 40px;
            border-radius: 50%;
            overflow: hidden;
        };
        .con{
            flex:1;
            overflow: hidden;
            padding-left: 10px;
            p{
                margin: 0;
                line-height: 1.5;
                &.title{
                    width: 280px;
                }
                &.other{
                    font-size: 10px;
                    color: #999;
                }
            }
        }
    }    
    .body{
        font-size: 14px;
        color: #666;
        line-height: 1.6;
        margin-top: 10px;
    }
    .foot{
        font-size: 12px;
        color: #999;
        margin-top: 10px;
    }
}
</style>