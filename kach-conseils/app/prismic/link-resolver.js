export default function (doc) {
  if (doc.type === 'homepage') {
    return '/'
  }
  if (doc.type === 'prestations') {
    return '/services'
  }
  if (doc.type === 'conseils') {
    return '/energy-advice'
  }
  if (doc.type === 'solutions') {
    return '/solutions'
  }
  if (doc.type === 'contact') {
    return '/contact'
  }
  return '/'
}
