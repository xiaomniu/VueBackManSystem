import request from '@/utils/request'
// import { getToken } from '@/utils/storage'

// request.post() 的返回值 是  promise 对象
// export const register = (data) => {
//     return request.post('/user/register', data)
// }
// export const getArticles = params => request.get('/interview/query', {params:params, headers:{Authorization:`Bearer ${getToken()}`}})
//
export const getArticles = params => request.get('/interview/query', {params:params})

export const getArticleDetails = id => request.get('/interview/show', {params:{id}})

export const updateLike = id => request.post('/interview/opt', {id, optType: 1})

export const updateCollect = id => request.post('/interview/opt', {id, optType: 2})

export const getArticlesCollectOrLike = params => request.get('/interview/opt/list', {params:params})
