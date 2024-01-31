<template>
    <div class="dialog">
        <div class="dialog-header">
            <!-- <h3>友情提示</h3> -->
            <slot name="header"></slot>
            <span class="close">Ｘ</span>
        </div>
        <div class="dialog-content">
            <slot name="body"></slot>
        </div>
        <div class="dialog-footer">
            <slot name="footer"></slot>
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