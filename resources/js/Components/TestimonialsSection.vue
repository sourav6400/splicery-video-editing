<script setup>
const testimonials = [
    {
        quote: 'Honestly, they are the best in the game, and I highly recommend them to anyone serious about content.',
        name: 'Nick Barner',
        role: 'Content Creator',
        avatar: 'https://i.pravatar.cc/120?img=11',
    },
    {
        quote: 'I have nothing but great things to say. They definitely helped me kickstart everything I\'ve done on YouTube.',
        name: 'Spencer Pawliw',
        role: 'Skool Games Winner',
        avatar: 'https://i.pravatar.cc/120?img=33',
    },
    {
        quote: 'Splicery is the most reliable editing partner you could ask for your content creation ventures. Period.',
        name: 'Josh Faulkner',
        role: 'Entrepreneur',
        avatar: 'https://i.pravatar.cc/120?img=52',
    },
    {
        quote: 'Very quick turnaround and high quality videos. I love how once I provide feedback, the revisions get done fast.',
        name: 'Lucy Wang',
        role: 'Tech Educator',
        avatar: 'https://i.pravatar.cc/120?img=20',
    },
    {
        quote: 'It\'s rare to find a team that nails both speed and quality. As a SaaS company, that saved us hours every week.',
        name: 'Drei Kobe',
        role: 'Founder, Dreikobe',
        avatar: 'https://i.pravatar.cc/120?img=60',
    },
    {
        quote: 'They get the brief on the first try. Our shorts went from 2K views to consistently hitting 200K+ in two months.',
        name: 'Maya Rivers',
        role: 'Creator, 380K subs',
        avatar: 'https://i.pravatar.cc/120?img=45',
    },
];
</script>

<template>
    <section class="py-20 sm:py-28">
        <div class="max-w-7xl mx-auto px-5 sm:px-8">
            <div class="flex flex-col sm:flex-row sm:items-end sm:justify-between gap-6 mb-12">
                <div>
                    <p class="text-xs uppercase tracking-[0.2em] text-orange-400 font-semibold">Client testimonials</p>
                    <h2 class="mt-3 text-3xl sm:text-4xl md:text-5xl font-bold tracking-tight">
                        Hear what they&rsquo;re<br />saying about us.
                    </h2>
                </div>
                <p class="max-w-md text-neutral-400">
                    Real founders, real creators, real results. We obsess over the brief so you can focus on the offer.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5">
                <article
                    v-for="(t, i) in testimonials"
                    :key="i"
                    class="glass rounded-2xl p-7 glass-hover relative"
                >
                    <svg class="w-9 h-9 text-orange-500/50 mb-4" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M9.17 6C5.73 6 3 8.73 3 12.17v5.66h6V12h-3c0-1.66 1.34-3 3-3V6zm12 0c-3.44 0-6.17 2.73-6.17 6.17v5.66h6V12h-3c0-1.66 1.34-3 3-3V6z"/>
                    </svg>
                    <p class="text-neutral-100 leading-relaxed">&ldquo;{{ t.quote }}&rdquo;</p>
                    <div class="mt-6 flex items-center gap-3">
                        <img :src="t.avatar" :alt="t.name" class="w-11 h-11 rounded-full object-cover ring-2 ring-orange-500/30" loading="lazy" />
                        <div>
                            <div class="font-semibold">{{ t.name }}</div>
                            <div class="text-sm text-neutral-400">{{ t.role }}</div>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </section>
</template>
