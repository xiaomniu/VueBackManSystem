<template>
    <!-- <div class="base-select" @change="$emit('changeCity', $event.target.value)"> -->
    <div v-show="visible" class="base-dialog-wrap">
        <div class="base-dialog">
            <div class="title">
                <h3>温馨提示：</h3>
                <button @click="hClose" class="close">x</button>
            </div>
            <div class="content">
                <p>你确定要退出系统吗？</p>
            </div>
            <div class="footer">
                <button>确认</button>
                <button>取消</button>
            </div>
        </div>
    </div>
</template>

<script>
export default{
    name:'base-dialog',
    props : {
        visible:{
            type : Boolean,
            required : true,
        }
    },
    methods:{
        hClose(){
            // this.$emit("close", false)
            this.$emit('update:visible', false)
        }
    }
}
</script>
<style>
.base-dialog-wrap{
    width: 300px;
    height: 200px;
}
</style>