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
   
  <img id="bgvideo" class="absolute z-10 w-auto min-w-full   lg:max-w-full brightness-50 "
  src="/img/pd-bg.png" type="video/mp4"/>

        <Navbar/>
<div class="flex justify-center ">
<div class="absolute flex grid lg:grid-cols-12 mr-0 z-30 gap-4  p-cad lg:px-0  px-8">
<div class="col-span-2 "></div>

<div class=" col-span-4 rounded rounded-lg shadow-md right-0 green-bg text-white" >
<h1 class="p-6 mx-auto flex justify-center text-lg">
    Here’s What’s Included
</h1>
<hr class="h-px my-2 bg-gray-200 border-0 ">
<div class=" lg:px-12 px-6">
<p class="text-lg py-1">
  <img src="/img/top-view.png" class="inline-flex"/> <span class="px-3">Hotel Accommodation</span> </p>
 <p class="text-sm pb-1 lg:px-12 px-6"><span>We Let You Choose From A List Of Available Hotels. You Can Even Pick The Room That You Would Like To Stay In.</span>
</p>
</div>
<div class=" lg:px-12 px-6">
<p class="text-lg py-1">
  <img src="/img/g-card.png" class="inline-flex"/> <span class="px-3">$50 Visa gift card</span> </p>
 <p class="text-sm pb-1 lg:px-12 px-6"><span>Book Your Trip With Us And Get A $50 Visa Gift Card To Use While On Your Trip Or Back At Home.</span>
</p>
</div>
<div class=" lg:px-12 px-6">
<p class="text-lg py-1">
  <img src="/img/e-car.png" class="inline-flex"/> <span class="px-3">Transportation to presentation</span> </p>
 <p class="text-sm pb-1 lg:px-12 px-6"><span>One Of Our Ride Sharing Partners Will Pick You Up From Your Hotel And Drop You Off At The Presentation.</span>
</p>
</div>
<div class=" lg:px-12 px-6">
<p class="text-lg py-1">
  <img src="/img/o-support.png" class="inline-flex"/> <span class="px-3">Customer service</span> </p>
 <p class="text-sm pb-1 lg:px-12 px-6"><span>Available 24/7. Contact Us Day Or Night And Speak With A Real Human In The United States.</span>
</p>
</div>




<div class=" py-10 lg:px-12 px-6">
<p>
    Others
</p>
<div class="container">

<div  class="flex grid grid-cols-2 gap-0 py-3 "  >
<div class="px-2 text-lg"><i class="fa-solid fa-wifi"></i> Free Wifi </div>
<div class="px-2 text-lg"><img src="/img/air-1.png" class="inline-flex" /> Air Conditioning</div>
</div>
  
<div  class="flex grid grid-cols-2 gap-0 py-3"  >
<div class="px-2 text-lg"><i class="fa fa-paw"></i> Pet Friendly </div>
<div class="px-2 text-lg"><img src="/img/rest.png" class="inline-flex" /> Restaurant</div>
</div>
  
  <div  class="flex grid grid-cols-2 gap-0 py-3"  >
  <div class="px-2 text-lg"><i class="fa-solid fa-briefcase"></i> Business center </div>
  <div class="px-2 text-lg"><img src="/img/laund.png" class="inline-flex" /> Self-service laundry</div>
  </div>
</div>

</div>

</div>


<div class="col-span-4   rounded  btn-red shadow-md ml-0 text-white pb-10">
<h1 class="p-6 mx-auto flex justify-center text-lg">
    How it Works
</h1>
<hr class="h-px my-2 bg-gray-200 border-0 ">
<div class=" lg:px-12 px-6">
<p class="text-lg py-1">
  <img src="/img/1.png" class="inline-flex"/> <span class="px-1">Select Your Dates & Pick a Hotel or Resort</span> </p>
 <p class="text-sm pb-1 lg:px-12 px-6"><span>Enter your preferred check-in and check-out date and pick your hotel choice from the list of hotels available.</span>
</p>
</div>
<div class=" lg:px-12 px-6">
<p class="text-lg py-1">
  <img src="/img/2.png" class="inline-flex"/> <span class="px-1">Choose a Room & Confirm Your Reservation</span> </p>
 <p class="text-sm pb-1 lg:px-12 px-6"><span>Select the list of available rooms in your selected hotel and confirm reservation of the room of your choice</span>
</p>
</div>
<div class=" lg:px-12 px-6">
<p class="text-lg py-1">
  <img src="/img/3.png" class="inline-flex"/> <span class="px-1">Travel to Las Vegas & Check-In at the Front Desk</span> </p>
 <p class="text-sm pb-1 lg:px-12 px-6"><span>Travel to the location of your booked hotel and check-in at the front desk for get access to the room.</span>
</p>
</div>
<div class=" lg:px-12 px-6">
<p class="text-lg py-1">
  <img src="/img/4.png" class="inline-flex"/> <span class="px-1">Collect Your $50 Visa Gift Card</span> </p>
 <p class="text-sm pb-1 lg:px-12 px-6"><span>Ensure you are present to the 90 minute presentation organized by the Travel Agency and redeem your $50 Visa gift card</span>
</p>
</div>
<div class=" lg:px-12 px-6">
<p class="text-lg py-1">
  <img src="/img/5.png" class="inline-flex"/> <span class="px-1">Enjoy the Rest of Your Trip</span> </p>
 <p class="text-sm pb-1 lg:px-12 px-6"><span>Enjoy your wonderful Las Vegas trip as we ensure you have a wonderful time.</span>
</p>
</div>


</div>

<div class="col-span-2"></div>

</div>
</div>

</div>
</header>


<section class="py-16 p-text">
    <div>
        <div class="flex flex-wrap lg:grid md:grid-cols-12 md:gap-6 justify-center px-16">
            <div class="col-span-3 max-w-sm rounded overflow-hidden mb-10">
                <img src="/img/83.png" class="w-full px-2 py-2"/>
                
               <div class=" my-1 flex justify-between">
                    <p class="text-gray-700 flex  justify-content-start px-3 ">
                        Boulevard South</p>
                        <p class="flex justify-content-end px-3 text-red">
                            3 Days/2Nights
                        </p>
                </div>
            </div>
            <div  class="col-span-3 max-w-sm rounded overflow-hidden  card-bg mb-10">  
                <img src="/img/84.png" class="w-full px-2 py-2"/>
                
                <div class=" my-1 flex justify-between">
                     <p class="text-gray-700 flex  justify-content-start px-3 ">
                        MGM Grand</p>
                         <p class="flex justify-content-end px-3 text-red">
                             3 Days/2Nights
                         </p>
                 </div>
            </div>
            <div  class="col-span-3 max-w-sm rounded overflow-hidden  card-bg mb-10">
                <img src="/img/85.png" class="w-full px-2 py-2"/>
                
                <div class=" my-1 flex justify-between">
                     <p class="text-gray-700 flex  justify-content-start px-3 ">
                        Westgate Hotel</p>
                         <p class="flex justify-content-end px-3 text-red">
                             3 Days/2Nights
                         </p>
                 </div>
            </div>
            <div  class="col-span-3 max-w-sm rounded overflow-hidden  card-bg mb-10">
                <img src="/img/86.png" class="w-full px-2 py-2"/>
                
                <div class=" my-1 flex justify-between">
                     <p class="text-black flex  justify-content-start px-3 ">
                        Luxor Hotel</p>
                         <p class="flex justify-content-end px-3 text-red">
                             3 Days/2Nights
                         </p>
                 </div>
            </div>

        </div>
    </div>
<section class="bg-white lg:mx-20 mx-10 my-20 py-16">
<div class=" ">
<h1 class="text-2xl flex justify-center">Search for available hotels</h1>
<p class="flex justify-center py-4">Keep your same dates, or change it here.</p>
</div>
<div class="flex ginline-flex flex-wrap justify-center">
<div class="px-10 py-6"><input type="date" class="border rounded-sm text-sm sm:w-auto px-10 py-3"></div>
<div class="px-10 py-6"><input type="date" class="border rounded-sm text-sm sm:w-auto px-10 py-3 " required></div>
<div class="px-10 py-6">      <button class="text-white btn-red  font-medium rounded-sm text-sm sm:w-auto px-5 py-2.5 text-center lg:px-28 py-4 px-20"><i class="fa-solid fa-magnifying-glass"></i> Search offers</button>
</div>
</div>
</section>
</section >


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
.text-red{
    color: #AD0909;
}
.btn-red{
  background:#AD0909;
}
.green-bg{
    background: #48742C;;
}
.p-cad{
  top:60%;
  margin-left: auto;
  margin-right: auto;
}

.p-text{
  padding-top:calc(50vh + 16rem);
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
  padding-top:calc(20vh + 54rem);
  padding-bottom: 4rem;
  background: #F4F4F4;
}
    }

    @media only screen and (min-width: 1440px)
{ /* Your Styles... */ 
  .p-text{
  padding-top:calc(50vh + 10rem);
  padding-bottom: 4rem;
  background: #F4F4F4;;
}
.p-cad{
  top:70%;
  margin-left: auto;
  margin-right: auto;
}


}
</style>
