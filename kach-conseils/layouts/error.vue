<template>
  <div class="container mx-auto">
    <h1>Error</h1>
    <nuxt-link to="/">Return home</nuxt-link>
  </div>
</template>

<script>
export default {
  props: {
    error: {
      type: Object,
      default: () => ({})
    }
  }
}
</script>
