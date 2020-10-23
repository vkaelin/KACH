export default function (doc) {
  const lang = doc.lang
  if (doc.type === 'homepage') {
    return `/${lang}/`
  }
  if (doc.type === 'prestations') {
    return `/${lang}/services`
  }
  if (doc.type === 'conseils') {
    return `/${lang}/energy-advice`
  }
  if (doc.type === 'solutions') {
    return `/${lang}/solutions`
  }
  if (doc.type === 'page') {
    return `/${doc.lang}/${doc.uid}`
  }

  return '/not-found'
}
