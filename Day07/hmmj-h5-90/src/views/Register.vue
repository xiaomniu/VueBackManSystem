<template>
    <div class="register-page">
        <van-nav-bar title="标题"/>
        <van-form @submit="onSubmit">
            <van-field
                v-model="username"
                name="username"
                label="用户名"
                placeholder="用户名"
                :rules="[{ required: true, message: '请填写用户名' }]"
            />
            <van-field
                v-model="password"
                type="password"
                name="password"
                label="密码"
                placeholder="密码"
                :rules="[{ required: true, message: '请填写密码' }]"
            />
            <div style="margin: 16px;">
                <van-button color="#07c160" round block type="info" native-type="submit">提交</van-button>
            </div>
            <router-link class="link" to="/login">有账号，去登陆</router-link>
        </van-form>
    </div>
</template>

<script>
import request from '@/utils/request.js'

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
            const res = await request.post('/user/register', values)
            // request.post('/user/register', {
            //     username : this.username,
            //     password : this.password
            // })
            console.log(res)
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