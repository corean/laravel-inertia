<script setup>
import Pagination from '@/Components/Pagination.vue';
import moment from 'moment';

defineProps({
  posts: {
    type: Object,
    default: () => ({}),
  },
});

</script>

<template>
  <div class="max-w-5xl mx-auto">
    <h1 class="text-2xl font-bold mb-4">Posts</h1>
    <table class="table-auto border-b-2">
      <thead>
      <tr>
        <th class="table-th">id</th>
        <th class="table-th">title</th>
        <th class="table-th">content</th>
        <th class="table-th" style="width: 10em;">date</th>
      </tr>
      </thead>
      <tbody class="bg-white divide-y divide-gray-20 divide-solid">
      <tr v-for="post in posts.data" key="post.id">
        <td class="table-td">{{ post.id }}</td>
        <td class="table-td">{{ post.title }}</td>
        <td class="table-td">{{ post.content }}</td>
        <td class="table-td">{{ moment(post.created_at).format('YYYY-MM-DD') }}</td>
      </tr>
      </tbody>
    </table>
    <pagination :data="posts"/>
  </div>
</template>
