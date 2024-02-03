import axios from 'axios'

// 封装 request.js 步骤
/**
 * 1. 装包   npm i axios
 * 2. 新建一个 request.js 文件
 * 3. 创建 axios 实例（进行一些配置）
 * 4. 导出新创建的 axios 实例
 * 
 * 封装的原因：
 * 1. 原始用的用法  不方便
 * 2. 修改了 axios 这个对象，以后项目中所有用到的 axios 都被修改了，不建议 直接 修改  axios 对象
 * 建议：新建一个 axios 对象 来配置
 * axios.defaults.baseURL = 'http://interview-api-t.itheima.net/'
 * axios.defaults.timeout = 5000       // 如果请求超时 5 秒还没有相应 就 直接中断
 */


// 创建一个 axios 对象，功能 和 axios 完全一样，但起到了隔离的作用
const instance = axios.create({
    baseURL: 'http://interview-api-t.itheima.net/h5/',
    timeout: 5000,  // 如果请求超过 5 秒还没响应 就 直接中断
    // headers: {'X-Custom-Header': 'foobar'}
  });

  // 添加请求拦截器
  instance.interceptors.request.use(function (config) {
    // 在发送请求之前做些什么
    return config;
  }, function (error) {
    // 对请求错误做些什么
    return Promise.reject(error);
  });

// 添加响应拦截器
instance.interceptors.response.use(function (response) {
    // 2xx 范围内的状态码都会触发该函数。
    // 对响应数据做点什么
    return response;
  }, function (error) {
    // 超出 2xx 范围的状态码都会触发该函数。
    // 对响应错误做点什么
    return Promise.reject(error);
  });

export default instance