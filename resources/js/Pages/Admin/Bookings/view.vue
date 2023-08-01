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

                    <!--Table start-->
                    <div class="flex flex-col bg-white border shadow-sm rounded-xl p-4 md:p-5 dark:bg-gray-800 dark:border-gray-700 ">
  
<div class=" px-12 py-4">
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

<hr class="h-px my-2 bg-gray-300 border-0" />
<div class="px-12 py-1">
            <p class="text-base py-1">Guest</p>
            <div class="flex grid grid-cols-1">
            <div class="text-base py-1" style="color: #aba6a6"><span>Mark Arthur</span></div>
            </div>
</div>
<div class="px-12 py-1">
            <p class="text-base py-1">Email</p>
            <div class="flex grid grid-cols-1">
            <div class="text-base py-1" style="color: #aba6a6"><span>MarkArthur@example.com</span></div>
            </div>
</div>
<div class="px-12 py-1">
            <p class="text-base py-1">Phone Number</p>
            <div class="flex grid grid-cols-1">
            <div class="text-base py-1" style="color: #aba6a6"><span>+1 234 567 8910</span></div>
            </div>
</div>
<div class="px-12 py-1">
            <p class="text-base py-1">Paid</p>
            <div class="flex grid grid-cols-1">
            <div class="text-base py-1" ><span>$362.00</span></div>
            </div>
</div>
<div class="px-12 py-1">
            <p class="text-base py-1">Hotel Contact</p>
            <div class="flex grid grid-cols-1">
            <div class="text-base py-1" style="color: #aba6a6"><span>+1 234 567 8910</span></div>
            </div>
</div>

                    </div>


                    <!--Table end-->
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
