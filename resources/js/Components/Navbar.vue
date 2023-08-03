<script setup>
import { Head, Link } from '@inertiajs/vue3';
import { ref,  onMounted  } from 'vue';
let showMenu = ref(false);
    const toggleNav = () => (showMenu.value = !showMenu.value);
</script>
<template>
    
	<nav class="sticky top-0 nav px-4 py-4 flex justify-between items-center bg-transparent   overflow-hidden">
		<a class="text-3xl font-bold leading-none mx-16" href="/">
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
		<ul class="hidden absolute top-1/2 right-0 transform -translate-y-1/2 px-16  lg:flex  lg:items-center lg:space-x-6">
			<li><a class="text-sm text-white font-bold hover:text-red-500"  href="/">Home</a></li>
			<li class="text-gray-300">
		
			</li>
			<li><a class="text-sm text-white font-bold hover:text-red-500" href="/Searchpackage">Packages</a></li>
			<li class="text-gray-300">
		
			</li>
			<li><a class="text-sm text-white font-bold hover:text-red-500" href="/Support">Support</a></li>
			<li class="text-gray-300">

			</li>
			<li><a class="text-sm text-white font-bold hover:text-red-500" href="/Contact">Contact</a></li>
			<li class="text-gray-300">
	
			</li>
			<li><a href="login" class="text-sm text-white font-bold hover:text-red-500"  >Log in</a></li>
			<li class="text-gray-300">
				<!-- <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" class="w-4 h-4 current-fill" viewBox="0 0 24 24">
					<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v0m0 7v0m0 7v0m0-13a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
				</svg> -->
			</li>
			<li><a href="/register" class="block p-4 text-sm font-semibold lg:ml-auto lg:mr-3 py-2 px-6 btn-red hover:bg-white text-sm text-white font-bold font-bold  rounded-xl transition duration-200" >Sign up</a>
			</li>
		</ul>
    </nav>
	<div 
        :class="showMenu ? 'flex' : 'hidden'"
         class="navbar-menu relative z-50 lg:hidden">
		<div 
        :class="showMenu ? 'flex' : 'hidden'" @click="toggleNav"  class="navbar-backdrop fixed inset-0 bg-gray-800 opacity-25"></div>
		<nav class="fixed top-0 left-0 bottom-0 flex flex-col w-5/6 max-w-sm py-6 px-6 navbar-bg  border-r overflow-y-auto">
			<div class="flex items-center mb-8">
				<a class="mr-auto text-3xl font-bold leading-none" href="/">
					<img :src="'/img/logo2.png'" class="h-8"/>
				</a>
				<button @click="toggleNav"  class="navbar-close">
					<svg class="h-6 w-6 text-white font-bold cursor-pointer hover:text-white font-bold" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
						<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
					</svg>
				</button>
			</div>
			<div>
				<ul>
					<li class="mb-1">
						<a class="block p-4 text-sm font-semibold text-white font-bold hover:text-gray-100 hover:bg-gray-700 hover:bg-opacity-25 rounded" :href="'/'" :class="{ 'activated': $page.url === '/' }">Home</a>
					</li>
					<li class="mb-1">
						<a class="block p-4 text-sm font-semibold text-white font-bold hover:text-gray-100 hover:bg-gray-700 hover:bg-opacity-25 rounded" :href="'/Searchpackage'" :class="{ 'activated': $page.url === '/Searchpackage' }">Packages</a>
					</li>
					<li class="mb-1">
						<a class="block p-4 text-sm font-semibold text-white font-bold hover:text-gray-100 hover:bg-gray-700 hover:bg-opacity-25 rounded" :href="'/Support'" :class="{ 'activated': $page.url === '/Events' }">Support</a>
					</li>
					<li class="mb-1">
						<a class="block p-4 text-sm font-semibold text-white font-bold hover:text-gray-100 hover:bg-gray-700 hover:bg-opacity-25 rounded" :href="'/Contact'" :class="{ 'activated': $page.url === '/Contact' }">Contact</a>
					</li>
					<li class="mb-1">
						<a class="block p-4 text-sm font-semibold text-white font-bold hover:text-gray-100 hover:bg-gray-700 hover:bg-opacity-25 rounded" :href="'/login'" :class="{ 'activated': $page.url === '/login' }">Log in</a>
					</li>
					<li class="mb-1 flex justify-between ">
						
					<a href="/register" class="block p-4 text-sm font-semibold lg:ml-auto lg:mr-3 py-2 px-6 btn-red hover:bg-white text-sm text-white font-bold font-bold  rounded-xl transition duration-200" >Sign up</a>
					</li>
				</ul>
			</div>

		</nav>
	</div>
</template>
<style scoped>
.activate{
    color:rgb(255, 109, 112);
	
}
.navbar-bg{
    background: #11191E;
}
.activated {
      background-color: rgb(55 65 81);
      color:#fff;
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