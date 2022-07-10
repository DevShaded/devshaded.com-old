<script setup>
import Navbar from '@/Layouts/BobWatts/Navbar.vue';
import Footer from "@/Components/BobWatts/Footer.vue";
import { Head } from "@inertiajs/inertia-vue3";

defineProps({
    title:   String,
    content: String,
    url:     String
})
</script>

<template>
    <Head>
        <title>{{ title }} - Bob Watts</title>
        <meta name="description" :content="content">

        <meta property="og:url" :content="`https://devshaded.com/bobwatts${url}`">
        <meta property="og:title" :content="`${title} - Bob Watts`">
        <meta property="og:description" :content="content">
        <meta property="og:image" content="/favicons/bobwatts/android-chrome-512x512.png">
        <meta property="og:image:width" content="512">
        <meta property="og:image:height" content="512">

        <meta name="twitter:domain" content="https://devshaded.com">
        <meta name="twitter:card" content="summary">
        <meta name="twitter:url" :content="`https://devshaded.com/bobwatts${url}`">
        <meta name="twitter:title" :content="`${title} - Bob Watts`">
        <meta name="twitter:description" :content="content">
        <meta name="twitter:image" content="/favicons/bobwatts/android-chrome-512x512.png">
    </Head>

    <div class="min-h-screen bg-gray-900">
        <!-- Navbar -->
        <Navbar />

        <!-- Main -->
        <main>
            <slot />
        </main>

        <!-- Footer -->
        <Footer />
    </div>
</template>
