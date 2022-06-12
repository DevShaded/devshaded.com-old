<script setup>
import { Link } from "@inertiajs/inertia-vue3";
import { computed } from "vue";

const props = defineProps(['href', 'active']);

const classes = computed(() => props.active
    ? 'bg-gray-900 text-white block px-3 py-2 rounded-md text-base font-medium'
    : 'text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium'
);
</script>

<template>
    <Link :href="href" :class="classes">
        <slot />
    </Link>
</template>
