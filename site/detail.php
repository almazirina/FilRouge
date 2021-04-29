<?php
include("header.php");

$db = connexionBase(); // Appel de la fonction de connexion

$id = $_GET['id'];

// Récupération des informations du produit
$req_produits = ('SELECT * FROM produits join categories on categories.cat_id=produits.pro_cat_id WHERE pro_id=' . $id);
$res_produits = $db->query($req_produits);
// Renvoi de l'enregistrement sous forme d'un objet
$produit = $res_produits->fetch(PDO::FETCH_OBJ);
$res_produits->closeCursor();

// Récupération de la liste des catégories
$req_categories = ('SELECT * FROM categories');
$res_categories = $db->query($req_categories);
// Renvoi de l'enregistrement sous forme d'un objet
$categories = $res_categories->fetchAll(PDO::FETCH_OBJ);
$res_categories->closeCursor();

?>


<div class="row justify-content-center">
  <div class="col-lg-8 col-sm-10">

    <form method="POST" action="update_script.php">
      <div class="form-group">
        <label>ID :</label>
        <input type="text" readonly id="pro_id" name="pro_id" class="form-control" value="<?php echo $produit->pro_id; ?>"><br>

        <label>Catègorie :</label>
        <select id="pro_cat_id" name="pro_cat_id" class="form-control" value="<?php echo $produit->cat_id; ?>">

          <?php foreach ($categories as $categ) { ?>
            <option value="<?php echo $categ->cat_id; ?>" <?= ($categ->cat_id == $produit->cat_id) ? 'selected' : ''; ?>><?php echo $categ->cat_nom; ?></option>
          <?php } ?>
        </select>
        <br>

        <label>Nom :</label>
        <input type="text" id="pro_nom" name="pro_nom" class="form-control" value="<?php echo $produit->pro_nom; ?>"><br>

        <label>Libellè :</label>
        <input type="text" id="pro_lib" name="pro_lib" class="form-control" value="<?php echo $produit->pro_lib; ?>"><br>

        <label>Description :</label>
        <textarea rows="3" id="pro_desc" name="pro_desc" class="form-control"><?php echo $produit->pro_desc; ?></textarea><br>

        <label>Prix :</label>
        <input type="number" id="pro_prix" name="pro_prix" class="form-control" value="<?php echo $produit->pro_prix; ?>"><br>

        <label>Stock :</label>
        <input type="number" id="pro_stock" name="pro_stock" class="form-control" value="<?php echo $produit->pro_stock; ?>"><br>

        <label>Produit publié ?</label>
        <div class="form-check mb-3">
          <div class="custom-control custom-control-inline custom-radio">
            <input class="custom-control-input" type="radio" id="oui" name="pro_publ" value="1" <?= ($produit->pro_publ == 1) ? 'checked' : '' ?>>
            <label class="custom-control-label" for="oui">Oui</label>
          </div>

          <div class="custom-control custom-control-inline custom-radio">
            <input class="custom-control-input" type="radio" id="non" name="pro_publ" value="0" <?= ($produit->pro_publ == 0) ? 'checked' : '' ?>>
            <label class="custom-control-label" for="non">Non</label>
          </div>
        </div>
        <br>

        <label>Date d'ajout :</label>
        <input type="text" disabled id="pro_date_ajout" name="pro_date_ajout" class="form-control" value="<?php echo $produit->pro_date_ajout; ?>"><br>

        <!--<a href="details.php?id=<?php echo intval($_GET['id']) ?>" class="btn btn-secondary mb-3" role="button">Retour</a>-->
        <a href="liste.php" class="btn btn-secondary mb-3" role="button">Retour</a>
        <input type="submit" class="btn btn-warning ml-3 mb-3" value="Enregistrer les modifications">
        <!--<a class="btn btn-warning ml-3 mb-3" role="submit" href="update_form.php?id=<?php echo intval($_GET['id']) ?>">Enregistrer les modifications</a>-->
        <a class="btn btn-danger ml-3 mb-3" role="button" href="delete_script.php?id=<?php echo intval($_GET['id']) ?>">Supprimer ce produit</a>
      </div>

    </form>
  </div>
</div>

<?php
include("footer.php");
?>