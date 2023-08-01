<script setup>
import { Head, Link, useForm } from "@inertiajs/vue3";
import AdminNavbar from "../../../Components/Admin/AdminNavbar.vue";
import AdminSidebar from "../../../Components/Admin/AdminSidebar.vue";
import { ref, onMounted,  computed } from 'vue';
import { Modal } from "flowbite";
import { watch } from "vue";
const props = defineProps({
    user: Object,
    message:String,
    successmessage: Object,
    errormessage: Object,
    voice: Object,
    quiz: Object,

});

const form = useForm({
    firstname: '',
    lastname: '',
    email: '',
    phone:'',
    address:'',
    position:'',
});

const fileInput = ref(null);
const imageUrl = ref(null);
const submit = () => {
    form.post(route('user.profile.store'));
};
function selectFile($event) {
            form.image = $event.target.files[0];
            const file = $event.target.files[0];
  if (file) {
    const reader = new FileReader();
    reader.onload = ($event) => {
      imageUrl.value = $event.target.result;
    };
    reader.readAsDataURL(file);
  }
        }


</script>
<template>
    <Head title="Dashboard" />
    <div class="flex h-screen bg-black">
        <AdminSidebar />

        <div class="flex-1 flex flex-col overflow-hidden">
            <AdminNavbar />

            <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">
                <div class="container mx-auto px-6 py-8">

      
                    <!--Table start-->
                    
<!--Create form sart-->
<div class="flex flex-col bg-white border shadow-sm rounded-xl p-4 md:p-5 dark:bg-gray-800 dark:border-gray-700 ">
<h2 class="P-3 mb-6 text-black"><b>ADD NEW ADMIN</b></h2>

<form @submit.prevent="submit" enctype="multipart/form-data">
    <div class="grid gap-4 mb-3 md:grid-cols-2 p-3">
        <div >
            <label for="input-label" class="block text-sm  mb-1 dark:text-white">First Name</label>
            <input type="text" v-model="form.firstname" id="floating_email" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
        </div>
        <div >
            <label for="input-label" class="block text-sm  mb-1 dark:text-white">Last Name</label>
            <input type="text" v-model="form.lastname" id="floating_email" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
        </div>
        <div >
            <label for="input-label" class="block text-sm  mb-1 dark:text-white">Email</label>
            <input type="email" v-model="form.email" id="floating_email" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
        </div>
        <div >
            <label for="input-label" class="block text-sm  mb-1 dark:text-white">Mobile Number</label>
            <input type="tel" v-model="form.phone" id="floating_email" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
        </div>
        <div >
            <label for="input-label" class="block text-sm  mb-1 dark:text-white">Address</label>
            <input type="text" v-model="form.address" id="floating_email" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
        </div>
        <div >
            <label for="input-label" class="block text-sm  mb-1 dark:text-white">Password</label>
            <input type="text" v-model="form.position" id="floating_email" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
        </div>
    </div>

  <div class="p-3 ">

<button class="py-3 px-4 text-right rounded-md border border-transparent font-semibold bg-blue-500 text-white hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-800">
    Save Changes

</button>

  </div>
</form>

</div>


<!--ceate form end-->


                    <!--Table end-->
                </div>
            </main>
        </div>
    </div>
</template>
<style scoped>


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
