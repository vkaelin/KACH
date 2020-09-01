export const state = () => ({
  layout: {}
})

export const mutations = {
  SET_LAYOUT_DATA (state, data) {
    state.layout = data
  }
}

export const actions = {
  async nuxtServerInit ({ commit }, { $prismic }) {
    console.log('init server')
    const layout = await $prismic.api.getSingle('layout')
    console.log(layout)

    commit('SET_LAYOUT_DATA', layout.data)
  }
}
