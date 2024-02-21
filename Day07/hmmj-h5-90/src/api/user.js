import request from '@/utils/request'

// request.post() 的返回值 是  promise 对象
// export const register = (data) => {
//     return request.post('/user/register', data)
// }
export const register = data => request.post('/user/register', data)
export const login = data => request.post('/user/login', data)
export const getUserInfo = () => request.get('/user/currentUser')

