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
            <a class="active" href="contact">Contact</a>
          </li>
          <li>
            <a href="prestations">Prestations</a>
          </li>
          <li class="hole"></li>
          <li>
            <a href="conseils">Conseils énergétiques</a>
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
  <main class="main-contact">

    <div class="container contact-first-block">
      <div class="divider"></div>
      <div class="heading">
        <h2>Equipe</h2>
      </div>
      <div class="row justify-content-between">
        <div class="col-md-4 img-wrapper-CK">
          <img class="img-fluid CK-img" src="img/CK.jpg" alt="Christian Kaelin">
        </div>
        <div class="col-md-5">
          <div class="infos">
            <ul class="p-5">
              <li>Christian <b>KAELIN</b></li><br>
              <li>Maîtrise fédérale CVC</li>
              <li>Diplômé de l'IFCAM</li>
              <li>MBA</li>
              <li>(Business School Lausanne)</li><br>
              <li>Verger de Meruz 10</li>
              <li>1804 Corsier-sur-Vevey</li>
              <li>Suisse</li><br>
              <li><a href="tel:041798948939">+41 79 894 89 39</a></li>
              <li><a href="mailto:chka@kach-conseils.ch">chka@kach-conseils.ch</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="mt-4 row justify-content-between">
        <div class="col-md-4 img-wrapper-CK">
          <img class="img-fluid CK-img" src="img/NK.jpg" alt="Nicolas Kaelin">
        </div>
        <div class="col-md-5">
          <div class="infos">
            <ul class="p-5">
              <li>Nicolas <b>KAELIN</b></li><br>
              <li>Apprenti</li>
              <li>Projeteur en technique du bâtiment</li>
              <li>Option Chauffage</li><br>
              <li><a href="mailto:nika@kach-conseils.ch">nika@kach-conseils.ch</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="mt-4 row justify-content-between">
        <div class="col-md-4 img-wrapper-CK">
          <img class="img-fluid CK-img" src="img/VK.jpg" alt="Valentin Kaelin">
        </div>
        <div class="col-md-5">
          <div class="infos">
            <ul class="p-5">
              <li>Valentin <b>KAELIN</b></li><br>
              <li>Etudiant</li>
              <li>Bachelor en développement logiciel</li>
              <li>HEIG-VD</li>
              <li>Responsable informatique</li><br>
              <li><a href="mailto:vaka@kach-conseils.ch">vaka@kach-conseils.ch</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="container" id="form">
      <div class="divider"></div>
      <div class="heading">
        <h2>CONTACTEZ NOUS</h2>
      </div>
      <div class="row justify-content-md-center">
        <div class="col-xl-12 col-xl-offset-1">
          <form id="contact-form" method="post" action="" role="form">
            <div class="row">
              <div class="col-lg-6">
                <label for="name">Prénom / Nom *</label>
                <input type="text" id="name" name="name" class="form-control" placeholder="Prénom / Nom" value="">
                <p class="comments"></p>
              </div>
              <div class="col-lg-6">
                <label for="phone">Téléphone *</label>
                <input type="tel" id="phone" name="phone" class="form-control" placeholder="Téléphone" value="">
                <p class="comments"></p>
              </div>
              <div class="col-lg-6">
                <label for="email">Email *</label>
                <input type="email" id="email" name="email" class="form-control" placeholder="Email" value="">
                <p class="comments"></p>
              </div>
              <div class="col-lg-6">
                <label for="object">Objet *</label></label>
                <input type="text" id="object" name="object" class="form-control" placeholder="Objet" value="">
                <p class="comments"></p>
              </div>
              <div class="col-lg-12">
                <label for="message">Message *</label>
                <textarea id="message" name="message" class="form-control" placeholder="Message" rows="4"></textarea>
                <p class="comments"></p>
              </div>
              <div class="col-lg-2">
                <input type="submit" class="btn btn-custom" value="Envoyer">
              </div>
            </div>
          </form>
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


  <!-- Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

  <!-- Custom JS -->
  <script src="js/contact.js"></script>
</body>

</html>