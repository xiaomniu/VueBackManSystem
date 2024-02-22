import Vue from 'vue'
import Vuex from 'vuex'
// 1. 安装 Vuex
//     npm i vuex@3
// 2. 新建 vuex 模块文件
//     新建 src/store/index.js 专门存放 vuex\

// 3. 安装插件
Vue.use(Vuex)

// 4. 创建 Vuex 仓库
const store = new Vuex.Store({
    strict : true, // 开启严格模式，不要在发布环境中启用严格模式，严格模式会深度检测状态树来检测不合规的变更，太耗性能
    // state 状态，即数据，类似于 vue 组件中的data
    // 区别：
    //  1. data 是组件自己的数据； 
    //  2. state 是所有组件共享的数据

    // 核心成员 1： state
    // 存放 数据 的 位置
    // 访问方式：
    // 方式 1 ：直接访问 store 对象
    //  1. 组件内：this.$store.state.count
    //  2. 非组件内：先引入当前的 store 对象，store.state.count
    // 方式 2 ：按需导入 mapState
    //  1. 按需导入 mapState
    //  2. 调用 mapState 传入想映射的数据，在 computed 中 展开结果
    state: {
        count : 101,
        title : '测试内容',
        list : [1, 2, 3, 4, 5, 6, 7, 8, 9, 10]
    },
    
    // 核心成员 2：mutations
    // 作用：唯一操作 state 的途径
    // 用法：mutations 就是一个对象，里面可以定义很多函数，在函数内操作 state
    // 1. 定义 mutations 函数
    // 2. 在组件中使用 this.$store.commit('函数名')
    mutations: {
        // 所有 mutations 的函数 的第一个参数 永远都是 state
        // 第二个参数永远都是 payload（载荷），commit 提交时 携带的 参数
        // mutations 的函数只有 两个参数，如果需要传入多个参数，则将 对象或数组 传入
        addCount(state, n) {
            state.count += n
        },
        addCountFive(state) {
            state.count += 5
        },
        subCount(state, n){
            state.count -= n
        },
        setCount(state, n){
            state.count = n
        },
        // mutatiosns 中不允许出现 异步代码
        // setCountAsync(state, count){
        //     setTimeout(() => {
        //         state.count = count
        //     }, 2000);
        // },
    },
    
    // 核心成员 3：actions
    // 作用：专做 异步任务
    actions:{
        // actions 函数的 第一个参数 永远 都是 context 对象，context 是一个简化版的 store 对象，它里面也有个 commit 方法
        // 和 mutations 一样，也有第二个参数 payload，用法一样
        setCountAsync(context, n){
            setTimeout(() => {
                context.commit('setCount', n)
            }, 2000);
        }
    },

    // 核心成员 4：getters
    // 作用：Vuex 里的计算属性，供所有组件访问的计算属性
    getters: {
        // 注意：
        // (1) getters函数的第一个参数是 state
        // (2) getters函数必须是要有返回值的
        filterList(state) {
            return state.list.filter(item => item > 5)
        }
    },
    
    // 核心成员 5：modules
    // 分模块，一样要依赖前面 4个核心成员
})

// 5. 导出仓库，在 main.js 中导入挂载到 Vue 实例上
export default store