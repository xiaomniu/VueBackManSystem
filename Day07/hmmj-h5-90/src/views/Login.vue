<template>
    <div class="login-page">
        <van-nav-bar title="登录"/>
        <van-form @submit="onSubmit">
            <van-field
                v-model="username"
                name="username"
                label="用户名"
                placeholder="用户名"
                :rules="[
                    { required: true, message: '请填写用户名' },
                    { pattern: /^\w{5,}$/, message: '用户名必须 5 位以上' },
                ]"
            />
            <van-field
                v-model="password"
                type="password"
                name="password"
                label="密码"
                placeholder="密码"
                :rules="[
                    { required: true, message: '请填写密码' },
                    { pattern: /^\w{6,}$/, message: '密码必须 6 位以上' },
                ]"
            />
            <div style="margin: 16px;">
                <!-- <van-button color="#07c160" round block type="info" native-type="submit">登录</van-button> -->
                <van-button block type="info" native-type="submit">登录</van-button>
            </div>
            <router-link class="link" to="/register">没账号，去注册</router-link>
        </van-form>
    </div>
</template>

<script>
import { login } from '@/api/user';
import { setToken } from '@/utils/storage'

export default{
    name : 'LoginPage',
    data() {
        return {
        username: '',
        password: '',
        };
    },
    methods: {
        async onSubmit(values) {
            console.log('submit', values);
            // const res = await request.post('/user/register', values)
            // request.post('/user/register', {
            //     username : this.username,
            //     password : this.password
            // })
            // try{
                // 发送请求登录
                const res = await login(values);
                console.log(res)
                // 登录成功
                // 保存 token 到本地
                // localStorage.setItem('yoyo-vant-h5-90-token', res.data.data.token)
                setToken(res.data.data.token)
                // 提示用户成功
                this.$toast.success('登录成功')
                // 跳转到首页
                this.$router.push('/')
            // } catch(e){
            //     // 登录失败
            //     // 提示用户失败
            //     console.dir(e)
            //     this.$toast.fail(e.response.data.message)
            // }
        },
    },
}
</script>

<style lang="less" scoped>
.link{
    color : #069;
    font-size: 12px;
    padding-right: 20px;
    float: right;
}
</style>