<template>
    <div class="my-table">
        <thead>
            <tr>
                <th>序号</th>
                <th>姓名</th>
                <th>年纪</th>
                <th>操作</th>
            </tr>
        </thead>
        <tbody>
            <tr v-for="(item, index) in data" :key="item.id">
                <td>{{ index + 1 }}</td>
                <td>{{ item.name }}</td>
                <td>{{ item.age }}</td>
                <td>
                    <!-- <button>删除</button> -->
                    <slot :index="index" :item="item"></slot>
                </td>
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
        data:Array
    }
}
</script>
<style></style>