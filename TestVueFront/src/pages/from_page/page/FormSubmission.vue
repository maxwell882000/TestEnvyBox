<script setup>
import {reactive} from "vue";
import Input from "@/components/inputs/Input.vue";
import Button from "@/components/buttons/Button.vue";
import {useUsersStore} from "@/pages/stores/useUsersStore";
import {storeToRefs} from "pinia";
import {pages} from "@/routers/pages";

const form = reactive({
  name: "",
  calling_name: ""
});
const store = useUsersStore();

function submit() {
  store.storeUser(form);
}

</script>

<template>
  <div class="w-full">
    <h1 class="text-lg pb-4">Form Submission</h1>
    <!--    <div class="form">-->
    <Input label="Name" name="name" v-model="form.name"/>
    <Input label="Calling name" name="calling_name" v-model="form.calling_name"/>
    <div class="flex items-center justify-between">
      <Button @click="submit">Submit</Button>
      <router-link :to="pages.USER_LIST">List</router-link>
    </div>
    <!--    </div>-->
  </div>
</template>


<style scoped>

</style>