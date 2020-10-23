<template>
  <main>
    <div v-for="(slice, index) in slices" :key="'slice-' + index">
      <template v-if="slice.slice_type === 'hero_with_button'">
        <hero-with-button :slice="slice" />
      </template>
      <template v-else-if="slice.slice_type === 'team'">
        <team :slice="slice" />
      </template>
      <!-- <template v-else-if="slice.slice_type === 'full_width_image'">
        <full-width-image :slice="slice" />
      </template>
      <template v-else-if="slice.slice_type === 'info_with_image'">
        <info-with-image :slice="slice" />
      </template>
      <template v-else-if="slice.slice_type === 'text_info'">
        <text-info :slice="slice" />
      </template>
      <template v-else-if="slice.slice_type === 'email_signup'">
        <email-signup :slice="slice" />
      </template> -->
    </div>
  </main>
</template>

<script>
const HeroWithButton = () => import('./slices/HeroWithButton.vue')
const Team = () => import('./slices/Team.vue')
// const FullWidthImage = () => import('./slices/FullWidthImage.vue')
// const InfoWithImage = () => import('./slices/InfoWithImage.vue')
// const TextInfo = () => import('./slices/TextInfo.vue')
// const EmailSignup = () => import('./slices/EmailSignup.vue')

export default {
  components: {
    HeroWithButton,
    Team
    // FullWidthImage,
    // InfoWithImage,
    // TextInfo,
    // EmailSignup
  },

  props: {
    slices: {
      type: Array,
      required: true
    }
  }
}
</script>
