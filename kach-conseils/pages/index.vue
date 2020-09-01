<template>
  <div v-if="document.data">
    <div class="container mx-auto">
      <h1 class="text-2xl font-semibold">
        {{ document.data.title[0].text }}
      </h1>
      <prismic-rich-text :field="document.data.desc" class="mt-2" />
    </div>
  </div>
</template>

<script>
export default {
  async asyncData ({ $prismic, params, error }) {
    try {
      const document = await $prismic.api.getByUID('homepage', 'homepage-fr')
      if (document) {
        return { document }
      } else {
        error({ statusCode: 404, message: 'Page not found' })
      }
    } catch (e) {
      console.log(e)
    }
  }
}
</script>
