<template>
    <div class="my-tag">
        <input 
            v-if="isEdit"
            v-focus_02 
            @blur="isEdit = false" 
            ref="inp" 
            class="input" 
            type="text" 
            placeholder="输入标签"
            :value = "value"
            @keyup.enter="hConfirm">
        <div 
            v-else 
            @dblclick="isEdit = true" 
            class="text">
            {{ value }}
        </div>
    </div>
</template>
<script>
export default{
    data(){
        return {
            isEdit : false
        }
    },
    props:{
        value:{
            type : String,
            required : true
        }
    },
    directives:{
        focus_02:{
            inserted(el){
                el.focus()
            }
        }
    },
    methods:{
        hConfirm(e){
            // 将修改后的值 传递给 父组件 进行修改
            this.$emit('input', e.target.value)
            // 将输入框隐藏起来
            this.isEdit = false
        }
    }
}
</script>

<style lang="less" scoped>
.my-tag{
    cursor: pointer;
    .input{
        appearance: none;
        outline: none;
        border: 1px solid #c1c1c1;
        width: 100px;
        height: 40px;
    }
}
</style>