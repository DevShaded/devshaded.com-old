<script setup>
import { Disclosure, DisclosureButton, DisclosurePanel } from '@headlessui/vue'
import { MenuIcon, XIcon } from '@heroicons/vue/outline'
import NavLink from '@/Components/NavLink.vue'
import ResponsiveNavLink from '@/Components/ResponsiveNavLink.vue'
</script>

<template>
    <Disclosure as="nav" class="bg-gray-800 sticky top-0 z-50" v-slot="{ open }">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">
                <div class="flex items-center">
                    <div class="flex-shrink-0">
                        <a href="/">
                            <img class="block lg:hidden h-12 w-auto" src="../images/logo.png" alt="DevShaded"/>
                        </a>

                        <a href="/">
                            <img class="hidden lg:block h-12 w-auto" src="../images/logo.png" alt="DevShaded"/>
                        </a>
                    </div>
                    <div class="hidden sm:block sm:ml-6">
                        <div class="flex space-x-4">
                            <NavLink :href="'/'" :active="$page.url === '/'">Home</NavLink>
                            <NavLink :href="'/about'" :active="$page.url === '/about'">About me</NavLink>
                            <NavLink :href="'/contact'" :active="$page.url === '/contact'">Contact me</NavLink>
                            <NavLink :href="'/projects'" :active="$page.url === '/projects'">My Projects</NavLink>
                            <a class="bg-blue-600 text-white hover:bg-blue-700 hover:text-white px-3 py-2 z-10 rounded-md text-sm font-medium transition-colors duration-200 ease-in-out"
                               href="/bobwatts">Bob Watts</a>
                        </div>
                    </div>
                </div>
                <div class="-mr-2 flex sm:hidden">
                    <!-- Mobile menu button -->
                    <DisclosureButton
                        class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white">
                        <span class="sr-only">Open main menu</span>
                        <MenuIcon v-if="!open" class="block h-6 w-6" aria-hidden="true"/>
                        <XIcon v-else class="block h-6 w-6" aria-hidden="true"/>
                    </DisclosureButton>
                </div>
            </div>
        </div>

        <transition enter-active-class="transition ease-out duration-200"
                    enter-from-class="transform opacity-0 scale-95"
                    enter-to-class="transform opacity-100 scale-100"
                    leave-active-class="transition ease-in duration-75"
                    leave-from-class="transform opacity-100 scale-100"
                    leave-to-class="transform opacity-0 scale-95">
            <DisclosurePanel class="sm:hidden">
                <div class="px-2 pt-2 pb-3 space-y-1">
                    <ResponsiveNavLink :href="'/'" :active="$page.url === '/'">Home</ResponsiveNavLink>
                    <ResponsiveNavLink :href="'/about'" :active="$page.url === '/about'">About me</ResponsiveNavLink>
                    <ResponsiveNavLink :href="'/contact'" :active="$page.url === '/contact'">Contact me
                    </ResponsiveNavLink>
                    <ResponsiveNavLink :href="'/projects'" :active="$page.url === '/projects'">My projects
                    </ResponsiveNavLink>
                    <a class="bg-blue-600 text-white hover:bg-blue-700 block px-3 py-2 rounded-md text-base font-medium"
                       href="/bobwatts">Bob Watts</a>
                </div>
            </DisclosurePanel>
        </transition>
    </Disclosure>
</template>
