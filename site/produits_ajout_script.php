<?php
require "connexion_bdd.php";

$pro_nom = $_POST['pro_nom'];
$pro_lib = $_POST['pro_lib'];
$pro_cat = $_POST['pro_cat_id'];
$pro_lib = $_POST['pro_lib'];
$pro_desc = $_POST['pro_desc'];
$pro_prix = $_POST['pro_prix'];
$pro_stock = $_POST['pro_stock'];
//$ph=$_POST['photo'];
$pro_publ = $_POST['pro_publ'];
$pro_date_ajout = new DateTime();


try {

        $db = connexionBase();
        // Construction de la requête INSERT sans injection SQL

        $requete = $db->prepare("INSERT INTO produits (pro_fou_id, pro_cat_id, pro_nom, pro_lib, pro_desc, pro_prix, pro_stock, pro_publ, pro_date_ajout) VALUES (?,?,?,?,?,?,?,?, now())");

        //Exécution de la requête :
        $result = $requete->execute([1, $pro_cat, $pro_nom, $pro_lib, $pro_desc, $pro_prix, $pro_stock, $pro_publ]);
        
        // Libération de la connexion au serveur de BDD
        $requete->closeCursor();
}

// Gestion des erreurs
catch (Exception $e) {

        echo "La connexion à la base de données a échoué ! <br>";
        echo "Merci de bien vérifier vos paramètres de connexion ...<br>";
        echo "Erreur : " . $e->getMessage() . "<br>";
        echo "N° : " . $e->getCode();
        die("Fin du script");
}

// Redirection vers la page liste.php
header("Location: liste.php");
exit;
