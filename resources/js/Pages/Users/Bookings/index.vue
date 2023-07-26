<script setup>
import { Head, Link, useForm } from "@inertiajs/vue3";
import UserNavbar from "../../../Components/User/UserNavbar.vue";
import UserSidebar from "../../../Components/User/UserSidebar.vue";
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
        <UserSidebar />

        <div class="flex-1 flex flex-col overflow-hidden">
            <UserNavbar />

            <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">
                <div class="container mx-auto px-6 py-8">
                    <Transition name="fade" mode="out-in">
    <div v-if="$page.props.flash.successmessage"  class="tostr flex mt-2 items-center w-full max-w-xs p-4 space-x-4 text-green-500 bg-gray-50 divide-x divide-gray-200 rounded-lg shadow dark:text-gray-400 dark:divide-gray-700 space-x dark:bg-gray-800" role="alert">
        <svg class="w-7 h-7 text-green-600 " fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
        </svg>
        <div class="pl-4 text-sm font-normal"> {{ $page.props.flash.successmessage }}</div>    
        <button type="button" class="justify-end group mr-2 p-2" @click="$page.props.flash.successmessage = false">
      <svg
        class="block w-4 h-3 fill-green-800 "
        xmlns="http://www.w3.org/2000/svg"
        width="235.908"
        height="235.908"
        viewBox="278.046 126.846 235.908 235.908"
      >
        <path
          d="M506.784 134.017c-9.56-9.56-25.06-9.56-34.62 0L396 210.18l-76.164-76.164c-9.56-9.56-25.06-9.56-34.62 0-9.56 9.56-9.56 25.06 0 34.62L361.38 244.8l-76.164 76.165c-9.56 9.56-9.56 25.06 0 34.62 9.56 9.56 25.06 9.56 34.62 0L396 279.42l76.164 76.165c9.56 9.56 25.06 9.56 34.62 0 9.56-9.56 9.56-25.06 0-34.62L430.62 244.8l76.164-76.163c9.56-9.56 9.56-25.06 0-34.62z"
        />
      </svg>
    </button>
    </div>
  </Transition>

  <Transition name="Efade"> 
    <div v-if="$page.props.flash.errormessage" id="toast-simple" class="tostr flex mt-2 mr-3 items-center w-full max-w-xs p-4 space-x-4 text-red-500 bg-white divide-x divide-gray-200 rounded-lg shadow dark:text-gray-400 dark:divide-gray-700 space-x dark:bg-gray-800" role="alert">
        <svg class="w-7 h-7 text-red-600 " fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
        </svg>
        <div class="pl-4 text-sm font-normal">{{ $page.props.flash.errormessage }}</div>
        <button type="button" class="justify-end group mr-2 p-2" @click="$page.props.flash.errormessage  = false">
      <svg
        class="block w-4 h-3 fill-red-600 "
        xmlns="http://www.w3.org/2000/svg"
        width="235.908"
        height="235.908"
        viewBox="278.046 126.846 235.908 235.908"
      >
        <path
          d="M506.784 134.017c-9.56-9.56-25.06-9.56-34.62 0L396 210.18l-76.164-76.164c-9.56-9.56-25.06-9.56-34.62 0-9.56 9.56-9.56 25.06 0 34.62L361.38 244.8l-76.164 76.165c-9.56 9.56-9.56 25.06 0 34.62 9.56 9.56 25.06 9.56 34.62 0L396 279.42l76.164 76.165c9.56 9.56 25.06 9.56 34.62 0 9.56-9.56 9.56-25.06 0-34.62L430.62 244.8l76.164-76.163c9.56-9.56 9.56-25.06 0-34.62z"
        />
      </svg>
    </button>
    </div>
</Transition>
      
                    <!--Table start-->
                    

    <div class="relative shadow-md sm:rounded-lg lg:p-8 p-3 bg-white">
        <div class="lg:grid grid-cols-2">
            <div class=" inline-flex justify-start py-3">
                
                
                <span class="px-3 lg:text-lg ">Show</span>
                <select class="py-0.5">
                    <option>5</option>
                    <option>10</option>
                    <option>15</option>
                    <option>20</option>
                    <option>25</option>
                    <option>30</option>
                </select>
                <span  class="px-3 lg:text-lg">entries</span>
            </div>
            <div class="flex lg:justify-end pb-4 bg-white ">
                <label for="table-search" class="sr-only">Search</label>
                <div class="relative mt-1 pos-right">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                        </svg>
                    </div>
                    <input type="text" id="table-search" class="block p-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg lg:w-80 w-76 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 " placeholder="Search for items">
                </div>
            </div>

        </div>
    <table class=" border w-full text-sm text-left text-gray-500 dark:text-gray-400 ">
        <thead class=" border text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3 border ">
                    Hotel Name
                </th>
                <th scope="col" class="px-6 py-3 border hidden-small ">
                    Hotel Contact
                </th>
                <th scope="col" class="px-6 py-3 border hidden-small ">
                    Room 
                </th>
                <th scope="col" class="px-6 py-3 border hidden-small ">
                    Arrival
                </th>
                <th scope="col" class="px-6 py-3 border hidden-small ">
                    Departure
                </th>
                <th scope="col" class="px-6 py-3 border">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">

                <td scope="row" class="px-6 border py-4 ">
                    Rajendra Jacobs
                </td>
                <td class="px-6 border py-4 hidden-small ">
                    Rajeshrayo@gmail.com
                </td>
                <td class="px-6 border py-4 hidden-small ">
                    Single
                </td>
                <td class="px-6 border py-4 hidden-small ">
                    08/21/15
                </td>
                <td class="px-6 border py-4 hidden-small ">
                    12/21/15
                </td>
                <td class="px-6 border py-4">
                    <a href="#" class="font-medium text-delete  hover:underline">Delete</a>
                </td>
            
            <tr class="space-x-3 w-full lg:hidden">
                <td scope="row" class="px-4 py-4 grid col-1 gap-2 ">
                    <span>Hotel Contact: Rajeshrayo@gmail.com</span>
                    <span>Room: Single</span>
                    <span>Arrival: 08/21/15</span>
                    <span>Departure: 12/21/15</span>
                </td>

            </tr>
           
            
            </tr>
        </tbody>
    </table>
</div>

                    <!--Componen end-->

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
