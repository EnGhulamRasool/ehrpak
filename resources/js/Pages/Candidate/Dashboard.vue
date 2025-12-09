<template>
  <CandidateLayout>
    <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
          <div class="p-6 bg-white border-b border-gray-200">
            <h1 class="text-3xl font-bold text-gray-900 mb-6">Candidate Dashboard</h1>

            <div class="bg-indigo-50 border border-indigo-200 rounded-lg p-6 mb-6">
              <h2 class="text-xl font-semibold text-indigo-900 mb-2">Welcome back, {{ $page.props.auth.user.name }}!</h2>
              <p class="text-indigo-700">Manage your visa applications and track their progress here.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-8">
              <div class="bg-blue-50 p-6 rounded-lg border border-blue-200">
                <h3 class="text-lg font-semibold text-gray-900 mb-2">My Applications</h3>
                <p class="text-3xl font-bold text-blue-600">0</p>
                <p class="text-sm text-gray-600 mt-2">Total applications submitted</p>
              </div>

              <div class="bg-green-50 p-6 rounded-lg border border-green-200">
                <h3 class="text-lg font-semibold text-gray-900 mb-2">Approved</h3>
                <p class="text-3xl font-bold text-green-600">0</p>
                <p class="text-sm text-gray-600 mt-2">Applications approved</p>
              </div>
            </div>

            <div class="mt-8">
              <h2 class="text-xl font-semibold text-gray-900 mb-4">Quick Actions</h2>
              <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <button class="bg-indigo-600 text-white px-4 py-3 rounded-lg hover:bg-indigo-700 text-left">
                  Apply for New Visa
                </button>
                <button class="bg-gray-600 text-white px-4 py-3 rounded-lg hover:bg-gray-700 text-left">
                  View Application Status
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </CandidateLayout>
</template>

<script setup>
import CandidateLayout from '@/Layouts/CandidateLayout.vue';
</script>
