<script setup>
import { Link } from "@inertiajs/inertia-vue3";
import { computed } from "vue";

const props = defineProps(['href', 'active']);

const classes = computed(() => props.active
    ? 'bg-blue-700 text-white px-3 py-2 rounded-md text-sm font-medium'
    : 'bg-blue-600 text-white hover:bg-blue-700 hover:text-white px-3 py-2 z-10 rounded-md text-sm font-medium transition-colors duration-200 ease-in-out'
);
</script>

<template>
    <Link :href="href" :class="classes">
        <slot />
    </Link>
</template>
