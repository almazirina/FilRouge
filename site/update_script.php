<?php
require "connexion_bdd.php";

$id = $_POST["pro_id"];
$nom = $_POST['pro_nom'];
$categorie = $_POST['pro_cat_id'];
$libelle = $_POST['pro_lib'];
$description = $_POST['pro_desc'];
$prix = $_POST['pro_prix'];
$stock = $_POST['pro_stock'];
$publ = intval($_POST['pro_publ']);

try {
        $db = connexionBase();
        
        // Construction de la requête Update sans injection SQL

        $requete = $db->prepare("UPDATE produits SET pro_nom=:pro_nom, pro_cat_id=:pro_cat_id, pro_lib=:pro_lib,
pro_desc=:pro_desc, pro_prix=:pro_prix, pro_stock=:pro_stock, pro_publ=:pro_publ
WHERE pro_id=:pro_id");

        $requete->bindValue(':pro_nom', $nom, PDO::PARAM_STR);
        $requete->bindValue(':pro_cat_id', $categorie, PDO::PARAM_INT);
        $requete->bindValue(':pro_lib', $libelle, PDO::PARAM_STR);
        $requete->bindValue(':pro_desc', $description, PDO::PARAM_STR);
        $requete->bindValue(':pro_prix', $prix, PDO::PARAM_INT);
        $requete->bindValue(':pro_stock', $stock, PDO::PARAM_INT);
        $requete->bindValue(':pro_publ', $publ, PDO::PARAM_BOOL);
        $requete->bindValue(':pro_id', $id, PDO::PARAM_STR);

        $requete->execute();

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
header("Location: detail.php?id=" . $id);
exit;
