<template>
  <div class="flex flex-col justify-between min-h-screen font-sans antialiased bg-gray-200">
    <div>
      <header class="bg-white">
        <div class="flex justify-center py-2">
          <img class="w-24 h-24" src="/images/logo.jpg" alt="Logo">
        </div>
        <nav class="flex items-center justify-center">
          <ul class="py-3 space-x-3">
            <prismic-link
              v-for="({ link, text }, index) in layout.header_nav_items"
              :key="index"
              class="text-sm text-gray-800 uppercase hover:text-black"
              :field="link"
            >
              {{ text }}
            </prismic-link>
          </ul>
        </nav>
      </header>
      <Nuxt />
    </div>
    <footer class="text-white bg-gray-900">
      <div class="container py-8 mx-auto">
        <div class="flex items-center justify-between">
          <img class="w-12 h-12" src="/images/logo.jpg" alt="Logo">
          <nav>
            <prismic-link
              v-for="({ link, text }, index) in layout.footer_nav_items"
              :key="index"
              class="footer-nav-link"
              :field="link"
            >
              {{ text }}
            </prismic-link>
          </nav>
        </div>
      </div>
      <div class="">
        <!-- bg-black -->
        <div class="container flex items-center justify-between py-2 mx-auto">
          <div>Copyright &copy; 2020 KACH</div>
          <div>
            Réalisé par
            <a href="#">Nicolas</a> et
            <a href="https://valentinkaelin.ch" target="_blank">Valentin Kaelin</a>
          </div>
        </div>
      </div>
    </footer>
  </div>
</template>

<script>
import { mapState } from 'vuex'
export default {
  data () {
    return {
      menuOpen: false
    }
  },
  computed: mapState(['layout']),
  watch: {
    '$route.path' () {
      this.menuOpen = false
    }
  },
  methods: {
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
