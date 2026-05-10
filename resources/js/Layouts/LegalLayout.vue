<script setup>
import { Link } from '@inertiajs/vue3';
import AppFooter from '../Components/AppFooter.vue';

defineProps({
    title: { type: String, required: true },
});
</script>

<template>
    <div class="min-h-screen flex flex-col bg-[#111114] text-white">
        <header class="sticky top-0 z-50 border-b border-white/5 bg-[#111114]/90 backdrop-blur-xl">
            <div class="max-w-7xl mx-auto px-5 sm:px-8 h-14 sm:h-16 flex items-center justify-between">
                <Link href="/" class="flex items-center gap-2.5">
                    <div class="w-8 h-8 rounded-lg bg-gradient-to-br from-orange-500 via-rose-500 to-pink-500 flex items-center justify-center">
                        <svg viewBox="0 0 24 24" class="w-4 h-4 text-white" fill="currentColor"><path d="M8 5v14l11-7z" /></svg>
                    </div>
                    <span class="font-bold text-base tracking-tight">Splicery<span class="text-orange-500">.</span></span>
                </Link>
                <Link href="/" class="text-sm text-neutral-400 hover:text-white transition">Back to home</Link>
            </div>
        </header>

        <main class="flex-1 max-w-3xl mx-auto w-full px-5 sm:px-8 py-12 sm:py-16">
            <h1 class="text-3xl sm:text-4xl font-bold tracking-tight text-white">{{ title }}</h1>
            <p class="mt-2 text-sm text-neutral-500">Last updated: May 10, 2026</p>
            <div class="mt-10 space-y-6 text-sm sm:text-base text-neutral-300 leading-relaxed [&_h2]:text-lg [&_h2]:font-semibold [&_h2]:text-white [&_h2]:mt-10 [&_h2]:mb-3 [&_ul]:list-disc [&_ul]:pl-5 [&_ul]:space-y-2 [&_a]:text-orange-400 [&_a]:underline hover:[&_a]:text-orange-300">
                <slot />
            </div>
        </main>

        <AppFooter />
    </div>
</template>
