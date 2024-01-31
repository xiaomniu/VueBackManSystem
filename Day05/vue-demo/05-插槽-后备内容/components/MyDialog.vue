<template>
    <div class="dialog">
        <div class="dialog-header">
            <h3>友情提示</h3>
            <span class="close">Ｘ</span>
        </div>
        <div class="dialog-content">
            <!-- 你确定要删除么？ -->
            <!-- <slot></slot> -->
            <!-- 插槽的默认值：如果没有传入自定义结构，可以设置 默认内容 -->
            <slot>
                默认如下显示：
                <br>
                用户名：<input type="text">
                <br>
                密  码：<input type="password">
            </slot>
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