<script setup>
const avatars = [
    'https://i.pravatar.cc/80?img=12',
    'https://i.pravatar.cc/80?img=32',
    'https://i.pravatar.cc/80?img=47',
    'https://i.pravatar.cc/80?img=68',
    'https://i.pravatar.cc/80?img=15',
];
</script>

<template>
    <section id="top" class="relative pt-28 sm:pt-36 pb-20 overflow-hidden noise">
        <div class="absolute inset-0 -z-10">
            <div class="absolute -top-40 left-1/2 -translate-x-1/2 w-[900px] h-[900px] bg-orange-500/20 rounded-full blur-[140px]"></div>
            <div class="absolute top-40 -right-40 w-[600px] h-[600px] bg-pink-500/15 rounded-full blur-[120px]"></div>
            <div class="absolute -bottom-20 -left-20 w-[500px] h-[500px] bg-rose-500/10 rounded-full blur-[100px]"></div>
            <div class="absolute inset-0 bg-[linear-gradient(to_right,rgba(255,255,255,0.04)_1px,transparent_1px),linear-gradient(to_bottom,rgba(255,255,255,0.04)_1px,transparent_1px)] bg-[size:64px_64px] [mask-image:radial-gradient(ellipse_at_center,black_30%,transparent_70%)]"></div>
        </div>

        <div class="max-w-7xl mx-auto px-5 sm:px-8">
            <div class="flex flex-col items-center text-center">
                <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full glass text-xs sm:text-sm text-neutral-200">
                    <span class="relative flex h-2 w-2">
                        <span class="absolute inline-flex h-full w-full rounded-full bg-emerald-400 opacity-75 animate-ping"></span>
                        <span class="relative inline-flex h-2 w-2 rounded-full bg-emerald-500"></span>
                    </span>
                    Booking 4 client slots for May 2026
                </div>

                <h1 class="mt-7 text-4xl sm:text-5xl md:text-6xl lg:text-7xl font-bold tracking-tight leading-[1.05]">
                    Get more leads
                    <span class="block">using</span>
                    <span class="block">
                        <span class="gradient-text">quality video</span>
                        content.
                    </span>
                </h1>

                <p class="mt-7 max-w-2xl text-base sm:text-lg text-neutral-300 leading-relaxed">
                    We help entrepreneurs &amp; SaaS founders ship Done-For-You organic content that fills the
                    pipeline on autopilot. Scripts, edits, thumbnails, distribution &mdash; one team, zero excuses.
                </p>

                <div class="mt-9 flex flex-col sm:flex-row items-center gap-3">
                    <a
                        href="#book"
                        class="group inline-flex items-center gap-2 px-7 py-4 rounded-full bg-gradient-to-r from-orange-500 to-rose-500 text-white font-semibold shadow-lg shadow-orange-500/30 hover:shadow-orange-500/50 hover:scale-[1.02] transition"
                    >
                        Book a 30-min call
                        <svg class="w-4 h-4 transition-transform group-hover:translate-x-0.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M13 5l7 7-7 7"/></svg>
                    </a>
                    <a
                        href="#work"
                        class="inline-flex items-center gap-2 px-7 py-4 rounded-full glass glass-hover text-white font-semibold"
                    >
                        <svg class="w-4 h-4" viewBox="0 0 24 24" fill="currentColor"><path d="M8 5v14l11-7z" /></svg>
                        See our work
                    </a>
                </div>

                <div class="mt-12 flex flex-col sm:flex-row items-center gap-4">
                    <div class="flex -space-x-3">
                        <img
                            v-for="(src, i) in avatars"
                            :key="i"
                            :src="src"
                            :alt="`Client ${i + 1}`"
                            class="w-10 h-10 rounded-full border-2 border-[#111114] object-cover"
                            loading="lazy"
                        />
                    </div>
                    <div class="flex items-center gap-2">
                        <div class="flex text-orange-400">
                            <svg v-for="n in 5" :key="n" class="w-4 h-4" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/>
                            </svg>
                        </div>
                        <span class="text-sm text-neutral-300">Loved by <span class="text-white font-semibold">500+ businesses</span> worldwide</span>
                    </div>
                </div>
            </div>

            <div class="mt-16 sm:mt-20 grid grid-cols-1 md:grid-cols-3 gap-4 sm:gap-6">
                <div class="glass rounded-2xl p-7 sm:p-8 glass-hover">
                    <div class="flex items-baseline gap-1">
                        <span class="text-5xl sm:text-6xl font-bold gradient-text">21</span>
                        <span class="text-3xl font-bold text-orange-400">%</span>
                    </div>
                    <div class="mt-2 font-semibold text-lg">More Engagement</div>
                    <div class="text-sm text-neutral-400 mt-1">Viral edits &amp; pattern interrupts</div>
                </div>
                <div class="glass rounded-2xl p-7 sm:p-8 glass-hover">
                    <div class="flex items-baseline gap-1">
                        <span class="text-5xl sm:text-6xl font-bold gradient-text">5</span>
                        <span class="text-3xl font-bold text-orange-400">x</span>
                    </div>
                    <div class="mt-2 font-semibold text-lg">More Reach</div>
                    <div class="text-sm text-neutral-400 mt-1">Strategic distribution playbook</div>
                </div>
                <div class="glass rounded-2xl p-7 sm:p-8 glass-hover">
                    <div class="flex items-baseline gap-1">
                        <span class="text-5xl sm:text-6xl font-bold gradient-text">51</span>
                        <span class="text-3xl font-bold text-orange-400">%</span>
                    </div>
                    <div class="mt-2 font-semibold text-lg">More Leads</div>
                    <div class="text-sm text-neutral-400 mt-1">Funnels that actually convert</div>
                </div>
            </div>
        </div>
    </section>
</template>
