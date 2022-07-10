<script setup>
import DefaultLayout from "@/Layouts/DefaultLayout.vue";

defineProps({
    repositories: Object
})
</script>

<template>
    <DefaultLayout title="My Projects" content="The Fullstack Web Developer from Norway, here are the official projects that DevShaded has made" :url="$page.url">
        <!-- Header -->
        <header class="relative overflow-hidden mt-28 lg:-mt-16">
            <div class="pb-16 mx-auto max-w-7xl px-4 sm:mt-24">
                <div class="text-center">
                    <h1 class="text-6xl tracking-tight font-extrabold text-white md:text-7xl">
                        <span class="block xl:inline">My</span>
                        {{ ' ' }}
                        <span class="block text-blue-600 xl:inline">Projects</span>
                    </h1>
                    <p class="mt-3 max-w-md mx-auto text-base text-gray-400 sm:text-lg md:mt-5 md:text-xl md:max-w-3xl">Here you can find my own projects and some projects I have contributed too on GitHub</p>
                </div>
            </div>
        </header>

        <!-- GitHub repos -->
        <section class="max-w-7xl mx-auto my-5">
            <ul role="list" class="grid grid-cols-1 gap-6 mx-5 sm:grid-cols-1 lg:grid-cols-2 xl:grid-cols-3">
                <li v-for="repository in repositories" :key="repository.name" class="col-span-1 bg-gray-800 rounded-lg shadow divide-y divide-gray-200 shadow-blue-700 shadow-md">
                    <div class="w-full flex items-center justify-between p-6 space-x-6">
                        <div class="flex-1 truncate">
                            <div class="flex items-center space-x-3">
                                <h3 class="text-gray-100 text-sm font-medium truncate">{{ repository.name }}</h3>
                                <span v-if="repository.language" class="flex-shrink-0 inline-block px-2 py-0.5 text-blue-900 text-xs font-medium bg-blue-300 rounded-full">{{ repository.language }}</span>
                            </div>
                            <p class="mt-1 text-gray-300 text-sm truncate">{{ repository.description ?? 'No description specified' }}</p>
                        </div>
                    </div>
                    <div>
                        <div class="-mt-px flex">
                            <div class="w-0 flex-1 flex">
                                <a :href="`${repository.url}`" class="relative -mr-px w-0 flex-1 inline-flex items-center justify-center py-4 text-sm text-gray-300 font-medium border border-transparent rounded-bl-lg hover:text-gray-100">
                                    <i class="fab fa-github text-gray-300 text-xl" aria-label="true"></i>
                                    <span class="ml-3">GitHub Link</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </section>
    </DefaultLayout>
</template>
