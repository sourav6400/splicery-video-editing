<script setup>
const clients = [
    {
        name: 'Anthony\'s World',
        niche: 'Trading',
        avatar: 'https://i.pravatar.cc/200?img=70',
        stats: [
            { v: '5M+', l: 'Views generated' },
            { v: '100K+', l: 'Subscribers' },
        ],
    },
    {
        name: 'Spencer Pawliw',
        niche: 'Ecom',
        avatar: 'https://i.pravatar.cc/200?img=33',
        stats: [
            { v: '1M+', l: 'Views generated' },
            { v: '7K+', l: 'Subscribers' },
        ],
    },
    {
        name: 'Nathan Nazareth',
        niche: 'Dropshipping',
        avatar: 'https://i.pravatar.cc/200?img=14',
        stats: [
            { v: '15M+', l: 'Views generated' },
            { v: '500K+', l: 'Subscribers' },
        ],
    },
    {
        name: 'Lucy Wang',
        niche: 'AWS / Tech',
        avatar: 'https://i.pravatar.cc/200?img=20',
        stats: [
            { v: '8M+', l: 'Views generated' },
            { v: '100K+', l: 'Subscribers' },
        ],
    },
    {
        name: 'Elise Pham',
        niche: 'Academics',
        avatar: 'https://i.pravatar.cc/200?img=49',
        stats: [
            { v: '120M+', l: 'Views generated' },
            { v: '460K+', l: 'Subscribers' },
        ],
    },
];
</script>

<template>
    <section class="py-20 sm:py-28">
        <div class="max-w-7xl mx-auto px-5 sm:px-8">
            <div class="flex flex-col sm:flex-row sm:items-end sm:justify-between gap-6 mb-12">
                <div>
                    <p class="text-xs uppercase tracking-[0.2em] text-orange-400 font-semibold">Feedback</p>
                    <h2 class="mt-3 text-3xl sm:text-4xl md:text-5xl font-bold tracking-tight">
                        How we benefit<br />our clients.
                    </h2>
                </div>
                <p class="max-w-md text-neutral-400">
                    Numbers don&rsquo;t lie. These are real channels we&rsquo;ve scaled with retainer-grade content systems.
                </p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-4">
                <article
                    v-for="c in clients"
                    :key="c.name"
                    class="glass rounded-2xl p-6 glass-hover relative overflow-hidden"
                >
                    <div class="absolute -top-10 -right-10 w-32 h-32 bg-orange-500/15 rounded-full blur-3xl"></div>
                    <div class="relative">
                        <img :src="c.avatar" :alt="c.name" class="w-14 h-14 rounded-2xl object-cover ring-2 ring-orange-500/30 mb-4" loading="lazy" />
                        <h3 class="text-lg font-semibold leading-tight">{{ c.name }}</h3>
                        <p class="text-xs text-neutral-400 mt-1">{{ c.niche }} niche</p>

                        <div class="mt-5 space-y-3 pt-5 border-t border-white/10">
                            <div v-for="s in c.stats" :key="s.l">
                                <div class="text-2xl font-bold gradient-text">{{ s.v }}</div>
                                <div class="text-xs text-neutral-400">{{ s.l }}</div>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </section>
</template>
