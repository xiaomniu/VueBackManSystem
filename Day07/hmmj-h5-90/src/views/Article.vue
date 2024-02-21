<template>
    <div class="article-page">
        <nav class="my-nav van-hairline--bottom">
            <a :class="{active:this.sorter==='weight_desc'}" @click="hChange('weight_desc')" href="javascript:;">推荐</a>
            <a :class="{active:this.sorter===null}" @click="hChange(null)" href="javascript:;">最新</a>
            <!-- <a  @click="hChange('weight_desc')" href="javascript:;">推荐</a>
            <a  @click="hChange(null)" href="javascript:;">最新</a> -->
            <div class="logo"><img src="@/assets/logo.png" alt=""></div>
        </nav>
        <van-pull-refresh v-model="isLoading" @refresh="onRefresh">
            <van-list v-model="loading" :finished="finished" finished-text="没有更多了" @load="onload">
                <ArticleItem :item="item" v-for="item in list" :key="item.id"></ArticleItem>
            </van-list>
        </van-pull-refresh>
    </div>
</template>

<script>
import { getArticles } from '@/api/article'
// import { Loading } from 'vant'

export default{
    name : 'ArticlePage',
    // 因为页面 刚加载时，就是在底部，会自动触发 load 事件，发请求，所以不需要再 created 中再 发请求了
    async created(){
        // const res = await getArticles({
        //     current:this.current,
        //     pageSize:10,
        //     sorter:this.sorter
        // })
        // console.log(res)
        // this.list = res.data.data.rows
    },
    data(){
        return {
            list : [],
            loading : false,
            finished : false,
            isLoading : false,
            current : 1,
            sorter : 'weight_desc'
        }
    },
    methods:{
        async onload(){
            // 1. load 事件在页面华东到底部时 自动触发
            // 2. 触发时会自动将 loading 改为 true，此时我们可以去发请求
            // 3. 请求到数据后，将 loading 手动改为 false
            // 4. 拿到数据后是将数据追加到当前数组后面
            // 5. 自增完后，判断是否大于总页数（服务器返回的），如果大于总页数 需要将  finished 设置为 true
            console.log('到底了，该加载数据了！！！')

            const res = await getArticles({
                current:this.current,
                pageSize:10,
                sorter:this.sorter
            })
            console.log(res)
            // [1, 2, 3].push([4, 5, 6]) => [1, 2, 3, [4, 5, 6]]
            this.list.push(...res.data.data.rows)
            // 请求完成，将 loading 改为 false
            this.loading = false;
            // 准备获取下一页数据
            this.current++;
            if (this.current > res.data.data.pageTotal) {
                this.finished = true
            }
        },
        onRefresh(){
            console.log('下滑了')
            this.isLoading = false;
        },
        hChange(sorter){
            // 1. 点击切换获取到 sorter
            // 2. 重置所有的数据
            console.log(sorter)
            this.current = 1;
            this.sorter = sorter;
            this.list = []
            this.finished = false;
            this.loading = true;
            this.onload();
            // this.loading = true;
        }
    }
}
</script>

<style lang="less" scoped>
.article-page{
    margin-bottom: 50px;
    margin-top: 44px;
    .my-nav{
        height: 44px;
        position: fixed;
        left: 0;
        top:0;
        width: 100%;
        z-index: 999;
        background: #fff;
        display: flex;
        align-items: center;
        > a{
            color: #999;
            font-size: 14px;
            line-height: 44px;
            margin-left: 20px;
            position: relative;
            transition: all 0.3s;
            &::after{
                content: '';
                position: absolute;
                left: 50%;
                transform: translateX(-50%);
                bottom: 0;
                width: 0;
                height: 2px;
                background: #222;
                transition: all 0.3s;
            }
            &.active{
                color: #222;
                &::after{
                    width: 14px;
                };
            }
        }
        .logo{
            flex: 1;
            display: flex;
            justify-content: flex-end;
            > img{
                width: 64px;
                height: 28px;
                display: block;
                margin-right: 10px;
            }
        }
    }
}
</style>