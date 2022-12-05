<script setup>
import { Head, useForm } from '@inertiajs/inertia-vue3'
import GuestLayout from '@/Layouts/GuestLayout.vue'

defineProps({
  errors: Object,
})

const loginForm = useForm({
  email: '',
  password: '',
  remember: false,
})
</script>

<template>
  <Head>
    <title>Log in</title>
  </Head>
  <GuestLayout>
    <form @submit.prevent="loginForm.post(route('login.store'))">
      <div class="mt-4">
        <label for="email" class="mt-1 block text-sm font-medium text-gray-700">
          Email
        </label>
        <input
          type="text"
          name="email"
          v-model="loginForm.email"
          class="block w-full"
        />
        <span v-if="errors.email" class="text-red-600">
          {{ errors.email }}
        </span>
      </div>

      <div class="mt-4">
        <label
          for="password"
          class="mt-1 block text-sm font-medium text-gray-700"
        >
          Password
        </label>
        <input
          type="text"
          name="password"
          v-model="loginForm.password"
          class="block w-full"
        />
        <span v-if="errors.password" class="text-red-600">
          {{ errors.password }}
        </span>
      </div>

      <div class="mt-4 block">
        <label for="" class="flex items-center">
          <input type="checkbox" v-model="loginForm.remember" />
          <span class="ml-2 text-sm text-gray-600">Remember me</span>
        </label>
      </div>

      <div class="mt-4 flex items-center justify-end">
        <button
          type="submit"
          class="mt-2 mb-2 inline-flex justify-center rounded-md border-transparent bg-indigo-500 py-2 px-4 text-sm font-medium text-white shadow-sm shadow-indigo-200 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2"
          :disabled="loginForm.processing"
        >
          Login
        </button>
      </div>
    </form>
  </GuestLayout>
</template>
