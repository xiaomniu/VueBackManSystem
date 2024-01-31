<template>
  <div id="table-case">
    <!-- <MyTag :value="tag1" @input="tag1 = $event"></MyTag> -->
    <!-- <MyTag :value="tag2" @input="tag2 = $event"></MyTag> -->
    <MyTag v-model="tag1"></MyTag>
    <MyTable :data1="goods">
      <template v-slot:t-header>
        <th>序号</th>
        <th>名称</th>
        <th>图片</th>
        <th width="100px">标签</th>
      </template>
      <template #t-body="{item, index}">
        <td>{{ index + 1 }}</td>
        <td>{{ item.name }}</td>
        <td>
            <img :src="item.picture">
        </td>
        <td>
            <MyTag v-model="item.tag"></MyTag>
        </td>
      </template>
    </MyTable>
    <MyTable :data1="goods">
      <template v-slot:t-header>
        <th>序号</th>
        <th width="100px">标签</th>
        <th>名称</th>
      </template>
      <template #t-body="{item, index}">
        <td>{{ index + 1 }}</td>
        <td>
            <MyTag v-model="item.tag"></MyTag>
        </td>
        <td>{{ item.name }}</td>
      </template>
    </MyTable>
  </div>
</template>

<script>
import MyTag from './components/MyTag.vue'
import MyTable from './components/MyTable.vue'
export default {
  name: 'TableCase',
  data(){
    return {
      tag1:'哈哈',
      tag2:'嘻嘻',
      goods:[
        {id : 101, picture:"https://img2.baidu.com/it/u=286078946,3854889807&fm=253&fmt=auto&app=138&f=JPEG?w=200&h=200", name:'紫砂壶', tag:'茶具'},
        {id : 102, picture:"https://img0.baidu.com/it/u=1432958699,3799064197&fm=253&fmt=auto&app=138&f=JPEG?w=190&h=190", name:'耐克鞋', tag:'男鞋'},
        {id : 103, picture:"http://t13.baidu.com/it/u=1999446328,3744808582&fm=224&app=112&f=JPEG?w=200&h=200", name:'羊绒衫', tag:'背心'},
        {id : 104, picture:"https://img1.baidu.com/it/u=3726303888,3989594428&fm=253&fmt=auto&app=138&f=JPEG?w=200&h=200", name:'针织衫', tag:'毛衣'},
      ],
    }
  },
  components:{
    MyTag,
    MyTable
  },
  methods:{
  }
}
</script>

<!-- <style> -->
<style lang="less" scoped>
.table-case{
  width: 1000px;
  margin: 50px auto;
  img {
    width: 100px;
    height: 100px;
    object-fit: contain;
    vertical-align: middle;
  }
}
</style>
