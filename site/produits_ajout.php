<?php
include("header.php");

$db = connexionBase(); // Appel de la fonction de connexion

// Récupération de la liste des catégories
$req_categories = ('SELECT * FROM categories');
$res_categories = $db->query($req_categories);
// Renvoi de l'enregistrement sous forme d'un objet
$categories = $res_categories->fetchAll(PDO::FETCH_OBJ);
$res_categories->closeCursor();
?>

<div class="row justify-content-center">
  <div class="col-lg-8 col-sm-10">
    <h3 class="row justify-content-center">Formulaire d'ajout.</h3>
    <hr>
    <form action="produits_ajout_script.php" method="POST">
      <div class="form-group">
        <label>Catègorie :</label>
        <select id="pro_cat_id" name="pro_cat_id" class="form-control" value="">

          <?php foreach ($categories as $categ) { ?>
            <option value="<?php echo $categ->cat_id; ?>"><?php echo $categ->cat_nom; ?></option>
          <?php } ?>
        </select>
        <br>

        <label>Nom :</label>
        <input type="text" id="pro_nom" name="pro_nom" class="form-control" value=""><br>

        <label>Libellè :</label>
        <input type="text" id="pro_lib" name="pro_lib" class="form-control" value=""><br>

        <label>Description :</label>
        <textarea rows="3" id="pro_desc" name="pro_desc" class="form-control"></textarea><br>

        <label>Prix :</label>
        <input type="number" id="pro_prix" name="pro_prix" class="form-control" value=""><br>

        <label>Stock :</label>
        <input type="number" id="pro_stock" name="pro_stock" class="form-control" value=""><br>

        <label>Produit publié ?</label>
        <div class="form-check mb-3">
          <div class="custom-control custom-control-inline custom-radio">
            <input class="custom-control-input" type="radio" id="oui" name="pro_publ" value="1" checked>
            <label class="custom-control-label" for="oui">Oui</label>
          </div>

          <div class="custom-control custom-control-inline custom-radio">
            <input class="custom-control-input" type="radio" id="non" name="pro_publ" value="0">
            <label class="custom-control-label" for="non">Non</label>
          </div>
        </div>
        <br>
        
        <a href="liste.php" class="btn btn-secondary mb-3" role="button">Retour</a>
        <input type="reset" class="btn btn-secondary mb-3" value="Annuler">
        <input type="submit" class="btn btn-warning mb-3" value="Valider">
      </div>

    </form>
  </div>
</div>

<?php
include("footer.php");
?>