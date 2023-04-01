<script setup>

</script>

<template>
  <header>
    <img alt="Vue logo" class="logo" src="./assets/logo.svg" width="125" height="125"/>
    <div class="wrapper">
    </div>
  </header>
  <main>
    <router-view></router-view>
  </main>
</template>

<style scoped>
main {
  @apply bg-[var(--vt-c-black-soft)] shadow-md rounded px-8 pt-6 pb-8 mb-4;
}

header {
  line-height: 1.5;
}

.logo {
  display: block;
  margin: 0 auto 2rem;
}

@media (min-width: 1024px) {
  header {
    display: flex;
    place-items: center;
    padding-right: calc(var(--section-gap) / 2);
  }

  .logo {
    margin: 0 2rem 0 0;
  }

  header .wrapper {
    display: flex;
    place-items: flex-start;
    flex-wrap: wrap;
  }
}
</style>
