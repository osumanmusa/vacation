<script setup>
import { Head, Link } from '@inertiajs/vue3';
import Navbar from "../Components/Navbar.vue";
import Footer from "../Components/Footer.vue";
import { ref,  onMounted  } from 'vue';
import DateRangePicker from 'flowbite-datepicker/DateRangePicker';
import { initFlowbite } from 'flowbite'
onMounted(() => {
    initFlowbite();

})
</script>

<template>
    <Head title="Welcome" />
    <header
  class="relative contaier-fluid   h-screen mb-12 overflow-hidden "
>
<div class="text-2xl text-white bg-opacity-10 rounded-xl mb-32" >
    <video autoplay muted loop id="bgvideo" class="absolute z-10 w-auto min-w-full min-h-full max-w-none lg:max-w-full ">
  <source src="/img/bg.mp4" type="video/mp4">
</video>
        <Navbar/>

<div class="relative container z-30 grid lg:grid-cols-12  mt-24  px-3">
  <div class="col-span-1"></div>
<div class="p-12 col-span-4 bg-hero  rounded rounded-lg shadow-md ">
  <div>
    <img src="/img/icon1.png" class="hero-icon z-0"/>
  </div>
  <div class="py-6 relative z-30">
    <p class="text-sm">
    Get a great vacation package to the entertainment capital of the world, Viva Las Vegas!  Tell us when you want to visit and explore all our amazing available packages!
    </p>
  </div>
  <form>
  <div id="date-rangepicker"  class="mb-6">
    <label for="email" class="block mb-2 text-sm font-medium text-white dark:text-white"><i class="fa fa-calendar-days" style="color: rgba(217, 217, 217, 0.48);"></i> Check-In</label>
    <input name="start" type="date" class="hero-input border text-white text-sm rounded-lg focus:ring-gray-50 focus:border-gray-50block w-full p-2.5 "  required>
  </div>
  <div class="mb-6">
    <label for="password" class="block mb-2 text-sm font-medium text-white dark:text-white"><i class="fa fa-calendar-days" style="color: rgba(217, 217, 217, 0.48);"></i> Check-out</label>
    <input name="end" type="date" class="hero-input border text-white text-sm rounded-lg focus:ring-gray-50 focus:border-gray-50 block w-full p-2.5 " required>
  </div>

  <div class="mb-6 flex justify-center ">
      <a href="/packages" class="text-white btn-red min-w-full max-w-full font-medium rounded-lg text-sm w-full sm:w-auto py-2.5 text-center  py-4"><i class="fa-solid fa-magnifying-glass"></i> Search offers</a>
  </div>
</form>
</div>


<div class="col-span-6"></div>
</div>


</div>
</header>
<section class="container-fluid bg-white py-20 ">

  <div class="flex justify-center ">
    <h1 class="font-bold text-2xl px-5">We are YOUR exclusive Las Vegas Vacation Travel Club</h1>
  </div>
<div class="flex flex-wrap lg:grid lg:grid-cols-12 gap-8 justify-center lg:px-32 py-16 ">


  <div class="col-span-4 max-w-sm shadow-md overflow-hidden px-8 exclusive-bg">
    <div class="py-16 px-14">
      <h1 class="px-6">
        <svg xmlns="http://www.w3.org/2000/svg" width="90" height="90" viewBox="0 0 90 90" fill="none">
          <g clip-path="url(#clip0_1_61)">
            <path d="M75 22.5H63.75V15C63.75 10.8375 60.4125 7.5 56.25 7.5H33.75C29.5875 7.5 26.25 10.8375 26.25 15V22.5H15C10.8375 22.5 7.5 25.8375 7.5 30V71.25C7.5 75.4125 10.8375 78.75 15 78.75H75C79.1625 78.75 82.5 75.4125 82.5 71.25V30C82.5 25.8375 79.1625 22.5 75 22.5ZM33.75 15H56.25V22.5H33.75V15ZM75 71.25H15V63.75H75V71.25ZM75 52.5H15V30H26.25V37.5H33.75V30H56.25V37.5H63.75V30H75V52.5Z" fill="#EB3223"/>
          </g>
          <defs>
            <clipPath id="clip0_1_61">
              <rect width="90" height="90" fill="white"/>
            </clipPath>
          </defs>
        </svg>
      </h1>
      <p class="py-4 font-bold ">Extensive Selection of Hotel Destinations</p>
    </div>

  </div>

  <div class="col-span-4 max-w-sm shadow-md overflow-hidden px-8 exclusive-bg">
    <div class="py-16 px-14">
      <h1 class="px-6">
       <img src="/img/Training.png" width="90" height="90"/>
      </h1>
      <p class="py-4 font-bold ">Extensive Selection of Hotel Destinations</p>
    </div>

  </div>
  <div class="col-span-4 max-w-sm shadow-md overflow-hidden px-8 exclusive-bg">
    <div class="py-16 px-14">
      <h1 class="px-6">
       <img src="/img/Customer.png" width="90" height="90"/>
      </h1>
      <p class="py-4 font-bold ">Extensive Selection of Hotel Destinations</p>
    </div>

  </div>
</div>
</section>
<Footer/>
</template>

<style scoped >
.vid-bg{
    background: rgba(23, 1, 1, 0.34);
box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25), 0px 4px 4px 0px rgba(0, 0, 0, 0.25);
}
.bg-hero{
  
background:  rgba(22, 21, 21, 0.76);

}
.hero-input{
  background:  rgba(217, 217, 217, 0.48);
}
.btn-red{
  background:#AD0909;
}
.hero-icon{
  
  --height :  225.42px; 
    position: absolute;
width: 220.38px;
height: 200.42px;
left: 25%;
top: calc(var(--height) * -0.5);
}

.exclusive-bg{
background: #F4F4F4;;
}
.hidden-small {
      display: block;
    }

    @media (max-width: 768px) {
      .small-width  {
        width: 410px;
      }
      .hidden-small {
      display: block;
    }
    .hero-icon{
      margin-top: 15px;
    position: absolute;
width: 240.38px;
height: 220.42px;
left: 44%;
top: calc(var(--height) * -0.5);
    }


    }



    @media only screen and (min-width: 1440px)
{ /* Your Styles... */ 
  .bg-hero{
  margin-left: 65px;
  background:  rgba(22, 21, 21, 0.76);
  margin-top: 65px;
  
  }
  .hero-icon{
  
  --height :  155.42px; 
    position: absolute;
width: 280.38px;
height: 240.42px;
left: 25%;
top: calc(var(--height) * -0.5);
}

}
</style>
