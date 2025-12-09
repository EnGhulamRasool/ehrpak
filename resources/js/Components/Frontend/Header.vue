<template>
  <header class="bg-white shadow-md sticky top-0 z-50">
    <!-- Top Bar -->
    <div class="bg-[#013220] text-white">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div
          class="flex flex-col sm:flex-row justify-between items-center py-2 text-sm"
        >
          <div class="flex flex-wrap items-center gap-4 mb-2 sm:mb-0">
            <a
              href="tel:+61234567890"
              class="flex items-center hover:text-[#C5A247] transition"
            >
              <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                <path
                  d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"
                />
              </svg>
              +923215331274
            </a>

            <a
              href="mailto:ceo@ehrpakconsultant.com"
              class="flex items-center hover:text-[#C5A247] transition"
            >
              <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                <path
                  d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"
                />
                <path
                  d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"
                />
              </svg>
              ceo@ehrpakconsultant.com
            </a>
          </div>
          <div class="flex items-center">
            <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
              <path
                fill-rule="evenodd"
                d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z"
                clip-rule="evenodd"
              />
            </svg>
            executive block.gulberg green , Islamabad, Pakistan
          </div>
        </div>
      </div>
    </div>

    <!-- Main Navigation -->
    <nav class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex justify-between items-center h-20">
        <!-- Logo -->
        <div class="flex items-center">
          <div class="flex items-center space-x-3">
            <div
              class="w-12 h-12 bg-gradient-to-br from-[#013220] to-[#C5A247] rounded-lg flex items-center justify-center"
            >
              <svg
                class="w-8 h-8 text-white"
                fill="none"
                stroke="currentColor"
                viewBox="0 0 24 24"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"
                />
              </svg>
            </div>
            <div>
              <div class="text-2xl font-bold text-[#013220]">
                eHRPakConsultant
              </div>
              <div class="text-xs text-gray-600">Immigration Consulting</div>
            </div>
          </div>
        </div>

        <!-- Desktop Menu -->
        <div class="hidden lg:flex items-center space-x-8">
          <button
            @click="toggleDropdown('home')"
            class="text-gray-700 hover:text-[#C5A247] font-medium transition flex items-center"
          >
            HOME
            <svg class="w-4 h-4 ml-1" fill="currentColor" viewBox="0 0 20 20">
              <path
                fill-rule="evenodd"
                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                clip-rule="evenodd"
              />
            </svg>
          </button>
          <button
            @click="toggleDropdown('pages')"
            class="text-gray-700 hover:text-[#C5A247] font-medium transition flex items-center"
          >
            PAGES
            <svg class="w-4 h-4 ml-1" fill="currentColor" viewBox="0 0 20 20">
              <path
                fill-rule="evenodd"
                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                clip-rule="evenodd"
              />
            </svg>
          </button>
          <button
            @click="toggleDropdown('menu')"
            class="text-gray-700 hover:text-[#C5A247] font-medium transition flex items-center"
          >
            MEGA MENU
            <svg class="w-4 h-4 ml-1" fill="currentColor" viewBox="0 0 20 20">
              <path
                fill-rule="evenodd"
                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                clip-rule="evenodd"
              />
            </svg>
          </button>
          <a
            href="#"
            class="text-gray-700 hover:text-[#C5A247] font-medium transition"
            >BLOG</a
          >
          <a
            href="#"
            class="text-gray-700 hover:text-[#C5A247] font-medium transition"
            >FAQS</a
          >
        </div>

        <!-- Right Side Buttons -->
        <div class="hidden lg:flex items-center space-x-4">
          <button class="p-2 text-gray-700 hover:text-[#C5A247] transition">
            <svg
              class="w-5 h-5"
              fill="none"
              stroke="currentColor"
              viewBox="0 0 24 24"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"
              />
            </svg>
          </button>
          <Link
            :href="route('candidate.register')"
            class="bg-[#C5A247] text-white px-6 py-2.5 rounded-lg font-semibold hover:bg-[#B39140] transition transform hover:scale-105 shadow-md"
          >
            GET STARTED
          </Link>
        </div>

        <!-- Mobile Menu Button -->
        <button
          @click="mobileMenuOpen = !mobileMenuOpen"
          class="lg:hidden p-2 text-gray-700"
        >
          <svg
            class="w-6 h-6"
            fill="none"
            stroke="currentColor"
            viewBox="0 0 24 24"
          >
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              d="M4 6h16M4 12h16M4 18h16"
            />
          </svg>
        </button>
      </div>

      <!-- Mobile Menu -->
      <div v-if="mobileMenuOpen" class="lg:hidden py-4 border-t">
        <div class="space-y-4">
          <a
            href="#"
            class="block text-gray-700 hover:text-[#C5A247] font-medium"
            >HOME</a
          >
          <a
            href="#"
            class="block text-gray-700 hover:text-[#C5A247] font-medium"
            >PAGES</a
          >
          <a
            href="#"
            class="block text-gray-700 hover:text-[#C5A247] font-medium"
            >MEGA MENU</a
          >
          <a
            href="#"
            class="block text-gray-700 hover:text-[#C5A247] font-medium"
            >BLOG</a
          >
          <a
            href="#"
            class="block text-gray-700 hover:text-[#C5A247] font-medium"
            >FAQS</a
          >
          <Link
            :href="route('candidate.register')"
            class="block bg-[#C5A247] text-white px-6 py-2.5 rounded-lg font-semibold text-center"
          >
            GET STARTED
          </Link>
        </div>
      </div>
    </nav>
  </header>
</template>

<script setup>
import { ref } from "vue";
import { Link } from "@inertiajs/vue3";

const mobileMenuOpen = ref(false);

const toggleDropdown = (menu) => {
  console.log(`Toggle ${menu} dropdown`);
  // Add your dropdown logic here
};
</script>

<style scoped>
/* Add any additional styles if needed */
</style>
