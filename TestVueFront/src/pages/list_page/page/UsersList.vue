<script setup>
import {useUsersStore} from "@/pages/stores/useUsersStore";
import {storeToRefs} from "pinia";
import UserItem from "@/pages/list_page/components/UserItem.vue";
import {pages} from "@/routers/pages";

const store = useUsersStore();
const {users} = storeToRefs(store);
</script>

<template>
  <div>
    <h1 class="pb-4 text-lg">List of users</h1>
    <ul
        class="list_style">
      <user-item :user="item" :key="index"
                 :is-last="index === users.length - 1"
                 v-for="(item, index) in users"></user-item>
    </ul>
    <div class="mt-4">
      <router-link :to="pages.FORM">Back</router-link>
    </div>
  </div>


</template>


<style scoped>
.list_style {
  @apply w-48 text-sm font-medium text-gray-900 bg-white border
  border-gray-200 rounded-lg dark:bg-gray-700 dark:border-gray-600
  dark:text-white;
}
</style>