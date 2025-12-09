<template>
  <div class="min-h-screen bg-gradient-to-br from-blue-50 to-indigo-100">
    <nav class="bg-white shadow-lg">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
          <div class="flex items-center">
            <Logo />
            <span class="ml-2 text-xl font-bold text-gray-800">Visa Consultancy</span>
          </div>
          <div class="flex items-center space-x-4">
            <Link :href="route('admin.login')" class="text-gray-600 hover:text-gray-900">Admin Login</Link>
            <Link :href="route('candidate.login')" class="text-gray-600 hover:text-gray-900">Candidate Login</Link>
            <Link :href="route('candidate.register')" class="bg-indigo-600 text-white px-4 py-2 rounded-lg hover:bg-indigo-700">
              Register
            </Link>
          </div>
        </div>
      </div>
    </nav>

    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
      <div class="text-center">
        <h1 class="text-4xl font-bold text-gray-900 sm:text-5xl md:text-6xl">
          Welcome to Visa Consultancy
        </h1>
        <p class="mt-3 max-w-md mx-auto text-base text-gray-500 sm:text-lg md:mt-5 md:text-xl md:max-w-3xl">
          Your trusted partner for visa processing and international consultancy services.
        </p>
        <div class="mt-10 flex justify-center gap-4">
          <Link :href="route('candidate.register')" class="bg-indigo-600 text-white px-8 py-3 rounded-lg text-lg font-medium hover:bg-indigo-700">
            Get Started
          </Link>
          <Link :href="route('candidate.login')" class="bg-white text-indigo-600 px-8 py-3 rounded-lg text-lg font-medium border-2 border-indigo-600 hover:bg-indigo-50">
            Sign In
          </Link>
        </div>
      </div>

      <div class="mt-20 grid grid-cols-1 gap-8 sm:grid-cols-3">
        <div class="bg-white p-6 rounded-lg shadow-lg">
          <div class="text-indigo-600 text-3xl mb-4">🌍</div>
          <h3 class="text-xl font-semibold text-gray-900">Global Coverage</h3>
          <p class="mt-2 text-gray-600">We process visas for countries worldwide</p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-lg">
          <div class="text-indigo-600 text-3xl mb-4">⚡</div>
          <h3 class="text-xl font-semibold text-gray-900">Fast Processing</h3>
          <p class="mt-2 text-gray-600">Quick turnaround times guaranteed</p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-lg">
          <div class="text-indigo-600 text-3xl mb-4">✓</div>
          <h3 class="text-xl font-semibold text-gray-900">Expert Support</h3>
          <p class="mt-2 text-gray-600">Professional guidance every step</p>
        </div>
      </div>
    </main>
  </div>
</template>

<script setup>
import { Link } from '@inertiajs/vue3';
import Logo from '@/Components/Logo.vue';
</script>
