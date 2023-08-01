<script setup>
import { Head, Link, useForm} from '@inertiajs/vue3';
import { ref  } from 'vue';
import {useSidebarStore} from '../../../js/Store/useSidebarstore'


const sidebar = useSidebarStore()

const selected = ref(-1);
const changeSelected = (i) => {
  selected.value = i;

}

</script>
<template>
<div :class="sidebar.isOpen ? 'block' : 'hidden'" @click="sidebar.toggleOpen" class="sidebar fixed inset-0 z-20 transition-opacity sidebar-bg opacity-50 lg:hidden"></div>
    
    <div  :class="sidebar.isOpen ? 'translate-x-0 ease-out' : '-translate-x-full ease-in'" class="sidebar fixed inset-y-0 left-0 z-30 w-64 overflow-y-auto transition duration-300 transform bg-black lg:translate-x-0 lg:static lg:inset-0">
        <div class="flex items-center justify-center mt-8">
            <div class="flex flex-col items-center">
                <img src="/img/logo2.png"/>
            </div>
        </div>
    
        <nav class="mt-10 ">
            <Link class="flex items-center px-6 py-2 mt-4  text-gray-100 font-bold hover:text-gray-100 hover:bg-gray-700 hover:bg-opacity-25" href="/adminhome" :class="{ 'selected': $page.url === '/adminhome' }" >
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                <g clip-path="url(#clip0_1_1730)">
                    <path d="M2.5 9.16667H9.16667V17.5H2.5V9.16667ZM2.5 2.5H9.16667V7.5H2.5V2.5ZM10.8333 2.5H17.5V10.8333H10.8333V2.5ZM10.8333 17.5V12.5H17.5V17.5H10.8333Z" fill="#879BA8"/>
                </g>
                <defs>
                    <clipPath id="clip0_1_1730">
                    <rect width="20" height="20" fill="white" transform="matrix(1 0 0 -1 0 20)"/>
                    </clipPath>
                </defs>
                </svg>
                <span class="mx-3 text-base">Dashboard</span>
            </Link>
            <Link class="flex items-center px-6 py-2 mt-4  text-gray-100 font-bold hover:text-gray-100 hover:bg-gray-700 hover:bg-opacity-25" href="/admin/users" :class="{ 'selected': $page.url === '/admin/users' }" >
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                <g clip-path="url(#clip0_1_1730)">
                    <path d="M2.5 9.16667H9.16667V17.5H2.5V9.16667ZM2.5 2.5H9.16667V7.5H2.5V2.5ZM10.8333 2.5H17.5V10.8333H10.8333V2.5ZM10.8333 17.5V12.5H17.5V17.5H10.8333Z" fill="#879BA8"/>
                </g>
                <defs>
                    <clipPath id="clip0_1_1730">
                    <rect width="20" height="20" fill="white" transform="matrix(1 0 0 -1 0 20)"/>
                    </clipPath>
                </defs>
                </svg>
                <span class="mx-3 text-base">Registrations</span>
            </Link>
            <Link class="flex items-center px-6 py-2 mt-4  text-gray-100 font-bold hover:text-gray-100 hover:bg-gray-700 hover:bg-opacity-25" href="/admin/bookings" :class="{ 'selected': $page.url === '/admin/bookings' }" >
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                <g clip-path="url(#clip0_1_1730)">
                    <path d="M2.5 9.16667H9.16667V17.5H2.5V9.16667ZM2.5 2.5H9.16667V7.5H2.5V2.5ZM10.8333 2.5H17.5V10.8333H10.8333V2.5ZM10.8333 17.5V12.5H17.5V17.5H10.8333Z" fill="#879BA8"/>
                </g>
                <defs>
                    <clipPath id="clip0_1_1730">
                    <rect width="20" height="20" fill="white" transform="matrix(1 0 0 -1 0 20)"/>
                    </clipPath>
                </defs>
                </svg>
                <span class="mx-3 text-base">Bookings</span>
            </Link>
    
        </nav>
    </div>
</template>
<style scoped>
.sidebar-bg{
    background: #11191E;
}
.selected {
      background-color: rgb(55 65 81);
      color:#fff;
    }
.select-highlight {
  position: absolute;
  right: 0;
  top: 135px;
  height: 30px;
  width: 4px;
  background-color: #f6f8f8;
  transition: 0.1s top ease-out;
}
</style>