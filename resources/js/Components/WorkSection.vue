<script setup>
import { ref } from 'vue';

const tabs = [
    { id: 'youtube', label: 'YouTube Videos' },
    { id: 'shorts', label: 'Shorts' },
    { id: 'saas', label: 'SaaS Videos' },
    { id: 'ads', label: 'Ad Creatives & VSL' },
];

const projects = {
    youtube: [
        { title: 'Why Stripe Quietly Won the Internet', creator: '@northwind', views: '2.4M', thumb: 'https://images.unsplash.com/photo-1611162617474-5b21e879e113?w=800&q=80' },
        { title: 'I Tried 50 SaaS Tools in 30 Days', creator: '@lucy.wang', views: '890K', thumb: 'https://images.unsplash.com/photo-1542744173-8e7e53415bb0?w=800&q=80' },
        { title: 'The $350K/Month Skool Strategy', creator: '@spencer.p', views: '1.1M', thumb: 'https://images.unsplash.com/photo-1556761175-5973dc0f32e7?w=800&q=80' },
        { title: 'Building in Public: Year One', creator: '@drei.kobe', views: '420K', thumb: 'https://images.unsplash.com/photo-1551434678-e076c223a692?w=800&q=80' },
    ],
    shorts: [
        { title: 'Hook in 3 seconds or you lose', creator: '@splicery', views: '6.2M', thumb: 'https://images.unsplash.com/photo-1611162616475-46b635cb6868?w=800&q=80', vertical: true },
        { title: 'POV: your first 1M view', creator: '@maya.rivers', views: '4.8M', thumb: 'https://images.unsplash.com/photo-1620712943543-bcc4688e7485?w=800&q=80', vertical: true },
        { title: 'Edit your reel like a pro', creator: '@nick.barner', views: '3.1M', thumb: 'https://images.unsplash.com/photo-1574717024653-61fd2cf4d44d?w=800&q=80', vertical: true },
        { title: 'Brand storytelling secret', creator: '@josh.f', views: '2.7M', thumb: 'https://images.unsplash.com/photo-1499728603263-13726abce5fd?w=800&q=80', vertical: true },
    ],
    saas: [
        { title: 'Linear product walkthrough', creator: 'Linear', views: '160K', thumb: 'https://images.unsplash.com/photo-1551288049-bebda4e38f71?w=800&q=80' },
        { title: 'Notion AI launch film', creator: 'Notion', views: '740K', thumb: 'https://images.unsplash.com/photo-1531403009284-440f080d1e12?w=800&q=80' },
        { title: 'Hyperdrive onboarding loop', creator: 'Hyperdrive', views: '92K', thumb: 'https://images.unsplash.com/photo-1593642632559-0c6d3fc62b89?w=800&q=80' },
        { title: 'Customer story — Quantum', creator: 'Quantum', views: '38K', thumb: 'https://images.unsplash.com/photo-1581291518857-4e27b48ff24e?w=800&q=80' },
    ],
    ads: [
        { title: 'VSL — DTC supplement brand', creator: 'Fenix Labs', views: '4.2x ROAS', thumb: 'https://images.unsplash.com/photo-1607082348824-0a96f2a4b9da?w=800&q=80' },
        { title: 'TikTok Spark Ad — apparel', creator: 'Drift', views: '5.8x ROAS', thumb: 'https://images.unsplash.com/photo-1556745753-b2904692b3cd?w=800&q=80' },
        { title: 'Meta UGC bundle (8 angles)', creator: 'Loop', views: '3.1x ROAS', thumb: 'https://images.unsplash.com/photo-1611162618071-b39a2ec055fb?w=800&q=80' },
        { title: 'YouTube pre-roll cutdown', creator: 'Kinetic', views: '2.4x ROAS', thumb: 'https://images.unsplash.com/photo-1551817958-d9d86fb29431?w=800&q=80' },
    ],
};

const active = ref('youtube');
</script>

<template>
    <section id="work" class="py-20 sm:py-28 relative">
        <div class="max-w-7xl mx-auto px-5 sm:px-8">
            <div class="flex flex-col sm:flex-row sm:items-end sm:justify-between gap-6 mb-10">
                <div>
                    <p class="text-xs uppercase tracking-[0.2em] text-orange-400 font-semibold">Our work</p>
                    <h2 class="mt-3 text-3xl sm:text-4xl md:text-5xl font-bold tracking-tight">
                        Some of our<br />featured projects.
                    </h2>
                </div>
                <p class="max-w-md text-neutral-400">
                    From cinematic long-form to scroll-stopping shorts &mdash; pick the format and we&rsquo;ll show you what works.
                </p>
            </div>

            <div class="flex flex-wrap gap-2 mb-8">
                <button
                    v-for="tab in tabs"
                    :key="tab.id"
                    @click="active = tab.id"
                    :class="[
                        'px-5 py-2.5 rounded-full text-sm font-semibold transition',
                        active === tab.id
                            ? 'bg-white text-black'
                            : 'glass text-neutral-300 hover:text-white',
                    ]"
                >
                    {{ tab.label }}
                </button>
            </div>

            <div :class="[
                'grid gap-5',
                active === 'shorts' ? 'grid-cols-2 sm:grid-cols-3 lg:grid-cols-4' : 'grid-cols-1 sm:grid-cols-2 lg:grid-cols-2',
            ]">
                <article
                    v-for="(project, i) in projects[active]"
                    :key="`${active}-${i}`"
                    class="group relative rounded-2xl overflow-hidden glass-hover"
                >
                    <div :class="[
                        'relative overflow-hidden',
                        project.vertical ? 'aspect-[9/16]' : 'aspect-video',
                    ]">
                        <img
                            :src="project.thumb"
                            :alt="project.title"
                            class="w-full h-full object-cover transition duration-700 group-hover:scale-105"
                            loading="lazy"
                        />
                        <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/20 to-transparent"></div>
                        <div class="absolute top-4 right-4 px-3 py-1 rounded-full bg-black/60 backdrop-blur text-xs font-semibold">
                            {{ project.views }}
                        </div>
                        <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition">
                            <div class="w-16 h-16 rounded-full bg-white/95 flex items-center justify-center shadow-2xl">
                                <svg class="w-7 h-7 ml-1 text-black" viewBox="0 0 24 24" fill="currentColor"><path d="M8 5v14l11-7z" /></svg>
                            </div>
                        </div>
                        <div class="absolute bottom-0 inset-x-0 p-5">
                            <h3 class="font-semibold text-base sm:text-lg leading-snug">{{ project.title }}</h3>
                            <p class="text-sm text-neutral-300 mt-1">{{ project.creator }}</p>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </section>
</template>
