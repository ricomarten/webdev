<template>
    <div class="min-w-screen min-h-screen bg-gray-100 flex items-center justify-center px-5 py-5">
        <div class="w-2/4 mx-auto rounded-xl bg-gray-100 shadow-xl text-gray-800 relative overflow-hidden">
            
            <div class="w-full h-10 bg-gradient-to-b from-gray-800 to-gray-700 flex items-end text-right">
              <div class="w-full py-1 px-6 text-md text-white font-thin">{{operation}}</div>
          </div>
          <div class="w-full h-40 bg-gradient-to-b from-gray-800 to-gray-700 flex items-end text-right">
              <div class="w-full py-5 px-6 text-6xl text-white font-thin">{{output}}</div>
          </div>
          
            <div class="w-full bg-gradient-to-b from-indigo-400 to-indigo-500">
                <div class="flex w-full">
                    <div class="w-1/4 border-r border-b border-indigo-400">
                        <button
                            class="tombol_atas">C</button>
                    </div>
                    <div class="w-1/4 border-r border-b border-indigo-400">
                        <button
                            class="tombol_atas">+/-</button>
                    </div>
                    <div class="w-1/4 border-r border-b border-indigo-400">
                        <button
                            class="tombol_atas">%</button>
                    </div>
                    <div class="w-1/4 border-r border-b border-indigo-400">
                        <button
                            class="tombol_kanan">÷</button>
                    </div>
                </div>
                <div class="flex w-full">
                    <div class="w-1/4 border-r border-b border-indigo-400">
                        <my-button  @click="show(7)" angka=7 alert></my-button>
                    </div>
                    <div class="w-1/4 border-r border-b border-indigo-400">
                        <my-button angka=8></my-button>
                          
                    </div>
                    <div class="w-1/4 border-r border-b border-indigo-400">
                        <button @click="show(9)"
                            class="tombol_angka">9</button>
                    </div>
                    <div class="w-1/4 border-r border-b border-indigo-400">
                        <button
                            class="tombol_kanan">x</button>
                    </div>
                </div>
                <div class="flex w-full">
                    <div class="w-1/4 border-r border-b border-indigo-400">
                        <button @click="show(4)"
                            class="tombol_angka">4</button>
                    </div>
                    <div class="w-1/4 border-r border-b border-indigo-400">
                        <button @click="show(5)"
                            class="tombol_angka">5</button>
                    </div>
                    <div class="w-1/4 border-r border-b border-indigo-400">
                        <button @click="show(6)"
                            class="tombol_angka">6</button>
                    </div>
                    <div class="w-1/4 border-r border-b border-indigo-400">
                        <button 
                            class="tombol_kanan">-</button>
                    </div>
                </div>
                <div class="flex w-full">
                    <div class="w-1/4 border-r border-b border-indigo-400">
                        <button @click="show(1)"
                            class="tombol_angka">1</button>
                    </div>
                    <div class="w-1/4 border-r border-b border-indigo-400">
                        <button @click="show(2)"
                            class="tombol_angka">2</button>
                    </div>
                    <div class="w-1/4 border-r border-b border-indigo-400">
                        <button @click="show(3)"
                            class="tombol_angka">3</button>
                    </div>
                    <div class="w-1/4 border-r border-b border-indigo-400">
                        <button  @click="add()"
                            class="tombol_kanan">+</button>
                    </div>
                </div>
                <div class="flex w-full">
                    <div class="w-1/4 border-r border-indigo-400">
                        <button @click="show(0)"
                            class="tombol_angka">0</button>
                    </div>
                    <div class="w-1/4 border-r border-indigo-400">
                    <button
                        class="tombol_angka">.</button>
                </div>
                <div class="w-2/4 border-r border-indigo-400">
                    <button
                        class="w-full h-16 outline-none focus:outline-none bg-indigo-700 bg-opacity-30 hover:bg-opacity-40 text-white text-xl font-light">=</button>
                </div>
            </div>
        </div>
    </div>
</div></template>
<style>
    
    .tombol_atas{
        @apply w-full h-16 outline-none focus:outline-none hover:bg-indigo-700 hover:bg-opacity-20 text-white text-opacity-50 text-xl font-light
    }
    .tombol_kanan{
        @apply w-full h-16 outline-none focus:outline-none bg-indigo-700 bg-opacity-10 hover:bg-opacity-20 text-white text-2xl font-light
    }
</style>
<script>
import MyButton from "../components/CalcButton.vue"
export default{
    name:"Calculator",
    components:{MyButton},
    data(){
        return{
            temp:0,
            output:"",
            operator:"",
            hasil:0,
            operation:""
        }
    },
    methods:{
        show(val){
            if(this.temp!==0){
                this.output=val
            }else{
                this.output=this.output+val
            }
           
            this.operation=this.operation+val
        },
        add(){
            
            this.operation=this.operation+"+"
            if (this.operator==""){
                    this.temp=parseFloat(this.output)
                    this.operator="add"        
            }
            else{
                if (this.operator=="add"){ 
                    this.hasil=parseFloat(this.output)+this.temp
                    this.temp=this.hasil
                    this.output=this.hasil
                }
                
            }
            console.log(this.output)
            console.log(this.temp)
            console.log(this.hasil)
          
        }
    }

}

</script>
