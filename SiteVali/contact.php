<!doctype html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

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
      <a href="index.html" class="logo">
        <img src="img/logo.png" alt="logo" width="100" height="100">
      </a>
      <nav class="main-nav">
        <ul>
          <li>
            <a href="contact.html">Contact</a>
          </li>
          <li>
            <a href="#">Prestations</a>
          </li>
          <li class="hole"></li>
          <li>
            <a href="#">Conseils énergétiques</a>
          </li>
          <li>
            <a href="#">Solutions</a>
          </li>
        </ul>
      </nav>
    </div>
  </header>
  <nav class="side-nav activeWithJs">
    <div class="logo-wrapper">
      <a href="index.html">
        <img src="img/logo.png" alt="logo" id="side-nav__logo">
      </a>
    </div>
    <ul>
      <li>
        <a href="contact.html">Contact</a>
      </li>
      <li>
        <a href="#">Prestations</a>
      </li>
      <li>
        <a href="#">Conseils énergétiques</a>
      </li>
      <li>
        <a href="#">Solutions</a>
      </li>
    </ul>
  </nav>

  <div class="container" id="form">
    <div class="divider"></div>
    <div class="heading">
        <h2>Contactez-moi</h2>
    </div>
    <div class="row justify-content-md-center">
        <div class="col-xl-10 col-xl-offset-1">
            <form id="contact-form" method="post" action="" role="form">
                <div class="row">
                    <div class="col-lg-6">
                        <label for="firstname">Prénom<span class="blue"> *</span></label>
                        <input type="text" id="firstname" name="firstname" class="form-control" placeholder="Votre prénom" value="">
                        <p class="comments"></p>
                    </div>
                    <div class="col-lg-6">
                        <label for="name">Nom<span class="blue"> *</span></label>
                        <input type="text" id="name" name="name" class="form-control" placeholder="Votre nom" value="">
                        <p class="comments"></p>
                    </div>
                    <div class="col-lg-6">
                        <label for="email">Email<span class="blue"> *</span></label>
                        <input type="email" id="email" name="email" class="form-control" placeholder="Votre email" value="">
                        <p class="comments"></p>
                    </div>
                    <div class="col-lg-6">
                        <label for="phone">Téléphone</label>
                        <input type="tel" id="phone" name="phone" class="form-control" placeholder="Votre téléphone" value="">
                        <p class="comments"></p>
                    </div>
                    <div class="col-lg-12">
                        <label for="message">Message<span class="blue"> *</span></label>
                        <textarea id="message" name="message" class="form-control" placeholder="Votre message" rows="4"></textarea>
                        <p class="comments"></p>
                    </div>
                    <div class="col-lg-12">
                        <p class="blue">* Ces informations sont requises</p>
                    </div>
                    <div class="col-lg-12">
                        <input type="submit" class="button1" value="Envoyer">
                    </div>
                </div>
            </form>
        </div>
    </div>

  <!-- Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</body>

</html>