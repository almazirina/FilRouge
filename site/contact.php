<?php
include("header.php");
?>

<!--formulaire-->

<?php
if (isset($contact_valid)) {
    echo "<div class='alert alert-success'>$contact_valid</div>";
}
?>

<div class="row m-3">
    <p>*Ces zones sont obligatoires</p>
</div>
<div class="row m-3">
    <h1>Vos Coordonnées</h1>
</div>


<form method="POST" action="contact_script.php" id="myForm">
    <div class="col-10 justify-content-center">
        <div class="form-group m-3 ">
            <label for="nom" class="col-form-label">Nom*</label>
            <input type="text" class="form-control" name="nom" value="<?php if (isset($_POST['nom'])) { echo $_POST['nom']; } ?>">
            <span class="p-3 text-danger" id="alert_nom"><?php if (isset($erNom)) { echo $erNom; } ?></span>
        </div>

        <div class="form-group m-3">
            <label for="prénom">Prénom*</label>
            <input type="text" class="form-control" name="prenom" value="<?php if (isset($_POST['prenom'])) { echo $_POST['prenom']; } ?>">
            <span class="p-3 text-danger" id="alert_prénom"><?php if (isset($erPrenom)) { echo $erPrenom; } ?></span>
        </div>

        <div class="form-group m-3">
            <label for="sexe">Sexe*</label>
            <!-- pour info, un RADIO doit avoir le même name -->
            <div class="form-row">
                <div class="custom-control custom-control-inline custom-radio">
                    <input class="custom-control-input" type="radio" id="femme" name="sexe" value="option1" checked>
                    <!-- Rappel : le 'for' du label = 'id' de l'input -->
                    <label class="custom-control-label" for="femme">Féminin</label>
                </div>

                <div class="custom-control custom-control-inline custom-radio">
                    <input class="custom-control-input" type="radio" id="homme" name="sexe" value="option2">
                    <label class="custom-control-label" for="homme">Masculin</label>
                </div>
            </div>
            <span id="alert_sexe"></span>
        </div>

        <div class="form-group m-3">
            <label for="date">Date de naissance* : </label>
            <input type="date" name="ddn" class="form-control" placeholder="jj/mm/aaaa" value="<?php if (isset($_POST['ddn'])) { echo $_POST['ddn']; } ?>">
            <span class="p-3 text-danger" id="alert_date"><?php if (isset($erDdn)) { echo $erDdn; } ?></span>
        </div>

        <div class="form-group m-3">
            <label for="code">Code postal*</label>
            <input type="text" class="form-control" name="code" value="<?php if (isset($_POST['code'])) { echo $_POST['code']; } ?>">
            <span class="p-3 text-danger" id="alert_cp"><?php if (isset($erCode)) { echo $erCode; } ?></span>
        </div>

        <div class="form-group m-3">
            <label for="adresse">Adresse</label>
            <input type="text" class="form-control">
        </div>

        <div class="form-group m-3">
            <label for="ville">Ville</label>
            <input type="text" class="form-control">
        </div>

        <div class="form-group m-3">
            <label for="courriel">Email*</label>
            <input type="email" class="form-control" name="email" value="<?php if (isset($_POST['email'])) { echo $_POST['email']; } ?>">
            <span class="p-3 text-danger" id="alert_mail"><?php if (isset($erMail)) { echo $erMail; } ?></span>
        </div>

        <div class="row m-3">
            <h1>Votre demande</h1>
        </div>

        <div class="form-group m-3">
            <label for="sujet">Sujet</label>
            <select class="form-control">
                <option>Veuillez sélectionner un sujet</option>
                <option>Mes commandes</option>
                <option>Question sur un produit</option>
                <option>Réclamation</option>
                <option>Autres</option>
            </select>
        </div>

        <div class="form-group m-3">
            <label for="question">Votre question*:</label>
            <textarea class="form-control" name="question" rows="3"><?php if (isset($_POST['question'])) { echo $_POST['question']; } ?></textarea>
            <span class="p-3 text-danger" id="alert_question"><?php if (isset($erQuest)) { echo $erQuest; } ?></span>
        </div>

        <div class="form-group form-check m-3">
            <input type="checkbox" class="form-check-input" name="trait_inf">
            <label class="form-check-label">J'accepte le traitement informatique de ce formulaire.*</label><br>
            <span class="p-3 text-danger" id="alert_accord"><?php if (isset($erAccord)) { echo $erAccord; } ?></span>
        </div>

        <input type="submit" id="myForm" class="btn btn-primary ml-3 mb-3" value="Envoyer">
        <input type="reset" class="btn btn-primary mb-3" value="Annuler">
    </div>
</form>



<?php
include("footer.php");
?>