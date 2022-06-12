<script setup>
import Navbar from '@/Layouts/Navbar';
import Footer from "@/Components/Footer";
import SvgWaveDown from '@/Components/SvgWaveDown'
import SvgWaveUp from '@/Components/SvgWaveUp'
import { Head } from "@inertiajs/inertia-vue3";

defineProps({
    title:   String,
    content: String,
    url:     String
})
</script>

<template>
    <Head>
        <title>{{ title }} - DevShaded</title>
        <meta name="description" :content="content">

        <meta property="og:url" :content="`https://devshaded.com${url}`">
        <meta property="og:title" :content="`${title} - DevShaded`">
        <meta property="og:description" :content="content">
        <meta property="og:image" content="/favicons/android-chrome-512x512.png">

        <meta name="twitter:domain" content="https://devshaded.com">
        <meta name="twitter:card" content="summary">
        <meta name="twitter:url" :content="`https://devshaded.com${url}`">
        <meta name="twitter:title" :content="`${title} - DevShaded`">
        <meta name="twitter:description" :content="content">
        <meta name="twitter:image" content="/favicons/android-chrome-512x512.png">
    </Head>

    <div class="min-h-screen bg-gray-900">
        <!-- Navbar -->
        <Navbar />

        <!-- Main -->
        <SvgWaveDown />
        <main>
            <slot />
        </main>

        <!-- Footer -->
        <SvgWaveUp />
        <Footer />
    </div>
</template>
