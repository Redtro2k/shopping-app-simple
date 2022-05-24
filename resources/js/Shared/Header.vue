<template>
<Head title="Welcome" />

    <header class="text-gray-600 body-font">
        <!-- Navigation & logo w/ title -->
        <div class="container mx-auto flex flex-wrap p-6 flex-col md:flex-row items-center">
            <a href="/" class="flex title-font font-meduim items-center text-gray-900 mb-4 md:mb-0">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-indigo-500 rounded-full" viewBox="0 0 24 24">
                    <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
                </svg>
                <span class="ml-3 text-xl">Redtro Shopping</span>
            </a>
            <!-- Navigation & w/ button -->
             <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center">
                <Link class="mr-5 hover:text-gray-900" v-show="$page.props.auth.user == null ? false : true" :href="route('product')">Shopping Cart</Link>
                <Link v-if="$page.props.auth.user" :href="route('dashboard')" class="mr-5 hover:text-gray-900">Dashboard</Link>
                <template v-else>
                    <Link class="mr-5 hover:text-gray-900" :href="route('login')">Log in</Link>
                    <Link v-if="$page.props.auth.user == null ? true : false" class="mr-5 hover:text-gray-900" :href="route('register')">Register</Link>
                </template>
            </nav>
        </div>
    </header>
</template>
<script setup>
import { Head, Link } from '@inertiajs/inertia-vue3';


defineProps({
    canLogin: Boolean,
    canRegister: Boolean,
    laravelVersion: String,
    phpVersion: String,
})
</script>
