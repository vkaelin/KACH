<template>
  <div></div>
</template>

<script>
export default {
  beforeMount () {
    this.$router.push({ name: 'lang', params: { lang: this.$store.state.lang } })
  }
}
</script>
