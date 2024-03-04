// 子模块 同样 也具备 四个核心成员：state mutations actions getters
// 需要向外默认导出一个对象，包含 上面 四个成员

import Vue from 'vue'
import axios from 'axios'
import VueAxios from 'vue-axios'
Vue.use(VueAxios, axios)

// Vue.axios.get(api).then((response) => {
//   console.log(response.data)
// })

// this.axios.get(api).then((response) => {
//   console.log(response.data)
// })

// this.$http.get(api).then((response) => {
//   console.log(response.data)
// })



const state = {
    userInfo:{
        name: 'zs',
        age: 18
    }
}

const mutations = {
    updateUser(state, user){
        console.log('user')
        state.userInfo = user
    }
}

const actions = {
    updateUserAsync(context, user){
        setTimeout(() => {
            // context.commit('模块名/函数名', payload)
            context.commit('updateUser', user)
        }, 2000);
    },
    updateUserToDbAsync(context, user){
        axios.post('/test-update-user', user).then((response) => {
            console.log('test-update-user:', response.data.data)
            context.commit('updateUser', response.data.data)
        })
    }
}

const getters = {
    upperName(state){
        // 全转为 大写
        return state.userInfo.name.toUpperCase();
    },
    addExtName(state){
        return state.userInfo.name.toUpperCase() + '_this_ext';
    },
}

export default {
    namespaced:true,
    state,
    mutations,
    actions,
    getters,
}