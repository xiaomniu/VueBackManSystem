<template>
    <div class="my-table">
        <thead>
            <tr>
                <!-- <th>序号</th>
                <th>名称</th>
                <th>图片</th>
                <th width="100px">标签</th> -->
                <slot name="t-header"></slot>
            </tr>
        </thead>
        <tbody>
            <tr v-for="(item, index) in data1" :key="item.id">
                <!-- <td>{{ index + 1 }}</td>
                <td>{{ item.name }}</td>
                <td>
                    <img :src="item.picture">
                </td>
                <td>
                    标签组件
                </td> -->
                <slot :index="index" :item="item" name="t-body"></slot>
            </tr>
        </tbody>
    </div>
</template>
<script>
export default{
    data(){
        return {
        }
    },
    props:{
        data1:{
            type:Array,
            required:true,
        }
    }
}
</script>
<style></style>