<template>
  <GuestLayout>
    <div class="min-h-screen flex items-center justify-center bg-gray-100 py-12 px-4 sm:px-6 lg:px-8">
      <div class="max-w-md w-full space-y-8 bg-white p-8 rounded-lg shadow-lg">
        <div>
          <div class="flex justify-center">
            <Logo class="w-16 h-16" />
          </div>
          <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">
            Candidate Login
          </h2>
          <p class="mt-2 text-center text-sm text-gray-600">
            Sign in to your account
          </p>
        </div>

        <form class="mt-8 space-y-6" @submit.prevent="submit">
          <div class="rounded-md shadow-sm -space-y-px">
            <div>
              <label for="email" class="sr-only">Email address</label>
              <input
                id="email"
                v-model="form.email"
                type="email"
                required
                class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm"
                placeholder="Email address"
              />
            </div>
            <div>
              <label for="password" class="sr-only">Password</label>
              <input
                id="password"
                v-model="form.password"
                type="password"
                required
                class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-b-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm"
                placeholder="Password"
              />
            </div>
          </div>

          <div v-if="form.errors.email" class="text-red-600 text-sm">
            {{ form.errors.email }}
          </div>

          <div>
            <button
              type="submit"
              :disabled="form.processing"
              class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 disabled:opacity-50"
            >
              <span v-if="!form.processing">Sign in</span>
              <span v-else>Signing in...</span>
            </button>
          </div>

          <div class="flex items-center justify-between">
            <Link :href="route('candidate.register')" class="text-sm text-indigo-600 hover:text-indigo-500">
              Don't have an account? Register
            </Link>
            <Link :href="route('home')" class="text-sm text-indigo-600 hover:text-indigo-500">
              Back to Home
            </Link>
          </div>
        </form>
      </div>
    </div>
  </GuestLayout>
</template>

<script setup>
import { useForm, Link } from '@inertiajs/vue3';
import GuestLayout from '@/Layouts/GuestLayout.vue';
import Logo from '@/Components/Logo.vue';

const form = useForm({
  email: '',
  password: '',
});

const submit = () => {
  form.post(route('candidate.login'), {
    onFinish: () => form.reset('password'),
  });
};
</script>
