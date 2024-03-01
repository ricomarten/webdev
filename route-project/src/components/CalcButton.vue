<template>
    <button type="button" 
    @click="alertNumber"
    class="tombol_angka">{{ angka  }}</button>
</template>

<script>
export default{
    name:"MyButton",
    props:{
        angka:Number
    },

    data(){
        return{
            nilai:0
        }
    },
    emits:["alert"],
    methods:{
        alertNumber(){
            this.nilai=this.angka
            this.$emit("alert",
            alert(this.nilai))
            
        }
    }
}
</script>
<style scoped>
.tombol_angka{
        @apply w-full h-16 outline-none focus:outline-none hover:bg-indigo-700 hover:bg-opacity-20 text-white text-xl font-light
    }
</style>