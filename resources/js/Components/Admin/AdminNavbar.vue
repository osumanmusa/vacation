<script setup>
import {  Head, Link, useForm } from '@inertiajs/vue3';
import { onMounted } from 'vue';
import { initFlowbite } from 'flowbite'
import { useSidebarStore } from "../../../js/Store/useSidebarstore";

const sidebar = useSidebarStore();

onMounted(() => {
    
    initFlowbite();

})

const form = useForm({
    name: '',
    image:'',
});

function goback(){
      window.history.back();

}

function selectFile($event) {
            form.image = $event.target.files[0];
        }
</script>
<template>
<header class="flex items-center justify-between px-6 py-4 bg-white border-b-4 border-gray-400">
    <div class="flex items-center">
        <button 
                @click="sidebar.toggleOpen" class="text-gray-500 focus:outline-none lg:hidden">
            <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M4 6H20M4 12H20M4 18H11" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </button>

        
        <div class="relative lg:mx-8 mx-4">
                <Link  class="relative " href="#"  @click="goback">
                    <i class="fa-solid fa-arrow-left" style="color: #999;width: 20px; height: 20px;"></i> 
                </Link>
        </div>

    </div>
    
    <div class="flex items-center">
        
        <div  class="relative">
            <Link :href="'/student/editprofile'" class="relative block w-8 h-8 overflow-hidden rounded-full shadow focus:outline-none">


    <img class="object-cover w-full h-full" src="/img/avatar.png"  alt="Your avatar">
            </Link>

  
        </div>
        <div class="relative">
            
<Button  id="dropdownDividerButton" data-dropdown-toggle="dropdownDivider" class="text-gray-700 text-sm px-5 py-2.5 text-center inline-flex items-center  " type="button">John Doe <svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
  </svg></Button>
<!-- Dropdown menu -->
<div id="dropdownDivider" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDividerButton">
      <li>
        <a href="/admin/profile" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Profile</a>
      </li>
    </ul>
    <div class="py-2">
      <Link :href="'/admin/add-admin'"  class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">
        Add New admin
      </Link>
    </div>
    <div class="py-2">
      <Link :href="route('logout')" method="post" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">
        Logout
      </Link>
    </div>
</div>

            
        </div>
        
    </div>


</header>


</template>
<style scoped>
.home-bg{
    background: #fafafa;
}
</style>