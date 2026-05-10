<script setup>
import { ref } from 'vue';

const faqs = [
    {
        q: 'Tell me about your agency?',
        a: 'Splicery is a Done-For-You content studio that helps coaches, founders, and SaaS brands build their personal brand and pipeline through high-quality video editing and distribution. We have an in-house team of 40+ specialists.',
    },
    {
        q: 'Tell me about your content plan?',
        a: 'After onboarding, we audit your existing content, identify your niche positioning, and ship a 90-day content plan with hooks, scripts, edits, thumbnails and a posting schedule, all tailored to your brand voice.',
    },
    {
        q: 'What services will you provide?',
        a: 'YouTube long-form, Shorts/Reels/TikToks, podcasts, ad creatives & VSLs, demo videos and SaaS launch films. We also handle CRM setup, lead capture and Meta/YouTube ad campaigns when needed.',
    },
    {
        q: 'What if I don\'t get the results?',
        a: 'We have replicated our system for 500+ brands. We\'ll set explicit KPIs at kickoff. If we miss them in the first 60 days, we keep working at no cost until we hit them. We don\'t do "best effort", we do outcomes.',
    },
    {
        q: 'Why wouldn\'t I hire a freelancer?',
        a: 'A solo freelancer can edit. They cannot script, design thumbnails, run distribution, A/B test, manage a CRM and stay on-call 24/7. Our 40-person team replaces 6 hires for less than the cost of one.',
    },
    {
        q: 'Tell me about your workflow?',
        a: 'Discovery call → audit → strategy doc → kickoff → weekly sprint cycles with Loom feedback loops → publish & track. You get a Slack channel, a client portal, and a dedicated PM. Nothing falls through the cracks.',
    },
];

const openIndex = ref(0);
const toggle = (i) => {
    openIndex.value = openIndex.value === i ? -1 : i;
};
</script>

<template>
    <section id="faq" class="py-20 sm:py-28">
        <div class="max-w-4xl mx-auto px-5 sm:px-8">
            <div class="text-center mb-12">
                <p class="text-xs uppercase tracking-[0.2em] text-orange-400 font-semibold">Any queries you have</p>
                <h2 class="mt-3 text-3xl sm:text-4xl md:text-5xl font-bold tracking-tight">
                    Questions you<br />may ask.
                </h2>
            </div>

            <div class="space-y-3">
                <div
                    v-for="(f, i) in faqs"
                    :key="i"
                    class="glass rounded-2xl overflow-hidden"
                >
                    <button
                        @click="toggle(i)"
                        class="w-full flex items-center justify-between gap-4 p-6 text-left hover:bg-white/[0.02] transition"
                        :aria-expanded="openIndex === i"
                    >
                        <span class="text-base sm:text-lg font-semibold">{{ f.q }}</span>
                        <span :class="[
                            'flex-shrink-0 w-9 h-9 rounded-full flex items-center justify-center transition-transform',
                            openIndex === i ? 'bg-gradient-to-br from-orange-500 to-rose-500 rotate-180' : 'bg-white/5',
                        ]">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="M6 9l6 6 6-6" /></svg>
                        </span>
                    </button>
                    <div
                        v-show="openIndex === i"
                        class="px-6 pb-6 text-neutral-300 leading-relaxed"
                    >
                        {{ f.a }}
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>
