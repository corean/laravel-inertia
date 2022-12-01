<script setup>
import Pagination from '@/Components/Pagination.vue';
// import moment from 'moment';

defineProps({
  posts: {
    type: Object,
    default: () => ({}),
  },
});

</script>

<template>
  <div class="overflow-hidden overflow-x-auto p-6 bg-white border-gray-200">
    <div class="max-w-6xl align-middle mx-auto">
      <h1 class="text-2xl font-bold mb-4">Posts</h1>
      <table class="min-w-full divide-y divide-gray-200 border">
        <thead>
        <tr>
          <th class="table-th">id</th>
          <th class="table-th">title</th>
          <th class="table-th">content</th>
          <th class="table-th" style="width: 12em;">date</th>
        </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-20 divide-solid">
        <tr v-for="post in posts.data" key="post.id">
          <td class="table-td">{{ post.id }}</td>
          <td class="table-td">{{ post.title }}</td>
          <td class="table-td">{{ post.content }}</td>
          <!--<td class="table-td">{{ moment(post.created_at).format('YYYY-MM-DD') }}</td>-->
          <td class="table-td">{{ post.created_at }}</td>
        </tr>
        </tbody>
      </table>
      <pagination :data="posts.meta"/>
    </div>
  </div>
</template>
