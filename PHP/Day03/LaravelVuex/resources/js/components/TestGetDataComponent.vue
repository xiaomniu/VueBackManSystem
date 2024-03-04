<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Example Component</div>

                    <div class="card-body">
                        I'm an example component.
                    </div>
                </div>
            </div>
        </div>
        <div class="left-container">
            <hr>
            <p>姓名：{{ data.name }}</p>
            <p>年龄：{{ data.age }}</p>
            <p>关键字：{{ keyword }}</p>
        </div>
    </div>
</template>

<script>
    export default {
        props:[
            'data_in',
            'keyword_in'
        ],
        data(){
            return {
                data: {
                    name : '',
                    aget : 0,
                },
                keyword: '',
            }
        },
        created(){
            console.log('creatd ：', this.data_in, this.keyword_in);
            this.data = this.data_in;
            this.keyword = this.keyword_in;
        },
        mounted() {
            console.log('TestGetDataComponent.vue mounted.')
        },
    }
</script>
