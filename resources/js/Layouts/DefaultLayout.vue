<script setup>
import Navbar from '@/Layouts/Navbar';
import Footer from "@/Components/Footer";
import SvgWaveDown from '@/Components/SvgWaveDown'
import SvgWaveUp from '@/Components/SvgWaveUp'
</script>

<template>
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
