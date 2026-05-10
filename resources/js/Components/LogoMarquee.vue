<script setup>
const brands = [
    'AcmeCo', 'Northwind', 'Stripe Cloud', 'Lumen AI', 'Fenix Labs',
    'Hyperdrive', 'Quantum', 'Drift Studio', 'Pixelary', 'Kinetic',
    'Vertex', 'Foundry', 'Skylark', 'Voltage', 'Loop',
];
</script>

<template>
    <section class="py-10 border-y border-white/5 overflow-hidden">
        <div class="max-w-7xl mx-auto px-5 sm:px-8 mb-6">
            <p class="text-center text-xs uppercase tracking-[0.2em] text-neutral-500">Trusted by content teams &amp; founders at</p>
        </div>
        <div class="relative">
            <div class="flex w-max animate-marquee gap-12 sm:gap-16 px-6">
                <div
                    v-for="brand in [...brands, ...brands]"
                    :key="brand + Math.random()"
                    class="text-xl sm:text-2xl font-semibold text-neutral-500 whitespace-nowrap hover:text-white transition"
                >
                    {{ brand }}
                </div>
            </div>
            <div class="pointer-events-none absolute inset-y-0 left-0 w-32 bg-gradient-to-r from-[#111114] to-transparent"></div>
            <div class="pointer-events-none absolute inset-y-0 right-0 w-32 bg-gradient-to-l from-[#111114] to-transparent"></div>
        </div>
    </section>
</template>
