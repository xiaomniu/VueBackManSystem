// 该模块提供三个方法，专门用于操作 Token
const KEY='yoyo-vant-h5-90-token'

export const setToken = token => {
    localStorage.setItem(KEY, token)
}
export const getToken = () => {
    return localStorage.getItem(KEY)
}
export const delToken = () => localStorage.removeItem(KEY)