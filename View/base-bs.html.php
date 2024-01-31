<!DOCTYPE html>
<html lang="en">

<head>

      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">

      <link rel="stylesheet" href="./Public/bootstrap-5.3.2-dist/css/bootstrap.css">
      <link rel="stylesheet" href="./Public/fontawesome-free-6.5.0-web/css/all.css">
      <link rel="stylesheet" href="./Public/css/style.css">

      <script src="./Public/bootstrap-5.3.2-dist/js/bootstrap.bundle.js" defer></script>
      <script src="./Public/js/myScript.js" defer></script>

      <title>Document</title>

</head>

<body>
      <div class="container-fluid">
            <nav class="navbar navbar-expand-md bg-light">
                  <a class="navbar-brand" href="home"><img src="Public/Image/globale/logo.jpg"
                              alt="Logo de l'entreprise"></a>

                  <div class="collapse navbar-collapse justify-content-between" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                              <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="home">Home</a>
                              </li>
                              <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="miels" role="button"
                                          data-bs-toggle="dropdown" aria-expanded="false">
                                          Nos miels
                                    </a>
                                    <ul class="dropdown-menu">
                                          <li><a class="dropdown-item" href="#">Tout les miels</a></li>
                                          <li>
                                                <hr class="dropdown-divider">
                                          </li>
                                          <li><a class="dropdown-item" href="#">Printemps</a></li>
                                          <li><a class="dropdown-item" href="#">Acacia</a></li>
                                          <li><a class="dropdown-item" href="#">Forêt</a></li>
                                          <li><a class="dropdown-item" href="#">Eté</a></li>
                                          <li><a class="dropdown-item" href="#">Tournesol</a></li>
                                    </ul>
                              </li>
                              <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="produits" role="button"
                                          data-bs-toggle="dropdown" aria-expanded="false">
                                          Autres produit de la ruche
                                    </a>
                                    <ul class="dropdown-menu">
                                          <li><a class="dropdown-item" href="#">Tout nos produits</a></li>
                                          <li>
                                                <hr class="dropdown-divider">
                                          </li>
                                          <li><a class="dropdown-item" href="#">Pastilles propolis miel</a></li>
                                          <li><a class="dropdown-item" href="#">Pains d'épices</a></li>
                                          <li><a class="dropdown-item" href="#">Gelée royale</a></li>
                                          <li><a class="dropdown-item" href="#">Capsule de cire</a></li>
                                    </ul>
                              </li>
                              <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="formulaire">Nous contacter</a>
                              </li>
                        </ul>

                        <?php if($_SESSION['username']!='user'): ?>

                        <a href="" class=" dropdown-toggle text-dark" data-bs-toggle="dropdown"><i
                                    class="fa fa-user fa-2x"></i><?=$_SESSION['username']?></a>
                        <ul class="dropdown-menu w100 bg_blue">
                              <li class="nav-item w100 p-2"><a href="" class="nav-link">Compte</a></li>
                              <li class="nav-item w100 p-2"><a href="user&action=logout"
                                          class="nav-link">Deconnexion</a></li>
                        </ul>

                        <?php else :?>

                              <a href="" class=" dropdown-toggle text-dark" data-bs-toggle="dropdown"><i
                                                class="fa fa-user fa-2x"></i>Visiteur</a>
                                    <ul class="dropdown-menu w100 bg_blue">
                                          <li class="nav-item w100 p-2"><a href="user&action=login" class="nav-link">Se connecter</a></li>
                                          <li class="nav-item w100 p-2"><a href="" class="nav-link">S'inscrire</a></li>
                                    </ul>
                                    <?php endif; ?>     
                  </div>
            </nav>
            <!-- <div>
                  <img id="bandeau" src="Public/Image/globale/bg-photo.jpg" alt="bandeau">
            </div> -->

            <footer class="my-2">

            </footer>

      </div>

</body>

</html>