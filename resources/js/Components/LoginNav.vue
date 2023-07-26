<script setup>
import { Head, Link } from '@inertiajs/vue3';
import { ref,  onMounted  } from 'vue';
let showMenu = ref(false);
    const toggleNav = () => (showMenu.value = !showMenu.value);
</script>
<template>
    
	<nav class="sticky top-0 nav px-4 py-6 bg-white shadow-md   ">
               
		<div class="flex lg:grid grid-cols-3 top-0">
            <a href="/" class="flex justify-start items-center inline-flex px-8"><i class="fa-solid fa-arrow-left text-3xl " style="color: #aba6a6;"></i></a>

        <a class=" flex justify-center items-center text-3xl font-bold leading-none mx-16" href="/">
			<img :src="'/img/logo.png'" class="h-8"/>
		</a>

		<div class="lg:hidden">
			<button @click="toggleNav" class="navbar-burger flex items-center text-white p-3">
				<svg class="block h-4 w-4 fill-current" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
					<title>Mobile menu</title>
					<path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
				</svg>
			</button>
		</div>
    </div>
    </nav>
	<div 
        :class="showMenu ? 'flex' : 'hidden'"
         class="navbar-menu relative z-50 lg:hidden">
		<div 
        :class="showMenu ? 'flex' : 'hidden'" @click="toggleNav"  class="navbar-backdrop fixed inset-0 bg-gray-800 opacity-25"></div>
		<nav class="fixed top-0 left-0 bottom-0 flex flex-col w-5/6 max-w-sm py-6 px-6 bg-white border-r overflow-y-auto">
			<div class="flex items-center mb-8">
				<a class="mr-auto text-3xl font-bold leading-none" href="/">
					<img :src="'/img/logo.png'" class="h-12"/>
				</a>
        <div class="grid pr-1">
            
        <span class="font-bold font-sm" >THE OFFICE OF THE BISHOP</span>
        <span class="text-lg font-bold">DR. DAMION S.C. BENNETT</span>

        </div>
				<button @click="toggleNav"  class="navbar-close">
					<svg class="h-6 w-6 text-white font-bold cursor-pointer hover:text-white font-bold" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
						<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
					</svg>
				</button>
			</div>
			<div>
				<ul>
					<li class="mb-1">
						<a class="block p-4 text-sm font-semibold text-white font-bold hover:bg-blue-50 hover:text-blue-600 rounded" :href="'/'" :class="{ 'activated': $page.url === '/' }">Home</a>
					</li>
					<li class="mb-1">
						<a class="block p-4 text-sm font-semibold text-white font-bold hover:bg-blue-50 hover:text-blue-600 rounded" :href="'/bishop'" :class="{ 'activated': $page.url === '/bishop' }">The Bishop</a>
					</li>
					<li class="mb-1">
						<a class="block p-4 text-sm font-semibold text-white font-bold hover:bg-blue-50 hover:text-blue-600 rounded" :href="'/Events'" :class="{ 'activated': $page.url === '/Events' }">Events</a>
					</li>
					<li class="mb-1">
						<a class="block p-4 text-sm font-semibold text-white font-bold hover:bg-blue-50 hover:text-blue-600 rounded" :href="'/Join'" :class="{ 'activated': $page.url === '/Join' }">Join</a>
					</li>
					<li class="mb-1">
						<a class="block p-4 text-sm font-semibold text-white font-bold hover:bg-blue-50 hover:text-blue-600 rounded" :href="'/Contact'" :class="{ 'activated': $page.url === '/Contact' }">Contact</a>
					</li>
					<li class="mb-1 flex justify-between ">
						<a class="block p-4 text-sm font-semibold lg:ml-auto lg:mr-3 py-2 px-6 blue-bg hover:bg-white text-sm text-white font-bold font-bold  rounded-xl transition duration-200" >Church</a>
					
						<a class="block p-4 text-sm font-semibold lg:ml-auto lg:mr-3 py-2 px-6 red-bg hover:bg-white text-sm text-white font-bold font-bold  rounded-xl transition duration-200" href="https://theafricaeducationdirective.com/">Work</a>
						
						<a class="block p-4 text-sm font-semibold lg:ml-auto lg:mr-3 py-2 px-6 green-bg hover:bg-white text-sm text-white font-bold font-bold  rounded-xl transition duration-200" >Business</a>
					</li>
				</ul>
			</div>

		</nav>
	</div>
</template>
<style scoped>
.activated{
    color:rgb(255, 109, 112);
	
}
.sticky{
	
position: -webkit-sticky; /* Safari */
  position: sticky;
  top: 0;
  
  z-index: 30;
}
.green-bg{
background: #3E8D41;
}
.btn-red{
  background:#AD0909;
}
.red-bg{
background: rgb(165,37,39);
}
.blue-bg{
	background: #1D28DC;
}
</style>