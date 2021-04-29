<?php
$nom = ($_POST['nom']);
$prenom = ($_POST['prenom']);
$ddn = ($_POST['ddn']);
$code = ($_POST['code']);
$mail = ($_POST['email']);
$quest = ($_POST['question']);

if (empty($_POST["nom"]))
{       
    $erNom = "Veuillez entrer un nom !";
} elseif(!preg_match("#[ a-zA-Z '-]+#", $_POST['nom']))
{
    $erNom = "Veuillez entrer un nom valide !";
}
if (empty($_POST["prenom"]))
{
    $erPrenom = "Veuillez entrer un prenom !";
} elseif(!preg_match("#[ a-zA-Z '-]+#", $_POST['prenom'])){
    $erPrenom = "Veuillez entrer un prenom valide !";
}
if (empty($_POST["ddn"]))
{
    $erDdn = "Veuillez entrer une date de naissance !";
} elseif(!preg_match("#[0-9]{4}\-[0-9]{2}\-[0-9]{2}#", $_POST['ddn'])){
    $erDdn = "Veuillez entrer une date de naissance format JJ/MM/AAAA !";
}
if (empty($_POST["code"]))
{ 
    $erCode = "Veuillez entrer un code postal valide !";
}  elseif(!preg_match("#[0-9]{5}#", $_POST['code'])){
    $erCode = "Veuillez entrer un code postal valide à 5 chiffres !";
}
if (empty($_POST['email']))
{
    $erMail = "Entrez votre adresse mail valide !";
} elseif(!preg_match("#[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z]+[.]{1}[a-z]{2,3}#", $_POST['email'])){
    $erMail = "Entrez un mail valide, il doit comporter au moins les caractères '@' et '.' !";
}
if (empty($_POST['question']))
{
    $erQuest = "Entrez votre question!";
} 
if (empty($_POST['trait_inf']))
{
    $erAccord = "Veuillez accepter le traitement informatique de ce formulaire!";
}

if (empty($erNom) && empty($erPrenom) && empty($erDdn) && empty($erCode) && empty($erMail) && empty($erQuest) && empty($erAccord)) {
    //echo "<p>Merci pour votre enregistrement !</p>";
    //echo "<p>Vous avez saisi : </p>";
    //echo "<p> Nom :$nom ; Prenom :$prenom ; Date de naissance :$ddn </p>";
    //echo "<p> Code postal :$code ; Email :$mail ; Votre question :$quest.</p>";
    unset($_POST);
    $contact_valid = "<p>Merci pour votre enregistrement !</p>";
} else {
}

include('contact.php');


?>  