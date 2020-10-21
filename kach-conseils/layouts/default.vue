<template>
  <div>
    <!-- Header -->
    <div class="relative overflow-hidden bg-white">
      <div class="hidden lg:block lg:absolute lg:inset-0">
        <svg
          class="absolute top-0 transform translate-x-64 -translate-y-8 left-1/2"
          width="640"
          height="784"
          fill="none"
          viewBox="0 0 640 784"
        >
          <defs>
            <pattern
              id="9ebea6f4-a1f5-4d96-8c4e-4c2abf658047"
              x="118"
              y="0"
              width="20"
              height="20"
              patternUnits="userSpaceOnUse"
            >
              <rect
                x="0"
                y="0"
                width="4"
                height="4"
                class="text-gray-200"
                fill="currentColor"
              />
            </pattern>
          </defs>
          <rect
            y="72"
            width="640"
            height="640"
            class="text-gray-50"
            fill="currentColor"
          />
          <rect
            x="118"
            width="404"
            height="784"
            fill="url(#9ebea6f4-a1f5-4d96-8c4e-4c2abf658047)"
          />
        </svg>
      </div>
      <div class="relative pt-6 pb-16 md:pb-20 lg:pb-24 xl:pb-32">
        <nav
          class="relative flex items-center justify-between max-w-screen-xl px-4 mx-auto sm:px-6"
        >
          <div class="flex items-center flex-1">
            <div class="flex items-center justify-between w-full md:w-auto">
              <prismic-link :field="homepageLink" aria-label="Home">
                <img
                  class="w-auto h-8 sm:h-12"
                  src="/images/logo-clean.jpg"
                  alt="Logo"
                />
              </prismic-link>
              <div class="flex items-center -mr-2 md:hidden">
                <button
                  @click="menuOpen = true"
                  id="main-menu"
                  type="button"
                  class="inline-flex items-center justify-center p-2 text-gray-400 transition duration-150 ease-in-out rounded-md hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500"
                  aria-label="Main menu"
                  aria-haspopup="true"
                >
                  <svg
                    class="w-6 h-6"
                    stroke="currentColor"
                    fill="none"
                    viewBox="0 0 24 24"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="M4 6h16M4 12h16M4 18h16"
                    />
                  </svg>
                </button>
              </div>
            </div>
            <div class="hidden space-x-10 md:block md:ml-10">
              <prismic-link
                v-for="({ link, text }, index) in layout.header_nav_items"
                :key="index"
                class="font-medium text-gray-500 transition duration-150 ease-in-out hover:text-gray-900"
                :field="link"
              >{{ text }}</prismic-link>
            </div>
          </div>
        </nav>

        <!-- Mobile menu -->
        <transition
          enter-active-class="transition duration-150 ease-out transform"
          enter-class="scale-95 opacity-0"
          enter-to-class="scale-100 opacity-100"
          leave-active-class="transition duration-100 ease-in transform"
          leave-class="scale-100 opacity-100"
          leave-to-class="scale-95 opacity-0"
        >
          <div
            v-show="menuOpen"
            class="absolute inset-x-0 top-0 p-2 transition origin-top-right transform md:hidden"
          >
            <div class="rounded-lg shadow-md">
              <div
                class="overflow-hidden bg-white rounded-lg shadow-xs"
                role="menu"
                aria-orientation="vertical"
                aria-labelledby="main-menu"
              >
                <div class="flex items-center justify-between px-5 pt-4">
                  <div>
                    <img
                      class="w-auto h-8 sm:h-12"
                      src="/images/logo-clean.jpg"
                      alt="Logo"
                    />
                  </div>
                  <div class="-mr-2">
                    <button
                      @click="menuOpen = false"
                      type="button"
                      class="inline-flex items-center justify-center p-2 text-gray-400 transition duration-150 ease-in-out rounded-md hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500"
                      aria-label="Close menu"
                    >
                      <svg
                        class="w-6 h-6"
                        stroke="currentColor"
                        fill="none"
                        viewBox="0 0 24 24"
                      >
                        <path
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="2"
                          d="M6 18L18 6M6 6l12 12"
                        />
                      </svg>
                    </button>
                  </div>
                </div>
                <div class="px-2 pt-2 pb-3 space-y-1">
                  <prismic-link
                    v-for="({ link, text }, index) in layout.header_nav_items"
                    :key="index"
                    class="block px-3 py-2 text-base font-medium text-gray-700 transition duration-150 ease-in-out rounded-md hover:text-gray-900 hover:bg-gray-50 focus:outline-none focus:text-gray-900 focus:bg-gray-50"
                    :field="link"
                  >{{ text }}</prismic-link>
                </div>
              </div>
            </div>
          </div>
        </transition>

        <!-- Page content -->
        <Nuxt />
      </div>
    </div>

    <!-- Footer -->
    <footer class="bg-gray-800">
      <div class="max-w-screen-xl px-4 py-12 mx-auto sm:px-6 lg:py-16 lg:px-8">
        <div class="pb-8 xl:grid xl:grid-cols-5 xl:gap-8">
          <div class="grid grid-cols-2 gap-8 xl:col-span-4">
            <div class="md:grid md:grid-cols-2 md:gap-8">
              <div>
                <prismic-link :field="homepageLink">
                  <img class="w-20 h-20" src="/images/logo.jpg" alt="Logo" />
                </prismic-link>
              </div>
              <div class="mt-12 md:mt-0">
                <h4
                  class="text-sm font-semibold leading-5 tracking-wider text-gray-400 uppercase"
                >
                  {{ layout.footer_nav_titles[0].text }}
                </h4>
                <ul class="mt-4 space-y-4">
                  <li
                    v-for="({ link, text }, index) in layout.header_nav_items"
                    :key="index"
                  >
                    <prismic-link
                      class="text-base leading-6 text-gray-300 hover:text-white"
                      :field="link"
                    >{{ text }}</prismic-link>
                  </li>
                </ul>
              </div>
            </div>
            <div class="md:grid md:grid-cols-2 md:gap-8"></div>
          </div>
          <div class="mt-12 xl:mt-0">
            <h4
              class="text-sm font-semibold leading-5 tracking-wider text-gray-400 uppercase"
            >
              {{ layout.footer_nav_titles[1].text }}
            </h4>
            <form class="mt-4 space-y-4 sm:max-w-xs">
              <fieldset class="w-full">
                <label for="language" class="sr-only">{{
                  layout.footer_nav_titles[1].text
                }}</label>
                <div class="space-y-2">
                  <nuxt-link
                    v-for="({ text, value }, index) in layout.lang_items"
                    :key="index"
                    @click.native="updateLayout(value)"
                    :to="{ name: routeName, params: { lang: value } }"
                    class="block w-full py-2 pl-3 pr-10 text-base leading-6 text-white border border-transparent rounded-md appearance-none sm:text-sm sm:leading-5"
                    :class="{
                      'bg-gray-900': currentLang === value,
                      'bg-gray-700 cursor-pointer focus:outline-none focus:shadow-outline-blue focus:border-blue-300':
                        currentLang !== value,
                    }"
                  >
                    <span>{{ text }}</span>
                  </nuxt-link>
                </div>
              </fieldset>
            </form>
          </div>
        </div>
        <div
          class="pt-8 mt-8 border-t border-gray-700 md:flex md:items-center md:justify-between"
        >
          <div class="flex space-x-6 md:order-2">
            <div class="text-gray-400">
              {{ layout.made_by }}
              <a
                class="transition duration-200 ease-in hover:text-gray-300"
                href="#"
              >Nicolas</a>
              &amp;
              <a
                class="transition duration-200 ease-in hover:text-gray-300"
                href="https://valentinkaelin.ch"
                target="_blank"
              >Valentin Kaelin</a>
            </div>
          </div>
          <p class="mt-8 text-base leading-6 text-gray-400 md:mt-0 md:order-1">
            &copy; {{ new Date().getFullYear() }} KACH
          </p>
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

  computed: {
    homepageLink () {
      if (!this.layout || !this.layout.header_nav_items) { return }

      return this.layout.header_nav_items[0].link
    },
    currentLang () {
      return this.$route.params.lang || this.$prismic.api.data.languages[0].id
    },
    routeName () {
      return this.$route.name === 'index' ? 'lang' : this.$route.name
    },
    ...mapState(['layout'])
  },

  watch: {
    '$route.path' () {
      this.menuOpen = false
    }
  },

  methods: {
    updateLayout (newLang) {
      this.$store.dispatch('getLayout', newLang)
    }
  },

  head () {
    return {
      titleTemplate: `%s | ${this.layout.site_name}`
    }
  }
}
</script>
