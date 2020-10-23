<template>
  <div class="">
    <div class="max-w-screen-xl px-4 py-12 mx-auto sm:px-6 lg:px-8 lg:py-24">
      <div class="space-y-12 lg:grid lg:grid-cols-3 lg:gap-8 lg:space-y-0">
        <div class="space-y-5 sm:space-y-4">
          <h2
            class="text-3xl font-extrabold leading-9 tracking-tight sm:text-4xl"
          >
            {{ $prismic.asText(slice.primary.team_section) }}
          </h2>
          <prismic-rich-text
            :field="slice.primary.paragraph"
            class="text-xl leading-7 text-gray-500"
          />
        </div>
        <div class="lg:col-span-2">
          <ul
            class="space-y-12 sm:grid sm:grid-cols-2 sm:gap-x-6 sm:gap-y-12 sm:space-y-0 lg:gap-x-8"
          >
            <li
              v-for="member of slice.items"
              :key="member.first_and_lastname.text"
            >
              <div class="space-y-4">
                <div class="relative pb-2/3">
                  <prismic-image
                    :field="member.portrait"
                    class="absolute object-cover w-full h-full rounded-lg shadosw-lg"
                  />
                </div>
                <div class="space-y-1 text-lg font-medium leading-6">
                  <h4>{{ $prismic.asText(member.first_and_lastname) }}</h4>
                  <!-- <p class="text-indigo-600">Position</p> -->
                </div>
                <div class="space-y-3 text-lg leading-7">
                  <prismic-rich-text
                    :field="member.studies"
                    class="text-gray-500"
                  />
                  <prismic-rich-text
                    :field="member.address"
                    class="text-gray-500"
                  />
                </div>
                <ul class="space-y-2">
                  <li v-if="member.email">
                    <a
                      :href="`mailto:${member.email}`"
                      class="flex items-center text-gray-400 transition duration-150 ease-in-out hover:text-gray-500"
                    >
                      <span class="sr-only">Email</span>
                      <svg
                        class="w-5 h-5"
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                      >
                        <path
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="2"
                          d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"
                        />
                      </svg>
                      <span class="ml-2">{{ member.email }}</span>
                    </a>
                  </li>
                  <li v-if="member.phone">
                    <a
                      :href="`tel:${sanitizedPhoneNumber(member.phone)}`"
                      class="flex items-center text-gray-400 transition duration-150 ease-in-out hover:text-gray-500"
                    >
                      <span class="sr-only">Phone</span>
                      <svg
                        class="w-5 h-5"
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                      >
                        <path
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="2"
                          d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"
                        />
                      </svg>
                      <span class="ml-2">{{ member.phone }}</span>
                    </a>
                  </li>
                </ul>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  props: {
    slice: {
      type: Object,
      required: true
    }
  },

  methods: {
    sanitizedPhoneNumber (number) {
      return number.replace('+', '0').replace(/\s/g, '')
    }
  }
}
</script>
