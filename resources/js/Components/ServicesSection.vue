<script setup>
const services = [
    {
        title: 'YouTube Videos',
        desc: 'Long-form storytelling that grows authority and builds your personal brand in any niche.',
        icon: 'play',
        accent: 'from-orange-500 to-rose-500',
    },
    {
        title: 'Short-Form Videos',
        desc: 'Bite-sized top-of-funnel hooks for Reels, TikTok &amp; Shorts engineered to go viral.',
        icon: 'phone',
        accent: 'from-pink-500 to-rose-500',
    },
    {
        title: 'SaaS Videos',
        desc: 'Product walkthroughs, launch films and onboarding loops that convert demos to dollars.',
        icon: 'cube',
        accent: 'from-amber-500 to-orange-500',
    },
    {
        title: 'Ad Creatives & VSLs',
        desc: 'Thumb-stopping ads, UGC angles &amp; long-form VSLs proven to scale paid spend.',
        icon: 'spark',
        accent: 'from-rose-500 to-fuchsia-500',
    },
    {
        title: 'Podcasts',
        desc: 'Trust-building organic conversations &mdash; full production, clips, and distribution.',
        icon: 'mic',
        accent: 'from-orange-400 to-amber-500',
    },
    {
        title: 'Demo Videos',
        desc: 'High-fidelity product demos that make founders look like a series-B brand on day one.',
        icon: 'monitor',
        accent: 'from-violet-500 to-pink-500',
    },
];
</script>

<template>
    <section id="services" class="py-20 sm:py-28 relative">
        <div class="max-w-7xl mx-auto px-5 sm:px-8">
            <div class="flex flex-col sm:flex-row sm:items-end sm:justify-between gap-6 mb-12">
                <div>
                    <p class="text-xs uppercase tracking-[0.2em] text-orange-400 font-semibold">Core services</p>
                    <h2 class="mt-3 text-3xl sm:text-4xl md:text-5xl font-bold tracking-tight">
                        Types of work<br />we do.
                    </h2>
                </div>
                <p class="max-w-md text-neutral-400">
                    Pick a format, plug in our team, and we&rsquo;ll handle ideation through distribution. End-to-end, on retainer.
                </p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5">
                <article
                    v-for="(s, i) in services"
                    :key="s.title"
                    class="group relative rounded-2xl glass glass-hover p-7 overflow-hidden"
                >
                    <div :class="['absolute -top-16 -right-16 w-40 h-40 rounded-full blur-3xl opacity-30 group-hover:opacity-60 transition bg-gradient-to-br', s.accent]"></div>

                    <div class="relative">
                        <div :class="['w-12 h-12 rounded-xl flex items-center justify-center mb-5 bg-gradient-to-br shadow-lg', s.accent]">
                            <svg v-if="s.icon === 'play'" class="w-6 h-6 text-white" viewBox="0 0 24 24" fill="currentColor"><path d="M8 5v14l11-7z" /></svg>
                            <svg v-else-if="s.icon === 'phone'" class="w-6 h-6 text-white" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="6" y="2" width="12" height="20" rx="2" /><path d="M11 18h2"/></svg>
                            <svg v-else-if="s.icon === 'cube'" class="w-6 h-6 text-white" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 16V8l-9-5-9 5v8l9 5 9-5z"/><path d="M3.27 6.96L12 12.01l8.73-5.05M12 22.08V12"/></svg>
                            <svg v-else-if="s.icon === 'spark'" class="w-6 h-6 text-white" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2l2.4 7.4H22l-6 4.6 2.4 7.4L12 17l-6.4 4.4L8 14 2 9.4h7.6z" /></svg>
                            <svg v-else-if="s.icon === 'mic'" class="w-6 h-6 text-white" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="9" y="2" width="6" height="12" rx="3"/><path d="M5 10v2a7 7 0 0 0 14 0v-2M12 19v3"/></svg>
                            <svg v-else-if="s.icon === 'monitor'" class="w-6 h-6 text-white" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8M12 17v4"/></svg>
                        </div>
                        <h3 class="text-lg sm:text-xl font-semibold tracking-tight">{{ s.title }}</h3>
                        <p class="mt-2.5 text-neutral-400 leading-relaxed text-sm" v-html="s.desc"></p>

                        <div class="mt-6 inline-flex items-center gap-2 text-sm font-semibold text-orange-300 group-hover:text-orange-400">
                            Explore service
                            <svg class="w-4 h-4 transition-transform group-hover:translate-x-1" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M13 5l7 7-7 7"/></svg>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </section>
</template>
