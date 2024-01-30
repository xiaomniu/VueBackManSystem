<template>
    <div class="base-count">
        <button @click="handleSub">-</button>
        <span>{{ count }}</span>
        <button @click="handleAdd">+</button>
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
        count:{
            type:Number,            // 类型
            default : 50,           // 默认值
            // required : true,     // 是否必填
            validator(val){         // 参数1：传递过来的数据，可供我们校验
                // 返回值 决定 校验 是否通过
                if (val >=0 && val <= 1000)
                    return true;
                console.error('取值范围是 0~100')
                return false;
            }
        }
    },
    methods:{
        /**
         * props 的单向 数据流：
         * 数据更新 必须是由父组件到子组件这一个流向，不允许由子组件直接修改 props 的数据，避免后期数据管理混乱
         * 如果子组件非要修改 props 传递过来的数据，请使用 $emit 子传父，交给父组件修改
         */
        handleSub(){
            this.$emit("change", this.count - 1)
        },
        handleAdd(){
            this.$emit("change", this.count + 1)
        },
    }
}
</script>
<style>
</style>