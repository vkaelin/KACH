export const state = () => ({
  layout: {}
})

export const mutations = {
  SET_LAYOUT_DATA (state, data) {
    state.layout = data
  }
}

export const actions = {
  async getLayout ({ commit }, paramsLang) {
    const langExists = paramsLang && this.$prismic.api.data.languages.some(l => l.id === paramsLang)
    const lang = langExists ? paramsLang : this.$prismic.api.data.languages[0].id

    const layout = await this.$prismic.api.getSingle('layout', { lang })

    commit('SET_LAYOUT_DATA', layout.data)
  },
  async nuxtServerInit ({ dispatch }, { error, params }) {
    try {
      await dispatch('getLayout', params.lang)
    } catch (e) {
      error({ statusCode: 404, message: 'Page not found' })
    }
  }
}
