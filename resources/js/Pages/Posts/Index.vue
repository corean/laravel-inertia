<script setup>

defineProps({
  posts: Object,
});

</script>

<template>
  <div class="max-w-5xl mx-auto">
    <h1 class="text-2xl font-bold mb-4">Posts</h1>
    <table class="table-auto ">
      <thead>
      <tr>
        <th class="table-th">id</th>
        <th class="table-th">title</th>
        <th class="table-th">content</th>
      </tr>
      </thead>
      <tbody class="bg-white divide-y divide-gray-20 divide-solid">
      <tr v-for="post in posts" key="post.id">
        <td class="table-td">{{ post.id }}</td>
        <td class="table-td">{{ post.title }}</td>
        <td class="table-td">{{ post.content }}</td>
      </tr>
      </tbody>
    </table>
  </div>
</template>
