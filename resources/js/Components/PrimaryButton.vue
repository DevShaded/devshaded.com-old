<script setup>
import { Link } from "@inertiajs/inertia-vue3";

defineProps({
    href: String
})
</script>

<template>
    <div class="rounded-md shadow">
        <Link :href="href" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-blue-700 hover:bg-blue-600 md:py-4 md:text-lg md:px-10"> <slot></slot> </Link>
    </div>
</template>
