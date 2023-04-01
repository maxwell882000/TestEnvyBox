<script setup>
const props = defineProps({
  label: String,
  name: String,
  type: "text",
  modelValue: String,
})
defineEmits(['update:modelValue']);
</script>
<template>
  <div class="mb-4">
    <label class="label_style" :for="name">
      {{ label }}
    </label>
    <input
        @input="$emit('update:modelValue', $event.target.value)"
        class="input_style "
        :id="name" :type="type" :name="name" :placeholder="label">
  </div>
</template>


<style scoped>
.label_style {
  @apply block text-gray-700 text-sm font-bold mb-2;
}
.input_style {
  @apply shadow bg-[var(--vt-c-black-mute)]  appearance-none  rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none;
}
</style>