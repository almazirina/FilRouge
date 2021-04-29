<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=0">
    <title>Accueil</title>
    <!--la feuille de style CSS de Bootstrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    
    <?php
    require "connexion_bdd.php"; // Inclusion de notre bibliothèque de fonctions
    ?>
</head>

<body>

    <div class="container content my-2">
        <header class="mb-3">
            <div class="row">
            <div class="image">
                <div class="d-none d-sm-none d-lg-block col-lg-12"><!--razobratcya-->
                    <img src="img/HEADER/logo village green.png" id="logo" class="img-fluid rounded float-left" alt="logo" title="logo">
                    <img src="img/HEADER/3 bandes.png" id="nav" alt="bandes" class="img-fluid">
                </div>
            </div>

            <div class="menu">
                    
                <!-- menu espace client -->
            <div class="row py-0 my-0 pr-5 mr-5">
                <div class="col-8">
                </div>
                <div class="col-4 col-sm-4">
                    <nav class="">
                        <div class="">
                            <ul class="navbar">
                                <li class="nav">
                                    <a class="nav-link" href="list.php">Infos</a>
                                </li>
                                <li class="nav">
                                    <a class="nav-link" href="#">Espace client</a>
                                </li>
                                <li class="nav">
                                    <a class="nav-link" href="img\HEADER\picto panier.png"></a> <!--a corriger on les voit pas -->
                                </li>
                                <li class="nav">
                                    <a class="nav-link" href="img\HEADER\picto pays.png"></a> <!--a corriger on les voit pas -->
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
                <!--menu haut-->
                <div class="col-6">
                </div>
                <div class="col-6 col-sm-6">
                    <nav class="">
                        <div class="">
                            <ul class="navbar">
                                <li class="nav">
                                    <a class="nav-link" href="liste.php">Produits</a>
                                </li>
                                <li class="nav">
                                    <a class="nav-link" href="#">Service</a>
                                </li>
                                <li class="nav">
                                    <a class="nav-link" href="#">Aide</a>
                                </li>
                                <li class="nav">
                                    <a class="nav-link" href="#">A propos</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
                <!--menu produits -->
                <div class="col-4">
                </div>
                <div class="col-8 col-sm-8">
                    <nav class="navbar transparent  navbar-expand-lg navbar-inverse">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span></button>
                        <div class="collapse navbar-collapse justify-content-between justify-content-sm-between" id="collapsibleNavbar">
                            <ul class="navbar-nav">
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Guitares & Basses</a>
                                    <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Guitare Electrique</a>
                                    <a class="dropdown-item" href="#">Guitare Acoustique</a>
                                    <a class="dropdown-item" href="#">Guitare Classique</a>
                                    <a class="dropdown-item" href="#">Basse Electrique</a>
                                    <a class="dropdown-item" href="#">Basse Acoustique</a>
                                    <a class="dropdown-item" href="#">Basse Classique</a>
                                    <a class="dropdown-item" href="#">Autres instruments à cordes pincées</a>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="liste.php">Amplis & Effets</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="contact.php">Claviers & Pianos</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="contact.php">Synthés & Sampleurs</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="home.php">Home Studio</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="liste.php">Casques</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="contact.php">Micros & HF</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="contact.php">Espace DJ</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
            </div>
            </div>
        </header>