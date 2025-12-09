<template>
  <div class="inline-flex items-center justify-center">
    <svg
      :class="className"
      viewBox="0 0 100 100"
      fill="none"
      xmlns="http://www.w3.org/2000/svg"
    >
      <circle cx="50" cy="50" r="45" fill="#4F46E5" />
      <path
        d="M30 40 L50 25 L70 40 L70 70 L30 70 Z"
        fill="white"
      />
      <rect x="42" y="50" width="16" height="20" fill="#4F46E5" />
      <circle cx="50" cy="35" r="3" fill="#4F46E5" />
    </svg>
  </div>
</template>

<script setup>
defineProps({
  className: {
    type: String,
    default: 'w-10 h-10',
  },
});
</script>
