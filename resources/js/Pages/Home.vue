<script setup>
import { Head } from '@inertiajs/vue3';
import AppNav from '../Components/AppNav.vue';
import HeroSection from '../Components/HeroSection.vue';
import LogoMarquee from '../Components/LogoMarquee.vue';
import TestimonialsSection from '../Components/TestimonialsSection.vue';
import WorkSection from '../Components/WorkSection.vue';
import CaseStudySection from '../Components/CaseStudySection.vue';
import WhyUsSection from '../Components/WhyUsSection.vue';
import ProcessSection from '../Components/ProcessSection.vue';
import ServicesSection from '../Components/ServicesSection.vue';
import ClientFeedback from '../Components/ClientFeedback.vue';
import BookSection from '../Components/BookSection.vue';
import FaqSection from '../Components/FaqSection.vue';
import AppFooter from '../Components/AppFooter.vue';
</script>

<template>
    <Head>
        <title>Splicery Studio &mdash; Done-For-You video content that converts</title>
        <meta name="description" content="We help entrepreneurs & SaaS founders ship Done-For-You organic video content that fills the pipeline on autopilot." />
    </Head>

    <AppNav />
    <main>
        <HeroSection />
        <LogoMarquee />
        <TestimonialsSection />
        <WorkSection />
        <CaseStudySection />
        <WhyUsSection />
        <ProcessSection />
        <ServicesSection />
        <ClientFeedback />
        <BookSection />
        <FaqSection />
    </main>
    <AppFooter />
</template>
