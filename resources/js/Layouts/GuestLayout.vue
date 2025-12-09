<template>
  <div>
    <FlashMessage />
    <slot />
  </div>
</template>

<script setup>
import FlashMessage from '@/Components/FlashMessage.vue';
</script>
