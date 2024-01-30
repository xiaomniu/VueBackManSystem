<template>
    <!-- <div class="base-select" @change="$emit('changeCity', $event.target.value)"> -->
    <div class="base-select" @change="hChange">
        <select :value="cityId">
            <option value="101">北京</option>
            <option value="102">上海</option>
            <option value="103">武汉</option>
            <option value="104">广州</option>
            <option value="105">深圳</option>
        </select>
    </div>
</template>

<script>
export default{
    name:'Base-Select',
    props : {
        cityId:{
            type : String,
            required : true,
        }
    },
    methods:{
        hChange(e){
            console.log(e.target.value)
            this.$emit('changeCity', e.target.value)
        }
    }
}
</script>
<style>
</style>