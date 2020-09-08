export default ({ store, route, redirect }) => {
  if (process.client && !route.params.lang) {
    return redirect(`/${store.state.lang}${route.fullPath}`)
  }
}
