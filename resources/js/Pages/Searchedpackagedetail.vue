<script setup>
import { Head, Link } from "@inertiajs/vue3";
import Navbar from "../Components/Navbar.vue";
import Footer from "../Components/Footer.vue";
import { ref, onMounted } from "vue";

let showMore = ref(true);

function toggleMore() {
    showMore.value = !showMore.value;
}
</script>

<template>
    <Head title="Welcome" />
    <header class="relative h-screen mb-12">
        <div
            class="text-2xl h-screen bg-opacity-10 mb-32"
            style="
                background: url('/img/bg-9.png');
                background-size: cover;
                background-repeat: no-repeat;
            "
        >
            <Navbar />
        </div>
    </header>

    <section class="lg:px-40 px-12">
        <div class="">
            <p class="text-3xl py-2">Rio All-Suite Hotel & Casino</p>
            <p class="text-base py-2" style="color: #aba6a6">
                An all-suite hotel located just off the strip with oversized
                deluxe suites.
            </p>
            <p class="">
                <img src="/img/rio.png" class="inline-flex" />
                <span class="text-sm" style="color: #aba6a6">
                    3700 W Flamingo Rd</span
                >
            </p>
            <p class="py-2" style="color: #eb3223">
                Required 90-minute presentation
            </p>

            <hr class="h-px my-2 bg-gray-200 border-0" />
        </div>
        <div >
            <p class="text-xl py-2">Hotel description</p>
            <p class="py-2 text-base" style="color: #aba6a6">
                Home of the World Series of Poker tournament, this vibrant
                casino resort is a mile from The Strip and 4 miles from McCarran
                International Airport. Suites offer mountain or Strip views with
                free Wi-Fi, flat-screen TVs and minifridges, plus sitting areas.
                Upgraded suites add living rooms; some also have balconies and
                private pools. Opulent villas come with 24/7 butler service and
                complimentary airport transfers. The casino has over 100,000 sq
                feet of space. Dining options include a steakhouse and an Indian
                bistro. There's also an outdoor pool and a spa, plus live shows.
            </p>
        </div>
        <div>
            <p class="text-xl py-2">Hotel policies</p>
            <div class="py-2" style="color: #aba6a6">
                <p>Check-in time: 3:00 PM</p>
                <p>Check-out time: 11:00 AM</p>
                <p>Resort Fees: $35.00/night +tax</p>
                <p>Pets Allowed: Yes</p>
            </div>
        </div>
        <div >
            <p class="text-xl py-2">Amenities</p>

            <div class="container">
                <div class="flex flex-wrap lg:grid grid-cols-4 gap-0 py-3">
                    <div class="px-2 text-base py-2">
                        <i class="fa-solid fa-wifi"></i>

                        <span style="color: #aba6a6"> Free Wifi</span>
                    </div>
                    <div class="px-2 text-base py-2">
                        <img src="/img/air.png" class="inline-flex" />

                        <span style="color: #aba6a6"> Air Conditioning</span>
                    </div>
                    <div class="px-2 text-base py-2">
                        <i class="fa-solid fa-briefcase"></i>

                        <span style="color: #aba6a6"> Business center</span>
                    </div>
                    <div class="px-2 text-base py-2">
                        <img src="/img/barbell.png" class="inline-flex" />

                        <span style="color: #aba6a6"> Fitness center</span>
                    </div>
                    <div class="px-2 text-base py-2">
                        <i class="fa fa-paw"></i> Pet

                        <span style="color: #aba6a6"> Friendly</span>
                    </div>
                    <div class="px-2 text-base py-2">
                        <i class="fa-solid fa-utensils"></i>

                        <span style="color: #aba6a6"> Restaurant</span>
                    </div>
                    <div class="px-2 text-base py-2">
                        <svg
                            class="inline-flex"
                            xmlns="http://www.w3.org/2000/svg"
                            width="20"
                            height="23"
                            viewBox="0 0 20 23"
                            fill="none"
                        >
                            <path
                                d="M7.64134 15.9731C8.94134 17.3854 11.058 17.3854 12.358 15.9731C13.658 14.5608 13.658 12.2613 12.358 10.8491L7.64134 15.9731ZM14.9997 2.55642L4.99967 2.54736C4.07467 2.54736 3.33301 3.35309 3.33301 4.35798V18.8429C3.33301 19.8478 4.07467 20.6536 4.99967 20.6536H14.9997C15.9247 20.6536 16.6663 19.8478 16.6663 18.8429V4.35798C16.6663 3.35309 15.9247 2.55642 14.9997 2.55642ZM8.33301 4.35798C8.79134 4.35798 9.16634 4.76537 9.16634 5.26329C9.16634 5.76121 8.79134 6.1686 8.33301 6.1686C7.87467 6.1686 7.49967 5.76121 7.49967 5.26329C7.49967 4.76537 7.87467 4.35798 8.33301 4.35798ZM5.83301 4.35798C6.29134 4.35798 6.66634 4.76537 6.66634 5.26329C6.66634 5.76121 6.29134 6.1686 5.83301 6.1686C5.37467 6.1686 4.99967 5.76121 4.99967 5.26329C4.99967 4.76537 5.37467 4.35798 5.83301 4.35798ZM9.99967 18.8429C7.24134 18.8429 4.99967 16.4077 4.99967 13.4111C4.99967 10.4145 7.24134 7.97923 9.99967 7.97923C12.758 7.97923 14.9997 10.4145 14.9997 13.4111C14.9997 16.4077 12.758 18.8429 9.99967 18.8429Z"
                                fill="#666666"
                            />
                        </svg>
                        <span style="color: #aba6a6">
                            Self-service laundry</span
                        >
                    </div>
                </div>
            </div>
        </div>

        <div>
            <p class="text-xl">Choose your room</p>
                <div class="flex lg:grid grid-cols-3  gap-0 py-1">
                    <div class="px-2 text-base py-2">
                    <p class="">Superior Room, 1 Double Bed</p>
                    </div>
                    <div class="px-2 text-base py-2">
                        <p><span class="font-bold text-lg" style="color: #AD0909;">$106</span>/night</p>
                    </div>
                    <div class="px-2 text-base py-2">
                        <p><a href="/Cart" class="text-white btn-red  font-medium rounded-sm text-sm sm:w-auto px-5 py-2.5 text-center lg:px-28 py-4 px-20">Reserve</a></p>
                    </div>
                </div>
                <div class="flex lg:grid grid-cols-3 gap-0 py-1">
                    <div class="px-2 text-base py-2">
                    <p class="">Superior Room, 2 Twins Bed</p>
                    </div>
                    <div class="px-2 text-base py-2">
                        <p><span class="font-bold text-lg" style="color: #AD0909;">$110</span>/night</p>
                    </div>
                    <div class="px-2 text-base py-2">
                        <p><button class="text-white btn-red  font-medium rounded-sm text-sm sm:w-auto px-5 py-2.5 text-center lg:px-28 py-4 px-20">Reserve</button></p>
                    </div>
                </div>
                <div class="flex lg:grid grid-cols-3  gap-0 py-1">
                    <div class="px-2 text-base py-2">
                    <p class="">Superior Room, 1 Twin Bed & double bed</p>
                    </div>
                    <div class="px-2 text-base py-2">
                        <p><span class="font-bold text-lg" style="color: #AD0909;">$110</span>/night</p>
                    </div>
                    <div class="px-2 text-base py-2">
                        <p><button class="text-white btn-red  font-medium rounded-sm text-sm sm:w-auto px-5 py-2.5 text-center lg:px-28 py-4 px-20">Reserve</button></p>
                    </div>
                </div>
        </div>

        <div>
            <p class="text-xl">About this deal</p>
            <div class="py-1">
                <p class="font-bold">Booking</p>
                <p class="text-base" style="color: #aba6a6">Your account will be charged for the full amount when you book.</p>
            </div>
            <div class="py-1">
                <p class="font-bold">Cancellation policy</p>
                <p class="text-base" style="color: #aba6a6">All bookings are final (no refunds, no changes).</p>
            </div>
            <div class="py-1">
                <p class="font-bold">Low price guarantee</p>
                <p class="text-base" style="color: #aba6a6"> Found a better deal from the same hotel after booking? Contact us, and we'll match it.</p>
            </div>
        </div>
    </section>
    <Footer class="p-text" />
</template>

<style scoped>
.vid-bg {
    background: rgba(23, 1, 1, 0.34);
    box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25),
        0px 4px 4px 0px rgba(0, 0, 0, 0.25);
}
.bg-hero {
    background: rgba(35, 33, 33, 0.76);
}
.text-red {
    color: #ad0909;
}
.bill {
    float: right;
    margin-left: auto;
    color: #ad0909;
}
.btn-red {
    background: #ad0909;
    float: right;
    width: fit-content;
    margin-left: auto;
}
.green-bg {
    background: #48742c;
}
.search-top {
    top: 30%;
}
.p-cad {
    top: 70%;
    margin-left: auto;
    margin-right: auto;
}
.c-text {
    margin-top: calc(50vh + 15rem);
    padding-bottom: 4rem;
}
.p-text {
    margin-top: calc(10vh);
    padding-bottom: 4rem;
}
.strike {
    padding: 20px;
}
.exclusive-bg {
    background: #f4f4f4;
}
.hidden-small {
    display: block;
}

@media (max-width: 768px) {
    .small-width {
        width: 410px;
    }
    .hidden-small {
        display: block;
    }
    .hero-icon {
        margin-top: 15px;
    }
    .p-cad {
        top: 30%;
    }
    .p-text {
        padding-top: calc(5vh + 2rem);
        padding-bottom: 4rem;
    }
}
</style>
