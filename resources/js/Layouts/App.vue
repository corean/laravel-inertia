<template>
  <div class="max-w-6xl overflow-hidden overflow-x-auto p-6 bg-white border-gray-200 mx-auto">
    <Link :class="{ 'font-bold': $page.component === 'Posts/Index' }" :href="route('posts.index')">Post</Link>
    <Link :class="{ 'font-bold': $page.component === 'Posts/About' }" :href="route('page.about')"
          class="ml-2">About</Link>

    <div class=" align-middle mt-4">
      <slot/>
    </div>

  </div>
</template>

<script setup>
  import {Link} from '@inertiajs/inertia-vue3';
</script>