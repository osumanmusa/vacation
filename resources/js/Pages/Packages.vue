<script setup>
import { Head, Link } from '@inertiajs/vue3';
import Navbar from "../Components/Navbar.vue";
import Footer from "../Components/Footer.vue";
import { ref,  onMounted  } from 'vue';

let showMore = ref(true);

function toggleMore(){

  showMore.value =! showMore.value
};
</script>

<template>
    <Head title="Welcome" />
    <header
  class="relative h-screen mb-12  "
>
<div class="  text-2xl  bg-opacity-10 rounded-xl mb-32" >
   
  <video autoplay muted loop id="bgvideo" class="absolute z-10 w-auto min-w-full hero-h  lg:max-w-full brightness-50 ">
  <source src="/img/pbg.mp4" type="video/mp4">
</video>
        <Navbar/>
<div class="flex justify-center ">
<div class="absolute flex grid lg:grid-cols-12 mr-0 z-30   p-cad  px-6">
<div class="col-span-2 "></div>

<div class=" col-span-4 rounded rounded-lg shadow-md right-0  h-80 w-full lg:h-[98vh] lg:w-[50vw]" style="background: url('/img/r-1.png');background-repeat: no-repeat;background-size: cover;">
<div class="lg:mt-40 lg:mr-20 mt-24">
  <img src="/img/quote.png" class=" h-[25vh] w-[35vw] lg:h-[35vh] lg:w-[20vw]  mx-auto object-cover" />

</div>
</div>


<div class="col-span-4 pl-6  rounded  bg-white shadow-md ml-0 flex flex-col ">
<h1 class="py-6 ">
  Enjoy your Las Vegas Package
</h1>
<hr class="h-px my-2 bg-gray-200 border-0 ">
<p class="inline-flex text-lg py-1">
  What is included
</p>
<p class="text-lg py-2">
  <img src="/img/support.png" class="inline-flex "/> <span class="px-3">Hotel Accommodation</span>
</p>
<p class="text-lg py-2">
  <img src="/img/support.png" class="inline-flex "/> <span class="px-3">$50 Visa gift card</span>
</p>
<p class=" text-lg py-2">
  <img src="/img/support.png" class="inline-flex "/> <span class="px-3">Transportation to presentation</span>
</p>
<p class="text-lg py-2">
  <img src="/img/support.png" class="inline-flex "/> <span class="px-3">Customer service </span>
</p>
<div class="text-lg py-2">
  <button @click="toggleMore"> See more... <Transition name="showmore"> <i  v-if="showMore" class="fa fa-chevron-down"></i> <i  v-else class="fa fa-chevron-up"></i></Transition></button>

  <Transition name="showmore">
<div :class="{'collapse':showMore }" class="container">

<div  class="flex lg:grid grid-cols-2 gap-0 py-3"  >
<div class="px-2"><i class="fa-solid fa-wifi"></i> Free Wifi </div>
<div class="px-2"><img src="/img/air.png" class="inline-flex" /> Air Conditioning</div>
</div>
  
<div  class="flex lg:grid grid-cols-2 gap-0 py-3"  >
<div class="px-2"><i class="fa fa-paw"></i> Pet Friendly </div>
<div class="px-2"><i class="fa-solid fa-utensils"></i> Restaurant</div>
</div>
  
  <div  class="flex lg:grid grid-cols-2 gap-0 py-3"  >
  <div class="px-2"><i class="fa-solid fa-briefcase"></i> Business center </div>
  <div class="px-2"><svg class="inline-flex" xmlns="http://www.w3.org/2000/svg" width="20" height="23" viewBox="0 0 20 23" fill="none">
  <path d="M7.64134 15.9731C8.94134 17.3854 11.058 17.3854 12.358 15.9731C13.658 14.5608 13.658 12.2613 12.358 10.8491L7.64134 15.9731ZM14.9997 2.55642L4.99967 2.54736C4.07467 2.54736 3.33301 3.35309 3.33301 4.35798V18.8429C3.33301 19.8478 4.07467 20.6536 4.99967 20.6536H14.9997C15.9247 20.6536 16.6663 19.8478 16.6663 18.8429V4.35798C16.6663 3.35309 15.9247 2.55642 14.9997 2.55642ZM8.33301 4.35798C8.79134 4.35798 9.16634 4.76537 9.16634 5.26329C9.16634 5.76121 8.79134 6.1686 8.33301 6.1686C7.87467 6.1686 7.49967 5.76121 7.49967 5.26329C7.49967 4.76537 7.87467 4.35798 8.33301 4.35798ZM5.83301 4.35798C6.29134 4.35798 6.66634 4.76537 6.66634 5.26329C6.66634 5.76121 6.29134 6.1686 5.83301 6.1686C5.37467 6.1686 4.99967 5.76121 4.99967 5.26329C4.99967 4.76537 5.37467 4.35798 5.83301 4.35798ZM9.99967 18.8429C7.24134 18.8429 4.99967 16.4077 4.99967 13.4111C4.99967 10.4145 7.24134 7.97923 9.99967 7.97923C12.758 7.97923 14.9997 10.4145 14.9997 13.4111C14.9997 16.4077 12.758 18.8429 9.99967 18.8429Z" fill="#666666"/>
</svg> Self-service laundry</div>
  </div>



</div>
</Transition>
</div>
<a href="/packagedetails" class="btn-red text-white text-lg py-4 px-6  mt-auto">
   See what’s inside this package for you <img src="/img/enter.png" class="inline-flex"/> </a>
</div>
<div class="col-span-2"></div>

</div>
</div>

</div>
</header>
<section class="container-fluid p-text ">
  <div class="flex justify-center ">
    <h1 class="font-bold text-2xl px-5">Need More Information?</h1>
  </div>
<div class="flex justify-center py-4 px-10">
  <p>
    We’re here to help and happy to do it. It’s easy to get in touch with us by phone or email
  </p>
</div>
<div class="flex justify-center py-2">
  <p class=" inline-flex">
    <i class="fa-solid fa-envelope text-xl px-4"></i> example@serviceprovider.com
  </p>

</div>
<div class="flex justify-center py-2">
  <p class=" inline-flex">
    <i class="fa-sharp fa-solid fa-phone text-xl px-3"></i> +1 23456789
  </p>
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
  
background:  rgba(35, 33, 33, 0.76);

}
.hero-input{
  background:  rgba(217, 217, 217, 0.48);
}
.btn-red{
  background:#AD0909;
  float:right;
  width: fit-content;
  margin-left: auto;
}

.p-cad{
  top:50%;
  margin-left: auto;
  margin-right: auto;
}
.btn-pcard{
float: right;
margin-top: 1em;

}
.p-text{
  padding-top:calc(50vh + 4rem);
  padding-bottom: 4rem;
  background: #F4F4F4;;
}
.strike{
  padding: 20px;
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
    }
    .p-cad{
      top: 20%;
    }

    .p-text{
  padding-top:calc(3vh + 15rem);
  padding-bottom: 4rem;
  background: #F4F4F4;
}
    }


    .showmore-enter-active,
.showmore-leave-active {
    transition: opacity 0.2s ease-out;
}
.showmore-enter,
.showmore-leave-to {
    opacity: 0;
}


/* iphone 12 PRO */
@media only screen and (min-width: 390px)
{
    .p-text{
  padding-top:calc(3vh + 20rem);
  padding-bottom: 4rem;
  background: #F4F4F4;
}

}


/* iphone SE  */
@media only screen and (min-height: 667px)
{
    .p-text{
  padding-top:calc(3vh + 29rem);
  padding-bottom: 4rem;
  background: #F4F4F4;
}

}
</style>
