<script setup>
import { Head, Link, useForm } from '@inertiajs/vue3';
import LoginNav from "../../Components/LoginNav.vue";
import Footer from "../../Components/Footer.vue";
import { ref, onMounted } from "vue";

defineProps({
    canResetPassword: {
        type: Boolean,
    },
    status: {
        type: String,
    },
});

const form = useForm({
    firstname:'',
    lastname: '',
    email: '',
    password: '',
});

const submit = () => {
    form.post(route('register'), {
        onFinish: () => form.reset('password', 'password_confirmation'),
    });
};
</script>

<template>
    <Head title="Login" />

            <LoginNav />
<section class=" my-20">

    <div class="md:flex md:justify-center px-10">
        <form  @submit.prevent="submit">
        <span class="py-6">Create an account</span>
        <div class="grid gap-4  md:grid-cols-1 py-3 ">
        <div >
            <label for="input-label" class="block text-sm  mb-2 dark:text-white">Email Address</label>
            <input type="text" id="title" v-model="form.email" class="py-3 px-4 block w-full border-gray-300 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400" required>
        </div>
        </div>
        <div class="grid gap-4  md:grid-cols-1 py-3 ">
        <div >
            <label for="input-label" class="block text-sm  mb-2 dark:text-white">First Name</label>
            <input type="text" id="title" v-model="form.firstname" class="py-3 px-4 block w-full border-gray-300 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400" required>
        </div>
        </div>
        <div class="grid gap-4  md:grid-cols-1 py-3 ">
        <div >
            <label for="input-label" class="block text-sm  mb-2 dark:text-white">Last Name</label>
            <input type="text" id="title" v-model="form.lastname" class="py-3 px-4 block w-full border-gray-300 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400" required>
        </div>
        </div>

        <div class="grid gap-4  md:grid-cols-1 py-3 ">
        <div >
            <label for="input-label" class="block text-sm  mb-2 dark:text-white">Password</label>
            <input type="text" id="title" v-model="form.password" class="py-3 px-4 block w-full border-gray-300 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400" required>
        </div>
        </div>
        <div>
            <span class="text-base">By creating an account, I agree to the Travelocity <span style="color: #132A7B;">Terms and Conditions </span> and <span style="color:#132A7B;"> Privacy Statement.</span></span>
        </div>

        <div class="flex-auto  justify-center py-3 mt-16 ">
        <div class=" ">
            <button  type="submit" value="Submit" class="text-white w-full item-center font-medium rounded-sm text-sm px-5 py-2.5 text-center  py-4 " style="background: #AD0909;" :disabled="form.processing">Create account</button>

        </div>
        </div>
        <div class="flex justify-center py-3">
            <span style="color: #ABA6A6" >Already have an account? </span><a href="/login" style="color: #132A7B"> Sign in</a>
        </div>


        </form>
    </div>
</section >
  
</template>

<style scoped>
</style>
