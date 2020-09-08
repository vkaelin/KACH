<template>
  <div v-if="document.data" class="py-8">
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
  async asyncData ({ $prismic, params, error, store }) {
    console.log('hi', store.state.lang)
    try {
      const document = await $prismic.api.getSingle('homepage', { lang: store.state.lang })
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
