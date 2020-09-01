<template>
  <div>
    <div class="container mx-auto">
      <h1>Kach-conseils</h1>
      <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vel tenetur omnis architecto fuga! Fuga doloremque deserunt officia inventore possimus ea!</p>
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
