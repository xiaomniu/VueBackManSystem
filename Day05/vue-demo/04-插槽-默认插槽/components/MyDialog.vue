<template>
    <div class="dialog">
        <div class="dialog-header">
            <h3>友情提示</h3>
            <span class="close">Ｘ</span>
        </div>
        <div class="dialog-content">
            <!-- 你确定要删除么？ -->
            <slot></slot>
        </div>
        <div class="dialog-footer">
            <button>取消</button>
            <button>确认</button>
        </div>
    </div>
</template>
<script>
export default{
    data(){
        return {

        }
    }
}
</script>
<style></style>