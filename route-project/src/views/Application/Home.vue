<template>
    
<div class="m-2">
    <div> <button class="m-2 p-2 rounded bg-gray-700 text-teal-50 hover:bg-gray-900">Tambah data</button> </div>
    <div>
        <input type="text" v-model="cari" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Cari" required />
        <button class="m-2 p-2 rounded bg-gray-700 text-teal-50 hover:bg-gray-900" @click="getName">Cari data</button>
    </div>
    <div class="relative overflow-x-auto">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    ID
                </th>
                <th scope="col" class="px-6 py-3">
                    Nama Barang
                </th>
                <th scope="col" class="px-6 py-3">
                    Harga
                </th>
                <th scope="col" class="px-6 py-3">
                    Stok
                </th>
            </tr>
        </thead>
        <tbody>
            <tr v-for="item in dataProduct" class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{ item.id }}
                </th>
                <td class="px-6 py-4">
                    {{ item.nama }}
                </td>
                <td class="px-6 py-4">
                    Rp {{ Number(item.harga).toLocaleString("id")  }}
                
                </td>
                <td class="px-6 py-4">
                    {{ item.stok }}
                </td>
            </tr>
            
        </tbody>
    </table>
</div>
</div>

</template>
<script>
import axios from 'axios'
export default{
    name:"Aplication",
    data(){
        return{
            dataProduct:[],
            cari:''
        }
    },
    methods:{
        getList() {
            let url='http://localhost/api/product.php'
            axios.get(url).then((response) => {
                console.log(response.data)
                this.dataProduct=response.data
            })   
        },
        async getByName(){
            let url='https://localhost/api/productByname.php?'   
            let datakirim= {'nama':'baju'}
            axios.post(url,JSON.stringify(datakirim),{headers: {"Access-Control-Allow-Origin": "*"}}).then((response) => {
                console.log(response.data)
                this.dataProduct=response.data
            })   
        },

        getName(){
            var xhr = new XMLHttpRequest(); 
            let datakirim= {'nama':this.cari}
            xhr.open("POST", "http://localhost/api/productByname.php"); 
            xhr.onreadystatechange =  ()=> { 
            if (xhr.readyState === 4 ) { // readyState 4 - the request is done. 
                    if (xhr.status === 200 ) { // status 200 is a successful return. 
                        this.dataProduct=JSON.parse(xhr.responseText)
                        console.log(this.dataProduct)
                    } else { 
                    console.log("Error: " + xhr.status); 
                    } 
                } 
            }; 
            xhr.send(JSON.stringify(datakirim));  
            
        }
         
        
    },
    mounted(){
        this.getList()
        this.getName()
        //this.getByName()
    },
    watch:{
      
    }

}
</script>