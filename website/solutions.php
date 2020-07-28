<!doctype html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="shortcut icon" type="image/png" href="img/favicon.ico"/>

  <!-- Extern CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">

  <!-- Custom CSS -->
  <link rel="stylesheet" type="text/css" href="css/app.css">

  <!-- Custom JS -->
  <script src="js/navigation.js"></script>

  <title>Contact - KACH conseils énergétiques</title>
</head>

<body>
  <button class="navbar-toggler collapsed toggle-mobile">
    <span class="icon-bar top-bar"></span>
    <span class="icon-bar middle-bar"></span>
    <span class="icon-bar bottom-bar"></span>
  </button>
  <header class="header">
    <div class="container">
      <a href="index" class="logo">
        <img src="img/logo.png" alt="logo" width="100" height="100">
      </a>
      <nav class="main-nav">
        <ul>
          <li>
            <a href="contact">Contact</a>
          </li>
          <li>
            <a href="prestations">Prestations</a>
          </li>
          <li class="hole"></li>
          <li>
            <a href="conseils">Conseils énergétiques</a>
          </li>
          <li>
            <a class="active" href="solutions">Solutions</a>
          </li>
        </ul>
      </nav>
    </div>
  </header>
  <nav class="side-nav activeWithJs">
    <div class="logo-wrapper">
      <a href="index">
        <img src="img/logo.png" alt="logo" id="side-nav__logo">
      </a>
    </div>
    <ul>
      <li>
        <a href="contact">Contact</a>
      </li>
      <li>
        <a href="prestations">Prestations</a>
      </li>
      <li>
        <a href="conseils">Conseils énergétiques</a>
      </li>
      <li>
        <a href="solutions">Solutions</a>
      </li>
    </ul>
  </nav>

  <main class="main-solutions">
    <div class="container pt-5 pb-5">
      <div class="divider"></div>
      <div class="heading">
        <h2>Solutions</h2>
      </div>
      <div class="text-center desc">
        L’objectif : l’autonomie énergétique.
      </div>

      <div class="row justify-content-center solution-container">
        <div class="col-5">
          <img class="img-fluid" src="img/PanneauSolaireToit.jpg" alt="solution-1">
        </div>
        <div class="col-5">
          <img class="img-fluid" src="img/Chaufferie.jpg" alt="solution-2">
        </div>
        <div class="col-10 solution-text">
          <ul>
            <li>Mise en œuvre du tournant énergétique, remplacement des énergies fossiles, mazout et gaz par les
              énergies
              renouvelables. </li>
            <li>Mise en place de concept visant l’autonomie énergétique.</li>
            <li>Utilisation de pompe à chaleur avec en priorité des sondes géothermiques. </li>
            <li>Utilisation des solutions photovoltaïques en toiture et en façade.</li>
            <li>Utilisation de batteries électriques afin d’assurer l’autonomie électrique.</li>
            <li>Utilisation de réservoir de stockage hydraulique saisonnier, accumulation en été de l’énergie solaire
              thermique et utilisation de celle-ci en hiver.</li>
            <li>Régénération du stockage saisonnier par l’utilisation de pompe à chaleur, pour chauffer en hiver et
              rafraichir en été.</li>
            <li>Mise en place de ventilation mécanique contrôlée, centralisée ou par appartement, afin d’assurer une
              parfaite atmosphère dans les locaux et un renouvellement d’air adéquat.</li>
            <li>Récupération et stockage d’eau de pluie pour utilisation dans les WC, les buanderies et pour
              l’arrosage.
            </li>
            <li>Intégration de l’ensemble dans le système domotique du bâtiment, mise à disposition des éléments sur
              smartphone.</li>
          </ul>
        </div>
        <div class="col-10">
          <img class="img-fluid no-max" src="img/systemeSolaire.jpg" alt="solution-3">
        </div>
        <div class="col-5">
          
        </div>

      </div>


    </div>
  </main>

  <footer>
    <div class="container">
      <div class="logo">
        <img src="img/logo-borderless.png" alt="logo" width="75" height="75">
      </div>
      <div class="copyright">
        &copy; <?= date("Y"); ?> KACH - <span class="authors">Réalisé par <a href="#">Nicolas</a> et <a href="https://valentinkaelin.ch"
            target="_blank">Valentin Kaelin</a></span>
      </div>
    </div>
  </footer>

</body>

</html>