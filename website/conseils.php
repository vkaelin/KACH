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
  <a href="#" data-activates="nav-mobile" class="toggle-mobile">
    <i class="fa fa-bars"></i>
  </a>
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
            <a class="active" href="conseils">Conseils énergétiques</a>
          </li>
          <li>
            <a href="solutions">Solutions</a>
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

  <main class="main-conseils">
    <div class="container pt-5 pb-5">
      <div class="divider"></div>
      <div class="heading">
        <h2>Conseils energetiques</h2>
      </div>
      <div class="text-center desc">
      </div>
      <div class="row advice-row">
        <div class="col-md-6 col-lg-4 advice">
          <img src="img/advice-1.png" alt="engrenage">
          <div class="advice-text">
            <p>Analyse du projet et proposition de solutions optimales pour la gestion énergétique de l’objet. </p>
            <p>Mise en place de concept visant l’autonomie énergétique. </p>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 advice">
          <img src="img/advice-2.jpg" alt="solutions">
          <div class="advice-text">
            <p>Mise en œuvre du tournant énergétique, remplacement des énergies fossiles, mazout et gaz par les énergies renouvelables. </p>
            <p>Stockage d’énergie journalière, mensuel et annuel. </p>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 advice">
          <img src="img/advice-3.jpg" alt="batiment">
          <div class="advice-text">
            <h3>Références</h3>
            <p>Malley Lumière Lausanne</p>
            <p>Place d'armes Bure JU</p>
            <p>Bâtiment industriel ELINCA, Renens</p>
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
        &copy; <?= date("Y"); ?> KACH - <span class="authors">Réalisé par <a href="#">Nicolas</a> et <a href="https://valentinkaelin.ch" target="_blank">Valentin Kaelin</a></span>
      </div>
    </div>
  </footer>

</body>

</html>