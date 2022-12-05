<script setup>
import { Head, Link } from '@inertiajs/inertia-vue3'
import { Inertia } from '@inertiajs/inertia'
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue'
import Pagination from '@/Components/Pagination.vue'
// import AppLayout from '@/Layouts/App.vue';
// import moment from 'moment';

defineProps({
  posts: {
    type: Object,
    default: () => ({}),
  },
})

const deletePost = (id) => {
  if (confirm('Are you sure you want to delete this post?')) {
    Inertia.delete(route('posts.destroy', id))
  }
}
</script>

<template>
  <Head>
    <title>Post List</title>
  </Head>

  <AuthenticatedLayout>
    <div class="py-12">
      <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="bg-white py-8 px-6 shadow-sm sm:rounded-lg">
          <div v-if="$page.props.flash.success" class="mb-4 text-blue-600">
            {{ $page.props.flash.success }}
          </div>
          <Link
            :href="route('posts.create')"
            class="mb-2 inline-flex justify-center rounded-md border-transparent bg-indigo-500 py-2 px-4 text-sm font-medium text-white shadow-sm shadow-indigo-200 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2"
          >
            New Post
          </Link>

          <table class="min-w-full divide-y divide-gray-100 border">
            <thead>
              <tr>
                <th class="table-th">id</th>
                <th class="table-th">title</th>
                <th class="table-th">content</th>
                <th class="table-th" style="width: 12em">date</th>
                <th class="table-th"></th>
              </tr>
            </thead>
            <tbody class="divide-gray-20 divide-y divide-solid bg-white">
              <tr v-for="post in posts.data" key="post.id">
                <td class="table-td">{{ post.id }}</td>
                <td class="table-td">{{ post.title }}</td>
                <td class="table-td">{{ post.content }}</td>
                <!--<td class="table-td">{{ moment(post.created_at).format('YYYY-MM-DD') }}</td>-->
                <td class="table-td">{{ post.created_at }}</td>
                <td>
                  <Link
                    :href="route('posts.edit', post.id)"
                    class="mr-2 rounded bg-blue-600 px-2 py-1 text-sm font-bold uppercase text-white"
                  >
                    Edit
                  </Link>
                  <Link
                    @click="deletePost(post.id)"
                    class="rounded bg-red-600 px-2 py-1 text-sm font-bold uppercase text-white"
                  >
                    Delete
                  </Link>
                </td>
              </tr>
            </tbody>
          </table>
          <pagination :data="posts.meta" />
        </div>
      </div>
    </div>
  </AuthenticatedLayout>
</template>
