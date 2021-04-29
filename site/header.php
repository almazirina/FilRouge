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

    <div class="container content mt-0 mb-0">
        <header class="mb-5">
            <div class="row mb-2">
                <!--
                <img src="Charte/HEADER/logo village green.png" alt="logo_village_green" width="20%">
                <img src="Charte/HEADER/3 bandes.png" alt="bandes" width="70%">  
            </div>
        </div>

            <div class="row">-->
                <div class="d-none d-sm-none d-lg-block col-lg-12">
                    <img src="img/HEADER/logo village green.png" id="logo" class="img-fluid rounded float-left" alt="logo" title="logo">
                    <img src="img/HEADER/3 bandes.png" id="nav" alt="bandes" class="img-fluid">
                </div>
            </div>

            <!--menu haut-->
            <div class="row">
                <div class="col-12 col-sm-12">
                    <nav class="navbar navbar-expand-lg bg-light navbar-light">
                        <span class="navbar-brand" href="#">Village Green</span>

                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse justify-content-between justify-content-sm-between" id="collapsibleNavbar">
                            <ul class="navbar-nav">
                                <li class="nav-item active">
                                    <a class="nav-link" href="home.php">Accueil</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="liste.php">Produits</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="contact.php">Contact</a>
                                </li>
                            </ul>
                            <form class="form-inline">
                                <input class="form-control mr-sm-2" type="search" placeholder="Votre produit" aria-label="Votre produit">
                                <button class="btn btn-outline-dark my-2 my-sm-0" type="submit">Rechercher</button>
                            </form>
                        </div>
                    </nav>

                </div>
            </div>
        </header>