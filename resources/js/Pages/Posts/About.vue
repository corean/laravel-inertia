<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import {Head} from '@inertiajs/inertia-vue3';
// import AppLayout from '@/Layouts/App.vue';
</script>

<template>
  <Head title="About"/>
  <AuthenticatedLayout>
    <h3>About Us</h3>
    <p>Text About </p>
  </AuthenticatedLayout>
</template>