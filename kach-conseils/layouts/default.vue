<template>
  <div class="flex flex-col justify-between min-h-screen font-sans antialiased bg-gray-200">
    <div>
      <header class="bg-white">
        <div class="flex justify-center py-2">
          <prismic-link :field="layout.header_nav_items[0].link">
            <img class="w-24 h-24" src="/images/logo.jpg" alt="Logo" />
          </prismic-link>
        </div>
        <nav class="flex items-center justify-center">
          <ul class="py-3 space-x-3">
            <prismic-link
              v-for="({ link, text }, index) in layout.header_nav_items"
              :key="index"
              class="text-sm font-medium tracking-wider text-gray-700 uppercase hover:text-gray-900"
              :field="link"
            >{{ text }}</prismic-link>
          </ul>
        </nav>
      </header>
      <Nuxt />
    </div>
    <footer class="text-gray-100 bg-gray-900">
      <div class="container py-8 mx-auto">
        <div class="flex items-center justify-between">
          <prismic-link :field="layout.header_nav_items[0].link">
            <img class="w-12 h-12" src="/images/logo.jpg" alt="Logo" />
          </prismic-link>
          <!-- <nav>
            <prismic-link
              v-for="({ link, text }, index) in layout.footer_nav_items"
              :key="index"
              class="footer-nav-link"
              :field="link"
            >
              {{ text }}
            </prismic-link>
          </nav>-->
          <div class="flex space-x-2">
            <div v-for="({ text, value }, index) in layout.lang_items" :key="index">
              <button
                @click="switchLang(value)"
                :class="{'text-blue-500': lang === value}"
                class="hover:text-blue-500 focus:outline-none"
              >{{ text }}</button>
              <span v-if="index < layout.lang_items.length - 1">/</span>
            </div>
          </div>
        </div>
      </div>
      <div class="pb-4">
        <div class="container flex items-center justify-between py-2 mx-auto">
          <div class="text-base">Copyright &copy; {{ new Date().getFullYear() }} KACH</div>
          <div class="text-sm">
            Réalisé par
            <a
              class="pb-1 transition duration-200 ease-in-out border-b border-transparent hover:text-white hover:border-white"
              href="#"
            >Nicolas</a> et
            <a
              class="pb-1 transition duration-200 ease-in-out border-b border-transparent hover:text-white hover:border-white"
              href="https://valentinkaelin.ch"
              target="_blank"
            >Valentin Kaelin</a>
          </div>
        </div>
      </div>
    </footer>
  </div>
</template>

<script>
import { mapState } from 'vuex'
export default {
  middleware: 'lang',

  data () {
    return {
      menuOpen: false
    }
  },

  computed: mapState(['lang', 'layout']),

  watch: {
    '$route.path' () {
      this.menuOpen = false
    }
  },

  methods: {
    switchLang (newLang) {
      this.$store.dispatch('switchLanguage', newLang)
      this.$router.push({ name: this.$route.name, params: { lang: newLang } })
    },
    toggleMenu () {
      this.menuOpen = !this.menuOpen
    }
  },

  head () {
    return {
      titleTemplate: `%s | ${this.layout.site_name}`
    }
  }
}
</script>
