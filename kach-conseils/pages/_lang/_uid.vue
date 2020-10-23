<template>
  <div>
    <!-- Slices block component -->
    <slices-block :slices="slices" />
  </div>
</template>

<script>
import SlicesBlock from '~/components/SlicesBlock.vue'
export default {
  name: 'Page',
  components: {
    SlicesBlock
  },

  async asyncData ({ $prismic, params, error }) {
    const lang = params.lang || $prismic.api.data.languages[0].id
    try {
      const document = await $prismic.api.getByUID('page', params.uid, { lang })
      if (document) {
        return {
          slices: document.data.body
        }
      } else {
        error({ statusCode: 404, message: 'Page not found' })
      }
    } catch (e) {
      console.log(e)
    }
  },

  head () {
    return {
      title: 'Prismic Nuxt.js Multi Page Website'
    }
  }
}
</script>
