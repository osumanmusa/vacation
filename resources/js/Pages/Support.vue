<script setup>
import { Head, Link } from "@inertiajs/vue3";
import CartNav from "../Components/CartNav.vue";
import Footer from "../Components/Footer.vue";
import { Modal } from 'flowbite';
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

onMounted(() => {
    const $buttonElement = document.querySelector('#button');
    const $modalElement = document.querySelector('#modal');
    const $closeButton = document.querySelector('#closeButton');

    const modalOptions = {
        backdropClasses: 'bg-gray-900 bg-opacity-50 dark:bg-opacity-80 fixed inset-0 z-40'
    }

    if ($modalElement) {
        const modal = new Modal($modalElement, modalOptions);
        $buttonElement.addEventListener('click', () => modal.toggle());
        $closeButton.addEventListener('click', () => modal.hide());
        
        // programmatically show
        // modal.show();
    }

})
</script>

<template>
    <Head title="Welcome" />

            <CartNav />
<section class="py-20  ">
    <div>
            <div class="lg:mx-80  justify-center px-10  pb-6">
                <span class="text-2xl font-bold">Welcome to the Help Center</span> 
            </div>
            <hr class="h-px my-2 bg-gray-300 border-0 lg:mx-80  mx-20" />
    </div>
<Section class="lg:mx-80">
<div class="grid gap-4  md:grid-cols-1 py-3 px-4">
    
<form>   
    <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search help articles</label>
    <div class="relative ">
        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
            </svg>
        </div>
        <input type="search" id="default-search" class=" py-3 pl-10 text-sm w-full text-gray-900 border border-gray-300 rounded-lg bg-white focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 " placeholder="Search Mockups, Logos..." required>
    </div>
</form>
</div>


<div class="grid gap-4  md:grid-cols-3 py-3 px-4"> 
<div class=" max-w-full p-4 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 ">
    <h5 class="mb-2 text-base font-bold tracking-tight text-gray-900 dark:text-white">Refunds and Charges</h5>
    <hr class=" h-px my-2 bg-gray-500 border-0 " />
    <a href="#" class="text-base text-gray-700 " id="button">Refund timelines, policies & processes <span><i class="fa-solid fa-angle-right"></i></span></a>
    <p class="text-base text-gray-700 ">Get a receipt for your booking <span><i class="fa-solid fa-angle-right"></i></span></p>
    <p class="text-base text-gray-700 ">Payment security and options <span><i class="fa-solid fa-angle-right"></i></span> </p>
</div>    
<div class=" max-w-full p-4 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 ">
    <h5 class="mb-2 text-base font-bold tracking-tight text-gray-900 dark:text-white">Packages</h5>
    <hr class=" h-px my-2 bg-gray-500 border-0 " />
    <p class="text-base text-gray-700 ">Refund timelines, policies & processes <span><i class="fa-solid fa-angle-right"></i></span></p>
    <p class="text-base text-gray-700 ">Get a receipt for your booking <span><i class="fa-solid fa-angle-right"></i></span></p>
    <p class="text-base text-gray-700 ">Payment security and options <span><i class="fa-solid fa-angle-right"></i></span></p>
</div>    
<div class=" max-w-full p-4 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 ">
    <h5 class="mb-2 text-base font-bold tracking-tight text-gray-900 dark:text-white">Account</h5>
    <hr class=" h-px my-2 bg-gray-500 border-0 " />
    <p class="text-base text-gray-700 ">Refund timelines, policies & processes <span><i class="fa-solid fa-angle-right"></i></span></p>
    <p class="text-base text-gray-700 ">Get a receipt for your booking <span><i class="fa-solid fa-angle-right"></i></span></p>
    <p class="text-base text-gray-700 ">Payment security and options<span><i class="fa-solid fa-angle-right"></i></span></p>
</div>
</div>

<div class="grid gap-4  md:grid-cols-3 py-3 px-4"> 
<div class=" max-w-full p-4 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 ">
    <h5 class="mb-2 text-base font-bold tracking-tight text-gray-900 dark:text-white">Lodging</h5>
    <hr class=" h-px my-2 bg-gray-500 border-0 " />
    <p class="text-base text-gray-700 ">Refund timelines, policies & processes <span><i class="fa-solid fa-angle-right"></i></span></p>
    <p class="text-base text-gray-700 ">Get a receipt for your booking <span><i class="fa-solid fa-angle-right"></i></span></p>
    <p class="text-base text-gray-700 ">Payment security and options <span><i class="fa-solid fa-angle-right"></i></span> </p>
</div>    
<div class=" max-w-full p-4 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 ">
    <h5 class="mb-2 text-base font-bold tracking-tight text-gray-900 dark:text-white">Security</h5>
    <hr class=" h-px my-2 bg-gray-500 border-0 " />
    <p class="text-base text-gray-700 ">Refund timelines, policies & processes <span><i class="fa-solid fa-angle-right"></i></span></p>
    <p class="text-base text-gray-700 ">Get a receipt for your booking <span><i class="fa-solid fa-angle-right"></i></span></p>
    <p class="text-base text-gray-700 ">Payment security and options <span><i class="fa-solid fa-angle-right"></i></span></p>
</div>    
<div class=" max-w-full p-4 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 ">
    <h5 class="mb-2 text-base font-bold tracking-tight text-gray-900 dark:text-white">Privacy</h5>
    <hr class=" h-px my-2 bg-gray-500 border-0 " />
    <p class="text-base text-gray-700 ">Refund timelines, policies & processes <span><i class="fa-solid fa-angle-right"></i></span></p>
    <p class="text-base text-gray-700 ">Get a receipt for your booking <span><i class="fa-solid fa-angle-right"></i></span></p>
    <p class="text-base text-gray-700 ">Payment security and options<span><i class="fa-solid fa-angle-right"></i></span></p>
</div>
</div>


<div class="grid gap-4  md:grid-cols-3 py-3 px-4"> 
<div class=" max-w-full p-4 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 ">
    <h5 class="mb-2 text-base font-bold tracking-tight text-gray-900 dark:text-white">Destination Services</h5>
    <hr class=" h-px my-2 bg-gray-500 border-0 " />
    <p class="text-base text-gray-700 ">Refund timelines, policies & processes <span><i class="fa-solid fa-angle-right"></i></span></p>
    <p class="text-base text-gray-700 ">Get a receipt for your booking <span><i class="fa-solid fa-angle-right"></i></span></p>
    <p class="text-base text-gray-700 ">Payment security and options <span><i class="fa-solid fa-angle-right"></i></span> </p>
</div>    
<div class=" max-w-full p-4 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 ">
    <h5 class="mb-2 text-base font-bold tracking-tight text-gray-900 dark:text-white">Cruise</h5>
    <hr class=" h-px my-2 bg-gray-500 border-0 " />
    <p class="text-base text-gray-700 ">Refund timelines, policies & processes <span><i class="fa-solid fa-angle-right"></i></span></p>
    <p class="text-base text-gray-700 ">Get a receipt for your booking <span><i class="fa-solid fa-angle-right"></i></span></p>
    <p class="text-base text-gray-700 ">Payment security and options <span><i class="fa-solid fa-angle-right"></i></span></p>
</div>    
<div class=" max-w-full p-4 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 ">
    <h5 class="mb-2 text-base font-bold tracking-tight text-gray-900 dark:text-white">Travel Alerts</h5>
    <hr class=" h-px my-2 bg-gray-500 border-0 " />
    <p class="text-base text-gray-700 ">Refund timelines, policies & processes <span><i class="fa-solid fa-angle-right"></i></span></p>
    <p class="text-base text-gray-700 ">Get a receipt for your booking <span><i class="fa-solid fa-angle-right"></i></span></p>
    <p class="text-base text-gray-700 ">Payment security and options<span><i class="fa-solid fa-angle-right"></i></span></p>
</div>
</div>

</Section>


</section>
  
    <Footer class="" />

<!-- Main modal -->

<div id="modal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative w-full max-w-2xl max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white py-6 mb-4 rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-start p-3 rounded-t dark:border-gray-600">
                    <button id="closeButton" type="button" class="inline-flex text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white">
                        <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>  
                    </button>
                    <h3 class="text-sm ml-9  text-black dark:text-white">
                        Help center
                    </h3>
                </div>
                
<hr class="h-px my-1 bg-gray-300 border-0 mx-20" />
                <!-- Modal body -->
                <div class="flex items-start ml-20">
                    <p class="py-4 text-lg">Refund timelines, policies & processes</p>
                </div>
                
              <div class="mx-20">
                <div class=" space-y-6">
                    <div >
                        <p class="t-color text-base text-jusify">Due to COVID-19, most refunds for flights, including when they’re part of a package, are issued within 12 weeks. Some refunds could take a bit longer, depending on the airline.
Refunds for hotel, car, or activity, including when they’re part of a package, are processed within our normal timeframe, 24 hours from the cancellation request. Keep in mind, your bank or payment service determines when the funds become available in your account.
In other circumstances not impacted by COVID-19, here’s what you should know about refund timelines:
</p>
                        <p class="t-color text-base pt-4 text-justify">
How to track your refund
Have a refund coming? We’ve made it easy for you to track when it’ll arrive. Click Chat now and our Virtual Agent will guide you to your refund status.
<p>How it works</p>
<ul class=" space-y-1 list-disc list-inside">
    <li>
    It may take up to 24 hours to process your refund. Once that has happened, your bank or payment service (such as PayPal) will take care of the rest. Just know that it may take them up to 7 days to post the credit to your account, and up to 2 billing cycles to show the credit on your statement.
    </li>
    <li>
        You’ll see the refund on your original method(s) of payment. So, say you paid using your debit card -- that’s where the money will be refunded. We’ll send you an email with the nitty-gritty about your refund amount, and how and when you'll get it.

    </li>
    <li>
        
If your credit card statement includes a charge from a third party (such as a low-cost airline, rental car company, or cruise line), you’ll receive your refund from them, not from us. If this is the case, get in touch with that third party to ask any questions about refunds.

    </li>
    <li>
        If you've been charged a deposit or partial payment, you'll be refunded for that amount, minus any fees.
    </li>
</ul>
</p>
                    
                    </div>

                  
                </div>
                <!-- Modal footer -->
              
                
            </div>
            </div>
        </div>
    </div>

<!--Modal end-->
</template>

<style scoped>
.t-color{
    color: #434343;
}
</style>
