<script setup>
import { Link } from '@inertiajs/vue3';

const cols = [
    {
        title: 'Services',
        links: ['YouTube videos', 'Short-form videos', 'SaaS videos', 'Ad creatives & VSLs', 'Podcasts', 'Demo videos'],
    },
    {
        title: 'Studio',
        links: ['About us', 'Our team', 'Case studies', 'Careers', 'Press kit'],
    },
    {
        title: 'Resources',
        links: ['Blog', 'Hooks library', 'Content calendar', 'Pricing', 'FAQ'],
    },
];
</script>

<template>
    <footer class="border-t border-white/5 bg-[#0c0c0f] relative overflow-hidden">
        <div class="absolute -top-40 left-1/2 -translate-x-1/2 w-[800px] h-[400px] bg-orange-500/10 rounded-full blur-[140px]"></div>

        <div class="max-w-7xl mx-auto px-5 sm:px-8 py-16 sm:py-20 relative">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-10">
                <div class="lg:col-span-5">
                    <Link href="/" class="flex items-center gap-2.5">
                        <div class="w-10 h-10 rounded-xl bg-gradient-to-br from-orange-500 via-rose-500 to-pink-500 flex items-center justify-center shadow-lg shadow-orange-500/30">
                            <svg viewBox="0 0 24 24" class="w-5 h-5 text-white" fill="currentColor"><path d="M8 5v14l11-7z" /></svg>
                        </div>
                        <span class="font-bold text-xl tracking-tight">Splicery<span class="text-orange-500">.</span></span>
                    </Link>

                    <p class="mt-5 text-neutral-400 max-w-sm leading-relaxed">
                        A Done-For-You video content studio for founders, creators and SaaS teams who want to fill the
                        pipeline with organic traffic.
                    </p>

                    <div class="mt-8">
                        <p class="text-xs uppercase tracking-[0.2em] text-neutral-500 mb-3">Get a hook every Tuesday</p>
                        <form class="flex gap-2 max-w-sm" @submit.prevent>
                            <input
                                type="email"
                                placeholder="you@brand.com"
                                class="flex-1 bg-white/[0.04] border border-white/10 rounded-full px-4 py-2.5 text-sm text-white placeholder-neutral-500 focus:outline-none focus:border-orange-500/60"
                            />
                            <button class="px-5 py-2.5 rounded-full bg-white text-black text-sm font-semibold hover:bg-orange-400">
                                Subscribe
                            </button>
                        </form>
                    </div>
                </div>

                <div class="lg:col-span-7 grid grid-cols-2 sm:grid-cols-4 gap-8">
                    <div v-for="col in cols" :key="col.title">
                        <h4 class="text-sm font-semibold text-white mb-4">{{ col.title }}</h4>
                        <ul class="space-y-2.5">
                            <li v-for="link in col.links" :key="link">
                                <a href="#" class="text-sm text-neutral-400 hover:text-orange-400 transition">{{ link }}</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h4 class="text-sm font-semibold text-white mb-4">Legal</h4>
                        <ul class="space-y-2.5">
                            <li>
                                <Link href="/terms" class="text-sm text-neutral-400 hover:text-orange-400 transition">Terms of Service</Link>
                            </li>
                            <li>
                                <Link href="/privacy" class="text-sm text-neutral-400 hover:text-orange-400 transition">Privacy Policy</Link>
                            </li>
                            <li>
                                <Link href="/return-policy" class="text-sm text-neutral-400 hover:text-orange-400 transition">Return &amp; Refund Policy</Link>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="mt-14 pt-8 border-t border-white/5 flex flex-col sm:flex-row sm:flex-wrap items-start sm:items-center justify-between gap-4">
                <p class="text-sm text-neutral-500">&copy; {{ new Date().getFullYear() }} Splicery Studio. All rights reserved.</p>
                <div class="flex flex-col sm:flex-row flex-wrap items-start sm:items-center gap-4 sm:gap-6 w-full sm:w-auto">
                    <nav class="flex flex-wrap items-center gap-x-5 gap-y-2 text-sm text-neutral-500" aria-label="Legal">
                        <Link href="/terms" class="hover:text-white">Terms of Service</Link>
                        <Link href="/privacy" class="hover:text-white">Privacy Policy</Link>
                        <Link href="/return-policy" class="hover:text-white">Return &amp; Refund Policy</Link>
                    </nav>
                    <div class="flex items-center gap-3">
                        <a href="#" aria-label="LinkedIn" class="w-9 h-9 rounded-full bg-white/5 hover:bg-orange-500 flex items-center justify-center transition">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M19 3a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h14M8.339 18.337v-8.49H5.667v8.49h2.672M7.003 8.575c.875 0 1.585-.713 1.585-1.594a1.589 1.589 0 1 0-3.176 0c0 .881.706 1.594 1.591 1.594m11.336 9.762v-4.823c0-2.272-.491-4.018-3.146-4.018-1.273 0-2.13.7-2.481 1.36h-.035V9.847H10.27v8.49h2.677v-4.2c0-1.116.21-2.196 1.594-2.196 1.359 0 1.378 1.275 1.378 2.265v4.131h2.679Z"/></svg>
                        </a>
                        <a href="#" aria-label="X" class="w-9 h-9 rounded-full bg-white/5 hover:bg-orange-500 flex items-center justify-center transition">
                            <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 24 24"><path d="M18.244 2H21l-6.5 7.43L22 22h-6.812l-5.34-6.99L3.6 22H1l7.04-8.044L1.5 2h6.94l4.83 6.387L18.244 2zm-1.193 18h1.59L7.05 4h-1.7l11.7 16z"/></svg>
                        </a>
                        <a href="#" aria-label="Instagram" class="w-9 h-9 rounded-full bg-white/5 hover:bg-orange-500 flex items-center justify-center transition">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><rect x="2" y="2" width="20" height="20" rx="5"/><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37zM17.5 6.5h.01"/></svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</template>
