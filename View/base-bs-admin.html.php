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
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                              <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="home">Home</a>
                              </li>
                              <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="user">User</a>
                              </li>
                              <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="civilite">Civilite</a>
                              </li>
                              <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="article">Article</a>
                              </li>
                              <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="prixStock">Stock et prix</a>
                              </li>
                        </ul>

                        <a href="" class=" dropdown-toggle text-dark" data-bs-toggle="dropdown"><i
                                    class="fa fa-user fa-2x"></i><?=$_SESSION['username']?></a>
                        <ul class="dropdown-menu w100 bg_blue">
                              <li class="nav-item w100 p-5"><a href="" class="nav-link">Compte</a></li>
                              <li class="nav-item w100 p-2"><a href="user&action=logout"
                                          class="nav-link">Deconnexion</a></li>
                        </ul>
                  </div>
            </nav>
            <!-- <div>
                  <img id="bandeau" src="Public/Image/globale/bg-photo.jpg" alt="bandeau">
            </div> -->
            <main>
                  <div>
                        <?=$content?>
                  </div>
            </main>
            <footer class="my-2">

            </footer>

      </div>

</body>

</html>