<script setup>


</script>

<template>
  <button
      class="button_style"
      type="button">
    <slot></slot>
  </button>
</template>


<style scoped>
 .button_style {
   @apply bg-[var(--back-green)] hover:bg-[var(--back-green-hover)] text-white font-bold py-2 px-4 rounded focus:outline-none;
 }
</style>