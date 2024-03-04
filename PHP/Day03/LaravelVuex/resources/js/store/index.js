import Vue from 'vue'
import Vuex from 'vuex'

import user from './modules/user.js'
import setting from './modules/setting.js'
// 1. 安装 Vuex
//     npm i vuex@3
// 2. 新建 vuex 模块文件
//     新建 src/store/index.js 专门存放 vuex\

// 3. 安装插件
Vue.use(Vuex)

// 4. 创建 Vuex 仓库
const store = new Vuex.Store({
    strict : true,
    // 核心成员 5：modules
    // 分模块，一样要依赖前面 4个核心成员

    // 分模块的流程:
    // 1. 新建子模块文件，编写内容（导出一个具有四个核心成员的对象）
    // 2. 在 store/index.js 中引入 并注册模块
    
    // 命名空间：给子模块提供一个独立的空间，以自己模块命名的空间。建议所有子模块都开启 命名空间
    // 调用 mutation 的函数
    // 直接调用会导致所有模块的同名 mutations 都执行，先执行 全局的，然后再根据 modules中的定义顺序依次 调用 所有 同名的 函数
    // 原因：默认情况下，所有子模块的 mutation 都会挂载到 全局
    // 解决方案：开启  命名空间，可以理解为给每个子模块 起个名字，作为独立的空间 进行隔离，子模块中添加一个属性：namespaced:true 即可
    // 开启 命名空间后，调用子模块的 mutations 函数时，需要加上 模块名字，如 this.$store.commit('模块名/函数名')
    
    // 辅助函数：mapState / mapMutations
    // 相较于之前，需要传递一个 参数 为 模块名，其他使用方法照旧
    // 相比之下 辅助函数 更方便 的 访问数据，所以推荐使用 mapState
    // mapMutations 在多次映射 mutation 时 会很方便

    // 总结：子模块中 state 和 getters 更倾向于 使用 辅助函数来访问
    /**
     * 1. 建立 子模块的文件，默认导出一个对象，对象中需要具有 state/mutations/actions/getters 成员
     * 2. 在 store/index.js 中使用 modules:{模块名1:模块对象1, 模块名2:模块对象2, ...} 注册子模块
     * 问题：默认情况下子模块所有 mutations/actions/getters 中的函数都挂载到全局，依然没有起到隔离的作用
     * 解决：开启 命名空间 namespaced:true
     * 开启民命空间后，四个核心成员的使用该方式发生了变化：
     * state
     * 1. 直接访问：$store.state.user.userInfo.name
     * 2. 辅助函数：
     *      - 按需引入辅助函数 import { mapState } from 'vuex'
     *      - 在 computed 中调用并展开结果 ...mapState('模块名', ['需要映射的数据名'])
     * mutations
     * 1. 直接访问：$store.commit('模块名/函数名')
     * 2. 辅助函数：
     *      - 按需引入辅助函数 import { mapMutations } from 'vuex'
     *      - 在 methods 中调用并展开结果 ...mapMutations('模块名', ['需要映射的函数名'])
     * actions
     * 1. 直接访问：$store.dispatch('模块名/异步函数名')
     * 2. 辅助函数：
     *      - 按需引入辅助函数 import { mapActions } from 'vuex'
     *      - 在 methods 中调用并展开结果 ...mapActions('模块名', ['需要映射的异步函数名'])
     * getters
     * 1. 直接访问：$store.getters['模块名/计算属性名']
     * 2. 辅助函数：
     *      - 按需引入辅助函数 import { mapGetters } from 'vuex'
     *      - 在 computed 中调用并展开结果 ...mapGetters('模块名', ['需要映射的计算属性名'])
     */

    modules:{
        user : user,
        setting,
    },
    mutations : {
        updateUser(state, user){
            console.log('globel')
            state.userInfo = user
        }
    }
})

// 5. 导出仓库，在 main.js 中导入挂载到 Vue 实例上
export default store