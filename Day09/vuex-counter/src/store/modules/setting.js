// 子模块 同样 也具备 四个核心成员：state mutations actions getters
// 需要向外默认导出一个对象，包含 上面 四个成员

const state = {
    theme:'dark',
    desc:'项目的描述信息'
}

const mutations = {
    updateUser(state, user){
        console.log('setting')
        state.userInfo = user
    }
}

const actions = {

}

const getters = {

}

export default {
    namespaced:true,
    state,
    mutations,
    actions,
    getters,
}