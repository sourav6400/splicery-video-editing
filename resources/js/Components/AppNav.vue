<script setup>
import { ref, onMounted, onUnmounted } from 'vue';

const open = ref(false);
const scrolled = ref(false);

const links = [
    { href: '#work', label: 'Work' },
    { href: '#process', label: 'Process' },
    { href: '#services', label: 'Services' },
    { href: '#case-study', label: 'Case Study' },
    { href: '#faq', label: 'FAQ' },
];

const onScroll = () => {
    scrolled.value = window.scrollY > 24;
};

onMounted(() => {
    window.addEventListener('scroll', onScroll, { passive: true });
    onScroll();
});

onUnmounted(() => {
    window.removeEventListener('scroll', onScroll);
});
</script>

<template>
    <header
        :class="[
            'fixed top-0 inset-x-0 z-50 transition-all duration-300',
            scrolled ? 'bg-[#111114]/80 backdrop-blur-xl border-b border-white/5' : 'bg-transparent',
        ]"
    >
        <nav class="max-w-7xl mx-auto px-5 sm:px-8 h-16 sm:h-20 flex items-center justify-between">
            <a href="#top" class="flex items-center gap-2.5 group">
                <div class="relative w-9 h-9 rounded-xl bg-gradient-to-br from-orange-500 via-rose-500 to-pink-500 flex items-center justify-center shadow-lg shadow-orange-500/30 group-hover:shadow-orange-500/60 transition">
                    <svg viewBox="0 0 24 24" class="w-5 h-5 text-white" fill="currentColor">
                        <path d="M8 5v14l11-7z" />
                    </svg>
                </div>
                <span class="font-bold text-lg tracking-tight">Splicery<span class="text-orange-500">.</span></span>
            </a>

            <div class="hidden md:flex items-center gap-1">
                <a
                    v-for="link in links"
                    :key="link.href"
                    :href="link.href"
                    class="px-4 py-2 text-sm text-neutral-300 hover:text-white rounded-full hover:bg-white/5 transition"
                >
                    {{ link.label }}
                </a>
            </div>

            <div class="flex items-center gap-3">
                <a
                    href="#book"
                    class="hidden sm:inline-flex items-center gap-2 px-5 py-2.5 text-sm font-semibold rounded-full bg-white text-black hover:bg-orange-400 hover:text-black transition group"
                >
                    Book a call
                    <svg class="w-4 h-4 transition-transform group-hover:translate-x-0.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M13 5l7 7-7 7"/></svg>
                </a>
                <button
                    class="md:hidden p-2 rounded-lg hover:bg-white/5"
                    @click="open = !open"
                    aria-label="Toggle menu"
                >
                    <svg v-if="!open" class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M4 6h16M4 12h16M4 18h16"/></svg>
                    <svg v-else class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M6 6l12 12M18 6l-12 12"/></svg>
                </button>
            </div>
        </nav>

        <div
            v-show="open"
            class="md:hidden border-t border-white/5 bg-[#111114]/95 backdrop-blur-xl"
        >
            <div class="px-5 py-4 space-y-1">
                <a
                    v-for="link in links"
                    :key="link.href"
                    :href="link.href"
                    @click="open = false"
                    class="block px-4 py-3 text-neutral-200 hover:bg-white/5 rounded-lg"
                >
                    {{ link.label }}
                </a>
                <a
                    href="#book"
                    @click="open = false"
                    class="block px-4 py-3 mt-2 text-center font-semibold rounded-full bg-white text-black"
                >
                    Book a call
                </a>
            </div>
        </div>
    </header>
</template>
