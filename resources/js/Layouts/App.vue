<template>
  <div
    class="mx-auto max-w-6xl overflow-hidden overflow-x-auto border-gray-200 bg-white p-6"
  >
    <Link
      :class="{ 'font-bold': $page.component === 'Posts/Index' }"
      :href="route('posts.index')"
      >Post</Link
    >
    <Link
      :class="{ 'font-bold': $page.component === 'Posts/About' }"
      :href="route('page.about')"
      class="ml-2"
      >About</Link
    >

    <div class="mt-4 align-middle">
      <slot />
    </div>
  </div>
</template>

<script setup>
import { Link } from '@inertiajs/inertia-vue3'
</script>
