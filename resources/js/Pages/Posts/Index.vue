<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import {Head} from '@inertiajs/inertia-vue3';
import Pagination from '@/Components/Pagination.vue';
// import AppLayout from '@/Layouts/App.vue';
// import moment from 'moment';

defineProps({
  posts: {
    type: Object,
    default: () => ({}),
  },
});

</script>

<template>
  <Head title="Post List" />

  <AuthenticatedLayout>
    <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white py-8 px-6 sm:rounded-lg  shadow-sm ">
          <table class="min-w-full divide-y divide-gray-100 border">
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
    </div>

  </AuthenticatedLayout>
</template>
