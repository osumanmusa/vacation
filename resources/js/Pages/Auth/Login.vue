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
    email: '',
    password: '',
});

const submit = () => {
    form.post(route('login'), {
        onFinish: () => form.reset('password'),
    });
};

</script>

<template>
    <Head title="Login" />

            <LoginNav />
<section class=" my-20">

    <div class="md:flex md:justify-center px-10">
        <form @submit.prevent="submit">
        <span class="py-6">Sign in</span>
        <div class="grid gap-4  md:grid-cols-1 py-3 ">
        <div >
            <label for="input-label" class="block text-sm  mb-2 dark:text-white">Email Address</label>
            <input type="text" id="title" v-model="form.email"  class="py-3 px-4 block w-full border-gray-300 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400" required>
        </div>
        </div>

        <div class="grid gap-4  md:grid-cols-1 py-3 ">
        <div >
            <label for="input-label" class="block text-sm  mb-2 dark:text-white">Password</label>
            <input type="text" id="title" v-model="form.password"  class="py-3 px-4 block w-full border-gray-300 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400" required>
        </div>
        </div>
        <div>
            <span class="text-base">By signing in, I agree to the <span style="color: #132A7B;">Terms and Conditions </span> and <span style="color:#132A7B;"> Privacy Statement.</span></span>
        </div>

        <div class="flex-auto  justify-center py-3 mt-6 ">
        <div class=" ">
            <button  type="submit" value="Submit" class="text-white w-full item-center font-medium rounded-sm text-sm px-5 py-2.5 text-center  py-4 " style="background: #AD0909;">Sign in</button>

        </div>
        </div>
        <div class="flex justify-center py-3">
            <span style="color: #ABA6A6" >Don’t have an account?</span><a href="/register" style="color: #132A7B"> Create one</a>
        </div>


        </form>
    </div>
</section >
  

</template>

<style scoped>
</style>
