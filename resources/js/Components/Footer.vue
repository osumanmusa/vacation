<script setup>
import { Head, Link } from '@inertiajs/vue3';
import { ref,  onMounted  } from 'vue';
let showMenu = ref(false);
    const toggleNav = () => (showMenu.value = !showMenu.value);
</script>
<template>
<section class="footer-bg p-16">
<div class="flex flex-wrap lg:grid md:grid-cols-12 md:gap-6 justify-center lg:px-40">
    <div class="col-span-4 max-w-sm overflow-hidden text-white">
        <h1>
            <img src="/img/logo.png" class="py-8"/>
        </h1>
        <p>
            A trusted online travel agency offering vacation packages, hotels, and event tickets in the most popular travel destinations.
        </p>
        <div class="py-5">
        <p >
            Email: <span class="tems-text">help@vacation8.com </span>
        </p>
        <p>
            Website:<span class="tems-text"> vacation8.com </span>
        </p>
        <p>
            Phone: 1-877-218-8232
        </p>
        </div>
        <div class="py-3">
        <p class="tems-text" >Press Privacy Promise Refunds Terms </p>
        </div>
        <div class="py-3">© 2023 vacation8.com</div>
    </div>
    <div class=" col-span-4 max-w-sm overflow-hidden text-white ">
        <div class=" grid-item"  >
        <h1 class="py-8 font-bold text-2xl">
           Links
        </h1>
        <p class=""><a href="">Home</a></p>
        <p class=""><a href="">Packages</a></p>
        <p class=""><a href="">Support</a></p>
        </div>
    </div>
    <div class="col-span-4 max-w-sm overflow-hidden text-white px-16">
        <h1 class="py-8 font-bold text-2xl">
           Socials
        </h1>
        <div>
            <a href="">
            <svg class="absolute" xmlns="http://www.w3.org/2000/svg" width="27" height="27" viewBox="0 0 16 16" fill="none">
            <circle cx="8" cy="8" r="8" transform="matrix(-1 0 0 1 16 0)" fill="white"/>
            </svg>
            <i class="relative fa-brands fa-twitter text-black p-1.5 "></i> Twitter     
            </a>  
        </div>
        <div class="py-4">
            <a href="">
            <svg class="absolute" xmlns="http://www.w3.org/2000/svg" width="27" height="27" viewBox="0 0 16 16" fill="none">
            <circle cx="8" cy="8" r="8" transform="matrix(-1 0 0 1 16 0)" fill="white"/>
            </svg>
            <i class="relative fa-brands fa-instagram text-black p-1.5 "></i> Instagram   
            </a>    
        </div>
        <div class="py-1">
            <a href="">
            <svg class="absolute" xmlns="http://www.w3.org/2000/svg" width="27" height="27" viewBox="0 0 16 16" fill="none">
            <circle cx="8" cy="8" r="8" transform="matrix(-1 0 0 1 16 0)" fill="white"/>
            </svg>
            <i class="relative fa-brands fa-facebook text-black p-1.5 "></i> Facebook     
            </a>  
        </div>

    </div>
</div>
</section>
	
</template>
<style scoped>
.tems-text{
    color: #AD0909;
}
.grid-item{
    
    display: grid ;
        align-items: center;
        justify-content: center;
}
.footer-bg{
    background: #11191E;
}

</style>