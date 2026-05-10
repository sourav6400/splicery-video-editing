<script setup>
const stats = [
    { value: '250%', label: 'Revenue growth' },
    { value: '200%', label: 'Saved on ad spend' },
    { value: '$350K', label: 'Monthly recurring' },
    { value: '5K+', label: 'Subs to scale' },
];
</script>

<template>
    <section id="case-study" class="py-20 sm:py-28 relative overflow-hidden">
        <div class="absolute inset-0 -z-10">
            <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[700px] h-[700px] bg-orange-500/10 rounded-full blur-[120px]"></div>
        </div>

        <div class="max-w-7xl mx-auto px-5 sm:px-8">
            <div class="mb-12 text-center sm:text-left">
                <p class="text-xs uppercase tracking-[0.2em] text-orange-400 font-semibold">Case study</p>
                <h2 class="mt-3 text-3xl sm:text-4xl md:text-5xl font-bold tracking-tight">
                    Some solid case studies.
                </h2>
            </div>

            <div class="glass rounded-3xl overflow-hidden grid grid-cols-1 lg:grid-cols-2">
                <div class="relative aspect-video lg:aspect-auto min-h-[320px] overflow-hidden">
                    <img
                        src="https://images.unsplash.com/photo-1521737604893-d14cc237f11d?w=1200&q=80"
                        alt="Spencer Pawliw"
                        class="w-full h-full object-cover"
                        loading="lazy"
                    />
                    <div class="absolute inset-0 bg-gradient-to-tr from-orange-500/40 via-black/30 to-transparent"></div>
                    <div class="absolute inset-0 flex items-center justify-center">
                        <div class="w-20 h-20 rounded-full bg-white/95 flex items-center justify-center shadow-2xl animate-glow">
                            <svg class="w-9 h-9 ml-1 text-black" viewBox="0 0 24 24" fill="currentColor"><path d="M8 5v14l11-7z" /></svg>
                        </div>
                    </div>
                    <div class="absolute top-5 left-5 px-3 py-1.5 rounded-full bg-black/60 backdrop-blur text-xs font-semibold">
                        01 / Case study
                    </div>
                </div>

                <div class="p-8 sm:p-12 flex flex-col justify-center">
                    <p class="text-sm text-orange-400 font-semibold uppercase tracking-wider">Skool Games Winner</p>
                    <h3 class="mt-3 text-2xl sm:text-3xl font-semibold tracking-tight leading-tight">
                        &ldquo;With just 5,000 subscribers, Spencer now generates
                        <span class="gradient-text">$350K per month</span>.&rdquo;
                    </h3>
                    <div class="mt-6 flex items-center gap-3">
                        <img
                            src="https://i.pravatar.cc/120?img=33"
                            alt="Spencer"
                            class="w-12 h-12 rounded-full ring-2 ring-orange-500/40 object-cover"
                        />
                        <div>
                            <div class="font-semibold">Spencer Pawliw</div>
                            <div class="text-sm text-neutral-400">Founder, Ecom Brand</div>
                        </div>
                    </div>

                    <div class="mt-8 grid grid-cols-2 gap-4">
                        <div
                            v-for="stat in stats"
                            :key="stat.label"
                            class="rounded-xl bg-white/[0.03] border border-white/5 p-4"
                        >
                            <div class="text-2xl sm:text-3xl font-bold gradient-text">{{ stat.value }}</div>
                            <div class="text-xs text-neutral-400 mt-1">{{ stat.label }}</div>
                        </div>
                    </div>

                    <a
                        href="#book"
                        class="mt-8 inline-flex items-center gap-2 px-6 py-3 rounded-full bg-white text-black font-semibold w-max group"
                    >
                        Book a 30-min call
                        <svg class="w-4 h-4 transition-transform group-hover:translate-x-0.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M13 5l7 7-7 7"/></svg>
                    </a>
                </div>
            </div>
        </div>
    </section>
</template>
