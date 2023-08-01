<script setup>
import { Head, Link, useForm } from "@inertiajs/vue3";
import AdminNavbar from "../../../Components/Admin/AdminNavbar.vue";
import AdminSidebar from "../../../Components/Admin/AdminSidebar.vue";
import { ref, onMounted,  computed } from 'vue';
import { Modal } from "flowbite";
import { watch } from "vue";
const props = defineProps({
    child: Object,
    message:String,
    successmessage: Object,
    errormessage: Object,
    voice: Object,
    quiz: Object,

});

</script>
<template>
    <Head title="Dashboard" />
    <div class="flex h-screen bg-black">
            <AdminSidebar />

        <div class="flex-1 flex flex-col overflow-hidden">
        <AdminNavbar />

            <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">
                <div class="container mx-auto px-6 py-8">

                    <!--Componen start-->
                    
<div class="flex flex-col bg-white border shadow-sm rounded-xl p-4 md:p-5 dark:bg-gray-800 dark:border-gray-700 ">

    <div class="grid gap-4 mb-3 md:grid-cols-2 p-3">
        <div >
            <label for="input-label" class="block text-sm  mb-1 dark:text-white">First Name</label>
            <input type="text" name="floating_email" id="floating_email" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" disabled placeholder=" Rajendra " />
        </div>
        <div >
            <label for="input-label" class="block text-sm  mb-1 dark:text-white">Last Name</label>
            <input type="text" name="floating_email" id="floating_email" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" disabled placeholder="Jacobs " />
        </div>
        <div >
            <label for="input-label" class="block text-sm  mb-1 dark:text-white">Email</label>
            <input type="text" name="floating_email" id="floating_email" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" disabled placeholder=" rajendrajacobs@example.com" />
        </div>
        <div >
            <label for="input-label" class="block text-sm  mb-1 dark:text-white">Mobile Number</label>
            <input type="text" name="floating_email" id="floating_email" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" disabled placeholder=" (907) 555-0101" />
        </div>
        <div >
            <label for="input-label" class="block text-sm  mb-1 dark:text-white">Country</label>
            <input type="text" name="floating_email" id="floating_email" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" disabled placeholder="United States of America " />
        </div>
        <div >
            <label for="input-label" class="block text-sm  mb-1 dark:text-white">City</label>
            <input type="text" name="floating_email" id="floating_email" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" disabled placeholder="San francisco " />
        </div>
        <div >
            <label for="input-label" class="block text-sm  mb-1 dark:text-white">Address</label>
            <input type="text" name="floating_email" id="floating_email" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" disabled placeholder="12 Anenue Street, SF " />
        </div>
        <div >
            <label for="input-label" class="block text-sm  mb-1 dark:text-white">Registration Date</label>
            <input type="text" name="floating_email" id="floating_email" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" disabled placeholder="12/04/2023 " />
        </div>
    </div>



</div>


                    <!--Componen end-->


                </div>
            </main>
        </div>
    </div>
</template>
<style scoped>
.pos-right{
    float: right;
}
.text-delete{
    color: #AD0909;
    

}

    @media (max-width: 768px) {
      .hidden-small {
        display: none;
      }
    }
.tostr{
  
  position:fixed;
  right:1rem;
  top:1rem;
  z-index: 1000;
  float:right;
}
.fade-enter-active,
.fade-leave-active {
    transition: opacity 2.5s ease-out;
}
.fade-enter,
.fade-leave-to {
    opacity: 0;
}

</style>
