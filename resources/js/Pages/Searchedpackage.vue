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
        <div class="text-2xl bg-opacity-10 rounded-xl mb-32">
            <img
                id="bgvideo"
                class="absolute z-10 w-auto min-w-full hero-h lg:h-full brightness-50"
                src="/img/bg-9.png"
                type="video/mp4" 
            />

            <Navbar />
            <div class="flex justify-center visible">
                <div class="absolute search-top z-40 text-white lg:text-5xl">Choose your preferred hotel</div>
                <div class="absolute flex pl-10 grid grid-cols-2 mt-20 search-top search-top2 z-40 ">
                <div class="justify-start lg:px-4 text-white text-sm" >Las Vegas special Hotel packages</div> 
                <div class="justify-end lg:pl-16 text-white text-sm">2 Nights, 3 days</div> 
                </div>
                
            </div>

            <div class="flex justify-center">
                <div class="absolute flex-wrap lg:grid grid-cols-8 mr-0 z-30 p-cad px-8">
                    <div class="col-span-1"></div>

                    <div
                        class="col-span-3 rounded rounded-lg shadow-md right-0 lg:h-full lg:w-[50vw] h-[50vh] w-full"
                        style="
                            background: url('/img/26.png');
                            background-repeat: no-repeat;
                            background-size: cover;
                        "
                    ></div>

                    <div
                        class="col-span-3 pl-10 rounded bg-white shadow-md ml-0 flex flex-col"
                    >
                        <h1 class="pt-6 text-3xl">Rio All-Suite Hotel & Casino</h1>
                        <p class="py-2">
                            <img src="/img/rio.png" class="inline-flex" /><span
                                class="text-sm"
                                style="color: #aba6a6"
                            >
                                3700 W Flamingo Rd</span
                            >
                        </p>
                        <hr class="h-px my-2 bg-gray-200 border-0" />
                        <p class="inline-flex text-lg py-1">What is included</p>
                        <p class="text-lg py-2">
                            <img src="/img/support.png" class="inline-flex" />
                            <span class="px-3 text-base">Hotel Accommodation</span>
                        </p>
                        <p class="text-lg py-2">
                            <img src="/img/support.png" class="inline-flex" />
                            <span class="px-3 text-base">$50 Visa gift card</span>
                        </p>
                        <p class="text-lg py-2">
                            <img src="/img/support.png" class="inline-flex" />
                            <span class="px-3 text-base"
                                >Transportation to presentation</span
                            >
                        </p>
                        <p class="text-lg py-2">
                            <img src="/img/support.png" class="inline-flex" />
                            <span class="px-3 text-base">Customer service </span>
                        </p>
                        <div class="text-lg py-2">
                            <button @click="toggleMore">
                                See more...
                                <Transition name="showmore">
                                    <i
                                        v-if="showMore"
                                        class="fa fa-chevron-down"
                                    ></i>
                                    <i v-else class="fa fa-chevron-up"></i
                                ></Transition>
                            </button>

                            <Transition name="showmore">
                                <div
                                    :class="{ collapse: showMore }"
                                    class="container"
                                >
                                    <div
                                        class="flex lg:grid grid-cols-2 gap-0 py-3"
                                    >
                                        <div class="px-2">
                                            <i class="fa-solid fa-wifi"></i>
                                            Free Wifi
                                        </div>
                                        <div class="px-2">
                                            <img
                                                src="/img/air.png"
                                                class="inline-flex"
                                            />
                                            Air Conditioning
                                        </div>
                                    </div>

                                    <div
                                        class="flex lg:grid grid-cols-2 gap-0 py-3"
                                    >
                                        <div class="px-2">
                                            <i class="fa fa-paw"></i> Pet
                                            Friendly
                                        </div>
                                        <div class="px-2">
                                            <i class="fa-solid fa-utensils"></i>
                                            Restaurant
                                        </div>
                                    </div>

                                    <div
                                        class="flex lg:grid grid-cols-2 gap-0 py-3"
                                    >
                                        <div class="px-2">
                                            <i
                                                class="fa-solid fa-briefcase"
                                            ></i>
                                            Business center
                                        </div>
                                        <div class="px-2">
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
                                            Self-service laundry
                                        </div>
                                    </div>
                                </div>
                            </Transition>
                        </div>
                        <p>
                            <span class="bill px-10 text-5xl py-3">$99</span>
                        </p>
                        <span class="text-sm bill px-7 pb-2"
                            ><i class="fa-solid fa-circle-exclamation"></i> 90
                            minute presentation required</span
                        >
                        <a
                            href="/Searchedpackagedetail"
                            class="btn-red text-white text-lg py-4 px-6 mt-auto"
                        >
                            Total for 2 nights excludes daily resort fees &
                            taxes
                        </a>
                    </div>
                    <div class="col-span-1"></div>
                </div>
            </div>
        </div>
    </header>
    <section class="c-text">
        <div class="flex justify-center py-12">
            <div class=" flex-wrap lg:grid grid-cols-8 mr-0 z-30 px-8">
                <div class="col-span-1"></div>

                <div
                    class="col-span-3 rounded rounded-lg shadow-md right-0 lg:h-full lg:w-[50vw] h-[50vh] w-full"
                    style="
                        background: url('/img/26.png');
                        background-repeat: no-repeat;
                        background-size: cover;
                    "
                ></div>

                <div
                    class="col-span-3 pl-10 rounded bg-white shadow-md ml-0 flex flex-col"
                >
                    <h1 class="pt-6 text-2xl">The STRAT Hotel, Casino and SkyPod</h1>
                    <p class="py-2">
                        <img src="/img/rio.png" class="inline-flex" /><span
                            class="text-sm"
                            style="color: #aba6a6"
                        >
                        2000 S Las Vegas Blvd</span
                        >
                    </p>
                    <hr class="h-px my-2 bg-gray-200 border-0" />
                    <p class="inline-flex text-lg py-1">What is included</p>
                    <p class="text-lg py-2">
                        <img src="/img/support.png" class="inline-flex" />
                        <span class="px-3 text-base">Hotel Accommodation</span>
                    </p>
                    <p class="text-lg py-2">
                        <img src="/img/support.png" class="inline-flex" />
                        <span class="px-3 text-base">$50 Visa gift card</span>
                    </p>
                    <p class="text-lg py-2">
                        <img src="/img/support.png" class="inline-flex" />
                        <span class="px-3 text-base">Transportation to presentation</span>
                    </p>
                    <p class="text-lg py-2">
                        <img src="/img/support.png" class="inline-flex" />
                        <span class="px-3 text-base">Customer service </span>
                    </p>
                    <div class="text-lg py-2">
                        <button @click="toggleMore">
                            See more...
                            <Transition name="showmore">
                                <i
                                    v-if="showMore"
                                    class="fa fa-chevron-down"
                                ></i>
                                <i v-else class="fa fa-chevron-up"></i
                            ></Transition>
                        </button>

                        <Transition name="showmore">
                            <div
                                :class="{ collapse: showMore }"
                                class="container"
                            >
                                <div
                                    class="flex lg:grid grid-cols-2 gap-0 py-3"
                                >
                                    <div class="px-2">
                                        <i class="fa-solid fa-wifi"></i> Free
                                        Wifi
                                    </div>
                                    <div class="px-2">
                                        <img
                                            src="/img/air.png"
                                            class="inline-flex"
                                        />
                                        Air Conditioning
                                    </div>
                                </div>

                                <div
                                    class="flex lg:grid grid-cols-2 gap-0 py-3"
                                >
                                    <div class="px-2">
                                        <i class="fa fa-paw"></i> Pet Friendly
                                    </div>
                                    <div class="px-2">
                                        <i class="fa-solid fa-utensils"></i>
                                        Restaurant
                                    </div>
                                </div>

                                <div
                                    class="flex lg:grid grid-cols-2 gap-0 py-3"
                                >
                                    <div class="px-2">
                                        <i class="fa-solid fa-briefcase"></i>
                                        Business center
                                    </div>
                                    <div class="px-2">
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
                                        Self-service laundry
                                    </div>
                                </div>
                            </div>
                        </Transition>
                    </div>
                    <p>
                        <span class="bill px-10 text-5xl py-3">$99</span>
                    </p>
                    <span class="text-sm bill px-7 pb-2"
                        ><i class="fa-solid fa-circle-exclamation"></i> 90
                        minute presentation required</span
                    >
                    <a
                        href="/packagedetails"
                        class="btn-red text-white text-lg py-4 px-6 mt-auto"
                    >
                        Total for 2 nights excludes daily resort fees & taxes
                    </a>
                </div>
                <div class="col-span-1"></div>
            </div>
        </div>

        <div class="flex justify-center py-12">
            <div class=" flex-wrap lg:grid grid-cols-8 mr-0 z-30 px-8">
                <div class="col-span-1"></div>

                <div
                    class="col-span-3 rounded rounded-lg shadow-md right-0 lg:h-full lg:w-[50vw] h-[50vh] w-full"
                    style="
                        background: url('/img/26.png');
                        background-repeat: no-repeat;
                        background-size: cover;
                    "
                ></div>

                <div
                    class="col-span-3 pl-10 rounded bg-white shadow-md ml-0 flex flex-col"
                >
                    <h1 class="pt-6 text-3xl">Alexis Park Resort</h1>
                    <p class="py-2">
                        <img src="/img/rio.png" class="inline-flex" /><span
                            class="text-sm"
                            style="color: #aba6a6"
                        >
                            3700 W Flamingo Rd</span
                        >
                    </p>
                    <hr class="h-px my-2 bg-gray-200 border-0" />
                    <p class="inline-flex text-lg py-1">What is included</p>
                    <p class="text-lg py-2">
                        <img src="/img/support.png" class="inline-flex" />
                        <span class="px-3 text-base">Hotel Accommodation</span>
                    </p>
                    <p class="text-lg py-2">
                        <img src="/img/support.png" class="inline-flex" />
                        <span class="px-3 text-base">$50 Visa gift card</span>
                    </p>
                    <p class="text-lg py-2">
                        <img src="/img/support.png" class="inline-flex" />
                        <span class="px-3 text-base">Transportation to presentation</span>
                    </p>
                    <p class="text-lg py-2">
                        <img src="/img/support.png" class="inline-flex" />
                        <span class="px-3 text-base">Customer service </span>
                    </p>
                    <div class="text-lg py-2">
                        <button @click="toggleMore">
                            See more...
                            <Transition name="showmore">
                                <i
                                    v-if="showMore"
                                    class="fa fa-chevron-down"
                                ></i>
                                <i v-else class="fa fa-chevron-up"></i
                            ></Transition>
                        </button>

                        <Transition name="showmore">
                            <div
                                :class="{ collapse: showMore }"
                                class="container"
                            >
                                <div
                                    class="flex lg:grid grid-cols-2 gap-0 py-3"
                                >
                                    <div class="px-2">
                                        <i class="fa-solid fa-wifi"></i> Free
                                        Wifi
                                    </div>
                                    <div class="px-2">
                                        <img
                                            src="/img/air.png"
                                            class="inline-flex"
                                        />
                                        Air Conditioning
                                    </div>
                                </div>

                                <div
                                    class="flex lg:grid grid-cols-2 gap-0 py-3"
                                >
                                    <div class="px-2">
                                        <i class="fa fa-paw"></i> Pet Friendly
                                    </div>
                                    <div class="px-2">
                                        <i class="fa-solid fa-utensils"></i>
                                        Restaurant
                                    </div>
                                </div>

                                <div
                                    class="flex lg:grid grid-cols-2 gap-0 py-3"
                                >
                                    <div class="px-2">
                                        <i class="fa-solid fa-briefcase"></i>
                                        Business center
                                    </div>
                                    <div class="px-2">
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
                                        Self-service laundry
                                    </div>
                                </div>
                            </div>
                        </Transition>
                    </div>
                    <p>
                        <span class="bill px-10 text-5xl py-3">$119</span>
                    </p>
                    <span class="text-sm bill px-7 pb-2 mt-auto"
                        ><i class="fa-solid fa-circle-exclamation"></i> 90
                        minute presentation required</span
                    >
                    <a
                        href="/packagedetails"
                        class="btn-red text-white text-lg py-4 px-6 mt-auto"
                    >
                        Total for 2 nights excludes daily resort fees & taxes
                    </a>
                </div>
                <div class="col-span-1"></div>
            </div>
        </div>

        <div class="flex justify-center py-12">
            <div class=" flex-wrap lg:grid grid-cols-8 mr-0 z-30 px-8">
                <div class="col-span-1"></div>

                <div
                    class="col-span-3 rounded rounded-lg shadow-md right-0 lg:h-full lg:w-[50vw] h-[50vh] w-full"
                    style="
                        background: url('/img/26.png');
                        background-repeat: no-repeat;
                        background-size: cover;
                    "
                ></div>

                <div
                    class="col-span-3 pl-10 rounded bg-white shadow-md ml-0 flex flex-col"
                >
                    <h1 class="pt-6 text-3xl">Fremont Hotel And Casino</h1>
                    <p class="py-2">
                        <img src="/img/rio.png" class="inline-flex" /><span
                            class="text-sm"
                            style="color: #aba6a6"
                        >
                        3700 W Flamingo Rd</span
                        >
                    </p>
                    <hr class="h-px my-2 bg-gray-200 border-0" />
                    <p class="inline-flex text-lg py-1">What is included</p>
                    <p class="text-lg py-2">
                        <img src="/img/support.png" class="inline-flex" />
                        <span class="px-3 text-base">Hotel Accommodation</span>
                    </p>
                    <p class="text-lg py-2">
                        <img src="/img/support.png" class="inline-flex" />
                        <span class="px-3 text-base">$50 Visa gift card</span>
                    </p>
                    <p class="text-lg py-2">
                        <img src="/img/support.png" class="inline-flex" />
                        <span class="px-3 text-base">Transportation to presentation</span>
                    </p>
                    <p class="text-lg py-2">
                        <img src="/img/support.png" class="inline-flex" />
                        <span class="px-3 text-base">Customer service </span>
                    </p>
                    <div class="text-lg py-2">
                        <button @click="toggleMore">
                            See more...
                            <Transition name="showmore">
                                <i
                                    v-if="showMore"
                                    class="fa fa-chevron-down"
                                ></i>
                                <i v-else class="fa fa-chevron-up"></i
                            ></Transition>
                        </button>

                        <Transition name="showmore">
                            <div
                                :class="{ collapse: showMore }"
                                class="container"
                            >
                                <div
                                    class="flex lg:grid grid-cols-2 gap-0 py-3"
                                >
                                    <div class="px-2">
                                        <i class="fa-solid fa-wifi"></i> Free
                                        Wifi
                                    </div>
                                    <div class="px-2">
                                        <img
                                            src="/img/air.png"
                                            class="inline-flex"
                                        />
                                        Air Conditioning
                                    </div>
                                </div>

                                <div
                                    class="flex lg:grid grid-cols-2 gap-0 py-3"
                                >
                                    <div class="px-2">
                                        <i class="fa fa-paw"></i> Pet Friendly
                                    </div>
                                    <div class="px-2">
                                        <i class="fa-solid fa-utensils"></i>
                                        Restaurant
                                    </div>
                                </div>

                                <div
                                    class="flex lg:grid grid-cols-2 gap-0 py-3"
                                >
                                    <div class="px-2">
                                        <i class="fa-solid fa-briefcase"></i>
                                        Business center
                                    </div>
                                    <div class="px-2">
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
                                        Self-service laundry
                                    </div>
                                </div>
                            </div>
                        </Transition>
                    </div>
                    <p>
                        <span class="bill px-10 text-5xl py-3">$349</span>
                    </p>
                    <span class="text-sm bill px-7 pb-2"
                        ><i class="fa-solid fa-circle-exclamation"></i> 90
                        minute presentation required</span
                    >
                    <a
                        href="/packagedetails"
                        class="btn-red text-white text-lg py-4 px-6 mt-auto"
                    >
                        Total for 2 nights excludes daily resort fees & taxes
                    </a>
                </div>
                <div class="col-span-1"></div>
            </div>
        </div>

        <div class="flex justify-center py-12">
            <div class=" flex-wrap lg:grid grid-cols-8 mr-0 z-30 px-8">
                <div class="col-span-1"></div>

                <div
                    class="col-span-3 rounded rounded-lg shadow-md right-0 lg:h-full lg:w-[50vw] h-[50vh] w-full"
                    style="
                        background: url('/img/26.png');
                        background-repeat: no-repeat;
                        background-size: cover;
                    "
                ></div>

                <div
                    class="col-span-3 pl-10 rounded bg-white shadow-md ml-0 flex flex-col"
                >
                    <h1 class="pt-6 text-3xl">Mardi Gras Hotel & Casino</h1>
                    <p class="py-2">
                        <img src="/img/rio.png" class="inline-flex" /><span
                            class="text-sm"
                            style="color: #aba6a6"
                        >
                            3700 W Flamingo Rd</span
                        >
                    </p>
                    <hr class="h-px my-2 bg-gray-200 border-0" />
                    <p class="inline-flex text-lg py-1">What is included</p>
                    <p class="text-lg py-2">
                        <img src="/img/support.png" class="inline-flex" />
                        <span class="px-3 text-base">Hotel Accommodation</span>
                    </p>
                    <p class="text-lg py-2">
                        <img src="/img/support.png" class="inline-flex" />
                        <span class="px-3 text-base">$50 Visa gift card</span>
                    </p>
                    <p class="text-lg py-2">
                        <img src="/img/support.png" class="inline-flex" />
                        <span class="px-3 text-base">Transportation to presentation</span>
                    </p>
                    <p class="text-lg py-2">
                        <img src="/img/support.png" class="inline-flex" />
                        <span class="px-3 text-base">Customer service </span>
                    </p>
                    <div class="text-lg py-2">
                        <button @click="toggleMore">
                            See more...
                            <Transition name="showmore">
                                <i
                                    v-if="showMore"
                                    class="fa fa-chevron-down"
                                ></i>
                                <i v-else class="fa fa-chevron-up"></i
                            ></Transition>
                        </button>

                        <Transition name="showmore">
                            <div
                                :class="{ collapse: showMore }"
                                class="container"
                            >
                                <div
                                    class="flex lg:grid grid-cols-2 gap-0 py-3"
                                >
                                    <div class="px-2">
                                        <i class="fa-solid fa-wifi"></i> Free
                                        Wifi
                                    </div>
                                    <div class="px-2">
                                        <img
                                            src="/img/air.png"
                                            class="inline-flex"
                                        />
                                        Air Conditioning
                                    </div>
                                </div>

                                <div
                                    class="flex lg:grid grid-cols-2 gap-0 py-3"
                                >
                                    <div class="px-2">
                                        <i class="fa fa-paw"></i> Pet Friendly
                                    </div>
                                    <div class="px-2">
                                        <i class="fa-solid fa-utensils"></i>
                                        Restaurant
                                    </div>
                                </div>

                                <div
                                    class="flex lg:grid grid-cols-2 gap-0 py-3"
                                >
                                    <div class="px-2">
                                        <i class="fa-solid fa-briefcase"></i>
                                        Business center
                                    </div>
                                    <div class="px-2">
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
                                        Self-service laundry
                                    </div>
                                </div>
                            </div>
                        </Transition>
                    </div>
                    <p>
                        <span class="bill px-10 text-5xl py-3 top-0 left-0">$399</span>
                    </p>
                    <span class="text-sm bill px-7 pb-2"
                        ><i class="fa-solid fa-circle-exclamation"></i> 90
                        minute presentation required</span
                    >
                    <a
                        href="/packagedetails"
                        class="btn-red text-white text-lg py-4 px-6 mt-auto"
                    >
                        Total for 2 nights excludes daily resort fees & taxes
                    </a>
                </div>
                <div class="col-span-1"></div>
            </div>
        </div>
    </section>

    
    <Footer class="p-text"/>

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
.search-top{
    top:30%;
}
.p-cad {
    top: 60%;
    margin-left: auto;
    margin-right: auto;
}
.c-text {
    margin-top: calc(44vh + 15rem);
    padding-bottom: 4rem;
}
.p-text {
    margin-top: calc(10vh);
    padding-bottom: 4rem;
}
.strike {
    padding: 20px;
} 
.hero-h{
        border-bottom-right-radius: 350px;
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
        top: 45%;
    }
    .p-text {
        padding-top: calc(3vh + 2rem);
    }
    .search-top{
    top:25%;
    }
    .search-top2{
    top:20%;
    }
    .hero-h{
        height: 90vh;
    }
.c-text {
    margin-top: calc(60vh + 23rem);
    padding-bottom: 4rem;
}
}

@media only screen and (min-width: 1440px)
{ /* Your Styles... */ 
    .p-cad {
    top: 60%;
    margin-left: auto;
    margin-right: auto;
}
.c-text {
    margin-top: calc(25vh + 15rem);
    padding-bottom: 4rem;
}

}
</style>
