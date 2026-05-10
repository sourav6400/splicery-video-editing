<script setup>
import { Link, useForm } from '@inertiajs/vue3';
import { ref } from 'vue';

const submitted = ref(false);

const form = useForm({
    name: '',
    email: '',
    company: '',
    budget: '',
    service: 'youtube',
    message: '',
});

const services = [
    { id: 'youtube', label: 'YouTube' },
    { id: 'shorts', label: 'Shorts / Reels' },
    { id: 'saas', label: 'SaaS Video' },
    { id: 'ads', label: 'Ads / VSL' },
];

const budgets = ['<$2K/mo', '$2K-$5K/mo', '$5K-$10K/mo', '$10K+/mo'];

const submit = () => {
    form.post('/book', {
        preserveScroll: true,
        onSuccess: () => {
            submitted.value = true;
            form.reset();
        },
    });
};
</script>

<template>
    <section id="book" class="py-20 sm:py-28 relative overflow-hidden">
        <div class="absolute inset-0 -z-10">
            <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[800px] h-[800px] bg-orange-500/15 rounded-full blur-[140px]"></div>
        </div>

        <div class="max-w-7xl mx-auto px-5 sm:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 items-start">
                <div>
                    <p class="text-xs uppercase tracking-[0.2em] text-orange-400 font-semibold">Work with us</p>
                    <h2 class="mt-3 text-3xl sm:text-4xl md:text-5xl font-bold tracking-tight">
                        Let&rsquo;s level up<br /><span class="gradient-text">your business.</span>
                    </h2>
                    <p class="mt-5 text-neutral-300 text-lg leading-relaxed max-w-md">
                        Tell us about your brand and goals. A senior strategist will reach out within 24 hours to schedule
                        a 30-min discovery call. No pitches, just a plan.
                    </p>

                    <ul class="mt-8 space-y-3 text-neutral-200">
                        <li class="flex items-center gap-3">
                            <div class="w-6 h-6 rounded-full bg-orange-500/20 flex items-center justify-center">
                                <svg class="w-3.5 h-3.5 text-orange-400" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24"><path d="M5 12l5 5L20 7" /></svg>
                            </div>
                            Free strategy doc within 48 hours
                        </li>
                        <li class="flex items-center gap-3">
                            <div class="w-6 h-6 rounded-full bg-orange-500/20 flex items-center justify-center">
                                <svg class="w-3.5 h-3.5 text-orange-400" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24"><path d="M5 12l5 5L20 7" /></svg>
                            </div>
                            No commitment, no sales hard-sell
                        </li>
                        <li class="flex items-center gap-3">
                            <div class="w-6 h-6 rounded-full bg-orange-500/20 flex items-center justify-center">
                                <svg class="w-3.5 h-3.5 text-orange-400" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24"><path d="M5 12l5 5L20 7" /></svg>
                            </div>
                            Senior strategist on the first call
                        </li>
                    </ul>

                    <div class="mt-10 flex items-center gap-4">
                        <div class="flex -space-x-2">
                            <img src="https://i.pravatar.cc/64?img=12" class="w-9 h-9 rounded-full ring-2 ring-[#111114] object-cover" alt="" />
                            <img src="https://i.pravatar.cc/64?img=33" class="w-9 h-9 rounded-full ring-2 ring-[#111114] object-cover" alt="" />
                            <img src="https://i.pravatar.cc/64?img=47" class="w-9 h-9 rounded-full ring-2 ring-[#111114] object-cover" alt="" />
                        </div>
                        <span class="text-sm text-neutral-400"><span class="text-white font-semibold">12 calls</span> booked this week</span>
                    </div>
                </div>

                <div class="glass rounded-3xl p-7 sm:p-9 relative">
                    <div v-if="submitted" class="text-center py-12">
                        <div class="mx-auto w-16 h-16 rounded-full bg-gradient-to-br from-orange-500 to-rose-500 flex items-center justify-center mb-5">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24"><path d="M5 12l5 5L20 7" /></svg>
                        </div>
                        <h3 class="text-2xl font-semibold tracking-tight">Request received.</h3>
                        <p class="mt-2 text-neutral-400">Check your inbox &mdash; a strategist will reach out within 24 hours with a calendar link.</p>
                        <button
                            @click="submitted = false"
                            class="mt-6 inline-flex items-center gap-2 px-5 py-2.5 rounded-full bg-white/5 text-sm font-semibold hover:bg-white/10"
                        >
                            Submit another
                        </button>
                    </div>

                    <form v-else @submit.prevent="submit" class="space-y-4">
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-xs font-semibold uppercase tracking-wider text-neutral-400 mb-2">Name</label>
                                <input
                                    v-model="form.name"
                                    type="text"
                                    required
                                    placeholder="Jane Doe"
                                    class="w-full bg-white/[0.04] border border-white/10 rounded-xl px-4 py-3 text-white placeholder-neutral-500 focus:outline-none focus:border-orange-500/60 focus:bg-white/[0.06] transition"
                                />
                                <p v-if="form.errors.name" class="mt-1 text-xs text-rose-400">{{ form.errors.name }}</p>
                            </div>
                            <div>
                                <label class="block text-xs font-semibold uppercase tracking-wider text-neutral-400 mb-2">Email</label>
                                <input
                                    v-model="form.email"
                                    type="email"
                                    required
                                    placeholder="jane@brand.com"
                                    class="w-full bg-white/[0.04] border border-white/10 rounded-xl px-4 py-3 text-white placeholder-neutral-500 focus:outline-none focus:border-orange-500/60 focus:bg-white/[0.06] transition"
                                />
                                <p v-if="form.errors.email" class="mt-1 text-xs text-rose-400">{{ form.errors.email }}</p>
                            </div>
                        </div>

                        <div>
                            <label class="block text-xs font-semibold uppercase tracking-wider text-neutral-400 mb-2">Company / channel</label>
                            <input
                                v-model="form.company"
                                type="text"
                                placeholder="Acme Studio / @acme"
                                class="w-full bg-white/[0.04] border border-white/10 rounded-xl px-4 py-3 text-white placeholder-neutral-500 focus:outline-none focus:border-orange-500/60 focus:bg-white/[0.06] transition"
                            />
                        </div>

                        <div>
                            <label class="block text-xs font-semibold uppercase tracking-wider text-neutral-400 mb-2">Service interested in</label>
                            <div class="flex flex-wrap gap-2">
                                <button
                                    v-for="s in services"
                                    :key="s.id"
                                    type="button"
                                    @click="form.service = s.id"
                                    :class="[
                                        'px-4 py-2 rounded-full text-sm font-semibold border transition',
                                        form.service === s.id
                                            ? 'bg-gradient-to-r from-orange-500 to-rose-500 border-transparent text-white'
                                            : 'border-white/10 text-neutral-300 hover:bg-white/5',
                                    ]"
                                >{{ s.label }}</button>
                            </div>
                        </div>

                        <div>
                            <label class="block text-xs font-semibold uppercase tracking-wider text-neutral-400 mb-2">Monthly budget</label>
                            <div class="grid grid-cols-2 sm:grid-cols-4 gap-2">
                                <button
                                    v-for="b in budgets"
                                    :key="b"
                                    type="button"
                                    @click="form.budget = b"
                                    :class="[
                                        'px-3 py-2.5 rounded-xl text-sm font-semibold border transition',
                                        form.budget === b
                                            ? 'border-orange-500/60 bg-orange-500/10 text-white'
                                            : 'border-white/10 text-neutral-300 hover:bg-white/5',
                                    ]"
                                >{{ b }}</button>
                            </div>
                        </div>

                        <div>
                            <label class="block text-xs font-semibold uppercase tracking-wider text-neutral-400 mb-2">What are you trying to achieve?</label>
                            <textarea
                                v-model="form.message"
                                rows="4"
                                placeholder="Tell us about your goals, audience, current bottlenecks..."
                                class="w-full bg-white/[0.04] border border-white/10 rounded-xl px-4 py-3 text-white placeholder-neutral-500 focus:outline-none focus:border-orange-500/60 focus:bg-white/[0.06] transition resize-none"
                            ></textarea>
                        </div>

                        <button
                            type="submit"
                            :disabled="form.processing"
                            class="w-full inline-flex items-center justify-center gap-2 px-7 py-4 rounded-full bg-gradient-to-r from-orange-500 to-rose-500 text-white font-semibold shadow-lg shadow-orange-500/30 hover:shadow-orange-500/50 hover:scale-[1.01] transition disabled:opacity-60 disabled:cursor-not-allowed"
                        >
                            <span v-if="form.processing">Sending...</span>
                            <template v-else>
                                Book my discovery call
                                <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M13 5l7 7-7 7"/></svg>
                            </template>
                        </button>

                        <p class="text-xs text-center text-neutral-500">
                            By submitting, you agree to our
                            <Link href="/terms" class="text-neutral-400 underline hover:text-orange-400">Terms of Service</Link>
                            and
                            <Link href="/privacy" class="text-neutral-400 underline hover:text-orange-400">Privacy Policy</Link>.
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </section>
</template>
