export default function (doc) {
  if (doc.type === 'homepage') {
    return '/'
  }
  if (doc.type === 'prestations') {
    return '/prestations'
  }
  if (doc.type === 'conseils') {
    return '/conseils-energetiques'
  }
  if (doc.type === 'solutions') {
    return '/solutions'
  }
  if (doc.type === 'contact') {
    return '/contact'
  }
  return '/'
}
