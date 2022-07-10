<script setup>
import BobWattsLayout from '@/Layouts/BobWatts/BobWattsLayout.vue'
import PrimaryButton from "@/Components/PrimaryButton.vue";
import SvgWaveDown from "@/Components/SvgWaveDown.vue";
</script>

<template>
    <BobWattsLayout title="Home" content="Bob Watts is a multipurpose bot that does many things, from Fun and Informative commands to Moderation and Logging commands!" url="/">
        <!-- Header -->
        <header class="my-16 mx-auto max-w-7xl px-4 sm:mt-24 sm:px-6 lg:mt-32">
            <div class="lg:grid lg:grid-cols-12 lg:gap-8">
                <div class="sm:text-center md:max-w-2xl md:mx-auto lg:col-span-6 lg:text-left">
                    <h1>
                        <span class="mt-1 block text-4xl tracking-tight font-extrabold sm:text-5xl xl:text-6xl">
                            <span class="block text-gray-200">Bob Watts</span>
                            <span class="block text-blue-600">The open-source discord bot made with ❤️</span>
                      </span>
                    </h1>
                    <p class="mt-3 text-base text-gray-400 sm:mt-5 sm:text-xl lg:text-lg xl:text-xl">Bob Watts is a multipurpose bot that does many things, from Fun and Informative commands to Moderation and Logging commands!</p>
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

        <SvgWaveDown />

        <!-- Customize section -->
        <section class="max-w-7xl mx-auto my-10">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 mx-5">
                <div>
                    <h2 class="">
                        <span class="mt-1 block text-4xl tracking-tight font-extrabold">
                            <span class="block text-gray-200">Customize Bob Watts to your needs</span>
                      </span>
                    </h2>
                    <p class="mt-3 text-base text-gray-400 sm:mt-5 sm:text-xl lg:text-lg xl:text-xl">Bob Watts can be customized with many things like, custom Welcome/Goodbye messages, and moderation logging etc.</p>
                </div>

                <div>
                    <img class="rounded-xl shadow-xl" src="/images/bobwatts/CommandSet.webp" alt="Commands list"/>
                </div>
            </div>
        </section>

        <svg class="hidden lg:block" id="wave" style="transform:rotate(0deg); transition: 0.3s" viewBox="0 0 1440 300"
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

        <!-- Command section -->
        <section class="max-w-7xl mx-auto my-20 lg:my-44">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 mx-5">
                <div>
                    <h2>
                        <span class="mt-1 block text-4xl tracking-tight font-extrabold">
                            <span class="block text-gray-200">While you are here, take a look at our commands!</span>
                      </span>
                    </h2>
                    <p class="mt-3 text-base text-gray-400 sm:mt-5 sm:text-xl lg:text-lg xl:text-xl">Bob Watts offers over 30 usefully, fun, and informative commands for you to use, and more coming!</p>
                    <div class="w-full md:w-1/2 pt-5">
                        <PrimaryButton href="/bobwatts/commands">Commands list</PrimaryButton>
                    </div>
                </div>

                <div>
                    <img class="rounded-xl shadow-xl" src="/images/bobwatts/UserInfoCommand.webp" alt="User info command"/>
                </div>
            </div>
        </section>

        <SvgWaveDown />

        <!-- GitHub Section -->
        <section class="max-w-7xl mx-auto my-20">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 mx-5">
                <div>
                    <h2>
                        <span class="mt-1 block text-4xl tracking-tight font-extrabold">
                            <span class="block text-gray-200">Wanna know how Bob Watts works behind the scenes?</span>
                      </span>
                    </h2>
                    <p class="mt-3 text-base text-gray-400 sm:mt-5 sm:text-xl lg:text-lg xl:text-xl">Bob Watts is fully open-source for everyone to use and, Bob Watts's code is hosted on GitHub!</p>
                    <div class="w-full md:w-1/2 pt-5">
                        <a href="https://github.com/DevShaded/Bob-Watts" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-blue-700 hover:bg-blue-600 md:py-4 md:text-lg md:px-10">GitHub</a>
                    </div>
                </div>

                <div>
                    <img class="rounded-xl shadow-xl" src="/images/bobwatts/ServerInfoCommand.webp" alt="Server info command"/>
                </div>
            </div>
        </section>
    </BobWattsLayout>
</template>
