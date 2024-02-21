import axios from 'axios'
import { Toast } from 'vant';
import { delToken, getToken } from './storage';
import router from '@/router';

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
    const token = getToken();
    if (token){
      config.headers.Authorization = `Bearer ${token}`;
    }
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
    console.dir(error)
    if (error.response){
      if (error.response.status === 401){
        // 所有的 401 都表示 token 有问题，只要 token 有问题 就需要做以下事情：
        // 1. 清空 token
        delToken();
        // 2. 提示用户
        Toast.fail('请您重新登录')
        // 3. 跳转到登录页
        router.push('/login')
      } else {
        console.log(error.response.data.message)
        // 只有在组件内 才能 使用 this.$toast
        // this.$toast.fail(error.response.data.message)
        // 其他地方需要按需导入后 使用
        Toast.fail(error.response.data.message)
      }
    }
    return Promise.reject(error);
  });

export default instance