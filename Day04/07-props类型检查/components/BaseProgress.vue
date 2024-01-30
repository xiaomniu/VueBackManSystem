<template>
    <div class="base-progress">
        <div class="inner" :style="{ width : w + '%'}">
            <span>{{ w }}%</span>
        </div>
    </div>
</template>

<script>
export default{
    name:'Son-',
    // prop 校验
    // 1. 类型校验
    // props:{'w' : Number},
    // 完整写法
    props : {
        w:{
            type:Number,            // 类型
            default : 50,           // 默认值
            // required : true,     // 是否必填
            validator(val){         // 参数1：传递过来的数据，可供我们校验
                // 返回值 决定 校验 是否通过
                if (val >=0 && val <= 100)
                    return true;
                console.error('取值范围是 0~100')
                return false;
            }
        }
    }
}
</script>
<style scoped>
.base-progress{
    height: 26px;
    width:400px;
    border-radius: 15px;
    background-color: #b31248;
    border: 3px solid #1ab857;
    box-sizing: border-box;
    margin-bottom: 30px;
}
.inner{
    position: relative;
    background: #379bff;
    border-radius: 15px;
    text-align: right;
    position: relative;
    background-color: #380bb3;
    background-size: 20px 20px;
    box-sizing: border-box;
    transition: all 1s;
}
.inner span{
    position: absolute;
    right: -20px;
    bottom: -25px;
    color: #ffffff;
    /* background: #37ff91; */
    /* background-color: #b8791a; */
}
</style>