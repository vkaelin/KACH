<template>
  <section class="headline-with-button">
    <div>
      <prismic-rich-text :field="slice.primary.headline" />
      <prismic-rich-text :field="slice.primary.description" />
    </div>
    <div class="button">
      <prismic-image :field="slice.primary.button" />
    </div>
  </section>
</template>

<script>
export default {
  name: 'HeadlineWithButton',
  props: {
    slice: {
      type: Object,
      required: true
    }
  }
}
</script>
