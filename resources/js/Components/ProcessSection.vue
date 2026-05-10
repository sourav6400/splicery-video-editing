<script setup>
const steps = [
    {
        n: '01',
        tag: 'Ideation',
        title: 'Idea analysis',
        desc: 'We pressure-test your ideas against our market data and existing creator playbooks. Hooks, titles, CTAs &mdash; all stress-tested before we hit record.',
        chips: ['Hook', 'Title', 'Value', 'CTA'],
    },
    {
        n: '02',
        tag: 'Scripting',
        title: 'Writing content',
        desc: 'Proven script frameworks the biggest creators &amp; companies use. Structured for retention, not vanity. We write, you approve, we ship.',
        chips: ['PAS', 'AIDA', '4U', 'Storyloop'],
    },
    {
        n: '03',
        tag: 'Editing',
        title: 'Editing the video',
        desc: 'High-end motion graphics, b-roll, sound design and color. Your message looks, sounds and feels premium. Always.',
        chips: ['Color', 'Sound', 'Motion', 'B-roll'],
    },
    {
        n: '04',
        tag: 'Thumbnail',
        title: 'Creating thumbnails',
        desc: 'We split-test against the top performers in your niche, then iterate on what your audience actually clicks on.',
        chips: ['A/B', 'CTR', 'Curiosity', 'Contrast'],
    },
    {
        n: '05',
        tag: 'Distribution',
        title: 'Post with SEO',
        desc: 'Optimised metadata, scheduling, end-screens, repurposing &mdash; we don&rsquo;t just hand-off. We push the publish button and watch the leads come in.',
        chips: ['SEO', 'Repurpose', 'Schedule', 'Track'],
    },
];
</script>

<template>
    <section id="process" class="py-20 sm:py-28">
        <div class="max-w-7xl mx-auto px-5 sm:px-8">
            <div class="mb-14">
                <p class="text-xs uppercase tracking-[0.2em] text-orange-400 font-semibold">Our process</p>
                <h2 class="mt-3 text-3xl sm:text-4xl md:text-5xl font-bold tracking-tight">
                    Our strategy to get<br />you leads with content.
                </h2>
            </div>

            <div class="space-y-4">
                <article
                    v-for="step in steps"
                    :key="step.n"
                    class="group glass rounded-2xl p-6 sm:p-8 grid grid-cols-1 md:grid-cols-12 gap-5 items-start glass-hover"
                >
                    <div class="md:col-span-2 flex md:flex-col items-center md:items-start gap-3">
                        <div class="text-4xl sm:text-5xl font-bold gradient-text">{{ step.n }}</div>
                        <div class="text-xs uppercase tracking-[0.2em] text-orange-400 font-semibold md:mt-2">{{ step.tag }}</div>
                    </div>
                    <div class="md:col-span-7">
                        <h3 class="text-xl sm:text-2xl font-semibold tracking-tight">{{ step.title }}</h3>
                        <p class="mt-3 text-neutral-300 leading-relaxed" v-html="step.desc" />
                    </div>
                    <div class="md:col-span-3 flex flex-wrap gap-2 md:justify-end">
                        <span
                            v-for="chip in step.chips"
                            :key="chip"
                            class="px-3 py-1.5 text-xs font-semibold rounded-full bg-white/5 border border-white/10 text-neutral-200"
                        >{{ chip }}</span>
                    </div>
                </article>
            </div>
        </div>
    </section>
</template>
