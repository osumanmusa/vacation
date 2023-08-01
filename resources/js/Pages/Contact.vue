<script setup>
import { Head, Link } from "@inertiajs/vue3";
import CartNav from "../Components/CartNav.vue";
import Footer from "../Components/Footer.vue";
import { ref, onMounted } from "vue";



</script>

<template>
    <Head title="Welcome" />

            <CartNav />
<section class="py-20  ">

<Section class="lg:mx-40">

<div class="grid gap-0  md:grid-cols-2 py-3 px-4"> 
<div class=" max-w-full p-4 bg-white border shadow-sm ">
    <div class="px-6">
    <h5 class="mb-2 text-2xl tracking-tight text-gray-900 dark:text-white">Send us a Message</h5>
   <form> 
        <div class="py-3" >
            <label for="input-label" class="block text-sm  mb-2 dark:text-white">Your Name</label>
            <input type="text" id="title"  class="py-2 px-4 block w-full border-gray-300 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400" >
        </div>
        
        <div class="py-3" >
            <label for="input-label" class="block text-sm  mb-2 dark:text-white">Your Email</label>
            <input type="text" id="title"  class="py-2 px-4 block w-full border-gray-300 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400" >
        </div>
        
        <div class="py-3" >
            <label for="input-label" class="block text-sm  mb-2 dark:text-white">Your Message</label>
            <textarea type="text" id="title"  class="py-20 px-4 block w-full border-gray-300 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400" />
        </div>
    </form>
    </div>
</div>    
<div class=" max-w-full p-4 bg-black text-white border border-0 shadow-md ">
    <div class="px-6 py-6">
    <h5 class="mb-2 text-2xl tracking-tight text-white ">Reach Out</h5>
    <hr class=" h-px my-2 bg-gray-500 border-0 " />
    <p class="py-3" ><i class="fa-solid fa-phone text-2xl"></i><span class="px-8 text-base"> 1-778-821-3343</span></p>
    <p  class="py-3" ><i class="fa-solid fa-envelope text-2xl"></i><span class="px-8 text-base"> help@vacation.com</span></p>
    <p  class="py-3" ><img src="/img/chat.png" class="inline-flex"/><span class="px-8 text-base"> live chat</span></p>
    </div>
</div>    

</div>



</Section>


</section>
  
    <Footer class="" />
</template>

<style scoped>

</style>
