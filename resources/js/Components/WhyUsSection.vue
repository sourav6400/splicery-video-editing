<script setup>
const ours = [
    'In-house team of 40+ specialists',
    'Results-oriented &mdash; not output-oriented',
    'Experience with 500+ brands &amp; creators',
    'Proven DFY content funnel',
    'Personalised CRM &amp; client portal',
    '24/7 support, anytime you need us',
];

const them = [
    'Unreliable freelancers with slow turnarounds',
    'Edits that fail to convert or perform',
    'Weak thumbnails &amp; titles, no CTR strategy',
    'No proper distribution system',
    'Limited revisions, take-it-or-leave-it',
    'Delayed responses, poor communication',
];

const bonuses = [
    { title: 'Free GoHighLevel subscription', sub: '90 days included' },
    { title: 'Free 1-on-1 consultancy', sub: '60 minutes with strategist' },
    { title: 'Free thumbnail audit', sub: 'For your last 10 videos' },
];
</script>

<template>
    <section class="py-20 sm:py-28">
        <div class="max-w-7xl mx-auto px-5 sm:px-8">
            <div class="text-center mb-14">
                <p class="text-xs uppercase tracking-[0.2em] text-orange-400 font-semibold">Why choose us</p>
                <h2 class="mt-3 text-3xl sm:text-4xl md:text-5xl font-bold tracking-tight">
                    Know what we<br /><span class="gradient-text">do differently.</span>
                </h2>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-5">
                <div class="glass rounded-3xl p-8 sm:p-10 border border-orange-500/20 relative overflow-hidden">
                    <div class="absolute -top-24 -right-24 w-64 h-64 bg-orange-500/20 rounded-full blur-3xl"></div>
                    <div class="relative">
                        <div class="flex items-center gap-3 mb-6">
                            <div class="w-10 h-10 rounded-xl bg-gradient-to-br from-orange-500 to-rose-500 flex items-center justify-center">
                                <svg class="w-5 h-5" fill="none" stroke="white" stroke-width="3" viewBox="0 0 24 24"><path d="M5 12l5 5L20 7" /></svg>
                            </div>
                            <h3 class="text-xl font-semibold tracking-tight">Splicery</h3>
                        </div>

                        <ul class="space-y-3">
                            <li
                                v-for="(item, i) in ours"
                                :key="i"
                                class="flex items-start gap-3 text-neutral-100"
                            >
                                <svg class="w-5 h-5 mt-0.5 flex-shrink-0 text-orange-400" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="M5 12l5 5L20 7" /></svg>
                                <span v-html="item" />
                            </li>
                        </ul>

                        <div class="mt-8 pt-6 border-t border-white/10">
                            <p class="text-sm text-neutral-400 mb-3">Bonuses you get with us</p>
                            <div class="flex flex-col gap-2.5">
                                <div
                                    v-for="b in bonuses"
                                    :key="b.title"
                                    class="flex items-center justify-between rounded-xl bg-white/[0.04] border border-white/5 px-4 py-3"
                                >
                                    <div>
                                        <div class="text-sm font-semibold">{{ b.title }}</div>
                                        <div class="text-xs text-neutral-400">{{ b.sub }}</div>
                                    </div>
                                    <span class="text-xs font-semibold px-2.5 py-1 rounded-full bg-orange-500/20 text-orange-300">FREE</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="glass rounded-3xl p-8 sm:p-10">
                    <div class="flex items-center gap-3 mb-6">
                        <div class="w-10 h-10 rounded-xl bg-neutral-800 flex items-center justify-center">
                            <svg class="w-5 h-5" fill="none" stroke="white" stroke-width="3" viewBox="0 0 24 24"><path d="M6 6l12 12M18 6L6 18" /></svg>
                        </div>
                        <h3 class="text-xl font-semibold tracking-tight text-neutral-300">Other agencies</h3>
                    </div>

                    <ul class="space-y-3">
                        <li
                            v-for="(item, i) in them"
                            :key="i"
                            class="flex items-start gap-3 text-neutral-400"
                        >
                            <svg class="w-5 h-5 mt-0.5 flex-shrink-0 text-neutral-600" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="M6 6l12 12M18 6L6 18" /></svg>
                            <span v-html="item" />
                        </li>
                    </ul>

                    <div class="mt-8 pt-6 border-t border-white/10">
                        <p class="text-sm text-neutral-500 italic">No bonuses. Mostly excuses.</p>
                    </div>
                </div>
            </div>

            <div class="mt-12 text-center">
                <a
                    href="#book"
                    class="inline-flex items-center gap-2 px-7 py-4 rounded-full bg-gradient-to-r from-orange-500 to-rose-500 text-white font-semibold shadow-lg shadow-orange-500/30 hover:shadow-orange-500/50 hover:scale-[1.02] transition group"
                >
                    Book a 30-min call
                    <svg class="w-4 h-4 transition-transform group-hover:translate-x-0.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M13 5l7 7-7 7"/></svg>
                </a>
            </div>
        </div>
    </section>
</template>
