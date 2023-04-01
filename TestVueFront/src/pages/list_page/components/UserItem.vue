<script setup>
defineProps(
    {
      user: Object,
      isLast: false
    }
)
</script>

<template>
  <li class="w-full px-4 py-2  border-gray-200 rounded-t-lg dark:border-gray-600" :class="{'border-b': !isLast}">
    {{ user.calling_name }} {{ user.name }}
  </li>
</template>


<style scoped>

</style>