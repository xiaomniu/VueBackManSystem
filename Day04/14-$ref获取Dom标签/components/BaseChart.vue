<template>
    <div ref="box" class="base-chart-box">
        子组件
    </div>
</template>

<script>
import * as echarts from 'echarts'
export default{
    name:'base-chart',
    props : {
        visible:{
            type : Boolean,
            required : true,
        }
    },
    mounted(){
        // 基于准备好的 dom，初始化 echarts 实例
        // document。querySelector 会查找项目中所有的元素
        // $refs 只会在当前 组件查找盒子
        // 1. 给标签添加 ref 属性
        // 2. 使用 this.$refs.属性名 来获取 Dom元素
        // const myChart = echarts.init(document.querySelector('.base-chart-box'));
        const myChart = echarts.init(this.$refs.box)
        // 绘制图表
        myChart.setOption({
            title :{
                text:'ECharts 入门示例',
            },
            tooltip:{},
            xAxis:{
                data:['衬衫', '羊毛衫', '雪纺衫', '裤子', '高跟鞋', '袜子'],
            },
            yAxis:{},
            series:[
                {
                    name:'销量',
                    type:'bar',
                    data:[5, 20, 36, 10, 10, 20],
                },
            ],
        })
    },
    methods:{
        hClose(){
            this.$emit('update:visible', false)
        }
    }
}
</script>
<style scoped>
.base-chart-box{
    width: 400px;
    height: 300px;
    border: 3px solid #000;
    border-radius: 6px;
}
</style>