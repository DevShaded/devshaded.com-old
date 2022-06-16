<script setup>
import { Disclosure, DisclosureButton, DisclosurePanel } from '@headlessui/vue'
import { MenuIcon, XIcon } from '@heroicons/vue/outline'
import NavLink from '@/Components/NavLink'
import ResponsiveNavLink from '@/Components/ResponsiveNavLink'
</script>

<template>
    <Disclosure as="nav" class="bg-gray-800 sticky top-0 z-50" v-slot="{ open }">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">
                <div class="flex items-center">
                    <div class="flex-shrink-0">
                        <a href="/bobwatts">
                            <img class="block lg:hidden h-12 w-auto" src="/images/bobwatts/BobWattsLogoRounded.png" alt="Bob Watts"/>
                        </a>

                        <a href="/bobwatts">
                            <img class="hidden lg:block h-12 w-auto" src="/images/bobwatts/BobWattsLogoRounded.png" alt="Bob Watts"/>
                        </a>
                    </div>
                    <div class="hidden sm:block sm:ml-6">
                        <div class="flex space-x-4">
                            <NavLink :href="'/bobwatts'" :active="$page.url === '/bobwatts'">Home</NavLink>
                            <NavLink :href="'/bobwatts/commands'" :active="$page.url === '/bobwatts/commands'">Commands</NavLink>
                            <NavLink :href="'/bobwatts/faq'" :active="$page.url === '/bobwatts/faq'">FAQs</NavLink>
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
                    <ResponsiveNavLink :href="'/bobwatts'" :active="$page.url === '/bobwatts'">Home</ResponsiveNavLink>
                    <ResponsiveNavLink :href="'/bobwatts/commands'" :active="$page.url === '/bobwatts/commands'">Commands</ResponsiveNavLink>
                    <ResponsiveNavLink :href="'/bobwatts/faq'" :active="$page.url === '/bobwatts/faq'">FAQs</ResponsiveNavLink>
                </div>
            </DisclosurePanel>
        </transition>
    </Disclosure>
</template>
