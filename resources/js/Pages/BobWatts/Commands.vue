<script setup>
import BobWattsLayout from '@/Layouts/BobWatts/BobWattsLayout.vue'
import { Menu, MenuButton, MenuItem, MenuItems, Disclosure, DisclosureButton, DisclosurePanel } from '@headlessui/vue'
import { ChevronDownIcon } from '@heroicons/vue/solid'
</script>

<script>
export default {
    data() {
        return {
            activeItem: 'fun',
        }
    },

    props: {
        data: Object
    },

    methods: {
        isActive(menuItem) {
            return this.activeItem === menuItem
        },

        setActive(menuItem) {
            this.activeItem = menuItem
        },
    }
}
</script>

<template>
    <BobWattsLayout title="Commands" content="Here is the official commands list for Bob Watts" url="/commands">
        <div class="max-w-7xl mx-auto">
            <!-- Header -->
            <header class="my-16 mx-auto max-w-7xl px-4 sm:mt-24 sm:px-6 lg:mt-32">
                <div class="lg:grid lg:grid-cols-12 lg:gap-8">
                    <div class="sm:text-center md:max-w-2xl md:mx-auto lg:col-span-6 lg:text-left">
                        <h1>
                        <span class="mt-1 block text-4xl tracking-tight font-extrabold sm:text-5xl xl:text-6xl">
                            <span class="block text-gray-200">Bob Watts</span>
                            <span class="block text-blue-600">The official commands list</span>
                      </span>
                        </h1>
                        <p class="mt-3 text-base text-gray-400 sm:mt-5 sm:text-xl lg:text-lg xl:text-xl">Looking for what Bob Watts has to offer? Here you can see every command Bob Watts offers</p>
                        <div class="w-1/2 pt-4 sm:mx-auto lg:mx-0">
                            <a href="/bobwatts/invite" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-blue-700 hover:bg-blue-600 md:py-4 md:text-lg md:px-10">Invite me!</a>
                        </div>
                    </div>
                    <div
                        class="mt-12 relative sm:max-w-lg sm:mx-auto lg:mt-0 lg:max-w-none lg:mx-0 lg:col-span-6 lg:flex lg:items-center">
                        <div class="relative mx-auto w-full rounded-lg shadow-lg lg:max-w-md">
                            <span class="sr-only">Watch our video to learn more</span>
                            <img class="w-full rounded-xl" src="/images/bobwatts/BobWattsLogo.webp" alt="Bob Watts"/>
                        </div>
                    </div>
                </div>
            </header>

            <!-- Command section clicking thing I have no idea what to call it -->
            <div>
                <div class="hidden lg:block flex-wrap space-x-2 mt-6 mx-5">
                    <a v-if="data.categories.fun" @click.prevent="setActive('fun')" :class="{ active: isActive('fun') }" href="#fun" class="inline-flex items-center p-2 border border-transparent rounded-md shadow-sm text-white bg-blue-700 hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Fun Commands</a>
                    <a v-if="data.categories.information" @click.prevent="setActive('information')" :class="{ active: isActive('information') }" href="#information" class="inline-flex items-center p-2 border border-transparent rounded-md shadow-sm text-white bg-blue-700 hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Information Commands</a>
                    <a v-if="data.categories.moderation" @click.prevent="setActive('moderation')" :class="{ active: isActive('moderation') }" href="#moderation" class="inline-flex items-center p-2 border border-transparent rounded-md shadow-sm text-white bg-blue-700 hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Moderation Commands</a>
                    <a v-if="data.categories.public" @click.prevent="setActive('public')" :class="{ active: isActive('public') }" href="#public" class="inline-flex items-center p-2 border border-transparent rounded-md shadow-sm text-white bg-blue-700 hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Public Commands</a>
                    <a v-if="data.categories.settings" @click.prevent="setActive('settings')" :class="{ active: isActive('settings') }" href="#settings" class="inline-flex items-center p-2 border border-transparent rounded-md shadow-sm text-white bg-blue-700 hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Settings Commands</a>
                </div>

                <Menu as="div" class="relative inline-block mx-5 text-left lg:hidden">
                    <div>
                        <MenuButton class="inline-flex justify-center w-full rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-gray-800 text-sm font-medium text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-500 focus:ring-gray-700">
                            Options
                            <ChevronDownIcon class="-mr-1 ml-2 h-5 w-5" aria-hidden="true" />
                        </MenuButton>
                    </div>

                    <transition enter-active-class="transition ease-out duration-100" enter-from-class="transform opacity-0 scale-95" enter-to-class="transform opacity-100 scale-100" leave-active-class="transition ease-in duration-75" leave-from-class="transform opacity-100 scale-100" leave-to-class="transform opacity-0 scale-95">
                        <MenuItems class="origin-top-left absolute left-0 mt-2 w-32 rounded-md shadow-lg bg-gray-800 ring-1 ring-black ring-opacity-5 focus:outline-none">
                            <div class="py-1">
                                <MenuItem v-slot="{ active }">
                                    <a v-if="data.categories.fun" @click.prevent="setActive('fun')" :class="[active ? 'bg-gray-800 text-gray-200' : 'text-gray-300', 'block px-4 py-2 text-sm', { active: isActive('fun') }]" href="#fun">Fun</a>
                                </MenuItem>
                                <MenuItem v-slot="{ active }">
                                    <a v-if="data.categories.information" @click.prevent="setActive('information')" :class="[active ? 'bg-gray-800 text-gray-200' : 'text-gray-300', 'block px-4 py-2 text-sm', { active: isActive('information') }]" href="#information">Information</a>
                                </MenuItem>
                                <MenuItem v-slot="{ active }">
                                    <a v-if="data.categories.moderation" @click.prevent="setActive('moderation')" :class="[active ? 'bg-gray-800 text-gray-200' : 'text-gray-300', 'block px-4 py-2 text-sm', { active: isActive('moderation') }]" href="#moderation">Moderation</a>
                                </MenuItem>
                                <MenuItem v-slot="{ active }">
                                    <a v-if="data.categories.public" @click.prevent="setActive('public')" :class="[active ? 'bg-gray-800 text-gray-200' : 'text-gray-300', 'block px-4 py-2 text-sm', { active: isActive('public') }]" href="#public">Public</a>
                                </MenuItem>
                                <MenuItem v-slot="{ active }">
                                    <a v-if="data.categories.settings" @click.prevent="setActive('settings')" :class="[active ? 'bg-gray-800 text-gray-200' : 'text-gray-300', 'block px-4 py-2 text-sm', { active: isActive('settings') }]" href="#settings">Settings</a>
                                </MenuItem>
                            </div>
                        </MenuItems>
                    </transition>
                </Menu>

                <!-- Fun commands section -->
                <section v-if="isActive('fun')" id="fun" class="my-10">
                    <h2 class="mx-5 text-2xl text-white my-2 font-medium">Fun Commands</h2>
                    <div v-for="command in data.categories.fun" :key="command.name" class="mx-5">
                        <Disclosure as="div" class="bg-gray-800 pt-6 p-4 mb-10 rounded-md" v-slot="{ open }">
                            <dt class="text-lg">
                                <DisclosureButton class="text-left w-full flex justify-between items-start text-gray-400">
                                    <span class="font-medium text-white">
                                      {{ command.name }}
                                    </span>
                                    <span class="ml-6 h-7 flex items-center"><ChevronDownIcon :class="[open ? '-rotate-180' : 'rotate-0', 'h-6 w-6 transform']" aria-hidden="true" /></span>
                                </DisclosureButton>
                            </dt>
                            <DisclosurePanel as="dd" class="mt-2 pr-12">
                                <span class="text-gray-400">Description</span>
                                <p class="text-base text-gray-200 mb-5">
                                    {{ command.description }}
                                </p>

                                <span class="text-gray-400">Options</span>
                                <p class="text-base text-gray-200 mb-5">
                                    {{ command.options }}
                                </p>

                                <span class="text-gray-400">Level</span>
                                <p class="text-base text-gray-200 mb-5">
                                    {{ command.level ?? 'No level needed for this command' }}
                                </p>

                                <span class="text-gray-400">Permission</span>
                                <p class="text-base text-gray-200 mb-5">
                                    {{ command.permission ?? 'No permission needed for this command' }}
                                </p>

                                <span class="text-gray-400">Category</span>
                                <p class="text-base text-gray-200">
                                    {{ command.category }}
                                </p>
                            </DisclosurePanel>
                        </Disclosure>
                    </div>
                </section>

                <!-- Information commands section -->
                <section v-if="isActive('information')" id="information" class="my-10">
                    <h2 class="mx-5 text-2xl text-white my-2 font-medium">Information Commands</h2>
                    <div v-for="command in data.categories.information" :key="command.name" class="mx-5">
                        <Disclosure as="div" class="bg-gray-800 pt-6 p-4 mb-10 rounded-md" v-slot="{ open }">
                            <dt class="text-lg">
                                <DisclosureButton class="text-left w-full flex justify-between items-start text-gray-400">
                                    <span class="font-medium text-white">
                                      {{ command.name }}
                                    </span>
                                    <span class="ml-6 h-7 flex items-center"><ChevronDownIcon :class="[open ? '-rotate-180' : 'rotate-0', 'h-6 w-6 transform']" aria-hidden="true" /></span>
                                </DisclosureButton>
                            </dt>
                            <DisclosurePanel as="dd" class="mt-2 pr-12">
                                <span class="text-gray-400">Description</span>
                                <p class="text-base text-gray-200 mb-5">
                                    {{ command.description }}
                                </p>

                                <span class="text-gray-400">Options</span>
                                <p class="text-base text-gray-200 mb-5">
                                    {{ command.options }}
                                </p>

                                <span class="text-gray-400">Level</span>
                                <p class="text-base text-gray-200 mb-5">
                                    {{ command.level ?? 'No level needed for this command' }}
                                </p>

                                <span class="text-gray-400">Permission</span>
                                <p class="text-base text-gray-200 mb-5">
                                    {{ command.permission ?? 'No permission needed for this command' }}
                                </p>

                                <span class="text-gray-400">Category</span>
                                <p class="text-base text-gray-200">
                                    {{ command.category }}
                                </p>
                            </DisclosurePanel>
                        </Disclosure>
                    </div>
                </section>

                <!-- Moderation commands section -->
                <section v-if="isActive('moderation')" id="moderation" class="my-10">
                    <h2 class="mx-5 text-2xl text-white my-2 font-medium">Moderation Commands</h2>
                    <div v-for="command in data.categories.moderation" :key="command.name" class="mx-5">
                        <Disclosure as="div" class="bg-gray-800 pt-6 p-4 mb-10 rounded-md" v-slot="{ open }">
                            <dt class="text-lg">
                                <DisclosureButton class="text-left w-full flex justify-between items-start text-gray-400">
                                    <span class="font-medium text-white">
                                      {{ command.name }}
                                    </span>
                                    <span class="ml-6 h-7 flex items-center"><ChevronDownIcon :class="[open ? '-rotate-180' : 'rotate-0', 'h-6 w-6 transform']" aria-hidden="true" /></span>
                                </DisclosureButton>
                            </dt>
                            <DisclosurePanel as="dd" class="mt-2 pr-12">
                                <span class="text-gray-400">Description</span>
                                <p class="text-base text-gray-200 mb-5">
                                    {{ command.description }}
                                </p>

                                <span class="text-gray-400">Options</span>
                                <p class="text-base text-gray-200 mb-5">
                                    {{ command.options }}
                                </p>

                                <span class="text-gray-400">Level</span>
                                <p class="text-base text-gray-200 mb-5">
                                    {{ command.level ?? 'No level needed for this command' }}
                                </p>

                                <span class="text-gray-400">Permission</span>
                                <p class="text-base text-gray-200 mb-5">
                                    {{ command.permission ?? 'No permission needed for this command' }}
                                </p>

                                <span class="text-gray-400">Category</span>
                                <p class="text-base text-gray-200">
                                    {{ command.category }}
                                </p>
                            </DisclosurePanel>
                        </Disclosure>
                    </div>
                </section>

                <!-- Public commands section -->
                <section v-if="isActive('public')" id="public" class="my-10">
                    <h2 class="mx-5 text-2xl text-white my-2 font-medium">Public Commands</h2>
                    <div v-for="command in data.categories.public" :key="command.name" class="mx-5">
                        <Disclosure as="div" class="bg-gray-800 pt-6 p-4 mb-10 rounded-md" v-slot="{ open }">
                            <dt class="text-lg">
                                <DisclosureButton class="text-left w-full flex justify-between items-start text-gray-400">
                                    <span class="font-medium text-white">
                                      {{ command.name }}
                                    </span>
                                    <span class="ml-6 h-7 flex items-center"><ChevronDownIcon :class="[open ? '-rotate-180' : 'rotate-0', 'h-6 w-6 transform']" aria-hidden="true" /></span>
                                </DisclosureButton>
                            </dt>
                            <DisclosurePanel as="dd" class="mt-2 pr-12">
                                <span class="text-gray-400">Description</span>
                                <p class="text-base text-gray-200 mb-5">
                                    {{ command.description }}
                                </p>

                                <span class="text-gray-400">Options</span>
                                <p class="text-base text-gray-200 mb-5">
                                    {{ command.options }}
                                </p>

                                <span class="text-gray-400">Level</span>
                                <p class="text-base text-gray-200 mb-5">
                                    {{ command.level ?? 'No level needed for this command' }}
                                </p>

                                <span class="text-gray-400">Permission</span>
                                <p class="text-base text-gray-200 mb-5">
                                    {{ command.permission ?? 'No permission needed for this command' }}
                                </p>

                                <span class="text-gray-400">Category</span>
                                <p class="text-base text-gray-200">
                                    {{ command.category }}
                                </p>
                            </DisclosurePanel>
                        </Disclosure>
                    </div>
                </section>

                <!-- Setting commands section -->
                <section v-if="isActive('settings')" id="settings" class="my-10">
                    <h2 class="mx-5 text-2xl text-white my-2 font-medium">Settings Commands</h2>
                    <div v-for="command in data.categories.settings" :key="command.name" class="mx-5">
                        <Disclosure as="div" class="bg-gray-800 pt-6 p-4 mb-10 rounded-md" v-slot="{ open }">
                            <dt class="text-lg">
                                <DisclosureButton class="text-left w-full flex justify-between items-start text-gray-400">
                                    <span class="font-medium text-white">
                                      {{ command.name }}
                                    </span>
                                    <span class="ml-6 h-7 flex items-center"><ChevronDownIcon :class="[open ? '-rotate-180' : 'rotate-0', 'h-6 w-6 transform']" aria-hidden="true" /></span>
                                </DisclosureButton>
                            </dt>
                            <DisclosurePanel as="dd" class="mt-2 pr-12">
                                <span class="text-gray-400">Description</span>
                                <p class="text-base text-gray-200 mb-5">
                                    {{ command.description }}
                                </p>

                                <span class="text-gray-400">Options</span>
                                <p class="text-base text-gray-200 mb-5">
                                    {{ command.options }}
                                </p>

                                <span class="text-gray-400">Level</span>
                                <p class="text-base text-gray-200 mb-5">
                                    {{ command.level ?? 'No level needed for this command' }}
                                </p>

                                <span class="text-gray-400">Permission</span>
                                <p class="text-base text-gray-200 mb-5">
                                    {{ command.permission ?? 'No permission needed for this command' }}
                                </p>

                                <span class="text-gray-400">Category</span>
                                <p class="text-base text-gray-200">
                                    {{ command.category }}
                                </p>
                            </DisclosurePanel>
                        </Disclosure>
                    </div>
                </section>
            </div>
        </div>
    </BobWattsLayout>
</template>
