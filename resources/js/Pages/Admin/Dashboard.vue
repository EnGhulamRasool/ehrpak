<template>
  <AdminLayout>
    <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
          <div class="p-6 bg-white border-b border-gray-200">
            <h1 class="text-3xl font-bold text-gray-900 mb-6">Admin Dashboard</h1>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-8">
              <div class="bg-blue-50 p-6 rounded-lg border border-blue-200">
                <div class="text-blue-600 text-sm font-semibold uppercase mb-2">Total Candidates</div>
                <div class="text-3xl font-bold text-gray-900">{{ stats.total_candidates }}</div>
              </div>

              <div class="bg-green-50 p-6 rounded-lg border border-green-200">
                <div class="text-green-600 text-sm font-semibold uppercase mb-2">Active Candidates</div>
                <div class="text-3xl font-bold text-gray-900">{{ stats.active_candidates }}</div>
              </div>

              <div class="bg-red-50 p-6 rounded-lg border border-red-200">
                <div class="text-red-600 text-sm font-semibold uppercase mb-2">Inactive Candidates</div>
                <div class="text-3xl font-bold text-gray-900">{{ stats.inactive_candidates }}</div>
              </div>
            </div>

            <div class="mt-8">
              <h2 class="text-xl font-semibold text-gray-900 mb-4">Quick Actions</h2>
              <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <button class="bg-indigo-600 text-white px-4 py-3 rounded-lg hover:bg-indigo-700 text-left">
                  View All Candidates
                </button>
                <button class="bg-green-600 text-white px-4 py-3 rounded-lg hover:bg-green-700 text-left">
                  Add New Visa Application
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </AdminLayout>
</template>

<script setup>
import AdminLayout from '@/Layouts/AdminLayout.vue';

defineProps({
  stats: Object,
});
</script>
