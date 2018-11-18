// On attend que le contenu HTML de la page soit chargé avant de lancer ce script
document.addEventListener("DOMContentLoaded", function() {
  /*======================
          Header
  ======================*/
  // Activer le header et la side-nav si le JS est activé
  var headerWithJS = document.querySelector('.header');
  var sideNavWithJS = document.querySelector('.side-nav.activeWithJs');
  headerWithJS.style.display = 'flex';
  sideNavWithJS.style.display = 'block';

  // Eléments de la Navbar 
  var toggleHeader = document.querySelector('.toggle-mobile');
  var sideNav = document.querySelector('.side-nav');

  // On translate/fait apparaître la side-nav lors du clique sur l'élément toggleHeader
  toggleHeader.addEventListener('click', function() {
    if (sideNav.style.transform === 'translateX(-100%)' || sideNav.style.transform === '') { // Si la side-nav est fermée, on l'ouvre
      sideNav.style.transform = 'translateX(0px)';
    } else {  // Si la side-nav est ouverte, on la ferme
      closeSideNav();
    }
  });

  /**
   * Permet de fermer la side-nav, en lui faisant une translation et en mettant un display none à l'overlay
   */
  function closeSideNav() {
    sideNav.style.transform = 'translateX(-100%)';

  }

});