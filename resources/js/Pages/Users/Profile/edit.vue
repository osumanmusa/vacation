<script setup>
import {  Head, Link, useForm } from '@inertiajs/vue3';
import UserNavbar from "../../../Components/User/UserNavbar.vue";
import UserSidebar from "../../../Components/User/UserSidebar.vue";
import pagination from "../../../Components/pagination.vue";
import { ref, onMounted } from "vue";

const props=defineProps({
    user:Object,
    message:String,
    successmessage: Object,
    errormessage: Object,

});
const form = useForm({
    name: props.user[0].name,
    email: props.user[0].email,
    image:'',
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

const pass = useForm({
    password:'',
});
const submitpass = () => {
    pass.post(route('user.profile.storepass'));
};
</script>
<template>
    <Head title="Flashcards" />

     <div  class="flex h-screen bg-blue ">
            <UserSidebar/>
            
            <div class="flex-1 flex flex-col overflow-hidden">
                <UserNavbar/>

                <main class="flex-1 overflow-x-hidden overflow-y-auto bg-white">
                    <div class="container mx-auto lg:px-6 py-8">

<!--Create form sart-->
<div class="flex flex-col bg-white border shadow-sm rounded-xl p-4 md:p-5 dark:bg-gray-800 dark:border-gray-700 dark:shadow-slate-700/[.7]">
<h2 class="P-3 mb-6 text-gray-400"><b>PERSONAL INFORMATION</b></h2>

<form @submit.prevent="submit" enctype="multipart/form-data">
    <div class="grid gap-4 mb-3 md:grid-cols-2 p-3">
        <div >
            <label for="input-label" class="block text-sm  mb-2 dark:text-white">User Name</label>
            <input type="text" id="title" v-model="form.name" class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400" :placeholder="user[0].name ">
        </div>
        <div >
            <label for="input-label" class="block text-sm  mb-2 dark:text-white">Email Address</label>
            <input type="email" id="title" v-model="form.email" class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400" :placeholder="user[0].email ">
        </div>
    </div>
    <div class="grid gap-4 mb-3 md:grid-cols-2 p-3">
        <div  >
            <label for="input-label" class="block text-sm  mb-2 dark:text-white">Profile Picture</label>
            <input type="file" id="image"  v-on:change="selectFile"  class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400" >
        </div>
        <div >
            <label for="input-label" class="block text-sm  mb-2 dark:text-white">Selected Image</label>
            <img v-if="imageUrl" 
                        :src="imageUrl" class=" mt-4 h-28 w-28" /> 
        </div>
    </div>

  <div class="p-3 ">

<button class="py-3 px-4 text-right rounded-md border border-transparent font-semibold bg-blue-500 text-white hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-800">
    Save Changes

</button>

  </div>
</form>
  <form @submit.prevent="submitpass" class="py-5">
  <div class="grid gap-4 mb-3 md:grid-cols-2 p-3">
        <div  >
            <label for="input-label" class="block text-sm  mb-2 dark:text-white">Encrypted Password</label>
            <input type="text" disabled :placeholder="user[0].password" class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400" >
        </div>
        <div >
            <label for="input-label" class="block text-sm  mb-2 dark:text-white">New Password</label>
            <input type="text" id="title" v-model="pass.password" class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400" :placeholder="'*******' ">
        </div>
    </div>
    <div class="p-3 ">

<button class="py-3 px-4 text-right rounded-md border border-transparent font-semibold bg-blue-500 text-white hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-800">
    Save Password

</button>

  </div>
</form>
</div>


<!--ceate form end-->



                    </div>
                </main>
            </div>
        </div>






</template>
<style >
.card-submit{
    float:right;
}
</style>