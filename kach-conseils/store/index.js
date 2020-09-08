export const state = () => ({
  layout: {},
  lang: null
})

export const mutations = {
  INIT_LANG (state, lang) {
    state.lang = lang || state.layout.lang_items[0].value
  },
  SWITCH_LANG (state, lang) {
    state.lang = lang
  },
  SET_LAYOUT_DATA (state, data) {
    state.layout = data
  }
}

export const actions = {
  async getLayout ({ commit, state }) {
    const lang = state.lang ? state.lang : 'fr-ch'
    const layout = await this.$prismic.api.getSingle('layout', { lang })

    commit('SET_LAYOUT_DATA', layout.data)
  },
  initLang ({ commit }, lang = null) {
    commit('INIT_LANG', lang)
  },
  async nuxtServerInit ({ dispatch }, { params }) {
    const lang = params.lang
    if (lang) {
      dispatch('initLang', lang)
      await dispatch('getLayout')
    } else {
      await dispatch('getLayout')
      dispatch('initLang')
    }
  },
  async switchLanguage ({ commit, dispatch }, newLang) {
    commit('SWITCH_LANG', newLang)
    await dispatch('getLayout')
  }
}
