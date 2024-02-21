<template>
    <div class="register-page">
        <van-nav-bar title="注册"/>
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
                <van-button round block type="primary" native-type="submit">注册</van-button>
            </div>
            <router-link class="link" to="/login">有账号，去登陆</router-link>
        </van-form>
    </div>
</template>

<script>
// import request from '@/utils/request.js'
import {register} from '@/api/user'

export default{
    name : 'RegisterPage',
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
                // 发送请求注册
                const res = await register(values);
                console.log(res)
                // 注册成功
                // 提示用户成功
                this.$toast.success('注册成功')
                // 跳转到登录页
                this.$router.push('/login')
            // } catch(e){
            //     // 注册失败
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