<template>
  <div v-if="document.data">
    <main
      class="max-w-screen-xl px-4 mx-auto mt-8 sm:mt-12 sm:px-6 md:mt-20 xl:mt-24"
    >
      <div class="lg:grid lg:grid-cols-12 lg:gap-8">
        <div
          class="sm:text-center md:max-w-2xl md:mx-auto lg:col-span-6 lg:text-left"
        >
          <!-- <div
            class="text-sm font-semibold tracking-wide text-gray-500 uppercase sm:text-base lg:text-sm xl:text-base"
          >
            Coming soon
          </div> -->
          <h2
            class="mt-1 text-4xl font-extrabold leading-10 tracking-tight text-gray-900 sm:leading-none sm:text-6xl lg:text-5xl xl:text-6xl"
          >
            {{ document.data.title[0].text }}
          </h2>
          <prismic-rich-text
            :field="document.data.desc"
            class="mt-3 text-base text-gray-500 sm:mt-5 sm:text-xl lg:text-lg xl:text-xl"
          />
          <div
            class="mt-5 sm:max-w-lg sm:mx-auto sm:text-center lg:text-left lg:mx-0"
          >
            <prismic-link
              :field="document.data.button[0].link"
              class="w-full px-6 py-3 mt-3 text-base font-medium leading-6 text-white transition duration-150 ease-in-out bg-gray-800 border border-transparent rounded-md shadow-sm hover:bg-gray-700 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray active:bg-gray-900 sm:mt-0 sm:flex-shrink-0 sm:inline-flex sm:items-center sm:w-auto"
            >
              {{ document.data.button[0].text[0].text }}
            </prismic-link>
          </div>
        </div>
        <div
          class="relative mt-12 sm:max-w-lg sm:mx-auto lg:mt-0 lg:max-w-none lg:mx-0 lg:col-span-6 lg:flex lg:items-center"
        >
          <svg
            class="absolute top-0 origin-top transform scale-75 -translate-x-1/2 -translate-y-8 left-1/2 sm:scale-100 lg:hidden"
            width="640"
            height="784"
            fill="none"
            viewBox="0 0 640 784"
          >
            <defs>
              <pattern
                id="4f4f415c-a0e9-44c2-9601-6ded5a34a13e"
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
              fill="url(#4f4f415c-a0e9-44c2-9601-6ded5a34a13e)"
            />
          </svg>
          <div class="relative w-full mx-auto rounded-lg shadow-lg lg:max-w-md">
            <button
              type="button"
              class="relative block w-full overflow-hidden rounded-lg focus:outline-none focus:shadow-outline"
            >
              <img
                class="w-full"
                :src="document.data.img.url"
                :alt="document.data.img.alt"
              />
            </button>
          </div>
        </div>
      </div>
    </main>
  </div>
</template>

<script>
export default {
  async asyncData ({ $prismic, params, error, store }) {
    const lang = params.lang ? params.lang : $prismic.api.data.languages[0].id
    try {
      const document = await $prismic.api.getSingle('homepage', { lang })
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
