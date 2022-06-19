<script setup>
import DefaultLayout from "@/Layouts/DefaultLayout";
import PrimaryButton from '@/Components/PrimaryButton'
import { Link } from "@inertiajs/inertia-vue3";
</script>

<template>
    <DefaultLayout title="Home" content="The Fullstack Web Developer from Norway, here is the official portfolio for DevShaded" :url="$page.url">
        <!-- Header -->
        <header class="relative overflow-hidden mt-28 lg:-mt-16">
            <div class="pb-16 mx-auto max-w-7xl px-4 sm:mt-24">
                <div class="text-center">
                    <h1 class="text-4xl tracking-tight font-extrabold text-white md:text-5xl">
                        <span class="block xl:inline">Hi! I am</span>
                        {{ ' ' }}
                        <span class="block text-blue-600 xl:inline">DevShaded</span>
                    </h1>
                    <p class="mt-3 max-w-md mx-auto text-base text-gray-400 sm:text-lg md:mt-5 md:text-xl md:max-w-3xl">Fullstack Web Developer from Norway, who loves to code in his free time!</p>
                    <div class="mt-5 max-w-md mx-auto sm:flex sm:justify-center md:mt-8">
                        <PrimaryButton href="/about">More About Me!</PrimaryButton>
                        <div class="mt-3 rounded-md shadow sm:mt-0 sm:ml-3">
                            <a href="https://github.com/DevShaded" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-indigo-600 bg-white hover:bg-gray-50 md:py-4 md:text-lg md:px-10"> My GitHub! </a>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <svg class="hidden lg:block lg:mt-3" id="wave" style="transform:rotate(0deg); transition: 0.3s" viewBox="0 0 1440 300"
             xmlns="http://www.w3.org/2000/svg">
            <defs>
                <linearGradient id="sw-gradient-0" x1="0" x2="0" y1="1" y2="0">
                    <stop stop-color="rgba(243, 106, 62, 1)" offset="0%"></stop>
                    <stop stop-color="rgba(255, 179, 11, 1)" offset="100%"></stop>
                </linearGradient>
            </defs>
            <path style="transform:translate(0, 0px); opacity:1" fill="url(#sw-gradient-0)"
                  d="M0,240L80,230C160,220,320,200,480,180C640,160,800,140,960,145C1120,150,1280,180,1440,175C1600,170,1760,130,1920,110C2080,90,2240,90,2400,85C2560,80,2720,70,2880,85C3040,100,3200,140,3360,170C3520,200,3680,220,3840,230C4000,240,4160,240,4320,225C4480,210,4640,180,4800,155C4960,130,5120,110,5280,85C5440,60,5600,30,5760,50C5920,70,6080,140,6240,145C6400,150,6560,90,6720,80C6880,70,7040,110,7200,115C7360,120,7520,90,7680,70C7840,50,8000,40,8160,45C8320,50,8480,70,8640,65C8800,60,8960,30,9120,20C9280,10,9440,20,9600,40C9760,60,9920,90,10080,90C10240,90,10400,60,10560,65C10720,70,10880,110,11040,140C11200,170,11360,190,11440,200L11520,210L11520,300L11440,300C11360,300,11200,300,11040,300C10880,300,10720,300,10560,300C10400,300,10240,300,10080,300C9920,300,9760,300,9600,300C9440,300,9280,300,9120,300C8960,300,8800,300,8640,300C8480,300,8320,300,8160,300C8000,300,7840,300,7680,300C7520,300,7360,300,7200,300C7040,300,6880,300,6720,300C6560,300,6400,300,6240,300C6080,300,5920,300,5760,300C5600,300,5440,300,5280,300C5120,300,4960,300,4800,300C4640,300,4480,300,4320,300C4160,300,4000,300,3840,300C3680,300,3520,300,3360,300C3200,300,3040,300,2880,300C2720,300,2560,300,2400,300C2240,300,2080,300,1920,300C1760,300,1600,300,1440,300C1280,300,1120,300,960,300C800,300,640,300,480,300C320,300,160,300,80,300L0,300Z"></path>
            <defs>
                <linearGradient id="sw-gradient-1" x1="0" x2="0" y1="1" y2="0">
                    <stop stop-color="rgba(243, 106, 62, 1)" offset="0%"></stop>
                    <stop stop-color="rgba(255, 179, 11, 1)" offset="100%"></stop>
                </linearGradient>
            </defs>
            <path style="transform:translate(0, 50px); opacity:0.9" fill="url(#sw-gradient-1)"
                  d="M0,90L80,110C160,130,320,170,480,195C640,220,800,230,960,205C1120,180,1280,120,1440,105C1600,90,1760,120,1920,145C2080,170,2240,190,2400,200C2560,210,2720,210,2880,190C3040,170,3200,130,3360,105C3520,80,3680,70,3840,75C4000,80,4160,100,4320,95C4480,90,4640,60,4800,70C4960,80,5120,130,5280,140C5440,150,5600,120,5760,120C5920,120,6080,150,6240,150C6400,150,6560,120,6720,130C6880,140,7040,190,7200,205C7360,220,7520,200,7680,185C7840,170,8000,160,8160,175C8320,190,8480,230,8640,245C8800,260,8960,250,9120,225C9280,200,9440,160,9600,150C9760,140,9920,160,10080,150C10240,140,10400,100,10560,85C10720,70,10880,80,11040,110C11200,140,11360,190,11440,215L11520,240L11520,300L11440,300C11360,300,11200,300,11040,300C10880,300,10720,300,10560,300C10400,300,10240,300,10080,300C9920,300,9760,300,9600,300C9440,300,9280,300,9120,300C8960,300,8800,300,8640,300C8480,300,8320,300,8160,300C8000,300,7840,300,7680,300C7520,300,7360,300,7200,300C7040,300,6880,300,6720,300C6560,300,6400,300,6240,300C6080,300,5920,300,5760,300C5600,300,5440,300,5280,300C5120,300,4960,300,4800,300C4640,300,4480,300,4320,300C4160,300,4000,300,3840,300C3680,300,3520,300,3360,300C3200,300,3040,300,2880,300C2720,300,2560,300,2400,300C2240,300,2080,300,1920,300C1760,300,1600,300,1440,300C1280,300,1120,300,960,300C800,300,640,300,480,300C320,300,160,300,80,300L0,300Z"></path>
        </svg>


        <!-- About Section -->
        <section class="mt-20">
            <div
                class="container flex flex-col-reverse md:justify-center items-center px-6 mx-auto mt-10 space-y-0 md:flex-row md:space-y-0">

                <div class="flex flex-col mb-32 md:mt-16 space-y-6 md:w-1/2">
                    <h2 class="max-w-md text-5xl font-bold text-center text-gray-200 md:text-6xl md:text-left">
                        About <span class="text-blue-600">me</span>!
                    </h2>

                    <p class="max-w-sm text-center text-gray-300 text-darkGrayishBlue md:text-left">
                        Hello! My name is Fredrik and I am a Fullstack Web Developer from Norway. Since I was 13, I have
                        been programming on my own
                    </p>

                    <p class="max-w-sm text-center text-gray-300 text-darkGrayishBlue md:text-left">
                        Over the past few years, I have been working on my projects, have been able to create many things,
                        and learned some new technologies too.
                    </p>

                    <div class="mx-auto md:mx-0">
                        <Link href="/about" class="inline-flex items-center px-4 py-2 border border-transparent text-base text-center font-medium rounded-md shadow-sm text-white w-40 bg-blue-700 hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            More about me
                        </Link>
                    </div>
                </div>

                <div class="py-10">
                    <div>
                        <span class="sr-only">Selfie of Fredrik playing Golf</span>
                        <img
                            src="/images/selfie.webp"
                            alt="Selfie of Fredrik playing Golf"
                            class="object-contain w-80 md:w-96 rounded-md"
                        />
                    </div>
                </div>
            </div>
        </section>
        <svg class="hidden lg:block lg:mb-10" id="wave" style="transform:rotate(180deg); transition: 0.3s" viewBox="0 0 1440 300"
             xmlns="http://www.w3.org/2000/svg">
            <defs>
                <linearGradient id="sw-gradient-0" x1="0" x2="0" y1="1" y2="0">
                    <stop stop-color="rgba(243, 106, 62, 1)" offset="0%"></stop>
                    <stop stop-color="rgba(255, 179, 11, 1)" offset="100%"></stop>
                </linearGradient>
            </defs>
            <path style="transform:translate(0, 0px); opacity:1" fill="url(#sw-gradient-0)"
                  d="M0,240L80,230C160,220,320,200,480,180C640,160,800,140,960,145C1120,150,1280,180,1440,175C1600,170,1760,130,1920,110C2080,90,2240,90,2400,85C2560,80,2720,70,2880,85C3040,100,3200,140,3360,170C3520,200,3680,220,3840,230C4000,240,4160,240,4320,225C4480,210,4640,180,4800,155C4960,130,5120,110,5280,85C5440,60,5600,30,5760,50C5920,70,6080,140,6240,145C6400,150,6560,90,6720,80C6880,70,7040,110,7200,115C7360,120,7520,90,7680,70C7840,50,8000,40,8160,45C8320,50,8480,70,8640,65C8800,60,8960,30,9120,20C9280,10,9440,20,9600,40C9760,60,9920,90,10080,90C10240,90,10400,60,10560,65C10720,70,10880,110,11040,140C11200,170,11360,190,11440,200L11520,210L11520,300L11440,300C11360,300,11200,300,11040,300C10880,300,10720,300,10560,300C10400,300,10240,300,10080,300C9920,300,9760,300,9600,300C9440,300,9280,300,9120,300C8960,300,8800,300,8640,300C8480,300,8320,300,8160,300C8000,300,7840,300,7680,300C7520,300,7360,300,7200,300C7040,300,6880,300,6720,300C6560,300,6400,300,6240,300C6080,300,5920,300,5760,300C5600,300,5440,300,5280,300C5120,300,4960,300,4800,300C4640,300,4480,300,4320,300C4160,300,4000,300,3840,300C3680,300,3520,300,3360,300C3200,300,3040,300,2880,300C2720,300,2560,300,2400,300C2240,300,2080,300,1920,300C1760,300,1600,300,1440,300C1280,300,1120,300,960,300C800,300,640,300,480,300C320,300,160,300,80,300L0,300Z"></path>
            <defs>
                <linearGradient id="sw-gradient-1" x1="0" x2="0" y1="1" y2="0">
                    <stop stop-color="rgba(243, 106, 62, 1)" offset="0%"></stop>
                    <stop stop-color="rgba(255, 179, 11, 1)" offset="100%"></stop>
                </linearGradient>
            </defs>
            <path style="transform:translate(0, 50px); opacity:0.9" fill="url(#sw-gradient-1)"
                  d="M0,90L80,110C160,130,320,170,480,195C640,220,800,230,960,205C1120,180,1280,120,1440,105C1600,90,1760,120,1920,145C2080,170,2240,190,2400,200C2560,210,2720,210,2880,190C3040,170,3200,130,3360,105C3520,80,3680,70,3840,75C4000,80,4160,100,4320,95C4480,90,4640,60,4800,70C4960,80,5120,130,5280,140C5440,150,5600,120,5760,120C5920,120,6080,150,6240,150C6400,150,6560,120,6720,130C6880,140,7040,190,7200,205C7360,220,7520,200,7680,185C7840,170,8000,160,8160,175C8320,190,8480,230,8640,245C8800,260,8960,250,9120,225C9280,200,9440,160,9600,150C9760,140,9920,160,10080,150C10240,140,10400,100,10560,85C10720,70,10880,80,11040,110C11200,140,11360,190,11440,215L11520,240L11520,300L11440,300C11360,300,11200,300,11040,300C10880,300,10720,300,10560,300C10400,300,10240,300,10080,300C9920,300,9760,300,9600,300C9440,300,9280,300,9120,300C8960,300,8800,300,8640,300C8480,300,8320,300,8160,300C8000,300,7840,300,7680,300C7520,300,7360,300,7200,300C7040,300,6880,300,6720,300C6560,300,6400,300,6240,300C6080,300,5920,300,5760,300C5600,300,5440,300,5280,300C5120,300,4960,300,4800,300C4640,300,4480,300,4320,300C4160,300,4000,300,3840,300C3680,300,3520,300,3360,300C3200,300,3040,300,2880,300C2720,300,2560,300,2400,300C2240,300,2080,300,1920,300C1760,300,1600,300,1440,300C1280,300,1120,300,960,300C800,300,640,300,480,300C320,300,160,300,80,300L0,300Z"></path>
        </svg>

        <!-- Projects Section -->
        <section class="lg:-mt-32">
            <div class="py-10">
                <h2 class="text-5xl font-bold text-center text-gray-200 md:text-6xl">
                    My <span class="text-blue-600">projects</span>!
                </h2>
                <p class="text-center text-gray-400 py-2 md:text-xl">Here are some of my projects I have made!</p>

                <div class="text-center mt-5">
                    <Link href="/projects" class="inline-flex items-center px-4 py-2 border border-transparent text-base text-center font-medium rounded-md shadow-sm text-white w-52 bg-blue-700 hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        View more of my projects
                    </Link>
                </div>
            </div>


            <article class="max-w-4xl mx-auto overflow-hidden">
                <div class="grid grid-cols-1 gap-y-8 content-center px-6 sm:gap-x-6 xl:gap-x-8">
                    <div class="relative mb-10 shadow-xl">
                        <div class="bg-gray-700 rounded-b-md">
                            <img src="https://cdn.discordapp.com/attachments/566689366643310613/968484158500401212/unknown.png" alt="">

                            <div class="px-3 py-4">
                                <h3 class="text-white text-2xl font-medium">Fortnite Stats Tracker</h3>
                                <p class="text-gray-300">Welcome to <a href="https://fortnitestatstracker.xyz" class="text-indigo-300" target="_blank">fortnitestatstracker.xyz</a>! We deliver our best Fortnite stats for every user on Fortnite to this day!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
        </section>
    </DefaultLayout>
</template>
