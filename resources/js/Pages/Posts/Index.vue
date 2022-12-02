<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import {Head, Link} from '@inertiajs/inertia-vue3';
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
  <Head title="Post List"/>

  <AuthenticatedLayout>
    <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white py-8 px-6 sm:rounded-lg  shadow-sm ">
          <Link :href="route('posts.create')"
                class="inline-flex justify-center bg-indigo-500 text-white py-2 px-4 rounded-md border-transparent font-medium mb-2 text-sm shadow-sm shadow-indigo-200 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2"
          >
            New Post
          </Link>

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
