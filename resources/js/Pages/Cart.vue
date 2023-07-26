<script setup>
import { Head, Link } from "@inertiajs/vue3";
import CartNav from "../Components/CartNav.vue";
import Footer from "../Components/Footer.vue";
import { ref, onMounted } from "vue";


const currentCNo = ref(0);
const carts = [
	{"code": "AF", "code3": "AFG", "name": "Afghanistan", "number": "004"},
	{"code": "AL", "code3": "ALB", "name": "Albania", "number": "008"},
	{"code": "DZ", "code3": "DZA", "name": "Algeria", "number": "012"},
	{"code": "AS", "code3": "ASM", "name": "American Samoa", "number": "016"},
	{"code": "AD", "code3": "AND", "name": "Andorra", "number": "020"},
	{"code": "AO", "code3": "AGO", "name": "Angola", "number": "024"},
];
</script>

<template>
    <Head title="Welcome" />

            <CartNav />
<section class="py-20  ">
<div class="flex justify-center">
<ul class=" inline-flex  lg:w-[50vw]  text-sm font-medium text-center text-gray-500 dark:text-gray-400 sm:text-base">
    <li class="flex md:w-full items-center text-blue-600 dark:text-blue-500 sm:after:content-[''] after:w-full after:h-1 after:border-b after:border-gray-200 after:border-1 after:hidden sm:after:inline-block after:mx-6 xl:after:mx-10 dark:after:border-gray-700">
        <span class="flex items-center after:content-['/'] sm:after:hidden after:mx-2 after:text-gray-200 dark:after:text-gray-500">
            <i class="fa-solid fa-cart-shopping text-3xl is-active"></i>
        </span>
    </li>
    <li class="flex md:w-full items-center after:content-[''] after:w-full after:h-1 after:border-b after:border-gray-200 after:border-1 after:hidden sm:after:inline-block after:mx-6 xl:after:mx-10 dark:after:border-gray-700">
        <span class="flex items-center after:content-['/'] sm:after:hidden after:mx-2 after:text-gray-200 dark:after:text-gray-500">
            <span class="mr-2"><i class="fa fa-user  text-3xl in-active" ></i></span>
        </span>
    </li>
    <li class="flex items-center w-full after:content-[''] after:w-full after:h-1 after:border-b after:border-gray-200 after:border-1 after:hidden sm:after:inline-block after:mx-6 xl:after:mx-10 dark:after:border-gray-700">
        <span class="flex items-center after:content-['/'] sm:after:hidden after:mx-2 after:text-gray-200 dark:after:text-gray-500">
        <span class="mr-2"><i class="fa-regular fa-credit-card text-3xl in-active"></i></span>
        </span>
    </li>
    <li class="flex items-center after:content-[''] after:w-full after:h-1 after:border-b after:border-gray-200 after:border-1 after:hidden sm:after:inline-block after:mx-6 xl:after:mx-10 dark:after:border-gray-700">
        <span class="flex items-center after:content-['/'] sm:after:hidden after:mx-2 after:text-gray-200 dark:after:text-gray-500">
        <span class="mr-2">
            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="31" viewBox="0 0 50 50" fill="none">
                <g clip-path="url(#clip0_1_722)">
                <path d="M25 2.0835L6.25 10.4168V22.9168C6.25 34.4793 14.25 45.2918 25 47.9168C35.75 45.2918 43.75 34.4793 43.75 22.9168V10.4168L25 2.0835ZM20.8333 35.4168L12.5 27.0835L15.4375 24.146L20.8333 29.521L34.5625 15.7918L37.5 18.7502L20.8333 35.4168Z" fill="#EB3223" fill-opacity="0.5"/>
                </g> <defs> <clipPath id="clip0_1_722"> <rect width="50" height="50" fill="white"/> </clipPath> </defs>
            </svg>
        </span>
        </span>
    </li>
</ul>
</div>
<div class="">
<h1 class=" flex justify-center pt-12 pb-6">
    <span class="text-xl">Cart summary</span>
</h1>    
<hr class="h-px my-2 bg-gray-300 border-0 lg:mx-80 mx-20" />
<div class="lg:px-80 px-12 py-4">
            <p class="text-base py-1">Hotel</p>
            <div class="py-1" style="color: #aba6a6">
                <p>Rio All-Suite Hotel & Casino</p>
            </div>
            <p class="text-base py-1">Room</p>
            <div class="py-1" style="color: #aba6a6">
                <p>Superior Room, 1 Double Bed</p>
            </div>
            <p class="text-base py-1">Arrival & departure dates</p>
            <div class="py-1" style="color: #aba6a6">
                <p>31st May 2023 - 02 June 2023</p>
            </div>
    
</div>

<hr class="h-px my-2 bg-gray-300 border-0 lg:mx-80 mx-20" />
<div class="lg:px-80 px-12 py-4">
            <p class="text-base py-1">Price details</p>
            <div class="flex grid grid-cols-2">
            <div class="text-base py-1" style="color: #aba6a6"><span>$106 x 2  nights</span></div>
            <div class="text-base py-1" style="color: #aba6a6"><span >$212.00</span></div>

            <div class="text-base py-1" style="color: #aba6a6"><span>Resort fee</span></div>
            <div class="text-base py-1" style="color: #aba6a6"> <span >$100.00</span></div>

            <div class="text-base py-1" style="color: #aba6a6"><span>Tax</span> </div>
            <div class="text-base py-1" style="color: #aba6a6"><span >$50.00</span></div>

            <div class="text-base py-1" ><span>Total Fee</span></div>
            <div class="text-base py-1" > <span >$362.00</span></div>
                
            </div>
</div>
<div class=" px-12 py-4">

        <div class="flex flex-row  justify-end py-2">
        <button class="text-white  font-medium rounded-sm text-sm sm:w-auto px-5 py-2.5 text-center  py-4 lg:mr-60" style="background: #AD0909;">Continue to checkout</button>
        </div>
</div>


</div>




<div class="">
    <div class=" flex justify-center pt-12 pb-6">
    <p class="text-xl">Who is checking in ?</p>    
</div>
<hr class="h-px my-2 bg-gray-300 border-0 lg:mx-80 mx-20" />
<div class="flex justify-center">
    <p style="color: #aba6a6" class="py-2 px-10">This information would be sent directly to the hotel so kindly make sure you fill in the right details</p>
</div>

<div class=" lg:mx-80 lex justify-center px-10">
    <form>
        <div class="grid gap-4  md:grid-cols-2 py-5 ">
        <div >
            <label for="input-label" class="block text-sm  mb-2 dark:text-white">User Name</label>
            <input type="text" id="title"  class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400" >
        </div>
        <div >
            <label for="input-label" class="block text-sm  mb-2 dark:text-white">User Name</label>
            <input type="text" id="title"  class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400" >
        </div>

        </div>
        <div class="grid gap-4  md:grid-cols-2 py-3 ">
        <div >
            <label for="input-label" class="block text-sm  mb-2 dark:text-white">User Name</label>
            <input type="text" id="title"  class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400" >
        </div>
        <div >
            <label for="input-label" class="block text-sm  mb-2 dark:text-white">User Name</label>
            <input type="text" id="title"  class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400" >
        </div>

        </div>

        <div class="py-2 inline-flex">
            <input type="checkbox" id="title"  class="my-0.5 block border-gray-200 text-sm focus:border-blue-500 focus:ring-blue-500 " >
        <span class="px-2"> I agree to attend the 90 minute presentation</span>
        </div>


        <div class="flex justify-end py-2">
        <button class="text-white  font-medium rounded-sm text-sm sm:w-auto px-5 py-2.5 text-center  py-4 " style="background: #AD0909;">Continue to payment</button>
        </div>



    </form>
</div>
</div>



<div class="">
<div class="lg:mx-80  justify-center px-10 pt-12 pb-6">
    <p class="text-xl">Payment Details</p>    
</div>
<hr class="h-px my-2 bg-gray-300 border-0 lg:mx-80 mx-20" />
<div class="lg:mx-80  justify-center lg:px-0">
    <p style="color: #aba6a6" class="py-2 px-10">Safe, secure transactions. Your personal information is protected.</p>
</div>
<div class="lg:mx-80  justify-center px-8 py-3">
<span class="inline-flex px-2"><img src="/img/american.png"/></span>
<span class="inline-flex px-2"><img src="/img/master.png"/></span>
<span class="inline-flex px-2"><img src="/img/visa.png"/></span>
</div>
<div class=" lg:mx-80  justify-center px-10">
    <form>
        <div class="grid gap-4  md:grid-cols-2 py-5 ">
        <div >
            <label for="input-label" class="block text-sm  mb-2 dark:text-white">First Name</label>
            <input type="text" id="title"  class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400" >
        </div>
        <div >
            <label for="input-label" class="block text-sm  mb-2 dark:text-white">Last Name</label>
            <input type="text" id="title"  class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400" >
        </div>

        </div>
        <div class="grid gap-4  md:grid-cols-1 py-3 ">
        <div >
            <label for="input-label" class="block text-sm  mb-2 dark:text-white">Card Number</label>
            <input type="text" id="title"  class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400" >
        </div>
        </div>
        <div class="grid gap-4  md:grid-cols-2 py-5 ">
        <div >
            <label for="input-label" class="block text-sm  mb-2 dark:text-white">Expiration (MM/YY)</label>
            <input type="text" id="title"  class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400" >
        </div>
        <div >
            <label for="input-label" class="block text-sm  mb-2 dark:text-white">Security Code</label>
            <input type="text" id="title"  class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400" >
        </div>

        </div>
        <div class="grid gap-4  md:grid-cols-1 py-5">
            <p class="text-xl">Payment Details</p>    
        </div>
        <hr class="bg-gray-300 " />
        <div class="grid gap-4  md:grid-cols-1 py-5">
    <p style="color: #aba6a6" class="py-2 ">Please enter your billing address exactly as it appears on your credit card statement.</p>
</div>
        <div class="grid gap-4  md:grid-cols-2 py-5 ">
        <div >
            <label for="input-label" class="block text-sm  mb-2 dark:text-white">Street Address</label>
            <input type="text" id="title"  class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400" >
        </div>
        <div >
            <label for="input-label" class="block text-sm  mb-2 dark:text-white">Country</label>
            <input type="text" id="title"  class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400" >
        </div>

        </div>
        <div class="grid gap-4  md:grid-cols-3 py-5 ">
        <div >
            <label for="input-label" class="block text-sm  mb-2 dark:text-white">City</label>
            <input type="text" id="title"  class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400" >
        </div>
        <div >
            <label for="input-label" class="block text-sm  mb-2 dark:text-white">Postal Code</label>
            <input type="text" id="title"  class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400" >
        </div>
        <div >
            <label for="input-label" class="block text-sm  mb-2 dark:text-white">State</label>
            <input type="text" id="title"  class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400" >
        </div>

        </div>
        <div class="flex justify-end py-6">
        <button class="text-white  font-medium rounded-sm text-sm sm:w-auto px-5 py-2.5 text-center  py-4 " style="background: #AD0909;">Complete Booking</button>
        </div>



    </form>
</div>
</div>



<div class="">
<div class="flex justify-center  px-10 pt-12 pb-2">
    <span><i class="fa-solid fa-circle-check text-green-500 text-4xl" style="color: #48742C;"></i></span>   
</div>
<div class=" lg:px-0">
    <p class="flex justify-center py-2 px-10 text-green-500 text-lg" style="color: #48742C;">Your booking has been successfully completed</p>
    <p class="flex justify-center py-1 px-10 text-green-500 text-base" style="color: #48742C;">Booking ID: HTN1234</p>
</div>
<hr class="h-px my-2 bg-gray-300 border-0 lg:mx-80 mx-20" />
<div class="lg:px-80 px-12 py-4">
            <p class="text-base py-1">Hotel</p>
            <div class="py-1" style="color: #aba6a6">
                <p>Rio All-Suite Hotel & Casino</p>
            </div>
            <p class="text-base py-1">Room</p>
            <div class="py-1" style="color: #aba6a6">
                <p>Superior Room, 1 Double Bed</p>
            </div>
            <p class="text-base py-1">Arrival & departure dates</p>
            <div class="py-1" style="color: #aba6a6">
                <p>31st May 2023 - 02 June 2023</p>
            </div>
    
</div>

<hr class="h-px my-2 bg-gray-300 border-0 lg:mx-80 mx-20" />
<div class="lg:px-80 px-12 py-2">
            <p class="text-base py-1">Guest</p>
            <div class="flex grid grid-cols-1">
            <div class="text-base py-1" style="color: #aba6a6"><span>Mark Arthur</span></div>
            </div>
</div>
<div class="lg:px-80 px-12 py-2">
            <p class="text-base py-1">Paid</p>
            <div class="flex grid grid-cols-1">
            <div class="text-base py-1" ><span>$362.00</span></div>
            </div>
</div>
<div class="lg:px-80 px-12 py-2">
            <p class="text-base py-1">Hotel Contact</p>
            <div class="flex grid grid-cols-1">
            <div class="text-base py-1" style="color: #aba6a6"><span>+1 234 567 8910</span></div>
            </div>
</div>

<div class="flex justify-center py-6">
        <button class="text-white  font-medium rounded-sm text-sm sm:w-auto px-20 py-2.5 text-center  py-4 " style="background: #AD0909;">Done</button>
        </div>
</div>
</section>
  
    <Footer class="" />
</template>

<style scoped>
.is-active{
    color: #EB3223;
}
.in-active{
    color: #f49991;
}

.p-text {
    margin-top: calc(10vh);
    padding-bottom: 4rem;
}


@media (max-width: 768px) {
    .small-width {
        width: 410px;
    }
    .hidden-small {
        display: block;
    }
    .hero-icon {
        margin-top: 15px;
    }
    .p-cad {
        top: 30%;
    }
    .p-text {
        padding-top: calc(5vh + 2rem);
        padding-bottom: 4rem;
    }
}
</style>
