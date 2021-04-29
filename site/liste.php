<?php
include("header.php");
$db = connexionBase(); // Appel de la fonction de connexion

$requete = $db->prepare("SELECT * FROM produits WHERE pro_publ = 1 ORDER BY pro_date_ajout DESC");
$requete->execute();

$produit = $requete->fetch(PDO::FETCH_OBJ);
?>

<div class="row">
    <div class="col-12 col-sm-12 text-center">
        <a class="btn btn-primary ml-3 mb-3" role="button" href="produits_ajout.php">Ajouter un produit</a>
    </div>
</div>

<?php
if (empty($produit->pro_id)) {
    // Pas d'enregistrement
    echo "La table est vide";
} else {
?>

<div class="row">
    <div class="col-12 col-sm-12">
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr class="table-secondary">
                        <!--<th>Photo</th>-->
                        <th>ID</th>
                        <th>Nom</th>
                        <th class='d-none d-md-table-cell'>Libellé</th>
                        <th class='d-none d-md-table-cell'>Description</th>
                        <th>Prix</th>
                        <th class='d-none d-md-table-cell'>Stock</th>
                        <th></th>
                    </tr>
                </thead>

                <?php
                while (isset($produit->pro_id)) {
                    echo "<tr>";
                    //echo "<td>" . $produit->pro_photo . "</td>";
                    echo "<td>" . $produit->pro_id . "</td>";
                    echo "<td>" . $produit->pro_nom . "</td>";
                    echo "<td class='d-none d-md-table-cell'>" . $produit->pro_lib . "</td>";
                    echo "<td class='d-none d-lg-table-cell'>" . $produit->pro_desc . "</td>";
                    echo "<td>" . $produit->pro_prix . "</td>";
                    echo "<td class='d-none d-md-table-cell'>" . $produit->pro_stock . "</td>";
                    echo '<td><a class="btn btn-warning ml-3 mb-3" role="button" href="detail.php?id=' . $produit->pro_id . '" title=' . $produit->pro_nom . '><b>+</b></a></td>';
                    echo "</tr>";
                    $produit = $requete->fetch(PDO::FETCH_OBJ);
                }
                ?>

            </table>
        </div>
    </div>
</div>
</div> <!-- fermeture de la div class="container" ouverte dans le header -->

<?php

}
$requete->closeCursor();
include("footer.php");
?>