<script setup>

defineProps({
  posts: Object,
});

</script>

<template>
  <div class="max-w-5xl mx-auto">
    <h1>Posts</h1>
    <table class="table-auto ">
      <thead>
      <tr>
        <th class="px-6 py-3 bg-gray-50 text-left">id</th>
        <th class="px-6 py-3 bg-gray-50 text-left">title</th>
        <th class="px-6 py-3 bg-gray-50 text-left">content</th>
      </tr>
      </thead>
      <tbody class="bg-white divide-y divide-gray-20 divide-solid">
      <tr v-for="post in posts" key="post.id">
        <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">{{ post.id }}</td>
        <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">{{ post.title }}</td>
        <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">{{ post.content }}</td>
      </tr>
      </tbody>
    </table>
  </div>
</template>