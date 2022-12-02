<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import {useForm} from "@inertiajs/inertia-vue3";

const form = useForm({
  title: '',
  content: '',
});
const submit = () => {
  form.post(route('posts.store'), {
    preserveScroll: true,
    onSuccess: () => {
      form.reset('title', 'body');
    },
  });
};
defineProps({
  errors: {
    type: Object,
    default: () => ({}),
  },
});

</script>
<template>
  <Head title="Post Create" />

  <AuthenticatedLayout>
    <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white sm:rounded-lg shadow-sm">
          <form method="post" @submit.prevent="submit">
            <div class="py-8 px-6 ">
              <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700" for="title">Title</label>
                <input id="title" v-model="form.title" autocomplete="title"
                       class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                       name="title"
                       type="text"/>
                <span v-if="errors.title" class="text-red-600 text-sm">{{ errors.title }}</span>
              </div>
              <div>
                <label class="block text-sm font-medium text-gray-700" for="content">Content</label>
                <div class="mt-1">
                <textarea id="content" v-model="form.content"
                          class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                          name="content"
                          placeholder="you@example.com"
                          rows="3"/>
                </div>
                <span v-if="errors.content" class="text-red-600 text-sm">{{ errors.content }}</span>
              </div>
            </div>
            <div class="bg-gray-50 px-4 py-3 text-right sm:px-6">
              <button :disabled="form.processing" class="inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2"
                      type="submit"
              >
                Save
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </AuthenticatedLayout>
</template>