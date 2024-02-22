// 子模块 同样 也具备 四个核心成员：state mutations actions getters
// 需要向外默认导出一个对象，包含 上面 四个成员

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
    }
}

const getters = {
    upperName(state){
        // 全转为 大写
        return state.userInfo.name.toUpperCase();
    }
}

export default {
    namespaced:true,
    state,
    mutations,
    actions,
    getters,
}