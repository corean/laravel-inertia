<script setup>
import {Link} from '@inertiajs/inertia-vue3';
</script>

<template>
  <div class="max-w-6xl overflow-hidden overflow-x-auto p-6 bg-white border-gray-200 mx-auto">
    <Link :href="route('posts.index')">Post</Link>
    <Link :href="route('page.about')" class="ml-2">About</Link>

    <h3>About Us</h3>
    <p>Text About </p>
  </div>
</template>