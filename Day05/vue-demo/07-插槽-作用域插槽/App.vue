<template>
  <div id="main">
    <MyTable :data="list">
      <!-- 默认插槽的名字时 default -->
      <template v-slot:default="obj">
        <!-- {{ obj }} 等于	{ "index": 0, "item": { "id": 1, "name": "张小花", "age": 18 } } -->
        {{ obj }}
        <button @click="del(obj.item.id)">删除</button>
      </template>
    </MyTable>
    <MyTable :data="list2">
      <!-- <template #default="obj">
        <button @click="show1(obj.item)">查看</button>
      </template> -->
      <template #default="{item}">
        <button @click="show2(item)">查看</button>
      </template>
    </MyTable>
  </div>
</template>

<script>
/**
 * 作用域插槽：
 * 在父组件中需要使用子组件数据时，可以通过插槽携带数据过来
 * 1. 在子组件的slot 上添加自定义属性
 *        就是将数据绑定在一个对象中共你， 可以传递多个数据，都会放到一个对象中统一带过去
 *        <slot :index="index" :item="item"></slot>  携带的数据：{index:0, item:{xxx:xxx, ...}}
 * 2. 在父组件中使用 template 配置 v-slot 接收传递过来的数据
 */
import MyTable from './components/MyTable.vue'
export default {
  name: 'App',
  data(){
    return {
      list : [
        {id:1, name:'张小花', age:18},
        {id:2, name:'孙大名', age:19},
        {id:3, name:'刘德中', age:20},
      ],
      list2 : [
        {id:1, name:'赵晓云', age:18},
        {id:2, name:'刘蓓蓓', age:19},
        {id:3, name:'王晓红', age:17},
      ]
    }
  },
  components:{
    MyTable
  },
  methods:{
    del(id){
      this.list = this.list.filter(item => item.id !== id)
    },
    show1(item){
      alert(`姓名：${item.name}，年龄：${item.age}`)
    },
    show2(item){
      alert(`姓名：${item.name}，年龄：${item.age}`)
    }
  }
}
</script>

<style>
</style>
